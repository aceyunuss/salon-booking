<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ServiceModel extends CI_Model {
	
	public function viewByCategory($id_kategori){
		$this->db->where('id_kategori', $id_kategori);
		$result = $this->db->get('service')->result(); // Tampilkan semua data service berdasarkan id kategori
		
		return $result; 
	}
}
