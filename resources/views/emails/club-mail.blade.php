<!DOCTYPE html>
<html>
<head>
    <title>Welcome to {{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h4>Full Name: {{ $contacts['name'] }}</h4><br/>
    <p>Email Address: {{ $contacts['email'] }}</p><br/>
    <p>Phone Number: {{ $contacts['phone'] }}</p><br/>
    <p>Message: {{ $contacts['message'] }}</p><br/>
   
    <p>Thank you</p>
</body>
</html>