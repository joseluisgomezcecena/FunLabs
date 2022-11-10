<?php

class CommentModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function create_comment($id)
	{
		$data = array(
			'post_id'=> $id,
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'body'=>$this->input->post('comment'),
		);

		return $this->db->insert('comments', $data);
	}

}
