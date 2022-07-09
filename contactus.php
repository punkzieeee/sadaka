<?php
    $link = mysqli_connect("localhost", "root","");
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $message = mysqli_real_escape_string($link, $_POST['message']);

    $link or die(mysqli_error()); 
    mysqli_select_db($link, "db_sadaka") or die("Cannot connect to database"); 
    mysqli_query($link, "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')");
    Print '<script>window.location.assign("home.php");</script>';
?>