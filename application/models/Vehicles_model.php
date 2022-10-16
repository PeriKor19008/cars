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
        $this->db->select("car.*,km.odometer");
        $this->db->from("car as car");
        $this->db->join("km as km","car.id=km.car_id");

        $this->db->where("car.id",$id);
        $query=$this->db->get();
        return$query->result();
    }
    function add_km($data){

        $date=$data["data"]["update_date"];
        $reading=$data["data"]["odometer_reading"];
        $id=$data["id"];
        $d=array("date"=>$date,"odometer"=>$reading,"car_id"=>$id);

        $flag=$this->db->insert("km",$d);
        if($flag==1){
            echo "new odometer reading has been added";
        }
        else {
            echo "something went wrong";
        }

    }


}