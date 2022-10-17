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
        echo "<pre>";

        $dt=(object)$data;


        /*foreach ($data as [$name,$val]){
            echo $name;
        }*/

        $this->db->select("id");
        $this->db->from("car");
        $this->db->where("license_plate",$dt->license_plate);
        $query=$this->db->get();
        $rs=$query->result();
        $car_id=$rs[0]->id;
        unset($dt->license_plate);
        $dt->car_id=$car_id;

        $flag=$this->db->insert("services",$dt);
        if($flag==1){
            echo "new service has been added";
        }
        else {
            echo "something went wrong";
        }

    }


}