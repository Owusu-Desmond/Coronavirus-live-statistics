<?php 
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['username'])){
?>
        <?php 
            $isUserPage = true;
            $pageTitle = "User Page";
            include_once "../includes/header.php"; 
        ?>
            <div class=" ps-5 container-fiuld fs-3 py-2 bg-dark">
                <i class="bi bi-gear"></i>Welcome <?php echo strtok($_SESSION['username'], " ");?><a href="../index.php" class="btn me-4 btn-info  float-end">Logout<i class="bi bi-box-arrow-left"></i></a>
            </div>
            <!-- this is cases Info table-->
            <div class="container mt-4">
            <table id="casesInfoTable" class="table table-striped table-hover" style="width:100%">
                <thead>
                <tr class="table-primary">
                    <th>Name</th>
                    <th>Class</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script>
            $(document).ready(function() {
                $('#casesInfoTable').DataTable();
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