<?php
if ($_GET['type'] == 'creatProduct') {
    # code...

$con = mysqli_connect("localhost","root","","shop");
$name = $_POST['name'];
$price = $_POST['price'];
$qury= "insert into product(name , price ) values ('$name' , '$price')";
mysqli_query($con , $qury);
header('location:http://localhost/proje1/product.html');
}elseif($_GET['type'] == 'editlist'){
    $con = mysqli_connect("localhost","root","","shop");

    $end = end($_POST);

    $query = "update product set ";

    foreach ($_POST as $key => $value) {
        $query .= "$key='$value'";
        if ($value != $end) {
            $query .= ",";
        }
    }
    $id=$_GET['id'];
$query .= " where id = $id";
mysqli_query($con, $query);
header('location:http://localhost/proje1/list.php');
}elseif($_GET['type'] == 'deletelist'){
    $con = mysqli_connect("localhost","root","","shop");
    $id = $_GET['id'];
    $query = "delete from product where id = $id";
    mysqli_query($con , $query);
    header('location:http://localhost/proje1/list.php');
}

