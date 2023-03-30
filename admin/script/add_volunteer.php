<?php
session_start();
include "../../db_conn.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$fname = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$mobile = validate($_POST['mobile']);
$email = validate($_POST['email']);
$cpwd = validate($_POST['cpwd']);
$role = '1';
$user_data = 'uname=' . $fname . '&name=' . $lname;

$sql = "SELECT * FROM  users WHERE password='$cpwd' AND role='$role'";
$data = mysqli_query($conn, $sql);
if (mysqli_num_rows($data) == 1) {
    echo '<h3> Volunteer details already added</h3>';
    exit();
} else {
    $sql1 = "INSERT INTO users (f_name, l_name, mobile, email, role, password) VALUES ('$fname','$lname','$mobile','$email','$role', '$cpwd')";
    
    $data1 = mysqli_query($conn, $sql1);
    if ($data1) {
        header("Location: ../volunteer_list.php?success= your account has been created successfully");
        exit();
    }
}
?>