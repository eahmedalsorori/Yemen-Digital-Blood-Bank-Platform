<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta   name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض وتعديل بياناتكـ</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.3/css/fileinput-rtl.min.css" integrity="sha512-th2bHYvAO2A4uRrFgyEQBqwsC6e2CbVgTgTf1+xwkXIx8f0y8pVo7DOODHtoSciGRNQUXVVFpj3PyveksoBPqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
.errorMessage{
    font-size: smaller;
    color: white;
    background-color: red;
    display:hidden;
    float: bottom;
    bottom: 10px;
    display: block;
}
    </style>
</head>
<body>
<?php
//  include '../auth/is_donor.php';
 date_default_timezone_set('Asia/Aden');
 
if (isset($_GET['id_d'])){

    $id_d= $_GET['id_d'];
    $fn = $_GET['fn'];
    $mn = $_GET['mn'];
    $ln = $_GET['ln'];
    $add = $_GET['add'];
    $ag = $_GET['ag'];
    $phone = $_GET['phone'];
    $bg = $_GET['bg'];
    $id_h = $_GET['id_h'];
    $f_id = $_GET['f_id'];
    $doc_id = $_GET['doc_id'];
    $remaining = $_GET['remaining'];
    $date_created = $_GET['date_created'];
    $i = $_GET['i'];
// $var10 = $_GET['var10'];
echo"<br> id_d    ";
echo $id_d. "<br>Fn     ";
echo $fn . "<br>Mn     ";
echo $mn . "<br>Ln      ";
echo $ln . "<br>phone        ";
echo $phone . "<br>Add        ";

echo $add . "<br>Age        ";
echo $ag . "<br>bg        ";
echo $bg . "<br>id_h          ";
echo $id_h . "<br>F_id           ";
echo $f_id . "<br>doc               ";
echo $doc_id . "<br>remaining       ";
echo $remaining . "<br>deatcreated             ";
echo $date_created . "<br>  i=             ";
echo $i . "<hr>             ";
 $dbdate_created= date('Y-m-d',strtotime($date_created));
 $now= date('Y-m-d',strtotime('now'));
$after_6months = date('Y-m-d', strtotime('+6 months'));



// echo "<div class="."after"."> يجب الانتظار بعد =$i يوم  </div> ";














// }else// if($remaining>0)
//else   that is if($isset($_GET['d_id'])
 ?>
<section class="text-center">
    <div class="p-5 bg-image" style="background-image: url('../assets/images/ho.jpg');background-size: cover;
  background-position: center center; height: 400px;"></div>
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; margin-bottom:20px ; background: hsla(50, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5" style="background-color:silver;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8"><span>=عدد المرات المتبرع بها<?php echo $i;?><br></span>
                    <h3 class="fw-bold mb-4">لقد تم تجاوز الزمن المحدد للتيرع مرة اخرى</h3>
                    <h2 class="fw-bold mb-5">قم بتعديل من بياناتكـ الموجودة  مسبقـاً</h2>

                        <form action="update_donor.php" method="post" id="myForm"> <br> DONOR
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="first"><strong>ادخل اسمك الاول:</strong> </label>
                                <input type="text" readonly="true"  name="first_name" placeholder='الاسم الاول' id="first" class="form-control" value="<?php echo $fn ;  ?>"/>
                                <label class="errorMessage" id="input1" for="first"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="med"><strong>ادخل اسمك الثاني:</strong> </label>
                                <input type="text" readonly="true"  name="med_name" placeholder='اسم الثاني' id="med" class="form-control" value="<?php echo $mn ;  ?>"  />
                                <label class="errorMessage" id="input2" for="med"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="last"><strong>ادخل اسمك الاخير:</strong> </label>
                                <input type="text" readonly="true"  name="last_name" placeholder='الاسم الاخير' id="last" class="form-control" value="<?php echo $ln ;  ?>"/>
                                <label class="errorMessage" id="input3" for="last"></label>
                            </div>
                        </div>
                        <div class="col">
                            <label class="label" for="address"><strong>ادخل عنوانك:</strong> </label>
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" readonly="true"  name="address" placeholder='العنوان ' id="address" class="form-control" value="<?php echo $add ;  ?>"/>
                                <label class="errorMessage" id="input4" for="address"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="age"><strong>ادخل عمرك:</strong> </label>
                                <input type="number" maxlength="2" readonly="true"  name="age" placeholder='العمر' id="age" class="form-control" value="<?php echo $ag ;  ?>"/>
                                <label class="errorMessage" id="input5" for="age"></label>
                            </div>
                        </div>
                        <input type="hidden"  readonly="true"  name="ddate_created" placeholder='العمر' id="age" class="form-control" value="<?php echo $dbdate_created ;  ?>"/>

                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="phone" class="label"><strong>ادخل رقم الجوال:</strong> </label>
                                <input type="number" maxlength="9" readonly="true"  name="phone" id="phone" placeholder='رقم الهاتف' class="form-control" value="<?php echo $phone ;  ?>" />
                                <label class="errorMessage" id="input6" for="phone"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4"><?php  if($bg==1) $bgb="A+";elseif($bg==2) $bgb="A-";elseif($bg==3) $bgb="B+";elseif($bg==4) $bgb="B-";elseif($bg==5) $bgb="O+";elseif($bg==6) $bgb="O-";elseif($bg==7) $bgb="AB+";elseif($bg==8) $bgb="AB-";?>
                        <label for="inputState" class="form-label"><strong>اختر فصيلة الدم</strong></label>
                        <select id="inputState"  readonly="true"  name="blood_group" class="form-select">
                            <!-- <option  >اختر فصيلة دمك...</option> -->
                            <option value="<?php echo $bgb; ?>" ></option>
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
                   <!-- if(isset($_SESSION['donation_id'])) {
                        echo '<input type="text" readonly="true"  name="donation_id" value="'.$_SESSION['donation_id'].'" />';
                    }  -->
                    <button type="submit" class="btn btn-danger btn-lg" readonly="true"  name="update" id="submitButton">تعديل بياناتكـ</button>
                    <button type="submit" class="btn btn-primary btn-lg" readonly="true"  name="Add" id="submitButton">اضافة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//end if(isset($_GET['d_id']))____________________________________________________________________________________________________________________________

}
else if(isset($_POST['update']))
{
    $first_Name=$_POST['first_name'];
    $med_name=$_POST['med_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $bg=$_POST['blood_group'];
    $ddate_created=$_POST['ddate_created'];
    

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
                    <h2 class="fw-bold mb-5">قم باضافة بياناتك بشكل صحيح</h2><br>
                    <h4 class="fw-bold mb-3">قم بتعديل من بياناتكـ الموجودة  مسبقـاً بشكل صحيح من فضلك</h4>


                        <form action="update_donor.php" method="post" id="myForm"> <br> DONOR
                   
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="first"><strong>ادخل اسمك الاول:</strong> </label>
                                <input type="text" name="first_name" placeholder='الاسم الاول' id="first" class="form-control" value="<?php  echo $first_Name;   ?>" />
                                <label class="errorMessage" id="input1" for="first"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="med"><strong>ادخل اسمك الثاني:</strong> </label>
                                <input type="text" name="med_name" placeholder='اسم الثاني' id="med" class="form-control" value="<?php   echo  $med_name  ;  ?>" />
                                <label class="errorMessage" id="input2" for="med"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="last"><strong>ادخل اسمك الاخير:</strong> </label>
                                <input type="text" name="last_name" placeholder='الاسم الاخير' id="last" class="form-control" value="<?php   echo $last_name ;  ?>"/>
                                <label class="errorMessage" id="input3" for="last"></label>
                            </div>
                        </div>
                        <div class="col">
                            <label class="label" for="address"><strong>ادخل عنوانك:</strong> </label>
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" name="address" placeholder='العنوان ' id="address" class="form-control" value="<?php   echo  $address  ;  ?>"/>
                                <label class="errorMessage" id="input4" for="address"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="label" for="age"><strong>ادخل عمرك:</strong> </label>
                                <input  type="number" maxlength="2" name="age" placeholder='العمر' id="age" class="form-control" value="<?php   echo  $age  ;  ?>"/>
                                <label class="errorMessage" id="input5" for="age"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="phone" class="label"><strong>ادخل رقم الجوال:</strong> </label>
                                <input type="number" maxlength="9" name="phone" id="phone" placeholder='رقم الهاتف' class="form-control" value="<?php   echo  $phone  ;  ?>" />
                                <label class="errorMessage" id="input6" for="phone"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputState" class="form-label"><strong>اختر فصيلة الدم</strong></label>
                        <select id="inputState" name="blood_group" class="form-select">
                            <option selected disabled value="null">اختر...</option>
  
                            <?php if($bg==1){?><option value="1">A+</option>
                            <?php }elseif($bg==2){?><option value="2">A-</option>
                            <?php }elseif($bg== 3){?><option value="3">B+</option>
                            <?php }elseif($bg== 4){?><option value="4">B-</option>
                            <?php }elseif($bg== 5){?><option value="5">O+</option>
                            <?php }elseif($bg== 6){?><option value="6">O-</option>
                            <?php }elseif($bg==7){?><option value="7">AB+</option>
                            <?php }elseif($bg== 8){?><option value="8">AB-</option>
                                                <?php }?>
                        </select>                    <label class="errorMessage" id="input7" for="inputState"></label>
                                </div>
            
                    <button type="submit" class="btn btn-primary btn-lg" name="Add" id="submitButton">اضافة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php


}
//end if(isset($_POST['update'])
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/all.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script>
   $(document).ready(function() {
    // عند النقر على زر الإضافة
    $("#submitButton").click(function() {
        // جمع القيم من النموذج
        var first = $("#first").val();
        var med = $("#med").val();
        var last = $("#last").val();
        var address = $("#address").val();
        var age = $("#age").val();
        var phone = $("#phone").val();
        var blood = $("#inputState").val();

        // إعادة تعريف الرسائل للإخراج
        $(".errorMessage").html("");

        // إذا تم اجتياز جميع الشروط، يمكن تنفيذ الإجراء المطلوب هنا
        if (validateForm()) {
            // تنفيذ الإجراء المحدد في action
            $("#myForm").submit();
        }
    });

    // إضافة معالج الأحداث للتركيز على الحقول غير الصالحة
    $("#first").blur(validateFirstName);
    $("#med").blur(validateSecondName);
    $("#last").blur(validateThirdName);
    $("#address").blur(validateAdderss);
    $("#age").blur(validateAge);
    $("#phone").blur(validatePhoneNumber);
    $("#inputState").blur(selected);

    function validateFirstName() {
        if ($(this).val().length < 3) {
            $("#input1").html("لا يمكن القبول بهذه القيمة").show();
        } else {
            $("#input1").hide();
        }
    }

    function validateSecondName() {
        if ($(this).val().length < 3) {
            $("#input2").html("لا يمكن القبول بهذه القيمة").show();
        } else {
            $("#input2").hide();
        }
    }

    function validateThirdName() {
        if ($(this).val().length < 3) {
            $("#input3").html("لا يمكن القبول بهذه القيمة").show();
        } else {
            $("#input3").hide();
        }
    }

    function validateAdderss() {
        if ($(this).val().length < 3) {
            $("#input4").html("لا يمكن القبول بهذه القيمة").show();
        } else {
            $("#input4").hide();
        }
    }

    function validateAge() {
        var ageValue = parseInt($(this).val());
        if (ageValue < 17 || ageValue > 67 || isNaN(ageValue)) {
            $("#input5").html("العمر يجب أن يكون بين 17 و 67").show();
        } else {
            $("#input5").hide();
        }
    }

    function validatePhoneNumber() {
        if (!$(this).val().match(/^7[13780]\d{7}$/)) {
            $("#input6").html("يجب إدخال رقم هاتف يمني مكون من 9 أرقام ويبدأ بالرقم").show();
        } else {
            $("#input6").hide();
        }
    }

    function selected() {
        if ($(this).val() == "null") {
            $("#input7").html("يجب اختيار فصيلة الدم").show();
        } else {
            $("#input7").hide();
        }
    }

    function validateForm() {
        validateFirstName();
        validateSecondName();
        validateThirdName();
        validateAdderss();
        validateAge();
        validatePhoneNumber();
        selected();

        var valid = true;

        $(".errorMessage").each(function() {
            if ($(this).is(":visible")) {
                valid = false;
            }
        });

        return valid;
    }
});

</script>
</body>
</html>
