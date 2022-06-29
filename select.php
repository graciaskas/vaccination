 <?php
      session_start(); 
       if(isset($_SESSION['admin']) and isset($_SESSION['start']))
       {
       		require 'scripts/dbConnection.php';
       		require 'scripts/functions.php';
       		if(isset($_POST['select'])){
       			$_SESSION['year'] = $_POST['year'];
       			header('location:index.php?admin='.$_SESSION['admin']);
       		}
    ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/chart.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/a/csss/font-awesome.min.css">
	</head>
	<body>
			
		<div id="month" class="modalShow" style="display: block;">
			
			<div class="center">
				
			<div class="modalShowBox" id="month">
				<div class="modal-header">
					<p>Select The Year </p>
					
				</div>
				
				<div class="modal-body">
					<div class="">

						<form class="form" id="form" method="POST" action="">
							<div class="form-e">
								<select name="year">
								<?php if(Count_("select distinct year from vaccined") > 0){?>
									<?php foreach($connection->query("SELECT distinct year from vaccined") as $row):?>
										<option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
									<?php endforeach;?>
								<?php }else{ ?>
					<option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
								<?php }?>
								</select>
							</div>
							
							<input type="submit" name="select" value="Log In">
						</form>
					</div>
					
				</div>
				<div></div>
			</div>
		  </div>
		</div>
	</body>
	</html>	
	<?php
    }else{header('location:login.php?err=notConnected');}
?>

