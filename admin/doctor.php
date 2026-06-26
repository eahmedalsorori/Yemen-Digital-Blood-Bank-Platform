<?php
session_start();
// echo"hhhh";exit();
 if(isset($_POST["add"]))
{
    //  echo"hhhh";exit();
    include("../auth/db_connect.php");
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $lab=$_POST['lab'];
    $firsttwo=substr($phone,0,2);
    
    if(strlen($phone)!=9 || $firsttwo !=77 && $firsttwo !=78 && $firsttwo !=73 && $firsttwo !=70 && $firsttwo !=71)
    {
        // echo "error";exit();
        $_SESSION['error']="  رقم الهاتف غير صحيح تاكد من انة 9 ارقام ورقم يمني";
        // echo 6;exit();
        header("Location:add_docter.php");
    }
    else{
        // echo "not error";exit();
        $query="insert into doctor (name,phone,address,email,l_id) values ('".$name."','".$phone."','".$address."','".$email."',".$lab.")";
        // echo $query;exit();
        $result=mysqli_query($conn,$query);
        // echo $query;exit();
        mysqli_close($conn);
        $_SESSION['success']=" تمت اضافة دكتور";
        header("Location:add_docter.php");
    }
    
}
?>