<?php
include('connection.php');
session_start();
if($_SESSION['gfmemail']==null && $_SESSION['gfmemail']=="")
{session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php');}

$gfm_email=$_SESSION["gfmemail"];
$sql=" select * from addedinfo where email='".$gfm_email."'";
$result= $link->query($sql);

?>