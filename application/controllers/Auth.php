<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// method default yg selalu dijalankan
	// ketika kita akses controller ini
	public function __construct() 
	{
		// ini u/ memanggil method constructor yg 
		// ada di CI_Controller
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['title'] = 'Backyard Cafe';
		$this->load->view('templates/landingpage_header', $data);
		$this->load->view('auth/landingpage');
		$this->load->view('templates/landingpage_footer');
	}

	public function menu()
	{
		$data['title'] = 'Menu Backyard Cafe';
		$this->load->model('M_menu');
		$menus = $this->M_menu->SemuaDataMenu();
		$data['menus'] = $menus;
		$this->load->view('templates/landingpage_header', $data);
		$this->load->view('auth/menu', $data);
		$this->load->view('templates/landingpage_footer');
	}

	public function booking1()
	{
		$data['title'] = 'Booking Backyard Cafe';
		$this->load->view('templates/bookingHeader', $data);
		$this->load->view('auth/booking1', $data);
	}

	public function booking2()
	{
		$data['title'] = 'Booking Backyard Cafe';

		$date = $this->input->post('date');
        $time = $this->input->post('time');
        $quantity = $this->input->post('quantity');
		
        $this->load->helper('url');
        $this->load->model('B_booking');

		$data['id'] = $this->B_booking->insert_post($date, $time, $quantity);

		$this->load->view('templates/bookingHeader', $data);
		$this->load->view('auth/booking2', $data);
	}

	public function bookingSuccess()
	{
		$data['title'] = 'Booking Success Backyard Cafe';
		$this->load->view('templates/landingpage_header', $data);
		$this->load->view('auth/bookingSuccess', $data);
		$this->load->view('templates/landingpage_footer');
	}

	public function update_processBooking()
    {
        $id = $this->input->post('product_id');
        $FirstName = $this->input->post('FirstName');
        $LastName = $this->input->post('LastName');
        $phone = $this->input->post('mobile');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $notes = $this->input->post('notes');

        $this->load->helper('url');
        $this->load->model('B_booking');

        $this->B_booking->update_post($id, $FirstName, $LastName, $phone, $email, $address, $notes);
        redirect('auth/booking3', 'refresh');
    }

	public function booking3()
	{
		$this->load->helper('url');
        $this->load->model('B_booking');
		$booking = $this->B_booking->getById();
		$data['bookings'] = $booking;
		$this->load->view('templates/bookingHeader', $data);
		$this->load->view('auth/booking3', $data);
	}	

	public function contact()
	{
		$data['title'] = 'Contact Backyard Cafe';
		$this->load->view('templates/landingpage_header', $data);
		$this->load->view('auth/contact', $data);
		$this->load->view('templates/landingpage_footer');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Admin Login Backyard';
			$this->load->view('templates/admin_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/admin_footer');
		} else {
			// validasi sukses
			$this->private_login();
		}
	}

	private function private_login() 
	{
		// ambil email dan pass yg udh diisi di formnya
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// cari user database yg emailnya sesuai dgn yg kita tulis di form
		$admin = $this->db->get_where('admin', ['email' => $email])->row_array();
		

		if($admin) {
			// jika data admin ada

			// ada data admin aktif
			if($admin['is_active'] == 1) {
				// cek password
				// verivy u/ menyamakan pass yg ditulis di form dgn yg di hash
				// pass yg di ambil di kolom input, sama ga kyk data yg di ambil $admin diatas
				if(password_verify($password, $admin['password'])) {
					$admin = [
						'email' => $admin['email'],
						'role_id' => $admin['role_id']
					];
					// data sudah disiapkan di atas kemudian 
					// data disimpan di session
					$this->session->set_userdata($admin);
					// arahkan ke view yg kita mau
					if ($admin['role_id'] == 2) {
						redirect('admin');
					} else {
						redirect('auth/login');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
					redirect('auth/login');
				}
			
				// ini ga aktif
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email has not been activated!</div>');
				redirect('auth/login');
			}

		} else {
			// tidak ada admin dengan email itu
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth/login');
		}

	}

	public function registration() 
	{
		// rules untuk 'name' kemudian 'name' akan diberikan nama lain 'Name'
		// pertama required terus ketika mengisikan ada spasi dan supaya spasi
		// itu ga masuk ke dalam database kita kasikan 'trim'
		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		// semua rules ini ada di dokumentasi CI, rules validation -> saving sets of validation
		// rules to a config file
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
			'is_unique' => 'Email has alrady registerd'
		]);

		// min_length[8] buat panjang karakter passwordnya, matches fitur supaya first-pass sama dengan sec-pass
		$this->form_validation->set_rules('first-pass', 'Firts-pass', 'required|trim|min_length[8]|matches[sec-pass]', [
			'matches' => 'Dont match',
			'min_length' => 'Must be at least 8 characters'
		]);
		$this->form_validation->set_rules('sec-pass', 'Sec-pass', 'required|trim|matches[first-pass]');
		

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Admin Registrasi Backyard';
			$this->load->view('templates/admin_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/admin_footer');
	 	} else {
			 $data = [
				//  parameter true supaya menghindari cross size scripting
				// htmlspecialchars u/ mensanitasi input
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				// semua admin klo baru daftar sama semua gambarnya
				'image' => 'default.jpg',
				// hars untuk enkripsi data, pass_defaul u/ algoritma securiry
				'password' => password_hash($this->input->post('first-pass'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			 ];

			//  data insert ke database, tapi klo datanya udah ngurut sesuai database
			$this->db->insert('admin', $data);

			//  kirim email ke user yg sdh aktif td
			// $this->_sendEmail();

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Please login with your new account! </div>');
			redirect('auth/login');
		 }
	}

	// private function _sendEmail() {
	// 	$config = [
	// 		// smtp : simple mail transfer protocol
	// 		'protocol' => 'smtp',
	// 		'smtp_host' => 'ssl://smtp.googlemail.com',
	// 		'smtp_admin' => 'anatasiagriselda@gmail.com',
	// 		'smtp_pass' => 'Anatasia2304',
	// 		'smtp_port' => 465,
	// 		'mailtype' => 'html',
	// 		'charset' => 'utf-8',
	// 		'newline' => "\r\n"
	// 	];

	// 	$this->load->library('email', $config);

	// 	$this->email->from('anatasiagriselda@gmail.com', 'Backyard Cafe');
	// 	$this->email->to('anatasia.antas@gmail.com');
	// 	$this->email->subject('Testing');
	// 	$this->email->message('You can do it!');

	// 	if($this->email->send()){
	// 		return true;
	// 	} else {
	// 		echo $this->email->print_debugger();
	// 		die;
	// 	}
	// }

	public function logout(){
		// ngerbersihin session + ngembaliin ke login
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out! </div>');
		redirect('auth/login');
	}
}
