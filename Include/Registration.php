<?php 
 include ('Connection.php');

 $username= $_POST['user_name'];
 $user_email= $_POST['user_email'];
 $department= $_POST['department'];
 $year= $_POST['year'];
 $batch= $_POST['batch'];
 $password1= $_POST['password'];
 $password = base64_encode($password1);

 $sql = mysqli_query($link,"select * from registration where email='".$user_email."'");
 $result  = mysqli_fetch_row($sql);

 if(empty($result))
 {

		$sql="insert into  registration (name,email,password,department,year,batch)  values ('".$username."','".$user_email."','".$password."','".$department."','".$year."','".$batch."')";


		if (
		 $result= $link->query($sql)===TRUE) {  }
		 else{echo "error". $link->error;}


		$data="You Are Sucessfully Resistered With Us... ";
		 echo json_encode($data);

 }
 else
 {
     $data="You Are Alredy Resistered with us...";
	 echo json_encode($data);

 }






  ?>