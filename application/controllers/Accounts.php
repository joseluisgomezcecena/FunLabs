<?php
class Accounts extends CI_Controller
{

	public function forgot()
	{
		$data['title'] = "Olviste tu contraseña?";

		$this->form_validation->set_rules('email', 'Correo Electronico', 'required');

		//validation style
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert_danger mb-5"><strong class="uppercase">Error: </strong>',
			'<button type="button" class="dismiss la la-times" data-dismiss="alert"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/auth/header');
			$this->load->view('users/forgot', $data); //loading page and data
			$this->load->view('templates/auth/footer');
		}
		else
		{
			//get email
			$email = $this->input->post('email');

			//echo $email;

			//exit();
			//check if email exists
			$user_id = $this->UserModel->check_email($email);

			if($user_id) {
				//generate random key
				$key = md5(uniqid());

				//encrypt key
				$encrypted_pwd = password_hash($key, PASSWORD_DEFAULT);

				//insert key into database
				$this->UserModel->insert_key($user_id, $encrypted_pwd);

				//send email with link
				$this->load->library('email');
				$subject = 'Recuperacion de contraseña';

				$message = "<p>Para recuperar tu contraseña, haz click en el siguiente enlace: ". $key ."</p>";

				$body = $message;

				$result = $this->email
					->from('soporte@cienciabook.com')
					->reply_to('noreply@cienciabook.com')    // Optional, an account where a human being reads.
					->to($email)
					->subject($subject)
					->message($body)
					->send();

				var_dump($result);
				echo '<br />';
				echo $this->email->print_debugger();


				//session message
				$this->session->set_flashdata(
					'sent',
					'Se ha enviado un correo con tu nueva contraseña.'
				);

				exit;



			}else{
				//session message
				$this->session->set_flashdata(
					'error',
					'No hay una cuenta con ese correo electronico.'
				);

				redirect(base_url() . 'forgot');
			}
		}
	}


	public function emailtest()
	{
		$this->load->library('email');

		$subject = 'This is a test';
		$message = '
    <p>This message has been sent for testing purposes.</p>

    <!-- Attaching an image example - an inline logo. -->
    <p><img src="cid:logo_src" /></p>
';

// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
' . $message . '
</body>
</html>';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);

// Attaching the logo first.
		$file_logo = FCPATH.'apple-touch-icon-precomposed.png';  // Change the path accordingly.
// The last additional parameter is set to true in order
// the image (logo) to appear inline, within the message text:
		$this->email->attach($file_logo, 'inline', null, '', true);
		$cid_logo = $this->email->get_attachment_cid($file_logo);
		$body = str_replace('cid:logo_src', 'cid:'.$cid_logo, $body);
// End attaching the logo.

		$result = $this->email
			->from('yourusername@gmail.com')
			->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
			->to('therecipient@otherdomain.com')
			->subject($subject)
			->message($body)
			->send();

		var_dump($result);
		echo '<br />';
		echo $this->email->print_debugger();

		exit;
	}



}
