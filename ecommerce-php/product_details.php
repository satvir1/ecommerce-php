<?php include 'header.php';
include 'require.php';
if (!empty($_GET['id'])) {
	$productClass = new Products();
	$singleProduct = $productClass->GetOne($_GET['id']);
	$cart = new Cart([  'cartMaxItem' => 0, 'itemMaxQuantity' => 99, 'useCookie'=> false, ]);
	$item =  $cart->getItem($_GET['id']);
}else{
	header("Location: ".BASE_URL);
}
//echo "<pre>"; print_r($singleProduct); echo "</pre>"; 
?>
<!-- Sidebar ================================================== -->
<?php require 'sidebar.php'; ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="<?=$singleProduct['image'];?>" title="<?=$singleProduct['title'];?>">
				<img src="<?=$singleProduct['image'];?>" style="width:100%" alt="<?=$singleProduct['title'];?>">
            </a>
            <?php /******************* ?>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""></a>
                   <a href="themes/images/products/large/f3.jpg"> <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg"> <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn"><i class="icon-print"></i></span>
				<span class="btn"><i class="icon-zoom-in"></i></span>
				<span class="btn"><i class="icon-star"></i></span>
				<span class="btn"><i class=" icon-thumbs-up"></i></span>
				<span class="btn"><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
            <?php /*******************/ ?>
			</div>
			<div class="span6">
				<h3><?=$singleProduct['title'];?></h3>
				<!-- <small>- (14MP, 18x Optical Zoom) 3-inch LCD</small> -->
				<hr class="soft">
				<form class="form-horizontal qtyFrm" action="cart.php" method="post">
					<input type="hidden" name="cart" value="add_multiple">
					<input type="hidden" name="product_id" value="<?=$singleProduct['id'];?>">
				  <div class="control-group">
					<label class="control-label"><span>$<?=$singleProduct['price'];?></span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty." id="quantity" name="quantity" value="<?=$item['quantity']?>">
					  <button type="submit" class="btn btn-medium btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				
				<!-- <hr class="soft"> -->
				<!-- <h4>100 items in stock</h4> -->
				<hr class="soft clr">
				<p><?=$singleProduct['description'];?></p>
				<br class="clr">
			<a href="#" name="detail"></a>
			<hr class="soft">
			</div>
	</div>
</div>
<?php include 'footer.php'; ?>