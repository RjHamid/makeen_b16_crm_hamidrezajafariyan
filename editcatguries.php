<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewports" content="width=device-width, initial-scale=1.0">
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
  <form action="http://localhost/proje1/order.php?type=editcatguries&id=<?php echo $_GET['id']; ?>" method="post">
    <?php $con = mysqli_connect("localhost" ,"root" , "" , "shop" );
         $sql = "SELECT * from orders where id=" . $_GET['id'];
       $result = mysqli_query($con , $sql);
       $row = mysqli_fetch_assoc($result)
       ?>    
    <div class="mb-3 mt-3">
          <label for="name" class="form-label"> ویرایش سفارشات:</label>
          <input type="text" class="form-control" id="name" name="orders_table" placeholder="نام  را وارد کنید" value="<?php echo $row['orders_table'] ?>" >
        </div>
      <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">ثبت نام</button>
      </form>
</body>
</html>