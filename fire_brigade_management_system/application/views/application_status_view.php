<?php foreach ($q->result() as $row) {
	$id = $row->STATUS;
}?>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column row text-center">
      <?php 
      if($id == 0) {
					echo "<h2 style=\"color:RED;\">Your application has been REJECTED.</h2>";
			    } else if ($id == 1) {
			    	echo "<h2 style=\"color:GREEN;\">Your application has been ACCEPTED.</h2>";
			    } else {
			    	echo "<h2 style=\"color:BLUE;\">Your application is PENDING.</h2>";
			    }
				?>
      
    </div>
  </div>
</div>

				
				<hr>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-10 column">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>Worker Name</th>
						<th>Cause</th>
						<th>Start Date</th>
						<th>Finish Date</th>
						<th># days</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($q->result() as $row) { ?>
						<tr>
							<td><?php echo $row->WORKER_NAME ; ?></td>
							<td><?php echo $row->CAUSE; ?></td>
							<td><?php echo $row->FROM_DATE; ?></td>
							<td><?php echo $row->TO_DATE; ?></td>
							<td><?php echo $row->DAY_COUNT; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
