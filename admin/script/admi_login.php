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

$email = validate($_POST['email']);
$pwd = validate($_POST['pwd']);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pwd' AND role='0'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['password'] === $pwd) {
        $_SESSION['fname'] = $row['f_name'];
        $_SESSION['lname'] = $row['l_name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        header("Location: ../dashboard.php?success= successfully logged in");
        exit();
    }
} else {
    $count = mysqli_num_rows($result);
    echo "<div class='form'>
		<h3>Incorrect Username/password.</h3><br/>
		<p class='link'>Click here to <a href='../index.php'>Login</a> again.</p>
		</div>";
    exit();
}
?>