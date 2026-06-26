<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donor</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <?php
  include '../auth/is_donor.php';
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
          <h2 class="fw-bold mb-5">أختار المختبر المناسب</h2>
  <!-- 2 column grid layout with text inputs for the first and last names -->

  <?php 
                  date_default_timezone_set('Asia/Aden');

                  // الحصول على التاريخ والوقت الحالي
                  $currentDateTime = date('Y-m-d  H:i:s');
                  
                  // عرض التاريخ والوقت الحالي
                  $currentDateTime;
                  
                    
                           if (isset($_POST['chooseHos'])) {
                            # code...
                 
                           include '../auth/db_connect.php';
                           
                           $query="SELECT doctor.do_id,doctor.name,laboratory.name,doctor.l_id,doctor.phone,hospitals.h_id,laboratory.l_id,hospitals.name,floor.f_id,floor.f_num
                              FROM laboratory JOIN doctor ON doctor.l_id = laboratory.l_id JOIN hospitals ON hospitals.h_id = laboratory.h_id JOIN FLOOR ON floor.f_id = laboratory.f_id
                              WHERE doctor.check = 0 AND laboratory.h_id =".$_POST['hos_id'].";";
                           //;
                           //تنفيذ الاستعلام
                          //  "select * from laboratory l, doctor d, floor f where d.l_id=l.l_id and f.f_id=l.f_id and l.h_id="
                           //  echo $query;exit();
                           $result=mysqli_query($conn,$query);
                           //عد البيانات الناتجة من الاستعلام
                           $num=mysqli_num_rows($result);
                           // echo $num; exit();
                           ?>
                        <div class="row row-cols-1 row-cols-md-4 g-4">
 
                      <?php
                            //لانهم عدة بيانات نحتاج حلقة دوران
                            for($i=0;$i<$num;$i++)
                            {
                                //جلب البيانات على سطرسطر
                                $row=mysqli_fetch_row($result);
                                // echo $row[1];exit();
                        ?>
                        <form action="donor.php" method="post" enctype="multipart/form-data">
                        <div class="col">
                            <div class="card text-dark bg-light ">
                                <div class="card-header"></div>
                                <input type="hidden" name="doc_id" value="<?php echo $row[0];?>">
                                <input type="hidden" name="now" value="<?php echo $currentDateTime;?>">
                                <!-- <input type="hidden" name="doc_id" value=""> -->
                                <input type="hidden" name="first_name" value="<?php echo $_POST['first_name'];?>">
                                <input type="hidden" name="med_name" value="<?php echo $_POST['med_name'];?>">
                                <input type="hidden" name="last_name" value="<?php echo $_POST['last_name'];?>">
                                <input type="hidden" name="Address" value="<?php echo $_POST['Address'];?>">
                                <input type="hidden" name="age" value="<?php echo $_POST['age'];?>">
                                <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>">
                                <input type="hidden" name="blood_group" value="<?php echo $_POST['blood_group'];?>">
                                <input type="hidden" name="hos_id" value="<?php echo $_POST['hos_id'];?>">
                                
                                <input type="hidden" name="floor_id" value="<?php echo $row[8];?>">
                                <?php
                                if($_POST['flag']==1){
                                ?>
                                <input type="hidden" name="flag" value="<?php echo $_POST['flag'];?>">
                                <?php }else {?>
                                <input type="hidden" name="flag" value="<?php echo $_POST['flag']; }//end if
                                ?>">

                                  
                                    <div class="card-body">
                                        <h6 class="card-title"> اسم الدكتور / <?php echo $row[1]; ?></h5>
                                        <p class="card-text"> رقم الجوال/ <?php echo $row[4]; ?></p>
                                        <p class="card-text"> اسم المختبر/ <?php echo $row[2]; ?></p>
                                        <p class="card-text"> اسم المستشفى/ <?php echo $row[7]; ?></p>
                                        <p class="card-text"> الدكتور في الدور/ <?php echo $row[9]; ?></p>
                                    </div>
                                <div class="card-footer bg-transparent "> <button type="submit" name="chooselab" class="btn btn-secondary">التبرع هنا</button></div>
                            </div>
                        </div>
                        </form>
                       
                        <?php
                            }
                            mysqli_close($conn);
                       
                        ?>
                        </div>
                    
                  <br>



  <!-- Submit button -->
 
        </div>
      </div>
    </div>
  </div>
</section>
<?php
   }else{
    echo"this error not Dirctions ";
  }
  ?>
<!-- Section: Design Block -->
</body>
</html>