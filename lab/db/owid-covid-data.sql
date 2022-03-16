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

CREATE TABLE `owid-covid-data` (
  `iso_code` varchar(50) NOT NULL,
  `continent` tinytext NOT NULL,
  `location` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `total_cases` int(50) NOT NULL,
  `new_cases` int(50) NOT NULL,
  `new_cases_smoothed` int(50) NOT NULL,
  `total_deaths` int(50) NOT NULL,
  `new_deaths` int(50) NOT NULL,
  `new_deaths_smoothed` int(50) NOT NULL,
  `total_cases_per_million` int(50) NOT NULL,
  `new_cases_per_million` int(50) NOT NULL,
  `new_cases_smoothed_per_million` int(50) NOT NULL,
  `total_deaths_per_million` int(50) NOT NULL,
  `new_deaths_per_million` int(50) NOT NULL,
  `new_deaths_smoothed_per_million` int(50) NOT NULL,
  `reproduction_rate` int(50) NOT NULL,
  `icu_patients` int(50) NOT NULL,
  `icu_patients_per_million` int(50) NOT NULL,
  `hosp_patients` int(50) NOT NULL,
  `hosp_patients_per_million` int(50) NOT NULL,
  `weekly_icu_admissions` int(50) NOT NULL,
  `weekly_icu_admissions_per_million` int(50) NOT NULL,
  `weekly_hosp_admissions` int(50) NOT NULL,
  `weekly_hosp_admissions_per_million` int(50) NOT NULL,
  `new_tests` int(50) NOT NULL,
  `total_tests` int(50) NOT NULL,
  `total_tests_per_thousand` int(50) NOT NULL,
  `new_tests_per_thousand` int(50) NOT NULL,
  `new_tests_smoothed` int(50) NOT NULL,
  `new_tests_smoothed_per_thousand` int(50) NOT NULL,
  `positive_rate` int(50) NOT NULL,
  `tests_per_case` int(50) NOT NULL,
  `tests_units` int(50) NOT NULL,
  `total_vaccinations` int(50) NOT NULL,
  `people_vaccinated` int(50) NOT NULL,
  `people_fully_vaccinated` int(50) NOT NULL,
  `total_boosters` int(50) NOT NULL,
  `new_vaccinations` int(50) NOT NULL,
  `new_vaccinations_smoothed` int(50) NOT NULL,
  `total_vaccinations_per_hundred` int(50) NOT NULL,
  `people_vaccinated_per_hundred` int(50) NOT NULL,
  `people_fully_vaccinated_per_hundred` int(50) NOT NULL,
  `total_boosters_per_hundred` int(50) NOT NULL,
  `new_vaccinations_smoothed_per_million` int(50) NOT NULL,
  `new_people_vaccinated_smoothed` int(50) NOT NULL,
  `new_people_vaccinated_smoothed_per_hundred` int(50) NOT NULL,
  `stringency_index` int(50) NOT NULL,
  `population` int(50) NOT NULL,
  `population_density` int(50) NOT NULL,
  `median_age` int(50) NOT NULL,
  `aged_65_older` int(50) NOT NULL,
  `aged_70_older` int(50) NOT NULL,
  `gdp_per_capita` int(50) NOT NULL,
  `extreme_poverty` int(50) NOT NULL,
  `cardiovasc_death_rate` int(50) NOT NULL,
  `diabetes_prevalence` int(50) NOT NULL,
  `female_smokers` int(50) NOT NULL,
  `male_smokers` int(50) NOT NULL,
  `handwashing_facilities` int(50) NOT NULL,
  `hospital_beds_per_thousand` int(50) NOT NULL,
  `life_expectancy` int(50) NOT NULL,
  `human_development_index` int(50) NOT NULL,
  `excess_mortality_cumulative_absolute` int(50) NOT NULL,
  `excess_mortality_cumulative` int(50) NOT NULL,
  `excess_mortality` int(50) NOT NULL,
  `excess_mortality_cumulative_per_million` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
