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
                <div class="collapse navbar-collapse" id="navbarResponsive" >
                <a href="{{url('View_Admin_Services')}}" >Back</a></li>
                </div>
            </div>
        </nav>
        
    <div class="container1">
    <div class="offers_area padding_top"> <li class="nav-item">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3 style="color: white; text-align: center;">PHOTOSHOOT PACKAGES</h3>
                    </div>
                </div>
                <div style="padding: 10px;">
                
                </div>
            </div>
            <form action="{{route('Admin_Services_Add')}}" method="post">  
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf

            
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="assets/img/offers/1.png" alt="">
                        </div>
                        <br>
                        <input type="text" name="admin_id" value="{{$admin->admin_id}}" hidden >
                        <label>Photoshoot Name: </label><input type="text" name="Package" style="color: white; background: transparent; ">  <br> 
                        <label>Photoshoot Price: </label><input type="text" name="Price" style="color: white; background: transparent; padding-left:10px;">      
                        <ul > Details:
                            <li style="color: white;"><input type="text" name="Description" style="color: white; background: transparent; "></li>
                            <li style="color: white;"><input type="text" style="color: white; background: transparent; "></li>
                            <li style="color: white;"><input type="text" style="color: white; background: transparent; "></li>
                        </ul>
                       
                       
                   
                        <input type="submit"  class="book_now" value="Save" style="background: transparent; " > 
                       
                    </div>
                </div>
               
            </div>

</body>
</html>