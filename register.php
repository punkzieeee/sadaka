<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$link = mysqli_connect("localhost", "root","");
	$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
    $bool = true;

	$link or die(mysqli_error()); 
	mysqli_select_db($link, "db_sadaka") or die("Cannot connect to database"); 
	$query = mysqli_query($link, "Select * from pengguna"); 
	while($row = mysqli_fetch_array($query)){
		$table_users = $row['email']; 
		if($email == $table_users){
			$bool = false; 
			Print '<script>alert("Email Has Been Registered!");</script>';
			Print '<script>window.location.assign("home.php");</script>'; 
		}
	}

	if($bool){
		mysqli_query($link, "INSERT INTO pengguna (firstname, lastname, email, password) VALUES ('$firstname','$lastname','$email','$password')"); 
		$_SESSION['email'] = $email;
		header("location: home.php");
	}
}
?>