<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
  <meta charset="UTF-8">
  <title>blood</title>
  <link rel="stylesheet" href="../assets/css/hos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
</head>
<body style="url('../assets/images/aa.jfif');">

<!-- partial:index.partial.html -->
<body>
   
    <section class="container" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center;">
        <div class="login-container">
         
            <div class="circle circle-one"></div>
            <div class="form-container">
            <?php 
                           session_start();
                            include '../auth/db_connect.php';
                            include '../auth/alert.php';
                            $query="select * from floor";
                            //تنفيذ الاستعلام
                            $result=mysqli_query($conn,$query);
                            //عد البيانات الناتجة من الاستعلام
                            $num=mysqli_num_rows($result);
                            // echo $num; exit();
                            ?>
                <!-- <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" /> -->
                <h1 class="opacity">اضافة مختبر</h1>
                <form action="add_lapr.php" method="post">
                <input type="text" name="name" placeholder="اسم المختبر" required />
         

                    <select class="form-select" aria-label="Default select example" name="floor" required>
                     <option selected disabled> الدور</option>
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
                    <button type="submit" name="add" class="opacity">اضافة</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
