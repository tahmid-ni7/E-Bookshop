<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');

		/*if ($this->session->userdata('logged_in') == FALSE) {

			$this->session->set_flashdata('no_access', 'For buying the books you must be logged in your account.');
			redirect('users/login');
		}*/
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$view['user_view'] = "users/myCart";
		$this->load->view('layouts/user_layout', $view);
		
	}

	public function add_to_cart($id)
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		/*=== Get Books info from database ===*/
		$this->load->model('admin_model');
		$books = $this->admin_model->get_book_detail($id);

/*=============== Insert Data into cart =============*/
		$data = array(

				'id'=> $books->id,
				'price'=> $books->price,
				'name'=> $books->book_name,
				'book_image'=> $books->book_image,
				'qty'=> 1
		);
		
		$this->cart->insert($data);
		redirect('cart');

	}
/*=============== Update data from cart ============*/
	public function update_cart()
	{

		$contents = $this->input->post();
		$this->load->model('admin_model');
		foreach ($contents as $content) 
		{
			$info = array(

			'rowid'=> $content['rowid'],
			'qty' => $content['qty']

			);
			if($content['qty'] < 0)
			{
				$this->session->set_flashdata('error', '*Quantity can not be less than 0 or negative value.');
			}
			else 
			{
			/*	$books = $this->admin_model->get_book_detail($id);
				if($content['qty'] > $books->'quantity')
				{
					$this->session->set_flashdata('error', '*This much quantity is not in stock.');
				}
				else
				{
					$this->cart->update($info);
				}*/
				$this->cart->update($info);
			}
			
		}
			redirect('cart');
	}


/*============== Delete Data from cart ================*/
	public function delete_cart($rowid)
	{
		/*$this->cart->update(array('rowid'=>$rowid, 'qty'=>0));*/
		$this->cart->remove($rowid);
		redirect('cart');
	}


}
