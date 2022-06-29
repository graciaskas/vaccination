   <?php
      session_start(); 
       if(isset($_SESSION['admin']) and isset($_SESSION['start']))
       {
       
    ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/chart.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/a/csss/font-awesome.min.css">
</head>
<body>
	 <div class="container-fluid">
	 	<!--header -->
	 	<?php require 'header.php';?>
	 	<!---end of header / -->

	 	<!--- main section -->
		 	<div class="main-section">
		 		
		 		<?php require 'menuLeft.php';?>
		 		<div class="main-section-operations">
		 			<div class="boxes-infos">
		 				<div class="box-info c_1">
		 					<div class="image">
		 						<span class="fa fa-user-o"></span>
		 					</div>
		 					<div class="ab over">
		 						<p><?php echo Count_($qu_one);?></p>
		 					</div>
		 				</div>
		 				<div class="box-info c_1">
		 					<div class="image">
		 						<span class="fa  fa-medkit"></span>
		 					</div>
		 					<div class="ab over">
		 						<p><?php echo Count_($qu_two);?></p>
		 					</div>
		 				</div>
		 				<div class="box-info c_1">
		 					<div class="image">
		 						<span class="fa  fa-spinner"></span>
		 					</div>
		 					<div class="ab over">
		 						<p><?php echo Count_($qu_tree);?></p>
		 					</div>
		 				</div>
		 				<div class="box-info c_1">
		 					<div class="image">
		 						<span class="fa  fa-group"></span>
		 					</div>
		 					<div class="ab over">
		 						<p><?php echo Count_($qu_four);?></p>
		 					</div>
		 				</div>
		 			</div>
		 			<!-- chart -->
		 		<div class="chart">
		 			
		 		</div>
		 		<!-- chart/ -->
		 		<div class="info">
		 		   <div class="header-info">
		 		   	   <h4>Recent vaccination</h4>
		 		   </div>
		 		   <div class="table-vaccinations">
		 		   	<div style="height: 250px;overflow-y: scroll;">
		 		   	<table class="table">
		 		   		<thead>
		 		   			<tr>
		 		   				<th>Number</th>
		 		   				<th>vaccin</th>
		 		   				<th>child</th>
		 		   				<th>year</th>
		 		   				<th>date</th>
		 		   				<th>dose</th>
		 		   				<th>left</th>
		 		   				<th>action</th>
		 		   			</tr>
		 		   		</thead>
		 		   		<tbody>
		 		   			<?php foreach($connection->query("select * from vaccined where year = '".$_SESSION['year']."' limit 0,15") as $row) {?>
		 		   			<tr>
		 		   				<td><?php echo $row['id'];?></td>
		 		   				<td><?php echo $row['vaccin'];?></td>
		 		   				<td><?php echo $row['child'];?></td>
		 		   				<td><?php echo $row['year'];?></td>
		 		   				<td><?php echo $row['dose'];?></td>
		 		   				<td><?php echo $row['date'];?></td>
		 		   				<td>left</td>
		 		   				<td class="actions">
		 		   					<a  class="fa fa-edit text-white" style="background-color: #158783;"></a>
		 		   					<a  class="fa fa-remove text-white"></a>
		 		   				</td>
		 		   			</tr>
		 		   		<?php }?>
		 		   			
		 		   			
		 		   			
		 		   		</tbody>
		 		   	</table>
		 		   </div>
		 		   </div>
		 		</div>
		 		</div>
		 	</div>
	 	<!-- end main section -->


	 </div>
	 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
    }else{header('location:login.php?err=notConnected');}
?>
