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


	public function get_categories_active_number()
	{
		$query = $this->db->get('category');
		return $query->num_rows();
	}




	public function create_category($category_image)
	{
		$data = array(
			'category_name'=>$this->input->post('name'),
			'category_image_url'=> $category_image
		);

		return $this->db->insert('category', $data);
	}




	public function edit_category($category_image, $uploaded, $id)
	{
		if($uploaded == 1)
		{
			$data = array(
				'category_name'=>$this->input->post('name'),
				'category_image_url'=> $category_image
			);
		}
		else
		{
			$data = array(
				'category_name'=>$this->input->post('name'),
			);
		}

		return $this->db->update('category', $data, array('category_id'=>$id));
	}





	public function delete_category($id)
	{
		return $this->db->delete('category',array('category_id'=>$id));
	}







	public function get_category($id)
	{
		$query = $this->db->get_where('category', array('category_id'=>$id));
		return $query->row_array();

	}




}
