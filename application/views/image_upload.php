
<?php echo $error;?>
<?php echo form_open_multipart('Image_upload/do_upload'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<h1> Product Details</h1>
<div class="container">
<div class="form-group">
	<label class="control-label" > Product Name</label>
	<input type="text"  class="form-control" name="prodect_name" id="prodect_name" placeholder="prodect_name">
</div>
<div class="form-group">
	<label class="control-label" > Product Prices</label>
	<input type="number"  class="form-control" name="price" id="price" placeholder="price">
</div>
<div class="form-group">
	<label class="control-label" > Product Category</label>
	<input type="text" name="category" class="form-control" id="category" placeholder="category">
</div>
<div class="form-group">
	<label class="control-label" > Image</label>
	<input type="file" name="userfile" id="userfile">
</div>
<div class="btn-group">
<input type="submit" name="upload" class="btn btn-success" id="upload" value="upload">
</form>





