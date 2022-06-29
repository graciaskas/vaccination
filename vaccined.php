   <?php 
       session_start(); 
       if(isset($_SESSION['admin']) and isset($_SESSION['start']))
       {
       	require 'scripts/dbConnection.php';
       	$query = $connection->query("select distinct year from vaccined");
       	if(isset($_GET['delete_'])){
       		if($connection->query("delete from vaccined where id = '".$_GET['delete_']."'")){
       			header('location:vaccined.php?er=ok');
       		}else{
       			header('location:vaccined.php?er=ko');
       		}
       	}

      if(isset($_POST['editvaccined'])){
			if(!empty($_POST['child']))
			{
				$v_dose_ = $connection->query("SELECT vaccins.dose from vaccins,vaccined where vaccined.id = '".$_GET['edit']."' and vaccined.vaccin = vaccins.cnumber")->fetch();
		 		$v_dose = $v_dose_['dose'];
		 		if($_POST['dose'] > $v_dose){
		 			header('location:vaccined.php?er=ko');
		 		}else{
		 			$d = "update vaccined set vaccin = '".$_POST['vaccin']."',child = '".$_POST['child']."',month = '".$_POST['month']."',year = '".date('Y')."',date = '".$_POST['date']."',dose = '".$_POST['dose']."' where id = '".$_GET['edit']."'";
					if($connection->query($d))
					{
						header('location:vaccined.php?er=ok');
					}
				}
				
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
</head>
<body>
	<div class="container-fluid">
		<?php require 'header.php'; ?>
		<!--- main section -->
		 	<div class="main-section">
		 		<?php require 'menuLeft.php';?>
		 		<div class="main-section-operations">
		 			 <div class="header-info">
		 		   	   <h4>Dashboard  / vaccination</h4>
		 		    </div>
		 		     <div class="form-search-v">
		 		   	   <form >
		 		   	   	   <label>Search</label>
		 		   	   	   <input type="text" name="" placeholder="ID vaccin">
		 		   	   	   <input type="text" name="" placeholder="ID Child">
		 		   	   	   
		 		   	   	   <input type="submit" name="">
		 		   	   </form>
		 		    </div>
		 		    <div class="result-search">
		 		    	<div class="result-search-head">
		 		    		<h4>Last vaccinations</h4>
		 		    	</div>
		 		    	<div style="height: 300px;overflow-y: scroll;">
		 		    		<div id="preview_">
		 		    		<table class="table">
		 		   		<thead>
		 		   			<tr>
		 		   				<th>Number</th>
		 		   				<th>vaccin</th>
		 		   				<th>child</th>
		 		   				<th>Month</th>
		 		   				<th>year</th>
		 		   				<th>date</th>
		 		   				<th>dose</th>
		 		   				<th>left</th>
		 		   				<th>action</th>
		 		   			</tr>
		 		   		</thead>
		 		   		<tbody>
		 		   			<?php foreach($connection->query("SELECT * from vaccined ") as 
		 		   			$row) {?>
		 		   			<tr>
		 		   				<td><?php echo $row['id'];?></td>
		 		   				<td><?php echo $row['vaccin'];?></td>
		 		   				<td><?php echo $row['child'];?></td>
		 		   				<td><?php echo $row['month'];?></td>
		 		   				<td><?php echo $row['year'];?></td>
		 		   				<td><?php echo $row['date'];?></td>
		 		   				<td><?php echo $row['dose'];?></td>
		 		   				<td>
		 		   					<?php 
		 		   						$v_dose_ = $connection->query("SELECT dose from vaccins where cnumber = '".$row['vaccin']."'")->fetch();
		 		   						$v_dose = $v_dose_['dose'];
		 		   						$left = $v_dose - $row['dose'];
		 		   						echo $left;
		 		   					?>
		 		   				</td>
		 		   				<td class="actions">
		 		   					<a  href="vaccined.php?edit=<?php echo $row['id'];?>" class="fa fa-edit text-white" style="background-color: #158783;"></a>
		 		   					<a  href="vaccined.php?delete=<?php echo $row['id'];?>" class="fa fa-remove text-white"></a>
		 		   				</td>
		 		   			</tr>
		 		   		<?php }?>
		 		   			
		 		   		</tbody>
		 		   	</table>
		 		   	</div>
		 		    	</div>
		 		    	
		 		    </div>
		 		    <div class="bottom-buttons">
		 		    		<button id="button"  onclick="printPage('preview_')">
		 		    			<span class="fa fa-print"></span> print
		 		    		</button>
		 		    		<button id="button" onclick="displayContent('add');">
		 		    			<span class="fa fa-plus"></span> vaccination
		 		    		</button>
		 		    		<button id="button" onclick="displayContent('month')">monthly</button>
		 		    		<button id="button">print current list</button>

		 		    	</div>
		 		</div>
		 	</div>
	</div>
	 <script type="text/javascript" src="js/main.js"></script>
	 <?php if(isset($_GET['year']) and isset($_GET['month'])){require 'modals/view.php';} ?>
	 <?php if(isset($_GET['delete'])){require 'modals/delete_.php';} ?>
	 <?php if(isset($_GET['er']) and $_GET['er'] == "ok"){require 'modals/confirm.php';} ?>
	 <?php if(isset($_GET['er']) and $_GET['er'] == "ko"){require 'modals/error.php';} ?>
	 <?php if(isset($_GET['edit']) and !empty($_GET['edit'])){require 'modals/edit_.php';} ?>
</body>
</html>
<?php
    }else{header('location:login.php?err=notConnected');}
?>
