<?php $this->load->view('templates/header'); ?> 
    <!-- Stripe JavaScript library -->
<!--     <script type="text/javascript" src="https://js.stripe.com/v2/"></script>    
    
    <script type="text/javascript">
        //set your publishable key
        Stripe.setPublishableKey('pk_test_LVOX6C6Gqz8E2MWXGbs39LXO');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            }
        }
        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script> -->


    
</head>
<body>    

<div class="container" style="margin-top: 40px;">
    <div class="row">   
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">Product Information</div>
                <div class="card-body bg-light">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oops!</strong>
                        <?php echo validation_errors() ;?> 
                    </div>  
                    <?php endif ?>
                    <div id="payment-errors"></div>  
                    <form method="post" id="paymentFrm" enctype="multipart/form-data" action="<?php echo base_url(); ?>Stri/check">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo set_value('name'); ?>" required>
                        </div>  

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="email@you.com" value="<?php echo set_value('email'); ?>" required />
                        </div>

                        <div class="form-group">
                            <input type="number" name="card_num" id="card_num" class="form-control" placeholder="Card Number" autocomplete="off" value="<?php echo set_value('card_num'); ?>" required>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <input type="text" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" value="<?php echo set_value('exp_year'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="cvc" id="card-cvc" maxlength="3" class="form-control" autocomplete="off" placeholder="CVC" value="<?php echo set_value('cvc'); ?>" required>
                                </div>
                            </div>
                        </div>




                        <div class="form-group text-right">
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <button type="submit" id="payBtn" class="btn btn-success">Submit Payment</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Test credentials
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Card </th>
                            <th>Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="card-number"> 4242 4242 4242 4242 </td>
                            <td>Visa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
 </div> 
</body>
</html>