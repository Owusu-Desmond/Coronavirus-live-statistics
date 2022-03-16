<div class="row">
<div class="col-md-4 col-md-offset-4">
<h4>Login Here</h4>
	

<?php

if (isset($_POST['register'])) {
	#declare variables
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	#chcking empty variables
	if (!empty($username)&&!empty($password)) {
		#connect db
		require'connect.php';
		#check ofusername and password exist and login
		$query="select username and password from register where username='$username' and password='$password'";
		if ($query_run=mysqli_query($con,$query)) {
			 #if loggedin be directed to home/dashboardpage
			header('location:home.php');

		}else{
			echo "<font color='red'>Username/Pasword is wrong</font>";
		}

	}else{
		echo "<font color='red'>All Fields Are Required</font>";
	}
}



?>

</div>
</div>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

	<title>Login</title>
</head>
<body>
<div class="row">

<div class="col-md-4 col-md-offset-4">

	
<form action="" method="POST">
	
	
	<div class="group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control" >
	</div>
	<div class="group">
		<label for="firstname">Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	

	    <div>

          <br/>
 <button type="submit" name="register" id="btn" class="btn btn-large btn-success full-width"><i class="glyphicon glyphicon-upload"></i>&nbsp;&nbsp;<b>SUBMIT</b></button><br></br>
 <a href="register.php">Register</a><br/><br/>
 
 </div>
</form>
</div>
	
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>

</body>
</html>


