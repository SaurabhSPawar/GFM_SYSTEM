<html>
<head>
<title>
	Forget Password
</title>
</title><script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
	body{
background-color:  #2A3F54;
}
/**{
	border:1px solid white;
}*/
</style>

</head>
<body >

	<div class="container" title="Enter Email Id to get Password .Password will send on your Email account.">
		<div class="container" >
			<br><h1 style="color:#b1b1c2; text-align: center;">GFM-System</h1></div>	
<br>
		<div class="row"><br>
					<div class="col-lg-6 col-lg-offset-3 col-xs-12 col-sm-12 col-md-6 col-md-offset-3 " style="background-color:#051B26 ;border-radius: 20px;">
						<br><br>
						<div class="form-group">
	<div class="h1" style="color: white;text-align:center;width:100%;">Forget Password</div>
	<br><br>
	<br>
	<div class="input-group md-6">
		<div class="input-group-addon " style="background-color: #051B26; border-color: transparent;padding: 0px;margin-top: 13px">
<i class="fa fa-user fa-1x " style="background-color: #2A3F54;color:white;padding: 10px;margin-top: -1px;"></i>
		</div>
		<input type="Email" class="form-control user_emailid" name="user_emailid" placeholder="Email-id" required="required">
	</div>
	<br><br><br>
		
<div class="col-lg-4 col-lg-offset-3 col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-4 col-xs-3 col-xs-offset-1  " >
	<button class="btn btn-lg  crtaccount" id="crtaccount" style="background-color: #2A3F54;color: white;position: absolute;" >Send Recovery Email</button></div>

<br><br><br><br>
					</div>
		</div>
	</div>
</div>



</body>
</html>

<script type="text/javascript">

	$(document).ready(function(){
$("#crtaccount").click(function()
{
	
	 $.ajax({    

              url: 'http://localhost/GFM SYSTEM/Include/Forget_password.php',    
              type: 'post', 
              dataType: 'json',  
              data : {
              user_email:user_email
              },                   
              success: function(data)         
              {
               alert(data);
              } 
              
            });
	  });
 });
</script>