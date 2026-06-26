<?php
 

include("../../auth/db_connect.php");
session_start();
if(isset($_POST["update"])){
    
    $id=$_POST["id"];
    $name=$_POST["name"];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST["email"];
    $lab=$_POST["lab"];
    // echo $lab;exit();
  



        // echo 'the same';exit();

    $query=" UPDATE doctor
    SET name ='".$name."',
     phone = '".$phone."',
        address = '".$address."',
        email = '".$email."',
        l_id = ".$lab."
    WHERE do_id =".$id;
    // echo $query;exit();

    $result=mysqli_query($conn,$query);

    mysqli_close($conn);

    $_SESSION['success'] = "تنبيه: تم التعديل بنجاح";
    header("Location:../teble_doct.php");
    
}
else{
?>
<?php 
 $_SESSION['error'] =" تحذير: هناك خطا لم يتم التعديل!!";
 header("Location:../teble_doct.php");
}
?>