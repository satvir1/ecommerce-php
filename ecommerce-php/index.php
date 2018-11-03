<?php include 'header.php';
include 'require.php';
$productClass = new Products();
$products =  $productClass->GetAll();
?>
<!-- Sidebar ================================================== -->
<?php require 'sidebar.php'; ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
		<h4>Featured Products </h4>
		  <ul class="thumbnails">
			<?php foreach ($products as $product) { ?>
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.php?id=<?=$product['id']; ?>"><img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>"/></a>
						<div class="caption">
						  <h5><?= $product['title']; ?></h5>
						  <p> <?= $product['description']; ?> </p>
						 <h4 style="text-align:center">
						 	<a class="btn" href="product_details.php?id=<?=$product['id']; ?>"> <i class="icon-zoom-in"></i></a> 
					 		<a class="btn" href="cart.php?cart=add_single&id=<?= $product['id']; ?>">Add to <i class="icon-shopping-cart"></i></a> 
					 		<a class="btn btn-primary" href="#">$<?= $product['price']; ?></a></h4>
						</div>
					  </div>
					</li>
			<?php  } ?>
		  </ul>	
		  </div>
<?php include 'footer.php'; ?>