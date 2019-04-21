<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		/*=== Load the cart library ===*/
		$this->load->library('cart');
		
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/		
		/*$this->load->view('layouts/user_layout', $view);*/
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_dash|min_length[3]');
		$this->form_validation->set_rules('repassword', 'Confirm Password',
		'trim|required|alpha_dash|min_length[3]|matches[password]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|max_length[80]|strip_tags[address]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('conditionBox', 'Check box', 'trim|required');


		if($this->form_validation->run() == FALSE)
		{
			/*=== LOAD DYNAMIC CATAGORY ===*/
			$this->load->model('admin_model');
			$view['category'] = $this->admin_model->get_category();
			/*==============================*/

			$view['user_view'] = "users/reg";
			$this->load->view('layouts/user_layout', $view);
		}
		else
		{
			$this->load->model('user_model');

			if($this->user_model->register_user())
			{
				$this->session->set_flashdata('reg_success', 'Your Registration is successfull.');
				redirect('users/login');
			}
			else
			{
				print $this->db->error();
			}

		}
	}


	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|alpha_dash');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			/*=== LOAD DYNAMIC CATAGORY ===*/
			$this->load->model('admin_model');
			$view['category'] = $this->admin_model->get_category();
			/*==============================*/

			$view['user_view'] = "users/login";
			$this->load->view('layouts/user_layout', $view);
		}
		else
		{
			$this->load->model('user_model');

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$type = $this->input->post('type');

			$user_data = $this->user_model->login_user($email, $password, $type);

			if($user_data)
			{
				$login_data = array(

					'user_data' => $user_data,
					'id'		=> $user_data->id,
					'email'		=> $email,
					'type'		=> $type,
					'name'		=> $user_data->name,
					'logged_in'	=> true

				);
				
				$this->session->set_userdata($login_data);

				if($type == 'A')
				{

					$this->session->set_flashdata('login_success', 'Logged in successfully. You have logged in as an admin.');
					redirect('admin/index');
				}
				elseif ($type == 'U')
				{
					$this->session->set_flashdata('login_success', 'Welcome, <a href = "user-home" class = "text-primary">'.$this->session->userdata('name').'</a>. You have Logged in successfully');
					redirect('home');
				}
			
			}

			else
			{
				/*=== LOAD DYNAMIC CATAGORY ===*/
				$this->load->model('admin_model');
				$view['category'] = $this->admin_model->get_category();
				/*==============================*/
				
				$this->session->set_flashdata('login_fail', '<i class="fas fa-exclamation-triangle"></i> Invalid login. The email or password that you have entered is incorrect. ');

				$view['user_view'] = "users/login";
				$this->load->view('layouts/user_layout', $view);
			}

		}


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');	
	}


	public function all_books()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/
		
		$this->load->model('user_model');
		$view['books'] = $this->user_model->get_books();

		$view['user_view'] = "users/all_books";
		$this->load->view('layouts/user_layout', $view);
	}

/*======== Book details info and all reviews =======*/
	public function book_view($id)
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$this->form_validation->set_rules('review', 'Review', 'trim|required|min_length[10]|htmlentities[review]');

		if($this->form_validation->run() == FALSE)
		{
			/*=== Book Details ===*/
			$this->load->model('admin_model');
			$view['book_detail'] = $this->admin_model->get_book_detail($id);
			/*=== Get reviews ===*/
			$this->load->model('user_model');
			$view['reviews'] = $this->user_model->get_reviews();

			$view['user_view'] = "users/book_detail";
			$this->load->view('layouts/user_layout', $view);
		}
		else
		{
			$this->load->model('user_model');
			$this->user_model->reviews($id);
			redirect('users/book_view/'.$id.'');
		}
		

	}

	public function all_ebooks()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/
		
		$this->load->model('user_model');
		$view['ebooks'] = $this->user_model->get_ebooks();

		$view['user_view'] = "users/all_ebooks";
		$this->load->view('layouts/user_layout', $view);
	}

	public function ebook_view($id)
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$this->load->model('admin_model');
		$view['ebook_detail'] = $this->admin_model->get_ebook_detail($id);

		$view['user_view'] = "users/ebook_detail";
		$this->load->view('layouts/user_layout', $view);

		
	}

	public function terms()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/
		
		$view['user_view'] = "temp/terms";
		$this->load->view('layouts/user_layout', $view);
	}


	public function search()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/


		$this->form_validation->set_rules('search_book', "Search",'required');

		if($this->form_validation->run() == FALSE)
		{
			#...Redirected same page after action
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			$query = $this->input->post('search_book');

			$this->load->model('user_model');
			$view['books'] = $this->user_model->search($query);


			$view['user_view'] = "users/search_books";
			$this->load->view('layouts/user_layout', $view);
		}
			
	}



}
