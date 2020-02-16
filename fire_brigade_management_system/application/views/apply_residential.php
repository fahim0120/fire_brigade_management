<?php echo form_open_multipart('license/apply_for_residential'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Residential License Application Form (Step 2 of 2)</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="infrastructure_id">Holding No</label>  
  <div class="col-md-4">
  <input id="infrastructure_id" name="infrastructure_id" placeholder="" class="form-control input-md" required="" type="text">
  <span class="help-block">your building's holding no without spaces which will be used as your username</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" placeholder="password" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm_password">Confirm Password</label>
  <div class="col-md-4">
    <input id="confirm_password" name="confirm_password" placeholder="password" class="form-control input-md" required="" type="password">
    
  </div>
</div>
<hr>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="owner_name">Owner Name</label>  
  <div class="col-md-4">
  <input id="owner_name" name="owner_name" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="district">District</label>
  <div class="col-md-4">
    <select id="district" name="district" class="form-control">
      <option selected disabled>select a district</option>
      <?php foreach ($district->result() as $row) {
          echo "<option value=\"".$row->DISTRICT_ID."\">$row->DISTRICT_NAME</option>";
      } ?>
    </select>
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="thana">Thana</label>
  <div class="col-md-4">
    <select id="thana" name="thana" class="form-control">
      <option selected disabled>select thana</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="road">Road</label>  
  <div class="col-md-4">
  <input id="road" name="road" placeholder="" class="form-control input-md" required="" type="text"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_of_people">No of People</label>  
  <div class="col-md-4">
  <input id="no_of_people" name="no_of_people" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_of_staircase">No of Staircase</label>  
  <div class="col-md-4">
  <input id="no_of_staircase" name="no_of_staircase" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="water_capacity">Water Supply Capacity</label>  
  <div class="col-md-4">
  <input id="water_capacity" name="water_capacity" placeholder="" class="form-control input-md" required="" type="text">
  <span class="help-block">possible water supply in liter</span>  
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="infrastructure_design">Infrastructure Design</label>
  <div class="col-md-4">
    <input id="infrastructure_design" name="infrastructure_design" class="input-file" type="file">
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

<?php echo form_close(); ?>


 
