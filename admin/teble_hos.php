<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blood</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="../assets/images/icon1.png"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/lineicons.css" />
    <link rel="stylesheet" href="../assets/css/ud-styles.css" />

  </head>
  <body >

  <!-- check if loged in -->
  <?php
include("../auth/isadmin.php");

  ?>
    <!-- ====== Header Start ====== -->
  
    <header class="ud-header" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12" >
            <nav class="navbar navbar-expand-lg" >
              <p style="font-size: 200%;">مرحبا!!
                <?php echo $_SESSION['user_name'] ?>
              </p>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="index.php">الرئيسية</a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="ud-menu-scroll" href="add_doner.php">تبرع بدم</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../patient/add_patien.php">طلب دم</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../login/hospital.php">اضافة مستشفى</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../auth/logout.php">تسجيل الخروج</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="index.php">رجوع </a>
                  </li>
                  <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> الجداول </a>
                    <ul class="ud-submenu">
                      <li class="ud-submenu-item">
                        <a href="about.html" class="ud-submenu-link">
                          جدول الحجوزات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="pricing.html" class="ud-submenu-link">
                          جدول الطلبات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="contact.html" class="ud-submenu-link">
                          جدول التبرعات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="blog.html" class="ud-submenu-link">
                         جدول المتبرعين المتوفرين
                        </a>
                      </li>
                      
                    </ul>
                    <li class="nav-item">
                     <a  type="button"
                     data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasRight"
                      aria-controls="offcanvasRight">الاعدادات</a>
                  </li>
                  </li>
                </ul>
              </div>
              


              
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">اعدادات الصفحة</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="list-group">
  <a href="teble_hos.php" class="list-group-item list-group-item-action " aria-current="true">
    اعدادات المستشفى
  </a>
  <!-- <a href="" class="list-group-item list-group-item-action">اعدادات المختبر</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action ">A disabled link item</a> -->
</div>
  </div>
</div>
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-banner-content">
              <h1>اهلا وسهلا</h1>
              <?php
include('../auth/alert.php');
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Start ====== -->
    


    <div class="table-responsive">
  <table class="table">
 <thead>
   <tr>
     <th scope="col">الرقم</th>
     <th scope="col">المستشفى</th>
     <th scope="col">المدينة</th>
     <th scope="col">عدد الادوار</th>
     <th scope="col">العنوان</th>
     <th scope="col">البريد</th>
     <th scope="col">تعديل</th>
     <th scope="col">حالة الحساب</th>
   </tr>
 </thead>
 <tbody>
 <!-- the code pring data -->
 <?php
include("../auth/db_connect.php");
$sql = "SELECT *
FROM hospitals";

$result=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($result);
if($rows> 0){
 for($i= 0;$i<$rows;$i++){
$row=mysqli_fetch_row($result);
?>
<tr>
<th scope="row"><?php echo $i+1; ?></th>
<th scope="row"><?php echo $row[1]; ?></th>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; ?></td>
<td><a href="hosupdate.php?id=<?php echo $row[0]; ?>">تعديل</a></td>
<?php $queee="select * from users where email='".$row[5]."'";
// echo $queee;exit();
  $res=mysqli_query($conn,$queee);
  $check=mysqli_fetch_row($res);
  if($check[6]==0)
{
?>
<td><a href="delete/delete_hos.php?id=<?php echo $row[0]; ?>">ايقاف</a></td>
<?php
}else
{
  ?>
<td><a href="delete/delete_hos.php?ac=<?php echo $row[0]; ?>">تشغيل</a></td>

  <?php
}
?>
</tr>
<?php
 }
}
mysqli_close($conn);
?>
  

 </tbody>
</table>
    </div>
</body>
    <!-- ====== Blog End ====== -->


    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
