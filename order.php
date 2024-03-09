<?php
if ($_GET['type'] == 'creatorder') {
    $con = mysqli_connect("localhost","root","","shop");
    $orders_table = $_POST['orders_table'];
    $qury= "insert into orders(orders_table) values ('$orders_table')";
    mysqli_query($con , $qury);
header('location:http://localhost/proje1/creat.html');
}elseif ($_GET['type'] == 'editcatguries') {
    $con = mysqli_connect("localhost","root","","shop");
    $end = end($_POST);
    $query = "update orders set ";
    foreach ($_POST as $key => $value) {
        $query .= "$key='$value'";
        if ($value != $end) {
            $query .= ",";
        }
    }
    $id=$_GET['id'];
$query .= " where id = $id";
mysqli_query($con, $query);
header('location:http://localhost/proje1/catguries.php');
}elseif ($_GET['type'] == 'deletecatguries') {
    $con = mysqli_connect("localhost","root","","shop");
    $id = $_GET['id'];
    $query = "delete from orders where id = $id";
    mysqli_query($con , $query);
    header('location:http://localhost/proje1/catguries.php');
}