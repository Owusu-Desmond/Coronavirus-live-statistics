<?php 
include "libraries/Database.php";
$db = new Database();
$countryCovidData = [];
if($db->checkIfTableHaveData()){
    $file_open = fopen("owid-covid-data.csv","r");
    $row = 0;
    while(($csv = fgetcsv($file_open, 160000, ",")) !== false)
    {
        if($row == 0) {
            $row++;
        }else {
            $countryCovidData['iso_code'] = $csv[0];
            $countryCovidData['continent'] = $csv[1];
            $countryCovidData['location'] = $csv[2];
            $countryCovidData['date'] = $csv[3];
            $countryCovidData['total_cases'] = $csv[4];
            $countryCovidData['new_cases'] = $csv[5];
            $countryCovidData['new_cases_smoothed'] = $csv[6];
            $countryCovidData['total_deaths'] = $csv[7];
            $countryCovidData['new_deaths'] = $csv[8];
            $countryCovidData['new_deaths_smoothed'] = $csv[9];
            $countryCovidData['total_cases_per_million'] = $csv[10];
            $countryCovidData['new_cases_per_million'] = $csv[11];
            $countryCovidData['new_cases_smoothed_per_million'] = $csv[12];
            $countryCovidData['total_deaths_per_million'] = $csv[13];
            $countryCovidData['new_deaths_per_million'] = $csv[14];
            $countryCovidData['new_deaths_smoothed_per_million'] = $csv[15];
            $countryCovidData['reproduction_rate'] = $csv[16];
            $countryCovidData['icu_patients'] = $csv[17];
            $countryCovidData['icu_patients_per_million'] = $csv[18];
            $countryCovidData['hosp_patients'] = $csv[19];
            $countryCovidData['hosp_patients_per_million'] = $csv[20];
            $countryCovidData['weekly_icu_admissions'] = $csv[21];
            $countryCovidData['weekly_icu_admissions_per_million'] = $csv[22];
            $countryCovidData['weekly_hosp_admissions'] = $csv[23];
            $countryCovidData['weekly_hosp_admissions_per_million'] = $csv[24];
            $countryCovidData['new_tests'] = $csv[25];
            $countryCovidData['total_tests'] = $csv[26];
            $countryCovidData['total_tests_per_thousand'] = $csv[27];
            $countryCovidData['new_tests_per_thousand'] = $csv[28];
            $countryCovidData['new_tests_smoothed'] = $csv[29];
            $countryCovidData['new_tests_smoothed_per_thousand'] = $csv[30];
            $countryCovidData['positive_rate'] = $csv[31];
            $countryCovidData['tests_per_case'] = $csv[32];
            $countryCovidData['tests_units'] = $csv[33];
            $countryCovidData['total_vaccinations'] = $csv[34];
            $countryCovidData['people_vaccinated'] = $csv[35];
            $countryCovidData['people_fully_vaccinated'] = $csv[36];
            $countryCovidData['total_boosters'] = $csv[37];
            $countryCovidData['new_vaccinations'] = $csv[38];
            $countryCovidData['new_vaccinations_smoothed'] = $csv[39];
            $countryCovidData['total_vaccinations_per_hundred'] = $csv[40];
            $countryCovidData['people_vaccinated_per_hundred'] = $csv[41];
            $countryCovidData['people_fully_vaccinated_per_hundred'] = $csv[42];
            $countryCovidData['total_boosters_per_hundred'] = $csv[43];
            $countryCovidData['new_vaccinations_smoothed_per_million'] = $csv[44];
            $countryCovidData['new_people_vaccinated_smoothed'] = $csv[45];
            $countryCovidData['new_people_vaccinated_smoothed_per_hundred'] = $csv[46];
            $countryCovidData['stringency_index'] = $csv[47];
            $countryCovidData['population'] = $csv[48];
            $countryCovidData['population_density'] = $csv[49];
            $countryCovidData['median_age'] = $csv[50];
            $countryCovidData['aged_65_older'] = $csv[51];
            $countryCovidData['aged_70_older'] = $csv[52];
            $countryCovidData['gdp_per_capita'] = $csv[53];
            $countryCovidData['extreme_poverty'] = $csv[54];
            $countryCovidData['cardiovasc_death_rate'] = $csv[55];
            $countryCovidData['diabetes_prevalence'] = $csv[56];
            $countryCovidData['female_smokers'] = $csv[57];
            $countryCovidData['male_smokers'] = $csv[58];
            $countryCovidData['handwashing_facilities'] = $csv[59];
            $countryCovidData['hospital_beds_per_thousand'] = $csv[60];
            $countryCovidData['life_expectancy'] = $csv[61];
            $countryCovidData['human_development_index'] = $csv[62];
            $countryCovidData['excess_mortality_cumulative_absolute'] = $csv[63];
            $countryCovidData['excess_mortality_cumulative'] = $csv[64];
            $countryCovidData['excess_mortality'] = $csv[65];
            $countryCovidData['excess_mortality_cumulative_per_million'] = $csv[66];
            $db->addOwidCovidData($countryCovidData);
            $row++;
            
        }
    }
    $row--;
    echo "<script>CSV data uploaded to database successfully</script>";
}

$_SESSION["cases"] = $db->getTableData();