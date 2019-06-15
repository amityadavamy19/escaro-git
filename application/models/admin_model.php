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
	
	function updateAdmin($param,$table,$user,$colname)
    {   
	    $this->db->where('email', $user);
	    $result = $this->db->update($table,$param);
		return $result;
   }
	
	
	function addRecord($data,$table)
    {   
	
	    $result = $this->db->insert($table,$data);
		return $result;
   }
	
	function viewAllRecord($table)
	{
		
		$query = $this->db->get($table);

		if ( $query->num_rows() > 0 )
		{
			$row = $query->result_array();
			return $row;
		}
		
	}
	
	function viewRecord($arg,$table,$lim)
	{
		
		if($lim != '')
		{
			$query = $this->db->get_where($table,$arg,$lim);
		}else
		{
			$query = $this->db->get_where($table,$arg);
		}
		
		

		if ( $query->num_rows() > 0 )
		{
			$row = $query->row_array();
			return $row;
		}
		
		
	}
	
}
