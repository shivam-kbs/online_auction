<script>
window.onload = function(e){

    var $clock = $('#clock'),
        eventTime = moment('2018-03-27 23:00:00', 'YYYY-MM-DD HH:mm:ss').unix(),
        currentTime = moment().unix(),
        diffTime = eventTime - currentTime,
        duration = moment.duration(diffTime * 1000, 'milliseconds'),
        interval = 1000;

    // if time to countdown
    if(diffTime > 0) {

        // Show clock
        // $clock.show();

        var $d = $('#days'),
            $h = $('#hours'),
            $m = $('#minutes'),
            $s = $('#seconds');

        setInterval(function(){

            duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');
            var d = moment.duration(duration).days(),
                h = moment.duration(duration).hours(),
                m = moment.duration(duration).minutes(),
                s = moment.duration(duration).seconds();

            d = $.trim(d).length === 1 ? '0' + d : d;
            h = $.trim(h).length === 1 ? '0' + h : h;
            m = $.trim(m).length === 1 ? '0' + m : m;
            s = $.trim(s).length === 1 ? '0' + s : s;

            // show how many hours, minutes and seconds are left
            $d.text(d);
            $h.text(h);
            $m.text(m);
            $s.text(s);

        }, interval);

    }

};

</script>

<div class="container-fulid">
	   <div class="footer" style="background:  steelblue; color:white;">
		   <div class="row">
			  <div class="col-md-2">
				<h3>Online Auction Whatsapp Alert</h3>
				<br>
	             <p>Save this number 8949305923 in your contacts & Send message "JOIN < Name >" on whatsapp.</p>
	  		   </div>

	  		   <div class="col-md-2">
					<h3>Store</h3>
					<ul class="list-group">
						 <li>Amazon</li>
						 <li>Flipkart</li>
						 <li>Snapdeel</li>
						 <li>Myntra</li>
						 <li>jabong</li>
					</ul>
	  		   </div>

	  		    <div class="col-md-2">
					<h3>Categories</h3>
					<ul class="list-group">
						 <li>Books</li>
						 <li>Cemra</li>
						 <li>Fashion</li>
						 <li>Baby Care</li>
						 <li>Food&Drink</li>
						 <li>Computer Offers</li>
						 <li>Flights Offers</li>
						 <li>Tabltes</li>
					</ul>
	  		   </div>

	  		   <div class="col-md-2">
					<h3>Special Occassions</h3>
					<ul class="list-group">
						 <li>Diwali</li>
						 <li>New Year</li>
						 <li>Udgai</li>
						 <li>Amazon grate indian sale</li>
						 <li>Flipkart big billion day</li>
						 <li>All Festival Offers</li>
					</ul>
	  		   </div>

	  		    <div class="col-md-2">
		  		    <h3>Contact Us</h3>
					<h4>KINDLEBIT SOLUTIONS PVT. LTD.</h4>
					<p>India<br>
					J-7, Second Floor<br>
					Rajiv Gandhi Information and Technology Park<br>
					Chandigarh(UT)-INDIA<br>
					Phone : +91-172-4026970
					</p>
	  		   </div>

	  		   <div class="col-md-2">
	  		   	 <h3>Contact With Us</h3>
	  		   <!-- Add font awesome icons -->
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="https://www.instagram.com" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-pinterest"></a>
	  		   </div>	       
	  		 </div>
	  		<center> <p style="color: white; font-size: 18px;">&#64; COPYRIGHT 2018!! KINDLEBIT SOLUTIONS PVT. LTD.. All Rights Reserved</p></center>
		</div>
    </div>

</body> 
</html>
