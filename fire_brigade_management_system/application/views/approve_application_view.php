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

<?php foreach ($q->result() as $row) {
	$id = $row->APPLICATION_ID;
}?>

<?php echo form_open('members_area/edit_application/'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Leave Application Approval</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="application_id">Application ID</label>  
  <div class="col-md-4">
  <input id="application_id" name="application_id" placeholder="" value="<?php echo $row->APPLICATION_ID ; ?>" class="form-control input-md" type="text" readonly>
    
  </div>
</div>


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="decision">Decision</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="decision-0">
      <input name="decision" id="decision-0" value="accept" checked="checked" type="radio">
      Accept
    </label> 
    <label class="radio-inline" for="decision-1">
      <input name="decision" id="decision-1" value="reject" type="radio">
      Reject
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</div>

<?php echo form_close(); ?>
