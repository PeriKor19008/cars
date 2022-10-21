<?php

class services_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all_services(){
        $this->db->select('car.license_plate,car.manufacturer,car.model,car.color,services.id,services.date,type.name');
        $this->db->from("services as services");
        $this->db->join("car as car","car.id=services.car_id");
        $this->db->join("service_type as type","services.type=type.id");
        $query=$this->db->get();

        return $result=$query->result();
    }
    function post_new_service($data){


        $dt=(object)$data;



        return $flag=$this->db->insert("services",$dt);


    }

    function get_license_plates(){
        $this->db->select('id,license_plate');
        $this->db->from('car');
        $query=$this->db->get();
        return $result=$query->result();
    }

    function get_service_details($id){


        $this->db->select('services.*,service_type.name,car.license_plate,car.manufacturer,car.model');
        $this->db->from('services');
        $this->db->join('car','services.car_id=car.id');
        $this->db->join('service_type','services.type=service_type.id');
        $this->db->where('services.id',$id);
        $query=$this->db->get();
        return $result=$query->result();



        $this->db->where('id',$id);
        $query=$this->db->get('services');
        return $query->result();
    }


    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('services');
    }


}