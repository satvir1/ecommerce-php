<?php include 'header.php';?>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php require 'sidebar.php'; ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
		<?php if (!empty($cartItems)){ ?>
		<h4>Cart Items </h4>

		  <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Shipping cost</th>
				  <th>Price</th>
				</tr>
              </thead>
              <tbody>

              	<?php if (!empty($cartItems)): ?>
              		<?php foreach ($cartItems as $item): 
              			$item = $item[0];
              			?>
                <tr>
                  <td> <img width="60" src="<?php echo $item['attributes']['image']; ?>" alt=""></td>
                  <td><?php echo $item['attributes']['title']; ?></td>
				  <td>
					<div class="input-append">
							<?php // echo $item['attributes']['brand']; ?>
							<button class="btn" type="button"><?php echo $item['quantity']; ?></button>
							<a href="cart.php?cart=remove_one&id=<?php echo $item['id']; ?>" ><button class="btn" type="button"><i class="icon-minus"></i></button></a>
							<a href="cart.php?cart=add_one&id=<?php echo $item['id']; ?>" ><button class="btn" type="button"><i class="icon-plus"></i></button></a>
							<a href="cart.php?cart=remove&id=<?php echo $item['id']; ?>" ><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button></a>
					</div>
				  </td>
                  <td>$<?php echo $item['attributes']['price']; ?></td>
                  <td>$<?php echo $item['attributes']['shipping_cost']; ?></td>
                </tr>				
              		<?php endforeach ?>
              	<?php endif ?>
				 <tr>
                  <td colspan="6" style="text-align:right"> Total Price:	</td>
                  <td> $<?php echo $cart_total; ?></td>
                </tr>
                <tr>
                  <td colspan="6" style="text-align:right"> Shipping cost:	</td>
                  <td> $<?php echo $shipping_cost; ?></td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL ($<?php echo $cart_total; ?> + $<?php echo $cart_total; ?>) = </strong></td>
                  <td class="label label-important" style="display:block"> <strong> $<?php echo $pay_amount; ?> </strong></td>
                </tr>
				</tbody>
            </table>
            <div>
            	
            	<a href="cart.php?cart=clear" class="btn btn-large btn-warning pull-left"><i class="icon-arrow-left"></i> Clear cart</a>
            	<a href="order.php" class="btn btn-large btn-success pull-right">Next <i class="icon-arrow-right"></i></a>
            </div>
            	<?php }else{?>
            		<h3>No items in cart please start adding products from 	<a class="btn btn-small btn-success" href="<?php echo BASE_URL; ?>"> product page </a> </h3>
            	<?php } ?>
		  </div>
	</div>
	</div>
	</div>
</div>
<?php include 'footer.php'; ?>