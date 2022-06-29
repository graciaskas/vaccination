<div id="vaccinlist" class="modalShow">
	<span class="closer" onclick="HideContent('vaccinlist');">&times;</span>
	<div class="center">
		
	<div class="modalShowBox" id="vaccinlist" style="width: 70%;" >
		<div class="modal-header">
			<p>Vaccines list</p>
		</div>
		<div class="modal-body">
			<div style="height: 300px;overflow-y: scroll;" id="listvaccin">
				<div class="header">
					<h4>vaccines list </h4>
				</div>
				<table class="table">
		 		   		<thead>
		 		   			<tr>
		 		   				<th>ID</th>
		 		   				<th>Vaccin</th>
		 		   				<th>Dose</th>
		 		   				<th>Cnumber</th>
		 		   				<th>action</th>
		 		   			</tr>
		 		   		</thead>
		 		   		<tbody>
		 		   			<?php 
		 		   			    require 'scripts/dbConnection.php';
		 		   			    $query = $connection->query("select * from vaccins");
		 		   			    foreach($query as $row){
		 		   			?>
		 		   			<tr>
		 		   				<td><?php echo $row['id'];?></td>
		 		   				<td><?php echo $row['name'];?></td>
		 		   				<td><?php echo $row['dose'];?></td>
		 		   				<td><?php echo $row['cnumber'];?></td>
		 		   				
		 		   			
		 		   				<td class="actions">
		 		   					<a  class="fa fa-edit" style="background-color: #158783;"></a>
		 		   					<a  class="fa fa-remove"></a>
		 		   				</td>
		 		   			</tr>
		 		   		<?php }?>
		 		   		</tbody>
		 		   	</table>
			</div>
			<div class="footer">
				<button id="button" onclick="printPage('listvaccin');">
					<span class="fa fa-print"></span>
				</button>
			</div>
		</div>
		<div></div>
	</div>
  </div>
</div>