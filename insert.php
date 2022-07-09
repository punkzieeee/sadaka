<?php 
    $con = mysqli_connect("localhost","root");
    if (!$con){
      die('Could not connect to server : ' . mysqli_error());
    }
    
    $selected = mysqli_select_db($con, "db_sadaka");
    if (!$selected){
      die('Could not connect database : ' . mysqli_error());
    }
        
    $id=substr(trim(strtoupper($_POST['nama']), " "), 0, 3) . substr($_POST['nohp'], strlen($_POST['nohp'])-3);
    $sql="";
    if (strcmp($_POST['status'], "Resipien") == 0) {
      $id = "RSP-".$id;
       $sql="INSERT INTO resipien(id, nama, tglbutuh, tgllahir, jk, goldar, rhesus, jumlah, nohp, email)
          VALUES ('$id', '$_POST[nama]','$_POST[tglbutuh]', '$_POST[tgllahir]','$_POST[jk]','$_POST[goldar]','$_POST[rhesus]','$_POST[jumlah]','$_POST[nohp]','$_POST[email]')";
    } else {
      $id = "DNR-".$id;
      $sql="INSERT INTO pendonor(id, nama, tgllahir, jk, goldar, rhesus, nohp, email)
          VALUES ('$id', '$_POST[nama]','$_POST[tgllahir]','$_POST[jk]','$_POST[goldar]','$_POST[rhesus]','$_POST[nohp]','$_POST[email]')";
    }
    
    if (!mysqli_query($con, $sql)){
      die('Error inserting to table: ' . mysqli_error($con));
    }
      
     mysqli_close($con);
     header("Location: home.php");
     exit;
?>