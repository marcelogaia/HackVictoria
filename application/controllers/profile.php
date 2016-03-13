<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("User_model");
    }

    function index() {
    	$data['profiles'] = $this->User_model->get();
        $this->load->view('profiles',$data);
    }
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */