<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Client;
use App\Models\Booking;
use App\Models\User;
use App\Models\Ratings;
use App\Models\Services;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Customer;
use DB;
use Hash;
use Session;

class ThemeplateController extends Controller
{
    public function landpage()
    {
        $datahome = array();
      
        if(Session::has('loginId')){
            $datahome = Client::where('client_id', '=', Session::get('loginId'))->first();
           
        }
        return view('frontend.landing', compact('datahome'));
    }
    public function clientprofile(Request $request)
    {
        $clients = Client::with('services')->get();
        

        //$booking = Booking::where('client_id', '=', Session::get('loginId'))->get();
        $booking = Booking::select("*")
                            ->join("clients", "bookings.client_id", "=", "clients.client_id")
                            ->join("services", "bookings.Package", "=", "services.services_id")
                            ->where("clients.client_id", "=", Session::get('loginId'))
                            ->get();

        $data = array();
        
        if(Session::has('loginId')){
            $data = Client::where('client_id', '=', Session::get('loginId'))->first();
            
        }
        return view('frontend.clientpage', compact('data', 'clients', 'booking'));
    }
    public function admindashboard(Request $request){
        $booking =  DB::table('bookings')
        ->join('clients', 'bookings.client_id', '=', 'clients.client_id')
        ->join('services', 'bookings.Package', '=', 'services.services_id')
        ->get();
                    
        $admindata = array();
        if(Session::has('adminId')){
            $admindata = User::where('admin_id', '=', Session::get('adminId'))->first();
        }
        return view('frontend.adminpage', compact('admindata', 'booking'));
    }
    public function tac()
    {
        return view('frontend.tac');
    }
    
    public function registerpage()
    {
        return view('frontend.register');
    }
    public function loginpage()
    {
        return view('frontend.login');
    }
    public function loginAdmin()
    {
        return view('frontend.loginAdmin');
    }
    public function services(Request $request)
    {
       $services = DB::table('services')->get();
       
        return view('frontend.services', compact('services'));
    }
    public function ratings(Request $request)
    {
       
       
        return view('frontend.ratings');
    }
    public function profile()
    {
        $dataclient = array();
      
        if(Session::has('loginId')){
            $dataclient = Client::where('client_id', '=', Session::get('loginId'))->first();
           
        }
        return view('frontend.clientprofile', compact('dataclient'));
    }
    public function updateprofile(Request $request)
    {
       
        $fn = $request->Firstname;
        $mn = $request->Middlename;
        $ln = $request->Lastname;
        $contact = $request->Contact;
        $add = $request->Address;
        $email = $request->Email;
        
     
        DB::update('update clients set Firstname = ?, Middlename = ?, Lastname = ?, Contact = ?, Address = ?, Email = ? where client_id = ?', [$fn, $mn, $ln, $contact, $add, $email, $request->client_id]);
        return back();
       }


    public function booking()
    {
        $data = array();
        $services = DB::table('services')->get();
        if(Session::has('loginId')){
            $data = Client::where('client_id', '=', Session::get('loginId'))->first();
           
        }
        return view('frontend.booking', compact('data', 'services'));
    }


    public function registerclient(Request $request)
    {
      
       $client = new Client();
       $client->Firstname = $request->Firstname;
       $client->Middlename = $request->Middlename;
       $client->Lastname = $request->Lastname;
       $client->Contact = $request->Contact;
       $client->Address = $request->Address;
       $client->Email = $request->Email;
       $client->Username = $request->Username;
       $client->Password = Hash::make($request->Password);
       $validate = Client::where('Username', '=', $request->Username)->first();
       $validatePass = ($request->Password != $request->conPassword ? false  : true);
      
        
        if($validate){
            return back()->with('fail', 'This Username has been taken please try another' );
        }else if(!$validatePass){
                return back()->with('fail', 'Your Password Does not Match' );
            }
        
       else{

       

            $res = $client->save();
            return redirect('signin');
        
       }
    
    }


    public function loginclient(Request $request){
       

        $client1 = Client::where('Username', '=', $request->Username)->first();

        if($client1){
            if(Hash::check($request->Password, $client1->Password)){
                $request->session()->put('loginId', $client1->client_id);
               
                return redirect('profile');
            }else{
                return back()->with('fail', 'Password is Incorrect');
            }
        
        }
        else{
            return back()->with('fail', 'This Username is not registered');
        }
    }


    public function adminlogin(Request $request){
        $user = User::where('name', '=', $request->name)->first();
        if($user){
            if(User::where('password', '=', $request->password)){
                $request->session()->put('adminId', $user->admin_id);
               
                return redirect('admindashboard');
            }else{
                return back()->with('fail', 'Password is Incorrect');
            }
        }
        else{
            return back()->with('fail', 'This Username is not registered');
        }
    }


    public function dashboard(){
        return "Welcome";
    }


    public function landing(){
        return "Welcome";
    }


