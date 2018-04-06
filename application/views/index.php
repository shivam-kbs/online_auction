<?php $this->load->view('templates/header'); ?>
<!-- show items -->
<div class="container-fulid">
	
<div class="row">

    <?php

    foreach ($prodect_data as $key => $value) 
    {
                
        $prodect_image = $value->prodect_image;
    ?>
    <div class="col-md-3">
        <div class="well">
           <?php
               $image_url =$this->user->getImageUrl($prodect_image);
               $prodect_name =$this->user->getProdectName($prodect_image);
               $category = $this->user->getCategory($prodect_image);
               $price = $this->user->getPrices($prodect_image);

               

           ?>
           
            <img src="<?php echo $image_url; ?>"  class="img-responsive" >  
            <div class="bidnow">
              <h5> <?php echo $prodect_name->prodect_name; ?> </h5>
            </div>
             <?php echo $category->category; ?> 
            <br>
            <span class="biddealPrice"> <?php echo $price->price; ?></span>
            

            <p class="text-center">   <a href="<?php echo base_url('deal');?>"  class="btn btn-primary">VIEW</a></p>
        </div>
    </div>
<?php } ?>    
</div>
</div>

<!-- 
	<div class="col-sm-2">
		<div class="well">
			<img src="<?php //echo base_url(); ?>assets/images/iphonex.jpg"  class="img-responsive">
			<div class="bidnow">
               bidding start today 2.pm to 3.pm on words
			</div>
			Apple iPhone X (Black, 32GB)<br>
			<span class="biddealPrice">₹ 1200.35</span>
			
			<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
		</div>
	</div>

	<div class="col-sm-2">
		<div class="well">
			<img src="<?php //echo base_url(); ?>assets/images/iphonex.jpg"  class="img-responsive">
			<div class="bidnow">
               bidding start today 2.pm to 3.pm on words
			</div>
			Apple iPhone X (Black, 32GB)<br>
			<span class="biddealPrice">₹ 1200.35</span>
			<p class="text-center">   <a href=""  class="btn btn-primary">VIEW</a></p>
		</div>
	</div>

	<div class="col-sm-2">
		<div class="well">
			<img src="<?php// echo base_url(); ?>assets/images/iphonex.jpg"  class="img-responsive">
			<div class="bidnow">
             bidding start today 2.pm to 3.pm on words
			</div>
			Apple iPhone X (Black, 32GB)<br>
			<span class="biddealPrice">₹ 1200.35</span>

			<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
		</div>
	</div>

	<div class="col-sm-2">
		<div class="well">
			<img src="<?php //echo base_url(); ?>assets/images/iphonex.jpg"  class="img-responsive">
			<div class="bidnow">
               bidding start today 2.pm to 3.pm on words
			</div>
			Apple iPhone X (Black, 32GB)<br>
			<span class="biddealPrice">₹ 1200.35</span>
			<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
		</div>
	</div>

	<div class="col-sm-2">
		<div class="well">
			<img src="<?php// echo base_url(); ?>assets/images/iphonex.jpg"  class="img-responsive">
			<div class="bidnow">
               bidding start today 2.pm to 3.pm on words
			</div>
			Apple iPhone X (Black, 32GB)<br>
			<span class="biddealPrice">₹ 1200.35</span>
			<p class="text-center">   <a href="#"  class="btn btn-primary">VIEW</a></p>
		</div>
	</div>
</div> 
</div> -->
 <!-- How IT WORKK -->
<div class="container-fulid">
 	<div class="demo">
 		<h1>
 			<strong>How It Is Work</strong>
 		</h1>
 		<div class="row">
 			<div class="col-sm-3" style="margin-left: 20px;">
 				<img src="<?php echo base_url(); ?>assets/images/regis.png"  class="img-responsive">
 				<h2>REGISTER</h2>
 				<h5>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</h5>
  			</div>

  			<div class="col-sm-3" style="margin-left: 20px;">
  			 	<img src="<?php echo base_url(); ?>assets/images/online.jpg"  class="img-responsive">
 				<h2>Buy Or Bid</h2>
 				<h5>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</h5>
  			</div>

  			<div class="col-sm-3" style="margin-left: 20px;">
  			 	<img src="<?php echo base_url(); ?>assets/images/submit.png"  class="img-responsive">
 				<h2>Submit Your Bid</h2>
 				<h5>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</h5>
  			</div>

  			<div class="col-sm-2" style="margin-left:">
  			 	<img src="<?php echo base_url(); ?>assets/images/win.jpeg"  class="img-responsive">
  			 	<br>
  			 	<br>
 				<h2>Win</h2>
 				<h5>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</h5>
  			</div>
 		</div>
    </div>
 </div>

<!-- join the winners -->

 <div class="container">
	<div class="photo">
		<center><h1>Join The Winners</h1></center>
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win1.jpeg"  class="img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win2.jpeg"  class="img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win3.jpeg"  class="img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win4.jpeg"  class="img-responsive">
			</div>
			
		</div>


		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win5.jpeg"  class="img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win6.jpeg"  class="img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win7.jpeg"  class="img-responsive">
			</div>

			<div class="col-sm-3">
				<img src="<?php echo base_url(); ?>assets/images/win8.jpeg"  class="img-responsive">
			</div>
			
		</div>


	</div>
	
</div>

<?php $this->load->view('templates/footer'); ?>
	

 
