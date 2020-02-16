<div class="container">
	<div class="row clearfix">
		<div class="col-md-10 column">
			<table class="table table-hover table-striped">
				<legend class="row text-center">Pending Applications</legend>
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
							<td><?php echo anchor("members_area/application_approval/$row->APPLICATION_ID", $row->WORKER_NAME) ; ?></td>
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
