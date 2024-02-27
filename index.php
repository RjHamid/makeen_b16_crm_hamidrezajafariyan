<?php
$con = mysqli_connect("localhost","root","","shop");
$FirstName = $_GET['FirstName'];
$LastName = $_GET['LastName'];
$email = $_GET['email'];
$password = $_GET['password'];
$qury= "insert into users(FirstName , LastName , email , password) values ('$FirstName' , '$LastName' , '$email' , '$password')";
mysqli_query($con , $qury);
echo 'ok';?>

