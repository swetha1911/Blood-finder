<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */   
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "blood-finder";
 
/* Attempt to connect to MySQL database */
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
  } else {
    // print_r("connection success");
}
?>