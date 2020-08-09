<?php 
 include ('Connection.php');
 session_start();
if($_SESSION['gfmemail']==null && $_SESSION['gfmemail']=="")
{ session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php'); }

 $studname= $_POST['studname'];
 $rollno= $_POST['rollno'];
 $sem1= $_POST['sem1'];
 $sem2= $_POST['sem2'];
 $sem3= $_POST['sem3'];
 $sem4= $_POST['sem4'];
 $sem5= $_POST['sem5'];
 $sem6= $_POST['sem6'];
 $sem7= $_POST['sem7'];
 $sem8= $_POST['sem8'];
 $studphon=$_POST['studphon'];
 $parentphon=$_POST['parentphon'];
 $Aadhaar=$_POST['Aadhaar'];
 
  $email=$_SESSION["gfmemail"];

$sql= mysqli_query($link,"insert into addedinfo(email,roll_number,name,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,Stud_phone,Parent_phone,Aadhaar)values('".$email."','".$rollno."','".$studname."','".$sem1."','".$sem2."','".$sem3."','".$sem4."','".$sem5."','".$sem6."','".$sem7."','".$sem8."','".$studphon."','".$parentphon."','".$Aadhaar."')");
if($sql)
{
	$data= "Your Record Has been Inserted";
}
else
{
	$data= "Oops.. Something Went Wrong... !";
}
	 echo json_encode($data);
  ?>