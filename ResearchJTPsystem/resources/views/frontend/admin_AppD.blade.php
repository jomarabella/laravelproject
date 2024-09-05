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
                     .container1 .btn{
                        width: 20%;
                        height: 45px;
                        background: transparent;
                        display: inline-block;
                        border-color: black;
                        outline: none;
                        border-radius: 40px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                        cursor: pointer;
                        font-size: 16px;
                        padding : 5px 5px 5px 5px;
                        font-weight: 600;
                        
                    }
                   
                    .container1 .btn:hover {
                        color: black;

                        background-color: yellow;
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
                <div class="organizer"><label>Full Payment:</label>   
                {{$bookings->Fullpayment}}
                </div>     
                       
                                @if($booking[0]->DownPayment == 0)
                                <label >Payment: </label>
                                <label style="color: orange;">Pending</label>
                                @elseif($booking[0]->Fullpayment > 0)
                                <label style="color: yellow;">Fully Paid</label>
                                @else
                                <label >Payment: </label>
                                <label style="color: green;"> Paid</label>
                                @endif

                <br>
                <br>
            @endforeach
          
                
          <a href="{{url('admindashboard')}}">Back to Profile</a>
          <br>
           

           <form action="{{route('adminpayment_details')}}" method="post"> 
                <div class="px1">
            
            
            
                <input type="hidden" name="services_name" value="{{$bookings->services_name}}" >
                Amount:
                
                <input type="text" name="fullpayment" value="{{$bookings->Fullpayment}}" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @csrf
                <input type="hidden" name="id" value="{{$id}}" >
               
                </div>
            
           
           
          <div> <input type="submit" class="btn">
                </div>
                <br>
           <select class="btn" name="appstat" id="appstat"> 
                    <option value="In_progress" class="dropdown-item">In progress</option>
                    <option value="Approved" class="dropdown-item">Approved</option>
                    <option value="Cancelled" class="dropdown-item">Cancelled</option>
                    <option value="Done" class="dropdown-item">Done</option>
                    <option value="Pending" class="dropdown-item">Pending</option>
            </select>
     </div>
     <script>
        const stripe = Stripe('{{config('stripe.pk')}}');
        const elements = stripe.elements();
        
    </script>
</body>

</html>