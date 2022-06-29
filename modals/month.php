<div id="month" class="modalShow">
	<span class="closer" onclick="HideContent('month');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="month">
		<div class="modal-header">
			<p>Vaccination list of the year</p>
		</div>
		<div class="modal-body">
			<div class="">
				<form class="form">
					<select name="year">
						<?php foreach($query as $row):?>
							<option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
						<?php endforeach;?>
					</select>
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
					<input type="submit" name="" value="view list">
				</form>
			</div>
			
		</div>
		<div></div>
	</div>
  </div>
</div>