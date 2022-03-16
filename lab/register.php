<div class="row">
<div class="col-md-4 col-md-offset-4">
<h4>Register Here</h4>
	

<?php

if (isset($_POST['register'])) {
	#declare variables
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];

	#chcking empty variables
	if (!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($username)&&!empty($password)&&!empty($confirm_password)) {
	
	#confirming if password match
	if ($password!=$confirm_password) {
		echo "<font color='red'>PASSWORDS DO NOT MATCH!</font>";
	}else{

		#connect db
		require 'connect.php';
		#checking of the user is already registered
	 $query="SELECT email FROM register WHERE email='$email'";

	 if ($query_run=mysqli_query($con,$query)) {
	 	if  (mysqli_num_rows($query_run)!=0) {
	 	 echo '<font color=red>The user with email ', $email ,' Already Registered</font>';
	 	}else{
	 		
#insert user detail into the table
	 	$query="INSERT INTO register(firstname,lastname,email,username,password)VALUES('$firstname','$lastname','$email','$username','$password')";
	 	if  ($query_run=mysqli_query($con,$query)) {
	 		echo " <font color='green'>Registered Sucesssfully</font>";
	 	}else{
	 		echo mysqli_error($con, $query);
	 	}


	 	}

         	}
         	

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

	<title>Register here</title>
</head>
<body>
<div class="row">

<div class="col-md-4 col-md-offset-4">

	
<form action="" method="POST">
	<div class="group">
		<label for="firstname">First Name</label>
		<input type="text" name="firstname" class="form-control" >
	</div>
	<div class="group">
		<label for="lastname">Last Name</label>
		<input type="text" name="lastname" class="form-control" >
	</div>
	<div class="group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control" >
	</div>
	<div class="group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control" >
	</div>
	<div class="group">
		<label for="firstname">Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	<div class="group">
		<label for="firstname">Confirm_Password</label>
		<input type="password" name="confirm_password" class="form-control" >
	</div>
	

	    <div>

          <br/>
 <button type="submit" name="register" id="btn" class="btn btn-large btn-success full-width"><i class="glyphicon glyphicon-upload"></i>&nbsp;&nbsp;<b>SUBMIT</b></button><br></br>
 <a href="login.php">Login</a><br/><br/>
 
 </div>
</form>
</div>
	
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>

</body>
</html>


