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

    public function service_details($id){
        $data['id']=$id;
        $data['results']=$this->services_model->get_service_details($id);

        $this->load->view('hf/header');
        $this->load->view("services/service_details",$data);
        $this->load->view('hf/footer.html');
        ;
    }

    public function new_service(){

        $data['result']=$this->services_model->get_license_plates();

        $this->load->view('hf/header');
        $this->load->view("services/new_service",$data);
        $this->load->view('hf/footer.html');

    }
    public function new_service_submit(){
        $result=$this->input->post();


        $data['flag']=$this->services_model->post_new_service($result);
        $this->load->view('hf/header');
        $this->load->view('services/new_service_submit',$data);
        $this->load->view('hf/footer.html');


    }

    public function are_u_sure_delete($id){
        $data['id']=$id;
        $this->load->view('hf/header');
        $this->load->view('services/are_u_sure_delete',$data);
        $this->load->view('hf/footer.html');

    }
    public function delete($id){
        $data['id']=$id;
        $this->services_model->delete($id);
        $this->load->view('hf/header');
        $this->load->view('services/deleted',$data);
        $this->load->view('hf/footer.html');
    }
}
