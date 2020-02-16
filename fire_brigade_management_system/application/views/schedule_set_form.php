<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="row text-center">Schedule</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="worker">Worker</label>
  <div class="col-md-4">
    <select id="worker" name="worker" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

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

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="shift">Shift</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="shift-0">
      <input name="shift" id="shift-0" value="1" checked="checked" type="radio">
      12am - 8am
    </label>
	</div>
  <div class="radio">
    <label for="shift-1">
      <input name="shift" id="shift-1" value="2" type="radio">
      8am - 4pm
    </label>
	</div>
  <div class="radio">
    <label for="shift-2">
      <input name="shift" id="shift-2" value="3" type="radio">
      4pm - 12am
    </label>
	</div>
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
