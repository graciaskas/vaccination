<div id="year" class="modalShow">
	<span class="closer" onclick="HideContent('year');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="year">
		<div class="modal-header">
			<p>Change the current year</p>
		</div>
		<div class="modal-body">
			<div class="">
				<form class="form" method="GET" action="./scripts/save.php">
					<select name="year">
					<?php foreach($connection->query("select distinct year from vaccined") as $row):?>
						<option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
					<?php endforeach;?>
					</select>
					<input type="submit" name="change" value="change">
				</form>
			</div>
			
		</div>
		<div></div>
	</div>
  </div>
</div>