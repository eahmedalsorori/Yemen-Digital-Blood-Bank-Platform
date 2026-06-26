<?php 
// include"Sechuale";
// session_start();
// // $id_donors=$_SESSION['donors_id'];
// // $id_doc=$_SESSION['doc_id'];
// // $id_hos=$_SESSION['hos_id'];
// // $id_floor=$_SESSION['floor_id'];
// // $id_donation=$_SESSION['don_id'];
// // echo   "<br> donors:   ". $_SESSION['donors_id'].  "<br>"  ."full_name    =   "  . $_SESSION['full_name'].  "<br>" .   "doctor_id   =  " .$_SESSION['doc_id'].  "<br>"."hos_id     ="  .$_SESSION['hos_id'].  "<br>"  ."floor_id=   ".
// // $_SESSION['floor_id']   .  "<br> donation_id=  "  .$_SESSION['don_id'].  "<br>"  ;
// // _____________________________TESTING
// $_SESSION['donors_id']=10;
// // $_SESSION['donors_id']=$last_id;
//          $_SESSION['doc_id']=2;
//          $_SESSION['hos_id']=1;
//          $_SESSION['floor_id']=1;
//         $_SESSION['don_id']=2;
//         $_SESSION['fullname']="Testing All POINN ";
 
// $name=$_SESSION['fullname'];
// $id_donors=$_SESSION['donors_id'];
// $id_doc=$_SESSION['doc_id'];
// $id_hos=$_SESSION['hos_id'];
// $id_floor=$_SESSION['floor_id'];
// $id_donation=$_SESSION['don_id'];

        // if(isset($_SESSION['donors_id'])){
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <!-- http:\\localhost\blood\admin\booking.php -->
    <meta charset="UTF-8">
    <title>Document</title>
<style>
*{
    font: 1em sans-serif;
    
}
b{
    font-style: italic;
    font: 2em 100;
    background-color: chocolate ;
    padding: 2px;
    margin: 20px;
}
    span{
    color: black;
    background-color:orange ;    
    font-size: large;
    font-family:'Times New Roman', Times, serif;
    margin: 10px;
    padding: 2px;
    }
    .ddir{
        color:#776;
    }
</style>
</head>
<body>
    <div>
<?php
// <div></div>
// ______________________________________________________________________________
// date_default_timezone_set('Asia/Aden');
// // $dayOfWeekphp = date('w');//الأحد هو اليوم رقم 0 والسبت هو اليوم رقم 6
// $ddate = date('Y-m-d ',strtotime('now')); // التاريخ الحالي بالتنسيق الافتراضي (YYYY-MM-DD HH:MM:SS)
// $Time = date('H:i:s ',strtotime('now')); // التاريخ الحالي بالتنسيق الافتراضي (YYYY-MM-DD HH:MM:SS)
// $arrtimes=array(
//     '8:00ص' ,'9:00ص' ,'10:00ص' ,'11:00ص' ,'12:00ص' ,'3:00م' ,'4:00م' ,'5:00م' ,'6:00م' ,'7:00م' ,'8:00م' ,'9:00م' 
// );
// setlocale(LC_TIME, 'ar'); // تعيين اللغة العربية
// $ar_week= array(
//     6=>'السبت',
//     0=> 'الأحد',
//     1=>'الاثنين',
//     2=>'الثلاثاء',
//     3=>'الأربعاء',
//     4=>'الخميس',
//     5=>'الجمعة'
// );$en_week = array(
//     0=>'Saturday',
//     1=> 'Sunday',
//     2=>'Monday',
//     3=>'Tuesday',
//     4=>'Wednesday',
//     5=>'Thursday',
//     6=>'Friday'
// );
// // function booking_on_Day($oi ,)
// $dayNumber = date("N") -6;// 0->السبت
// echo "<br>".$dayNumber."<br>";
// include"../auth/db_connect.php";
// $sql_id = "SELECT day_date,list_index_order,date_created,Order_Booking,MAX(id) AS last_id FROM booking";
// // echo    $sql_id;exit;
// $result_id =mysqli_query($conn,$sql_id);
// if($rows=mysqli_num_rows($result_id)> 0)
// {
//     $row=mysqli_fetch_array($result_id);
//         $now_Day=$row[0];
//         $index= $row[1];
//         $create = $row[2];
//         $info = $row[3];
//         $max=$row[4];
//         date('Y-m-d ',strtotime($now_Day));
       
//     // echo;
    
// }
?>
</div>
<?php
// mysqli_close($conn);
// $Date_list_DB= date("N",strtotime($ddate));
// $Date_machin= date("N",strtotime($now_Day));
// $Date_machin1= date("Y-m-d",strtotime($now_Day));
// // echo$now_Day."<br>".$ddate."<br>".$ar_week[$Date_list_DB]."<br>".$ar_week[$Date_machin]."<br>";
// $day_BD=$ar_week[$Date_list_DB];
// $day_machin=$ar_week[$Date_machin];
// $day_machin1=$ar_week[$Date_machin];
// if($day_BD===$day_machin){
//        echo "    <b>اليوم الموعد </b>  <span>". $day_machin . "</span><br>";
//        echo "    <b>التاريخ الموعد </b>  <span>". $Date_machin1 . "</span><br>";
//        if($index<12){
//              $index++;
//           echo"<b>الوقت الحضور </b>: <span>". $arrtimes[$index]."</span> <br>";
//             $bookingtime=$arrtimes[$index];
            
