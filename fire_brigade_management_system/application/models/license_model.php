<?php
class License_model extends CI_model{

	public function get_all_district() {
		
		$q  = $this->db->get('DISTRICT');
		return $q;
	}

	public function get_all_thana(){

		//echo $this->input->get('district');
		$d = $this->input->get('district');

		$str = "select thana_name from thana, district where district.district_id = thana.district_id and district.district_name = '{$d}' ORDER BY THANA.THANA_NAME";
		
		$q = $this->db->query($str);
		

		
		$options = "";

		foreach($q->result() as $row){
			$options .= "<option>".$row->THANA_NAME."</option>";
		}

		echo $options;
	}


	//*************************************************************************************************
	//                        APPLICATION PART START
	//*************************************************************************************************

	public function insert_infrastructure($type){
		$data = array(
				'PASSWORD' => md5($this->input->post('password')),
               'INFRASTRUCTURE_ID' => $this->input->post('infrastructure_id'),
               'INFRASTRUCTURE_TYPE' => $type,
               'DISTRICT_ID' => $this->input->post('district'),
               'THANA' => $this->input->post('thana'),
               'ROAD' => $this->input->post('road')
            );

		$this->db->insert('INFRASTRUCTURE', $data);
	}

	public function insert_residential() {

		$this->insert_infrastructure('Residential');

		$data1 = array(
               'OWNER_NAME' => $this->input->post('owner_name'),
               'NO_OF_PEOPLE' => $this->input->post('no_of_people'),
               'NO_OF_STAIRCASE' => $this->input->post('no_of_staircase'),
               'WATER_CAPACITY' => $this->input->post('water_capacity'),
               'INFRASTRUCTURE_ID' => $this->input->post('infrastructure_id')
            );
		$this->db->insert('RESIDENTIAL', $data1);

	}

	public function insert_commercial() {
		$this->insert_infrastructure('Commercial');

		$data1 = array(
               'COMPANY_NAME' => $this->input->post('company_name'),
               'BUSINESS_TYPE' => $this->input->post('business_type'),
               'NO_OF_WORKER' => $this->input->post('no_of_worker'),
               'NO_OF_EMERGENCY_EXIT' => $this->input->post('no_of_emergency_exit'),
               'NO_OF_EXTINGUISH_CYLINDER' => $this->input->post('no_of_extinguish_cylinder'),
               'INFRASTRUCTURE_ID' => $this->input->post('infrastructure_id')
            );
		$this->db->insert('COMMERCIAL', $data1);

	}

	public function insert_industrial() {
		$this->insert_infrastructure('Industrial');
		
		$data1 = array(
               'INDUSTRY_NAME' => $this->input->post('industry_name'),
               'PRODUCT' => $this->input->post('product'),
               'NO_OF_WORKER' => $this->input->post('no_of_worker'),
               'NO_OF_EMERGENCY_EXIT' => $this->input->post('no_of_emergency_exit'),
               'NO_OF_EXTINGUISH_CYLINDER' => $this->input->post('no_of_extinguish_cylinder'),
               'INFRASTRUCTURE_ID' => $this->input->post('infrastructure_id')
            );
		$this->db->insert('INDUSTRIAL', $data1);

	}

	//*************************************************************************************************
	//                        APPLICATION PART FINISH
	//*************************************************************************************************


	//*************************************************************************************************
	//                        LICENSE ISSUE PART START
	//*************************************************************************************************
	public function get_pending_license() {
		$str = 'select * from infrastructure natural join  district where license_status = -1';
		return $this->db->query($str);

	}

	public function get_application_detail($id) {
		$str = "select infrastructure_type from infrastructure where infrastructure_id = '{$id}'";
		$q = $this->db->query($str);

		if($q->num_rows == 1 ) {
			foreach ($q->result() as $row) {
				$type = $row->INFRASTRUCTURE_TYPE;
			}
		}

		
		$str = "select * from infrastructure, {$type}, district
		where infrastructure.infrastructure_id = '{$id}' and infrastructure.license_status = -1 
		and infrastructure.district_id = district.district_id and infrastructure.infrastructure_id = {$type}.infrastructure_id";
		return $this->db->query($str);
		//echo $this->db->last_query();
	}

