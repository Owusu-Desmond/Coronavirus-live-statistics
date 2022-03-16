<?php 

$database = new Database();

$countryCovidData = [];

if(isset($_POST["uploadStudents"]) && !empty($_FILES["file"]["name"]))
{
$file = $_FILES["file"]["tmp_name"];
$file_open = fopen($file,"r");
$row = 0;
while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
{  
    if($row == 0) {
        $row++;
    }else {
        $countryCovidData['iso_code'] = $csv[1];
        $countryCovidData['continent'] = $csv[2];
        $countryCovidData['location'] = $csv[3];
        $countryCovidData['date'] = $csv[4];
        $countryCovidData['total_cases'] = $csv[5];
        $countryCovidData['new_cases'] = $csv[6];
        $countryCovidData['new_cases_smoothed'] = $csv[7];
        $countryCovidData['total_deaths'] = $csv[8];
        $countryCovidData['new_deaths'] = $csv[9];
        $countryCovidData['new_deaths_smoothed'] = $csv[10];
        $countryCovidData['total_cases_per_million'] = $csv[11];
        $countryCovidData['new_cases_per_million'] = $csv[12];
        $countryCovidData['new_cases_smoothed_per_million'] = $csv[13];
        $countryCovidData['total_deaths_per_million'] = $csv[14];
        $countryCovidData['new_deaths_per_million'] = $csv[15];
        $countryCovidData['new_deaths_smoothed_per_million'] = $csv[16];
        $countryCovidData['reproduction_rate'] = $csv[17];
        $countryCovidData['icu_patients'] = $csv[18];
        $countryCovidData['icu_patients_per_million'] = $csv[19];
        $countryCovidData['hosp_patients'] = $csv[20];
        $countryCovidData['hosp_patients_per_million'] = $csv[21];
        $countryCovidData['weekly_icu_admissions'] = $csv[22];
        $countryCovidData['weekly_icu_admissions_per_million'] = $csv[23];
        $countryCovidData['weekly_hosp_admissions'] = $csv[24];
        $countryCovidData['weekly_hosp_admissions_per_million'] = $csv[25];
        $countryCovidData['new_tests'] = $csv[26];
        $countryCovidData['total_tests'] = $csv[27];
        $countryCovidData['total_tests_per_thousand'] = $csv[28];
        $countryCovidData['new_tests_per_thousand'] = $csv[29];
        $countryCovidData['new_tests_smoothed'] = $csv[30];
        $countryCovidData['new_tests_smoothed_per_thousand'] = $csv[31];
        $countryCovidData['positive_rate'] = $csv[32];
        $countryCovidData['tests_per_case'] = $csv[33];
        $countryCovidData['tests_units'] = $csv[34];
        $countryCovidData['total_vaccinations'] = $csv[3];
        $countryCovidData['people_vaccinated'] = $csv[3];
        $countryCovidData['people_fully_vaccinated'] = $csv[3];
        $countryCovidData['total_boosters'] = $csv[3];
        $countryCovidData['new_vaccinations'] = $csv[3];
        $countryCovidData['new_vaccinations_smoothed'] = $csv[3];
        $countryCovidData['total_vaccinations_per_hundred'] = $csv[3];
        $countryCovidData['people_vaccinated_per_hundred'] = $csv[3];
        $countryCovidData['people_fully_vaccinated_per_hundred'] = $csv[3];
        $countryCovidData['total_boosters_per_hundred'] = $csv[3];
        $countryCovidData['new_vaccinations_smoothed_per_million'] = $csv[3];
        $countryCovidData['new_people_vaccinated_smoothed'] = $csv[3];
        $countryCovidData['new_people_vaccinated_smoothed_per_hundred'] = $csv[3];
        $countryCovidData['stringency_index'] = $csv[3];
        $countryCovidData['population'] = $csv[3];
        $countryCovidData['population_density'] = $csv[3];
        $countryCovidData['median_age'] = $csv[3];
        $countryCovidData['aged_65_older'] = $csv[3];
        $countryCovidData['aged_70_older'] = $csv[3];
        $countryCovidData['gdp_per_capita'] = $csv[3];
        $countryCovidData['extreme_poverty'] = $csv[3];
        $countryCovidData['cardiovasc_death_rate'] = $csv[3];
        $countryCovidData['diabetes_prevalence'] = $csv[3];
        $countryCovidData['female_smokers'] = $csv[3];
        $countryCovidData['male_smokers'] = $csv[3];
        $countryCovidData['handwashing_facilities'] = $csv[3];
        $countryCovidData['hospital_beds_per_thousand'] = $csv[3];
        $countryCovidData['life_expectancy'] = $csv[3];
        $countryCovidData['human_development_index'] = $csv[3];
        $countryCovidData['excess_mortality_cumulative_absolute'] = $csv[3];
        $countryCovidData['excess_mortality_cumulative'] = $csv[3];
        $countryCovidData['excess_mortality'] = $csv[3];
        $countryCovidData['excess_mortality_cumulative_per_million'] = $csv[3];
        $database->addOwidCovidData($countryCovidData);
        $row++;
    }
}
$row--;

}