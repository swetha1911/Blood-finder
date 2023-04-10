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

$uname = validate($_REQUEST['uname']);
$mobile = validate($_REQUEST['mobile']);

$sql = "SELECT * FROM users WHERE mobile='$mobile' AND email='$uname' AND role='3'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_assoc($result);
	if ($row['mobile'] === $mobile) {
		$_SESSION['fname'] = $row['f_name'];
		$_SESSION['lname'] = $row['l_name'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['bgroup'] = $row['bloodgroup'];
		
		header("Location: ../donor/donor_home.php?success= successfully logged in");
		exit();
	}
} else {
	$count = mysqli_num_rows($result);
	echo "<div class='form'>
		<h3>Incorrect Username/password.</h3><br/>
		<p class='link'>Click here to <a href='donor_login.php'>Login</a> again.</p>
		</div>";
	exit();
}
?>