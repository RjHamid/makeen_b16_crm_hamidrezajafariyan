<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jafariyan</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="user.php">کاربران</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="product.html">محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">لیست محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="creat.html">سفارشات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catguries.php">دسته بندی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.html">مقالات</a>
        </li>
      </ul>
    </div>
  </nav>
      <div class="container mt-3">
        <h2>دسته بندی </h2>         
        <table class="table table-hover">
          <thead>
            <tr>
              <th>نام محصول</th>
             
            </tr>
          </thead>
          <?php
  $con = mysqli_connect("localhost" ,"root" , "" , "shop" );
  $sql = "SELECT * FROM `orders` ";
$result = mysqli_query($con , $sql);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
 ?>
          <tbody>
            
              <td><?php echo $row['orders_table']; ?></td>
           
           
       
           
              <td> <a href="editcatguries.php?id=<?php echo $row['id']; ?>"><button type="submit">ویرایش</button></a></td>
              <td><a href="order.php?type=deletecatguries&id=<?php echo $row['id']; ?>" onclick=" return confirm('اطمینان دارید؟')"><button type="submit">حذف</button></a></td>
          </tbody>
          <?php } } ?>
</body>
</html>