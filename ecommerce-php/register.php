<?php 
include 'header.php';
include 'require.php';
?>
<?php require 'sidebar.php'; ?>

<?php 
if (!empty($_POST)) 
{	
	extract($_POST);

	if ($password == $confirm_password ) 
	{
		$user = new User();
		if (!$user->emailExist($email)) 
		{		
			$user->Register($first_name, $last_name, $email, $password, $address, $address2, $city, $postcode, $country);
			unset($_POST);
			header("Location: ".BASE_URL."/login.php");
			header("Location: ".BASE_URL);
		}else{
			$errors['email'] = "Email already used";
		}
	}
}
 ?>

<?php include 'register_view.php'; ?>
<?php include 'footer.php'; ?>