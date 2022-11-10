<?php

class CategoryModel extends  CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_categories()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}

	public function create_category($category_image)
	{
		$data = array(
			'category_name'=>$this->input->post('name'),
			'category_image_url'=> $category_image
		);

		return $this->db->insert('category', $data);
	}

	public function get_category($id)
	{
		$query = $this->db->get_where('category', array('category_id'=>$id));
		return $query->row();

	}
}
