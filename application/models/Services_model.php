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


}