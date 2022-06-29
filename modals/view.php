<div id="view_" class="modalShow" style="display: block;">
	<span class="closer" onclick="HideContent('view_');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="month" style="width: 80%;">
		<div class="modal-header">
			<p>Vaccination list of <?php echo $_GET['month'];?> ,<?php echo $_GET['year'];?></p>
		</div>
		<div class="modal-body">
			<div style="height: 300px;overflow-y: scroll;">
				<div id="preview">
				<?php 
					$que = $connection->query("select * from vaccined where year='".$_GET['year']."' and month = '".$_GET['month']."'")->rowCount();
					if($que > 0){
						$que_ = $connection->query("select * from vaccined where year='".$_GET['year']."' and month = '".$_GET['month']."'");
				?>
				<h4>Vaccination list of <?php echo $_GET['month'];?> ,<?php echo $_GET['year'];?></h4>
		 		    	<table class="table">
		 		   		<thead>
		 		   			<tr>
		 		   				<th>Number</th>
		 		   				<th>vaccin</th>
		 		   				<th>child</th>
		 		   				<th>moth</th>
		 		   				<th>year</th>
		 		   				<th>date</th>
		 		   				<th>dose</th>
		 		   				<th>left</th>
		 		   				
		 		   			</tr>
		 		   		</thead>
		 		   		<tbody>
		 		   			<?php foreach($que_ as $row) {?>
		 		   			<tr>
		 		   				<td><?php echo $row['id'];?></td>
		 		   				<td><?php echo $row['vaccin'];?></td>
		 		   				<td><?php echo $row['child'];?></td>
		 		   				<td><?php echo $row['month'];?></td>
		 		   				<td><?php echo $row['year'];?></td>
		 		   				<td><?php echo $row['dose'];?></td>
		 		   				<td><?php echo $row['date'];?></td>
		 		   				<td>left</td>
		 		   				
		 		   			</tr>
		 		   		<?php }?>
		 		   			
		 		   		</tbody>
		 		   	</table>
		 		   <?php } else { ?>
		 		   	<h4>No vacciantion for that request !</h4>
		 		   	 <?php }  ?>
		 		</div>
		 		<div class="bottom-buttons">
		 			<button id="button"  onclick="printPage('preview')">
		 		    		<span class="fa fa-print"></span> print
		 		    </button>
		 		</div>
		 	</div>	
		</div>
		<div></div>
	</div>
  </div>
</div>