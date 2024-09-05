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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                      
                        background-size: cover;
                        border-radius: 100px;
                        gap: 50px;
                        font-size: 20px;
                        padding-top:150px;
                        padding-bottom:150px;
                        overflow: auto;
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
                        line-height: 10px;
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
                    table{
                        backdrop-filter: blur(20px);
                    }
                    table, th, td {
                        
                        padding: 8px 35px;
                        color: white;
                        border:1px solid white;
                        position: relative;
                        line-height: 20px;
                        }
                        @media screen and (max-width: 300px) {
                       .tops .search-container {
                            float: none;
                        }
                        .tops input[type=text],.tops .search-container button {
                            float: none;
                            display: block;
                            text-align: left;
                            width: 100%;
                            margin: 0;
                            padding: 14px;
                        }
                    }
                    .tops .search-container:hover {
                        color:white;
                        background-color: black;
                    }
                    .icon-button {
                    position: relative;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 40px;
                    height: 40px;
                    color: #333333;
                    background: #dddddd;
                    border: none;
                    outline: none;
                    border-radius: 50%;
                    z-index: 1000;





                    
                    }

                    .icon-button:hover {
                    cursor: pointer;
                    }

                    .icon-button:active {
                    background: #cccccc;
                    }

                    .icon-button__badge {
                    position: absolute;
                    top: -7px;
                    right: -9px;
                    width: 19px;
                    height: 19px;
                    background: red;
                    color: #ffffff;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 50%;
                    }
                   

                    
       
        
</style>
    </head>
    <body id="page-top">

                    <script>
                        Document.addEventListener('DOMContentLoaded', function(){
                            var notificationBar = document.getElementById('notif-bar');
                            if(notificationBar.innerText.trim() !==''){
                                notificationBar.classList.add('show');
                                setTimeout(function(){
                                    notificationBar.classList.remove('show');

                                }, 5000);
                            }
                        });
                    </script>

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
                    <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('services')}}">Services</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <div style="padding-left: 15px; padding-right: 15px;"  id="notif-bar">
                        <button type="button" class="icon-button">
                        <span class="material-icons">notifications</span>
                        <span class="icon-button__badge">2</span>
                    </button>
                </div>
                </br> 
                        
                    <div>    
                        
                    <ul>
                        
                        <li>
                            <a style="color: white; font-size: 10px; " value="Email" name="Email">{{$data->Email}}</a>
                            <ul class="dropdown">
                                <li class="nav-item"><a href="{{url('clientprofile')}}" >Profile</a></li>
                                <li class="nav-item"><a href="#">List</a></li>
                                <li class="nav-item"><a href="{{url('logout')}}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
               
            </div>



            
        </nav>
    <h1></h1>
    @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
    <table >
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Photoshoot Package</th>
                <th>Date Start</th>
                <th>Date End</th>
                <th>Time</th>
                <th>Amount</th>
                <th >Down Payment</th>
                <th>Payment Status</th>
                <th>Status</th>
            </tr> 
            @foreach ($booking as $bookings) 
          
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$bookings->Firstname}}</td>
                <td><a href="{{url('appointment_details/' .$bookings->id )}}">{{$bookings->services_name}}</a></td>
                <td>{{$bookings->Date_start}}</td>
                <td>{{$bookings->Date_end}}</td>
                <td>{{$bookings->Time}}</td>
                <td>{{$bookings->price}}</td>
                <td name="DownPayment" value="{{$bookings->DownPayment}}" >{{$bookings->DownPayment}}</td>
                <td>    
                                @if($bookings->DownPayment == 0)
                                <label style="color: orange;">Pending</label>
                                @elseif($bookings->Fullpayment > 0)
                                <label style="color: yellow;">Fully Paid</label>
                                @else
                                <label style="color: lime;">Paid</label>
                                @endif
               
                                
                </td>
                <td >
                @if($bookings->appointment_status == "Approved")
                <label style="color: green;">Approved</label>
                @elseif($bookings->appointment_status == "In_progress")
                <label style="color: orange;">In Progress</label>
                @elseif($bookings->appointment_status == "Pending")
                <label style="color: orange;">Pending</label>
                @elseif($bookings->appointment_status == "Cancelled")
                <label style="color: red;">Cancelled</label>
                @elseif($bookings->appointment_status == "Done")
                <label style="color: yellow;">Done</label>
                @else
                @endif
                </td>
            </tr>
            @endforeach
            
            </table>
</body>