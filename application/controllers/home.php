<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();

        $this->data['logged'] = $this->session->userdata('logged_in');
        $this->data['header'] = $this->load->view('header',$this->data,true);
        $this->data['footer'] = $this->load->view('footer',$this->data,true);
    }

    function index() {
        $this->load->view('home',$this->data);
    }
}