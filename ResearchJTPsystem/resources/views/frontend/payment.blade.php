<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/checkout" method="Post">
        <input type="text" name="amount" >
        <input type="text" name="services_name" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit">Pay Now</button> 
    </form>
</body>
</html>