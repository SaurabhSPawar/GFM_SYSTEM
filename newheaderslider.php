<!DOCTYPE html>
<html>
<head>


	<title>Profile</title>
<script src="jquery.min.js"></script>

<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
table tbody tr:hover{ background-color: #eaf4f2 !important; }
body{margin: 0px 0px;}
.header{min-width: 100%;background:  #EDEDED;position: fixed;}
.leftsidespan{float:left;font-size: 30px;padding: 0.366% 1%;}	
.leftsidespan:hover{color: #2A3F54;cursor:pointer;background: white;}
.profimage{width:66px;height: 66px;border: 3px solid white;border-radius: 40px;}
.logoutpgdiv li {padding:5px 14px;border:1px solid transperent;}
.logoutpgdiv li a {text-decoration: none;}
.logoutpgdiv li a:hover{color:red;}
.navdiv ul{color: white;}
.navdiv ul li a{text-decoration: none;color:#dcdccd;}
.navdiv ul li a:hover{color:white;}
.navdiv{width: 215px;height: 700px;border: 1px solid black;position:relative;margin-top: -40px; background:#2A3F54;z-index: +1;}
.logoutpgdiv{list-style: none;z-index: +1;}
.close{ color: white;opacity: 1;}
.subheaderi{margin-left:10px;}
.closefa{margin-left:10px;}
.closefa:hover{color: red; opacity: 1;}
.sub-nav-ul{list-style-type: none;margin-left:-35px;list-style: none; text-decoration: none;}
.navli1{color:white;border-bottom: 1px solid #dcdcdc;}
.navli1-1{border-radius:40px; border: 1px solid white; height: 36px;width:36px; }
.navli1-2{margin-left: 5px;}
.navli1-3{margin-top: 20px;}
.navli2fa{margin-left:10px;}
.navli3fa{margin-left:10px;}
.navli4fa{margin-left:10px;}
@media screen and (max-width: 1366px) {
	.rightsidediv{width:220px;margin-left:78.69%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 82.69%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 1342px) {
	.rightsidediv{width:220px;margin-left:76.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 80.69%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 1190px) {
	.rightsidediv{width:220px;margin-left:73.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 77.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 1147px) {
	.rightsidediv{width:220px;margin-left:71.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 75.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 1010px) {
	.rightsidediv{width:220px;margin-left:70.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 75.599%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 934px) {
	.rightsidediv{width:220px;margin-left:67.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 72.599%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 843px) {
	.rightsidediv{width:220px;margin-left:63.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 68.599%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 747px) {
	.rightsidediv{width:220px;margin-left:59.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 65.599%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 671px) {
	.rightsidediv{width:220px;margin-left:54.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 61.599%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 596px) {
	.rightsidediv{width:220px;margin-left:48.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 54.599%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 506px) {
	.rightsidediv{width:220px;margin-left:40.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 56.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 547px) {
	.rightsidediv{width:220px;margin-left:40.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 47.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 479px) {
	.rightsidediv{width:220px;margin-left:40.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 45.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 455px) {
	.rightsidediv{width:220px;margin-left:35.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 42.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 429px) {
	.rightsidediv{width:220px;margin-left:34.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 41.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 414px) {
	.rightsidediv{width:220px;margin-left:30.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 38.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}

@media screen and (max-width: 389px) {
	.rightsidediv{width:220px;margin-left:27.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 35.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 373px) {
	.rightsidediv{width:220px;margin-left:20.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 30.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 342px) {
	.rightsidediv{width:220px;margin-left:16.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 26.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 327px) {
	.rightsidediv{width:220px;margin-left:15.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 26.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 324px) {
	.rightsidediv{width:220px;margin-left:12.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 25.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
@media screen and (max-width: 312px) {
	.rightsidediv{width:220px;margin-left:8.693%;float: left;height: 75px;}
.rightsidediv:hover{background:#C1CDCD;}
.headerpanel{margin-left: 20.99%; margin-top: 35px;width:220px;background: rgb(245, 245, 220);position: fixed;}
}
</style>
</head>
<body>
<div class="header" id="header"> 
<div class="leftsidespan" id="leftsidespan"><i class="fa fa-bars"></i></div>
<div class="rightsidediv" id="rightsidediv"><img src="profile1.png" class="profimage"><span>&nbsp; 
	Welcome GFM <i class="fa fa-sort-down header-i"></i></span></div>
</div>
<br> 
<br>
<div class="headerpanel" id="headerpanel">
	<ul class="logoutpgdiv">
		<li><a href="userprofile.php" class="sub-header-a1"> <b> Profile</b></a><br><br></li>
		<li><a href="Changepassword.php" class="sub-header-a2"> <b>Change Password</b> </a><br><br></li>
		<li><a href="http://localhost/GFM SYSTEM/loginpage.php?logout_id='logout'" class="sub-header-a3"><b> Log Out</b></a><i class="fa fa-sign-out pull-right subheaderi"></i><br></li>

	</ul>
</div>
<div class="navdiv" id="navdiv">
	<div  class="close" id="close" title="close"><i class="fa fa-close pull-right closefa"></i><br></div>
	<ul class="sub-nav-ul"><br>
        <li class="navli1"><div class="navli1-1">
        	<i class="fa fa-user fa-2x navli1-2"></i></div> <span class="navli1-3">GFM SYSTEM <br><br></span></li><br><br>
		<li><a href="http://localhost/GFM SYSTEM/homepage.php" class="ghar"> Home</a><i class="fa fa-university pull-right navli2fa"></i><br><br></li>
		<li><a href="http://localhost/GFM SYSTEM/addstudinfo.php" class="addrecord">Add new student record</a><i class="fa fa-pencil pull-right navli3fa"></i><br><br></li>
		<li><a href="http://localhost/GFM SYSTEM/displaystudinfo.php" class="listrecord">List student records</a><i class="fa fa-sign-out pull-right navli4fa"></i><br><br></li>
	</ul>

</div>
	<script src="bootstrap.min.js"></script>
<script type="text/javascript">
		$(document).bind("contextmenu",function(e){
return false;
	});
$(document).ready(function(){		
$(".headerpanel").hide();
$("#rightsidediv").click(function()
{	
$(".headerpanel").toggle();
});
});
$(document).ready(function(){
$(".navdiv").hide();
$("#close").click(function()
{	
$(".navdiv").hide();
});
$("#leftsidespan").click(function()
{	
$(".navdiv").show();
});
});
</script>
</html>