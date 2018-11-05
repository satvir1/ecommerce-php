<?php 
/**
 * Orders
 */
class Orders
{
	
	function __construct()
	{
		$this->db = new Database();
	}

	function GetUserOrders($user_id)
	{
		$this->db->Query("SELECT * FROM orders WHERE user_id ='$user_id'");
		return $this->db->Rows();
	}
	function GetOrderItems($order_id)
	{
		$this->db->Query("SELECT * FROM order_items WHERE order_id ='$order_id'");
		return $this->db->Rows();
	}
	function lastOrderID()
	{
		$this->db->Query("SELECT * FROM orders ORDER BY order_id DESC LIMIT 1");
		$order = $this->db->Rows();
		return $order[0]['order_id'];
	}

	function AddOrder($cart,$pay_amount,$userID=0)
	{
		$order = "INSERT INTO `orders` (`order_id`, `order_price`, `user_id`, `order_on`) VALUES (NULL, $pay_amount, $userID, CURRENT_TIMESTAMP);";
		$this->db->Query($order);
		$order_id = $this->lastOrderID();
		// $order_id = 20;
		if (!empty($cart)) {
			foreach ($cart as $key => $item) {
				$this->addOrderItems($order_id, $item[0]);
			}
		}
	}
	function addOrderItems($order_id='', $item='')
	{	
		$id  = $item['id'];
		$quantity  = $item['quantity'];
		$item = "INSERT INTO `order_items` (`item_id`, `order_id`, `item_quantity`, `product_id`) VALUES (NULL, $order_id, $id, $quantity);";
		$this->db->Query($item);
	}

}
