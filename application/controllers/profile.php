<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("Skill_model");
        $this->load->model("Experience_model");
        $this->load->model("Education_model");

        $this->data['logged'] = $this->session->userdata('logged_in');
        $this->data['header'] = $this->load->view('header',$this->data,true);
        $this->data['footer'] = $this->load->view('footer',$this->data,true);
    }

    public function index() {
    	$this->listing();
    }

    public function listing() {
    	$this->data['profiles'] = $this->User_model->get();
        $this->load->view('profiles',$this->data);
    }

    public function get($id){
    	$this->data['profile'] = $this->User_model->get($id);
    	$this->load->view('profile',$this->data);
    }
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */