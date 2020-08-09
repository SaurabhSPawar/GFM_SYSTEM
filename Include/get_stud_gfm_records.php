<?php
session_start();
if($_SESSION['gfmemail']==null && $_SESSION['gfmemail']=="")
{session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php');}
include('Include/connection.php');
 include'newheaderslider.php';
/*	$sql=mysqli_query($link,"select name from addedinfo where roll_number='".$_SESSION['gfmemail']."'");
print($sql);*/

$gfm_email=$_SESSION["gfmemail"];
$sql=mysqli_query($link,"select * from registration where email='".$gfm_email."'");
$result1  = mysqli_fetch_row($sql);
$sql=mysqli_query($link,"select count(*) from addedinfo where email='".$gfm_email."' ");
$sql2 = mysqli_fetch_row($sql);

 ?>