<?php
class Login_model extends CI_Model{
    // //cek username dan password admin 
    // function auth_admin($username,$password){
    //     $query=$this->db->query("SELECT * FROM dosen WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
    //     return $query;
    // }
 
    // //cek username dan password karyawan
    // function auth_karyawan($username,$password){
        // $query=$this->db->query("SELECT * FROM karyawan WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
    //     return $query;
    // }
    public function proseslogin($username,$password){
      // $this->db->select('');
    	$this->db->where('username',$username);
    	$this->db->where('password',$password);
    	return $this->db->get('user')->row();


    	// $pelogin = $this->db->get_where('user',array('username' => $username, 'password' => $password));
  			// if($pelogin > 0)
  			// {
  			//   foreach ($pelogin->result() as $qck) {
  			// 	 if($qck->level=='karyawan')
  			// 	 	{
  			// 	 		redirect('welcome/karyawan');
  			// 	 	}
  			// 	 elseif($qck->level=='karyawan')
  			// 	 	{
  			// 	 		redirect('welcome/admin');
  			// 	 	}
  			// 	 }

    	// 	}
    	// $this->db->select('username','password','level');
    	// $this->db->from('user');
    	// $this->db->where('username',$username);
    	// $this->db->where('password',$password);
    	
    	// $this->db->limit(1);

    	// $query=$this->db->get();

    	// if($query->num_rows()==1){
    	// 	return $query->result();
    	// }else{
    	// 	return false;
    	// }

	}

  public function login($username,$password)
  {
    $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password ='$password' ");
    return $query;
  }
 
}