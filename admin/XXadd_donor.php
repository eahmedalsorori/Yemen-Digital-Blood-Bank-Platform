<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أضافة بياناتكـ</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.3/css/fileinput-rtl.min.css" integrity="sha512-th2bHYvAO2A4uRrFgyEQBqwsC6e2CbVgTgTf1+xwkXIx8f0y8pVo7DOODHtoSciGRNQUXVVFpj3PyveksoBPqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #input1, #input2, #input3, #input4, #input5, #input6, #input7 {
            display: none;
            color: white;
            font-size: 10px;
            font-weight: normal;
            background-color: red;
        }
        span,strong,label{
          font-size:medium;
          font-weight: normal;
        
        }
        strong,.label{
            font-size:medium;
            font-style: normal;

        }

        .alert {
            padding: 20px;
            background-color: red; /* لون الخلفية */
            color: white; /* لون النص */
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            display: none; /* للتأكد من عدم ظهورها في البداية */
        } 
    </style>
</head>
<body>
<?php
include '../auth/is_donor.php';
?>
<section class="text-center">
    <div class="p-5 bg-image" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center; height: 400px;"></div>
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; margin-bottom:20px ; background: hsla(50, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5" style="background-color:silver;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <?php
                    include '../auth/alert.php';
                    ?>
                    <h2 class="fw-bold mb-5">قم باضافة بياناتك بشكل صحيح</h2>
                    <?php
                    if(isset($_SESSION['donation_id'])) {
                        echo '<form action="../doner/donate_for_patient.php" method="post" id="myForm" >';
                    } ?>

                        <form action="chooseHos.php" method="post" id="myForm">
                   
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="first"><strong>ادخل اسمك الاول:</strong> </label>
                                <input type="text" onblur="validateFirstName()" name="first_name" placeholder='الاسم الاول' id="first" class="form-control" required/>
                                <label id="input1" class=" form-label" for="first"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="med"><strong>ادخل اسمك الثاني:</strong> </label>
                                <input type="text" onblur="validateSecondName()" name="med_name" placeholder='اسم الثاني' id="med" class="form-control" required />
                                <span> <label id="input2" class="  form-label"  for="med"></label></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="last"><strong>ادخل اسمك الاخير:</strong> </label>
                                <input type="text" onblur="validateThirdName()" name="last_name" placeholder='الاسم الاخير' id="last" class="form-control" required/>
                                <label id="input3"  class="  form-label" for="last"></label>
                            </div>
                        </div>
                        <div class="col">
                            <label class="label" for="address"><strong>ادخل عنوانك:</strong> </label>
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" onblur="validateAdderss()" name="Address" placeholder='العنوان ' id="address" class="form-control" required/>
                                <label id="input4"  class="  form-label" for="address"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="age"><strong>ادخل عمرك:</strong> </label>
                                <input type="number" maxlength="2" onblur="validateAge()" name="age" placeholder='العمر' id="age" class="form-control" required/>
                                <label id="input5"  class=" form-label" for="age"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="phone" class="label"><strong>ادخل رقم الجوال:</strong> </label>
                                <input type="number" maxlength="9" name="phone" onblur="validatePhoneNumber()" id="phone" placeholder='رقم الهاتف' id="phone" class="form-control" required />
                                <label id="input6"  class=" form-label" for="phone"></label>
                            </div>
                        </div>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="label" for="inputState"><strong>ادخل فصيلة دمك:</strong> </label>
                        <select id="inputState" name="blood_group"  onselect="selected()" placeholder="فصيلة الدم" class="form-select" required>
                            <option value="null" disabled selected value="">اختار فصيلة الدم</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">O+</option>
                            <option value="6">O-</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option>
                        </select>
                        <label id="input7" class=" form-label" for="inputState"></label>
                    </div>
                                 <button data-mdb-ripple-init type="submit" id="submitButton" onclick="myFunction()" name="sigin" class="btn btn-primary btn-block mb-4" style="background-color:brown;">اضافة</button>

                </form>
            </div>
        </div>
    </div>
</section>
<script src="contion.js"></script>
</body>
</html><?php
/*if{$query="insert into donors (firste_name,med_name,last_name,age,Address,phon,blood_group)
     values ('".$first_name."','".$med_name."','".$last_name."','".$age."','".$address."','".$phon."','".$blood_group."')";
    // echo $query;exit();
    $result=mysqli_query($conn,$query);
    // echo $query;exit();
    $don_id="select * from donors where firste_name='".$first_name."' and med_name='".$med_name."' and last_name='".$last_name."' Where hos";
    $result=mysqli_query($conn,$don_id);
    $don_id= mysqli_fetch_row($result);
    $query="insert into donation (d_id,do_id)
     values (".$don_id[0].",".$doc.")";
    //  echo $query;exit(); 
     $result=mysqli_query($conn,$query);
    mysqli_close($conn);
    $_SESSION['success']=" تمت اضافة متبرع";
    header("Location:../admin/add_doner.php");
}else{
    echo" This not ERORR";
}?>*/
/*
___________________________________Last -Page-donor_______________________
include("../auth/is_donor.php");
date_default_timezone_set('Asia/Aden');    
 if(isset($_POST["chooselab"]))
{
    // echo"hhhh";exit();
 
    include("../auth/db_connect.php");
    $first_name=$_POST['first_name'];
    $med_name=$_POST['med_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['Address'];
    $phon=$_POST['phone'];
    $age=$_POST['age'];
    $blood_group=$_POST['blood_group'];
    $hos=$_POST['hos_id'];
    $doc=$_POST['doc_id'];
    $floor_id=$_POST['floor_id'];
    $now=$_POST['now'];
    $conut=0;
    $sql = "INSERT INTO `donors`(`firste_name`,`med_name`,`last_name`,`age`,`address`,`phon`,`blood_group`) VALUES ('".$first_name."','".$med_name."','".$last_name."',$age,'".$address."',".$phon.",'".$blood_group."');";
    // echo $sql;exit();
    $result=mysqli_query($conn,$sql);
    // $num=mysqli_num_rows($result);

        if($result){
        $conut++;//1
                $sql_id = "SELECT MAX(d_id) AS last_id FROM donors;";
                $result1 = $conn->query($sql_id);
                // // استخراج البيانات من الصف كمصفوفة
                // $row = mysqli_fetch_array($result1);
                
                // _________________________
                
                if($result1->num_rows > 0){
                    $conut++;//2
                    echo"sql_id=".$count;
                    $last_id = $row["last_id"];
                     $last_id;
                     $sql2 = "INSERT INTO `donation`(`d_id`, `do_id`) VALUES ('$last_id','$doc');";
                     $result2 = $conn->query($sql2);
                    //  ______________________
                }else{
                    echo "Error in sql_id";
                    } 
 
                if ($result2->num_rows > 0) {
                        $count++;//3
                        echo"sql2=".$count;
                     }
                     else{
                        echo"Error in sql_2";
                     } 
                }else{
                        echo"Error in sql_id";
                }
                                       echo $conut."       3 ";//3                    
// $sql2 = "INSERT INTO `donation`( `d_id`, `do_id`) VALUES ('',);";


    






}else{
    echo "لم يتم الدخول بشكل المسموح ×××××";
}



*/




?>