<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column">
      <table class="table table-hover table-striped">
        <legend class="row text-center">Infrastructure Location Details</legend>
        <thead>
          <tr>
            <th>Holding No</th>
            <th>District</th>
            <th>Thana</th>
            <th>Road</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($infrastructure->result() as $row) { ?>
            <tr>
              <td><?php echo $row->INFRASTRUCTURE_ID ; ?></td>
              <td><?php echo $row->DISTRICT_NAME; ?></td>
              <td><?php echo $row->THANA; ?></td>
              <td><?php echo $row->ROAD; ?></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-10 column">
      <table class="table table-hover table-striped">
        <legend class="row text-center"><?php echo $row->INFRASTRUCTURE_TYPE; ?> Infrastructure Details</legend>
        <?php if(strcmp($row->INFRASTRUCTURE_TYPE, 'Residential') == 0) {
          echo '<thead>';
          echo '<tr>';
          echo '<th>Owner Name</th><th>No of People</th><th>No of Staircase</th><th>Water Supply Capacity(in Liter)</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          echo '<tr>';
          echo "<td>{$row->OWNER_NAME}</td><td>{$row->NO_OF_PEOPLE}</td><td>{$row->NO_OF_STAIRCASE}</td><td>{$row->WATER_CAPACITY}</td>";
          echo '</tr>'; 
          echo '</tbody>';
        } else if(strcmp($row->INFRASTRUCTURE_TYPE, 'Commercial') == 0) {
          echo '<thead>';
          echo '<tr>';
          echo '<th>Company Name</th><th>Business Type</th><th>No of Worker</th><th>No of Emergency Exit</th><th>Fire Extinguishing Cylinder</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          echo '<tr>';
          echo "<td>{$row->COMPANY_NAME}</td><td>{$row->BUSINESS_TYPE}</td><td>{$row->NO_OF_WORKER}</td><td>{$row->NO_OF_EMERGENCY_EXIT}</td><td>{$row->NO_OF_EXTINGUISH_CYLINDER}</td>";
          echo '</tr>'; 
          echo '</tbody>';
        } else if(strcmp($row->INFRASTRUCTURE_TYPE, 'Industrial') == 0) {
          echo '<thead>';
          echo '<tr>';
          echo '<th>Industry Name</th><th>Product Name</th><th>No of Worker</th><th>No of Emergency Exit</th><th>Fire Extinguishing Cylinder</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          echo '<tr>';
          echo "<td>{$row->INDUSTRY_NAME}</td><td>{$row->PRODUCT}</td><td>{$row->NO_OF_WORKER}</td><td>{$row->NO_OF_EMERGENCY_EXIT}</td><td>{$row->NO_OF_EXTINGUISH_CYLINDER}</td>";
          echo '</tr>'; 
          echo '</tbody>';
        }
        ?>
                
      </table>
    </div>
  </div>
</div>


<?php echo form_open("license/edit_license"); ?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Decision</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="infrastructure_id">Holding No</label>  
  <div class="col-md-4">
  <input id="infrastructure_id" name="infrastructure_id" placeholder="" value="<?php echo $row->INFRASTRUCTURE_ID ; ?>" class="form-control input-md" type="text" readonly>
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="decision">Decision</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="decision-0">
      <input name="decision" id="decision-0" value="approve" checked="checked" type="radio">
      Approve
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
