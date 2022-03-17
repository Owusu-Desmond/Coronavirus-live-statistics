-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 05:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakila`
--

-- --------------------------------------------------------

--
-- Table structure for table `owid-covid-data`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
