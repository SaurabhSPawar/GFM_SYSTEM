<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
/**{border: 1px solid black;}*/
</style>
</head>
<body style="background:  #2A3F54;">	
<div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 " style="border:1px solid #dcdcdc;min-height:480px; margin-top: 30px; background: white;border-radius: 20px ">
    <br>
    <div class="row">
    	<figure class="figure">
    		 <img class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 profile figure-img img-fluid rounded " src="key5.png" title="$name1">           
    	</figure>
 	     
    </div>
    <hr>

  <div class="row" style="margin-left: 30px;">
          <div class="form-group" >
               <h3 for=""><small>Enter Old Password:</small></h3>
               <input type="Password" name="oldpassword"  style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54; background: white;">
          </div>
  </div>
     <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="newpassword"><small> Enter New Password:</small></h3>
               <input type="Password" name="newpassword"  style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
  </div>
   <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="Confirmpassword"><small> Confirm Password:</small></h3>
               <input type="Password" name="Confirmpassword" style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
  </div>
  <div class="row">
  	<a id="submitpassword" name="submitpassword" type="submit" class="btn btn-primary col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 ">Submit</a>
  </div>
  <br><br>
</div>
</body>
<script type="text/javascript">
    $(document).bind("contextmenu",function(e){
return false;
  });
  $(document).ready(function(){

  $("#submitpassword").click(function()
{
  var flag=0;
var oldpassword = $("input[name=oldpassword]").val();
var newpassword = $("input[name=newpassword]").val();
var Confirmpassword = $("input[name=Confirmpassword]").val();
var npaslenth= newpassword.length;
if(oldpassword=="")
{
  alert ('Please enter Password');
  flag=1;
}
if(npaslenth<6){
flag=1;
alert("Please Enter Strong Password");
}
if(newpassword!=Confirmpassword){
  alert( 'New Password Not Same With Reentered Password');
  flag=1;
}

if(flag==0)
{
$.ajax({
  url: 'http://localhost/GFM SYSTEM/Include/get_gfm_records.php',
  type:'post',
  dataType:'json',
  data:{
oldpassword:oldpassword,
newpassword:newpassword
  },
  success:function(data){
    alert(data);

  }

});
}
});
});
</script>


</html>