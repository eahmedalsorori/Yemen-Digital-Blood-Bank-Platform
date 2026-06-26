<?php
include("../auth/is_donor.php");
date_default_timezone_set('Asia/Aden');

$now = date('Y-m-d H:i:s');
$after_6months = date('Y-m-d H:i:s', strtotime('+6 months'));

if (isset($_POST["chooselab"])) {
    include("../auth/db_connect.php");

    // Get data from the form
    $first_Name = $_POST['first_name'];
    $med_name = $_POST['med_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['Address'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];
    $hos = $_POST['hos_id'];
    $doc = $_POST['doc_id'];
    $floor_id = $_POST['floor_id'];
    $flag = $_POST['flag'];

    $fullname = $first_Name. '. $med_name. '. $last_name;
    $_SESSION['full_name'] = $fullname;

    $result = false;

    if ($flag == 1) {
        $result = addNewDonor($conn, $first_Name, $med_name, $last_name, $age, $address, $phone, $blood_group, $after_6months, $doc);
    } elseif ($flag == 2) {
        $result = updateDonor($conn, $first_Name, $med_name, $last_name, $age, $address, $phone, $blood_group, $now);
    }
include '../auth/alert.php';
    if ($result) {
        // include('pages/success.php') or die('Not Found Assess Affff');
        // header('Location:../pages/success.php');
        $_SESSION['success']="تمت العلمية بنجاح";
        header("Location:bloodtypes/fordoner.php");
    } else {
        // include('pages/fail.php') or die('Not Found Assess ANNNNN');
        $_SESSION['success']="فشلت العملية ";
        header("Location:bloodtypes/fordoner.php");
    }

    $conn->close();
} else {
    echo "Error";
    // header("Location: https://blood/404.html");
}

function addNewDonor($conn, $first_Name, $med_name, $last_name, $age, $address, $phone, $blood_group, $after_6months, $doc) {
    $stmt = $conn->prepare("INSERT INTO `donors`(`firste_name`, `med_name`, `last_name`, `age`, `address`, `phon`, `blood_group`, `Date_after_6Months`, `status`) VALUES (?,?,?,?,?,?,?,?, 1)");
    $stmt->bind_param("sssisiss", $first_Name, $med_name, $last_name, $age, $address, $phone, $blood_group, $after_6months);

    if ($stmt->execute()) {
        $last_id = $conn->insert_id;

        $stmt = $conn->prepare("INSERT INTO `donation`(`d_id`, `do_id`) VALUES (?,?)");
        $stmt->bind_param("ii", $last_id, $doc);

        if ($stmt->execute()) {
            $_SESSION['donors_id'] = $last_id;
            $_SESSION['doc_id'] = $doc;
            $_SESSION['don_id'] = $conn->insert_id;
            return true;
        }
    }
    return false;
}

function updateDonor($conn, $first_Name, $med_name, $last_name, $age, $address, $phone, $blood_group, $now) {
    $stmt = $conn->prepare("UPDATE `donors` SET `firste_name` =?, `med_name` =?, `last_name` =?, `age` =?, `address` =?, `phon` =?, `blood_group` =?, `date_created` =?, `Remaining_days` = 184 WHERE `phon` =?");
    $stmt->bind_param("sssisisss", $first_Name, $med_name, $last_name, $age, $address, $phone, $blood_group, $now, $phone);
    return $stmt->execute();
}
?>