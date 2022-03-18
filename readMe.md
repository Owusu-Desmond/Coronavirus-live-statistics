## COVID Live - Coronavirus Statistics

## Installation
Install xammp and mysql on your computer.

Run the SQL syntax `CREATA DATABASE sakila;` in your mysql terminal to create a database.

Also run the above SQL to create a table call *logins*.
```
use sakila;



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
);

CREATE TABLE `owid_covid_data` (
  `iso_code` varchar(50) NOT NULL,
  `continent` tinytext NOT NULL,
  `location` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `total_cases` float(10) NOT NULL,
  `new_cases` float(10) NOT NULL,
  `new_cases_smoothed` float(10) NOT NULL,
  `total_deaths` float(10) NOT NULL,
  `new_deaths` float(10) NOT NULL,
  `new_deaths_smoothed` float(10) NOT NULL,
  `total_cases_per_million` float(10) NOT NULL,
  `new_cases_per_million` float(10) NOT NULL,
  `new_cases_smoothed_per_million` float(10) NOT NULL,
  `total_deaths_per_million` float(10) NOT NULL,
  `new_deaths_per_million` float(10) NOT NULL,
  `new_deaths_smoothed_per_million` float(10) NOT NULL,
  `reproduction_rate` float(10) NOT NULL,
  `icu_patients` float(10) NOT NULL,
  `icu_patients_per_million` float(10) NOT NULL,
  `hosp_patients` float(10) NOT NULL,
  `hosp_patients_per_million` float(10) NOT NULL,
  `weekly_icu_admissions` float(10) NOT NULL,
  `weekly_icu_admissions_per_million` float(10) NOT NULL,
  `weekly_hosp_admissions` float(10) NOT NULL,
  `weekly_hosp_admissions_per_million` float(10) NOT NULL,
  `new_tests` float(10) NOT NULL,
  `total_tests` float(10) NOT NULL,
  `total_tests_per_thousand` float(10) NOT NULL,
  `new_tests_per_thousand` float(10) NOT NULL,
  `new_tests_smoothed` float(10) NOT NULL,
  `new_tests_smoothed_per_thousand` float(10) NOT NULL,
  `positive_rate` float(10) NOT NULL,
  `tests_per_case` float(10) NOT NULL,
  `tests_units` float(10) NOT NULL,
  `total_vaccinations` float(10) NOT NULL,
  `people_vaccinated` float(10) NOT NULL,
  `people_fully_vaccinated` float(10) NOT NULL,
  `total_boosters` float(10) NOT NULL,
  `new_vaccinations` float(10) NOT NULL,
  `new_vaccinations_smoothed` float(10) NOT NULL,
  `total_vaccinations_per_hundred` float(10) NOT NULL,
  `people_vaccinated_per_hundred` float(10) NOT NULL,
  `people_fully_vaccinated_per_hundred` float(10) NOT NULL,
  `total_boosters_per_hundred` float(10) NOT NULL,
  `new_vaccinations_smoothed_per_million` float(10) NOT NULL,
  `new_people_vaccinated_smoothed` float(10) NOT NULL,
  `new_people_vaccinated_smoothed_per_hundred` float(10) NOT NULL,
  `stringency_index` float(10) NOT NULL,
  `population` float(10) NOT NULL,
  `population_density` float(10) NOT NULL,
  `median_age` float(10) NOT NULL,
  `aged_65_older` float(10) NOT NULL,
  `aged_70_older` float(10) NOT NULL,
  `gdp_per_capita` float(10) NOT NULL,
  `extreme_poverty` float(10) NOT NULL,
  `cardiovasc_death_rate` float(10) NOT NULL,
  `diabetes_prevalence` float(10) NOT NULL,
  `female_smokers` float(10) NOT NULL,
  `male_smokers` float(10) NOT NULL,
  `handwashing_facilities` float(10) NOT NULL,
  `hospital_beds_per_thousand` float(10) NOT NULL,
  `life_expectancy` float(10) NOT NULL,
  `human_development_index` float(10) NOT NULL,
  `excess_mortality_cumulative_absolute` float(10) NOT NULL,
  `excess_mortality_cumulative` float(10) NOT NULL,
  `excess_mortality` float(10) NOT NULL,
  `excess_mortality_cumulative_per_million` float(10) NOT NULL
)
```

Update the following `config/config.php` file with your right database information
```
define("DB_HOST","YOUR DATABASE HOSTNAME HERE");
define("DB_USER","YOUR DATABASE USERNAME HERE");
define("DB_PASS","YOUR DATABASE PASSWORD HERE");
define("DB_NAME","YOUR DATABASE NAME HERE");

//example
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "Des@360");
define("DB_NAME", "users");
```
## Note :
Fail run all the sql in your mysql teminal, you will get an error.

Also first time of running the project it will took about 2 munites and return an error tell you the time to upload the csv data.

Run the project again and it won`t happen that way anymore because the csv data is already uploaded.


