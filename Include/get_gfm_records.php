<?php
 include ('Connection.php');
  session_start();
 $email=$_SESSION["gfmemail"];
  $oldpassword= $_POST['oldpassword'];
 $newpassword= $_POST['newpassword'];
  $sql=mysqli_query($link,"select password  from registration where email='".$email."'");
/* 	$result= $link->query($sql);*/
$result  = mysqli_fetch_row($sql);
$correctpass=$result[0];
 $correctpass = base64_decode($correctpass);

 if($email==""){
session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php');
 }
 else{

 if($correctpass!=$oldpassword){
 	$data = "please enter correct password;";
 echo json_encode($data);
 }
 else{
 	$newpassword=base64_encode($newpassword);
 	$sql=mysqli_query($link,"update registration set password='".$newpassword."' where email='".$email."'");
 	$data = "Your Password Successfully Changed";
 echo json_encode($data);
 }

 }


?>