<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$type = $this->session->userdata('type');
		if($type != 'U')
		{
			$this->session->set_flashdata('no_access', 'You are not allowed or not logged in! Please Log in with an user account');
			redirect('users/login');
		}

		/*=== Load the cart library ===*/
		$this->load->library('cart');
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$view['user_view'] = "users/user_index";
		$this->load->view('layouts/user_home', $view);
	}

	public function sell_books()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$config = [
			'upload_path'=>'./uploads/image/',
			'allowed_types'=>'jpg|png',
			'max_size' => '400,',
			'overwrite' => FALSE
			];

		$this->load->library('upload', $config);

		$this->form_validation->set_rules('book_name', 'Book name', 'trim|required|strip_tags[book_name]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[100]|strip_tags[description]');
		$this->form_validation->set_rules('author', 'Author name', 'trim|required|alpha_numeric_spaces|strip_tags[author]');
		$this->form_validation->set_rules('publisher', 'Publisher name', 'trim|required|alpha_numeric_spaces|strip_tags[publisher]');
		$this->form_validation->set_rules('price', 'Price', 'trim|required|alpha_numeric_spaces|strip_tags[price]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|numeric|strip_tags[quantity]');
		$this->form_validation->set_rules('categoryId', 'Category', 'trim|required');
		/*$this->form_validation->set_rules('userfile', 'File', 'trim|required');*/
		$this->form_validation->set_rules('conditionBox', 'Check box', 'trim|required');


		if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
		{

			$view['user_view'] = "users/sell_books";
			$this->load->view('layouts/user_home', $view);

		}
		else
		{	
			$this->load->model('user_model');

			if($this->user_model->add_books())
			{
				$this->session->set_flashdata('success', 'Book added successfully');
				redirect('user_home');
			}
			else
			{
				print $this->db->error();
			}
			redirect('user_home/myBooks');	
		}

		
	}

	public function myBooks()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$this->load->model('user_model');
		$view['books'] = $this->user_model->my_books();

		$view['user_view'] = "users/users_books";
		$this->load->view('layouts/user_home', $view);
	}

	public function myBooks_delete($id)
	{
		$this->load->model('user_model');
		$this->user_model->delete_book($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Book deleted successfully');
		redirect('user_home/myBooks');
	}
}