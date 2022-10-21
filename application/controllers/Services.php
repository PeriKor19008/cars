<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper("form");
        $this->load->model("services_model");
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function new_service(){
        $this->load->view("services/new_service");
    }
    public function new_service_submit(){
        $result=$this->input->post();

        $this->services_model->post_new_service($result);

    }
}
