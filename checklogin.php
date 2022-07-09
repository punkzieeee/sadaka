<?php
	session_start();
	$link = mysqli_connect("localhost", "root","");
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$password = mysqli_real_escape_string($link, $_POST['password']);

	$link or die(mysqli_error()); 
	mysqli_select_db($link, "db_sadaka") or die("Cannot connect to database"); 
	$query = mysqli_query($link, "SELECT * from pengguna WHERE email='$email'"); 
	$exists = mysqli_num_rows($query); 
	$table_users = "";
	$table_password = "";
	if($exists > 0){
		while($row = mysqli_fetch_assoc($query)){
			$table_users = $row['email']; 
			$table_password = $row['password']; 
		}
		if(($email == $table_users) && ($password == $table_password)){
				if($password == $table_password){
					$_SESSION['email'] = $email; 
					header("location: home.php");
				}
		} else {
			Print '<script>alert("Wrong Password!");</script>'; 
			Print '<script>window.location.assign("home.php#login");</script>'; 
		}
	} else {
		Print '<script>alert("Wrong Email/Not Registered!");</script>'; 
		Print '<script>window.location.assign("home.php#login");</script>'; 
	}
?>