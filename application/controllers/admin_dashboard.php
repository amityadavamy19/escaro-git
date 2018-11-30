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
		 
		 
		 
	 } 
	 
	 
	 
	 
	public function index()
	{
		
		
		
		(get_cookie('email')!='') ? $this->load->view('admin/admin_home') : $this->load->view('admin/admin_login');
		//($this->session->userdata('email')!='') ? $this->load->view('admin/admin_home') : $this->load->view('admin/admin_login');
		
		
	}
	
	
	public function admin()
	{
		
		$this->load->view('admin/admin_home');
		
		
		
	}
	
	public function login()
	{
		
		
		
		$this->load->view('admin/admin_login');
		$newdata = array(
        'username'  => 'johndoe',
        'id'  => '1',
        'first_name'=> 'johndoe',
        'email'     => 'johndoe@some-site.com',
        'logged_in' => TRUE
        );

		$this->session->set_userdata($newdata);
		
		$cookie = array(
 
		   'email'   => 'CW Cookie',
		 
		   'value'  => 'This is Demonstration of how to set cookie in CI',
		 
		   'expire' => '3600',
		 
		   'domain' => 'your-domain-name',
		 
		   'path'   => '/',
		 
		   'secure' => TRUE
 
        );
		
		$this->input->set_cookie($cookie);
		
        $this->load->view('admin/admin_home');
	
		
		
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
