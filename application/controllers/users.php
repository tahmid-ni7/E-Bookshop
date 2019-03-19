<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
				$this->session->set_flashdata('reg_success', 'Your Registration is successfull');
				redirect('users/registration');
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
					'name' 		=> $name,
					'email'		=> $email,
					'type'		=> $type,
					'logged_in'	=> true

				);
				
				$this->session->set_userdata($login_data);

				if($type == 'A')
				{

					$this->session->set_flashdata('login_success', 'Logged in successfully');
					redirect('admin/index');
				}
				elseif ($type == 'U')
				{
					$this->session->set_flashdata('login_success', 'Logged in successfully');
					redirect('user_home');
				}
				else
				{
					$this->session->set_flashdata('login_fail', 'Invalid logged in...');

					$view['user_view'] = "users/login";
					$this->load->view('layouts/user_layout', $view);
				}

			}
			else
			{

				$this->session->set_flashdata('login_fail', 'Invalid logged in!');

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
		
		$this->load->model('admin_model');
		$view['books'] = $this->admin_model->get_books();

		$view['user_view'] = "users/all_books";
		$this->load->view('layouts/user_layout', $view);
	}

	public function book_view($id)
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$this->load->model('admin_model');
		$view['book_detail'] = $this->admin_model->get_book_detail($id);

		$view['user_view'] = "users/book_detail";
		$this->load->view('layouts/user_layout', $view);
	}




}