    public function addbooking(Request $request){
        $services = DB::table ('services')->get();
        $bookings = new Booking();
        
        
        $bookings->Date_start = $request->Date_start;
        $bookings->Date_end = $request->Date_end;
        $bookings->Time = $request->Time;
        $bookings->client_id = $request->client_id;
        $bookings->Package = $request->Package;
        $bookings->appointment_status = $request->appointment_status;
        $Datestart=$request->Date_start;
        $Dateend=$request->Date_end;
        $terms = $request->term_con;
        $status = $bookings->appointment_status = "Pending";
        $data = array();
        if(Session::has('loginId')){
            $request->session()->put('bookingId', $bookings->id);

            $check = DB::select("SELECT count(*) as cnt FROM bookings WHERE (Date_start BETWEEN '$Datestart' AND '$Dateend') OR 
            (Date_end BETWEEN '$Datestart' AND '$Dateend') OR ('$Datestart' BETWEEN Date_start AND Date_end) OR ('$Dateend' BETWEEN Date_start AND Date_end)");
           // echo $check[0]->cnt;
           if($terms === '1')
           {
           
                    if($check[0]->cnt == 0 ){
                    $data = Client::where('client_id', '=', Session::get('loginId'))->first();
                    
                    $bookings->save();
                   
                    //Session::put('payment_secretkey');
                    return view('frontend.booking', compact('data', 'services'))->with('success', 'Booking Successfully Added');
                    }
                    else{
                        return back()->with('fail', 'This Date is not available!' );
                }
                
            }
            else{
                return back()->with('fail', 'You didnt accept the Terms and Condition' );
            }
            
        }
        
       else{
        return back()->with('fail', 'You dont have an Account Please Register First' );
        
       }
    }

    public function appointmentdetails(Request $request, $id){
      
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
    public function payment(Request $request){
        $bookings = new Booking();
        $dp = $request->downpayment;

      

        DB::update('update bookings set DownPayment = ? where id = ?', [$dp, $request->id]);
        
        return redirect('profile');
        
        return view();
    }
    //public function checkout(Request $request){
     

      //\Stripe\Stripe::setApiKey(config('stripe.sk'));
      //$dpa = $request->downpayment;
     // $package = $request->services_name;
      
      //$session = \Stripe\Checkout\Session::create([
      //'line_items' => [
        //  [
          //    'price_data' => [
            //      'currency' =>'php',
             //     'product_data' =>[
               //       'name'=>  $package,
                 // ],
                  //'unit_amount' => $dpa * 100,
              //],
              //'quantity'=> 1,
          //],
      //],
      //'mode'  =>'payment',
      //'success_url' => route('success'),
      //'cancel_url' => route( 'showpayment'),

      
      //]);

      //return redirect()->away($session->url);
     
      
    //}
    public function success(Request $request)
    {   
        $booking = new Booking;
        $data = DB::table('clients')->get();
        $booking = \Stripe\Stripe::setApiKey(config('stripe.pk'));
        $dpa = $request->downpayment;

      

        DB::update('update bookings set DownPayment = ? where id = ?', [$booking, $request->id]);
        
        return redirect('profile');
    }
    public function updateservices(Request $request)
    {
        $pack = $request->services_name;
        $price = $request->price;
        $desc = $request->description;
        
        DB::update('update services set services_name = ?, price = ?, description = ? where services_id = ?', [$pack, $price, $desc, $request->services_id]);
       return back();
       
    }
    public function deleteservices(Request $request)
    { 
 
    }

    public function adminapp(Request $request)
    {
        $admindata = array();
        if(Session::has('adminId')){
            $admindata = User::where('admin_id', '=', Session::get('adminId'))->first();
        }
        return view('frontend.adminapp', compact('admindata'));
    }

    public function adminab(Request $request)
    {
        $admindata = array();
        if(Session::has('adminId')){
            $admindata = User::where('admin_id', '=', Session::get('adminId'))->first();
        }
        return view('frontend.adminab', compact('admindata'));
    }

    public function adminpf(Request $request)
    {
        $admindata = array();
        if(Session::has('adminId')){
            $admindata = User::where('admin_id', '=', Session::get('adminId'))->first();
        }
        return view('frontend.adminpf', compact('admindata'));
    }

    public function adminhome(Request $request)
    {
        $admindata = array();
        if(Session::has('adminId')){
            $admindata = User::where('admin_id', '=', Session::get('adminId'))->first();
        }
        return view('frontend.adminhome', compact('admindata'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('signin');
        }   
    }
    public function insertservices()
    {

    }
    public function search(Request $request){
            DB::table('services')->get();
          
            $search = new Services();
            $search = new Booking();
            
            $search = services::where('services_name', '!=', $request->search)->first();

            if(!$search){
                $search->session()->put('services_id', $search->services_id);
                return back()->with('fail', 'Does not Exist!' );
            }
            else{
                return back();
            }
    }

}