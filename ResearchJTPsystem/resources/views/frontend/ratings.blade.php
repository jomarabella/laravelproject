<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->

        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link href="css/styles.css" rel="stylesheet" />
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
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background: black;">
            <div class="container">
            <img src="assets/img/jtp-logo.jpg" style="width:100px; padding-right: 10px;" alt="" /> 
                <a class="navbar-brand" href="#page-top"><img src="" alt="" />JTP Studio</a>
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
                    <li class="nav-item"><a class="nav-link" href="{{url('admindashboard')}}">Appointment</a></li>
                       
                    <div>   
                       
                            <li class="nav-item"><a class="nav-link" href="{{url('signin')}}">Login</a></li>
                            
                          
                            <lu>
                                <li>
                                <a style="color: white; font-size: 16px; " value="name" name="name" >     </a>
                                <ul class="dropdown">
                                    <li class="nav-item"><a href="{{url('adminlogout')}}" style="  position: absolute;">Logout</a></li>
                                </lu>
                                </li>
                            </lu>
                       
                </div>
                </div>
            </div>



            
        </nav>
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

</body>
</html>