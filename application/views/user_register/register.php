<?php $this->load->view('templates/header'); ?>

  <div class="container">
    <div style="width: 500px; margin:0 auto; ">
      <h1 align="center">SIGNUP</h1>
      <hr>

      <?php //echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

      <?php echo form_open('auth/form/register'); ?>

   
      <div class="form-group">
        <p>NAME</p>
        <input type="text" name="user_name" id="user_name" class="form-control text" placeholder="name" value="<?php echo set_value('user_name'); ?>" > 
        <?php echo form_error('user_name'); ?>           
      </div>

      <div class="form-group">
        <p>EMAIL</p>
        <input type="text" name="user_email" id="user_email" class="form-control text" placeholder="email" value="<?php echo set_value('user_email'); ?>" > 
        <?php echo form_error('user_email'); ?>           
      </div>

      <div class="form-group">
        <p>EMAIL</p>
        <input type="password" name="user_password" id="user_password" class="form-control text" placeholder="password" value="<?php echo set_value('user_password'); ?>" > 
        <?php echo form_error('user_password'); ?>           
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
        <input type="reset" class="btn btn-danger" value="reset" name="reset" id="reset">
      </div>
          </form>
    </div>
  </div>
</body>
</html>