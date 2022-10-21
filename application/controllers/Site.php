<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model("vehicles_model");
        $this->load->model("services_model");
    }

    public function index()
    {
        $this->load->view('hf/header');
        $this->load->view('first_page.php');
        $this->load->view('hf/footer.html');
    }
    public function all_vehicles(){
        $result['cars']=$this->vehicles_model->get_all_vehicles();

        $this->load->view('hf/header.php');
        $this->load->view('vehicles/all_vehicles.php',$result);
        $this->load->view('hf/footer.html');
    }
    public function all_services(){
        $result['services']=$this->services_model->get_all_services();

        $this->load->view('services/all_services.php',$result);
    }
    public function all_kteo(){

        $this->load->view('KTEO/all_kteo.php');
    }

}
