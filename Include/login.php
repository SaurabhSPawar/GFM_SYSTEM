<?php 

 include ('Connection.php');
 session_start();
  $user_emailid= $_POST['user_emailid'];
 $password2=$_POST['passwordl'];
  //$user_emailid="shweta@pawar.com";
  //$password2="shwetap";

 $sql = mysqli_query($link,"SELECT * FROM registration WHERE email='".$user_emailid."'");

	$result  = mysqli_fetch_row($sql);

	if(isset($result))
	{	
		$password_encoded=$result[2];
	   $password_decoded=base64_decode($password_encoded);
	   $gfm_name=$result[0];
		if($password2==$password_decoded)
		{
		
           $_SESSION["gfmemail"]=$user_emailid;
            $_SESSION["gfm_name"]=$gfm_name; 

			$data="you are logined ";
			//header('location:http://localhost/GFM SYSTEM/homepage.php');

		}
		else
		{
			$data = "You Entered Wrong Password";
		}

	}
	else
	{
		$data="Please Sign Up First";
		
	}

	 echo json_encode($data);

   ?>