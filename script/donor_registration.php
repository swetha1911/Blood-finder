<?php
print_r($_POST);
session_start();
include "../db_conn.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fname = stripslashes($_POST['fname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);

$lname = stripslashes($_POST['lname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);

$address = validate($_POST['address']);

$gender = validate($_POST['gender']);

$bgroup = validate($_POST['bgroup']);

$alchohol_arr = [];
$alchohol = $_POST['alchohol']; /// pushing alchohol value into an array
$alchohol_arr = array();
foreach ($alchohol as $a) {
    array_push($alchohol_arr, $a);
}
$alchohol_arr = implode(',', $alchohol_arr);

$health_arr = [];
$health = $_POST['health']; /// pushing health value into an array
$health_arr = array();
foreach ($health as $a) {
    array_push($health_arr, $a);
}
$health_arr = implode(',', $health_arr);

$mobile = stripslashes($_POST['mobile']);
$mobile = mysqli_real_escape_string($conn, $mobile);

$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($conn, $email);

$prev = validate($_POST['prevdonate']);

$surgery_arr = []; /// pushing surgery value into an array
$surgery = $_POST['surgery'];
$surgery_arr = array();
foreach ($surgery as $a) {
    array_push($surgery_arr, $a);
}
$surgery_arr = implode(',', $surgery_arr);

$other_arr = [];
$other = $_POST['other']; /// pushing other value into an array
$other_arr = array();
foreach ($other as $a) {
    array_push($other_arr, $a);
}
$other_arr = implode(',', $other_arr);


$age = validate($_POST['age']);
$weight = validate($_POST['weight']);

$role = 3; //0-admin, 1-volunteer, 2-donees, 3 - donor
$user_data = 'uname=' . $fname . '&name=' . $lname;

$create_datetime = date("Y-m-d H:i:s");
$checkUser = "SELECT mobile FROM users WHERE mobile='$mobile' AND role = '3'";
$checkUserResult = mysqli_query($conn, $checkUser);

if ($checkUserResult->num_rows >= 1) {
    echo "<div class='form'>
              <h3>Mobile Number Already registered</h3><br/>
               <p class='link'>Click here for <a href='../donor/donor_registration.php'>register again</a> again.</p>
              </div>";
} else {
    $sql = "INSERT INTO users (f_name, l_name, address, gender, bloodgroup, alchohol, health, mobile, email, prev_donate, surgery, other, age, weight, role) VALUES ('$fname','$lname', '$address', '$gender', '$bgroup', '$alchohol_arr', '$health_arr', '$mobile', '$email', '$prev', '$surgery_arr', '$other_arr', '$age', '$weight', '$role')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $sql1 = "SELECT * FROM users WHERE mobile='$mobile'";
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            $row = mysqli_fetch_assoc($result1);
            $_SESSION['uname'] = $row['f_name'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../donor/donorlogin.php?success= your account has been created successfully");
            exit();
        }
    } else {
        header("Location: donor_registration.php?error=unknown error occurred&$user_data");
        exit();
    }
}
?>