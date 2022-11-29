<?php

class Dashboards extends MY_Controller
{
	//display all posts
	public function index()
	{
		$user_info = $this->session->userdata('user_id');
		if($user_info['level']< 2)
		{
			redirect(base_url() . 'posts');
		}

		$data['title'] = "Mi panel de control";

		$data['posts'] = $this->PostModel->get_posts_pending();

		//posts
		$data['posts_pending_number'] = $this->PostModel->get_posts_pending_number();
		$data['posts_active_number'] = $this->PostModel->get_posts_active_number();
		$data['categories_active_number'] = $this->CategoryModel->get_categories_active_number();
		$data['users_number'] = $this->UserModel->get_users_active_number();

		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('dashboards/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}














}
