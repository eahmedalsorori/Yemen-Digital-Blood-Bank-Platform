<?php
$id=$_GET['id'];
// $p_id=$_GET['p_id'];
// echo $id;exit();
session_start();
include '../../auth/db_connect.php';
$q1="select d_id from donation where id=".$id;
$result1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_row($result1);

$q="delete from donation where id=".$id;
$result=mysqli_query($conn,$q);

$q3="delete from donors where d_id=".$row1[0];
mysqli_close($conn);
$_SESSION['success']="تمت العلمية";
header("Location:../../hos/donations.php");


