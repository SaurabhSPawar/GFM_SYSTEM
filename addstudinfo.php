<!DOCTYPE html>
<html>
<head>
	<title>Add information</title>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">

</style>
</head>
	<body style="background: #f7f7f7;margin: 0px 0px;">
	<div class="container-fluid"style="margin-left:-15px;height: 900px;" >
<?php include'newheaderslider.php'; ?>

<div class="container containerform" id="containerform" style="background: #dcdcdc; border-radius: 20px;">
	<br><br>
	<div class="formtitle" style="color: #2A3F54;"><h3>Add New Student Information :</h3></div><br><br>
	<input type="number" min="0" class="form-control rollno " id="rollno" name="rollno" placeholder="Roll Number"><br>
		<input type="text" class="form-control studname" id="studname" name="studname" placeholder="Student Full Name"><br>
		<input type="number"  class="form-control studphon" id="studphon" name="studphon" placeholder="Student Phone Number"><br>
		<input type="number"  class="form-control parentphon" id="parentphon" name="parentphon" placeholder="Parents Phone Number"><br>
		<input type="number"  class="form-control Aadhaar" id="Aadhaar" name="Aadhaar" placeholder="Aadhaar Number"><br>
		<div class="formtitle" style="color: #2A3F54;"><h3>Add Semistor Marks Of Student :</h3></div><br><br>
		<div class="row" style="z-index: -1;">
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2" style="float:left;">
				<input type="number" min="0" max="100" class="form-control sem1"  name="sem1" id="sem1" placeholder="1st Sem"style="float:left;"></div>
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2 " style="float:left;">
				<input type="number" min="0" max="100" class="form-control sem2" placeholder="2nd Sem"  name="sem2" id="sem2" style="float:left;"></div></div>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3  col-lg-offset-2 " style="float:left;">
			<input type="number" min="0" max="100" class="form-control sem3"   placeholder="3rd Sem" name="sem3" id="sem3"style="float:left;"></div>
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3  col-lg-offset-2 " style="float:left;">
			<input type="number" min="0" max="100" class="form-control sem4"  placeholder="4th sem" name="sem4" id="sem4" style="float:left;"></div>
			</div>
			<div class="row">
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2">
			<input type="number" min="0" max="100"  class="form-control sem5" placeholder="5th Sem" name="sem5" id="sem5"></div>
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2 " style="float:left;">
			<input type="number" min="0" max="100"  class="form-control sem6" placeholder="6th Sem" name="sem6" id="sem6"></div></div>
		<div class="row">	
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2 " style="float:left;">
			<input type="number" min="0" max="100"  class="form-control sem7" placeholder="7th Sem" name="sem7" id="sem7"></div>
			<div class="col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 col-md-3 col-md-offset-2 col-lg-3  col-lg-offset-2" style="float:left;">
 			<input type="number" min="0" max="100" class="form-control sem8" placeholder="8th Sem" name="sem8" id="sem8">
            </div>
		</div>
	<br><br>
<button class="btn btn-primary " style="margin-left: 38%" value="submit" id="submitbtn">Submit</button>
	<br><br><br>
</div>

</div>
</body>

	<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="jq1.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).bind("contextmenu",function(e){
return false;
	});
$(document).ready(function(){
$(".containerform").css({
	"margin-left" : "20%" ,
	"float" : "left",
	"border" : "1px solid #dcdcdc",
	"margin-top" : "100px" ,
	"width" : "70%"
});

	$("#leftsidespan").click(function()
{	
$(".containerform").css({
  "margin-left" : "20%" ,
	"float" : "left",
	"border" : "1px solid #dcdcdc",
	"margin-top" : "-560px" ,
	"width" : "70%"
});
});
$("#close").click(function()
{	
$(".containerform").css({	
	"margin-left" : "20%" ,
	"float" : "left",
	"border" : "1px solid #dcdcdc",
	"margin-top" : "100px" ,
	"width" : "70%"
});
});

$("#submitbtn").click(function()
{

var flag=0;
var studname = $("input[name=studname]").val();
var rollno = $("input[name=rollno]").val();
var studphon = $("input[name=studphon]").val();
var parentphon = $("input[name=parentphon]").val();
var Aadhaar = $("input[name=Aadhaar]").val();
var sem1 = $("input[name=sem1]").val();
var sem2 = $("input[name=sem2]").val();
var sem3 = $("input[name=sem3]").val();
var sem4 = $("input[name=sem4]").val();
var sem5 = $("input[name=sem5]").val();
var sem6 = $("input[name=sem6]").val();
var sem7 = $("input[name=sem7]").val();
var sem8 = $("input[name=sem8]").val();

if(studname=="")
{
	alert('please enter Student Name');
	flag=1;
}
if(rollno=="")
{
	alert('please enter roll number');
	flag=1;
}
if(parentphon=="")
{
	alert('please enter Parents Phone number');
	flag=1;
}
if(Aadhaar=="")
{
	alert('please enter Student Aadhaar');
	flag=1;
}
if(sem1=="")
{
	sem1=0;
}
if(sem2=="")
{
	sem2=0;
}
if(sem3=="")
{
	sem3=0;
}
if(sem4=="")
{
	sem4=0;
}
if(sem5=="")
{
	sem5=0;
}
if(sem6=="")
{
	sem6=0;
}
if(sem7=="")
{
	sem7=0;
}
if(sem8=="")
{
	sem8=0;
}
if (sem1>100 || sem1<0 || sem2>100 || sem2<0 ||  sem3>100 || sem3<0 ||  sem4>100 || sem4<0 || sem5>100 || sem5<0 || sem6>100 || sem6<0 || sem7>100 || sem7<0 || sem8>100 || sem8<0 ) {
	alert("Semistor percentages should be in between 0-100 ");
	flag=1;
}
alert("hii");
if( studphon.length!=10 || parentphon.length!=10)
{
alert("Please Enter Valid Phone Number it Should be 10 Digit Number");
	flag=1;
}

if(Aadhaar.length!=12)
{
alert("Please Enter Valid Adhaar Number it should be 12 Digit Number");
flag=1;
}
if(flag==0)
{

	      $.ajax({   

              url: 'http://localhost/GFM SYSTEM/Include/DataRegistration.php',    
              type: 'post', 
              dataType: 'json',  
              data : {
              studname:studname,
              	rollno:rollno,
              	studphon:studphon,
              	parentphon:parentphon,
              	Aadhaar:Aadhaar,
              	sem1:sem1,
              	sem2:sem2,
              	sem3:sem3,
              	sem4:sem4,
              	sem5:sem5,
              	sem6:sem6,
              	sem7:sem7,
              	sem8:sem8
              },                   
              success: function(data)         
              {
               alert(data);
              } 
              
            });
}
});
});
</script>
</html>