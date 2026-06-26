
<html lang="ar" dir="rtl">
<?php  include '../../auth/isadmin.php';
              include '../../auth/alert.php';
             
?>
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
    <link rel="stylesheet" href="../../assets/fonts/all.min.css" />
    <link rel="stylesheet" href="../../assets/fonts/all.css" />
   
    <style>
    .search-box {
      display: none; /* يكون مخفياً افتراضياً */
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
 

    
  <!-- start search<button type="button" class="btn btn-success">Success</button>
 -->
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
                                    <!-- 9 -->
                    <th scope="col" class="text-center bg-warning">وقت الحجز</th>
                                    <!-- 10 -->
                    
                    <th scope="col"class="text-center">وقت الحضور</th>
                    
                    <th scope="col"> اسم الدكتور </th>

                                    <!-- 8 -->
                    <th scope="col">رقم جوال الدكتور</th>
                                    <!-- 11 -->
                    <th scope="col"> الحالةالطلب </th>
                                    <!-- 12 -->                    
                    <th scope="col"> الحالةالمختبر </th>
                    <!-- <th   scope="col"> </th> -->

                  
                </tr>
            </thead>
            <tbody>
                <!-- the code pring data -->
                <?php
        
              include '../../auth/db_connect.php';
                if (isset($_GET['id'])) {
                    $h_id = $_GET['id'];
                    $sql = "SELECT DISTINCT\n"

                    // 0
                    . "    hospitals.name,\n"  
                    // 1
                
                    . "    laboratory.name,\n"
                
                    // 2
                    . "    patient.firste_name,\n"
              
                    . "    patient.med_name,\n"
               
                    . "    patient.last_name,\n"
              
                    // 3
                    . "    patient.blood_group,\n"
                
                    // 4
                    . "    donors.firste_name,\n"
                
                    . "    donors.med_name,\n"
                
                    . "    donors.last_name,\n"
                
                    // 5
                    . "    donors.blood_group,\n"
                
                    // 6
                    . "     request.date_created,\n"
                
                    . "    request.timeattendance,\n"
                
                    // 7
                    . "    doctor.name,\n"
                
                    // 8
                    . "    doctor.phone,\n"
                
                    // 9
                    . "    request.check,\n"
                
                    // 10
                    . "    laboratory.check,\n"

                    . "    hospitals.check\n"
                
                    . "FROM\n"
                
                    . "    hospitals,\n"
                
                    . "    laboratory,\n"
                
                    . "    donate_for_patient,\n"
                
                    . "    donors,\n"
                
                    . "    patient,\n"
                
                    . "    doctor,\n"
                
                    . "    request\n"
                
                    . "WHERE\n"
                
                    . "    hospitals.h_id = laboratory.h_id AND \n"
                
                    . "    laboratory.l_id = donate_for_patient.l_id AND donate_for_patient.d_id = donors.d_id AND donate_for_patient.p_id = patient.p_id AND doctor.l_id = laboratory.l_id;";
                    //echo $sql;exit();

                    $result = mysqli_query($conn, $sql);
                    $contt = 1;
                    if ($result) {
                        while ($row = mysqli_fetch_row($result)) {
                ?>
                            <tr>
                                <th scope="row"><?php echo $contt++; ?></th>
                                <!--name hospital  -->
                                <th scope="row"><?php echo $row[0]; ?></th>
                                <!-- Name laboratory -->
                                <th scope="row"><?php echo $row[1] ; ?></th>
                                <!-- name patient -->
                                <th scope="row"><?php echo $row[2] . " " . $row[3] . " ".$row[4] ; ?></th>
                               <!-- 	blood_group -->
                                   <th scope="row"><?php if ($row[5]==1) {
                                        echo"A+";   }elseif ($row[5]==2) {
                                        echo"A-";   }elseif ($row[5]==3) {
                                        echo"B+";   }elseif ($row[5]==4) {
                                        echo"B-";   }elseif ($row[5]==5) {
                                        echo"O+";   }elseif ($row[5]==6) {
                                        echo"O-";   }elseif ($row[5]==7) {
                                        echo"AB+";  }elseif ($row[5]==8) {
                                        echo"AB-";  }    ?></th>
                               
                                <!-- name   patient-->
                                <th scope="row"><?php echo $row[6]. " " . $row[7]. " " . $row[8]; ?></th>
                                
                                
                                <!-- 	blood_group donors -->
                                
                               
                                <th scope="row">   <?php if ($row[9]==1) {
                                        echo"A+";   }elseif ($row[9]==2) {
                                        echo"A-";   }elseif ($row[9]==3) {
                                        echo"B+";   }elseif ($row[9]==4) {
                                        echo"B-";   }elseif ($row[9]==5) {
                                        echo"O+";   }elseif ($row[9]==6) {
                                        echo"O-";   }elseif ($row[9]==7) {
                                        echo"AB+";  }elseif ($row[9]==8) {
                                        echo"AB-";  }    ?></th>
                               <!-- Date Create -->
                               <th scope="row"class="text-center bg-warning" ><?php echo"<pre> ". date("Y/m/d". "<b> h:m:s</b>", strtotime($row[10])) ."</pre>"; ?></th>
                                <!-- Date Booking -->
                                <th scope="row"class="text-center "><?php echo "<pre>". date("Y/m/d" . "<b> h:m:s</b>", strtotime($row[11]))  ."</pre>"; ?></th>
                                <!-- Name Doctor -->
                                <th scope="row"><?php echo $row[12]; ?></th>
                                <!-- Name Doctor -->
                                <th scope="row"><?php echo $row[13]; ?></th>
                                
                                <!-- Status-request -->
                                <th><?php if($row[14]==0){ echo "<b class='  text-center btn-warning'>لم يتم</b>
";}else{echo "<button type='button' class='btn btn-primary'>تم التبرع</button>";}
                                 ?></th>
                              <!-- Status-laboratory -->
                                <th><?php if($row[15]==0){ echo "<button type='button' class='btn btn-light'><b>يعمل</b></button>
";}else{echo "<button type='button' class='btn btn-dark'>لا يعمل</button>";}
                                 ?></th>
        
                            </tr>
                <?php
                        }
                    } else {
                        echo "حدث خطأ في استعلام قاعدة البيانات.";
                    }
                }
                mysqli_close($conn);
                ?>
                <!-- ====== Back To Top Start ====== -->
                <a href="javascript:void(0)" class="back-to-top">
                    <i class="lni lni-chevron-up"> </i>
                </a>
                <!-- ====== Back To Top End ====== -->

                <!-- ====== All Javascript Files ====== -->
                <script src="../../assets/js/all.js"></script>
                <script src="../../assets/js/bootstrap.bundle.min.js"></script>
                <script src="../../assets/js/wow.min.js"></script>
                <script src="../../assets/js/main.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
<!-- الكود الباقي للصفحة -->