<?php
	include 'header.php';
	include 'require.php';
	$Orders = new Orders();
	$productClass = new Products();
	
	$userOrders = $Orders->GetUserOrders($_SESSION['user_id']);
	if (!empty($userOrders)) {
		foreach ($userOrders as &$order) 
		{
			$items = $Orders->GetOrderItems($order['order_id']);
			foreach ($items as &$item) {
				$product = $productClass->GetOne($item['product_id']);
				$item['title'] = $product['title'];
				$item['price'] = $product['price'];
				$item['image'] = $product['image'];
			}	
			$order['items'] = $items;
		}
	}

?>

		<section id="Table">
			<div class="page-header">
				<h3>My Orders</h3>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Order Date</th>
								<th>Order price</th>
								<th>Items</th>
								<th>Order Details</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($userOrders)){
							 foreach ($userOrders as $ordeItem){ 
							 	?>	
								<tr>
									<td><?=$ordeItem['order_on']?></td>
									<td>$<?=$ordeItem['order_price']?></td>
									<td><?=count($ordeItem['items'])?></td>
									<td> 
										<table class="table table-bordered">
											<tr>
												<th>QTY</th>
												<th>Product</th>
												<th>Price</th>
												<th>Image</th>
											</tr>
											<?php 
											foreach ($ordeItem['items'] as $product) {?>
											<tr>
												<td><?=$product['item_quantity'];?></td>
												<td><?=$product['title'];?></td>
												<td><?=$product['price'];?></td>
												<td><img style="max-width: 100px;" src="<?=$product['image'];?>"></td>
											</tr>
											<?php  } ?>
										</table>
									</td>
								</tr>
								<?php }} ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	
<?php include 'footer.php'; ?>