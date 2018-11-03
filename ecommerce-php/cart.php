<?php 
include 'require.php';
/* Objects*/
$productClass = new Products();
$cart = new Cart([  'cartMaxItem' => 0, 'itemMaxQuantity' => 99, 'useCookie'=> false, ]);
/* Objects*/

if ($_GET['cart'] == 'add_single') 
{
	$single = $productClass->GetOne($_GET['id']);
	$cart->add($_GET['id'], 1, [ 
								'title'   => $single['title'],
								'price'   => $single['price'],
								'shipping_cost'   => $single['shipping_cost'],
								'brand'   => $single['brand'],
								'image'   => $single['image'],
								'description'   => $single['description'],
								]
							);
	header("Location: ".BASE_URL);
}
if ($_GET['cart'] == 'clear') 
{
	$cart->clear();
	header("Location: ".BASE_URL);
}
if ($_GET['cart'] == 'remove_one') 
{
	$item =  $cart->getItem($_GET['id']);
	$update =  $item['quantity'] - 1;
	$cart->update($_GET['id'], $update, $item['attributes']);
	header("Location: ".CART_URL);
}
if ($_GET['cart'] == 'add_one') 
{
	$item =  $cart->getItem($_GET['id']);
	$update =  $item['quantity'] + 1;
	$cart->update($_GET['id'], $update, $item['attributes']);
	header("Location: ".CART_URL);
}

if ($_POST['cart'] == 'add_multiple') 
{
	$quantity = $_POST['quantity'];
	$product_id = $_POST['product_id'];
	$single = $productClass->GetOne($product_id);

	if ($cart->isItemExists($product_id)) 
	{
		$cart->update($product_id, $quantity, [ 
								'title'   => $single['title'],
								'price'   => $single['price'],
								'shipping_cost'   => $single['shipping_cost'],
								'brand'   => $single['brand'],
								'image'   => $single['image'],
								'description'   => $single['description'],
								]
							);
	}else{
		$cart->add($product_id, $quantity, [ 
								'title'   => $single['title'],
								'price'   => $single['price'],
								'shipping_cost'   => $single['shipping_cost'],
								'brand'   => $single['brand'],
								'image'   => $single['image'],
								'description'   => $single['description'],
								]
							);
	}
	header("Location: ".BASE_URL."/product_details.php?id=".$product_id);
}
if ($_GET['cart'] == 'remove') 
{
	$cart->remove($_GET['id']);
	header("Location: ".CART_URL);
}
$cartItems = $cart->getItems();
$cart_total =  $cart->getAttributeTotal('price');
$shipping_cost =  $cart->getAttributeTotal('shipping_cost');
$pay_amount = $shipping_cost+$cart_total;
require 'cart_view.php';