<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentProcess()
    {
    	// Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		\Stripe\Stripe::setApiKey("Replace with your secreet key");

		// Token is created using Checkout or Elements!
		// Get the payment token ID submitted by the form:
		$token = $_POST['stripeToken'];
		$charge = \Stripe\Charge::create([
		    'amount' => 10000,
		    'currency' => 'usd',
		    'description' => 'Example charge',
		    'source' => $token,
		]);
    }

    public function getPayment()
    {
    	echo 'test';
    }
}
