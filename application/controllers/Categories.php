<?php

class Categories extends CI_Controller
{


	public function get_categories()
	{
		$this->CategoryModel->get_posts();
	}



	public function index()
	{
		$data['title'] = 'Categorias';

		$data['categories'] = $this->CategoryModel->get_categories();

		$this->load->view('templates/header');
		$this->load->view('categories/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}




	public function create()
	{
		$data['title'] = "Crear Categorias";

		$this->form_validation->set_rules('name', 'Name', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('categories/create', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{

			$config['upload_path'] = './assets/uploads/categories';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '2048';
			$config['max_width'] = '2500';
			$config['max_height'] = '2500';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload())
			{
				$errors = array('error'=>$this->upload->display_errors());
				$category_image = 'no-image.png';
			}
			else
			{
				$data = array('upload_data'=>$this->upload->data());
				$category_image = $_FILES['userfile']['name'];
			}


			$this->CategoryModel->create_category($category_image);
			redirect(base_url() . 'categories');
		}
	}





	public function edit($id)
	{
		$data['title'] = 'Editar Categoria';

		$data['category'] = $this->CategoryModel->get_category($id);

		if(empty($data['category']))
		{
			show_404();
		}

		$this->form_validation->set_rules('name', 'Name', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('categories/edit', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			if (empty($_FILES['userfile']['name']))
			{
				$category_image = "no-image.png";
				$uploaded = 0;
			}
			else
			{
				$uploaded = 1;
				$config['upload_path'] = './assets/uploads/categories';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '2048';
				$config['max_width'] = '2500';
				$config['max_height'] = '2500';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload())
				{
					$errors = array('error'=>$this->upload->display_errors());
					$category_image = 'no-image.png';
				}
				else
				{
					$data = array('upload_data'=>$this->upload->data());
					$category_image = $_FILES['userfile']['name'];
				}
			}


			$this->CategoryModel->edit_category($category_image, $uploaded, $id);
			redirect(base_url() . 'categories');
		}


	}









	public function delete($id)
	{
		$data['title'] = 'Editar Categoria';

		$data['category'] = $this->CategoryModel->get_category($id);

		if(empty($data['category']))
		{
			show_404();
		}

		$this->form_validation->set_rules('id', 'Categoria a Borrar', 'required');


		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('categories/delete', $data); //loading page and data
			$this->load->view('templates/footer');
		}else {
			$this->CategoryModel->delete_category($id);
			redirect(base_url() . 'categories');
		}

	}










	public function posts($id)
	{
		$data['title'] = $this->CategoryModel->get_category($id)->category_name;

		$data['posts'] = $this->PostModel->get_posts_by_category($id);

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data); //loading posts page and data
		$this->load->view('templates/footer');

	}


}
