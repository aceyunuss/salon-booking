<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Category_model extends CI_Model{
     
    public function get_category()
    {
        $query = $this->db->get('category');
        return $query;  
    }
 
    public function get_service($category_id)
    {
        $query = $this->db->get_where('service', array('service_category_id' => $category_id));
        return $query;
    }

    public function save_service($name,$address,$phone,$category_id,$service_id,$date)
    {
        $data = array(
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'category' => $category_id,
            'service' => $service_id,
            'date' => $date
        );
        $this->db->insert('booking',$data);
    }
    
    public function save_complaint($kritik,$saran)
    {
        $data = array(
            'kritik' => $kritik,
            'saran' => $saran
        );
        $this->db->insert('complaint',$data);
    }

    public function check_avail($date)
    {
        return $this->db
                    ->like("date", $date)
                    ->get("booking");
    }

    public function check_exist($name, $date)
    {
        return $this->db
                    ->where(['lower(name)' => strtolower($name)])
                    ->like("date", $date)
                    ->get("booking");
    }

    public function get_booking($id)
    {
        return $this->db->get_where("booking", ['id'=>$id]);
    }
 
}
 