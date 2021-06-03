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
	
	if(isset($_SESSION['userId'])){
		echo '<div class="form-group">
			  <p class="alert alert-success">You are logged in</p>';
		echo' <div id="registerform" style><form action ="includes/logout.inc.php" method="post">
		      <button id ="btn" class="btn btn-warning" type ="submit" name="logout-submit">Logout</button>
		      </form>
		      </div>';
		
	}
	else{
	    echo '<p class="alert alert-info"> You are logged out!</p>';
		echo '	<div class="row justify-content-center">
				<form action="includes/login.inc.php" method="post" class="form-conatiner">
 
				<div class="form-group">
			    <label for="exampleInputPassword1">Username</label>
			    <input type="text" class="form-control" name="mailuid"placeholder="Username">
			  	</div>

				<div class="form-group">
		  	    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="pwd" placeholder="Password">
	   		    </div>

  
 				 <button type="submit" name ="login-submit" class="btn btn-success btn-block">Login </button>
 				 <a href ="signup.php" >Sign up</a>
				</form>';

				
				

				

	}

?>


</div>


</body>


</html>