
<div class="container">
	<div class="row clearfix">
		<div class="col-md-10 column">
			<table class="table table-hover table-striped">
				<legend class="row text-center"><?php echo $station_name; ?></legend>
				<thead>
					<tr>
						<th>Worker Name</th>
						<th>Worker ID</th>
						<th>Date of Joining</th>
						<th>Phone No</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($workers->result() as $row) { ?>
						<tr>
							<td><?php echo $row->WORKER_NAME; ?></td>
							<td><?php echo $row->WORKER_ID; ?></td>
							<td><?php echo $row->JOIN_DATE; ?></td>
							<td><?php echo $row->PHONE_NO; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
