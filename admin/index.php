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
    <style>
    
      a{
        color:black;
      }
      a::after{
        color:white;
      }
      a::before{
        color:#777;
        background-color: #777;
      }
      a:hover{
        background-color:brown;
        color:white;
      }
        </style>

  </head>
  <body >

  <!-- check if loged in -->
  <?php
include("../auth/islogin.php");
$user_type="";
if($_SESSION['type']==0){
  $user_type=' متبرع ';
}else if($_SESSION['type']== 1){
  $user_type= ' مريض ';
}else if($_SESSION['type']== 2){
  $user_type= ' مدير ';
}

  ?>
    <!-- ====== Header Start ====== -->
  
    <header class="ud-header" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12" >
            <nav class="navbar navbar-expand-lg" >
              <p style="font-size: 200%;">مرحبا!!
                <?php echo $_SESSION['user_name'];?>
              </p>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <?php
              
                if ($_SESSION['type']==2)   
                {
                ?>
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
                  <li class="nav-item nav-item-has-children">
                    <!-- <a href="javascript:void(0)"> الجداول </a>
                    <ul class="ud-submenu">
                      <li class="ud-submenu-item">
                        <a class="ud-menu-scroll" href="admins/reservations_schedule.php?id=all" target="iframe" class="ud-submenu-link">
                          جدول الحجوزات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a class="ud-menu-scroll" href="admins/allview_request.php" target="iframe" class="ud-submenu-link">
                          جدول الطلبات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a class="ud-menu-scroll" href="contact.html" target="iframe" class="ud-submenu-link">
                          جدول التبرعات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a class="ud-menu-scroll" href="blog.html" target="iframe" class="ud-submenu-link">
                         جدول المتبرعين المتوفرين
                        </a>
                      </li>
                      
                    </ul> -->
                    <li class="nav-item">
                    <a  type="button"
                     data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasRight"
                      aria-controls="offcanvasRight">الاعدادات</a>
                  </li>
                  </li>
                </ul>
              </div>
                <?php
                }
                else if ($_SESSION['type']== 1)
                {
                ?>
                  <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="index.php">الرئيسية</a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="ud-menu-scroll" href="#about">تبرع بدم</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../patient/add_patien.php" target="iframe">طلب دم</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../patient/avalabledonors.php" target="iframe"> جدول المتبرعين المتوفرين </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="ud-menu-scroll" href="#team">اضافة مستشفى</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../auth/logout.php">تسجيل الخروج</a>
                  </li>
                  <!-- <li class="nav-item nav-item-has-children">
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
                  </li> -->
                </ul>
              </div>


<!-- المتبرع  -->
                <?php
                }else if($_SESSION['type']==0) {
               
                ?>
                  <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="index.php">الرئيسية</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="add_doner.php" target="iframe">تبرع بدم</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../doner/avalablepatients.php" target="iframe"> جدول الطلبات المتوفره</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="ud-menu-scroll" href="#team">اضافة مستشفى</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../auth/logout.php" >تسجيل الخروج</a>
                  </li>
                  <!-- <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> الجداول </a>
                    <ul class="ud-submenu">
                      <li class="ud-submenu-item">
                        <a href="about.html" class="ud-submenu-link">
                          جدول الحجوزات
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="../doner/requesttable.php" class="ud-submenu-link">
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
                  </li> -->
                </ul>
              </div>



                <?php
                
                }
                else{
                ?>
             
             <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="index.php">الرئيسية</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../hos/reservationsbyhos.php" target="iframe">جدول الحجوزات</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../hos/request.php"  target="iframe">جدول الطلبات</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../hos/donations.php" target="iframe">جدول المتبرعين المتوفرين</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="add_docter.php" target="iframe">اضافه دكتور </a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="lapr.php" target="iframe">  اضافه مختبر </a>
                  </li>
                 
                      
                  
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="../auth/logout.php">تسجيل الخروج</a>
                  </li>
                  <li class="nav-item">
                    <a  type="button"
                     data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasRight1"
                      aria-controls="offcanvasRight1">الاعدادات</a>
                  </li>
                  
                
              
                     
                      
                     
                
                </ul>
              </div>


             <?php
                }
             ?>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRight1Label">
     <div class="offcanvas-header">
      <h5 id="offcanvasRight1Label"> الصفحة الرئيسية</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
     <div class="list-group">
     <!-- <a href="teble_hos2.php " target="iframe"  class="list-group-item list-group-item-action " aria-current="true">
     اعدادات المستشفى
     </a> -->
      <a href="teble_lab.php" target="iframe" class="list-group-item list-group-item-action " aria-current="true">
      اعدادات المختبر 
     </a>
     <a href="teble_doct.php" target="iframe" class="list-group-item list-group-item-action">اعدادات الدكتور</a>
     
     </div>
     </div>
     </div>
      <!-- ====== Banner Start ====== -->
     
    <!-- ====== Header End ====== -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
     <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">اعدادات البيانات</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
     <div class="list-group">
      <a href="teble_hos.php" class="list-group-item list-group-item-action " aria-current="true">
     اعدادات المستشفى
     </a>
     <!-- <a href="" class="list-group-item list-group-item-action">A second link item</a>
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
    <?php
    if($_SESSION['type']==3){
      // include 'bloodtypes/forhos.php';
      ?>
      <iframe src="bloodtypes/forhos.php" width="100%" height="900px" name="iframe"  frameborder="0"></iframe>
      <?php
    }
    if($_SESSION['type']==0){
      // include 'bloodtypes/forhos.php';
      ?>
      <iframe src="bloodtypes/fordoner.php" width="100%" height="900px" name="iframe"  frameborder="0"></iframe>
      <?php
    }
    if($_SESSION['type']==1){
      // include 'bloodtypes/forhos.php';
      ?>
      <iframe src="bloodtypes/forpatient.php" width="100%" height="900px" name="iframe"  frameborder="0"></iframe>
      <?php
    }
    if($_SESSION['type']==2){
      // include 'bloodtypes/forhos.php';
      ?>
      <iframe src="bloodtypes/foradmin.php" width="100%" height="900px" name="iframe"  frameborder="0"></iframe>
      <?php
    }
      
    ?>
    <!-- ====== Blog End ====== -->


    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../assets/js/wow.min.js"></script> -->
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
