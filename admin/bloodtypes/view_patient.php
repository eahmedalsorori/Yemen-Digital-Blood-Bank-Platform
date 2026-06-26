
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
include '../../auth/is_donor.php';
include("../../auth/db_connect.php");
include("../../auth/alert.php");

  ?>
    <!-- ====== Header Start ====== -->
  
    <!-- ====== Banner Start ====== -->
  
              <h1 >جدول المتبرعين</h1>
           
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Start ====== -->
    


    <div class="table-responsive">
  <table class="table">
 <thead>
   <tr>
   <th scope="col">الرقم</th>
     <th scope="col">اسم المريض </th>
     <th scope="col">فصيلة الدم</th>
     <th scope="col">المستشفى </th>
     <th scope="col">المدينة</th>
     <th scope="col">عنوان المستشفى </th>
  
     <th scope="col">المختبر</th>
     <th scope="col">اسم الدكتور</th>
   
     <th scope="col">تبرع</th>
   </tr>
 </thead>
 <tbody>
 <!-- the code pring data -->
 <?php


$sql = "SELECT r.id,do.do_id,do.name,p.p_id,p.firste_name,p.med_name,p.last_name,p.blood_group,l.name,h.name,h.city,h.address
 FROM request r, doctor do , patient p, laboratory l, hospitals h 
 where r.p_id=p.p_id and r.do_id=do.do_id and do.l_id=l.l_id and l.h_id=h.h_id and r.check='0' and p.blood_group=".$_GET['blood_type'];
// echo $sql;exit();  
$result=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($result);
if($rows> 0){
 for($i= 0;$i<$rows;$i++){
$row=mysqli_fetch_row($result);
?>
<tr>
<th scope="row"><?php echo $i+1; ?></th>
<th scope="row"><?php echo $row[4]." ".$row[5]." ".$row[6] ?></th>

<?php if($row[7]==1)
{ ?>
<td>A+</td>
<?php
} ?>
<?php if($row[7]==2)
{ ?>
<td>A-</td>
<?php
} ?>
<?php if($row[7]==3)
{ ?>
<td>B+</td>
<?php
} ?>
<?php if($row[7]==4)
{ ?>
<td>B-</td>
<?php
} ?>
<?php if($row[7]==5)
{ ?>
<td>O+</td>
<?php
} ?>
<?php if($row[7]==6)
{ ?>
<td>O-</td>
<?php
} ?>
<?php if($row[7]==7)
{ ?>
<td>AB+</td>
<?php
} ?>
<?php if($row[7]==8)
{ ?>
<td>AB-</td>
<?php
} ?>
<td><?php echo $row[9]; ?></td>
<td><?php echo $row[10]; ?></td>
<td><?php echo $row[11]; ?></td>
<td><?php echo $row[8]; ?></td>
<td><?php echo $row[2]; ?></td>

<td><a href="../../doner/choose_a_patient.php?id=<?php echo $row[0]; ?>">تبرع</a></td>
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
