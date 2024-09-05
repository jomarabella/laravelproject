<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>

<style>
    body{
            margin:0;
            padding:0;
            background-image: url("assets/img/header-bg.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;     
            min-height:100vh;
            display: flex;
            align-items:center;
            justify-content:center;
        }
    .terms-box{
            max-width: 460px;
            background-color: #111;
            color: #fff;
            font-family: "Montserrat";
            padding:60px 30px;
        }
    .terms-text{
            padding: 0 20px;
            height: 400px;
            overflow-y: auto;
            font-size: 14px;
            font-weight: 500;
            color: #f1f1f1;
        }
    .terms-text::-webkit-scollbar-thumb{
            background-color: #d13639;
        }
    .terms-text h2{
            text-transform: uppercase;
        }
    .terms-box h3{
            font-size: 13px;
            text-align: center;
            padding: 0 40px;
        }
    .terms-box h3 span{
            color: #d13639;
        }
    .button{
            display: flex;
            padding: 0 20px;
            justify-content: space-between;
        }
    .btn{
            height: 50px;
            width: calc(50% - 6px);
            border: 0;
            border-radius: 6px;
            font-size: 19px;
            font-weight: 500;
            color: #fff;
            transition: .3s linear;
            cursor: pointer;
        }
    .red-btn{
            background-color: #d13639;
        }
    .gray-btn{
            background-color: #282828;
        }
    .btn:hover{
            opacity: .6;
        }
</style>

</head>
<body>
    <div class="terms-box">
        <div class="terms-text">
            <h2>Terms and Conditions</h2>
            <p>Greetings User,</p>
            <p>Our terms and Condition the booking will only be officially approved when the client provides a downpayment regarding of his or her booking appointment </p>
            <p>When a specified booking schedule is officially approved by the system, the specific date will not be available for another appointment schedule, except if the current client who booked on that specific date cancels the booking.</p>
            <p>The Down Payment that has been done will not be refundable. regarding of the term and Condition of the service provider.</p>
            <p>The system requires at least thirty percent of the chosen service that has been booked. We only refund the excess amount of the down payment if the client wishes to cancel the booking appointment.</p>
            <p>The service provider will only send the product of the services when the client has officially paid for the service that he or she availed of.  </p>
        </div>
        
        <h3><input id="checkbox" type="checkbox" value="1"  />I Agree to These <span>Terms And Policy</span> and I Read the Policy Note</h3>
        <div class="button">
            <button class="btn red-btn"><a href="{{url('booking')}}"style="color: white; text-decoration: none;">Accept</button>
            <button class="btn gray-btn"><a href="{{url('terms&condition')}}" style="color: white; text-decoration: none;">Decline</button>
        </div>
    </div>
</body>
</html>