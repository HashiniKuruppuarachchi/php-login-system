<?php

	if(isset($_POST['login-submit'])){
		
		require 'dbh.inc.php';
		
		
		$mailuid = $_POST['mailuid'];
		$password = $_POST['pwd'];
		
		
		if(empty($mailuid) || empty($password)){
			header("Location: ../home.php?error=emptyfields");
			exit();
		}
		else{
			$sql = "SELECT * FROM users WHERE uidUsers =? OR emailUsers=?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../home.php?error=sqlerror1");
				exit();  
			}
			else if($mailuid == "admin" && $password =="admin"){
				header("Location: ../admin.php?login=admin");
				exit(); 
				
			}
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password, $row['pwdUsers']);
				if($pwdCheck == false){
					header("Location: ../home.php?error=WrongPassword");
					exit();
				}
				else if($pwdCheck == true){
					session_start();
				$_SESSION['userId'] = $row['idUsers'];
				$_SESSION['userUid'] = $row['uidUsers'];
				header("Location: ../login.php?login=Success");
				exit();  
				}
				
			}
			else{
				header("Location: ../home.php?error=sqlerror2");
				exit();  
			}
		}
		
		
		
	}
	
	else{
		header("Location: ../home.php");
		exit();
		
		
		
	}




?>