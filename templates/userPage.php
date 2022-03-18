<?php 
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['username'])){
?>
        <?php 
            $isUserPage = true;
            $pageTitle = "User Page";
            include_once "../includes/header.php";
            include_once "../config/config.php";
            include_once "../uploadData.php";
            $cases = $_SESSION["cases"];
            
        ?>
            <div class=" ps-5 container-fiuld fs-3 py-2 bg-dark">
                <i class="bi bi-gear"></i>Welcome <?php echo strtok($_SESSION['username'], " ");?><a href="../index.php" class="btn me-4 btn-info  float-end">Logout<i class="bi bi-box-arrow-left"></i></a>
            </div>
            <!-- this is cases Info table-->
            
            <div class="container mt-4">
                    <table id="casesInfoTable" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr class="table-primary">
                            <th class="text-center text-info">iso code</th>
                            <th class="text-center text-info">continent</th>
                            <th class="text-center text-info">location</th>
                            <th class="text-center text-info">date</th>
                            <th class="text-center text-info">total cases</th>
                            <th class="text-center text-info">new cases</th>
                            <th class="text-center text-info">new cases smoothed</th>
                            <th class="text-center text-info">total deaths</th>
                            <th class="text-center text-info">new deaths</th>
                            <th class="text-center text-info">new deaths smoothed</th>
                            <th class="text-center text-info">total cases per million</th>
                            <th class="text-center text-info">new cases per million</th>
                            <th class="text-center text-info">new cases smoothed per million</th>
                            <th class="text-center text-info">total deaths per million</th>
                            <th class="text-center text-info">new deaths per million</th>
                            <th class="text-center text-info">new deaths smoothed per million</th>
                            <th class="text-center text-info">reproduction rate</th>
                            <th class="text-center text-info">icu patients</th>
                            <th class="text-center text-info">icu patients per million</th>
                            <th class="text-center text-info">hosp patients</th>
                            <th class="text-center text-info">hosp patients per million</th>
                            <th class="text-center text-info">weekly icu admissions</th>
                            <th class="text-center text-info">weekly icu admissions per million</th>
                            <th class="text-center text-info">weekly hosp admissions</th>
                            <th class="text-center text-info">weekly hosp admissions per million</th>
                            <th class="text-center text-info">new tests</th>
                            <th class="text-center text-info">total tests</th>
                            <th class="text-center text-info">total tests per thousand</th>
                            <th class="text-center text-info">new tests per thousand</th>
                            <th class="text-center text-info">new tests smoothed</th>
                            <th class="text-center text-info">new tests smoothed per thousand</th>
                            <th class="text-center text-info">positive rate</th>
                            <th class="text-center text-info">tests per case</th>
                            <th class="text-center text-info">tests units</th>
                            <th class="text-center text-info">total vaccinations</th>
                            <th class="text-center text-info">people vaccinated</th>
                            <th class="text-center text-info">people fully vaccinated</th>
                            <th class="text-center text-info">total boosters</th>
                            <th class="text-center text-info">new vaccinations</th>
                            <th class="text-center text-info">new vaccinations smoothed</th>
                            <th class="text-center text-info">total vaccinations per hundred</th>
                            <th class="text-center text-info">people vaccinated per hundred</th>
                            <th class="text-center text-info">people fully vaccinated per hundred</th>
                            <th class="text-center text-info">total boosters per hundred</th>
                            <th class="text-center text-info">new vaccinations smoothed per million</th>
                            <th class="text-center text-info">new people vaccinated smoothed</th>
                            <th class="text-center text-info">new people vaccinated smoothed per hundred</th>
                            <th class="text-center text-info">stringency index</th>
                            <th class="text-center text-info">population</th>
                            <th class="text-center text-info">population density</th>
                            <th class="text-center text-info">median age</th>
                            <th class="text-center text-info">aged 65 older</th>
                            <th class="text-center text-info">aged 70 older</th>
                            <th class="text-center text-info">gdp per capita</th>
                            <th class="text-center text-info">extreme poverty</th>
                            <th class="text-center text-info">cardiovasc death rate</th>
                            <th class="text-center text-info">diabetes prevalence</th>
                            <th class="text-center text-info">female smokers</th>
                            <th class="text-center text-info">male smokers</th>
                            <th class="text-center text-info">handwashing facilities</th>
                            <th class="text-center text-info">hospital beds per thousand</th>
                            <th class="text-center text-info">life expectancy</th>
                            <th class="text-center text-info">human development index</th>
                            <th class="text-center text-info">excess mortality cumulative absolute</th>
                            <th class="text-center text-info">excess mortality cumulative</th>
                            <th class="text-center text-info">excess mortality</th>
                            <th class="text-center text-info">excess mortality cumulative per million</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($rows = $cases->fetch_array()){
                                $result[] = $rows;
                            }

                            $array = array_chunk($result, 67);
                            
                            foreach ($array as $value) {
                                foreach ($value as $row){
                        ?>
                        <tr>
                        <td>
                            <?php echo $row['iso_code'] ?></td>
                            <td><?php echo $row['continent'] ?></td>
                            <td><?php echo $row['location'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['total_cases'] ?></td>
                            <td><?php echo $row['new_cases'] ?></td>
                            <td><?php echo $row['new_cases_smoothed'] ?></td>
                            <td><?php echo $row['total_deaths'] ?></td>
                            <td><?php echo $row['new_deaths'] ?></td>
                            <td><?php echo $row['new_deaths_smoothed'] ?></td>
                            <td><?php echo $row['total_cases_per_million'] ?></td>
                            <td><?php echo $row['new_cases_per_million'] ?></td>
                            <td><?php echo $row['new_cases_smoothed_per_million'] ?></td>
                            <td><?php echo $row['total_deaths_per_million'] ?></td>
                            <td><?php echo $row['new_deaths_per_million'] ?></td>
                            <td><?php echo $row['new_deaths_smoothed_per_million'] ?></td>
                            <td><?php echo $row['reproduction_rate'] ?></td>
                            <td><?php echo $row['icu_patients'] ?></td>
                            <td><?php echo $row['icu_patients_per_million'] ?></td>
                            <td><?php echo $row['hosp_patients'] ?></td>
                            <td><?php echo $row['hosp_patients_per_million'] ?></td>
                            <td><?php echo $row['weekly_icu_admissions'] ?></td>
                            <td><?php echo $row['weekly_icu_admissions_per_million'] ?></td>
                            <td><?php echo $row['weekly_hosp_admissions'] ?></td>
                            <td><?php echo $row['weekly_hosp_admissions_per_million'] ?></td>
                            <td><?php echo $row['new_tests'] ?></td>
                            <td><?php echo $row['total_tests'] ?></td>
                            <td><?php echo $row['total_tests_per_thousand'] ?></td>
                            <td><?php echo $row['new_tests_per_thousand'] ?></td>
                            <td><?php echo $row['new_tests_smoothed'] ?></td>
                            <td><?php echo $row['new_tests_smoothed_per_thousand'] ?></td>
                            <td><?php echo $row['positive_rate'] ?></td>
                            <td><?php echo $row['tests_per_case'] ?></td>
                            <td><?php echo $row['tests_units'] ?></td>
                            <td><?php echo $row['total_vaccinations'] ?></td>
                            <td><?php echo $row['people_vaccinated'] ?></td>
                            <td><?php echo $row['people_fully_vaccinated'] ?></td>
                            <td><?php echo $row['total_boosters'] ?></td>
                            <td><?php echo $row['new_vaccinations'] ?></td>
                            <td><?php echo $row['new_vaccinations_smoothed'] ?></td>
                            <td><?php echo $row['total_vaccinations_per_hundred'] ?></td>
                            <td><?php echo $row['people_vaccinated_per_hundred'] ?></td>
                            <td><?php echo $row['people_fully_vaccinated_per_hundred'] ?></td>
                            <td><?php echo $row['total_boosters_per_hundred'] ?></td>
                            <td><?php echo $row['new_vaccinations_smoothed_per_million'] ?></td>
                            <td><?php echo $row['new_people_vaccinated_smoothed'] ?></td>
                            <td><?php echo $row['new_people_vaccinated_smoothed_per_hundred'] ?></td>
                            <td><?php echo $row['stringency_index'] ?></td>
                            <td><?php echo $row['population'] ?></td>
                            <td><?php echo $row['population_density'] ?></td>
                            <td><?php echo $row['median_age'] ?></td>
                            <td><?php echo $row['aged_65_older'] ?></td>
                            <td><?php echo $row['aged_70_older'] ?></td>
                            <td><?php echo $row['gdp_per_capita'] ?></td>
                            <td><?php echo $row['extreme_poverty'] ?></td>
                            <td><?php echo $row['cardiovasc_death_rate'] ?></td>
                            <td><?php echo $row['diabetes_prevalence'] ?></td>
                            <td><?php echo $row['female_smokers'] ?></td>
                            <td><?php echo $row['male_smokers'] ?></td>
                            <td><?php echo $row['handwashing_facilities'] ?></td>
                            <td><?php echo $row['hospital_beds_per_thousand'] ?></td>
                            <td><?php echo $row['life_expectancy'] ?></td>
                            <td><?php echo $row['human_development_index'] ?></td>
                            <td><?php echo $row['excess_mortality_cumulative_absolute'] ?></td>
                            <td><?php echo $row['excess_mortality_cumulative'] ?></td>
                            <td><?php echo $row['excess_mortality'] ?></td>
                            <td><?php echo $row['excess_mortality_cumulative_per_million'] ?></td>

                        </tr>                 
                        <?php 
                            }
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script>
            $(document).ready(function() {
                $('#casesInfoTable').DataTable({
                    "scrollX": true
                });
            });
            </script> 
        </body>
        </html>
<?php
    }else{
       header("Location:../index.php");
       exit();
    }
?>