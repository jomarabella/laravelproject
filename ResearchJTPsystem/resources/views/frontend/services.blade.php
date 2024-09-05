<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/styles.css" rel="stylesheet" />
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
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
                        
                     
                        
                      
                        
                    }
                    
                    .container1{
                        
                        background: transparent ;
                        border: 2px solid rgba(255, 255, 255, .2);
                        padding-top: 10px;
                        color: white;
                        backdrop-filter: blur(20px);
                        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                        
                        width: 100%;
                        border-radius: 20px;
                        
                    }
                    ul li{
                        color: white;
                    }
                    .footer{
                      position: absolute;
                      left: 0;
                      bottom: 0;
                      width: 100%;
                      height: 80px;
                      padding: 20px 20px 20px 20px;
                      background-color: black;
                      color:white;
                      text-align: center;
                    }
                    .rating{
                        display: inline-block;
                    }
                    .rating input{
                        display: none;
                    }
                    .rating label{
                        font-size: 25px;
                        color: #ccc;
                        cursor: pointer;
                    }
                    .rating label:hover,
                    .rating label:hover ~ label,
                    .rating input:checked ~ label{
                        color: #ffcc00;
                    }
                    
</style>
<body>

<script> $(document).ready(function() { $('.rating label').hover(function() { $(this).prevAll('label').addBack().css('color', '#ffcc00'); }, function() { $(this).prevAll('label').addBack().css('color', '#ccc'); }); $('.rating label').click(function() { $(this).prevAll('input').prop('checked', true); }); }); </script>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background: black;">
            <div class="container" >
            <img src="assets/img/jtp-logo.jpg" style="width:100px; padding-right: 10px;" alt="" /> 
                <a class="navbar-brand" href="#page-top">  JTP Studio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                       
                        @if(!Session::has('loginId'))
                            <li class="nav-item"><a class="nav-link" href="{{url('signin')}}">Login</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{url('logout')}}">logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
    <div class="container1">
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3 style="color: white; text-align: center;">PHOTOSHOOT PACKAGES</h3>
                    </div>
                </div>
            </div>
                        
                        
                    
                        
                       
            <div class="row">
                @foreach ($services as $service)
                <div class="col-xl-4 col-md-4">
                    <div class="singlex_offers">
                    <div class="about_thumb">
                            <img src="{{$service->ratings}}" alt="">
                        </div>
                        <h3 style="color: white;" value="{{$service->services_name}}">{{$service->services_name}} <br> 
                                </h3>
                        <ul >
                            <li style="color: white;">{{$service->price}}</li>
                            <li style="color: white;">{{$service->description}}</li>
                            
                        </ul>
                        @if(Session::has('loginId'))
                        <a href="{{url('booking')}}" class="book_now">book now</a>
                        @else
                        <a href="{{url('signin')}}" class="book_now">book now</a>
                        @endif
                        <br>
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5">☆</label> 
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4">☆</label> 
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3">☆</label> 
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2">☆</label> 
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1">☆</label> 

                        </div>
                    </div>
                </div>
                    @endforeach
            </div>     
</body>
</html>