<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	
	 function checkUsername($username)
    {
		$this->db->where('email', $username);
		$query = $this->db->get('admin');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
   }
	
	function checkPasswod($password)
    {
		$this->db->where('password', md5($password));
		$query = $this->db->get('admin');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
   }
   
   
   function getUser($email)
    {
		$this->db->where('email', $email);
		$query  = $this->db->get('admin');
		$result = $query->result();
		return $result;
   }
   
   function addAdmin($param)
    {   
	
	    $result = $this->db->insert('admin',$param);
		return $result;
   }
	
	function checkAdmin($user)
    {   
	    $this->db->where('email', $user);
		$query = $this->db->get('admin');
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
   }
	
	
	
	
}
