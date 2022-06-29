<div class="header-section">
	<?php 
			require 'scripts/functions.php';
			require 'scripts/dbConnection.php';
       	$qu_one = "select * from baby where year = '".$_SESSION['year']."'";
       	$qu_two = "select * from vaccins";
       	$qu_tree = "select * from vaccined where year = '".$_SESSION['year']."'";
       	$qu_four = "select * from admin";
	?>
	 		<div class="header-section-one">
	 			<div class="section-one">
	 			   <h1><span id="span">Vaccination</span> System</h1>
	 			</div>
	 			<div style="clear: both;"></div>
	 			<div class="section-two">
	 				<ul>
	 					<li>
	 						<div class="year-section">
	 							<p>Year</p>
	 							<button class="btn" onclick="displayContent('year');"><?php echo $_SESSION['year'];?></button>
	 						</div>
	 						
	 					</li>
	 					<li>
	 						<span class="fa fa-envelope-o bell f-25" onclick="displayContent('notification-o-p-s');">
	 							<span class="absolute">
	 								<?php echo Count_("select * from message");?>
	 							</span>
	 						</span>
	 						<div class="notification" id="notification-o-p-s">
	 							<div class="notification-o" onclick="HideContent('notification-o-p-s');">
	 								<span class="fa  fa-chevron-up "></span>
	 							</div>
	 							<div class="notification-body">
	 								<?php 
	 									$count = Count_("select * from message");
	 									if($count > 1){
	 								?>
	 								<?php foreach($connection->query("select * from message") AS $row):?>
	 								<a class="notification-content" href="" id="notification-link">
	 									<h4><?php echo $row['m_send'];?></h4>
	 									<p><?php echo $row['m_cont'];?></p>
	 										
	 									<small>il ya une heure</small>
	 								</a>
	 							    <?php endforeach;?>	
	 							    <?php }else{ ?>
	 							   	<h4 style="margin-top: 50px;color: #666;">No Information !</h4>
	 							   <?php } ?>
	 							</div>
	 						</div>
	 					</li>
	 					<li>
	 						<img src="src/icons8_School_Director_48px.png" onclick="displayContent('profil');">
	 					</li>
	 					
	 					<li>
	 						<span class="fa fa-bell bell f-25" id="notShow" onclick="displayContent('notification-o-p');">
	 							<span class="absolute">
	 								<?php echo Count_("select * from notification");?>
	 							</span>
	 						</span>
	 						<div class="notification" id="notification-o-p">
	 							<div class="notification-o" onclick="HideContent('notification-o-p');">
	 								<span class="fa  fa-chevron-up "></span>
	 							</div>
	 							<div class="notification-body">
	 								<?php 
	 									$count = Count_("select * from notification");
	 									if($count > 1){
	 								?>
	 								<?php foreach($connection->query("select * from notification") AS $row):?>
	 								<a class="notification-content" href="" id="notification-link">
	 									<h4><?php echo $row['objet'];?></h4>
	 									<p><?php echo $row['description'];?></p>
	 										
	 									<small>il ya une heure</small>
	 								</a>
	 							    <?php endforeach;?>	
	 							   <?php }else{ ?>
	 							   	<h4 style="margin-top: 50px;color: #666;">No Information !</h4>
	 							   <?php } ?>
	
	 							</div>
	 						</div>
	 					</li>
	 					<li>
	 						<form class="form-search">
	 							<input type="text" name="" placeholder="search here">
	 							<button><span class="fa fa-search"></span></button>
	 						</form>
	 					</li>
	 					<li>
	 						<span class="fa fa-external-link bell f-25" id="logout" onclick="window.location.href='scripts/logout.php'">
	 							
	 						</span>
	 					</li>
	 					<li>
	 						<img src="src/icons8_Settings_24px.png" onclick="displayContent('settings')">
	 						<div class="notification" id="settings" style="margin-left: -11%;">
	 							<div class="notification-o" onclick="HideContent('settings');" style="margin-left: 150px;">
	 								<span class="fa  fa-chevron-up "></span>
	 							</div>
	 							<div class="notification-body">
	 								<div class="notification-content">
	 									<div class="head-login" style="padding: 5px;color: #fff;border-radius: 5px;">
	 										<h4 style="color: #fff;font-size: 20px;">Settings</h4>
	 									</div>
	 									 <ul>
                                    		<li>Update profil</li>
                                    	 </ul>
	 								</div>
                                   
	 							</div>
	 						</div>
	 					</li>
	 				</ul>
	 			</div>
	 			<div style="clear: both;"></div>
	 		</div>
	 		<div class="header-section-two">
	 			<ul>
	 				<li><a class="fa fa-dashboard icon1" id="icon1"></a><a href="index.php">Dashboard</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	<?php require'modals/add.php';?>
	 	<?php require'modals/delete.php';?>
	 	<?php require'modals/update.php';?>
	 	<?php require'modals/list.php';?>
	 	<?php require'modals/month.php';?>
	 	<?php require'modals/year.php';?>
	 	<?php require'modals/profil.php';?>
	 	<?php require'modals/addbaby.php';?>
	 	<?php if(isset($_GET['data']) and $_GET['data'] == 'saved'){require 'modals/succed.php';} ?>