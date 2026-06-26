<?php
include'is_donor.php';
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>جاري المعالجة</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...YOUR-INTEGRITY-KEY...==" crossorigin="anonymous" />
  <script>
    setTimeout(function() {
      window.location.href = "index2.php";
    }, 11000); // تأخير الانتقال لمدة 5 ثوانٍ (5000 مللي ثانية)
  </script>
  <style>
    #progress-bar {
      width: 0%;
      color: danger;
      transition: width 1s ease-in-out;
    }
    .center-div {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }  .body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      /* font-size: ; */
    }
  </style>
  </style>
</head>
<body>
  <div class="container">
    <div class="row">   
     <div class="container">
       <div class="row">
       <div class="row justify-content-center">
         <div class="col-md-6 mt-5">
     
  <div id="myDiv"></div>
  <br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br>
        <h1 class="text-center">جاري المعالجة...</h1>
        <div class="progress">
          <div id="progress-bar" class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>
</div>
  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // تحديث قيمة شريط التقدم بصورة تدريجية
    function updateProgressBar() {
      var progressBar = document.getElementById('progress-bar');
      var value = 0;
      var interval = setInterval(function() {
        value += 10;
        progressBar.style.width = value + '%';
        progressBar.setAttribute('aria-valuenow', value);
        if (value >= 100) {
          clearInterval(interval);
          progressBar.classList.remove('bg-danger');
          progressBar.classList.add('bg-success');
        }
      }, 1000);
    }
   setTimeout(updateProgressBar, 100);
  // استهدف العنصر باستخدام معرفه
var myElement = document.getElementById("myDiv");

// إنشاء العنصر الجديد للاشارة

// إضافة الاشارة إلى العنصر المستهدف
myElement.appendChild(indicator);
  </script>
</body>
</html>