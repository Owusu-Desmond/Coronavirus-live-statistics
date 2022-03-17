#library
library(dplyr)
library(readr)
library(ggplot2)
library(caret) #for train, train.control
library(neuralnet) # for neural net
library(rattle ) # for showing the graphs
library(rpart)
library(forecast)
library(ggplot2)


#Setting directory
setwd('C:\\Users\\HP\\Downloads\\fyp')


#loading csv
data <- read.csv("owid-covid-data.csv")

# Dimensions of data set
dim(data)
# Printing first six rows of the first six columns
head(data[,1:6])

# Converting date variable from character to date
data$date = as.Date(data$date, format = "%Y-%m-%d")

#SEA Countries 11
SEA_countries <- c("Myanmar","Brunei","Cambodia","Timor","Indonesia","Laos","Malaysia","Philippines","Singapore","Thailand","Vietnam")

## Summarising data grouped by date and location
df.SEA <- data %>% 
  filter(location %in% SEA_countries) %>%
  select(location, date, population, people_fully_vaccinated, 
         people_fully_vaccinated_per_hundred, life_expectancy) %>%
  group_by(location, date) %>%
  summarise(population = mean(population),
            people_fully_vaccinated = max(people_fully_vaccinated),
            people_fully_vaccinated_per_hundred = max(people_fully_vaccinated_per_hundred),
            life_expectancy = mean(life_expectancy)) %>%
  mutate(year = format(date, "%Y")) %>%
  mutate(day = format(date, "%d")) %>%
  filter(year == 2021) %>%
  arrange(date) %>%
  na.omit()

# Renaming variables
names(df.SEA)[names(df.SEA) == 'people_fully_vaccinated'] <- 'fully_vaccinated'
names(df.SEA)[names(df.SEA) == 'people_fully_vaccinated_per_hundred'] <- 'fully_vaccinated_100'
head(df.SEA)

## Grouping data by date and summarizing variables
df.SEA2 = df.SEA %>%
  select(date, population, fully_vaccinated, fully_vaccinated_100, life_expectancy) %>%
  group_by(date) %>%
  summarise(population = mean(population),
            fully_vaccinated = mean(fully_vaccinated),
            fully_vaccinated_100 = mean(fully_vaccinated_100),
            life_expectancy = mean(life_expectancy))
head(df.SEA2)

# Simple feature normalization
df.SEA2$population = df.SEA2$population/max(df.SEA2$population)
df.SEA2$fully_vaccinated = df.SEA2$fully_vaccinated/max(df.SEA2$fully_vaccinated)
df.SEA2$fully_vaccinated_100 = df.SEA2$fully_vaccinated_100/max(df.SEA2$fully_vaccinated_100)

# Convert to time series
df.SEA.ANN = ts(data = df.SEA2[-1], frequency = 12)
head(df.SEA.ANN, 10)

# Plotting time-series
plot(df.SEA.ANN, main = "Variation in variables with time")



#ANN- Building Artificial Neural Network Model
set.seed(1)

## Splitting data to training and testing
TrainingIndex <- createDataPartition(df.SEA.ANN[,2], p=0.7, list = FALSE)
Training <-df.SEA.ANN[TrainingIndex,] # Training Set
Testing <- df.SEA.ANN[-TrainingIndex,] # Testing Set

## Building Neural Network Model
ann_model = neuralnet(formula = fully_vaccinated ~ ., 
                      data = Training, 
                      hidden = 2, 
                      err.fct = "sse", 
                      linear.output = FALSE, 
                      stepmax=1e7)

ann_model$result.matrix

# Plotting ANN model
plot(ann_model)

# Make predictions
predictions.test <- compute(ann_model, Testing)
results.test <- data.frame(actual = Testing[,2], prediction = predictions.test$net.result)
head(results.test)

# Saving actual and predicted data in excel file
writexl::write_xlsx(x = results.test, path = "predicted_ANN.xlsx")

# Visualizing predictions for next 20 days
autoplot(forecast(results.test[,1], h=20)) +
  ylab("People fully vaccinated") +
  ggtitle("Forecasts from ANN model")


# Confusion matrix
roundedresults <- sapply(results.test, round, digits = 0)
roundedresultsdf = data.frame(roundedresults)
attach(roundedresultsdf)
ConfMat = table(actual, prediction)
ConfMat

# Model accuracy - 97.9%
accuracy <- sum(diag(ConfMat))/sum(ConfMat)
accuracy

# SVM Model
## Building SVM Model
svm.model <- train(fully_vaccinated ~ ., 
                   data = Training,
                   method="knn",
                   preProcess=c("center", "scale"),
                   tuneLength = 10,
                   trControl= trainControl(method="cv"))


print(svm.model)

plot(svm.model)

## Making predictions from SVM model
predictions <- predict(svm.model, Testing)
head(predictions, 20)

results.svm <- data.frame(actual = Testing[,2], prediction = predictions)
head(results.svm, 20)

# Saving actual and predicted data in excel file
writexl::write_xlsx(x = results.svm, path = "predicted_SVM.xlsx")

## Visualizing predictions
autoplot(forecast(results.svm[,1], h=20)) +
  ylab("People fully vaccinated") +
  xlab("Time (days)") +
  ggtitle("Forecasts from SVM model") 

# Confusion Matrix
roundedresults.svm <- sapply(results.svm, round, digits = 0)
roundedresults.svm.df = data.frame(roundedresults.svm)
attach(roundedresults.svm.df)
ConfMat.svm = table(actual, prediction)
ConfMat.svm

## SVM model accuracy
accuracy.svm <- sum(diag(ConfMat.svm))/sum(ConfMat.svm)
accuracy.svm

# CART model
## Building CART model

# Fit the model
fit.rpart <- rpart(fully_vaccinated ~ ., 
                   data= as.data.frame(Training))
fit.rpart

## Fancy plot of CART model
fancyRpartPlot(fit.rpart, main="Rpart model plot", caption = "")

## Predict data from CART model
rpart_pred = predict(fit.rpart, as.data.frame(Testing))
head(rpart_pred, 20)

results.rpart <- data.frame(actual = Testing[,2], prediction = rpart_pred)
head(results.rpart, 20)

# Saving actual and predicted data in excel file
writexl::write_xlsx(x = results.rpart, path = "predicted_CART.xlsx")


## Visualizing predictions
autoplot(forecast(results.rpart[,1], h=20)) +
  ylab("People fully vaccinated") +
  xlab("Time (days)") +
  ggtitle("Forecasts from CART model")

# Confusion Matrix
roundedresults.rpart <- sapply(results.rpart, round, digits = 0)
roundedresults.rpart.df = data.frame(roundedresults.rpart)
attach(roundedresults.rpart.df)
ConfMat.rpart = table(actual, prediction)
ConfMat.rpart

## CART model accuracy
accuracy.rpart <- sum(diag(ConfMat.rpart))/sum(ConfMat.rpart)
accuracy.rpart
