<html>
<head>
<title>
Sign Up | Sign In
</title><script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="style3.css" rel="stylesheet">
</head>
<body>	
	<?php include('Include/logout.php'); ?>
<div class="container" ><br>
<div class="container"><h1 style="color:#b1b1c2; text-align: center;">GFM-System</h1></div>	
<br>
<!-- work for signin-->
<div class="container loginpg" >
<div class="row"><br>
<div class="col-lg-6 col-lg-offset-3 col-xs-12 col-sm-12 col-md-6 col-md-offset-3 " style="background-color:#051B26 ;border-radius: 20px;">

	<br><br>
	<div class="form-group">
	<div class="h1" style="color: white;text-align:center;width:100%;">Sign In</div>
	<br><br><br>
	<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-user fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="Email" class="form-control user_emailid" name="user_emailid" placeholder="username" required="required">
	</div>
	<br>
	<div class="input-group md-6">
	<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-key fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>

		<input type="password" class="form-control passwordl"  name="passwordl" placeholder="password" minlength ="6" required="required">
	</div>
	<br>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4  col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 ">
	<button class="btn loginbtn" id="loginbtn" style="background-color: #2A3F54; color:white;padding: 15px;"><i class="fa fa-sign-in fa-1x"></i></button>

	<!-- <a href="forget.php" class="link" style="margin-left: 10%; color:white; text-decoration: none;" >Forget Password</a> -->
</div>
</div>
	<br><br><br>
	<span style="color:white;margin-left: 25%;">New to site? <i class="fa fa-hand-o-right"></i></span>
	<a href="#"  class="logincreataccount go-create-an-account" style="">Creat An Account</a>
	<br><br><br>
</div>

</div>
</div>
</div>
<!-- work for signup -->
<div class="container signuppg">
	<div class="row"><br>
		<div class="col-lg-6 col-lg-offset-3 col-xs-12 col-sm-12 col-md-6 col-md-offset-3 " style="background-color:#051B26 ;border-radius: 20px;">

	<br><br>
	<div class="form-group">
		<div class="h1" style="color: white;text-align: center; ">Sign Up</div>
	<br><br><br>
		<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-user fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="text" class="form-control" placeholder="Name"  required="required" name="user_name" value="">
	</div>
	<br>
		<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-envelope-o fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="Email" class="form-control" placeholder="Email" required="" name="user_email">
	</div>
	<br>
			<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-bank fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
<select class="t" style="width:99%;height: 34px;margin-left: 0px;" name="department" id="department" >
	<option selected="" disabled="disabled" >Select Department</option>
	<option value="comp_engg">Computer Engineering</option>
	<option value="civil_engg">Civil Engineerig</option>
	<option value="entc_engg">E&TC Engineering</option>
	<option value="mech_engg">Mechanical Engineering</option>
	<option value="elect_engg">Electrical Engineering</option>
</select>
	</div>
	<br>
		<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-graduation-cap fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<select name="year" class="" style="width:99%;height: 34px;margin-left: 0px; " id="year">
	<option selected="" disabled="" >Select Year</option>
	<option value="fe">First Year</option>
	<option value="se">Second Year</option>
	<option value="te">Third Year</option>
	<option value="be">Bachelor Of Engineering</option>
</select>
	</div>
	<br>
		<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-calendar  fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="text" class="form-control" placeholder="Batch" pattern="[A-Za-z0-9]+" required="required" name="batch">
	</div>
	<br>
			<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-key  fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="password" class="form-control" name= "password" placeholder="Password" required="required" minlength="6">
	</div>
	<br>
			<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-key  fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="password" class="form-control  " name="con_password" placeholder="Confirm Password" required="required" minlength="6">
	</div>
	<br><br><br>
	<div class="row">
<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-2 " >
	<button class="btn btn-lg  crtaccount" id="crtaccount" style="background-color: #2A3F54;color: white;position: absolute;" >Creat account</button></div>
</div>
	<br><br><br><br>
	<br>
	        <span style="color: white; margin-left: 20%;">Already a member ?</span>
		<a href="#" class="signin go-signin-an-account">Sign In</a>
		<br><br><br>		
</div>
</div>
</div>
</div>
</div>
<br><br><br>
</body>
 <script src="jq.js"></script>
<script src="loginpg.js"></script>
<script type="text/javascript">
		//$(document).bind("contextmenu",function(e){
//return false;
	//});
		/*above code for blocking right key */
$(document).ready(function(){
$("#crtaccount").click(function()
{
	var flag = 0 ;
	var user_name = $("input[name=user_name]").val();
	var user_email = $("input[name=user_email]").val();
    var department= $("#department").val();
    var year= $("#year").val();
	var batch = $("input[name=batch]").val();
	var password = $("input[name=password]").val();
	var pass_length = password.length;
	var con_password = $("input[name=con_password]").val();

if(user_name==""){ alert('Enter user  Name ');	flag=1;}
if(user_email==""){alert('Enter user  Email id ');flag=1;}
var x = user_email;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if((atpos<1) || (dotpos<atpos+2 )|| (dotpos+2>=x.length)) { alert("not valid email-id !"); flag=1; } 
 if(department==""){ alert('please Select Departmet'); flag=1; }
if(year==""){ alert('please Select year'); flag=1; }
if(batch==""){ alert('please enter batch of students'); flag=1;}
if(password==""){ alert('please enter Password'); flag=1; }
if(pass_length < 6){ alert('please enter Strong Password'); flag=1; }
if(con_password==""){ alert('please enter Confirm Password'); flag=1; }
if(password!= con_password) { alert('Confirm Password is not match with Password'); flag=1; }


	 if(flag==0)
	{
 
		  
         $.ajax({    

              url: 'http://localhost/GFM SYSTEM/Include/Registration.php',    
              type: 'post', 
              dataType: 'json',  
              data : {
              user_name:user_name,
              user_email:user_email,
              department:department,
              year:year,
              batch:batch,
              password:password
              },                   
              success: function(data)         
              {
               alert(data);
               
              } 
              
            });



		
	}
	
});

$("#loginbtn").click(function()
{
var flagl=0;
var user_emailid = $("input[name=user_emailid]").val();
var passwordl = $("input[name=passwordl]").val();

if(user_emailid==""){alert('Enter user  Email id ');flagl=1;}
var xq = user_emailid;
var atpos1=xq.indexOf("@");
var dotpos1=xq.lastIndexOf(".");
if((atpos1<1) || (dotpos1<atpos1 +2 )|| (dotpos1 +2>=xq.length)) { alert("not valid email-id !"); flagl=1; } 

if(passwordl==""){ alert('please enter Password'); flagl=1; }
if(flagl==0){
	$.ajax({
		url:"http://localhost/GFM SYSTEM/Include/login.php",
		type:'post',
		dataType:'json',
		data:{
			user_emailid:user_emailid,
			passwordl:passwordl

		},
		success:function(data)
		{
			//alert(data);
			window.location='http://localhost/GFM SYSTEM/homepage.php';
		}
	})
}

});
});
</script>
</html>