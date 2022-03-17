<?php
    class Database {
        private $dbhost = DB_HOST;
        private $dbuser = DB_USER;
        private $dbpass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbconn;
        private $stmt; 
        public function __construct(){
            try {
                $this->dbconn = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
                if ($this->dbconn->connect_error) {
                    throw new Exception("Unable to connect to Database");
                }
            } catch (Exception $e) {
                echo "Error occured at " .$e->getFile(). " in class " . get_class($e) . " on line ".  $e->getLine(). " saying " .$e->getMessage();
            }
            
        }

        public function escapeString($data){
            return $this->dbconn->real_escape_string($data);
            
        }
        public function fetchUserInfo($email){
            $this->stmt = "SELECT * FROM users where Email ='$email'";
            return $this->dbconn->query($this->stmt);
        }

        public function addOwidCovidData($data){
            $this->stmt = $this->dbconn->prepare("INSERT INTO owid_covid_data (
                    iso_code,continent,location,date,total_cases,new_cases,new_cases_smoothed,total_deaths,new_deaths,new_deaths_smoothed,
                    total_cases_per_million,new_cases_per_million,new_cases_smoothed_per_million,total_deaths_per_million,new_deaths_per_million,
                    new_deaths_smoothed_per_million,reproduction_rate,icu_patients,icu_patients_per_million,hosp_patients,
                    hosp_patients_per_million,weekly_icu_admissions,weekly_icu_admissions_per_million,weekly_hosp_admissions,weekly_hosp_admissions_per_million,
                    new_tests,total_tests,total_tests_per_thousand,new_tests_per_thousand,new_tests_smoothed,new_tests_smoothed_per_thousand,positive_rate,
                    tests_per_case,tests_units,total_vaccinations,people_vaccinated,people_fully_vaccinated,
                    total_boosters,new_vaccinations,new_vaccinations_smoothed,total_vaccinations_per_hundred,
                    people_vaccinated_per_hundred,people_fully_vaccinated_per_hundred,total_boosters_per_hundred,new_vaccinations_smoothed_per_million,
                    new_people_vaccinated_smoothed,new_people_vaccinated_smoothed_per_hundred,stringency_index,population,
                    population_density,median_age,aged_65_older,aged_70_older,gdp_per_capita,extreme_poverty,cardiovasc_death_rate,
                    diabetes_prevalence,female_smokers,male_smokers,handwashing_facilities,hospital_beds_per_thousand,life_expectancy,human_development_index,
                    excess_mortality_cumulative_absolute,excess_mortality_cumulative,excess_mortality,excess_mortality_cumulative_per_million
                    ) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $this->stmt->bind_param("sssdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd",
            $data['iso_code'],
            $data['continent'],
            $data['location'],
            $data['date'],
            $data['total_cases'],
            $data['new_cases'],
            $data['new_cases_smoothed'],
            $data['total_deaths'],
            $data['new_deaths'],
            $data['new_deaths_smoothed'],
            $data['total_cases_per_million'],
            $data['new_cases_per_million'],
            $data['new_cases_smoothed_per_million'],
            $data['total_deaths_per_million'],
            $data['new_deaths_per_million'],
            $data['new_deaths_smoothed_per_million'],
            $data['reproduction_rate'],
            $data['icu_patients'],
            $data['icu_patients_per_million'],
            $data['hosp_patients'],
            $data['hosp_patients_per_million'],
            $data['weekly_icu_admissions'],
            $data['weekly_icu_admissions_per_million'],
            $data['weekly_hosp_admissions'],
            $data['weekly_hosp_admissions_per_million'],
            $data['new_tests'],
            $data['total_tests'],
            $data['total_tests_per_thousand'],
            $data['new_tests_per_thousand'],
            $data['new_tests_smoothed'],
            $data['new_tests_smoothed_per_thousand'],
            $data['positive_rate'],
            $data['tests_per_case'],
            $data['tests_units'],
            $data['total_vaccinations'],
            $data['people_vaccinated'],
            $data['people_fully_vaccinated'],
            $data['total_boosters'],
            $data['new_vaccinations'],
            $data['new_vaccinations_smoothed'],
            $data['total_vaccinations_per_hundred'],
            $data['people_vaccinated_per_hundred'],
            $data['people_fully_vaccinated_per_hundred'],
            $data['total_boosters_per_hundred'],
            $data['new_vaccinations_smoothed_per_million'],
            $data['new_people_vaccinated_smoothed'],
            $data['new_people_vaccinated_smoothed_per_hundred'],
            $data['stringency_index'],
            $data['population'],
            $data['population_density'],
            $data['median_age'],
            $data['aged_65_older'],
            $data['aged_70_older'],
            $data['gdp_per_capita'],
            $data['extreme_poverty'],
            $data['cardiovasc_death_rate'],
            $data['diabetes_prevalence'],
            $data['female_smokers'],
            $data['male_smokers'],
            $data['handwashing_facilities'],
            $data['hospital_beds_per_thousand'],
            $data['life_expectancy'],
            $data['human_development_index'],
            $data['excess_mortality_cumulative_absolute'],
            $data['excess_mortality_cumulative'],
            $data['excess_mortality'],
            $data['excess_mortality_cumulative_per_million']
                     );
                return $this->stmt->execute();
        }

        public function getTableData(){
            $this->stmt = $this->dbconn->query("SELECT * FROM owid_covid_data");
            $this->stmt= $this->stmt->fetch_assoc();
            return $this->stmt;
          }

        public function registerUser($firstname,$lastname,$username,$email,$password){
            try {
                $this->stmt = "INSERT INTO users (firstname,lastname,username,email,password) VALUES ('$firstname','$lastname','$username','$email','$password')";
                if ($this->dbconn->query($this->stmt) === TRUE) {
                    header("location:userPage.php?");
                }else {
                    throw new Exception ("Failed to insert a record");
                }
            } catch (Exception $e) {
                echo "Error occured at " .$e->getFile(). " in class " . get_class($e) . " on line ".  $e->getLine(). " saying " .$e->getMessage();
            }
            
        }

        // public function checkIfTableExit($tableName){
        //     $this->stmt = "SELECT  1 from" . "$tableName";
        //     if ($this->dbconn->query($this->stmt) === TRUE) {
        //         return false;
        //     }else{
        //         return true;   
        //     }
        // }

        public function storeUserInfo($username,$email){
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
        }
        // public function validation($email,$password1,$password2){
        //     try {
                
        //     } catch (\Throwable $th) {
        //         //throw $th;
        //     }
        // }
    }
    
?>
