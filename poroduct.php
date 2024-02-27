<?php
$con = mysqli_connect("localhost","root","","shop");
$name = $_GET['name'];
$price = $_GET['price'];
$qury= "insert into product(name , price ) values ('$name' , '$price')";
mysqli_query($con , $qury);
echo 'ok';
