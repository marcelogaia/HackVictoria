<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        session_start();
        $this->data['logged'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;
        $this->data['header'] = $this->load->view('header',$this->data,true);
        $this->data['footer'] = $this->load->view('footer',$this->data,true);
    }

    function index() {
        $this->load->view('home',$this->data);
    }
}