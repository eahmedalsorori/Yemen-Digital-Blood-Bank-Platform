<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
  <meta charset="UTF-8">
  <title>add new hospital</title>
  <link rel="stylesheet" href="../assets/css/hos.css" />

</head>
<body style="background-image: url('../assets/images/aa.jfif');">
<!-- partial:index.partial.html -->
<body>
    <?php 
include("../auth/ishos.php");
include("../auth/db_connect.php");
if(isset($_GET["id"])){
$id=$_GET['id'];
// echo $id;exit();
$sql= 'select * from laboratory l , floor f  where l.f_id=f.f_id and  l.l_id='.$id;
// echo $sql;exit();
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
    ?>
    <section class="container" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center;">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <!-- <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" /> -->
                <h1 class="opacity">تعديل على مختبر</h1>
                <form action="update/HUL.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row[0] ?>" placeholder=" المختبر" />

                <input type="text" name="name" value="<?php echo $row[1] ?>" placeholder="اسم المختبر" />
                    <input type="text" name="floor" value="<?php echo $row[6] ?>" placeholder=" الدور" />
                    <input type="hidden" name="hos" value="<?php echo $row[2] ?>" />

                    
                    <button type="submit" name="update" class="opacity">تعديل</button>
                </form>
                <div class="register-forget opacity">
                    <a href="../admin/index.php">رجوع</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <!-- <div class="theme-btn-container"></div> -->
    </section>
</body>
<!-- partial -->
<!-- <script src="../assets/js/login.js"></script> -->
<?php
mysqli_close($conn);
}
else{

}
?>
</body>
</html>
