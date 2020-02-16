<?php echo form_open('license/apply_step2'); ?>

<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">License Application (Part 1 of 2)</legend>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="infrastructure_type">Type of Infrastructure</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="infrastructure_type-0">
      <input name="infrastructure_type" id="infrastructure_type-0" value="residential" checked="checked" type="radio">
      Residential
    </label>
  </div>
  <div class="radio">
    <label for="infrastructure_type-1">
      <input name="infrastructure_type" id="infrastructure_type-1" value="commercial" type="radio">
      Commercial
    </label>
  </div>
  <div class="radio">
    <label for="infrastructure_type-2">
      <input name="infrastructure_type" id="infrastructure_type-2" value="industrial" type="radio">
      Industrial
    </label>
  </div>
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