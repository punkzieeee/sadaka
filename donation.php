<?php
    $link = mysqli_connect("localhost", "root");
    $causes = mysqli_real_escape_string($link, $_POST['causes']);
    $amount = mysqli_real_escape_string($link, $_POST['amount']);
    $fname = mysqli_real_escape_string($link, $_POST['firstName']);
    $lname = mysqli_real_escape_string($link, $_POST['lastName']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $address = mysqli_real_escape_string($link, $_POST['address']);
    $message = mysqli_real_escape_string($link, $_POST['note']);
    $name = $fname." ".$lname;

    $link or die(mysqli_error()); 
    mysqli_select_db($link, "db_sadaka") or die("Cannot connect to database");
    $sql = "INSERT INTO donation (causes, amount, name, email, phone, address, message) VALUES ('$causes', '$amount', '$name', '$email', '$phone', '$address', '$message')";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    Print '<script>window.location.assign("home.php");</script>';
?>