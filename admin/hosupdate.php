<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
  <meta charset="UTF-8">
  <title> blood</title>
  <link rel="stylesheet" href="../assets/css/hos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
</head>
<!-- partial:index.partial.html -->
<body>
    <?php 
include("../auth/isadmin.php");
include("../auth/db_connect.php");
if(isset($_GET["id"])){
$id=$_GET['id'];
// echo $id;exit();
$sql= 'select * from hospitals where h_id='.$id;
// echo $sql;exit();
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
    ?>
    <section class="container" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center;">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
            <?php 
                           
                        //    include '../auth/db_connect.php';
                           include '../auth/alert.php';
                           $query="select * from floor";
                           //تنفيذ الاستعلام
                           $result=mysqli_query($conn,$query);
                           //عد البيانات الناتجة من الاستعلام
                           $num=mysqli_num_rows($result);
                           // echo $num; exit();
                           ?>
                <!-- <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" /> -->
                <h1 class="opacity">تعديل على مستشفى</h1>
                <form action="update/HUC.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row[0] ?>" placeholder=" " />
                <input type="hidden" name="oldname" value="<?php echo $row[1] ?>" placeholder=" " />

                <input type="text" name="name" value="<?php echo $row[1] ?>" placeholder="اسم المستشفى" />
                    <input type="text" value="<?php echo $row[2] ?>" name="city" placeholder=" المدينة" />
                   
                             <select class="form-select" aria-label="Default select example" name="floor" required>
                     <option selected disabled value=""> الدور</option>
                      <?php
                            //لانهم عدة بيانات نحتاج حلقة دوران
                            for($i=0;$i<$num;$i++)
                            {
                                //جلب البيانات على سطرسطر
                                $row2=mysqli_fetch_row($result);
                                // echo $row[1];exit();
                        ?>
                        <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>
                       
                        <?php
                            }
                           
                        ?>
                    </select>
                  <br>
                    <input type="text" name="address" value="<?php echo $row[4] ?>" placeholder=" العنوان" />
                    <input type="email" name="email" value="<?php echo $row[5] ?>" placeholder="البريد الالكتروني" />
                    <input type="hidden" name="oldemail" value="<?php echo $row[5] ?>" placeholder="البريد الالكتروني" />
                    
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
