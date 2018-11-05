<?php 
include 'header.php';
include 'require.php';
require 'sidebar.php'; 

if (!empty($_POST)) {
	
	extract($_POST);
	$user = new User();
	if ($userData = $user->Login($email,$password))  // user logged in
	{	
		header("Location: ".BASE_URL);
	}else{
		$errors['login'] = "Invalid logins";
	}
}
?>
<?php include 'login_view.php'; ?>
<?php include 'footer.php'; ?>