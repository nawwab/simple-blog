<?php
class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['blog'] = $this->blog_model->get_blog();
		$view_title = 'Blog Archive';

		$this->load->view('templates/header', array('view_title' => $view_title));
		$this->load->view('blog/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$data['blog_item'] = $this->blog_model->get_blog($slug);

		if (empty($data['blog_item'])) {
			show_404();
		}

		$view_title = $data['blog_item']['title'];

		$this->load->view('templates/header', array('view_title' => $view_title));
		$this->load->view('blog/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');

		$view_title = 'Create new article';

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', array('view_title' => $view_title));
			$this->load->view('blog/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->blog_model->set_blog();
			redirect('blog');
		}
	}

	public function delete($slug)
	{
		$data['blog_item'] = $this->blog_model->get_blog($slug);

		if (empty($data['blog_item'])) {
			show_404();
		}
		else
		{
			$this->blog_model->delete_blog($slug);
			redirect('blog');
		}
	}
}
