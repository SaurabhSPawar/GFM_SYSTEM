<?php
session_start();
if($_SESSION['gfmemail']==null && $_SESSION['gfmemail']=="")
{session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php');}
include('Include/connection.php');
 include'newheaderslider.php'


 ?>