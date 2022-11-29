<?php

class UserModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function register($encrypted_pwd)
	{
		$data = array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'username'=>$this->input->post('username'),
			'password'=>$encrypted_pwd,
			'profile_image'=>'no-image.png',
		);

		return $this->db->insert('users', $data);
	}






	public function get_users_active_number()
	{
		$query = $this->db->get('users');
		return $query->num_rows();
	}




	public function edit_profile($post_image, $uploaded, $user_id, $encrypted_pwd)
	{
		$id = $user_id;

		if($uploaded== 0)
		{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('username'),
				'password'=>$encrypted_pwd,
				'bio'=>$this->input->post('bio'),
			);
		}
		else
		{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('username'),
				'password'=>$encrypted_pwd,
				'bio'=>$this->input->post('bio'),
				'profile_image'=>$post_image,
			);
		}

		return $this->db->update('users', $data, array('id'=>$id));


	}



	public function insert_key($user_id, $encrypted_key)
	{
		$data = array(
			'email'=>$user_id,
			'key'=>$encrypted_key,
		);

		return $this->db->update('users', $data, array('email'=>$user_id));
	}





	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		$result = $query->row_array();

		if (!empty($result) && password_verify($password, $result['password'])) {
			return $result;
		} else {
			return false;
		}
	}







	public function get_user($id)
	{
		$query = $this->db->get_where('users', array('id'=>$id));
		return $query->row_array();
	}


	public function check_email($email){
		$email = $this->input->post('email');
		$query = $this->db->get_where('users', array('email'=>$email));
		if(empty($query->row_array())){
			return false;
		}else{
			return $query->row_array();
		}
	}




	public function check_email_exists($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));

		if(empty($query->row_array()))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function check_username_exists($username)
	{
		$query = $this->db->get_where('users', array('username' => $username));

		if(empty($query->row_array()))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function check_email_exists_profile($email,$user_id)
	{

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('id !=', $user_id);
		$query = $this->db->get();



		if(empty($query->row_array()))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function check_username_exists_profile($username,$user_id)
	{
		$query = $this->db->get_where('users', array('username' => $username, 'id !=' => $user_id));

		if(empty($query->row_array()))
		{
			return true;
		}
		else
		{
			return false;
		}
	}




}
