<?php
include("../auth/ishos.php");
include("../../auth/db_connect.php");
session_start();
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "select * from doctor where l_id=".$id;
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
     $_SESSION['error'] = 'يوجد بيانات تعتمد على هذا الحقل لم يتم الحذف!';
     header("Location:../teble_lab.php");
    }
    else
    {
     $sql = "DELETE FROM laboratory
     WHERE l_id =".$id;
     $result = mysqli_query($conn, $sql);
     mysqli_close($conn);
     
     $_SESSION['success'] = ' تم الحذف بنجاح';
     header("Location:../teble_lab.php");
    }
    // echo $sql;exit();
   
}else{
    
    $_SESSION['error'] = ' لم يتم الحذف!';
    header("Location:../teble_lab.php");
}
