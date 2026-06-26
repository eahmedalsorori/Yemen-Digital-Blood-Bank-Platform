<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أضافة بياناتكـ</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.3/css/fileinput-rtl.min.css" integrity="sha512-th2bHYvAO2A4uRrFgyEQBqwsC6e2CbVgTgTf1+xwkXIx8f0y8pVo7DOODHtoSciGRNQUXVVFpj3PyveksoBPqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .box{
            height: 120px;
            width: 50%;
            margin-top: 15%;
        }
    </style>
</head>
<body>

<?php
  include '../auth/is_donor.php';
  include '../auth/db_connect.php';
if (isset($_POST['search'])) {
    $phone = $_POST['phon'];
    $sql_search = "SELECT *  FROM `donors` WHERE `phon` LIKE '$phone';";
// echo $sql_search;exit(0);
    $result_search = mysqli_query($conn, $sql_search);
    if (!$result_search) {
        die("خطأ في الاستعلام: " . mysqli_error($conn));
    }
    $result_search = mysqli_query($conn, $sql_search);
    if (!$result_search) {
        die("خطأ في الاستعلام: " . mysqli_error($conn));
    }
    // $id = 0;
    if (mysqli_num_rows($result_search) > 0) {
        $row = mysqli_fetch_assoc($result_search);
        $id = $row[0]; // تأكد من أن العمود 'id' موجود في الجدول 'donors'
        echo "<br><h1>is found $id</h1>";
        exit(); // تأكد من إنهاء النص بعد التوجيه
    } else {
        echo 'Not Found';
    }
    $conn->close();

























}   else {

?>
<div class="container bg-danger text-center text-light mt-6 box">

<form action="doner_old.php" method="post">
<div class="container">

<div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="phone" class="label"><strong>ادخل رقم الجوال:</strong> </label>
                                <input type="number" maxlength="9" name="phone" id="phone" placeholder='رقم الهاتف' class="form-control" required />
                                <label class="errorMessage" id="input6" for="phone"></label>
                            </div>
                        </div>
 <input type="submit" value="search">
 </div>

</form>
</div>
<?php
}
?>

