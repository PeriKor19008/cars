<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends CI_Controller {

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
        $this->load->helper("form");
    }
    public function car_details($id)
    {

        $result['dets']=$this->vehicles_model->get_vehicle_dets($id);
        $result['serv']=$this->vehicles_model->get_next_services($id);


        $this->load->view('hf/header');
        $this->load->view("vehicles/vehicle_details",$result);
        $this->load->view('hf/footer.html');
    }
    public function update_odometer($id){
        $ID=array("id"=>$id);
        $this->load->view("vehicles/update_odometer",$ID);

    }
    public function update_odometer_submit($id){
        $result=$this->input->post();
        $data=array("id"=>$id,"data"=>$result);
        $this->vehicles_model->add_km($data);
    }

    public function add_vehicle(){
        $data['result']=$this->vehicles_model->get_vehicle_types();

        $this->load->view('hf/header');
        $this->load->view('vehicles/add_vehicle',$data);
        $this->load->view('hf/footer.html');
    }
    public function new_vehicle_submit(){
        $result=$this->input->post();
        $this->vehicles_model->add_vehicle($result);

    }
    public function are_u_sure_delete($id){
        $data['id']=$id;
        $this->load->view('hf/header');
        $this->load->view('vehicles/are_u_sure_delete',$data);
        $this->load->view('hf/footer.html');

    }
    public function delete($id){
        $data['id']=$id;
        $this->vehicles_model->delete($id);
        $this->load->view('hf/header');
        $this->load->view('vehicles/deleted',$data);
        $this->load->view('hf/footer.html');
    }

}
