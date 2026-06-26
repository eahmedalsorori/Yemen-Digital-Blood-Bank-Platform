<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("../auth/db_connect.php");
$query="select count(*) from donors where blood_group =".'6';
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$_SESSION['om']= $row['0'];
mysqli_close($conn);
?>
</body>
</html>