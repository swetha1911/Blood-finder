<?php
session_start();
include '../../db_conn.php';


$id = trim($_GET['volunt_id']);

$sql = "DELETE FROM users WHERE id ='$id' AND role='1'"; // role = 2 (donees)
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: volunteer_list.php?record deleted successfully");
    exit();
}


?>