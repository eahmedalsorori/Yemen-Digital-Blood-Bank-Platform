<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسم بياني للمستشفى</title>
    <link rel="shortcut icon" href="../../assets/images/icon1.png" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/lineicons.css">
    <link rel="stylesheet" href="../../assets/css/ud-styles.css">
    <style>#back-button {
position: fixed;
top:20px;
left: 50px;
background-color: #c00;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 20%;
  cursor: pointer;
  font-size: large;
}

#back-button:hover {
  background-color: #f00;
}</style>
</head>
<body>
<button id="back-button" onclick="window.history.back(); return false;"><b>-></b></button>
<!-- 
    يعمل الزر على الرجوع الى الصفحة السابقة  اريد الزر العائم هنا يظهر في الجهة اليسرى للصفحة -->
<?php
        include '../../auth/db_connect.php';
        $idhos = $_GET['id'];
        $sql = "SELECT name FROM hospitals WHERE h_id = $idhos;";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $namehos = $row[0];
        } else {
            echo "خطأ في التعريف";
        }
        mysqli_close($conn);
    ?>
    <h2 class="text-center">تقرير المستشفى</h2><br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">الرقم</th>
                    <th scope="col">اسم المريض</th>
                    <th scope="col">اسم المتبرع</th>
                    <th scope="col">اسم المختبر</th>
                    <th scope="col">اسم الطبيب</th>
                    <th scope="col">رقم جوال الطبيب</th>
                    <th scope="col">وقت الحجز</th>
                    <th scope="col">وقت الحضور</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">تعديل</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    include '../../auth/isadmin.php';
                    include '../../auth/alert.php';
                    include '../../auth/db_connect.php';

                    if (isset($_GET['id'])) {
                        $h_id = $_GET['id'];
                       $sql = "SELECT DISTINCT hos.h_id,lab.l_id,dfp.d_id,p.firste_name,p.med_name,p.last_name,d.firste_name,d.last_name,lab.name,dfp.date_created,r.timeattendance,r.do_id,do.name,do.phone,dfp.check\n"

                        . "                        FROM  hospitals hos,laboratory lab,donate_for_patient dfp,patient p,donors d,request r,doctor do\n"
                    
                        . "                        WHERE hos.h_id = lab.h_id\n"
                    
                        . "                        AND lab.l_id = dfp.l_id\n"
                    
                        . "                        AND dfp.d_id = d.d_id\n"
                    
                        . "                        AND dfp.p_id = p.p_id\n"
                    
                        . "                        AND r.do_id = do.do_id\n"
                    
                        . "                        AND hos.check = 0\n"
                    
                        . "                        AND hos.h_id =$h_id;";
                        $result = mysqli_query($conn, $sql);
                        $count = 1;
                        if ($result) {
                            while ($row = mysqli_fetch_row($result)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count++; ?></th>
                                    <td><?php echo $row[3] . " " . $row[4] . " " . $row[5]; ?></td>
                                    <td><?php echo $row[6] . " " . $row[7]; ?></td>
                                    <td><?php echo $row[8]; ?></td>
                                    <td><?php echo $row[12]; ?></td>
                                    <td><?php echo $row[13]; ?></td>
                                    <td><?php echo date("Y-m-d H:i:s", strtotime($row[9])); ?></td>
                                    <td><?php echo date("Y-m-d H:i:s", strtotime($row[10])); ?></td>
                                    <td><?php if($row[14]==0){echo"نشط ";
                                    }
                                    else{
                                        echo"غير نشط";
                                    }
                                    // $row[14]; 
                                     ?></td>
                                    <td><a href="update.php?id=<?php echo $row[2];?>"> تعديل</a></td>
                                    <td><a href="delete.php?id=<?php echo $row[2];?>"> حذف</a></td>
                                  
                                </tr>
                                <?php
                            }
                        } else {
                            echo "حدث خطأ في استعلام قاعدة البيانات.";
                        }
                    } else {
                        echo "لم يتم تحديد معرف المستشفى.";
                    }
                    mysqli_close($conn);
                    ?>
            </tbody>
        </table>
    </div>
    
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>