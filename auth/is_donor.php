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
    if (!isset($_SESSION["type"]) && $_SESSION["type"]!=1)
    {
        // echo"there is no log in";exit() ;
        header("Location:../admin/index.php");
    }
    else{
        include("db_connect.php");

        $query = "select * from users where id=".$_SESSION["user_id"];
        // echo $query;exit();

        $result =mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); 
        $_SESSION['firste_name']= $row[1];
        mysqli_close($conn);
    }
    ?>
</body>
</html>