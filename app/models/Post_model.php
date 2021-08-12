<?php

/**
 * 
 */
class Post_model
{
	private $table = 'posts';
	private $db;

	public function __construct() 
	{
		$this->db = new Database;
	}

	public function get_all_posts()
	{

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function get_post_by_id($id)
	{
		
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE post_id=:id');
		$this->db->bind('id', $id);

		return $this->db->single();
	}

	public function get_post_by_title($title)
	{
		
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE post_title=:title');
		$this->db->bind('title', $title);

		return $this->db->single();
	}

	public function detail_post($id)
	{
		return self::get_post_by_id($id);
	}

	public function add_post($data)
	{
		if (self::get_post_by_title($data['title'])) {
			Flasher::setFlash('This title', 'has been created', 'danger');
			header('Location: ' . BASE_URL . '/admin/post/add');
			exit();
		} else {
			$query = "INSERT INTO ". $this->table . "(author, post_title, post_article) VALUES (:author, :title, :article)";

			$this->db->query($query);
			
			$author = $_SESSION['user_id'];
			$this->db->bind('author', $author);
			$this->db->bind('title', $data['title']);
			$this->db->bind('article', nl2br($data['article']));
			
			$this->db->execute();

			return $this->db->rowCount();
		}
	}

	public function edit_post($data)
	{
		$query = "UPDATE ". $this->table ." SET post_title = :title, post_article = :article WHERE post_id = :id";

		$this->db->query($query);

		$this->db->bind('title', $data['title']);
		$this->db->bind('article', nl2br($data['article']));
		
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	
	}

	public function remove_post($id)
	{
		$query = "DELETE FROM " . $this->table . " WHERE post_id = :id";

		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		
		return $this->db->rowCount();
	}
}