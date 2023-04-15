<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
include '../db_conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "../../PHPMailer-master/src/PHPMailer.php";
require "../../PHPMailer-master/src/SMTP.php";
require "../../PHPMailer-master/src/Exception.php";


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
// $mail->Username = 'intelligentbloodfinder@gmail.com';
//Password to use for SMTP authentication
// $mail->Password = 'zntocopxxfbdvcwt';
$mail->Username = 'sujay.sugunakar@gmail.com';
$mail->Password = 'hlgbjnonfpewllbi';

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

if ($actionval == 'confirm') {

    // fetching donees details for mail content

    $sql0 = "SELECT * FROM users WHERE id ='$reqId' AND role='2'"; // role = 2 (donees)
    $result0 = mysqli_query($conn, $sql0);
    if ($result0) {
        $row0 = mysqli_fetch_assoc($result0);
        $dName = $row0['f_name'];
        $dmobile = $row0['mobile'];
        $dhospital_name = $row0['hospital_name'];
        $dunit = $row0['unit'];
        switch ($row0['bloodgroup']) {
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

            while ($row = mysqli_fetch_assoc($result1)) {
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
                $mail->addAttachment('../img/blood_logo.jpg');
                if (!$mail->send()) {
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message sent!';
                    sleep(2);
                    continue;
                    //Section 2: IMAP
                    //Uncomment these to save your message in the 'Sent Mail' folder.
                    #if (save_mail($mail)) {
                    #    echo "Message saved!";
                    #}

                }

            }
        }

    }
} else if ($actionval == 'reject') {
    $sql = "UPDATE users SET status = '3', volunteer_id='$id' WHERE id = '$reqId' AND role ='2'"; // role = 2 (donees) // status = 3 (rejected)
    $result = mysqli_query($conn, $sql);

    // header("Location: volunteer_request_track.php?success= successfully updated");
    // exit();
}
header("Location: volunteer_request_track.php?success= successfully updated");
exit();

// / $mail->addAddress('sriramcrazofficial@gmail.com', 'Sriram');
// $mail->msgHTML(file_get_contents('content.html'), __DIR__);
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
// function save_mail($mail)
// {
// //You can change 'Sent Mail' to any other folder or tag
// $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

// //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
// $imapStream = imap_open($path, $mail->Username, $mail->Password);

// $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
// imap_close($imapStream);

// return $result;
// }


ob_end_flush();
?>