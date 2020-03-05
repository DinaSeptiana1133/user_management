<?php
session_start();

$db_host = "localhost";
$db_name = "user_management";
$db_user = "root";
$db_pass = "";

$db = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($db->connect_error){
    die('Error : '. $db->connect_errno);
    // error & erno sama aja tapi cuma masalah tampilan error yang beda :)
}
?>