	public function approve_application() {
		$id = $this->input->post('infrastructure_id');
		$date = $this->match($this->input->post('expiry_date'));
		
		$str = "insert into license(infrastructure_id, expiry_date) values('{$id}', '{$date}')";

		$this->db->query($str);
		//echo $this->db->last_query();

		$str = "update infrastructure set license_status = 1 where infrastructure_id = '{$id}'";
		$this->db->query($str);

	}

	public function delete_application() {
		$id = $this->input->post('infrastructure_id');
		$str = "update infrastructure set license_status = 0 where infrastructure_id = '{$id}'";
		$this->db->query($str);
	}

	//*************************************************************************************************
	//                        LICENSE ISSUE PART FINISH
	//*************************************************************************************************

	public function get_license_detail($id) {

		$str = "select infrastructure_type from infrastructure where infrastructure_id = '{$id}'";
		$q = $this->db->query($str);

		if($q->num_rows == 1 ) {
			foreach ($q->result() as $row) {
				$type = $row->INFRASTRUCTURE_TYPE;
			}
		}

		
		$str = "select * from infrastructure, {$type}, district
		where infrastructure.infrastructure_id = '{$id}' and infrastructure.district_id = district.district_id 
		and infrastructure.infrastructure_id = {$type}.infrastructure_id";
		return $this->db->query($str);
	}


	public function login_validate() {

		$username = $this->input->post('username');
		$pass = md5($this->input->post('password'));


		$str = "select * from infrastructure where infrastructure_id = '{$username}' and password = '{$pass}'";
		$q = $this->db->query($str);
		// echo $this->db->last_query();

		if($q->num_rows == 1 ) {
			return TRUE;
		}
	}

	//*************************************************************************************************
	//                        WORKER PART START
	//*************************************************************************************************



	public function add_new_worker() {

		$data = array(
				'WORKER_ID' => $this->input->post('worker_id'),
               'WORKER_NAME' => $this->input->post('worker_name'),
               'POST' => intval($this->input->post('post')),
               'STATION_ID' => $this->input->post('station_id'),
               'JOIN_DATE' => $this->match($this->input->post('join_date')),
               'PHONE_NO' => $this->input->post('phone_no'),
               'PASSWORD' => md5($this->input->post('password'))
            );

		$q = $this->db->insert('WORKER', $data);
		return $q;
	}

	public function get_all_station() {
		$this->db->order_by('STATION_NAME');
		$q  = $this->db->get('STATION');
		return $q;
	}

	public function get_workers_of_station($station_id) {
		$this->db->where('STATION_ID', $station_id);
		$q = $this->db->get('WORKER');
//echo $this->db->last_query();
		return $q;
	}




	//*************************************************************************************************
	//                        WORKER PART FINISH
	//*************************************************************************************************

	//*************************************************************************************************
	//                        LEAVE APPLICAITON PART START
	//*************************************************************************************************

	public function insert_application() {
		// echo $this->session->userdata('s_username');

		$username = $this->session->userdata('s_username');

		$data = array(
			'APPLICANT_ID' => $username,
			'STATION_ID' => $this->get_worker_station($username),
			'FROM_DATE' => $this->match($this->input->post('from_date')),
			'TO_DATE' => $this->match($this->input->post('to_date')),
			'CAUSE' => $this->input->post('cause')
		);

		$this->db->insert('APPLICATION', $data);

	}


	public function get_pending_application() {
		$username = $this->session->userdata('s_username');
		$station = $this->get_worker_station($username);

		$str = "select wor.worker_name, app.from_date, app.to_date, app.cause, app.to_date - app.from_date as day_count, app.application_id
			from APPLICATION app, WORKER wor
			where app.STATION_ID = '{$station}' and app.STATUS = -1 and app.APPLICANT_ID = wor.WORKER_ID";

		$q = $this->db->query($str);

		return $q;
	}

	public function get_specific_application($id) {
		
		$str = "select wor.worker_name, app.from_date, app.to_date, app.cause, app.to_date - app.from_date as day_count, app.application_id
		from APPLICATION app, WORKER wor
		where app.application_id = {$id} and app.applicant_id = wor.worker_id";

		$q = $this->db->query($str);

		return $q;

	}

	public function edit_application() {
		$id = $this->input->post('application_id');
		if(strcmp($this->input->post('decision'), 'accept') == 0) {
			$str = "update APPLICATION set status = 1 where application_id = {$id}";
		} else {
			$str = "update APPLICATION set status = 0 where application_id = {$id}";
		}

		$this->db->query($str);
		//echo $this->db->last_query();

	}

