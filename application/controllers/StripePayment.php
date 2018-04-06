<?php
use \Stripe\Stripe;
use \Stripe\Charge;
use \Stripe\Customer;


defined('BASEPATH') OR exit('No direct script access allowed');

class StripePayment extends CI_Controller 
{
	public function __construct() {
	parent::__construct();
	}
	
    public function index()
	{
	return  $this->load->view('payment');
	}

// 	public function checkout(){
		
// 		$token = $_POST['stripeToken'];
// 		// $token      = $_POST['stripeToken'];{
// 		try{
// 			require_once('vendor/autoload.php');
// 			\Stripe\Stripe::setApiKey(config_item('stripe_sec_key'));

// 			$charge = \Stripe\Charge::create(array(
// 				  "amount" => 999,
// 				  "currency" => "usd",
// 				  "source" => $token,
// 				  "description" => "Bidding charge",
// 			));
// 			echo "payment done";
// 		}

// 		catch (\Stripe\Error\card $e){
// 			$error = $e->getmassage();
// 			echo "$error";

// 		}

// 	}
 }
