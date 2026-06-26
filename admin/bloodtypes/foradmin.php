<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blood</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="../../assets/images/icon1.png"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/lineicons.css" />
    <link rel="stylesheet" href="../../assets/css/ud-styles.css" />

  </head>
  <body >
    <?php 
    include '../../auth/isadmin.php';
    include '../../auth/db_connect.php';
    $query='select * from hospitals';
    $result=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($result);
    
if(isset($_SESSION['donation_id']))
{
  unset($_SESSION['donation_id']);
}
    ?>
    <section class="ud-blog-grids">
      <div class="container">
        <div class="row">
          <?php
if($rows>0)
{
  for($i=0;$i<$rows;$i++)
  {
    $row=mysqli_fetch_row($result);
        //  $id=$row[0];
         ?>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <?php   echo"<a href="."../admins/view_admin.php?id=$row[0] >";?>
                <img src="../../assets/images/hos2.jpg" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <!-- <span class="ud-blog-date">
                
                </span> -->
                <h3 class="ud-blog-title">
                <?php   echo"<a href="."../admins/view_admin.php?id=$row[0]>";?>
                    مستشفى:
                   <?php echo"<b>". $row[1] ."</b>"; ?>
                  </a>
                </h3>
                <p class="ud-blog-desc">
                 المدينة:
                <?php echo $row[2]; ?>
                </p>
                <p class="ud-blog-desc">
                  عدد الادوار:
                <?php echo $row[3]; ?>
                </p>
                <p class="ud-blog-desc">
                  الموقع:
                <?php echo $row[4]; ?>
                </p>

              </div>
            </div>
          </div>
<?php  
  }
}
?>
        </div>
      </div>
    </section>
    
    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>

