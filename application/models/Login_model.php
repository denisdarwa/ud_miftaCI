<?php
class Login_model extends CI_Model{

	public function proseslogin($username,$password){
    	$this->db->where('username',$username);
    	$this->db->where('password',$password);
    	return $this->db->get('user')->row();
	}

  public function login($username,$password)
  {
    $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password ='$password' ");
    return $query;
  }
 
}