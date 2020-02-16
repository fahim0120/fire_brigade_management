<?php if (!defined('BASEPATH')) die();

class Fire_brigade extends Main_Controller {
  public function index() {

    $this->load->view('include/header');
    $this->load->view('signup_infrastructure');
    $this->load->view('include/footer');

  }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
