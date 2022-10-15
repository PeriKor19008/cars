<?php

class vehicles_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all_vehicles(){
        $this->db->select('license_plate,manufacturer,model,color,id');
        $query=$this->db->get("car");
        return $result=$query->result();
    }

    function get_vehicle_dets($id){
        $this->db->select("*");
        $this->db->from("car");
        $this->db->where("id",$id);
        $query=$this->db->get();
        return$query->result();
    }


}