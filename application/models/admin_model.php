<?php 

class admin_model extends CI_Model
{

	public function create_category()
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description')

		);

		$insert_ctg = $this->db->insert('category', $data);
		return $insert_ctg;
	}

	public function get_category()
	{
		$query = $this->db->get('category');
		return $query->result();
	}

	public function get_ctg_detail($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('category');
		return $query->row();
	}

	public function edit_category($id, $data)
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description')

		);

		return $query = $this->db->where('id', $id)->update('category', $data);
	}

	public function delete_category($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('category');
		
	}

	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

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

	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
		
	}

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
			'book_image' => $image_path
		);

		$insert_book = $this->db->insert('books', $data);
		return $insert_book;
	}

	public function get_books()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('books');
		return $query->result();
	}

	public function get_book_detail($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('books');
		return $query->row();		
	}

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
			'book_image' => $image_path
		);

		return $query = $this->db->where('id', $id)->update('books', $data);
	}

	public function delete_book($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('books');
	}
}