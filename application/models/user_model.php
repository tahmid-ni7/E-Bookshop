<?php 

class user_model extends CI_Model
{
	public function register_user()
	{

		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

		'name'	=> $this->input->post('name'),
		'contact'	=> $this->input->post('contact'),
		'email'	=> $this->input->post('email'),
		'address'	=> $this->input->post('address'),
		'city'	=> $this->input->post('city'),
		'password' => $encripted_pass

		);

		$insert_data = $this->db->insert('users', $data);
		return $insert_data;

	}

	public function login_user($email, $password, $type)
	{
		$this->db->where('email', $email);
		$this->db->where('type', $type);

		$result = $this->db->get('users');

		$db_password = $result->row('password');

		if(password_verify($password, $db_password))
		{
			return $result->row(0)->id;
		}
		else
		{
			return false;
		}
	}

	public function get_books()
	{
		/*=== SQL join and Data filter ===*/
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('books', 'books.categoryId = category.id');
		if(isset($_GET['ctg']))
		{
			$a = $_GET['ctg'];
			$query = $this->db->where('category.id', $a);
			$this->db->order_by('books.id', 'DESC'); 
			$query = $this->db->get();
			return $query->result();
		}
		$this->db->order_by('books.id', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function recent_books()
	{
		$this->db->limit(6);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('books');
		return $query->result();
	}



} 



 ?>