<?php
session_start();
include "../db_conn.php";

function validate($data)                                   // to trim data without space
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$id = $_SESSION['id'];                                     // to update modified volunteer details in update form.
$fname = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$mobile = validate($_POST['mobile']);
$email = validate($_POST['email']);
$role = '1';

// update query
$sql1 = "UPDATE users SET f_name = '$fname', l_name = '$lname', mobile='$mobile', email='$email' WHERE role='$role' AND id='$id'";
$data1 = mysqli_query($conn, $sql1);                  // to execute query with database.         
if ($data1) {
    header("Location: ../volunteer/volunteer_home.php?success= your details has been updated successfully");      // navigating to volunteer after successful updation.
    exit();
}
?>