<?php

	session_start();

?>

<!DOCTYPE html>
<center>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">

</head>
<body>

<?php
	if(isset($_GET['error'])){
	if($_GET['error']=="emptyfields"){
		echo '<p class="alert alert-danger" class ="signuperror">Fill in all fields!</p>';

	}
	else if($_GET['error']=="invalidmailuid"){
		echo '<p class="alert alert-danger" class ="signuperror">Invalid username and email!</p>';
	}
	else if($_GET['error']=="invalidmail"){
		echo '<p class="alert alert-danger" class ="signuperror">Inavlid e-mail!</p>';
	}
	else if($_GET['error']=="invaliduid"){
		echo '<p class="alert alert-danger" class ="signuperror">Inavlid username!</p>';
	}
	else if($_GET['error']=="passwordcheck"){
		echo '<p class="alert alert-danger" class ="signuperror">Your password does not match!</p>';
	}
	else if($_GET['signup']=="usertaken"){
		echo '<p class="alert alert-danger" class ="signuperror">User name is already taken!</p>';
	}
}

 else if(isset($_GET['signup'])){
	if($_GET["signup"] == "success"){
		echo '<p class="alert alert-success" class ="signupsuccess">Signup successful!</p>';

	}
}

?>


<div class="row justify-content-center">
<form action="includes/signup.inc.php" method="post" class="form-conatiner">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name ="uid" class="form-control" id="exampleInputEmail1" placeholder="Username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name ="mail" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Repeat Password</label>
    <input type="password" name="pwd-repeat" class="form-control"  placeholder="Repeat Password">
  </div>
  
  <button type="submit" name="signup-submit" class="btn btn-success btn-block">Submit</button>
  <a href ="login.php" >Login</a>
</form>


</div>






</body>

</html>
