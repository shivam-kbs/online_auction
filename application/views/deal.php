<?php $this->load->view('templates/header'); ?>

<!-- price and specification -->
<div class="container-fulid" style="background-color: white;">
<div class="deal">
<div class="row" ">
	<div class="col-md-4">
		<h1>Apple iPhone X (Space Gray, 64 GB)</h1>
	<div class="img" style="width: 300px; margin-left:40px; margin-top: 30px;">
	<?php
		
	$img_url = $this->user->getImageUrl($prodect_image);
	?>
	<img src="<?php echo $img_url; ?>"  class="img-responsive">
	<h1>Product details</h1>
	<ul>
		<li>14.73 cm Super Retina Screen</li>
		<br>
		<li>The display, with new techniques and technology, follows the curves and its elegantly rounded corners.</li>
		<br>
		<li>Handset, EarPods with Lightning Connector, Lightning to 3.5 mm Headphone Jack Adapter, Lightning to USB Cable, USB Power Adapter, Documentation</li>
	</ul>  
	</div>
	</div>
<!-- biding box -->
<div class="col-md-4" style="border: 1px solid; background: white; margin-top: 20px; height: auto;">
	<div 
	 	class="bidprice" style="float: left">Bid Price<br>Bid Day& Time<br>
	</div>

	<div 
		class="price" style="float: right">₹ 80,000.00<br> Today at 10:am to 1:pm<br>
	</div>

	<br>
	<br>
	<hr>

	<div 
		class="hegiest" style="float: left">Highest Bidder
	</div>

	<div 
		class="namebider" style="float: right">Shivam sharma
	</div>
	<br>
	<hr>

	<div class="manulbit" style="margin-top: 420px;">
		<h4>Manual Bidding and Bidding through Bid Boss Allowed</h4>
		<!-- timer start -->
		<span class="time" style="color: red;">
			<div id="timer">
				<span id="days"></span>days
				<span id="hours"></span>hours
				<span id="minutes"></span>minutes
				<span id="seconds"></span>seconds
			</div>
		</span>
	</div>
	<!-- timer end -->
	<br>
	<p>With each new bid price goes up by 1 rupess and timer start from 10 seconds.</p>

	<div class="bidbox" style="border: 1px solid; height: auto; width: auto; margin-bottom: 10px; ">
		<div class="form-group" style="margin-top: 10px;"> 
			<input type="number" name="" id="" value="" placeholder="ENTER YOUR BID" >
			<div class="form-group" style="margin-top:10px;  ">
				<input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit">
				<h6>Book any amount of coins to your BidBoss. It will use your coins for you within the last second of the auction.</h6>
			</div>
		</div>
	</div>
</div>

<!-- another items -->

<div class="col-md-4" style=" background-color:white; margin-top: 15px; ">
	<div class="alert alert-dismissible alert-warning">
		<button 
			type="button" class="close" data-dismiss="alert">&times;
		</button>
		<h4>Warning!</h4>
		<p>Best check yours self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
	</div>

	<div class="alert alert-dismissible" style="border: 1px solid;">
		<img src="<?php echo base_url(); ?>assets/images/microwave.jpg"  class="img-responsive">
		<div class="bidnow">
			bidding start today 2.pm to 3.pm on words
		</div>
		MICROWAVE<br>
		<span class="biddealPrice">₹ 3000.35</span>
		<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
	</div>

	<div class="alert alert-dismissible" style="border: 1px solid;">
		<img src="<?php echo base_url(); ?>assets/images/ac.jpeg"  class="img-responsive">
		<div class="bidnow">
			bidding start today 2.pm to 3.pm on words
		</div>
		MICROWAVE<br>
		<span class="biddealPrice">₹ 3500.00</span>
		<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
	</div>

	<div class="alert alert-dismissible" style="border: 1px solid;">
		<img src="<?php echo base_url(); ?>assets/images/sony.jpg"  class="img-responsive">
		<div class="bidnow">
			bidding start today 2.pm to 3.pm on words
		</div>
		MICROWAVE<br>
		<span class="biddealPrice">₹ 2000.65</span>
		<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
	</div>
</div>
</div>
</div>
<?php $this->load->view('templates/footer'); ?>