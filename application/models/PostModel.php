<?php

class PostModel extends  CI_Model{
	public function __construct()
	{
		$this->load->database();
	}


	public function get_posts($id=FALSE)
	{
		if($id === FALSE)
		{
			$this->db->order_by('id', 'DESC');
			//$query = $this->db->get('posts');
			$this->db->select ( '*' );
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );
			$query = $this->db->get();
			return $query->result_array();
		}
		else
		{
			$this->db->select ( '*' );
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );
			$this->db->where('id', $id);
			$query = $this->db->get();
			//$query = $this->db->get_where('posts', array('id'=>$id));

			return $query->row_array();

		}
	}





	public function create_post($post_image)
	{
		$slug = url_title($this->input->post('title'));

		$status = $this->input->post('status') == '1' ? 1 : 0;

		$visibility = $this->input->post('visibility') == 1 ? 1 : 0;

		$category = $this->input->post('category[]');

		$category_id = implode(',',$category);


		$data = array(
			'title'	=>	$this->input->post('title'),
			'slug'	=>	$slug,
			'body'  =>	$this->input->post('body'),
			'status'  =>  $status,
			'visibility'  =>  $visibility,
			'category_id'  =>  $category_id,
			'steps' => $this->input->post('steps'),
			'image_url'  =>  $post_image
		);

		$this->db->insert('posts', $data);
		$id = $this->db->insert_id();

		return  $id;
	}



	public function get_posts_by_category($category_id, $limit)
	{
		if($limit == 0)
		{
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('category', 'category.category_id = posts.category_id');
			$query = $this->db->get_where('posts', array('posts.category_id'=>$category_id));

		}
		else
		{
			$limit = $limit;
			$this->db->order_by('posts.id', 'DESC');
			$this->db->limit($limit);
			$this->db->join('category', 'category.category_id = posts.category_id');
			$query = $this->db->get_where('posts', array('posts.category_id'=>$category_id));

		}


		return $query->result_array();
	}






	public function edit_post($post_image, $uploaded)
	{
		//$slug = url_title($this->input->post('title'));
		$status = $this->input->post('status') == '1' ? 1 : 0;
		$visibility = $this->input->post('visibility') == 1 ? 1 : 0;

		$category = $this->input->post('category[]');
		$category_id = implode(',',$category);

		$id = $this->input->post('id');

		if($uploaded== 0)
		{
			$data = array(
				'title'	=>	$this->input->post('title'),
				'body'  =>	$this->input->post('body'),
				'status'  =>  $status,
				'visibility'  =>  $visibility,
				'category_id'  =>  $category_id,
				'steps' => $this->input->post('steps'),

			);
		}
		else
		{
			$data = array(
				'title'	=>	$this->input->post('title'),
				'body'  =>	$this->input->post('body'),
				'status'  =>  $status,
				'visibility'  =>  $visibility,
				'category_id'  =>  $category_id,
				'steps' => $this->input->post('steps'),
				'image_url'  =>  $post_image
			);
		}



		return $this->db->update('posts',$data,array('id'=>$id));
		//return  $this->db->insert_id();


	}





	public function delete_post()
	{
		$id = $this->input->post('id');
		return $this->db->delete('posts', array('id'=>$id));
	}



}
