<?php 

class admin_model extends CI_Model
{
	#...Create category
	public function create_category()
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description')

		);

		$insert_ctg = $this->db->insert('category', $data);
		return $insert_ctg;
	}

	#...Display all category
	public function get_category()
	{
		$query = $this->db->get('category');
		return $query->result();
	}

	#...Display category details
	public function get_ctg_detail($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('category');
		return $query->row();
	}

	#...Edit category
	public function edit_category($id, $data)
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description')

		);

		return $query = $this->db->where('id', $id)->update('category', $data);
	}

	#...Delete category
	public function delete_category($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('category');
		
	}

	#...Display all user
	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	#...Add user
	public function add_user()
	{

		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

		'name'	=> $this->input->post('name'),
		'contact'	=> $this->input->post('contact'),
		'email'	=> $this->input->post('email'),
		'address'	=> $this->input->post('address'),
		'city'	=> $this->input->post('city'),
		'password' => $encripted_pass,
		'type' => $this->input->post('type')

		);

		$insert_user = $this->db->insert('users', $data);
		return $insert_user;

	}

	#...Delete User
	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
		
	}

	#...Add books
	public function add_books()
	{
		$data = $this->upload->data();
		$image_path = base_url("uploads/image/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'book_name' => $this->input->post('book_name'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'price' => $this->input->post('price'),
			'quantity' => $this->input->post('quantity'),
			'categoryId' => $this->input->post('categoryId'),
			'book_image' => $image_path,
			'userId' => $this->session->userdata('user_data'),
			'status' => $this->input->post('status')
		);

		$insert_book = $this->db->insert('books', $data);
		return $insert_book;
	}

	#...Display all books
	public function get_books()
	{	
		/*=== SQL join ===*/
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('books', 'books.categoryId = category.id');

		$this->db->order_by('books.id', 'DESC');
		$this->db->where('books.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	#...Display book details
	public function get_book_detail($id)
	{
		/*=== SQL join ===*/
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('books', 'books.categoryId = category.id');

		$this->db->where('books.id', $id);
		$query = $this->db->get();
		return $query->row();		
	}

	#...Edit book info
	public function edit_book($id, $data)
	{
		$data = $this->upload->data();
		$image_path = base_url("uploads/image/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'book_name' => $this->input->post('book_name'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'price' => $this->input->post('price'),
			'quantity' => $this->input->post('quantity'),
			'categoryId' => $this->input->post('categoryId'),
			'book_image' => $image_path,
			'userId' => $this->session->userdata('user_data'),
			'status' => $this->input->post('status')
		);

		return $query = $this->db->where('id', $id)->update('books', $data);
	}

	#...Delete book
	public function delete_book($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('books');
	}


	#...Get pending books
	public function pending_books()
	{	
		/*=== SQL join ===*/
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('books', 'books.categoryId = category.id');

		$this->db->order_by('books.id', 'DESC');
		$this->db->where('books.status', '0');
		$query = $this->db->get();
		return $query->result();
	}

	#...Published books
	public function published_books($id, $data)
	{
		
		$data = array(
			'status' => 1
		);

		return $query = $this->db->where('id', $id)->update('books', $data);
	}

	#...Get all orders
	public function get_orders()
	{
		$this->db->order_by('orderId', 'DESC');
		$query = $this->db->get('orders');
		return $query->result();
	}

	#...Get order details
	public function get_order_detail($orderId)
	{
		$this->db->where('orderId', $orderId);
		$query = $this->db->get('orders');
		return $query->row();
	}

	#...Accept orders
	public function accept_order($orderId, $data)
	{
		
		$data = array(
			'status' => 1
		);

		return $query = $this->db->where('orderId', $orderId)->update('orders', $data);
	}

	#...Delete order
	public function delete_order($orderId)
	{
		$this->db->where('orderId', $orderId);
		$this->db->delete('orders');
	}

}