<?php

class Users extends CI_Controller{

	public function register()
	{

		if($this->session->userdata('logged_in'))
		{
			redirect(base_url());
		}

		$data['title'] = 'Sign Up!';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'matches[password]');


		//validation style
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert_danger mb-5 mt-5"><strong class="uppercase">Error: </strong>',
			'<button type="button" class="dismiss la la-times" data-dismiss="alert"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/auth/header');
			$this->load->view('users/register', $data);
			$this->load->view('templates/auth/footer');
		}
		else
		{
			//Encrypt password
			$encrypted_pwd = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

			$this->UserModel->register($encrypted_pwd);


			//session message
			$this->session->set_flashdata('user_registered', 'You can now login.');

			redirect(base_url() . 'posts');
		}

	}







	public function login()
	{

		$data['title'] = 'Login Here!';

		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/auth/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/auth/footer');
		}
		else
		{
			//Encrypt password
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$user_id = $this->UserModel->login($username, $password);

			if($user_id)
			{
				$user_info = $this->session->userdata('user_id');
				//die("Success!");

				//create session
				$user_data = array(
					'user_id'=>$user_id,
					'user_name'=>$username,
					'logged_in'=>true,
					'level'=>$user_info['level']
				);

				$this->session->set_userdata($user_data);


				//session message
				$this->session->set_flashdata('login_success', 'Haz iniciado sesión.');




				if($user_info['level'] == 2){
					redirect(base_url() . 'dashboard');
				}else{
					redirect(base_url() . 'posts');
				}
			}
			else
			{
				//session message
				$this->session->set_flashdata('login_failed', 'Usuario y/o contraseña incorrectos.');
				redirect(base_url() . 'users/login');
			}
		}


	}





	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');

		//session message
		$this->session->set_flashdata('user_logged_out', 'Haz cerrado tu sesión.');
		redirect(base_url() . 'users/login');
	}






	public function get_user($id)
	{
		$user_array  = $this->session->userdata('user_id');
		$id = $user_array['id'];
		$data['user'] = $this->UserModel->get_user($id);
	}




	function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists','That username is taken. Please choose a different one.');

		if($this->UserModel->check_username_exists($username))
		{
			return true;
		}
		else
		{
			return false;
		}
	}



	function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists','That email is taken. Please choose a different one.');

		if($this->UserModel->check_email_exists($email))
		{
			return true;
		}
		else
		{
			return false;
		}
	}






}
