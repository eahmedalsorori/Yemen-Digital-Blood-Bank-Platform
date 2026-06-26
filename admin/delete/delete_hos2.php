<?php
include("../auth/ishos.php");
include("../../auth/db_connect.php");
session_start();
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "select * from hospitals where h_id=".$id;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_row($result);
    $sql = "DELETE FROM users
    WHERE email ='".$row[4]."'";
    $result = mysqli_query($conn, $sql);
    // echo $sql;exit();
    $sql = "DELETE FROM hospitals
WHERE h_id =".$id;
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

$_SESSION['success'] = 'تنبيه: تم الحذف بنجاح';
header("Location:../teble_hos2.php");
}else{
    ?>
    <?php
    $_SESSION['error'] = 'تحذير: لم يتم الحذف!!';
    header("Location:../teble_hos2.php");
}
?>
