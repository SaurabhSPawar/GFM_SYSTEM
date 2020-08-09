<?php
include('Connection.php');
if(isset($_POST['search_btn']))
{ $flagr=0;
	$flag=0;
	 $roll_number=$_POST['studrollno'];
	  $gfm_email = $_POST['gfmemail'];
 if(empty($_POST['studrollno']))
 {
 	$studrollno_alert = "please enter roll_number";
 }
 elseif(empty($_POST['gfmemail']))
 {
 	$gfmemail_alert = "please enter batch GFM email";
 }
 else
 {
 	$sql= "SELECT * FROM `addedinfo` where roll_number='".$_POST['studrollno']."' and email ='".$_POST['gfmemail']."'";
 	$result=mysqli_query($link,$sql);
 	$get_result =mysqli_fetch_row($result); 
 	  //Array ( [0] => 12 [1] => shweta@pawar.com [2] => 78 [3] => john smith [4] => 67 [5] => 0 [6] => 0 [7] => 0 [8] => 0 [9] => 0 [10] => 0 [11] => 0 [12] => 2147483647 [13] => 2147483647 [14] => 456312365 ) 
 	if(!empty($get_result))
 	{
 		//redirect to table and show details of student

 	}
 	else
 	{
 		$error_response = "no record found";

 	}

 }
 }
?>
