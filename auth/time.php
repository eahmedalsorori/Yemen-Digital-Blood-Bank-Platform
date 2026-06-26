<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time_now</title>
</head>
<body>
<p id="date"></p>
<p id="time"></p>

<script>
  function updateTime() {
    var currentDate = new Date();

    var year = currentDate.getFullYear();
    var month = currentDate.getMonth() + 1;
    var day = currentDate.getDate();

    var hours = currentDate.getHours();
    var minutes = currentDate.getMinutes();
    var seconds = currentDate.getSeconds();
    // var milliseconds = currentDate.getMilliseconds();

    var date = "التاريخ: " + year + "-" + month + "-" + day;
    var time = "الوقت: " + hours + ":" + minutes + ":" + seconds;

    var dateElement = document.getElementById("date");
    var timeElement = document.getElementById("time");

    dateElement.textContent = date;
    timeElement.textContent = time;
  }

  // تحديث الصفحة كل ثانية (1000 مللي ثانية)
  setInterval(updateTime, 1000);
</script>
</script>
</body>
</html>
