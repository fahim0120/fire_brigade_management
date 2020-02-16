<?php echo form_open('members_area/add_worker_inner'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Add New Worker Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="worker_name">Worker Name</label>  
  <div class="col-md-4">
  <input id="worker_name" name="worker_name" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="worker_id">Worker ID</label>  
  <div class="col-md-4">
  <input id="worker_id" name="worker_id" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="station_id">Station</label>
  <div class="col-md-4">
    <select id="station_id" name="station_id" class="form-control">
      <option selected disabled>select a station</option>
      <?php foreach ($station->result() as $row) {
          echo "<option value=\"".$row->STATION_ID."\">$row->STATION_NAME</option>";
      } ?>
    </select>
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="post">Post</label>
  <div class="col-md-4">
    <select id="post" name="post" class="form-control">
      <option value="4">Worker</option>
      <option value="2">Inspector</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="join_date">Join Date</label>  
  <div class="col-md-4">
  <input id="join_date" name="join_date" placeholder="" class="form-control input-md" type="date">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone_no">Phone No</label>  
  <div class="col-md-4">
  <input id="phone_no" name="phone_no" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" placeholder="" class="form-control input-md" type="password">
    
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