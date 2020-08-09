 <html>
<head>
<title>
Student Records
</title>
	<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
table tbody tr:hover{ background-color: #eaf4f2 !important; }
</style>
</head>
<?php include('Include/get_stud_record.php');  ?>
<body>
	<?php include'newheaderslider.php'?>
	<br><br><br>
	<div class="container col-lg-6 col-lg-offset-3  " id="studrectable" style="z-index: +1;" >
<table class="table  table-bordered table-hover table-striped" >
	<thead><tr><th>Roll Number</th><th>Name</th><th>1st sem</th><th>2st sem</th><th>3st sem</th><th>4st sem</th><th>5st sem</th><th>6st sem</th><th>7st sem</th><th>8st sem</th><th>View Record</th><th>Delete Record</th></tr></thead>
	<form method="post" action="http://localhost/GFM SYSTEM/Get_student_graph_record.php">
	<tbody>
		
<?php 		
if($result->num_rows>0)
{
	$result_new = array();
	while($row=$result->fetch_assoc())
	{  ?>

		 <tr id="<?php echo $row['roll_number']; ?>">
			<td><?php echo $row['roll_number']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['sem1']; ?></td>
			<td><?php echo $row['sem2']; ?></td>
			<td><?php echo $row['sem3']; ?></td>
			<td><?php echo $row['sem4']; ?></td>
			<td><?php echo $row['sem5']; ?></td>
			<td><?php echo $row['sem6']; ?></td>
			<td><?php echo $row['sem7']; ?></td>
			<td><?php echo $row['sem8']; ?></td>
			<td><button value="<?php echo $row['roll_number']; ?>" class="btn btn-sm btn-default" name="view_student_record">View</button>
			</td>
			<td><button value="<?php echo $row['roll_number']; ?>" class="btn btn-sm btn-default" name="delete_student_record">Delete</button>
			</td>
		</tr>
	<?php } }?>	
</tbody>
</form> 
</div>
</table>
</body>

<script type="text/javascript">

		$(document).bind("contextmenu",function(e){
return false;
	});

	$(document).ready(function(){

		$("#leftsidespan").click(function(){
            $("#studrectable").css({
            	 "margin-left" : "25%" ,
	             "float" : "left",
	             "margin-top" : "-657px"
	            
            });
            })
		
		$("#close").click(function(){
            $("#studrectable").css({
            	 "margin-left" : "25%" ,
	             "float" : "left",
	             "margin-top" : "7px"
	              
            });
            })

		});


</script>
</html>