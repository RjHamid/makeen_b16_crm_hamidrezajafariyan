<?php
if ($_GET['type'] == 'creat') {
    # code...

$con = mysqli_connect("localhost","root","","shop");
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$qury= "insert into users(FirstName , LastName , email , password) values ('$FirstName' , '$LastName' , '$email' , '$password')";
mysqli_query($con , $qury);
header('location:http://localhost/proje1/user/index.html');}
elseif($_GET['type'] == 'edituser'){
    $con = mysqli_connect("localhost","root","","shop");

    $end = end($_POST);

    $query = "update users set ";

    foreach ($_POST as $key => $value) {
        $query .= "$key='$value'";
        if ($value != $end) {
            $query .= ",";
        }
    }
    $id=$_GET['id'];
$query .= " where id = $id";
mysqli_query($con, $query); 
header('location:http://localhost/proje1/user/user.php');
}elseif($_GET['type'] == 'deleteUser'){
    $con = mysqli_connect("localhost","root","","shop");
    $id = $_GET['id'];
    $query = "delete from users where id = $id";
    mysqli_query($con , $query);
    header('Location:http://localhost/proje1/user/user.php');
};


