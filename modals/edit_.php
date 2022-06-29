<div id="add" class="modalShow" style="display: block;">
	<span class="closer" onclick="HideContent('add');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="modalShowBox" >
		<div class="modal-header">
			<p>Edit Vaccination no <?php echo $_GET['edit'];?></p>
		</div>
		<div class="modal-body">
			
			<form method="POST" action="" class="form">
				<select name="vaccin">
					<?php foreach($connection->query("select * from vaccins") as $row){?>
						<option value="<?php echo $row['cnumber'];?>"><?php echo $row['name'];?></option>
						
					<?php } ?>
				</select>
				<input type="" name="child" placeholder="child no">
				<input type="text" name="year" placeholder="<?php echo date('Y');?> " disabled=""class="disabled" value="<?php echo date('Y');?>">
				<input type="date" name="date">
				<select name="month">
					<option>january</option>
						<option>february</option>
						<option>march</option>
						<option>april</option>
						<option>may</option>
						<option>june</option>
						<option>jully</option>
						<option>august</option>
						<option>september</option>
						<option>october</option>
						<option>november</option>
						<option>december</option>
				</select>
				<input type="number" name="dose" placeholder="dose">
				
				<input type="submit" name="editvaccined" value="save">
			</form>
		</div>
		<div></div>
	</div>
  </div>
</div>