<div class="span9">
	<h3> Login</h3>	
	<hr class="soft"/>	
	<div class="row">
		<div class="span4">
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
			<form method="post">
			  <div class="control-group">
				<label class="control-label" for="email">Email</label>
				<div class="controls">
				  <input class="span3"  type="email" name="email" id="email" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="password">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="password" id="password" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn btn-large btn-success">Sign in</button> &nbsp;&nbsp;&nbsp;<a href="register.php">Register</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
</div>