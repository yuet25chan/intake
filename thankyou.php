<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
 .fixed-btn {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: black;
  padding: 1rem 0;
  text-align: center;
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
  z-index: 999;
} 
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Health Clinic</a>
    </div>
</nav>
<?php

include 'db_credentials.php';

$sql = "INSERT INTO intake (firstname, lastname,birthmonth,birthday,birthyear,ethnicity,race,gender,street, unit,city, state, zipcode, phone, email, maritalstatus, numberofchildren)
VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['birthmonth']}', '{$_POST['birthday']}', '{$_POST['birthyear']}','{$_POST['ethnicity']}','{$_POST['race']}','{$_POST['gender']}','{$_POST['street']}','{$_POST['unit']}', '{$_POST['city']}', '{$_POST['state']}', '{$_POST['zipcode']}','{$_POST['phone']}', '{$_POST['email']}', '{$_POST['maritalstatus']}','{$_POST['numberofchildren']}' )";


if ($conn->query($sql) === TRUE) {
  echo '<div class="text-center">
  <h3>You are checked in.</h3><br><p>Thank you for signing in. Please return the tablet, take a seat, and you will be called as soon as possible.</p></div>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
 <div class="fixed-btn text-center"> 
 <a href="index.php" class="btn btn-primary mt-3">Return</button>  
          </div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
