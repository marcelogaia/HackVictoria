<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public $data = array();
    
    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('Login_model');

        $this->data['logged'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;
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

    function create() {
        $this->data['email'] = $this->input->post('email');
        $this->data['password'] = $this->input->post('password');
        $this->load->view('create',$this->data);
    }

    function edit() {
        $this->load->model('User_model');

        if(!$this->data['logged']) rredirect("http://" . $_SERVER['HTTP_HOST'] . "/HackVictoria");


        $this->data['user'] = $this->User_model->get($_SESSION['user_id']);

        $this->load->view('edit',$this->data);
    }

    function submit($operation = "signin") {
        $this->load->helper('url');
    	if($operation == "signin") {
    		$email = $this->input->post('email');
    		$password = $this->input->post('password');

            $login = $this->Login_model->login($email,$password);

    		if(!$login) {
                rredirect("http://" . $_SERVER['HTTP_HOST'] . "/HackVictoria/sign-in");
    		} else {
                $_SESSION['user_id']   = $login->id;
                $_SESSION['name']      = $login->name;
                $_SESSION['picture']   = $login->picture;
                $_SESSION['logged_in'] = TRUE;

                rredirect("http://" . $_SERVER['HTTP_HOST'] . "/HackVictoria");
            }

    	}
    	if($operation == "signup") {
            
            // Login
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            // User
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $date_of_birth = $this->input->post('date_of_birth');
            $summary = $this->input->post('summary');
            $description = $this->input->post('description');

            // Location
            $zipcode = $this->input->post('zipcode');
            $unit = $this->input->post('unit');
            $number = $this->input->post('number');
            $street = $this->input->post('street');
            $neighborhood = $this->input->post('neighborhood');
            $city = $this->input->post('city');
            $province = $this->input->post('province');

            // Experience
            $xp = $this->input->post('xp');

            foreach($xp as $exp) {
                $title = $exp['title'];
                $company = $exp['company'];
                $start_date = $exp['start_date'];
                $end_date = $exp['end_date'];
                $description = $exp['description'];

                // add to the database
            }

            // Education
            $ed = $this->input->post('ed');

            foreach($ed as $edu){
                $title = $edu['title'];
                $company = $exp['institution'];
                $start_date = $exp['start_date'];
                $end_date = $exp['end_date'];
                $description = $exp['description'];

                // add to the database
            }

            $skill = $this->input->post('skill');

    	}
    }

    function logout(){
        $_SESSION['user_id']    = "";
        $_SESSION['name']       = "";
        $_SESSION['logged_in']  = FALSE;

        session_destroy();
        
        rredirect("http://" . $_SERVER['HTTP_HOST'] . "/HackVictoria");
    }
}
