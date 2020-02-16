<div class="container">
	<div class="row clearfix">
		<div class="col-md-10 column">
			<table class="table table-hover table-striped">
				<legend class="row text-center">Pending Licenses</legend>
				<thead>
					<tr>
						<th>Holding No</th>
						<th>Infrastructure Type</th>
						<th>District</th>
						<th>Thana</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($q->result() as $row) { ?>
						<tr>
							<td><?php echo anchor("license/license_approval/$row->INFRASTRUCTURE_ID", $row->INFRASTRUCTURE_ID) ; ?></td>
							<td><?php echo $row->INFRASTRUCTURE_TYPE; ?></td>
							<td><?php echo $row->DISTRICT_NAME; ?></td>
							<td><?php echo $row->THANA; ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>