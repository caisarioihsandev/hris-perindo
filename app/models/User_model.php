<?php

/**
 * 
 */
class User_model
{
	private $table = 'users';
	private $db;

	public function __construct() 
	{
		$this->db = new Database;
	}

	public function get_all_users()
	{

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function get_user_by_username($username)
	{
		
		$this->db->query('SELECT * FROM '. $this->table .' WHERE user_name=:username');
		$this->db->bind('username', $username);

		return $this->db->single();
	}

	public function add_user($data)
	{
		if (self::get_user_by_username($data['username'])) {
			Flasher::setFlash('Username', 'has been registered', 'danger');
			header('Location: ' . BASE_URL . '/admin/user/add');
			exit();
		} else {
			$query = "INSERT INTO users (user_name, user_password, user_email) VALUES (:username, :password, :email)";

			$this->db->query($query);
			$this->db->bind('username', $data['username']);
			$pwd = hash_password($data['pwd']);
			$this->db->bind('password', $pwd);
			$this->db->bind('email', $data['email1']);
			
			$this->db->execute();

			return $this->db->rowCount();
		}
	}

	public function edit_user($data)
	{
		$query = "UPDATE users SET user_password = :password, user_email = :email WHERE user_name =:username";

		$this->db->query($query);
		$pwd = hash_password($data['pwd']);
		$this->db->bind('password', $pwd);
		$this->db->bind('email', $data['email1']);
		$this->db->bind('username', $data['username']);
		
		$this->db->execute();

		return $this->db->rowCount();
	
	}

	public function remove_user($username)
	{
		$query = "DELETE FROM " . $this->table . " WHERE user_name = :username";

		$this->db->query($query);
		$this->db->bind('username', $username);
		$this->db->execute();
		
		return $this->db->rowCount();
	}
}