	public function get_application_status($id) {
		//echo 'ok';
		$str = "select wor.worker_name, app.from_date, app.to_date, app.cause, app.to_date - app.from_date as day_count, app.status
		from APPLICATION app, WORKER wor
		where wor.worker_id = '{$id}' and app.applicant_id = '{$id}'";

		$q = $this->db->query($str);
		// echo $this->db->last_query();

		return $q;
	}


	//*************************************************************************************************
	//                        LEAVE APPLICATION PART FINISH
	//*************************************************************************************************


	//*************************************************************************************************
	//                       TRANSFER PART START
	//*************************************************************************************************

	public function update_transfer() {

		$new_station = $this->input->post('to_station_id');
		$username = $this->input->post('worker_id');
		$data = array(
			'WORKER_ID' => $username,
			'TRANSFER_DATE' => $this->match($this->input->post('transfer_date')),
			'FROM_STATION_ID' => $this->input->post('from_station_id'),
			'TO_STATION_ID' => $new_station
		);

		$this->db->insert('TRANSFER', $data);

		$str = "update WORKER set STATION_ID = '{$new_station}' where WORKER_ID = '{$username}'";
		$this->db->query($str);
		// echo $this->db->last_query();

	}

	//*************************************************************************************************
	//                        TRANSFER PART FINISH
	//*************************************************************************************************


	public function temp_model() {

		$data = array(
			'NAME' => 'aman'
			);

		$this->db->insert('TEST', $data);
	}

	function match($date) {
		$d = substr($date, 8, 2) . '-'  ;

		$mon=substr($date, 5, 2);
		if($mon=='01')
		  $mon='JAN';
		else if($mon=='02')
		  $mon='FEB';
		else if($mon=='03')
		  $mon='MAR';
		else if($mon=='04')
		  $mon='APR';
		else if($mon=='05')
		  $mon='MAY';
		else if($mon=='06')
		  $mon='JUN';
		else if($mon=='07')
		  $mon='JUL';
		else if($mon=='08')
		  $mon='AUG';
		else if($mon=='09')
		  $mon='SEP';
		else if($mon=='10')
		  $mon='OCT';
		else if($mon=='11')
		  $mon='NOV';
		else if($mon=='12')
		  $mon='DEC';
		  
		$d =$d.$mon.'-'.substr($date, 0, 4);
		return $d;
		  
	}

	public function get_worker_post($username) {
		$str = "select POST from WORKER where WORKER_ID = '{$username}'";
		$q = $this->db->query($str);
		foreach ($q->result() as $row) {
			return $row->POST;
		}
	}

	public function get_worker_station($username) {
		$str = "select STATION_ID from WORKER where WORKER_ID = '{$username}'";
		$q = $this->db->query($str);
		foreach ($q->result() as $row) {
			return $row->STATION_ID;
		}
	}

	public function get_worker_station_name($username) {
		$str = "select STATION_NAME
			from STATION, WORKER
			where WORKER_ID = '{$username}' and WORKER.STATION_ID = STATION.STATION_ID";
		$q = $this->db->query($str);
		foreach ($q->result() as $row) {
			return $row->STATION_NAME;
		}
	}

	public function get_workers_from_station($station) {

		$str = "select worker_id, worker_name
			from worker
			where station_id = '{$station}'";

		$q = $this->db->query($str);
		/*foreach ($q->result() as $row) {
			echo $row->WORKER_ID.' '.$row->WORKER_NAME.'<br>';
		}*/

		return $q;

	}

	public function get_station_name($station_id) {
		$this->db->select('STATION_NAME');
		$this->db->where('STATION_ID', $station_id);
		$q = $this->db->get('STATION');
		
		// echo $this->db->last_query();
		foreach ($q->result() as $row) {
			return $row->STATION_NAME;
		}
	}
	
	public function login_validate_worker() {

		$username = $this->input->post('username');
		$pass = md5($this->input->post('password'));


		$str = "select * from WORKER where WORKER_id = '{$username}' and password = '{$pass}'";
		$q = $this->db->query($str);
		//echo $this->db->last_query();

		if($q->num_rows == 1 ) {
			return TRUE;
		}
	}

}