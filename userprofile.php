<!DOCTYPE html>
<html>
<head>
	<title>GFM PROFILE</title>
	<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
/**{border: 1px solid black;}*/
</style>
</head>
<?php include('Include/get_gfm_profile.php');  ?>
<body style="background:  #2A3F54;">	
<div class="container col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 " style="border:1px solid #dcdcdc;min-height:680px; margin-top: 30px; background: white;border-radius: 20px " >
    <br>
    <div class="row">
    	<figure class="figure">
    		 <img class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 profile figure-img img-fluid rounded " src="profile1.png" title="$name1">           
    	</figure>
 	     
    </div>
    <hr>
<?php if(!empty($alert)) { echo "<p style='color:green;'>".$alert."</p>"; } ?>
    
 
<form method="post">
  <div class="row" style="margin-left: 30px;">
          <div class="form-group" >
               <h3 for="name1"><small> Name:</small></h3>
               <input type="text" value="<?php echo $name; ?>" name="UserName"  style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54; background: white;">
          </div>
          <?php if(!empty($UserName_alert)) { echo "<p style='color:red;'>".$UserName_alert."</p>"; } ?>

  </div>
   <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="email"><small> Email:</small></h3>
               <input type="email" value="<?php echo $email; ?>"  disabled style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
  </div>
  <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="dept"><small> Department:</small></h3>
               <input type="text" value="<?php echo $dept; ?>" disabled style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
  </div>
  <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="year"><small> Year:</small></h3>
               <input type="text" value="<?php if ($year=='te'){echo 'T.E' ; }elseif($year=='se'){echo 'S.E';} elseif($year=='be') {echo 'B.E';} elseif($year=='fe'){echo 'F.E';} ?>" disabled style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
  </div>

     <div class="row" style="margin-left: 30px;">
          <div class="form-group">
               <h3 for="email"><small> Batch:</small></h3>
               <input type="text" value="<?php echo $batch; ?>" name="batch"  style="border-left: none;border-top: none;border-right: none;border-bottom:1px solid  #2A3F54;background: white;"> 
          </div>
          <?php if(!empty($batch_alert)) { echo "<p style='color:red;'>".$batch_alert."</p>"; } ?>
  </div>
   
  

  <div class="row">
  	<input type="submit" class="btn btn-primary col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 " value="Update Profile" name="update_profle">
  </div>
  </form>
  <br><br>
</div>

</body>
<script type="text/javascript">
  $(document).bind("contextmenu",function(e){
return false;
  });
</script>
</html>