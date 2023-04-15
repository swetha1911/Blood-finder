<?php
session_start();
include "../db_conn.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$id = $_SESSION['id'];
$fname = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$mobile = validate($_POST['mobile']);
$email = validate($_POST['email']);
$role = '1';
$user_data = 'uname=' . $fname . '&name=' . $lname;


$sql1 = "UPDATE users SET f_name = '$fname', l_name = '$lname', mobile='$mobile', email='$email' WHERE role='$role' AND id='$id'";
$data1 = mysqli_query($conn, $sql1);
if ($data1) {
    header("Location: ../volunteer/volunteer_home.php?success= your details has been updated successfully");
    exit();
}
?>