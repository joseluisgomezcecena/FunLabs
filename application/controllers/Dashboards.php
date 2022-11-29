<?php

class Dashboards extends MY_Controller
{
	//display all posts
	public function index()
	{

		/*
		if(!$this->session->userdata('logged_in'));
		{
			redirect(base_url());
		}
		*/

		$data['title'] = "Mi panel de control";

		$data['posts'] = $this->PostModel->get_posts_pending();

		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('dashboards/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}















}
