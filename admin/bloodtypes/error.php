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

  <h2 class="text-center">التقرير للمستشفى</h2>
<div class="table-responsive">
  <table class="table">
 <thead>
   <tr>
     <th scope="col">الرقم</th>
     <th scope="col">اسم المريض</th>
     <th scope="col">اسم المتبرع</th>
     <th scope="col">اسم المختبر</th>
     <th scope="col"> اسم الدكتور </th>
     <th scope="col">رقم جوال الدكتور</th>
     <th scope="col">وقت الحجز</th>
     <th scope="col">وقت الحضور</th>
     <th scope="col">الحالة</th>
     <th scope="col"> </th>

     <th scope="col">تعديل</th>
     <th scope="col">حذف</th>
   </tr>
 </thead>
 <tbody>
 <!-- the code pring data -->
  
 <?php
    include '../../auth/isadmin.php';
    include '../../auth/alert.php';
    
if(isset($_GET['id']))
{
include '../../auth/db_connect.php';
/*
0=> request ->id
1=> doctor  ->id
2=> doctor  ->name
3=> patient ->f_name
4=> patient ->med_name
5=> patient ->L_name
7=> patient ->blood_group
8=> laboratory->id
9=> laboratory->name
9=> 
10=> 

*/
$h_id=$_GET['id'];
$sql = "EXPLAIN SELECT\n"

    . "    hos.h_id,\n"//0
    . "    lab.l_id,\n"//2
    . "    dfp.d_id,\n"//3
//_______________________________2_______________________________________
    . "    p.firste_name,\n"//4
    . "    p.med_name,\n"//5
    . "    p.last_name,\n"//6
//________________________________3_________________________________________
    . "    d.firste_name,\n"//7
    . "    d.last_name,\n"//8
// _____________________________________4_____________________
    . "    lab.name,\n"//9
// _____________________________________5_____________________
    . "    dfp.date_created,\n"//10
// _____________________________________6_____________________

    . "    r.timeattendance,\n"//11
// _____________________________________7_____________________
    . "    r.do_id,\n"//12
//_____________________________________8__________________ 
    . "    do.name,\n"//13
// _____________________________________9_____________________
    . "    do.phone\n"//14
//____________________________________10______________
    . "    dfp.check,\n"//15
//_____________________________________11___   
    . "FROM\n"

    . "    hospitals hos,\n"

    . "    laboratory lab,\n"

    . "    donate_for_patient dfp,\n"

    . "    patient p,\n"

    . "    donors d,\n"

    . "    request r,\n"

    . "    doctor do\n"

    . "WHERE\n"

    . "    hos.h_id = lab.h_id AND lab.l_id = dfp.l_id AND dfp.d_id = d.d_id AND dfp.p_id = p.p_id AND r.do_id=do.do_id AND hos.check=0 AND  hos.h_id = ".$h_id.";";
//  echo $sql;exit();  
$result=mysqli_query($conn, $sql);
$rows=mysqli_fetch_row($result);
if($rows> 0){
 for($i= 0;$i<$rows;$i++){
?>
 <tr>
<th scope="row"><?php echo $i; ?></th>
<!-- name patient -->
<th scope="row"><?php echo $row[4]." ".$row[5]." ".$row[6] ; ?></th>
<!-- name donors -->
<th scope="row"><?php echo $row[7]." ".$row[8] ; ?></th>

<!-- Name  laboratory -->
<th scope="row"><?php echo $row[9] ; ?></th>


<!--Name Doctor  -->
<th scope="row"><?php echo $row[13] ; ?></th>
<!-- Phone Doctor -->
<th scope="row"><?php echo $row[14] ; ?></th>
<!-- Date Cerate -->
<th scope="row"><?php echo $row[10] ; ?></th>
<!-- Date Booking -->
<th scope="row"><?php echo $row[11] ; ?></th>






  <!-- <h3 class="text-center">التبرع لاحدى طلبات احتياجات الدم الحالية</h3> -->



<?php
}
?>
<?php
}
?>
<?php
}
?>

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