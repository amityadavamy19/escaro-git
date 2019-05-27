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
		
		
		
		
		if(get_cookie('username')!='' || $this->session->userdata('email')!='') : 
		   
		   $this->load->view('admin/admin_home');
		else:
		   $this->load->view('admin/admin_login');
		endif;
		
		
	}
	
	
	public function admin()
	{
		
		$this->load->view('admin/admin_home');
		
		
		
	}
	
	public function login()
	{
		 //$this->form_validation->set_rules('login_email', 'Email','required');
		 $this->form_validation->set_rules('login_email', 'Email','required|callback_username_check');
		 $this->form_validation->set_rules('login_password', 'Password', 'callback_password_check');
		

         if ($this->form_validation->run() == FALSE)
         {
             $this->load->view('admin/admin_login');
         }
         else
         {
         
		     $this->load->model('admin_model');
		     $data['userdata'] = $this->admin_model->getUser($_POST['login_email']);
			
			 foreach($data['userdata'] as $users)
			 {
				 $fname = $users->first_name ; 
				 $phone = $users->phone ; 
				 $email = $users->email ;
			 }
			 
			 $newdata = array(
				'email'  => $email,
				'fname'  => $fname,
				'phone'  => $phone,
				'logged_in' => TRUE
			 );

			 $this->session->set_userdata($newdata);
			
			 $cookie = array(
	 
			   'name'  => 'username',
			   'value'  => $email,
			   'expire' => '3600',
			   'path'   => '/',
			   'secure' => TRUE
	 
            );
		
		 $this->input->set_cookie($cookie);
		 
		 //$this->load->model('admin_model');
		 //$data['userdata'] = $this->admin_model->getUser($_POST['login_email']);
         $this->load->view('admin/admin_home');
		
         
	
		 }
		
	}
	
	public function register()
	{
		
		$this->form_validation->set_rules('fname', 'First Name','trim|required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name','trim|required|alpha');
		$this->form_validation->set_rules('phone', 'Phone','trim|required|numeric');
		//$this->form_validation->set_rules('signup_email', 'Email','required');
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
			 
			 // Send Signup Email 
			 
			 $this->email->from('amitaajamit@gmail.com', 'Your Name');
			 $to_email = $this->input->post('signup_email', TRUE); 
			 $this->email->to($to_email);
			 $messages = "Hi".$this->input->post('fname', TRUE)." you have successfully completed registration process. We will get back to you soon"; 	 
			 $this->email->subject('Registration Successful');
			 $this->email->message($messages);
			 
			 if($this->email->send()) :
			 $this->session->set_flashdata("email_sent","Email sent successfully.");
             $this->load->view('admin/admin_signupsuccess');		 
			 else :
			 $this->session->set_flashdata("email_sent","Error in sending Email."); 
			 endif;
			 
			 
			 
		 }
		
		
		
	}
	public function forgot()
	{
		 
			//$this->form_validation->set_rules('forgot_email', 'Email','required');
			$this->form_validation->set_rules('forgot_email', 'Email','required|callback_username_check');
			if ($this->form_validation->run() == FALSE)
            {
             $this->load->view('admin/admin_login');
            }
            else
            {
			$token = random_string('alnum', 8);
			$this->load->model('admin_model');
			$admin_email = htmlspecialchars($this->input->post('forgot_email', TRUE));
			$data = array('password'=>md5($token));
			$this->admin_model->updateAdmin($data,'admin',$admin_email,'email');
			
		    // Send Reset Password Email 
			
		    $this->email->from('amitaajamit@gmail.com', 'Your Name');
			$to_email = $this->input->post('forgot_email', TRUE); 
			$this->email->to($to_email);
			$messages = "Hi ".$admin_email." your new password is ".$token.". Please change your password after login .Regards Escaro Royale"; 	 
			$this->email->subject('New Password');
			$this->email->message($messages);
			
			if($this->email->send()) :
			$this->session->set_flashdata("email_sent","Email sent successfully.");	 
			else :
			$this->session->set_flashdata("email_sent","Error in sending Email."); 
			endif;
	
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
			$this->form_validation->set_message('username_check', 'The  %s  do not exist, should not be blank');            
			return false;
		}
	}
	
	function admin_check($user)
	{
		$this->load->model('admin_model');

		if ($this->admin_model->checkAdmin($user))
		{    
	
	        $this->form_validation->set_message('admin_check', 'The  %s  already exist');            
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
	
	   // echo $this->session->userdata('fname');
		$uemail = $this->session->userdata('email');
		
		//$this->session->unset_userdata($uemail);
        $this->session->sess_destroy();
	    
		redirect('admin_dashboard/login');
		
		
		
		
	}
	
	// Admin Profile Update
	
	public function profile()
	{
		
	// missing UI
		
	}
	
	public function add_page()
	{
		$this->load->view('admin/add_pages');
		$date = date('d-m-Y');
		if($this->input->post('addpage') !='')
		{
			$data = array('page_name'=> htmlspecialchars($this->input->post('page_name', TRUE)), 'page_title'=>htmlspecialchars($this->input->post('page_title', TRUE)), 'page_content'=>htmlspecialchars($this->input->post('page_content', TRUE)), 'page_image'=>md5($this->input->post('page_image', TRUE)), 'status'=>('Active'), 'date_created'=>$date);
			
			$this->admin_model->addAdmin($data);
		}
		else
		{    
	
	        $this->session->set_flashdata('message', 'Error in adding pages!');
			//in view
			$this->session->flashdata('message');
		}
		
	}
	
	
	
	
	
	
}
