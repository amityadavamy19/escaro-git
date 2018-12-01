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
	
	
	public function register()
	{
		
		$this->load->view('admin/admin_login');
		
		
		
	}
	
	
	public function logout()
	{
		
		$this->load->view('admin/admin_login');
		
		
		
	}
	
	
	
	
}
