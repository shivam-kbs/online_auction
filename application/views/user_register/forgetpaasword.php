	<div class="container" style="background: #99e6ff; width: 400px; height: 350px;">
    	
      		<h1 align="center">FORGET PASSWORD</h1>
     	 	<hr>
     	 	<?php echo form_open('auth/form/recover_password'); ?>
				<!-- <div class="form-group">
					<p>User Name</p>
					<input type="text" name="name" id="name" value="" class="form-control" placeholder="name">
				</div> -->
				<div class="form-group">
					<p>User Email</p>
					<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="email">
					<?php echo form_error('email'); ?>
				</div>
                <br>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="submit" name="forget" id="submit">
				</div>
				<hr/>					
			</form>	
    </div>
</body>
</html>
