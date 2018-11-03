<?php
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );

session_start();
require 'core/model/products.php';
require 'core/libraries/class.Cart.php';
require 'core/model/orders.php';

define('BASE', '/ecommerce');
define('BASE_URL', "http://".$_SERVER['HTTP_HOST'].BASE);
define('CART_URL', "http://".$_SERVER['HTTP_HOST'].BASE."/cart.php");
