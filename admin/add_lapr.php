<?php
session_start();
 if(isset($_POST["add"]))
{ 
    // echo"hhhh";exit();
    include("../auth/db_connect.php");
    $name=$_POST['name'];
    $hos_id=$_SESSION['hos_id'];
    $floor=$_POST['floor'];
    $query2="select * from floor where f_id=".$floor;
    $result=mysqli_query($conn,$query2);
    $row=mysqli_fetch_row($result);
    $floornum=$row[1];
    $query="SELECT * FROM hospitals h , floor f WHERE h.floor=f.f_id  and h_id=".$hos_id;
// echo $query;exit();
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
if($floornum>$row[9])
    {
        //كود فحص الرقم اذا كان اكبر من تسعة او ستة او لم يبداء  
        // echo    strlen($phone) ;exit();
        $_SESSION['error']="الدور  غير صحيح  ";
        // echo 6;exit();
        header("Location:lapr.php");
    }
    else
    {
        $query="insert into laboratory (name,h_id,f_id) values ('".$name."',".$hos_id.",".$floor.")";
        // echo $query;exit();
        $result=mysqli_query($conn,$query);

        // echo $query;exit();
        mysqli_close($conn);
        $_SESSION['success']=" تمت اضافة مختبر";
        header("Location:lapr.php");
    }
}
?>