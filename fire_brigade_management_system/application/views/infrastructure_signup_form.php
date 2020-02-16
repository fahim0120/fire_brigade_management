<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column row text-center">
      <?php if(isset($_msg) and $e_msg == 1) {
        echo "<h2>Try Again</h2>";
      } ?>
    </div>
  </div>
</div>

<?php echo form_open('license/signup_validate'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Sign Up</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="infrastructure_id">Holding No</label>  
  <div class="col-md-4">
  <input id="infrastructure_id" name="infrastructure_id" placeholder="" class="form-control input-md" required="" type="text">
  <span class="help-block">your building's holding no without spaces</span>  
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