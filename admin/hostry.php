<?php
$targetTime = '3:05:00'; // وقت المقارنة المراد

$currentDateTime = new DateTime();
$currentTime = $currentDateTime->format('H:i:s');

$targetDateTime = DateTime::createFromFormat('H:i:s', $targetTime);
$targetTime = $targetDateTime->format('H:i:s');

if ($currentTime > $targetTime) {
    echo "الوقت الحالي أكبر من الوقت المحدد<br>";
} elseif ($currentTime < $targetTime) {
    echo "الوقت الحالي أصغر من الوقت المحدد";
} else {
    echo "الوقت الحالي يساوي الوقت المحدد";
}

// ___________________________
$start1 = '8:00:00'; // وقت المقارنة المرادبداية الدوام
$end1 = '12:00:00'; // وقت المقارنة المراد
$start2 = '15:00:00'; // وقت المقارنة المراد
$end2 = '20:00:00'; // وقت المقارنة المراد

$currentDateTime = new DateTime();
$currentTime = $currentDateTime->format('H:i:s');

$targetDateTime = DateTime::createFromFormat('H:i:s', $start1);
$start1 = $targetDateTime->format('H:i:s');

if ($currentTime <= $start1 &&$currentDateTime >= $end1) {
    echo "الوقت الحالي أكبر من الوقت المحدد<br>";
} elseif ($currentTime >= $start1 &&$currentTime <= $start1) {
    echo "الوقت الحالي أصغر من الوقت المحدد";
} else {
    echo "الوقت الحالي يساوي الوقت المحدد";
}
?>