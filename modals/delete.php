<div id="delete" class="modalShow">
	<span class="closer" onclick="HideContent('delete');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="modalShowBox" >
		<div class="modal-header">
			<p>Deletion Action</p>
		</div>
		<div class="modal-body">
			<div style="margin: auto;width: 80%;text-align: center;">
				<h4 style="margin: 10px 0px;">Want to delete ?</h4>
				<a href="babies.php?delete=<?php echo $_GET['aid'];?>" class="btn btn-danger">Yes</a>
			    <a href="babies.php" class="btn btn-success">No</a>
			</div>
			
		</div>
		<div></div>
	</div>
  </div>
</div>