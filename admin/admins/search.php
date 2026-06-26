
<?php
include '../../auth/isadmin.php';
include '../../auth/alert.php';
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blood</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../../assets/images/icon1.png" type="image/svg" />

    <!-- ===== All CSS files ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/animate1.css" />
    <link rel="stylesheet" href="../../assets/css/lineicons.css" />
    <link rel="stylesheet" href="../../assets/css/ud-styles.css" />
    <link rel="stylesheet" href="../../assets/fonts/all.min.css" />
    <link rel="stylesheet" href="../../assets/fonts/all.css" />
   
    <style>
    .search-box {
        display: none; /* Initially hidden */
    }
    </style>
    <script>
    function toggleSearchBox() {
      var searchBox = document.getElementById("search-box");
      if (searchBox.style.display === "none") {
        searchBox.style.display = "block"; // يعرض مربع البحث
      } else {
        searchBox.style.display = "none"; // يخفي مربع البحث
      }
    }

    </script>
</head>
<body>
<div id="showbox" class="btn-search">
    <button class="btn btn-danger text-center " onclick="toggleSearchBox()"><i class="fa-solid fa-magnifying-glass"></i>
البحث</button>
</div>
  <div id="search-box" class="search-box">
    <form method="GET" action="search.php">
      <div class="col-4">
    <div class="input-group  mb-3 col-2">
  <span class="input-group-text " id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
  <input type="text" class="form-control" name="query" placeholder="search...." aria-label="search" aria-describedby="basic-addon1"><br>
  <!-- <input type="radio" name="search" value="1" checked id="">
      <input type="radio" name="search" value="2" id=""> -->
    </div></div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="searchby" id="inlineRadio1" value="1" checked>
  <label class="form-check-label" for="inlineRadio1">المستشفى</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="searchby" id="inlineRadio2" value="2">
  <label class="form-check-label" for="inlineRadio2">المتبرع</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="searchby" id="inlineRadio2" value="3">
  <label class="form-check-label" for="inlineRadio2">المريض</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="searchby" id="inlineRadio2" value="4">
  <label class="form-check-label" for="inlineRadio2">الدكتور</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="searchby" id="inlineRadio2" value="5">
  <label class="form-check-label"  for="inlineRadio2">المختبر</label>
