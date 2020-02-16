<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="rox text-center">New Fire History</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="day">Day</label>
  <div class="col-md-4">
    <select id="day" name="day" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="month">Month</label>
  <div class="col-md-4">
    <select id="month" name="month" class="form-control">
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">Decemeber</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Year</label>
  <div class="col-md-4">
    <select id="year" name="year" class="form-control">
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="hour">Around Time</label>
  <div class="col-md-4">
    <select id="hour" name="hour" class="form-control">
      <option value="1">01:00</option>
      <option value="2">02:00</option>
      <option value="3">03:00</option>
      <option value="4">04:00</option>
      <option value="5">05:00</option>
      <option value="6">06:00</option>
      <option value="7">07:00</option>
      <option value="8">08:00</option>
      <option value="9">09:00</option>
      <option value="10">10:00</option>
      <option value="11">11:00</option>
      <option value="12">12:00</option>
      <option value="13">13:00</option>
      <option value="14">14:00</option>
      <option value="15">15:00</option>
      <option value="16">16:00</option>
      <option value="17">17:00</option>
      <option value="18">18:00</option>
      <option value="19">19:00</option>
      <option value="20">20:00</option>
      <option value="21">21:00</option>
      <option value="22">22:00</option>
      <option value="23">23:00</option>
      <option value="24">24:00</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="duration">Duration</label>  
  <div class="col-md-4">
  <input id="duration" name="duration" placeholder="" class="form-control input-md" type="text">
  <span class="help-block">duration in hour</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cause">Cause of Fire</label>  
  <div class="col-md-4">
  <input id="cause" name="cause" placeholder="" class="form-control input-md" type="text">  
  </div>
</div>

<h4 class="row text-center">Address</h4>
<!--here goes the address 
  ==================================================================
  ================================================================== -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="road">Road</label>  
  <div class="col-md-4">
  <input id="road" name="road" placeholder="" class="form-control input-md" type="text">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comment">Comment</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comment" name="comment"></textarea>
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
</form>
