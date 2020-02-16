<?php if(isset($login_failed) AND $login_failed == TRUE) {
  echo "<h2 style=\"color:RED;\" class=\"row text-center\">Login Failed. Try again</h2>";
}
?>

<?php echo form_open('members_area/login_validate'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center" >Login Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" placeholder="" class="form-control input-md" required="" type="password">
    
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
