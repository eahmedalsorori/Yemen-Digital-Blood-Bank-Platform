<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
  <meta charset="UTF-8">
  <title>add new hospital</title>
  <link rel="stylesheet" href="../assets/css/hos.css" />

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="url('../assets/images/aa.jfif');">
<!-- partial:index.partial.html -->
<body>
    <?php 
include '../auth/ishos.php';
include("../auth/db_connect.php");
if(isset($_GET["id"])){
$id=$_GET['id'];
// echo $id;exit();
$sql= 'select * from doctor where do_id='.$id;
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
                <h1 class="opacity">تعديل على الدكتور</h1>
                <form action="update/HUD.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row[0] ?>" placeholder=" رقم" />

                <input type="text" name="name" value="<?php echo $row[1] ?>" placeholder="اسم الدكتور" />
                    <input type="number" value="<?php echo $row[2] ?>" name="phone" placeholder=" التلفون" />
                    <input type="text" name="address" value="<?php echo $row[3] ?>" placeholder=" العنوان" />
                    
                    <input type="email" value="<?php echo $row[4] ?>" name="email" placeholder=" البريد الالكتروني" />
                    <?php 
                           
                            include '../auth/db_connect.php';
                            include '../auth/alert.php';
                            $query="select * from laboratory where h_id=".$_SESSION['hos_id'];
                            //تنفيذ الاستعلام
                            $result=mysqli_query($conn,$query);
                            //عد البيانات الناتجة من الاستعلام
                            $num=mysqli_num_rows($result);
                            // echo $num; exit();
                            ?>
                              <select class="form-select" id="validationCustom04" name="lab" required>
                             <option selected disabled value=""> المختبر</option>
                             <?php
                            //لانهم عدة بيانات نحتاج حلقة دوران
                            for($i=0;$i<$num;$i++)
                            {
                                //جلب البيانات على سطرسطر
                                $row=mysqli_fetch_row($result);
                                // echo $row[1];exit();
                        ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                       
                        <?php
                            }
                            mysqli_close($conn);
                        ?>
                    </select>
                  <br>

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

}
else{

}
?>
</body>
</html>
