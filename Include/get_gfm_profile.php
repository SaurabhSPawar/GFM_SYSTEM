<?php
 include ('Connection.php');
  session_start();
 $email=$_SESSION["gfmemail"];
  if($email==""){
session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php');
 }
 else
 {
 	$sql=mysqli_query($link,"select * from  registration where email='".$email."'");
 	$result=mysqli_fetch_row($sql);
 	if (isset($result)) {
    $name=$result[0];
    $email=$result[1];
    $encodedpass=$result[2];
    $dept=$result[3];
    $year=$result[4];
    $batch=$result[5];
}
}
 
 if(isset($_POST['update_profle']))
 {
 //Array ( [UserName] => saurabh [batch] => b3 [update_profle] => Update Profile )
 if(empty($_POST['UserName']))
 {
 	$UserName_alert = "please enter username";
 }
 elseif(empty($_POST['batch']))
 {
 	$batch_alert = "please enter batch name";
 }
 else
 {
 	$sql=mysqli_query($link,"update registration set name='".$_POST['UserName']."', batch='".$_POST['batch']."' where email='".$_SESSION["gfmemail"]."'");
 	$alert ="Your Profile Has been Updated Sucessfully";
 }
 }
?>