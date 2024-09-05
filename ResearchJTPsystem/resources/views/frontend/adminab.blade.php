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
                        background-image: url("assets/img/header1-bg.jpg");
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        border-radius: 100px;
                        font-size: 8px;
                        padding-top:80px;
                        padding-bottom:8px;
                        
                      
                        
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
                    ul{
                        padding: 0;
                        list-style: none;
                        
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
                        position: absolute; 
                    }
                    ul li ul.dropdown li{
                        display: block;
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
                    <li class="nav-item"><a class="nav-link" href="{{url('View_Admin_Services')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admindashboard')}}">Appointment</a></li>
                        @if(!Session::has('adminId'))
                            <li class="nav-item"><a class="nav-link" href="{{url('signin')}}">Login</a></li>
                            
                            @else
                            <lu>
                                <li>
                                <a style="color: white; font-size: 17px; " value="name" name="name" > {{$admindata->name}}    </a>
                                <ul class="dropdown">
                                  
                                    <li class="nav-item"><a href="{{url('adminapp')}}" >Profile</a></li>
                                    <li class="nav-item"><a href="{{url('adminlogout')}}" style="  position: absolute;">Logout</a></li>
                                </lu>
                                </li>
                            </lu>
                        @endif
                        
                    </ul>
                </div>
                
            </div>
        </nav>
        
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/p1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/p2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    
    
</body>
</html>