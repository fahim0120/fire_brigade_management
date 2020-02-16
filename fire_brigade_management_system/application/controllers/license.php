<?php if (!defined('BASEPATH')) die();

class License extends Main_Controller {


	public function index() {
		$data = array(
			'page_title' => 'Bangladesh Fire Service'
			);
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
			redirect('license/index');

		$data1 = array(
			'page_title' => 'Login'
			);
		$this->load->view('include/header', $data1);
	  	$this->load->view('login_form', $data);
	  	$this->load->view('include/footer');

	}

	function login_validate() {
		if($this->is_logged_in()) redirect('license/index');


		if($this->license_model->login_validate()){
			$data = array(
				's_username' => $this->input->post('username'),
				's_role' => 1,
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			
			echo 'session created';

			redirect('license/apply_step1');
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

		} else {
			$this->index();
		}
	}

  	//*************************************************************************************************
	//                        LOGIN PART FINISH
	//*************************************************************************************************

	//*************************************************************************************************
	//                        APPLICATION PART START
	//*************************************************************************************************
  	
  	//Application for license step 1
	public function apply_step1() {
		if($this->is_logged_in()) redirect('license/index');
		$data = array(
			'page_title' => 'License Application'
			);

	  	$this->load->view('include/header', $data);
	  	$this->load->view('apply_infrastructure_1');
	  	$this->load->view('include/footer');
	 }

	 //Application for license step 1
	public function apply_step2() {
		if($this->is_logged_in()) redirect('license/index');
		$data1 = array(
			'page_title' => 'License Application'
			);
		$data = array();
		$data['district'] = $this->license_model->get_all_district();
		
		$q = $this->license_model->get_all_district();

		$this->load->view('include/header', $data1);
	  	$str = $this->input->post('infrastructure_type');

	  	if(strcmp($str, 'residential') == 0) {
  			$this->load->view('apply_residential', $data);
	  	
	  	} else if(strcmp($str, 'commercial') == 0) {
	  		$this->load->view('apply_commercial', $data);

	  	} else {
	  		$this->load->view('apply_industrial', $data);

	  	}
	  	$this->load->view('include/footer');
	}

	public function apply_for_residential() {
		if($this->is_logged_in()) redirect('license/index');
		$this->license_model->insert_residential();

		$this->load->view('include/header');
	  	$this->load->view('sent_for_approval_view');
	  	$this->load->view('include/footer');

	}

	public function apply_for_commercial() {
		if($this->is_logged_in()) redirect('license/index');
		$this->license_model->insert_commercial();

		$this->load->view('include/header');
	  	$this->load->view('sent_for_approval_view');
	  	$this->load->view('include/footer');
	}

	public function apply_for_industrial() {
		if($this->is_logged_in()) redirect('license/index');
		$this->license_model->insert_industrial();

		$this->load->view('include/header');
	  	$this->load->view('sent_for_approval_view');
	  	$this->load->view('include/footer');
	}



	//*************************************************************************************************
	//                        APPLICATION PART FINISH
	//*************************************************************************************************

	//*************************************************************************************************
	//                        LICENSE APPROVAL PART START
	//*************************************************************************************************

	public function pending_license() {
		if($this->is_logged_in() == TRUE AND $this->session->userdata('s_role') == 2) {
			$data['q'] = $this->license_model->get_pending_license();
			$this->load->view('include/header');
		  	$this->load->view('pending_license_view', $data);
		  	$this->load->view('include/footer');
		} else {
			redirect('worker/login');
		}
	}

	function license_approval($infrastructure_id) {
		$data['infrastructure'] = $this->license_model->get_application_detail($infrastructure_id);

		$this->load->view('include/header');
	  	$this->load->view('infrastructure_page_view', $data); //edit_license
	  	$this->load->view('include/footer');
	}

	function edit_license() { //from infrastructure_page_view
		if(strcmp($this->input->post('decision'), 'reject') == 0) {
			$this->license_model->delete_application();

		} else if(strcmp($this->input->post('decision'), 'approve') == 0){
			$id = $this->input->post('infrastructure_id');
			$data['infrastructure'] = $this->license_model->get_application_detail($id);

			$this->load->view('include/header');
	   		$this->load->view('allow_license_view', $data);
	  		$this->load->view('include/footer');
		}
	}

	public function issue_license() {
		$this->license_model->approve_application();
		
	}

	public function license_status() {
		if($this->is_logged_in()) {
			$id = $this->session->userdata('s_username');
		}
		else {
			redirect('license/login');
		}
		$data['infrastructure'] = $this->license_model->get_license_detail($id);

		$this->load->view('include/header');
	   	$this->load->view('license_status_view', $data);
	  	$this->load->view('include/footer');

	}

	//*************************************************************************************************
	//                        LICENSE APPROVAL PART FINISH
	//*************************************************************************************************

	
	public function temp() {

		$this->load->view('include/header');
	  	$this->load->view('infrastructure_signup_form');
	  	$this->load->view('include/footer');		
	}

	//*************************************************************************************************
	//                        OTHER AUXILIARY FUNCTIONS
	//*************************************************************************************************
	public function get_all_thana(){
		return $this->license_model->get_all_thana();

	}


}