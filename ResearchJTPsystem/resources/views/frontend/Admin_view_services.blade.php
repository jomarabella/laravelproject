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
                      color:white;
                      text-align: center;
                    }
                    .btn {
                        border: 3px solid rgba(255, 255, 255, .2);
                        color: skyblue;
                        background-color: transparent;

                    }
                    .btn:hover {
                        background-color: skyblue;
                    }
                    
</style>
<body>
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
                        <li class="nav-item"><a class="nav-link" href="{{url('adminhome')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="adminab">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="adminpf">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('View_Admin_Services')}}">Services</a></li>
                       
                        
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                       
                        <ul>
                        
                        <li>
                            <a style="color: white; font-size: 10px; " value="name" name="name">{{$data1->services_name}}</a>
                            <ul class="dropdown">
                                <li class="nav-item"><a href="#" >Profile</a></li>
                                <li class="nav-item"><a href="{{url('admindashboard')}}">List</a></li>
                                <li class="nav-item"><a href="{{url('logoutAdmin')}}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                    </ul>
                </div>
                
            </div>
        </nav>
             
    <div class="container1">
        <form action="{{route('update_services')}}" method="post">
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12"> <li class="nav-item">
                    <div class="section_title text-center mb-100">
                        
                        <h3 style="color: white; text-align: center;">PHOTOSHOOT PACKAGES</h3>
                    </div>
                </div>
                
                <div style="padding: 10px;">
                <a href="{{url('Admin_Services')}}">Add New Services</a></li>
                </div>
                
            </div>
             
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
          
            <div class="row">
            @foreach ($services as $service)
            
                <div class="col-xl-4 col-md-4">
                
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="assets/img/offers/1.jpg" alt="">
                        </div>
                        
                        <br>
                        
                        
                        <input type="text" name="services_id[]" value="{{$service->services_id}}">
                        <label>Photoshoot Name: </label><input type="text" id="services_name" name="services_name" value="{{$service->services_name}}" style="color: white; background: transparent; ">  <br> 
                        <label>Photoshoot Price: </label><input type="text" id="price" name="price" value="{{$service->price}}"  style="color: white; background: transparent; padding-left:10px;">      
                        <ul > Details:
                            <li style="color: white;"><input type="text" name="description" value="{{$service->description}}"  style="color: white; background: transparent; "></li>
                            <li style="color: white;"><input type="text" style="color: white; background: transparent; "></li>
                            <li style="color: white;"><input type="text" style="color: white; background: transparent; "></li>
                        </ul>
                       <input type="submit" value="Update" class="btn">
                       
                       
                     
                        
                       
                    </div>
                </div>
                @endforeach
            </div>
               
</body>
</html>