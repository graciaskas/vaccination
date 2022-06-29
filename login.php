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
					<p>Log into the System</p>
					
				</div>
				<div class="err"><small>Error : <?php  if(isset($_GET['err'])){echo $_GET['err'];}?></small></div>
				<div class="modal-body">
					<div class="">

						<form class="form" id="form" method="POST" action="scripts/actions.php">
							<div class="form-e">
								<span style="padding: 2px 5px;">
									<span class="fa fa-user icon" id="icon" style="padding: 3px 6px;"></span>
								</span>
								<input type="text" name="username" placeholder="Example : kasongotambwe23">
							</div>
							<div class="form-e">
								<span style="padding: 2px 5px;">
									<span class="fa fa-key icon" id="icon" ></span>
								</span>
								<input type="password" name="password">
								<input type="hidden" name="loginStarting" value="<?php echo date('h:i:s');?>">
								<input type="hidden" name="day" value="<?php echo date('d-m-Y');?>">
							</div>
							<input type="submit" name="login" value="Log In">
						</form>
					</div>
					
				</div>
				<div></div>
			</div>
		  </div>
		</div>
	</body>
	</html>	

