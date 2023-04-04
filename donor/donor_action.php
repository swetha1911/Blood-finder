<?php
session_start();
include '../db_conn.php';

$id = $_SESSION['id'];
$reqId = $_SESSION['donor_req_id'];
$actionval = $_SESSION['action'];
if ($actionval === 'accept') {
    $sql = "UPDATE users SET status = '2', donor_id='$id' WHERE id = '$reqId' AND role ='2'"; // role = 2 (donees)
}
// if ($actionval === 'cancel') {
//     $sql = "UPDATE users SET status = '0', donor_id='$id' WHERE id = '$reqId' AND role ='2'"; // role = 2 (donees) // status = 3 (rejected)
// }
$result = mysqli_query($conn, $sql);
header("Location: donor_request_track.php?success= successfully updated");
exit();
?>