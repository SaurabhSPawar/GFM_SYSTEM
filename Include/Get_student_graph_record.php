<?php
include('Include/Connection.php');
session_start();
if($_SESSION['gfmemail']==null && $_SESSION['gfmemail']=="")
{session_unset();session_destroy(); header('location:http://localhost/GFM SYSTEM/loginpage.php');}
if(isset($_POST['view_student_record']))
{
	$stud_rollnumber = $_POST['view_student_record'];
	$sql=mysqli_query($link,"select * from addedinfo where roll_number='".$stud_rollnumber."'");
	$result  = mysqli_fetch_row($sql);
	if(isset($result))
	{
		$email=$result[1];
		$roll_number=$result[2];
		$name=$result[3];
		$sem1=$result[4];
		$sem2=$result[5];
		$sem3=$result[6];
		$sem4=$result[7];
		$sem5=$result[8];
		$sem6=$result[9];
		$sem7=$result[10];
		$sem8=$result[11];
	}
	include('C:\xampp\htdocs\GFM SYSTEM\Student_Graph.php');
}
if(isset($_POST['delete_student_records']))
{
	$stud_rollnumber = $_POST['delete_student_record'];
	$sql=mysqli_query($link,"delete from addedinfo where roll_number='".$stud_rollnumber."'");
		header('location:http://localhost/GFM SYSTEM/displaystudinfo.php');
		
}
?>