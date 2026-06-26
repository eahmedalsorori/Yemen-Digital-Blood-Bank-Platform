<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أضافة بياناتكـ</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.3/css/fileinput-rtl.min.css" integrity="sha512-th2bHYvAO2A4uRrFgyEQBqwsC6e2CbVgTgTf1+xwkXIx8f0y8pVo7DOODHtoSciGRNQUXVVFpj3PyveksoBPqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/form.css"/>
</head>
<body>
<?php
include '../auth/is_donor.php';
?>
<section class="text-center">
    <div class="p-5 bg-image" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center; height: 400px;"></div>
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; margin-bottom:20px ; background: hsla(50, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5" style="background-color:silver;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <?php
                    include '../auth/alert.php';
                    ?>
                    <h2 class="fw-bold mb-5">قم باضافة بياناتك بشكل صحيح</h2>
                    <?php
                    if(isset($_SESSION['donation_id'])) {
                        echo '<form action="../doner/donate_for_patient.php" method="post" id="myForm" >'."<br>متبرع";
                    } ?>

                        <form action="chooseHos.php" method="post" id="myForm"> <br> DONOR
                   
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="first"><strong>ادخل اسمك الاول:</strong> </label>
                                <input type="text" name="first_name" placeholder='الاسم الاول' id="first" class="form-control" required/>
                                <label class="errorMessage" id="input1" for="first"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="med"><strong>ادخل اسمك الثاني:</strong> </label>
                                <input type="text" name="med_name" placeholder='اسم الثاني' id="med" class="form-control" required />
                                <label class="errorMessage" id="input2" for="med"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="last"><strong>ادخل اسمك الاخير:</strong> </label>
                                <input type="text" name="last_name" placeholder='الاسم الاخير' id="last" class="form-control" required/>
                                <label class="errorMessage" id="input3" for="last"></label>
                            </div>
                        </div>
                        <div class="col">
                            <label class="label" for="address"><strong>ادخل عنوانك:</strong> </label>
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" name="address" placeholder='العنوان ' id="address" class="form-control" required/>
                                <label class="errorMessage" id="input4" for="address"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="age"><strong>ادخل عمرك:</strong> </label>
                                <input  type="number" maxlength="2" name="age" placeholder='العمر' id="age" class="form-control" required/>
                                <label class="errorMessage" id="input5" for="age"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="phone" class="label"><strong>ادخل رقم الجوال:</strong> </label>
                                <input type="number" maxlength="9" name="phone" id="phone" placeholder='رقم الهاتف' class="form-control" required />
                                <label class="errorMessage" id="input6" for="phone"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputState" class="form-label"><strong>اختر فصيلة الدم</strong></label>
                        <select id="inputState" name="blood_group" class="form-select">
                            <option selected disabled value="null">اختر...</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">O+</option>
                            <option value="6">O-</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option>
                        </select>
                        <label class="errorMessage" id="input7" for="inputState"></label>
                    </div>
                    <?php if(isset($_SESSION['donation_id'])) {
                        echo '<input type="hidden" name="donation_id" value="'.$_SESSION['donation_id'].'" />';
                    } ?>
                    <button type="submit" class="btn btn-primary btn-lg" name="Add" id="submitButton">اضافة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/all.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/form.js"></script>

</body>
</html>
