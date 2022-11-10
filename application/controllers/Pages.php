<?php

class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH . 'views/pages/' . $page . '.php'))
		{
			show_404();
		}

		$data['title'] =  ucfirst($page);
		$data['posts'] = $this->PostModel->get_posts();
		$data['categories'] = $this->CategoryModel->get_categories();



		//load header, page & footer
		$this->load->view('templates/front_header', $data);
		$this->load->view('pages/' . $page, $data); //loading page and data
		$this->load->view('templates/front_footer');
	}


	public function post($id)
	{
		$data['post'] = $this->PostModel->get_posts($id);
		$data['categories'] = $this->CategoryModel->get_categories();

		$param = $data['post']['category_id'];
		$data['relateds'] = $this->PostModel->get_posts_by_category($param, 5);

		if(empty($data['post']))
		{
			show_404();
		}

		//load header, page & footer
		$this->load->view('templates/front_header', $data);
		$this->load->view('pages/single' , $data); //loading page and data
		$this->load->view('templates/front_footer');
	}


}
