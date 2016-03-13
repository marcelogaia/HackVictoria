<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public $data = array();
    
    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');

        $this->data['logged'] = $this->session->userdata('logged_in');
        $this->data['header'] = $this->load->view('header',$this->data,true);
        $this->data['footer'] = $this->load->view('footer',$this->data,true);
    }

    function index() {
        $this->signin();
    }

    function signin() {
    	$this->load->view('signin',$this->data);
    }

    function signup() {
    	$this->load->view('signup',$this->data);
    }

    function submit($operation = "signin") {
    	if($operation == "signin") {
    		$email = $this->input->post('email');
    		$password = $this->input->post('password');

            $login = $this->Login_model->login($email,$password);

    		if(!$login) {
    			redirect('/login/', 'refresh');
    		}

            $this->session->set_userdata( 
                array(
                    'user_id'   => $login->id,
                    'name'      => $login->name,
                    'logged_in' => TRUE
                )
            );
    	}
    	if($operation == "signup") {

    	}
    }
}
