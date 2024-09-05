<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\StripeService;
use App\Models\StripeCustomer;

class FetchStripeCustomers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stripe:fetch-stripe-customers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch customers from Stripe and store them in the local database';
    protected $stripeService;
    /**
     * Execute the console command.
     */
    public function __construct(StripeService $stripeService)
    {
        parent::__construct();
        $this->stripeService = $stripeService;
    }
    public function handle()
    {
        $customers = $this->stripeService->getCustomers();

        foreach($customers->data as $customer){
            Client::updateOrCreate(
                ['client_id' => $customer->client_id]
                
            );
        }
        $this->info('Customers fetched and stored successfully');
    }
}
