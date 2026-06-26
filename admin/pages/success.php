<?php
// $session_start(); 
$flag=false;
if (isset($_SESSION['full_name'])) {
// $_SESSION['']
$fullname=$_SESSION['full_name'];
$flag=true;
}else{
  echo "NNNNNNNNN";
}
if ($flag) {
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta http-equiv="refresh" content="10;URL='http://localhost/blood/admin/index.php'">

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/css//bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...YOUR-INTEGRITY-KEY...==" crossorigin="anonymous" />
  
  <title>تم الحفظ بنجاح</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 150vh;
      /* background-image: url('../../assets/images/ho.jpg');
      background-size: cover;background-position: center center; 
      color:green;
      box-shadow: inset 50% 50%; */
    }
    span{
      display: flex;
      justify-content: center;
      align-items: center;
      
    }
    .loader-wrapper {
      position: relative;
      width: 200px;
      height: 200px;
    }
    .loader-circle {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 100%;
      background-color: green;
      opacity: 0;
      animation: showCircle 5s forwards;
    }
    .loader-checkmark {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 80px;
      color: white;
      opacity: 0;
      animation: showCheckmark 5s forwards;
    }
    @keyframes showCircle {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    @keyframes showCheckmark {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    .bbg{
      position: absolute;
      top: 0;
      color: white;
      padding: 10%;
      background-color: green;
      border-radius:30% ;
      box-shadow: red 39% 2%;
      /* position: absolute; */
      /* top: 0; */
      /* left: 0; */
      /* width: 100%; */
      /* height: 100%; */
      /* border-radius: 100%; */
      background-color: green;
      opacity: 0;
      animation: showCircle 5s alternate-reverse;
   
    }.ctext{
      color: white;
      border-radius: 50%;
      justify-content: center;
      align-items: center;
      /* loader-circle */
    }
  </style>
</head>

<body>
<?php
$open="    <p style=\"position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);\">";
$close= "</p>";
?>
    <h1 style="position: absolute; top: 15%; left: 50%; transform: translate(-50%, -50%);" class="bbg"> <?php
    echo  "<span >نشكركم على زيارتنا</span><br>
    Ahmed Abdallhe AL_Sorori "."<br><br>";
    ?></h1>
    <!-- <div class="d-fixed"><div class="h1"><h1 class="h1 f"> تم الحفظ بنجاح </h1></div></div> -->
    <h1 style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);" class="ctext">تم الحفظ بنجاح</h1>
    <div class="loader-wrapper">
    <div  class="loader-circle"></div>
    <i class="fas fa-check-circle loader-checkmark"></i>
  </div>
    <script>
    setTimeout(function() {
      var circle = document.querySelector('.loader-circle');
      var checkmark = document.querySelector('.loader-checkmark');
      circle.style.opacity = '1';
      checkmark.style.opacity = '1';
    }, 5000);
  </script>
 
</body>
</html>
<?php
}else{
  echo "<hr>Not Found session";
}
  ?>