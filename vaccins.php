   <?php 
       session_start(); 
       if(isset($_SESSION['admin']) and isset($_SESSION['start']))
       {
    ?>
    <?php 
if(isset($_POST['search'])){
require 'scripts/dbConnection.php';
	$query = $connection->query("SELECT * from vaccins where id='".$_POST['']."'");
	 foreach($query as $row){	
}

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
		<?php require 'header.php'; ?>
		<?php require 'modals/addVaccin.php'; ?>
		<?php require 'modals/vaccinlist.php'; ?>
		<!--- main section -->
		 	<div class="main-section">
		 		<?php require 'menuLeft.php';?>
		 		<div class="main-section-operations">
		 			 <div class="header-info">
		 		   	   <h4>Vaccins we provide</h4>
		 		    </div>
		 		    
		 		    <div class="result-search">
		 		    	<div style="height: 250px;overflow-y: scroll;">
		 		    	<table class="table">
		 		   		<thead>
		 		   			<tr>
		 		   				<th>ID</th>
		 		   				<th>Vaccin</th>
		 		   				<th>Dose</th>
		 		   				<th>Cnumber</th>
		 		   				<th>action</th>
		 		   			</tr>
		 		   		</thead>
		 		   		<tbody>
		 		   			<?php 
		 		   			    require 'scripts/dbConnection.php';
		 		   			    $query = $connection->query("SELECT * from vaccins");
		 		   			    foreach($query as $row){
		 		   			?>
		 		   			<tr>
		 		   				<td><?php echo $row['id'];?></td>
		 		   				<td><?php echo $row['name'];?></td>
		 		   				<td><?php echo $row['dose'];?></td>
		 		   				<td><?php echo $row['cnumber'];?></td>
		 		   				
		 		   			
		 		   				<td class="actions">
		 		   					<a  class="fa fa-edit" style="background-color: #158783;"></a>
		 		   					<a  class="fa fa-remove"></a>
		 		   				</td>
		 		   			</tr>
		 		   		<?php }?>
		 		   		</tbody>
		 		   	</table>
		 		    	</div>
		 		    </div>
		 		    <div class="bottom-buttons" style="margin-top: 10px;border:1px solid #f1f1f1;padding: 20px 5px;">
		 		    		<button id="button" onclick="displayContent('vaccinlist')">
		 		    			<span class="fa fa-print"></span> Print
		 		    		</button>
		 		    		<button id="button" onclick="displayContent('addVaccin');">
		 		    			<span class="fa fa-medkit"></span>  add vaccine
		 		    		</button>
		 		    		
		 		    		<button id="button" name="Search">
		 		    			<span class="fa fa-search"></span> Search

		 		    		</button>

		 		    	</div>
		 		</div>
		 	</div>
	</div>
	 <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
    }else{header('location:login.php?err=notConnected');}

}?>
