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
    if (!isset($_SESSION["type"]) && $_SESSION["type"]!=3)
    {
        // echo"there is no hos in";exit() ;
        
        header("Location:../admin/index.php");
    }
    else{
        include("db_connect.php");

        $query = "select * from users where id=".$_SESSION["user_id"];
        // echo $query;exit();

        $result =mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); 
        $query = "select * from hospitals where email='".$row[2]."'";

        // echo $query;exit();
         $result =mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result); 
        $_SESSION['hos_id']=$row[0];
        $_SESSION['name']= $row[1];
        mysqli_close($conn);
      
    }
    ?>
</body>
</html>