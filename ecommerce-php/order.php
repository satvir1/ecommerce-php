<?php 
session_start(); 
include 'require.php';
/* Objects*/
$product = new Products();
$order = new Orders();
$cart = new Cart([  'cartMaxItem' => 0, 'itemMaxQuantity' => 99, 'useCookie'=> false, ]);
/* Objects*/

$cartItems = $cart->getItems();

if (!empty($cartItems)) {
	
	$cart_total =  $cart->getAttributeTotal('price');
	$shipping_cost =  $cart->getAttributeTotal('shipping_cost');
	$pay_amount = $shipping_cost+$cart_total;

	$order->AddOrder($cartItems,$pay_amount, $_SESSION['user_id']);
	$cart->clear();
	require 'order_view.php';
}else{
	header("Location: ".BASE_URL);	
}