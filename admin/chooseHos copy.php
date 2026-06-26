<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donor</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
.box {
  /* background-color: #bbe; */
  background-color:yellow;
  color:white;
  padding: 10px;
  border: 1px solid white;
  border-radius: 5px;
  font-size: 20px;
  text-align: center;
}b,span{
  background-color: aqua;
  color: white;
  font-size: 20px;
}
</style>

</head>
<body>
  <?php
    include '../auth/is_donor.php';
  include '../auth/db_connect.php';
    //code not to donate twice
    $check_found=false;
    $new=false;
    $not_check_fount= false;
    $incode=false;
    $old=false;
    $search=false;
    
  if(isset($_POST['Add'])){
    $first_Name=$_POST['first_name'];
    $med_name=$_POST['med_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $blood_group=$_POST['blood_group'];
    $fullname=$first_Name.' '.$med_name.' '.$last_name;
// $_SESSION['full_name']=$fullname;
// 
$sql_search = "SELECT `d_id`, `Date_after_6Months`, `date_created`, `Remaining_days`, `i` , CONCAT(`firste_name`, ' ', `med_name`, ' ', `last_name`)
AS `full_name`
FROM `donors` WHERE CONCAT(`firste_name`, ' ', `med_name`, ' ', `last_name`) = '$fullname'";
$result_search = mysqli_query($conn, $sql_search)or dir("البيانات التي ادخالتها غير صحيحه");
$count_search = mysqli_num_rows($result_search);

if ($count_search > 0) {
// $count++;//=1    Fund search[1]
// echo "Done SQL_SEARCH<br>";
$search=true;
// $now=true;

// عرض البيانات
while ($row = mysqli_fetch_assoc($result_search)) {
    $id_donors = $row['d_id'];
    $date_created = $row['date_created'];
    $date_after_6months = $row['Date_after_6Months'];
    $remaining_days = $row['Remaining_days'];
    $i = $row['i'];
    $full_name = $row['full_name'];
  }    // $_SESSION['fullname']= $full_name;
    if($remaining_days > 0){
      // sleep();
// $id_d =$id_donors;
// $fn = $first_Name;
// $mn = $med_name;
// $ln = $last_name;
// $add = $address;
// $pho = $phone;
// $ag = $age;
// $bg = $blood_group;
// $id_h = $hos;
// $f_id = $floor_id;
// $check_found=true;
// $not_check_fount=true;
echo "Please enter <hr><hr>";
echo "Please enter <hr><hr>";
header("Location:pages/donate_twice.php?&remaining=$remaining_days;&fullname=$full_name")or die("Please enter:<br>");
exit(0);
}
else{
  
$not_check_fount= false;
// $check_found=true;
$incode=true;
$old=true;
}

}else{

  echo "<hr>Please Not Access found ERROR::134 <hr>";

}
  }else{
  //not in code code search This is new donors
    $new=true;
  }
  // 1This's Old donors blood Time Out +6 Mother
if( $old==true ){
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
          <h2 class="fw-bold mb-5">أختار المستشفى</h2>
          <div class="box">
 <b><?php echo $i?></bلا><span>من تاريخ <?php echo date('Y-m-d',strtotime($date_created))."<hr>";?></span>
</div>

          <!-- 2 column grid layout with text inputs for the first and last names -->

  <?php 
                           $query="select * from hospitals ";
                           //تنفيذ الاستعلام
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
                        <form action="chooseLab.php" method="post">
                        <div class="col">
                            <div class="card text-dark bg-light">
                                <div class="card-header"><?php echo $row[1]; ?></div>
                                <input type="text" name="hos_id" value="<?php echo $row[0];?>">
                                <input type="text" name="first_name" value="<?php echo $_POST['first_name'];?>">
                                <input type="text" name="med_name" value="<?php echo $_POST['med_name'];?>">
                                <input type="text" name="last_name" value="<?php echo $_POST['last_name'];?>">
                                <input type="text" name="Address" value="<?php echo $_POST['address'];?>">
                                <input type="text" name="age" value="<?php echo $_POST['age'];?>">
                                <input type="text" name="phone" value="<?php echo $_POST['phone'];?>">
                                <input type="text" name="blood_group" value="<?php echo $_POST['blood_group'];?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row[2]; ?></h5>
                                        <p class="card-text"><?php echo $row[4]; ?></p>
                                    </div>
                                <div class="card-footer bg-transparent "> <button type="submit" name="chooseHos" class="btn btn-secondary">التبرع هنا</button></div>
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
</section><?php

                        }else if($new==true){

?>  

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
                                  <h2 class="fw-bold mb-5">أختار المستشفى</h2>
                                  <h5 class="fw-bold mb-5">متبرع جديد</h5>
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                        
                          <?php 
                                                   $query="select * from hospitals ";
                                                   //تنفيذ الاستعلام
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
                                                <form action="chooseLab.php" method="post">
                                                <div class="col">
                                                    <div class="card text-dark bg-light">
                                                        <div class="card-header"><?php echo $row[1]; ?></div>
                                                        <input type="text" name="hos_id" value="<?php echo $row[0];?>">
                                                        <input type="text" name="first_name" value="<?php echo $_POST['first_name'];?>">
                                                        <input type="text" name="med_name" value="<?php echo $_POST['med_name'];?>">
                                                        <input type="text" name="last_name" value="<?php echo $_POST['last_name'];?>">
                                                        <input type="text" name="Address" value="<?php echo $_POST['address'];?>">
                                                        <input type="text" name="age" value="<?php echo $_POST['age'];?>">
                                                        <input type="text" name="phone" value="<?php echo $_POST['phone'];?>">
                                                        <input type="text" name="blood_group" value="<?php echo $_POST['blood_group'];?>">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo $row[2]; ?></h5>
                                                                <p class="card-text"><?php echo $row[4]; ?></p>
                                                            </div>
                                                        <div class="card-footer bg-transparent "> <button type="submit" name="chooseHos" class="btn btn-secondary">التبرع هنا</button></div>
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
                        }else {
?>



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
                                  <h2 class="fw-bold mb-5">أختار المستشفى</h2>
                                  <h2 class="fw-bold mb-5">Not ALL This else</h2>
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                        
                          <?php 
                                                   $query="select * from hospitals ";
                                                   //تنفيذ الاستعلام
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
                                                <form action="chooseLab.php" method="post">
                                                <div class="col">
                                                    <div class="card text-dark bg-light">
                                                        <div class="card-header"><?php echo $row[1]; ?></div>
                                                        <input type="text" name="hos_id" value="<?php echo $row[0];?>">
                                                        <input type="text" name="first_name" value="<?php echo $_POST['first_name'];?>">
                                                        <input type="text" name="med_name" value="<?php echo $_POST['med_name'];?>">
                                                        <input type="text" name="last_name" value="<?php echo $_POST['last_name'];?>">
                                                        <input type="text" name="Address" value="<?php echo $_POST['address'];?>">
                                                        <input type="text" name="age" value="<?php echo $_POST['age'];?>">
                                                        <input type="text" name="phone" value="<?php echo $_POST['phone'];?>">
                                                        <input type="text" name="blood_group" value="<?php echo $_POST['blood_group'];?>">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo $row[2]; ?></h5>
                                                                <p class="card-text"><?php echo $row[4]; ?></p>
                                                            </div>
                                                        <div class="card-footer bg-transparent "> <button type="submit" name="chooseHos" class="btn btn-secondary">التبرع هنا</button></div>
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
                     <?php   }

                        ?>
<!-- Section: Design Block -->
</body>
</html>