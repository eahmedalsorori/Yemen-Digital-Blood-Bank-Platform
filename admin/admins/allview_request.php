<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blood</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../../assets/images/icon1.png" type="image/svg" />

    <!-- ===== All CSS files ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/lineicons.css" />
    <link rel="stylesheet" href="../../assets/css/ud-styles.css" />

</head>

<body>
<h2 class="text-center">التقرير للمستشفى</h2><br>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">الرقم</th>
                <th scope="col">اسم المريض</th>
                <th scope="col">اسم المتبرع</th>
                <th scope="col">اسم المختبر</th>
                <th scope="col"> اسم الدكتور </th>
                <th scope="col">رقم جوال الدكتور</th>
                <th scope="col">وقت الحجز</th>
                <th scope="col">وقت الحضور</th>
                <th scope="col">الحالة</th>
                <!-- <th   scope="col"> </th> -->

                <!-- <th scope="col">تعديل</th> -->
                <!-- <th scope="col">حذف</th> -->
            </tr>
        </thead>
        <tbody>
                <!-- the code pring data -->
                <?php
                include '../../auth/isadmin.php';
                include '../../auth/alert.php';
                include '../../auth/db_connect.php';
                $sql = "SELECT hos.h_id, lab.l_id, dfp.d_id, p.firste_name, p.med_name, p.last_name, d.firste_name, d.last_name, lab.name,dfp.date_created, r.timeattendance, r.do_id, do.name, do.phone, dfp.check"

                . "            FROM hospitals hos, laboratory lab,donate_for_patient dfp, patient p, donors d,request r, doctor do"
            
                . "               WHERE\n"
            
                . "                    hos.h_id = lab.h_id"
            
                . "                AND lab.l_id = dfp.l_id"
            
                . "                AND dfp.d_id = d.d_id"
            
                . "                AND dfp.p_id = p.p_id"
            
                . " AND r.do_id = do.do_id;";
                    $result = mysqli_query($conn, $sql);
                    $contt = 1;
                    if ($result) {
                        while ($row = mysqli_fetch_row($result)) {
                ?>
                            <tr>
                                <th scope="row"><?php echo $contt++; ?></th>
                                <!-- name patient -->
                                <th scope="row"><?php echo $row[3] . " " . $row[4] . " " . $row[5]; ?></th>
                                <!-- name donors -->
                                <th scope="row"><?php echo $row[6] . " " . $row[7]; ?></th>
                                <!-- Name laboratory -->
                                <th  scope="row"><?php echo $row[8]; ?></th>
                                <!-- Name Doctor -->
                                <th scope="row"><?php echo $row[12]; ?></th>
                                <!-- Phone Doctor -->
                                <th scope="row"><?php echo $row[13]; ?></th>
                                <!-- Date Create --><!-- Date Create -->
                                <th scope="row"><?php echo date("Y-m-d "."<b> h:m:s </b>", strtotime($row[9])); ?></th>
                                <!-- Date Booking -->
                                <th scope="row"><?php echo date("Y-m-d"."<b> h:m:s </b>", strtotime($row[10])); ?></th>
                                <!-- Status -->
                                <th scope="row"><?php if (isset($row[14])) {
                                        echo "<p>لم يتم</p>";
                                    } else {
                                        "<p>يتم</p>";
                                    } ?></th>
                                <!-- Edit -->
                                <!-- <th>تعديل</th> -->
                                <!-- Delete -->
                                <!-- <th>حذف</th> -->
                            </tr>
                <?php
                        }
                    } else {
                        echo "حدث خطأ في استعلام قاعدة البيانات.";
                    }
                ?>
                <!-- ====== Back To Top Start ====== -->
                <a href="javascript:void(0)" class="back-to-top">
                    <i class="lni lni-chevron-up"> </i>
                </a>
                <!-- ====== Back To Top End ====== -->

                <!-- ====== All Javascript Files ====== -->
                <script src="../assets/js/bootstrap.bundle.min.js"></script>
                <script src="../assets/js/wow.min.js"></script>
                <script src="../assets/js/main.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
<!-- الكود الباقي للصفحة -->