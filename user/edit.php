<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/proje1/user/index.html">صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/proje1/user/user.php">کاربران</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="/proje1/product/product.html">محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/proje1/product/list.php">لیست محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/proje1/ordres/creat.html">سفارشات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/proje1/ordres/catguries.php">دسته بندی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/proje1/post.html">مقالات</a>
        </li>
      </ul>
    </div>
  </nav>
    <h3>ادیت </h3>
    <form action="http://localhost/proje1/user/index.php?type=edituser&id=<?php echo $_GET['id']; ?>" method="post">
       <?php
         $con = mysqli_connect("localhost" ,"root" , "" , "shop" );
         $sql = "SELECT * from users where id=" . $_GET['id'];
       $result = mysqli_query($con , $sql);
       $row = mysqli_fetch_assoc($result)
       ?>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">نام :</label>
            <input type="text" class="form-control" id="name" name="FirstName" placeholder="نام  را وارد کنید" value="<?php echo $row['FirstName'] ?>" >
          </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">نام خانوادگی:</label>
          <input type="text" class="form-control" id="name" name="LastName"placeholder="نام خانوادگی را وارد کنید" value="<?php echo $row['LastName'] ?>" >
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">ایمیل:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل وارد کنید" value="<?php echo $row['email'] ?>" >
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">پسوورد:</label>
          <input type="password" class="form-control" id="pwd" name="password" placeholder="پسوورد را وارد کنید"  >
        </div>
        <div class="form-check mb-3">
        </div>
        <button type="submit" class="btn btn-primary"> ویرایش</button>
      </form>
</body>
</html>