<div id="addVaccin" class="modalShow">
	<span class="closer" onclick="HideContent('addVaccin');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="modalShowBox" >
		<div class="modal-header">
			<p>Add Vaccin</p>
		</div>
		<div class="modal-body">
			<form method="post" action="scripts/save.php" class="form">
				
				<input type="text" name="vaccin" placeholder="vaccin name">
				
				<input type="number" name="dose" placeholder="required dose">
				<input type="submit" name="save" value="save">
			</form>
		</div>
		<div></div>
	</div>
  </div>
</div>