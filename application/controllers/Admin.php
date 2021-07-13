<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Category_model','category_model');
        $this->load->model('Admin_model','admin_model');
    }

	public function index()
	{
        $data['judul'] = 'Administrator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data_content['total_category'] = $this->admin_model->total_category();
        $data_content['total_service'] = $this->admin_model->total_service();
        $data_content['total_booking'] = $this->admin_model->total_booking();
        $data_content['total_complaint'] = $this->admin_model->total_complaint();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/index',$data_content);
        $this->load->view('templates/footer');
    }
    
    // booking
	public function booking()
	{
        $data['judul'] = 'Booking';
        $data['booking'] = $this->db->get('booking')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/booking', $data);
        $this->load->view('templates/footer');
    }

    public function editbooking()
    {
        $data['booking'] = $this->db->get('booking')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('service', 'Service', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');

        if($this->form_validation->run() == false ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/booking', $data);
            $this->load->view('templates/footer');
        } else {
        $data = [
            'name' => $this->input->post('name', true),
            'address' => $this->input->post('address', true),
            'phone' => $this->input->post('phone', true),
            'category' => $this->input->post('category', true),
            'service' => $this->input->post('service', true),
            'date' => $this->input->post('date', true)
        ];
        $this->db->where('id', $_POST['id']);
        $this->db->update('booking', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Booking edited!</div>');
        redirect('admin/booking');
        }
    }

    public function hapusbooking($id)
    {
        if($id=="") {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Failed to delete!</div>');
            redirect('admin/booking');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('booking');
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Booking was success deleted!</div>');
            redirect('admin/booking');
        }
    }

    // category
	public function category()
	{
        $data['judul'] = 'Category';
        $data['kategori'] = $this->db->get('category')->result_array();

        $this->form_validation->set_rules('category_name', 'Category name', 'required'); 

        if($this->form_validation->run() == false ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/category', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('category',['category_name' => $this->input->post('category_name')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">New category added!</div>');
            redirect('admin/category');
        }
    }

    public function editcategory()
    {
        $this->form_validation->set_rules('category_id', 'Category id', 'required');
        $this->form_validation->set_rules('category_name', 'Category name', 'required');
        if($this->form_validation->run() == false ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/category', $data);
            $this->load->view('templates/footer');
        } else {
        $data = [
            'category_name' => $this->input->post('category_name', true)
        ];
        $this->db->where('category_id', $_POST['category_id']);
        $this->db->update('category', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Category edited!</div>');
        redirect('admin/category');
        }
    }

    public function hapuscategory($category_id)
    {
        if($category_id=="") {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Failed to delete!</div>');
            redirect('admin/category');
        } else {
            $this->db->where('category_id', $category_id);
            $this->db->delete('category');
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Category was success deleted!</div>');
            redirect('admin/category');
        }
    }
    
    // service
	public function service()
	{
        $data['judul'] = 'Service';
        $data['service'] = $this->db->get('service')->result_array();
        $data['category'] = $this->db->get('category')->result_array();

        $this->form_validation->set_rules('service_name', 'Service name', 'required');
        $this->form_validation->set_rules('service_category_id', 'Service category id', 'required');

        if($this->form_validation->run() == false ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/service', $data);
            $this->load->view('templates/footer');
        } else {
        $data = [
            'service_name' => $this->input->post('service_name'),
            'service_category_id' => $this->input->post('service_category_id')
        ];
        $this->db->insert('service', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">New service added!</div>');
        redirect('admin/service');
        }

    }

    public function editservice()
    {
        $data['service'] = $this->db->get('service')->result_array();
        $data['category'] = $this->db->get('category')->result_array();

        $this->form_validation->set_rules('service_id', 'Service id', 'required');
        $this->form_validation->set_rules('service_name', 'Service name', 'required');
        $this->form_validation->set_rules('service_category_id', 'Service category id', 'required');

        if($this->form_validation->run() == false ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('admin/service', $data);
            $this->load->view('templates/footer');
        } else {
        $data = [
            'service_name' => $this->input->post('service_name', true),
            'service_category_id' => $this->input->post('service_category_id', true)
        ];
        $this->db->where('service_id', $_POST['service_id']);
        $this->db->update('service', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Service edited!</div>');
        redirect('admin/service');
        }
    }

    public function hapuservice($service_id)
    {
        if($service_id=="") {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Failed to delete!</div>');
            redirect('admin/service');
        } else {
            $this->db->where('service_id', $service_id);
            $this->db->delete('service');
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Service was success deleted!</div>');
            redirect('admin/service');
        }
    }

    public function complaint()
    {
        $data['judul'] = 'Complaint';
        $data['complaint'] = $this->db->get('complaint')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/complaint', $data);
        $this->load->view('templates/footer');
    }

    public function hapuscomplaint($id)
    {
        if($id=="") {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Failed to delete!</div>');
            redirect('admin/complaint');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('complaint');
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Complaint was success deleted!</div>');
            redirect('admin/complaint');
        }
    }

 
}
