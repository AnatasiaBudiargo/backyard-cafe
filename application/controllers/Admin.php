<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['title'] = 'Admin Backyard';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/adminHeader', $data);
        $this->load->view('templates/adminSidebar', $data);
        $this->load->view('templates/adminTopbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/adminFooter');
    }
    
    public function menu() {
        $data['title'] = 'Menu Backyard';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('M_menu');

        $menus = $this->M_menu->SemuaDataMenu();
        $data['menus'] = $menus;
        // var_dump($data['menus']);
        
        $this->load->view('templates/adminHeader', $data);
        $this->load->view('templates/adminSidebar', $data);
        $this->load->view('templates/adminTopbar', $data);
        $this->load->view('admin/menu', $data);
        $this->load->view('templates/adminFooter');
    }
  
    public function testimonials() {
        $data['title'] = 'Testimonials Backyard';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('T_testimonials');

        $testis = $this->T_testimonials->SemuaData();
        $data['testis'] = $testis;

        $this->load->view('templates/adminHeader', $data);
        $this->load->view('templates/adminSidebar', $data);
        $this->load->view('templates/adminTopbar', $data);
        $this->load->view('admin/testimonialss', $data);
        $this->load->view('templates/adminFooter');
    }

    public function create() 
        {
            $this->load->helper('url');
            $this->load->view('auth/landingpage');
            $this->load->view('admin/menu');
        }

    public function create_process() 
        {
            $email = $this->input->post('email');
            $testi = $this->input->post('testi');

            $this->load->helper('url');
            $this->load->model('T_testimonials');

            $this->T_testimonials->insert_post($email, $testi);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> testimonial has been sent! </div>');
            redirect('/');

        }

    public function create_processMenu() 
        {
            // menu
            $name = $this->input->post('name');
            $picture = $this->input->post('picture');
            $description = $this->input->post('description');
            $price = $this->input->post('price');

            $this->load->helper('url');
            $this->load->model('M_menu');

            $this->M_menu->insert_post($name, $picture, $description,  $price);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New menu has been successfully added! </div>');
            redirect('admin/menu');

        }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('T_testimonials');

        $this->T_testimonials->delete_post($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> testimonial has been deleted! </div>');
        redirect('admin/testimonials');
    }

    public function deleteMenu($id)
    {
        $this->load->helper('url');
        $this->load->model('M_menu');

        $this->M_menu->delete_post($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Menu has been deleted! </div>');
        redirect('admin/menu');
    }

    public function update($id)
    {
        $this->load->helper('url');
        $data['id'] = $id;
        $this->load->view('admin/menu', $data);
    }

    public function update_process()
    {
        $id = $this->input->post('product_id');
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $picture = $this->input->post('picture');
        $price = $this->input->post('price');

        $this->load->helper('url');
        $this->load->model('M_menu');
        
        $this->M_menu->update_post($id, $name, $description, $picture, $price);
        redirect('admin/menu', 'refresh');

    }

}