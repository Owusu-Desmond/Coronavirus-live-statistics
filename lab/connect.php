<?php
//$con=mysqli_connect("localhost","microsyn_ventures","Benson123@","microsyn_ventures");

$con=mysqli_connect("localhost","root","","srs");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
?>