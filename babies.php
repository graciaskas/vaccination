   <?php 
       session_start(); 
       if(isset($_SESSION['admin']) and isset($_SESSION['start']))
       {
       	 if (isset($_GET['delete'])) { 
	 		$connection = new PDO('mysql:host=localhost;dbname=vaccination','root','');
	 		if($connection->query("DELETE from baby where id = '".$_GET['delete']."'")){
	 			header('location:babies.php?er=ok');
	 		}
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
	<style type="text/css">
		#sec
		{
			
			width: 50px;
			height: 50px;
			border-radius: 50%;
			overflow: hidden;
		}
		#sec img
		{
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<?php require 'header.php'; ?>
		<!--- main section -->
		 	<div class="main-section">
		 		<?php require 'menuLeft.php';?>
		 		<div class="main-section-operations">
		 			 <div class="header-info">
		 		   	   <h4>Dashboard / Babies</h4>
		 		    </div>
		 		     <div class="form-search-v">
		 		   	   <form >
		 		   	   	   <label>Search</label>
		 		   	   	   
		 		   	   	   <input type="text" name="" placeholder="ID Child">
		 		   	   	   
		 		   	   	   <input type="submit" name="">
		 		   	   </form>
		 		    </div>
		 		    <div class="result-search">
		 		    	<div class="result-search-head">
		 		    		<h4>Lastest Registions</h4>
		 		    	</div>
		 		    	<div style="height: 310px;overflow-y: scroll;">
		 		    		<table class="table">
		 		   		<thead>
		 		   			<tr>
		 		   				<th>ID</th>
		 		   				<th>RN</th>
		 		   				<th>FNAME</th>
		 		   				<th>LNAME</th>
		 		   				<th>BDAY</th>
		 		   				<th>PLACE</th>
		 		   				<th>NATIONALITY</th>
		 		   				<th>SEX</th>
		 		   				<th>IMAGE</th>
		 		   				
		 		   				<th>action</th>
		 		   			</tr>
		 		   		</thead>
		 		   		<tbody>
		 		   		<?php foreach($connection->query("SELECT * from baby")as $row){?>
		 		   			<tr>
		 		   				<td><?php echo $row['id'];?></td>
		 		   				<td><?php echo $row['no'];?></td>
		 		   				<td><?php echo $row['fname'];?></td>
		 		   				<td><?php echo $row['lname'];?></td>
		 		   				<td><?php echo $row['bday'];?></td>
		 		   				<td><?php echo $row['bplace'];?></td>
		 		   				<td><?php echo $row['nationality']?></td>
		 		   				<td><?php echo $row['sexe']?></td>
		 		   				<td>
		 		   					<div id="sec">
		 		   						<img  src="scripts/<?php echo $row['avatar'];?>" alt="" >
		 		   					</div>
		 		   				</td>
		 		   				<td class="actions">
		 		   					<a  class="fa fa-edit text-white" style="background-color: #158783;" href="babies.php?act=edit&aid=<?php echo $row['id'];?>"></a>
		 		   					<a  class="fa fa-remove text-white" href="babies.php?act=delete&aid=<?php echo $row['id'];?>"></a>
		 		   				</td>
		 		   			</tr>
		 		   		<?php }?>
		 		   		</tbody>
		 		   	</table>
		 		    	</div>
		 		    	<div class="bottom-buttons">
		 		    		<button id="button" onclick="displayContent('list')">
		 		    			<span class="fa fa-print"></span> Print
		 		    		</button>
		 		    		<button id="button" onclick="displayContent('add');">
		 		    			<span class="fa fa-medkit"></span> vaccination
		 		    		</button>
		 		    		<button id="button" onclick="displayContent('addbaby')">
		 		    			<span class="fa fa-plus"></span> Register
		 		    		</button>
		 		    		<button id="button">
		 		    			<span class="fa fa-search"></span> Search
		 		    		</button>

		 		    	</div>
		 		    </div>
		 		</div>
		 	</div>
	</div>
	 <script type="text/javascript" src="js/main.js"></script>
	 <?php if (isset($_GET['act']) and $_GET['act'] == 'edit') { ?>
	 	<script type="text/javascript">
	 		displayContent('updatebaby');
	 	</script>
	 <?php } ?>
	 <?php if (isset($_GET['act']) and $_GET['act'] == 'delete') { ?>
	 	<script type="text/javascript">
	 		displayContent('delete');
	 	</script>
	 <?php } ?>

	 	 
	 	 	
	 	 
	
</body>
</html>
<?php
    }else{header('location:login.php?err=notConnected');}
?>
