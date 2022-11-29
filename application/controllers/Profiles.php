<?php
class Profiles extends MY_Controller
{



	public function profile()
	{
		$data['title'] = 'Mi Perfil';

		$user_array  = $this->session->userdata('user_id');
		$user_id = $user_array['id'];

		$data['user'] = $this->UserModel->get_user($user_id);

		//validation style
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert_danger mb-5"><strong class="uppercase">Error: </strong>',
			'<button type="button" class="dismiss la la-times" data-dismiss="alert"></button></div>'
		);


		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'User Name', 'required|callback_check_username_exists_profile['.$user_id.']');
		$this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email|callback_check_email_exists_profile['.$user_id.']');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'matches[password]');


		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('users/profile', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			//file uploads
			$config['upload_path'] = './assets/uploads/users';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '2048';
			$config['max_width'] = '2500';
			$config['max_height'] = '2500';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload())
			{
				$errors = array('error'=>$this->upload->display_errors());
				//$post_image = 'noimage.jpg';
				$uploaded = 0;
			}
			else
			{
				$data = array('upload_data'=>$this->upload->data());
				$post_image = $_FILES['userfile']['name'];
				$uploaded = 1;
			}

			//encrypting passwords
			$encrypted_pwd = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

			$this->UserModel->edit_profile($post_image, $uploaded, $user_id, $encrypted_pwd);
			$this->session->set_flashdata('profile_updated', 'Tu perfil ha sido actualizado correctamente.');

			redirect(base_url() . 'users/profile');

		}


	}







	function check_username_exists_profile($username, $user_id)
	{
		$this->form_validation->set_message('check_username_exists_profile','That username is taken. Please choose a different one.');

		if($this->UserModel->check_username_exists_profile($username,$user_id))
		{
			return true;
		}
		else
		{
			return false;
		}
	}



	function check_email_exists_profile($email,$user_id)
	{
		$this->form_validation->set_message('check_email_exists_profile','That email is taken. Please choose a different one for your profile.');

		if($this->UserModel->check_email_exists_profile($email,$user_id))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}
