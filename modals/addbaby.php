

<div id="addbaby" class="modalShow">
	<span class="closer" onclick="HideContent('addbaby');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="modalShowBox" >
		<div class="modal-header">
			<p>Register a baby</p>
		</div>
		<div class="modal-body">
			
			<form method="post" action="scripts/save.php" class="form" enctype="multipart/form-data">
				<input type="text" name="fname" placeholder="first name">
				<input type="" name="lname" placeholder="last name">
				<input type="date" name="date" >
				<select name="sex">
					<option>male</option>
					<option>female</option>
				</select>
				<input type="text" name="bplace" placeholder="place of birh">
				<input type="" name="nation" placeholder="nationality">
				<input type="file" name="baby" placeholder="dose">
				<input type="submit" name="addbaby" value="save">
			</form>
		</div>
		<div></div>
	</div>
  </div>
</div>