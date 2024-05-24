<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_EMAIL is present or not
if (!isset($_SESSION['email']) || (trim($_SESSION['email']) == ''))
 {
    header("location: index.php");
    exit();
}
$session_email=$_SESSION['email'];

?>