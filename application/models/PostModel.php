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
			$this->db->select (
				'posts.id,posts.title,posts.slug,
				posts.body,posts.steps,posts.image_url,
				posts.status,posts.visibility,posts.category_id,
				posts.created_at,posts.user_id,category.category_name,
				category.created_at AS category_created_at'
			);
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );
			$query = $this->db->get();
			return $query->result_array();
		}
		else
		{
			$this->db->select (
				'posts.id,posts.title,posts.slug,
				posts.body,posts.steps,posts.image_url,
				posts.status,posts.visibility,posts.category_id,
				posts.created_at,posts.user_id,category.category_name,
				category.created_at AS category_created_at, users.id AS userid, 
				users.name, users.username, users.profile_image',
			);
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );
			$this->db->join ('users', 'posts.user_id=users.id', 'left');
			$this->db->where('posts.id', $id);
			$query = $this->db->get();

			return $query->row_array();

		}
	}







	public function get_posts_pending($id=FALSE)
	{
		if($id === FALSE)
		{
			$this->db->order_by('id', 'DESC');
			//$query = $this->db->get('posts');
			$this->db->select (
				'posts.id,posts.title,posts.slug,
				posts.body,posts.steps,posts.image_url,
				posts.status,posts.visibility,posts.category_id,
				posts.created_at,posts.user_id,category.category_name,
				category.created_at AS category_created_at, users.id AS userid, users.name, users.username',
			);
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );
			$this->db->join ('users', 'posts.user_id=users.id', 'left');
			$this->db->where('visibility=', 0);

			$query = $this->db->get();
			return $query->result_array();
		}
		else
		{
			$this->db->select (
				'posts.id,posts.title,posts.slug,
				posts.body,posts.steps,posts.image_url,
				posts.status,posts.visibility,posts.category_id,
				posts.created_at,posts.user_id,category.category_name,
				category.created_at AS category_created_at'
			);
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );
			$this->db->where('id', $id);
			$query = $this->db->get();

			return $query->row_array();

		}
	}










	public function get_posts_logged($id=FALSE)
	{
		if($this->session->userdata('logged_in'))
		{
			$user_array  = $this->session->userdata('user_id');
			$user_id = $user_array['id'];
			$level = $user_array['level'];
		}
		else
		{
			exit();
		}

		if($id === FALSE)
		{

			$this->db->order_by('id', 'DESC');
			$this->db->select (
				'posts.id,posts.title,posts.slug,
				posts.body,posts.steps,posts.image_url,
				posts.status,posts.visibility,posts.category_id,
				posts.created_at,posts.user_id,category.category_name,
				category.created_at AS category_created_at'
			);
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );

			if($level <2){
				$this->db->where('posts.user_id', $user_id);
			}


			$query = $this->db->get();
			return $query->result_array();
		}
		else
		{
			$this->db->select (
				'posts.id,posts.title,posts.slug,
				posts.body,posts.steps,posts.image_url,
				posts.status,posts.visibility,posts.category_id,
				posts.created_at,posts.user_id,category.category_name,
				category.created_at AS category_created_at'
			);
			$this->db->from ( 'posts' );
			$this->db->join ( 'category', 'category.category_id = posts.category_id' , 'left' );


			if($level <2){
				$this->db->where('posts.user_id', $user_id);
			}


			$this->db->where('posts.user_id', $user_id);
			$query = $this->db->get();

			return $query->row_array();

		}
	}









	public function create_post($post_image)
	{

		$user_id = $this->session->userdata('user_id');

		if($user_id['level'] == 2){
			$visibility = 1;
		}else{
			$visibility = 0;
		}

		$slug = url_title($this->input->post('title'));

		$status = $this->input->post('status') == '1' ? 1 : 0;

		//$visibility = $this->input->post('visibility') == 1 ? 1 : 0;

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
			'image_url'  =>  $post_image,
			'user_id'  =>  $user_id['id'],
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




	public function review_post($id)
	{
		$data = array(
			'visibility'  =>  $this->input->post('review'),
		);

		$this->db->where('id', $id);
		return $this->db->update('posts', $data);
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
