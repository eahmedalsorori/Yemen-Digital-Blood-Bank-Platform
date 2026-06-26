<?php
include("is_donor.php");
?>

<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...YOUR-INTEGRITY-KEY...==" crossorigin="anonymous" />
  <title>تم الحفظ بنجاح</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f1f1f1;
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
      border-radius: 50%;
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
  </style>
</head>

<body>
    <!-- <div class="d-fixed"><div class="h1"><h1 class="h1 f"> تم الحفظ بنجاح </h1></div></div> -->
    <h1 style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);">تم التعديل   بنجاح <br> انت قد استخدمت موقعنا سابقاََ.. شكرالك</h1>
    <div class="loader-wrapper">
    <div class="loader-circle"></div>
    <i class="fas fa-check-circle loader-checkmark"></i>
    <?php
  sleep(3);
  header("Location: ../../admin/index.php");
  exit();
?>

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