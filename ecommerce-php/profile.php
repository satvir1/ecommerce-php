<?php 
include 'header.php';
include 'require.php';
require 'sidebar.php'; 
?>
<?php 
if (!empty($_POST)) 
{	
	extract($_POST);

	if ($password == $confirm_password ) 
	{
		$user = new User();
		if (!$user->emailExist($email, $_SESSION['user_id'])) 
		{	
			$user->Update($first_name, $last_name, $email, $address, $address2, $city, $postcode, $country,$_SESSION['user_id']);
			
			$_SESSION['first_name'] = $_POST['first_name'];
			$_SESSION['last_name'] = $_POST['last_name'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['address'] = $_POST['address'];
			$_SESSION['address2'] = $_POST['address2'];
			$_SESSION['city'] = $_POST['city'];
			$_SESSION['postcode'] = $_POST['postcode'];
			$_SESSION['country'] = $_POST['country'];
			unset($_POST);
		}else{
			$errors['email'] = "Email already used";
		}
	}
}
?>
<?php include 'profile_view.php'; ?>
<?php include 'footer.php'; ?>