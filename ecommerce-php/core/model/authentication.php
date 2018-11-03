<?php 
/**
 * Orders
 */
class Authentication
{
	
	function __construct()
	{
		$this->db = new Database();
	}

	function login($email, $password)
	{
		$this->db->Query("SELECT * FROM authentication where email=$email AND password=$password");
		$user = $this->db->Rows();
		return $user;
	}

	function signup($email, $password)
	{
		$auth = "INSERT INTO `authentication` (`email`, `password`) VALUES ($email, $password);";
		$this->db->Query($auth);
	}
}
