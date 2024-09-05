<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;  
use App\Models\Booking;
use App\Models\User;
use App\Models\Services;
use App\Models\Services_image;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Customer;
use DB;
use Hash;
use Session;

class AdminController extends Controller
{
    public function servicespage_admin(Request $request){
        $admin = array();
        if(Session::has('adminId')){
            $admin = User::where('admin_id', '=', Session::get('adminId'))->first();
        }
        return view('frontend.create_updateservices', compact('admin'));
    }

    public function view_servicespage_admin(Request $request){

      

        $admin = User::with('services1')->get();
        $services = DB::table('services')->get();
        //$booking = Booking::where('client_id', '=', Session::get('loginId'))->get();
       
        $service = Services::select("*")
                            ->join("users", "services.admin_id", "=", "users.admin_id")
                            ->where("services.services_id", "=", Session::get('adminId'))
                            ->get();
                           
        $data1 = array();
       
        if(Session::has('adminId')){
            $data1 = User::where('admin_id', '=', Session::get('adminId'))->first();
            
        }
       
        return view('frontend.Admin_view_services', compact('service', 'data1', 'admin', 'services'));
    }
  

   
    public function addservices( Request $request){
        
        $services = new Services();
        $services->admin_id = $request->admin_id;
        $services->services_name = $request->Package;
        $services->price = $request->Price;
        $services->description = $request->Description;
        
        
       
        $validate = Services::where('services_name', '=', $request->Package)->first();
       
        
        if($validate){
            return back()->with('success', 'This Services is already exist' );
           
        }
       else{
            $res = $services->save();
            return back()->with( 'Services has Successfully added');
            return view('frontend.create_updateservices')->with('success', 'Booking Successfully Added');
        
       }
    
    }
    public function logoutAdmin(){
        if(Session::has('adminId')){
            Session::pull('adminId');
            return redirect('loginAdmin');
        }
    }


    //Payment
    public function showpayment(Request $request){
       
        
        return view('frontend.admin_AppD');
    }
    public function admin_Apptdetails(Request $request, $id){
      
        $clients = Client::with('services')->get();
      
        //$booking = Booking::where('client_id', '=', Session::get('loginId'))->get();
        $booking = Booking::select("*")
                            ->join("clients", "bookings.client_id", "=", "clients.client_id")
                            ->join("services", "bookings.Package", "=", "services.services_id")
                            ->where("bookings.id", "=", $id)
                            ->get();
          
        $data = array();
 
        if(Session::has('loginId')){
            $data = Client::where('client_id', '=', Session::get('loginId'))->first();
           
            
        }
        return view('frontend.appointmentdetails', compact('data', 'clients', 'booking', 'id'));
      
    }
    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $amount = $request->amount;
        $package = $request->services_name;
        
        $session = \Stripe\Checkout\Session::create([
        'line_items' => [
            [
                'price_data' => [
                    'currency' =>'php',
                    'product_data' =>[
                        'name'=> $package,
                    ],
                    'unit_amount' => $amount * 100,
                ],
                'quantity'=> 1,
            ],
        ],
        'mode'  =>'payment',
        'success_url' => route('success'),
        'cancel_url' => route( 'showpayment'),

        
        ]);

        return redirect()->away($session->url);
    }
    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        return view('frontend.payment');
    }



    public function admin_app_details(Request $request, $id)
    {
        $clients = Client::with('services')->get();
      
        //$booking = Booking::where('client_id', '=', Session::get('loginId'))->get();
        $booking = Booking::select("*")
                            ->join("clients", "bookings.client_id", "=", "clients.client_id")
                            ->join("services", "bookings.Package", "=", "services.services_id")
                            ->where("bookings.id", "=", $id)
                            ->get();
          
        $data = array();
 
        if(Session::has('adminId')){
            $data = User::where('admin_id', '=', Session::get('adminId'))->first();
           
            
        }
        return view('frontend.admin_AppD', compact('data', 'clients', 'booking', 'id'));
    }

    public function addpayment(Request $request){
        $bookings = new Booking();
        $fp = $request->fullpayment;
        $appstat = $request->appstat;

      

        DB::update('update bookings set Fullpayment = ?, appointment_status = ? where id = ?', [$fp, $appstat, $request->id]);
        
        return redirect('admindashboard');
        
        return view();
    }

   
}