//         $after_one_day=date("N",strtotime("+1 days"));
//         //
//         // if($after_one_day){
//         //endif($index<12)}
//     }else{
// // 
//         // $after_one_day=date("N",strtotime("+1 days"));
//         // $aafrt_days=$ar_week[$after_two_day];
//         if(($ar_week[$dayNumber]=='الجمعة' && $en_week[$dayNumber]=='Friday'&& $dayNumber===7)|| ($ar_week[$dayNumber]=='الخميس' && $en_week[$dayNumber]=='Thursday'&& $dayOfWeek===6))
//  {
 
// if($dayNumber===7||$dayNumber===6){
// $dayNumber=0;
// }

//     }
//         //end if($day_BD===$day_machin)
//            }       }
//                else{ 
//         //else to ($day_BD===$day_machin)
//             for($i= 1;$i< 7;$i++){
//         $afterday=date("N",strtotime("+[".$i."] days"));
//         $afterday=date("Y-m-d",strtotime("+[".$i."] days"));
//         $index=0;
//         if($day_BD===$afterday){
//             echo "    <b>اليوم الموعد </b>  <span>". $afterday . "</span><br>";
//          if($index<12){
//               $index++;
//               echo"<b>الوقت الحضور </b>: <span>". $afterday."</span> <br>";
//              $bookingtime=$arrtimes[$index];
//              }
     
//         // echo "    <b>اليوم الموعد </b>  <span>". $day_machin . "</span><br>";
//     // if($index<12){
        
// }
    







//   }
// //  else{
// //     // if($day_BD===$day_machin){
// //         for ($i=1; $i <=10 ; $i++) { 
// //             $afterday=date("N",strtotime('+['.$i.'] days'));
// //             $afterdate = date('Y-m-d ',strtotime('+['.$i.'] days'));
// //             if($day_BD===$day_machin){
// //                 echo "    <b>اليوم الموعد </b>  <span>". $day_machin . "</span><br>";
// //          if($index<12){
// //              $index++;
// //              echo"<b>الوقت الحضور </b>: <span>". $arrtimes[$index]."</span> <br>";
          
// //          }else{
// //             $afterday=date("N",strtotime("+1 days"));
// //          }
// //             }}
            
    
// //  }
// }
// // $row_id = mysqli_fetch_array($result_id);
// // echo$row_id;
//  // رقم اليوم الحالي (0 للأحد، 1 للاثنين، وهكذا)
// //  echo $dayOfWeekphp;
 
// // echo $dayOfWeekphp;
// // echo $ar_week[$dayNumber]."<br>";
// // echo $en_week[$dayNumber]."<br>";
// // _____________________Now work السبتSaturday
// $count=1;


// // static function daysInMonth($year, $month, $day) {
// // Saturday
//     // $dayOfWeek = date('l', strtotime($date)); // استخراج اسم اليوم من التاريخ
// // echo $dayOfWeek ;
// // echo "<hr>".$dayOfWeek."<hr>";

//  if(($ar_week[$dayNumber]=='الجمعة' && $en_week[$dayNumber]=='Friday'&& $dayNumber===7)|| ($ar_week[$dayNumber]=='الخميس' && $en_week[$dayNumber]=='Thursday'&& $dayOfWeek===6))
//  {
   
// if($dayNumber===7||$dayNumber===6){
// $dayNumber=0;
// }
//   }else{
//     // include"../auth/db_connect.php";
//     // $sql_id = "SELECT `DATE`,list_index_order,Order_Booking,MAX(d_id) AS last_id FROM donors";
//     // $result_id =mysqli_query($conn,$sql_id);
//     // if ($result_id) {
//     //     $count++;//2
//     //     // echo "Done sql_2 id_donors<br>";
//     //     $row = $result_id->fetch_assoc();
//     //     $last_id = $row["last_id"];
//     //     $last_order=$row["list_index_order"];
//     //     $DATE_order=$row["DATE"];

        
//     // }    // استعلام إدخال بيانات التبرعif($D==$date){
//     // echo $Booking;
// }
//    // echo"<br><pre>";
//     // print_r($arrtimes);
//     // echo "<pre><hr>";
    
// if($arrtimes[0]!==1){
//     $sql = "INSERT INTO `booking` ( `Id_for_booking`, `Name_for_booking`, `hos_id`,`id_doc`, `id_floor`, `Order_Booking`, `list_index_order`, `info_booking`)
//      VALUES ( '$id_donors', '".$name."', '$id_hos', '$id_doc', '$id_floor', '$', '2', 'Information Booking');";

// }

//     $arrtimes[0]=1;
    
// //   }
// // echo"<div class="."ddir".">";
// // $times=array(  
// //       'morning'=>array(1=>'8:00',2=>'9:00',3=>'10:00' ,4=>'11:00' ,5=>'12:00'),
// // 'evening'=>(array(6=>'3:00',7=>'4:00',8=>'5:00',9=>'6:00',10=>'7:00',11=>'8:00',12=>'9:00')) );
// // echo"<br><pre>";
// // print_r($times);
// // echo "<pre>";
// // echo"</div><hr>";
// // echo$times['morning']['1']."<br>";
// // echo$times['morning']['2']."<br>";
// // echo"<br><pre>";
// // print_r($arrtimes);
// // echo "<pre>";

// // $arrtimes[0]=1;
// // echo $arrtimes[0].'<br>';
// // echo"<br><pre>";
// // print_r($arrtimes);
// // echo "<pre>";


// // ________________الى هنا يتم اخذ كل مرة يتم فتح الاختيار [1-12] ويتم حفظ الترتيب في قاعدة البيانات في حقل Order_Bookingوindex في حقل list_index_order	________________________________

// // }//end if(isset($_SESSIN))

?>
</body>
</html>
