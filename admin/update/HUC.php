<?php
include("../../auth/db_connect.php");
session_start();
if(isset($_POST["update"])){
    $id=$_POST["id"];
    $oldname=$_POST["oldname"];
    $name=$_POST["name"];
    $city=$_POST['city'];
    $floor=$_POST['floor'];
    $address=$_POST['address'];
    $email=$_POST["email"];
    $oldemail=$_POST["oldemail"];

    $sql = "SELECT email 
    FROM users
    WHERE email = '".$email."' and username !='".$oldname."' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0){
        mysqli_close($conn);
        $_SESSION['error'] ="تحذير: البريد الالكتروني مستخدم بالفعل اختر ايميل اخر!!";
        header("Location:../teble_hos.php");
    }else{
    $query=" UPDATE hospitals
    SET name ='".$name."',
     city = '".$city."',
     floor = '".$floor."',
        address = '".$address."',
        email = '".$email."'
    WHERE h_id =".$id;
    // echo $query;exit();

    $result=mysqli_query($conn,$query);
    $query=" UPDATE users
    SET username ='".$name."',
        email = '".$email."'
    WHERE email ='".$oldemail."'";
    // echo $query;exit();

    $result=mysqli_query($conn,$query);
    mysqli_close    ($conn);

    $_SESSION['success'] = "تنبيه: تم التعديل بنجاح";
    header("Location:../teble_hos.php");
    }
}
else{
?>
<?php 
 $_SESSION['error'] =" تحذير: هناك خطا لم يتم التعديل!!";
 header("Location:../teble_hos.php");
}
?>