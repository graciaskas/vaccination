<div id="profil" class="modalShow" >
	<span class="closer" onclick="HideContent('profil');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="profil">
		<div class="modal-header">
			<p>Admin infos</p>
		</div>
		<div class="modal-body" style="height: 200px;">
			<?php 
				require 'scripts/dbConnection.php';
				$data = $connection->query("select * from admin where username='".$_SESSION['admin']."'")->fetch();
			 ?>
			<div class="profil-user">
				<div class="image-user" style="margin-left: 5px;">
					<img src="<?php echo $data['image'];?>">
				</div>
				<div class="user-info">
					<p><?php echo $data['fname'];?></p>
					<p><?php echo $data['lname'];?></p>
					<p><?php echo $data['username'];?></p>
					<p><?php echo $data['rollnumber'];?></p>
				</div>
				<div class="options">
					<?php $datalogin = $connection->query("select start from logins where admin='".$data['rollnumber']."'")->fetch(); ?>
					<div class="info-login">
						<div class="head-login">
							<p>Connection time</p>
						</div>
						<div class="login-body">
							<p><?php echo $datalogin['start']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
  </div>
</div>