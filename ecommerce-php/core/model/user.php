<?php 
/**
 * user
 */
class User 
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
	function Register($first_name, $last_name, $email, $password, $address, $address2, $city, $postcode, $country)
	{
		$password =md5($password);
		$user = "INSERT INTO `users` (`first_name`,`last_name`,`email`,`password`,`address`,`address2`,`city`,`postcode`,`country`) VALUES ('$first_name','$last_name','$email','$password','$address','$address2','$city','$postcode','$country');";
		$this->db->Query($user);		
	}
	function Update($first_name, $last_name, $email, $address, $address2, $city, $postcode, $country, $user_id)
	{
		$udapte = "UPDATE users  SET 
									first_name='$first_name',
									last_name='$last_name',
									email='$email',
									address='$address',
									address2='$address2',
									city='$city',
									postcode='$postcode',
									country='$country'
				WHERE user_id = '$user_id'";
		$this->db->UpdateDb($udapte);
	}
	function emailExist($email,$user_id='')
	{
		if (!empty($user_id)) 
		{
			$this->db->Query("SELECT * FROM users WHERE email= '$email' AND user_id NOT IN ($user_id)");
		}else{
			$this->db->Query("SELECT * FROM users WHERE email= '$email'");
		}
		if ($this->db->NumRows() > 0) {
			return true;
		}
		return false;
	}
	function Login($email,$password)
	{
		$password =md5($password);
		$this->db->Query("SELECT * FROM users WHERE email= '$email' AND password= '$password'");
		if ($this->db->NumRows() > 0) {
			$user =  $this->db->Rows();
			$userData =  $user[0];
			$_SESSION['user_id'] = $userData['user_id'];
			$_SESSION['first_name'] = $userData['first_name'];
			$_SESSION['last_name'] = $userData['last_name'];
			$_SESSION['email'] = $userData['email'];
			$_SESSION['address'] = $userData['address'];
			$_SESSION['address2'] = $userData['address2'];
			$_SESSION['city'] = $userData['city'];
			$_SESSION['postcode'] = $userData['postcode'];
			$_SESSION['country'] = $userData['country'];
			return true;
		}
		return false;
	}
}
