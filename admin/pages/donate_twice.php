<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحة الانتظار</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .box {
      background-color: #fa0000;
      color: #fff;
      transition: width 2s  cubic-bezier();

      padding: 200px;

      border: 5px solid #faf7f7;
      border-radius: 5px;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 48px;
    }
 
 </style>
</head>
<body>
  <?php
  if($_GET['remaining']>0 && $_GET['fullname']!==null)
    {$remaining=$_GET['remaining'];
      $full_name=$_GET['fullname'];
      ?>
    <div class="box">
      <h4> الاسم الكامل :<?php echo $full_name; ?></h4><br>
      <h2>لايمكنك التبرع مرة قادمه الا بعد <?php echo $remaining ."يوماً ...(:";?> </h2>
    </div>  <?php
     }?>
      <script>
    function updateProgressBar() {
      var progressBar = document.querySelector('.box');
      var value = 0;
      var interval = setInterval(function() {
        value += 10;
        progressBar.style.width = value + '%';
        if (value >= 50) {
          clearInterval(interval);
        }
      }, 1000);
    }

    setTimeout(updateProgressBar, 3000);
  </script>
</body>
</html>