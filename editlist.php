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
          <a class="nav-link" href="catguries.html">دسته بندی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.html">مقالات</a>
        </li>
      </ul>
    </div>
  </nav>
      <form action="http://localhost/proje1/product.php?type=editlist&id=<?php echo $_GET['id']; ?>" method="post">
       <?php $con = mysqli_connect("localhost" ,"root" , "" , "shop" );
         $sql = "SELECT * from product where id=" . $_GET['id'];
       $result = mysqli_query($con , $sql);
       $row = mysqli_fetch_assoc($result)
       ?>
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">اسم محصول :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="اسم محصول " value="<?php echo $row['name'] ?>" >
      </div>
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">قیمت :</label>
        <input type="text" class="form-control" id="name" name="price" placeholder="قیمت  را وارد کنید" value="<?php echo $row['price'] ?>" >
      </div>
      <button type="submit" class="btn btn-primary">ویرایش</button>
    </form>
</body>
</html>