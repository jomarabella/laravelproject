<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   
</head>
<style>
                    body{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-image: url("assets/img/header-bg.jpg");
                      
                        background-position: center;

                    
                        
                    }
                    
                    .container1{
                        background: transparent ;
                        border: 2px solid rgba(255, 255, 255, .2);
                        padding-top: 50px;
                        color: black;
                        backdrop-filter: blur(20px);
                        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                        padding-bottom: 50px;
                        padding-right: 120px;
                        padding-left: 100px;
                        border-radius: 20px;
                        font-size: 20px;
                        width: 80%;
                        
                    }
                    .container1 .organizer{
                        padding: 10px 20px 10px 20px;
                    }
                    .container1 .px1{
                        border:2px;
                        border: 2px solid rgba(255, 255, 255, .2);
                        border-color: transparent;
                        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                        padding-top: 10%;
                        padding-right: 10%;
                        text-align:right;
                        height: 100px;
                    }
                 
                    </style>
<body>


    <div class="container1">
    
            
            @foreach ($booking as $bookings)
          
            <div class="organizer" hidden>
                {{$loop->iteration}}
                </div>  
                <div class="organizer" > <label>Firstname:</label>             
                {{$bookings->Firstname}}
                </div>  
                <div  class="organizer" > <label>Photoshoot Package:</label>  <input type="text" class="organizer" name="services_name" value="{{$bookings->services_name}}" style="border:transparent; background: transparent; font-size:20px; color:black;"disabled>
                </div>
                <div class="organizer"> <label>Package Price:</label>   
                {{$bookings->price}}
                </div> 
                <div class="organizer"> <label>Date Start:</label>   
                {{$bookings->Date_start}}
                </div>  
                <div class="organizer">  <label>Date End:</label>               
                {{$bookings->Date_end}}
                </div>
                <div class="organizer">
                {{$bookings->Time}}
                </div>  
                <div class="organizer"><label>Down Payment:</label>   
                {{$bookings->DownPayment}}
                </div>     
                       
                                @if($booking[0]->DownPayment == 0)
                                <label style="color: orange;">Pending</label>
                                @else
                                <label style="color: green;">Approved</label>
                                @endif

                <br>
                <br>
            @endforeach
            
          <a href="{{url('profile')}}">Back to Profile</a>
           @if ($booking[0]->DownPayment == 0)

           <form action="{{route('payment_details')}}" method="post"> 
                <div class="px1">
            
            
            
                <input type="hidden" name="services_name" value="{{$bookings->services_name}}" >
                Amount:
                
                <input type="text" name="downpayment" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @csrf
                <input type="hidden" name="id" value="{{$id}}" >
                <input type="submit">
                </div>
            
           @endif
     </div>
     <script>
        const stripe = Stripe('{{config('stripe.pk')}}');
        const elements = stripe.elements();
        
    </script>
</body>

</html>