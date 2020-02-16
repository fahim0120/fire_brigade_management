<?php echo form_open('members_area/update_transfer'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Worker Transfer</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="worker_id">Worker Name</label>
  <div class="col-md-4">
    <select id="worker_id" name="worker_id" class="form-control">
      <option selected disablee>select a worker</option>
      <?php foreach ($workers->result() as $row) {
          echo "<option value=\"".$row->WORKER_ID."\">$row->WORKER_NAME</option>";
      } ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="from_station_id">From Station</label>
  <div class="col-md-4">
    <select id="from_station_id" name="from_station_id" class="form-control" readonly>
      <option value="<?php echo $station_id; ?>" ><?php echo $station_name; ?></option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="to_station_id">To Station</label>
  <div class="col-md-4">
    <select id="to_station_id" name="to_station_id" class="form-control">
      <option selected disabled>select a station</option>
      <?php foreach ($stations->result() as $row) {
          echo "<option value=\"".$row->STATION_ID."\">$row->STATION_NAME</option>";
      } ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="transfer_date">Transfer Date</label>  
  <div class="col-md-4">
  <input id="transfer_date" name="transfer_date" placeholder="" class="form-control input-md" type="date">
    
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
