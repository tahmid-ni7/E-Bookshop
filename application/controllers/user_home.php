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
}