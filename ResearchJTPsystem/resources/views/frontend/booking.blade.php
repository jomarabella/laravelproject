<!DOCTYPE html>
<html lang="en">
<head>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/styles.css" rel="stylesheet" />
    <title>Booking</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker"  ).datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true,
        });
        $( "#datepicker2"  ).datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true,
        });
    } );
    
    </script>   
 <style>
                    body{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-image: url("assets/img/header-bg.jpg");
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        border-radius: 100px;
                        gap: 50px;
                        font-size: 20px;
                        padding-top:150px;
                        padding-bottom:150px;
                        
                      
                        
                    }
                    
                    .container1{
                        height: 50%;
                        width: 50%;
                        background: transparent ;
                        border: 2px solid rgba(255, 255, 255, .2);
                        padding-top: 100px;
                        color: white;
                        backdrop-filter: blur(20px);
                        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                        padding-bottom: 50px;
                        padding-right: 100px;
                        padding-left: 100px;
                        border-radius: 20px;
                        
                    }
                
                   

                    .container1 h1{
                        font-size: 36px;
                        padding-left:30px;
                        text-align: center;
                    }

                    .container1 .input-box{
                        width: 100%;
                        height: 50px;
                        margin: 30px 0;
                    }

                    .input-box input{
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border: none;
                        outline: none;
                        border: 2px solid rgba(255, 255, 255, .2);
                        border-radius: 40px;
                        font-size: 16px;
                        color: white;
                        padding: 5px 5px 5px 45px;
                    }
                    #mainNav{
                        background: black;
                    }

                    .input-box input::placeholder{
                        color: white;
                        padding-left: 20px;
                    }
                    
                    .input-box #icon1 ,#icon2{
                        
                        padding-left: 20px;
                        
                        color: rgb(243, 130, 237);
                        transform: translateY(-200%);
                        font-size: 20px;
                    }
                    .dropdown{
                        display: inline-block;
                        position: relative;
                    }
                    .container1 .btn{
                        width: 100%;
                        height: 45px;
                        background: transparent;
                        display: inline-block;
                        border-color: white;
                        outline: none;
                        border-radius: 40px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                        cursor: pointer;
                        font-size: 16px;
                        color: white;
                        font-weight: 600;
                        
                    }
                   
                    .container1 .btn:hover {
                        color: black;

                        background-color: yellow;
                    }

                    .container1 .login-link{
                        font-size: 14.5px;
                        text-align: center;
                        margin: 20px 0 15px;
                    }

                    .login-link p a {
                        text-decoration: none;
                        font-weight: 600;
                    }

                    .login-link p a:hover {
                        text-decoration: underline;
                    }

                    ul li{
                        display: inline-block;
                        position: relative;
                        line-height: 21px;
                        text-align: right;
                    }
                    ul li a{
                        display: block;
                        padding: 8px 25px;
                        color: white;
                        text-decoration: none;
                    }
                    ul li a:hover{
                        
                        background: #939393;
                    }
                    ul li ul.dropdown{
                        min-width: 125px; 
                        display: none;
                        position: absolute;
                        z-index: 999;
                        left: 0;
                    }
                    ul li:hover ul.dropdown{
                        display: block; 
                    }
                    ul li ul.dropdown li{
                        display: block;
                    }

                    .footer{
                      position: absolute;
                      left: 0;
                      bottom: 0;
                      width: 100%;
                      height: 80px;
                      padding: 20px 20px 20px 20px;
                      background-color: black;
                      color: white;
                      text-align: center;
                    }
                    .tacbox {
                            display:block;
                            padding: 1em;
                            border: 5px solid #ddd;
                            background-color: #black;
                            max-width: 1000px;
                            text-align: center;

                            }

                            input {
                            height: 1em;
                            width: 1em;
                            vertical-align: center;
                            }
                    .dt_pick{
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border: none;
                        outline: none;
                        border: 2px solid rgba(255, 255, 255, .2);
                        border-radius: 40px;
                        font-size: 16px;
                        color: white;
                        padding: 5px 5px 5px 45px;
                    }
       
        
</style>

</head>


<body >

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <img src="assets/img/jtp-logo.jpg" style="width:100px; padding-right: 10px;" alt="" /> 
                <a class="navbar-brand" href="#page-top">  JTP Studio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('services')}}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                       
                        <ul>
                        
                        <li>
                            <a style="color: white; font-size: 10px; " value="Email" name="Email">{{$data->Email}}</a>
                            <ul class="dropdown">
                                <li class="nav-item"><a href="{{url('clientprofile')}}" >Profile</a></li>
                                <li class="nav-item"><a href="{{url('profile')}}">List</a></li>
                                <li class="nav-item"><a href="{{url('logout')}}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>

                    </ul>
                </div>
            </div>
        </nav>
        
            
           
      

    <div class="container1">
        <form action="{{route('booking-client')}}" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h1>Booking</h1>
        <div class="input-box">
               <input type="text" id="Firstname" name="Firstname" placeholder="Firstname" value="{{$data->Firstname}}"required title="">
               
        </div>
        
        <div class="input-box">
               <input type="text" id="Lastname" name="Lastname"  placeholder="Lastname"  value="{{$data->Lastname}}" required title=""/>
       </div>
       <div class="input-box">
               <input type="text" id="Contact" name="Contact" minlength="11" maxlength="11" placeholder="Contact Number" value="{{$data->Contact}}" required title=""/>
       </div>
       <div class="input-box">
               <input type="text" id="Address" name="Address" placeholder="Address" value="{{$data->Address}}" required title=""/>
       </div>  
      
      
        @csrf    
       <div class="bt">
               <p>Date Start: <input type="text" name="Date_start" class="dt_pick" id="datepicker"></p>
              
       </div>
       @csrf  
       <div class="bt">
       <p>Date End: <input type="text" name="Date_end" class="dt_pick"id="datepicker2"></p>
       </div>
       <input type="text" name="client_id"value="{{$data->client_id}}" hidden/>
       <div class="input-box">
               <input type="text" id="Time" name="Time"  maxlength="20" placeholder="Time"  required title=""/>
       </div>
      
       <div class="input-box">
               <input type="text" id="Email" name="Email" placeholder="Email" value="{{$data->Email}}" required title=""/>
       </div>        
            
                <select class="btn" name="Package" id="Package">
                   
                @foreach ($services as $service)
                    <option value="{{$service->services_id}}" class="dropdown-item">{{$service->services_name}}</option>
                @endforeach
              
                </select>
            
                <br></br>
                <div class="tacbox">
                <input type="checkbox" value="1" name="term_con" required title=""> <label for="checkbox"><a href="{{url('terms&condition')}}" name="term_con" required title="">Terms and Conditions</a>.</label>
                </div>

                <div class="input-box">
               <input type="hidden" id="appointment_status" name="appointment_status"  maxlength="20" placeholder="appointment_status"  value="Pending" required title=""/>
       </div>
            
   
        <div>       
            <input type="submit" class="btn" id="btn_submit" value="Book Now" /> 
        </div>
       
    </form>
    </div>
    <div class="footer" style="position:bottom;">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-lg-start">Copyright &copy; JTP 2024</div>
                    <div class="col-lg-3 text-lg-start">Distributed By <a href="https://themewagon.com/">JTP Studio</a></div>
                    <div class="col-lg-3 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    
                </div>
            </div>
   
       

</body>
</html>