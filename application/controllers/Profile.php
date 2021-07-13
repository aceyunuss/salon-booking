<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
        $data['judul'] = 'Salon Diaz';
        $this->load->view('profile/index', $data);
    }
   
}
