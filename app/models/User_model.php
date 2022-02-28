<?php

class User_model{
	private $table = 'tb_user';
	private $db;

	public function __construct()
    {
        $this->db = new Database;
	}
	
	public function getUser()
	{
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
	}


	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT * FROM tb_user WHERE username=:username AND password=:password ";
		// $query = "UPDATE user SET session=1 WHERE username=:username ";
		$this->db->query($query);
		$this->db->bind('username',$username);
		$this->db->bind('password',$password);
		$this->db->execute();

		return $this->db->single();
	}
}