<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("../../auth/db_connect.php");
// $query="select count(*) from donors where blood_group =".'7';
$query="select count(*) from donation dn , donors d, doctor dc , laboratory l 
where dn.d_id=d.d_id
 and dn.do_id=dc.do_id 
 and dc.l_id=l.l_id 

 and d.blood_group=".'7';
// echo $query;exit();
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$_SESSION['abp']= $row['0'];
mysqli_close($conn);
?>
</body>
</html>