<?php
class Comments extends CI_Controller{

	public function create()
	{
		$id = $this->input->post('id');
		$data['post'] = $this->PostModel->get_posts($id);
		$data['title'] = $data['post']['title'];

		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->CommentModel->create_comment($id);
			redirect('posts/' . $id);
		}

	}

}
