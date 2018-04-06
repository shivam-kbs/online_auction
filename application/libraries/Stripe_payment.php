<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripe_payment
{

	public function __construct()
	{
		\Stripe\Stripe::setApiKey(config_item('stripe_sec_key'));
	}


	public function index()
	{
		 $this->load->view('payment');
		
    }

	public function createCustomer()
	{
		$cus = \Stripe\Customer::create(array(
		  "description" => "Customer for avery.jackson@example.com",
		  "email" => 'testing@gmail.com'
		));

		print_r($cus);
	}	

	public function createMerchant()
	{
		$cus = \Stripe\Account::create(array(
		  "type" => "custom",
		  "country" => "US",
		  "email" => "boasdb12@example.com"
		));
		return $cus;
		// print_r($cus);
	}	
	

    	public function check()
	{
		//check whether stripe token is not empty
		// if(!empty($_POST['stripeToken']))
		// {
			//get token, card and user info from the form
			// $token  = $_POST['stripeToken'];
// 			$name = $_POST['name'];
// 			$email = $_POST['email'];
// 			$card_num = $_POST['card_num'];
// 			$card_cvc = $_POST['cvc'];
// 			$card_exp_month = $_POST['exp_month'];
// 			$card_exp_year = $_POST['exp_year'];
			
// 			include Stripe PHP library
// 			require_once APPPATH."third_party/stripe/init.php";
			
// 			//set api key
// 			$stripe = array(
// 			  "secret_key"      => "YOUR_SECRET_KEY",
// 			  "publishable_key" => "YOUR_PUBLISHABLE_KEY"
// 			);
			
// 			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			
// 			//add customer to stripe
// 			$customer = \Stripe\Customer::create(array(
// 				'email' => $email,
// 				'source'  => $token
// 			));
			
// 			//item information
// 			$itemName = "Stripe Donation";
// 			$itemNumber = "PS123456";
// 			$itemPrice = 50;
// 			$currency = "usd";
// 			$orderID = "SKA92712382139";
			
// 			//charge a credit or a debit card
// 			$charge = \Stripe\Charge::create(array(
// 				'customer' => $customer->id,
// 				'amount'   => $itemPrice,
// 				'currency' => $currency,
// 				'description' => $itemNumber,
// 				'metadata' => array(
// 					'item_id' => $itemNumber
// 				)
// 			));
			
    
// 		}
// 	}
    
 } 
} 