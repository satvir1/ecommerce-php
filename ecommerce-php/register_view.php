	<div class="span9">
    
	<h3> Registration</h3>	
	<div class="well">
	<div>
		<?php if (!empty($errors)): ?>
						<ul style="color: red; font-weight: bold;">
					<?php foreach ($errors as $error): ?>
					<li><?php echo $error; ?></li>
					<?php endforeach ?>		
						</ul>
		<?php endif ?>
	</div>
	<form class="form-horizontal" method="post">
		<h4>Your personal information</h4>
		
		<div class="control-group">
			<label class="control-label" for="first_name">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="first_name" value="<?php echo $_POST['first_name'] ?>" name="first_name" placeholder="First Name" required="required">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="last_name">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="last_name" value="<?php echo $_POST['last_name'] ?>" name="last_name" placeholder="Last name" required="required">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="email">Email <sup>*</sup></label>
			<div class="controls">
			  <input type="email" id="email" value="<?php echo $_POST['email'] ?>" name="email" placeholder="Email" required="required">
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="password">Password <sup>*</sup></label>
			<div class="controls">
			  <input required="required" type="password" id="password" value="<?php echo $_POST['password'] ?>" name="password" placeholder="Password">
			</div>
	  	</div>	  
	  	<div class="control-group">
			<label class="control-label" for="confirm_password">Confirm password <sup>*</sup></label>
			<div class="controls">
			  <input required="required" type="password" id="confirm_password" value="<?php echo $_POST['confirm_password'] ?>" name="confirm_password" placeholder="Confirm Password">
			</div>
	  	</div>	  
		<h4>Shipping address</h4>
		
		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input required="required" type="text" value="<?php echo $_POST['address'] ?>" name="address" id="address" placeholder="Adress"/> <span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address2">Address (Line 2)<sup>*</sup></label>
			<div class="controls">
			  <input required="required" type="text" value="<?php echo $_POST['address2'] ?>" name="address2" id="address2" placeholder="Adress line 2"/> <span>Apartment, suite, unit, building, floor, etc.</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input required="required" type="text" value="<?php echo $_POST['city'] ?>" name="city" id="city" placeholder="city"/> 
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input required="required" type="text" value="<?php echo $_POST['postcode'] ?>" name="postcode" id="postcode" placeholder="Zip / Postal Code"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="country">Country<sup>*</sup></label>
			<div class="controls">
			<select  name="country" id="country" required="required" >
				<option value="">-</option>
				<option <?php echo ($_POST['country"'] == "USA") ? "selected" : ""; ?> value="USA">USA</option>
				<option <?php echo ($_POST['country"'] == "Canada") ? "selected" : ""; ?> value="Canada">Canada</option>
			</select>
			</div>
		</div>			
	<p><sup>*</sup>Required field	</p>
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" value="Register" /> &nbsp;&nbsp;&nbsp;<a href="login.php">Login</a>
			</div>
		</div>		
	</form>
</div>
</div>
