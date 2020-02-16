<?php if (!defined('BASEPATH')) die();

class Members_area extends Main_Controller {
	
	public function index() {
		$data = array();
		$this->load->view('include/header', $data);
	  	$this->load->view('license_homepage');
	  	$this->load->view('include/footer');
	}

	//*************************************************************************************************
	//                        LOGIN PART START
	//*************************************************************************************************

	function is_logged_in(){
		$is_logged_in =  $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true) {
			return FALSE;
		} else {
			return TRUE;
		}
	}	


	public function login($data = NULL) {

		if($this->is_logged_in() == TRUE)
			redirect('members_area/index');

		$data1 = array(
			'page_title' => 'Login'
			);
		$this->load->view('include/header', $data1);
	  	$this->load->view('members_login_form', $data);
	  	$this->load->view('include/footer');

	}
	
	function login_validate() {
		if($this->is_logged_in()) redirect('members_area/index');
		if($this->license_model->login_validate_worker()){
			$data = array(
				's_username' => $this->input->post('username'),
				's_role' => $this->license_model->get_worker_post($this->input->post('username')),
				'is_logged_in' => TRUE
			);
			
			$this->session->set_userdata($data);

			redirect('members_area/index');
		} else {
			$data = array(
				'login_failed' => TRUE
			);
			$this->login($data);
		}
	}

	

	public function logout() {
		if($this->is_logged_in()){

			$data = array(
				's_username' => '',
				's_role' => '',
				'is_logged_in' => FALSE
				);

			$this->session->unset_userdata($data);
		}
			$this->index();
	}

  	//*************************************************************************************************
	//                        LOGIN PART FINISH
	//*************************************************************************************************
	

	
	//*************************************************************************************************
	//                        NEW WORKER PART START
	//*************************************************************************************************

	public function add_new_worker() {
		if($this->is_logged_in() != TRUE) {
			redirect('members_area/login');
		} else if( $this->session->userdata('s_role') != 3) {
			redirect('members_area/index');
		} else {
			$data = array();
			$data['station'] = $this->license_model->get_all_station();
			
			$this->load->view('include/header');
		  	$this->load->view('add_new_worker_form', $data);
		  	$this->load->view('include/footer');
	  	}
	}

	public function add_worker_inner() {
		$this->license_model->add_new_worker();

		$data = array(
			'page_title' => "Worker Added",
			'title' => "Worker Added",
			'notice' => "Thank you. Your new worker has been added to the database."
			);

		$this->load->view('include/header', $data);
	  	$this->load->view('display_note', $data);
	  	$this->load->view('include/footer');
	}

	public function workers_of_station($station_id) {
		$data['workers'] = $this->license_model->get_workers_of_station($station_id);
		$data['station_name'] = $this->license_model->get_station_name($station_id);

		$this->load->view('include/header');
	  	$this->load->view('workers_of_station_view', $data);
	  	$this->load->view('include/footer');
	}


	//*************************************************************************************************
	//                        NEW WORKER PART FINISH
	//*************************************************************************************************

	//*************************************************************************************************
	//                        APPLICATION PART START
	//*************************************************************************************************

	public function apply_for_leave() {

		$this->load->view('include/header');
	  	$this->load->view('leave_application_form');
	  	$this->load->view('include/footer');
	}

	public function insert_application() {
		$this->license_model->insert_application();

		$data = array(
			'page_title' => "Application Submitted",
			'title' => "Application Submitted",
			'notice' => "Thank you. Your application has been sent to Station Officer."
			);

		$this->load->view('include/header', $data);
	  	$this->load->view('display_note', $data);
	  	$this->load->view('include/footer');


	}

	public function pending_application() {
		if($this->is_logged_in() != TRUE) {
			redirect('members_area/login');
		} else if( $this->session->userdata('s_role') != 3) {
			redirect('members_area/index');
		} else {
			$data['q'] = $this->license_model->get_pending_application();

			$this->load->view('include/header');
		  	$this->load->view('pending_application_view', $data);
		  	$this->load->view('include/footer');
		}

	}

	public function application_approval($id) {
		$data['q'] = $this->license_model->get_specific_application($id);

		$this->load->view('include/header');
	  	$this->load->view('approve_application_view', $data);
	  	$this->load->view('include/footer');
	}

	public function edit_application() {
		$this->license_model->edit_application();

		redirect('members_area/pending_application');

	}

	public function application_status() {
		if($this->is_logged_in()) {
			$id = $this->session->userdata('s_username');
			$data['q'] = $this->license_model->get_application_status($id);

			$this->load->view('include/header');
		   	$this->load->view('application_status_view', $data);
		  	$this->load->view('include/footer');
		}
		else {
			redirect('license/login');
		}
		

	}

	//*************************************************************************************************
	//                        APPLICATION PART FINISH
	//*************************************************************************************************


	//*************************************************************************************************
	//                        TRANSFER PART FINISH
	//*************************************************************************************************

	public function transfer_worker() {
		if($this->is_logged_in() != TRUE) {
			redirect('members_area/login');
		} else if( $this->session->userdata('s_role') != 3) {
			redirect('members_area/index');
		} else {

			$username = $this->session->userdata('s_username');
			$station_id = $this->license_model->get_worker_station($username);

			$data = array();
			$data['stations'] = $this->license_model->get_all_station();
			$station_name = $this->license_model->get_worker_station_name($username);
			$data['station_name'] = $station_name;
			$data['station_id'] = $station_id;
			$data['workers'] = $this->license_model->get_workers_from_station($station_id);

			$this->load->view('include/header');
		  	$this->load->view('transfer_worker_form', $data);
		  	$this->load->view('include/footer');
		}
	}

	public function update_transfer() {
		$this->license_model->update_transfer();

		$this->transfer_worker();

	}

	//*************************************************************************************************
	//                        TRANSFER PART FINISH
	//*************************************************************************************************


	//*************************************************************************************************
	//                        SCHEDULE PART START
	//*************************************************************************************************





	//*************************************************************************************************
	//                        SCHEDULE PART FINISH
	//*************************************************************************************************














	public function temp() {
		$this->load->view('include/header');
	  	$this->load->view('temp');
	  	$this->load->view('include/footer');

	  	//$this->license_model->get_station_name('siddikbazar');
	  	
	  	// echo $this->session->userdata('s_username');
	  	// $q = $this->session->userdata('s_role');
	  	// echo $q;
	  	// echo $this->session->userdata('is_logged_in');

	}

}