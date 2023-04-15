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

$fname = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$h_name = validate($_POST['hospital_name']);
$address = validate($_POST['address']);
$adm_no = validate($_POST['admission_no']);
$adm_date = date_format(date_create($_POST['admission_date']), "Y-m-d");
$gender = validate($_POST['gender']);
$bgroup = validate($_POST['bgroup']);
$unit = validate($_POST['unit']);
$health = validate($_POST['health']);
$mobile = validate($_POST['mobile']);
$email = validate($_POST['email']);
$role = '2'; //0-admin, 1-volunteer, 2-donees, 3 - donor
$status = '0'; //0-pending, 1-inprogress, 2-completed
$user_data = 'uname=' . $fname . '&name=' . $lname;
$sql = "SELECT * FROM users WHERE  mobile='$mobile' AND status='0'";
$data = mysqli_query($conn, $sql);
if (mysqli_num_rows($data) > 0) {
	echo "<div class='form'>
	<h3>Request alreay existed</h3><br/>
	<p class='link'><a href='../donees/donees_request_track.php'>Track Request</a></p>
	</div>";
	exit();
} else {
	print_r($adm_date);
	$sql1 = "INSERT INTO users (f_name, l_name,hospital_name, address, admission_no, admission_date, gender, bloodgroup, unit, health, mobile, email, role, status) VALUES ('$fname','$lname','$h_name', '$address', '$adm_no', '$adm_date', '$gender', '$bgroup', '$unit', '$health', '$mobile', '$email','$role', '$status')";
	$data1 = mysqli_query($conn, $sql1);
	if ($data1) {
		$sql1 = "SELECT * FROM users WHERE  mobile='$mobile'";
		$result1 = mysqli_query($conn, $sql1);
		if ($result1) {
			$row = mysqli_fetch_assoc($result1);
			$_SESSION['fname'] = $row['f_name'];
			$_SESSION['lname'] = $row['l_name'];
			$_SESSION['mobile'] = $row['mobile'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['role'] = $row['role'];
			header("Location: ../donees/donees_request_track.php?success= your account has been created successfully");
			exit();
		} else {
			echo "<h3>Error Ocurred</h3>";
		}
	}
}
?>