<?php
include("../../auth/db_connect.php");
session_start();
if(isset($_GET["id"])){
            // echo 'aaaa';exit();

    $id = $_GET["id"];
    $sql = "select * from donation where do_id=".$id;
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    $sql = "select * from request where do_id=".$id;
    $result=mysqli_query($conn,$sql);
    $count2=mysqli_num_rows($result);
    if($count>0 || $count2 >0)
    {
        $_SESSION['error'] = 'يوجد بيانات تعتمد على هذا الحقل لم يتم الحذف!';
        header("Location:../teble_doct.php");
    }
    else
    {
        $sql = "DELETE FROM doctor
        WHERE do_id =".$id;
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $_SESSION['success'] = 'تنبيه: تم الحذف بنجاح';
        header("Location:../teble_doct.php");
    }
    // echo $sql;exit();
   
}else{
    ?>
    <?php
    $_SESSION['error'] = 'تحذير: لم يتم الحذف!!';
    header("Location:../teble_doct.php");
}
?>
