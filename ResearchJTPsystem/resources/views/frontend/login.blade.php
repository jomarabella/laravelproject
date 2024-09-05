<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
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
                        padding-top: 50px;
                        color: white;
                        backdrop-filter: blur(20px);
                        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                        padding-bottom: 50px;
                        padding-right: 120px;
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

                    .input-box input {
                        width: 110%;
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
                    
                    .container1 .btn{
                        width: 115%;
                        height: 45px;
                        background: transparent;
                        display: inline-block;
                        border-color: white;
                        outline: none;
                        border-radius: 40px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                        cursor: pointer;
                        font-size: 16px;
                        color: #333;
                        font-weight: 600;
                        
                    }
                   
                    .container1 .btn:hover{
                        color: black;
                        background-color: white;
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
                        @if(!Session::has('loginId'))
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{url('logout')}}">logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container1">
        <form action="{{route('login-client')}}" method="post">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h1>Login</h1>
   
       <div class="input-box">
               <input type="text" id="Username" name="Username" minlength="5" placeholder="Username"/>
        </div>
        </bir>

        <div class="input-box">
              <input type="password" id="Password" name="Password" minlength="5" placeholder="Password"/>
        </div>
        
        </bir>
        <div class="login-link">
            <p><a href="{{url('registration')}}">You forgot your password?</a></p>
        </div>
           
            
   
        <div>       
            <input type="submit" class="btn" id="btn_submit" value="Submit" /> 
        </div>
        <div class="login-link">
            <p>You don't have an account?<a href="{{url('registration')}}">Register</a></p>
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