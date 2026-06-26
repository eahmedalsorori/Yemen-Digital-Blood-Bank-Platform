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
include '../auth/ishos.php';
include("../auth/alert.php");

  ?>
 
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Start ====== -->
    


    <div class="table-responsive">
  <table class="table">
 <thead>
   <tr>
     <th scope="col">الرقم</th>
     <th scope="col">اسم الدكتور</th>
     <th scope="col">التلفون</th>
     <th scope="col">العنوان</th>
     <th scope="col">البريد الالكتروني</th>
     <th scope="col">المختبر</th>
     <th scope="col">تعديل</th>
     <th scope="col">حذف</th>
   </tr>
 </thead>
 <tbody>
 <!-- the code pring data -->
 <?php
include("../auth/db_connect.php");
$sql = "SELECT * 
FROM doctor d , laboratory l where d.l_id=l.l_id and l.h_id=".$_SESSION['hos_id'];

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
<td><?php echo $row[8]; ?></td>
<td><a href="doctupdate.php?id=<?php echo $row[0]; ?>">تعديل</a></td>
<td><a href="delete/delete_doct.php?id=<?php echo $row[0]; ?>">حذف</a></td>
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
