<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
         public function __construct()
        {
                parent::__construct();
                $this->load->library('form_validation');
                $this->load->model('Category_model','category_model');
        }

        public function index()
	{
                $data['category'] = $this->category_model->get_category()->result();
                 $data['judul'] = 'Form Booking';
                $this->load->view('templates/booked_header', $data);
                $this->load->view('templates/booked_sidebar');
                $this->load->view('booking/index', $data);
                $this->load->view('templates/booked_footer');
        }

        public function get_service()
        {
                $category_id = $this->input->post('id',TRUE);
                $data = $this->category_model->get_service($category_id)->result();
                echo json_encode($data);
        }

        //save product to database
        public function save_service()
        {
                $name   = $this->input->post('name',TRUE);
                $address   = $this->input->post('address',TRUE);
                $phone   = $this->input->post('phone',TRUE);
                $category_id    = $this->input->post('category',TRUE);
                $service_id = $this->input->post('service',TRUE);
                $date = $this->input->post('date',TRUE);
                $this->category_model->save_service($name,$address,$phone,$category_id,$service_id,$date);
                $this->session->set_flashdata('msg','<div class="alert alert-success">Booking Success! <?php echo $date;?></div>');
                redirect('booking');
        }

        public function about()
        {
                $data['judul'] = 'About Us';
                $this->load->view('templates/booked_header', $data);
                $this->load->view('templates/booked_sidebar');
                $this->load->view('booking/about', $data);
                $this->load->view('templates/booked_footer');
        }

        public function complaint()
        {
                $data['judul'] = 'Complaint';
                $this->load->view('templates/booked_header', $data);
                $this->load->view('templates/booked_sidebar');
                $this->load->view('booking/complaint', $data);
                $this->load->view('templates/booked_footer');
        }

        //save complaint to database
        public function save_complaint()
        {
                $kritik  = $this->input->post('kritik',TRUE);
                $saran   = $this->input->post('saran',TRUE);
                $this->category_model->save_complaint($kritik,$saran);
                $this->session->set_flashdata('msg','<div class="alert alert-success">Complaint Success!</div>');
                redirect('booking/complaint');
        }

        

}