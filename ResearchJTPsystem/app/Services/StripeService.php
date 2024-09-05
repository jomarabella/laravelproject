<?php namespace App\Services;

use Stripe\Stripe;
use Stripe\Customer;

class StripeService
{
    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SK'));
        $this->stripe = new Customer(env('STRIPE_SECRET'));
    }

    public function getCustomers()
    {
        return $this->stripe->customers->retrive($customerId);
        
    }
}