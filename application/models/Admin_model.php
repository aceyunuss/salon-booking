<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_model extends CI_Model{
   
    public function total_category() 
    {
        $query = $this->db->query('SELECT COUNT(*) FROM category');
        return $query->row_array()['COUNT(*)'];
    }

    public function total_service() 
    {
        $query = $this->db->query('SELECT COUNT(*) FROM service');
        return $query->row_array()['COUNT(*)'];
    }

    public function total_booking() 
    {
        $query = $this->db->query('SELECT COUNT(*) FROM booking');
        return $query->row_array()['COUNT(*)'];
    }

    public function total_complaint() 
    {
        $query = $this->db->query('SELECT COUNT(*) FROM complaint');
        return $query->row_array()['COUNT(*)'];
    }

}
 