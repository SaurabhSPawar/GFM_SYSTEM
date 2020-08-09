<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-color: #F7F7F7;">
<?php include('Include/get_stud_gfm_records.php'); ?>
<!-- <h1>Welcome To GFM System</h1> -->
<div class="container containerwork col-lg-6 col-lg-offset-3  " style="z-index: +1;box-shadow: 5px 10px 18px #888888;">
	<p class="h1" style="text-shadow: 2px 2px #888888;">Welcome</p>
	<hr>

 <span style="font-size: 20px;">GFM :</span><span style="color: #B0B0B0; font-size: 20PX;"><?php
print_r($result1[0]);
	 ?></span>
<h1><span style="font-size: 20px;">Number Of Student :</span><span style="font-size: 20px;color: #B0B0B0; "><?php
print_r($sql2[0]);
	 ?></span>
</div>

</body>
<script type="text/javascript">
	
		$(document).ready(function(){
			
			$(".containerwork").css({
	"margin-left" : "20%" ,
	"float" : "left",
	"margin-top" : "100px" ,
	"width" : "50%",
	"background-color":"white",

});
		$("#leftsidespan").click(function(){
            $(".containerwork").css({
            	 "margin-left" : "20%" ,
	             "float" : "left",
	             "margin-top" : "-557px"
	            
            });
            })
		
		$("#close").click(function(){
            $(".containerwork").css({
            	 "margin-left" : "20%" ,
	             "float" : "left",
	             "margin-top" : "100px"
	              
            });
            })

		});
</script>
</html>