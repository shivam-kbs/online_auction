<?php $this->load->view('templates/header'); ?>
	<div class="container">
    	<div style="width: 500px; margin:0 auto; ">
      		<h1 align="center">LOGIN</h1>
     	 	<hr>
			<?php echo form_open('auth/form/login'); ?>
				<div class="form-group">
					<p>user email</p>
					<input type="email" name="user_email" id="user_email" value="<?php echo set_value('user_email'); ?>" class="form-control" placeholder="user_email">
					<?php echo form_error('user_email'); ?>
				</div>
				<div class="form-group">	
					<p>password</p>
					<input type="password" name="user_password" id="user_password" value="<?php echo set_value('user_password'); ?>" class="form-control" placeholder="password">
					<?php echo form_error('user_password'); ?>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="login" name="login" id="login">
				</div>
				<hr/>					
			</form>
				<div class="user_password">
					<a href="<?php echo base_url('auth/form/forget');?>">ForgetPassword</a>
				</div>	
		</div>
    </div>
</body>
</html>
