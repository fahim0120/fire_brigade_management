<?php echo form_open('members_area/insert_application'); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Leave Application Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="from_date">From Date</label>  
  <div class="col-md-4">
  <input id="from_date" name="from_date" placeholder="" class="form-control input-md" type="date">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="to_date">To Date</label>  
  <div class="col-md-4">
  <input id="to_date" name="to_date" placeholder="" class="form-control input-md" type="date">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cause">Cause in Brief</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="cause" name="cause"></textarea>
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