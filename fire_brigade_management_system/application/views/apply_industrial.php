<?php echo form_open_multipart('license/apply_for_industrial'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Industrial License Application Form (Step 2 of 2)</legend>

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
  <label class="col-md-4 control-label" for="industry_name">Industry Name</label>  
  <div class="col-md-4">
  <input id="industry_name" name="industry_name" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product">Product Name</label>  
  <div class="col-md-4">
  <input id="product" name="product" placeholder="" class="form-control input-md" required="" type="text">
    
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
  <label class="col-md-4 control-label" for="no_of_worker">No of Worker</label>  
  <div class="col-md-4">
  <input id="no_of_worker" name="no_of_worker" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_of_emergency_exit">No of Emergency Exit</label>  
  <div class="col-md-4">
  <input id="no_of_emergency_exit" name="no_of_emergency_exit" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="no_of_extinguish_cylinder">No of Available Fire Extinguish Cylinder</label>  
  <div class="col-md-4">
  <input id="no_of_extinguish_cylinder" name="no_of_extinguish_cylinder" placeholder="" class="form-control input-md" required="" type="text"> 
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


 
