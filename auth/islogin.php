<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"]==null)
    {
        // echo"there is no log in";exit() ;
        header("Location:../index.php");
    }
    else{
        include("../auth/db_connect.php");
        $query = "select * from users where id=".$_SESSION["user_id"];
        // echo $query;exit();
         $result =mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); 
        $_SESSION['user_name']= $row[1];
        mysqli_close($conn);
    }
    ?>
</body>
</html>