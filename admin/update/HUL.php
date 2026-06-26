<?php
include("../../auth/db_connect.php");
session_start();
if(isset($_POST["update"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $hos_id=$_POST["hos"];
    $floor=$_POST['floor'];
  

// ملاحظة هنااااااااالك غلط في التعديل
$query="SELECT * FROM hospitals h , floor f WHERE h.floor=f.f_id  and h_id=".$hos_id;
// echo $query;exit();
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
if($floor>$row[9]){
        mysqli_close($conn);
        $_SESSION['error']="الدور  غير صحيح  ";
        header("Location:../teble_lab.php");
    }else{
        // echo "entered";exit();
        $query2="select * from floor where f_num=".$floor;
        // echo $query2;exit();

        $result=mysqli_query($conn,$query2);
        $row=mysqli_fetch_row($result);
        $f_id=$row[0];
        // echo $f_id;exit();

    $query=" UPDATE laboratory
    SET name ='".$name."',
     h_id = ".$hos_id.",
     f_id = ".$f_id."
    WHERE l_id =".$id;
    // echo $query;exit();
    $result=mysqli_query($conn,$query);
    mysqli_close ($conn);

    $_SESSION['success'] = "تنبيه: تم التعديل بنجاح";
    header("Location:../teble_lab.php");
    }
}
else{
?>
<?php 
 $_SESSION['error'] =" تحذير: هناك خطا لم يتم التعديل!!";
 header("Location:../teble_lab.php");
}
?>