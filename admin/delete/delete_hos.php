<?php
include("../../auth/db_connect.php");
session_start();
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "select * from hospitals where h_id=".$id;
    // echo $sql;exit();

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($result);
    $sql = "update  users set users.check=". 1 ."
    WHERE email ='".$row[5]."'";
    // echo $sql;exit();

    $result=mysqli_query($conn,$sql);
  
mysqli_close($conn);

$_SESSION['success'] = 'تنبيه: تم الايقاف بنجاح';
header("Location:../teble_hos.php");

}
elseif($_GET["ac"]){
   $id = $_GET["ac"];
    $sql = "select * from hospitals where h_id=".$id;
    // echo $sql;exit();

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($result);
    $sql = "update  users set users.check=". 0 ."
    WHERE email ='".$row[5]."'";
    // echo $sql;exit();

    $result=mysqli_query($conn,$sql);
    
  
mysqli_close($conn);
$_SESSION['success'] = 'تنبيه: تم الايقاف بنجاح';
header("Location:../teble_hos.php");

}
else{
    ?>
    <?php
    $_SESSION['error'] = 'تحذير: لم يتم الايقاف!!';
    header("Location:../teble_hos.php");
}
?>
