<?php 
require 'database.php';
/**
 * 
 */
class Products 
{
	
	function __construct()
	{
		$this->db = new Database();

	}
	function GetAll()
	{
		$this->db->Query('SELECT * FROM Products');
		return $this->db->Rows();
	}
	function GetOne($id)
	{
		$this->db->Query("SELECT * FROM Products WHERE id=$id");
		$product = $this->db->Rows();
		return $product[0];
	}
}
