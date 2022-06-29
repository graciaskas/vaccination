<div id="add" class="modalShow">
	<span class="closer" onclick="HideContent('add');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="modalShowBox" >
		<div class="modal-header">
			<p>New Vaccination</p>
		</div>
		<div class="modal-body">
			<?php require'./scripts/dbConnection.php';?>
			<form method="post" action="scripts/save.php" class="form">
				<select name="vaccin">
					<?php foreach($connection->query("select * from vaccins") as $row){?>
						<option value="<?php echo $row['cnumber'];?>"><?php echo $row['name'];?></option>
						
					<?php } ?>
				</select>
				<input type="number" name="child" placeholder="child no">
				<input type="number" name="year" placeholder="Enter the year" >
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
				<input type="" name="dose" placeholder="dose">
				
				<input type="submit" name="addVaccined" value="save">
			</form>
		</div>
		<div></div>
	</div>
  </div>
</div>