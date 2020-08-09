<?php
/* include('include/Get_student_graph_record.php');*/
$dataPoints = array(
      array("label"=> "Sem I", "y"=> $sem1),
      array("label"=> "Sem II", "y"=> $sem2),
      array("label"=> "Sem III", "y"=> $sem3),
      array("label"=> "Sem IV", "y"=> $sem4),
      array("label"=> "Sem V", "y"=> $sem5),
      array("label"=> "Sem VI", "y"=> $sem6),
      array("label"=> "Sem VII", "y"=> $sem7),
      array("label"=> "Sem VIII", "y"=> $sem8)
);      
?>
<!DOCTYPE HTML>
<html>
<head>
      <script src="bootstrap.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2", // "light1", "light2", "dark1", "dark2"
      title: {
            text: "Student Exam Percentage Graph"
      },
      axisY: {
            title: "Percentage",
            includeZero: false
      },
      data: [{
            type: "column",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
});
chart.render();
 
}
</script>

<style type="text/css">
/*#chartContainer .canvasjs-chart-canvas { width:799px !important; height:272px ;  }*/
</style>
</head>
<body>

      <?php include'newheaderslider.php'?>
      <div class="container" id="controlgraph" >
      <p align="center">Student Name:  <?php echo $name; ?>  Roll Number: <?php echo $roll_number; ?></p>
      <p align="center"> Adhaar : <?php echo $adhaar; ?></p>
      <p align="center"> Parents Contact: <?php echo $student_phone; ?>  Student Contact: <?php echo $parent_phone; ?></p>
      </div>
<div id="chartContainer" style="height: 370px; width: 100%;float:left;margin-top: 40px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br><br>
</body>
<script src="jquery.min.js"></script>
<script type="text/javascript">
            $(document).bind("contextmenu",function(e){
return false;
      });
      
      $(document).ready(function(){
$("#chartContainer .canvasjs-chart-canvas ").css({
      "margin-left" : "-60%" ,
      "float" : "left",
      "border" : "1px solid #dcdcdc",
      "margin-top" : "180px" ,
     "width" : "60% ",
      "height" :"385px"
});

$("#controlgraph").css({     
      "margin-left" : "18%" ,
      "float" : "left",
      "border" : "1px solid #dcdcdc",
      "margin-top" : "39px" ,
      "width" : "60%"
     
});
   $("#leftsidespan").click(function()
{     
$("#chartContainer .canvasjs-chart-canvas").css({
  "margin-left" : "18%" ,
      "float" : "left",
      "border" : "1px solid #dcdcdc",
      "margin-top" : "-500px" ,
      "width" : "799px !important ",
      "height" :"272px  !important"
});
$("#controlgraph").css({     
      "margin-left" : "18%" ,
      "float" : "left",
      "border" : "1px solid #dcdcdc",
      "margin-top" : "-623px" ,
      "width" : "60%"
     
});
});
$("#close").click(function()
{     
      $("#controlgraph").css({     
      "margin-left" : "18%" ,
      "float" : "left",
      "border" : "1px solid #dcdcdc",
      "margin-top" : "39px" ,
      "width" : "60%"
     
});
$("#chartContainer .canvasjs-chart-canvas  ").css({     
      "margin-left" : "-60%" ,
      "float" : "left",
      "border" : "1px solid #dcdcdc",
      "margin-top" : "150px" ,
      "width" : "60%",
      "height" :"385px"
});
});
});
</script>
</html>      