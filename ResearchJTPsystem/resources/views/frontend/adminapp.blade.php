<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> JTP Online Appointment</title>
        <!-- Favicon-->

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->

        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    
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
                        padding-top:250px;
                        padding-bottom:650px;
                        
                    }
                    
                    .container1{
                        background: transparent ;
                        border: 2px solid rgba(255, 255, 255, .2);
                        padding-top: 50px;
                        color: white;
                        backdrop-filter: blur(20px);
                        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                        padding-bottom: 50px;
                        padding-right: 120px;
                        padding-left: 100px;
                        border-radius: 20px;
                        
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
                    }
                    ul li ul.dropdown li{
                        display: block;
                    }
                    table, th, td {
                        padding: 8px 35px;
                        color: white;
                        border:1px solid white;
                        position: relative;
                        line-height: 21px;
                        }

                    
       
        
</style>
    </head>
    <body id="page-top">
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
                        @if(!Session::has('adminId'))
                            <li class="nav-item"><a class="nav-link" href="{{url('signin')}}">Login</a></li>
                            
                            @else
                            <lu>
                                <li>
                                <a style="color: white; font-size: 16px; " value="name" name="name" > {{$admindata->name}}    </a>
                                <ul class="dropdown">
                                    <li class="nav-item"><a href="{{url('adminlogout')}}" style="  position: absolute;">Logout</a></li>
                                </lu>
                                </li>
                            </lu>
                        @endif
                </div>
                </div>
            </div>



            
        </nav>

    <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Photoshoot Package</th>
                <th>Date</th>
                <th>Time</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
            
          
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> 
                
                        <li><ul class="dropdown">
                                <li class="nav-item"><a href="#" >Pending</a></li>
                                <li class="nav-item"><a href="#">Approved</a></li></ul>
                        </li>
                     
                </td>
            </tr>
           
            </table>
</body>