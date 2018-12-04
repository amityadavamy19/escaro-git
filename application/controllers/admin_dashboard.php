<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
		
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->helper('string'); 
		 
	 } 
	 
	 
	 
	 
	public function index()
	{
		
		
		
		(get_cookie('email')!='' || $this->session->userdata('username')!='' ) ? $this->load->view('admin/admin_home') : $this->load->view('admin/admin_login');
		//($this->session->userdata('email')!='') ? $this->load->view('admin/admin_home') : $this->load->view('admin/admin_login');
		
		
	}
	
	
	public function admin()
	{
		
		$this->load->view('admin/admin_home');
		
		
		
	}
	
	public function login()
	{
		 
		 $this->form_validation->set_rules('login_email', 'Email','required|callback_username_check');
		 $this->form_validation->set_rules('login_password', 'Password', 'callback_password_check');
		

         if ($this->form_validation->run() == FALSE)
         {
             $this->load->view('admin/admin_login');
         }
         else
         {
         
		
			 $newdata = array(
				'username'  => $_POST['login_email'],
				'logged_in' => TRUE
			 );

			 $this->session->set_userdata($newdata);
			
			 $cookie = array(
	 
			   'email'  => 'email',
			   'value'  => $_POST['login_email'],
			   'expire' => '3600',
			   'domain' => 'your-domain-name',
			   'path'   => '/',
			   'secure' => TRUE
	 
            );
		
		 //$this->input->set_cookie($cookie);
		 
		 $this->load->model('admin_model');
		 $data['userdata'] = $this->admin_model->getUser($_POST['login_email']);
         $this->load->view('admin/admin_home',$data);
         
	
		 }
		
	}
	
	public function register()
	{
		
		$this->form_validation->set_rules('fname', 'First Name','trim|required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name','trim|required|alpha');
		$this->form_validation->set_rules('phone', 'Phone','trim|required|numeric');
		$this->form_validation->set_rules('signup_email', 'Email','callback_admin_check');
		$this->form_validation->set_rules('signup_password', 'Password', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('signup_rpassword', 'Password', 'trim|required|matches[signup_password]');
		
		
		
		if ($this->form_validation->run() == FALSE)
         {
             $this->load->view('admin/admin_login');
         }
         else
         {
			
			
			 $token = random_string('alnum', 16);
			 $this->load->model('admin_model');
			 $data = array('first_name'=> htmlspecialchars($this->input->post('fname', TRUE)), 'last_name'=>htmlspecialchars($this->input->post('lname', TRUE)), 'email'=>htmlspecialchars($this->input->post('signup_email', TRUE)), 'password'=>md5($this->input->post('signup_password', TRUE)), 'phone'=>htmlspecialchars($this->input->post('phone', TRUE)), 'access_token'=>$token);
			 
			 $this->admin_model->addAdmin($data);
			 $this->load->view('admin/admin_signupsuccess');
		 }
		
		
		
	}
	
	function username_check($str)
	{
		$this->load->model('admin_model');

		if ($this->admin_model->checkUsername($str))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('username_check', 'The  %s  do not exist');            
			return false;
		}
	}
	
	function admin_check($user)
	{
		$this->load->model('admin_model');

		if ($this->admin_model->checkAdmin($user))
		{    
	
	        $this->form_validation->set_message('username_check', 'The  %s  already exist');            
			return false;
			
		}
		else
		{
			return true;
		}
	}
	
	
	
	
	function password_check($str)
	{
		$this->load->model('admin_model');

		if ($this->admin_model->checkPasswod($str))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('password_check', 'The Entered %s  is wrong');            
			return false;
		}
	}
	
	
	
	
	
	public function logout()
	{
		
		$this->load->view('admin/admin_login');
		
		
		
	}
	
	
	
	
}
