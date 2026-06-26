<?php
$id=$_GET['id'];
// $p_id=$_GET['p_id'];
// echo $p_id;exit();
session_start();
include '../../auth/db_connect.php';
$q1="select p_id from request where id=".$id;
$result1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_row($result1);

$q="delete  from request where id=".$id;
$result=mysqli_query($conn,$q);

$q3="delete from patient where p_id=".$row1[0];
mysqli_close($conn);
$_SESSION['success']="تمت العلمية";
header("Location:../../hos/request.php");


?>