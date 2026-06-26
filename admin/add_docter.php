<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donor</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/form.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="form.css">
</head>
<body>
  <?php
  include '../auth/ishos.php';
  ?>
<!-- Section: Design Block -->
<section class="text-center" >
  <!-- Background image -->
  <div class="p-5 bg-image" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center; height: 400px;" ></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        margin-bottom:20px ;
        background: hsla(50, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5" style="background-color:silver;">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
        <?php
  include '../auth/alert.php';
        ?>
          <h2 class="fw-bold mb-5">قم باضافة بياناتك بشكل صحيح</h2>
          <form action="doctor.php" method="post" enctype="multipart/form-data">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <!-- <div class="row mb-4">
    
  </div> -->
  <?php 
                           
                            
                            include '../auth/alert.php';
                            include '../auth/db_connect.php';
                            $query="select * from laboratory where h_id=".$_SESSION['hos_id'];
                            //تنفيذ الاستعلام
                            $result=mysqli_query($conn,$query);
                            //عد البيانات الناتجة من الاستعلام
                            $num=mysqli_num_rows($result);
                            // echo $num; exit();
                            ?>
  <!-- Text input -->
  
  <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="name" placeholder='  الاسم  الدكتور'id="first" class="form-control" />
        <label class="errorMessage" id="input2" for="med"></label>

      </div>
    </div>
    <div data-mdb-input-init class="form-outline mb-2" >
    <input type="number" name="phone" id="phone" placeholder=' الدكتور رقم التلفون'id="phone_number" class="form-control" />
    <label class="errorMessage" id="input6" for="phone"></label>
  </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="address" placeholder='العنوان ' id="address" class="form-control" />
        <label class="form-label" for="form6Example1" ></label>
      </div>
    </div>
    <select class="form-select" id="inputState" aria-label="Default select example" name="lab" required>
                     <option selected disabled > المختبر</option>
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
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="email" name="email" placeholder='البريد ' id="form6Example2" class="form-control" />
        <label class="errorMessage" id="input2" for="med"></label>

      </div>
    </div>
   
    
  

  <!-- Email input -->
  


  <!-- Number input -->


 


  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" name="add" class="btn btn-primary btn-block mb-4" style="background-color:brown;">اضافة</button>
</form>
<div class="register-forget opacity">
                    <a href="index.php">رجوع</a>
                </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/all.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/form.js"></script>

</body>
</html>