<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
include '../db_conn.php';

use PHPMailer\PHPMailer\PHPMailer; // using external phpmailer package
use PHPMailer\PHPMailer\SMTP;

require "../../PHPMailer-master/src/PHPMailer.php"; // importing  external phpmailer package
require "../../PHPMailer-master/src/SMTP.php";
require "../../PHPMailer-master/src/Exception.php";

// configuring php  

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'intelligentbloodfinder@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'zntocopxxfbdvcwt';


//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('intelligentbloodfinder@gmail.com', 'IntelligentBloodfinder');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
// $mail->addReplyTo('replyto@example.com', 'First Last');


$id = $_SESSION['id'];
$reqId = isset($_GET['req_id']) ? $_GET['req_id'] : '';
$actionval = isset($_GET['action']) ? $_GET['action'] : '';
$blood = isset($_GET['blood']) ? $_GET['blood'] : 'sujay';

if ($actionval == 'confirm') { //code block to be excuted for confirm click

    // fetching donees details for mail content

    $sql0 = "SELECT * FROM users WHERE id ='$reqId' AND role='2'"; // role = 2 (donees)
    $result0 = mysqli_query($conn, $sql0);
    if ($result0) {
        $row0 = mysqli_fetch_assoc($result0); // fetching donees details to be attached in the mail
        $dName = $row0['f_name'];
        $dmobile = $row0['mobile'];
        $dhospital_name = $row0['hospital_name'];
        $dunit = $row0['unit'];
        switch ($row0['bloodgroup']) { // to find the blood name
            case "1":
                $bgroup = "O+";
                break;
            case "2":
                $bgroup = "O-";
                break;
            case "3":
                $bgroup = "A+";
                break;
            case "4":
                $bgroup = "A-";
                break;
            case "5":
                $bgroup = "B+";
                break;
            case "6":
                $bgroup = "B-";
                break;
            case "7":
                $bgroup = "AB+";
                break;
            default:
                $bgroup = "AB-";
        }
        ;
    }


    // to send a mail to donor

    $sql = "UPDATE users SET status = '1', 
    volunteer_id='$id' WHERE id = '$reqId' AND role ='2'"; // role = 2 (donees)
    $result = mysqli_query($conn, $sql);

    if ($result > 0) {
        $sql1 = "SELECT * FROM users WHERE role ='3' AND bloodgroup='$blood'"; // role = 2 (donees)
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            $arr = [];
            $arr = array();

            while ($row = mysqli_fetch_assoc($result1)) { // to send out a mail more that one donor.
                array_push($arr, $row['email']);
                $str_arr = explode("@", $row['email']);
                $mail->addAddress($row['email'], $str_arr[0]);
                $mail->Subject = 'Urgently Required Blood';
                $mail->isHTML(true);
                $mail->Body = "<h4>Be a saviour just by donating your blood.</h4>
                    <h4>Urgently Required Blood</h4>
                    <label>Patient name - <strong>{$dName}</strong> </label><br>
                    <label>Hospital name - <strong>{$dhospital_name}</strong></label> <br>
                    <label>Urgently requires - <strong>{$bgroup}</strong></label><br> 
                    <label>unit required - <strong>{$dunit}</strong></label><br>
                <p>if available/possible kindly call {$dName}&nbsp;({$dmobile}) </p><br>
                <center><strong>Thank you!</strong></center>";
                if (!$mail->send()) {
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message sent!';
                    sleep(2);
                    continue;
                }

            }
        }

    }
} else if ($actionval == 'reject') { //code block to be excuted for reject click
    $sql = "UPDATE users SET status = '3', volunteer_id='$id' WHERE id = '$reqId' AND role ='2'"; // role = 2 (donees) // status = 3 (rejected)
    $result = mysqli_query($conn, $sql);
}
header("Location: volunteer_request_track.php?success= successfully updated");   // navigating back to volunteer track page.    
exit();
ob_end_flush();
?>