</div>

      <!-- <input type="radio" name="search" value="4" id="">
      <input type="radio" name="search" value="5" id=""> -->
      <button type="submit" name="search"onclick="show_btn_search()" class="btn btn-danger from-control">Search</button>

      <!-- <button type="submit"name="search-box">ابحث</button>  -->
    </form>
    <!-- end Search -->
  </div>
   

    <div class="table-responsive">
        <h2 class="text-center">
            <span class="bg-danger text-white">
              <?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?></span>
            جدول الحجوزات
        </h2>
        <h2 class="text-center">جدول الحجوزات</h2><br>

  <!-- Start table  -->
  <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                  <!-- 0 -->
                    <th scope="col">الرقم</th>
                                <!-- 1 -->
                    <th scope="col">اسم المستشفى</th>
                                <!-- 2 -->
                    <th scope="col">اسم المختبر</th> 
                                <!-- 3 -->
                    <th scope="col">اسم المريض</th>
                                <!-- 4     -->
                    <th scope="col">فصيلة دم المريض</th>
                                  <!-- 5 -->
                    <th scope="col">اسم المتبرع</th>
                                  <!-- 6 -->
                    <th  scope="col">فصيلة دم المتبرع</th>
                                    <!-- 7 -->
                    <th scope="col"> اسم الدكتور </th>

                                    <!-- 8 -->
                    <th scope="col">رقم جوال الدكتور</th>
                                    <!-- 9 -->
                    <th scope="col">وقت الحجز</th>
                                    <!-- 10 -->
                    
                    <th scope="col">وقت الحضور</th>
                                    <!-- 11 -->
                    <th scope="col"> الحالةالطلب </th>
                                    <!-- 12 -->                    
                    <th scope="col"> الحالةالمختبر </th>
                    <!-- <th   scope="col"> </th> -->

                  
                </tr>
            </thead>
            <tbody>
        <?php
        include '../../auth/db_connect.php';
        
        if(isset($_GET['search'])){
            $query = $_GET['query'];
            if($_GET['searchby'] == 1){
                $sql = "SELECT
                            hospitals.name,
                            laboratory.name,
                            patient.firste_name,
                            patient.med_name,
                            patient.last_name,
                            patient.blood_group,
                            donors.firste_name,
                            donors.med_name,
                            donors.last_name,
                            donors.blood_group,
                            doctor.name,
                            doctor.phone,
                            request.date_created,
                            request.timeattendance,
                            hospitals.h_id,
                            laboratory.l_id,
                            donate_for_patient.d_id,
                            donate_for_patient.p_id,
                            request.check,
                            laboratory.check
                        FROM
                            hospitals,
                            laboratory,
                            donate_for_patient,
                            donors,
                            patient,
                            doctor,
                            request
                        WHERE
                            hospitals.h_id = laboratory.h_id
                            AND laboratory.l_id = donate_for_patient.l_id
                            AND donate_for_patient.d_id = donors.d_id
                            AND donate_for_patient.p_id = patient.p_id
                            AND doctor.l_id = laboratory.l_id
                            AND hospitals.name LIKE '%$query%';";
                $result = mysqli_query($conn, $sql);
                $contt = 0;
                if($result){
                    while($row = mysqli_fetch_row($result)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $contt++; ?></th>
                            <th scope="row"><?php echo $row[0]; ?></th>
                            <th scope="row"><?php echo $row[1]; ?></th>
                            <th scope="row"><?php echo $row[2] . " " . $row[3] . " " . $row[4]; ?></th>

                            <!-- 	blood_group -->
                            <th scope="row"><?php if ($row[5]==1) {
                                        echo"A+";   }elseif ($row[5]==2) {
                                        echo"A-";   }elseif ($row[5]==3) {
                                        echo"B+";   }elseif ($row[5]==4) {
                                        echo"B-";   }elseif ($row[5]==5) {
                                        echo"O+";   }elseif ($row[5]==6) {
                                        echo"O-";   }elseif ($row[5]==7) {
                                        echo"AB+";  }elseif ($row[5]==8) {
                                        echo"AB-";  }    ?>
                             </th>
                               
                            <th scope="row"><?php echo $row[6] . " " . $row[7] . " " . $row[8]; ?></th>
                              <!-- 	blood_group donors -->
                                
                               
                              <th scope="row">   <?php if ($row[9]==1) {
                                        echo"A+";   }elseif ($row[9]==2) {
                                        echo"A-";   }elseif ($row[9]==3) {
                                        echo"B+";   }elseif ($row[9]==4) {
                                        echo"B-";   }elseif ($row[9]==5) {
                                        echo"O+";   }elseif ($row[9]==6) {
                                        echo"O-";   }elseif ($row[9]==7) {
                                        echo"AB+";  }elseif ($row[9]==8) {
                                        echo"AB-";  }    ?>
                                </th>
                            <th scope="row"><?php echo $row[10]; ?></th>
                            <th scope="row"><?php echo $row[11]; ?></th>
                            <th scope="row"><?php echo date("d/m/Y || h:m:s", strtotime($row[12])); ?></th>
                            <th scope="row"><?php echo date("d/m/Y || h:m:s", strtotime($row[13])); ?></th>
                            <th><?php echo $row[18] == 0 ? "<button type='button' class='btn btn-warning'><b>إنتظار</b></button>" : "<button type='button' class='btn btn-primary'>تم التبرع</button>"; ?></th>
                            <th><?php echo $row[19] == 0 ? "<button type='button' class='btn btn-light'><b>يعمل</b></button>" : "<button type='button' class='btn bt-dark'>لا يعمل</button>"; ?></th>
                        </tr>
                        <?php
                    }
                } else {
                    echo "لايوجد بيانات في البحث.";
                }
                echo "<b align='center'>$contt =عدد العناصر البحث-->> البحث حسب :</b> <b>مستشفى</b>";
            }
        }
        ?>
    </div>

    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ====== All Javascript Files ====== -->
    <script src="../../assets/js/all.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF