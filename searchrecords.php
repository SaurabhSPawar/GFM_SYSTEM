<!DOCTYPE html>
<html>
<head>
	<title>Search Student records</title>
	<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
/**{border: 1px solid black;}*/
/**{border: 1px solid black;}*/
</style>
</head>
<?php include('Include/search_stud_info.php'); ?>
<body style="background: #2A3F54;">	
<div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 " style="border:1px solid #dcdcdc;min-height:480px; margin-top: 30px; background: white;border-radius: 20px ;float:left; " >
    <br>
    <div class="row">
    	<figure class="figure">
    		 <img class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 profile figure-img img-fluid rounded " src="searchrecords.png" title="$name1">           
    	</figure>
      <?php if (!empty($error_response)) {?>
      <span style="color:red;"> No Record Found ! </span>
       <?php } ?>  
    </div>
    <hr>
  <form method="post" >
  <div class="row" style="margin-left: 30px;">
          <div class="form-group" >
               <h3 for="studrollno"><small>Enter Student Roll Number:</small></h3>
               <input type="Number" name="studrollno"  style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54; background: white;">
          </div>
          <?php  
           if(!empty($studrollno_alert)) { echo "<p style='color:red;'>".$studrollno_alert."</p>"; } ?>
  </div>
     <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="gfmemail"><small> Enter GFM email ID:</small></h3>
               <input type="email" name="gfmemail"  style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
          <?php 
            if(!empty($gfmemail_alert)) { echo "<p style='color:red;'>".$gfmemail_alert."</p>"; } ?>
  </div>
  <br><br>
  <div class="row">
  	<button type="submit" id="search_btn" class="btn btn-primary col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 " name="search_btn">Search</button><br><br>
    <hr>
  </div>
  <div style="width:420px; min-height:10px;border: 1px solid transperent;class="container col-lg-4 col-lg-offset-4" id="div_toggle">
    <?php if(!empty($get_result)){ ?>
  <?php echo '<font style="color:green">Name:&nbsp;</font>'.$get_result[3];  ?>
<?php echo '<br><br><font style="color:blue;">Marks : </font><br><br>
   <font style="color:green;">Semistor 1:&nbsp</font>'.$get_result[4].'<br>';?>
  <?php echo '<font style="color:green;">Semistor 2:&nbsp</font>'. $get_result[5].'<br>'; ?>
  <?php echo '<font style="color:green;">Semistor 3:&nbsp</font>' .$get_result[7]; ?>
  <?php echo'<br>  <font style="color:green;">Semistor 4:&nbsp</font>'. $get_result[8]; ?>
  <?php echo'<br><font style="color:green;">Semistor 5:&nbsp</font>'. $get_result[8]; ?>
  <?php echo '<br><font style="color:green;">Semistor 6:&nbsp</font>'. $get_result[9]; ?>
  <?php  echo '<br><font style="color:green;">Semistor 7:&nbsp</font>'. $get_result[10]; ?>
  <?php echo '<br><font style="color:green;">Semistor 8:&nbsp</font>'. $get_result[11]; ?>
<?php } ?>
</div>
</div></form>
  <br><br>
</div>
<script type="text/javascript">
    $(document).bind("contextmenu",function(e){
return false;
  });
</script>
</body>
</html>