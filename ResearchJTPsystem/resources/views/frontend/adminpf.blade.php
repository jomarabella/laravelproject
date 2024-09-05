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
                        padding-top:150px;
                        padding-bottom:150px;
                        
                      
                        
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
                    <li class="nav-item"><a class="nav-link" href="{{url('adminservices')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admindashboard')}}">Appointment</a></li>
                        @if(!Session::has('adminId'))
                            <li class="nav-item"><a class="nav-link" href="{{url('signin')}}">Login</a></li>
                            
                            @else
                            <lu>
                                <li>
                                <a style="color: white; font-size: 17px; " value="name" name="name" > {{$admindata->name}}    </a>
                                <ul class="dropdown">
                                    <li class="nav-item"><a href="{{url('adminlogout')}}" style="  position: absolute;">Logout</a></li>
                                </lu>
                                </li>
                            </lu>
                        @endif
                        
                    </ul>
                </div>
                
            </div>
        </nav>
        
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/a.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Wedding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/b.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Birthday</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/c.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Christening</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/d.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Debu</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/e.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Graduation</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/f.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Photographer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
</body>
</html>