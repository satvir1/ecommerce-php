<?php 
include 'model\products.php';
$productClass = new Products();
$products =  $productClass->GetAll();

function getProduct($id)
{
	return $products->GetOne($id);
}