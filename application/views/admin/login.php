<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<div class="container">
    	<div style="width: 500px; margin:0 auto; ">
      		<h1 align="center">Admin</h1>
     	 	<hr>
     	 	<!-- controal -->
			<?php echo form_open('admin/Admin_login/check'); ?>
				<div class="form-group">
					<p> email</p>
					<?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'email', 'value' => set_value('email')]); ?>
				</div>
				<?php echo form_error('email'); ?>
				<div class="form-group">	
					<p>password</p>
					<?php echo form_input(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'password', 'value' => set_value('password')]); ?>
				</div>
				<?php echo form_error('password'); ?>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="login" name="login" id="login">
				</div>
				<hr/>					
			</form>
					
		</div>
    </div>
</body>
</html>
