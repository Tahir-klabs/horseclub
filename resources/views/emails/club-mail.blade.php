<!DOCTYPE html>
<html>
<head>
    <title>Welcome to {{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>{{ $contacts['name'] }}</h1>
    <p>{{ $contacts['email'] }}</p>
    <p>{{ $contacts['phone'] }}</p>
    <p>{{ $contacts['message'] }}</p>
   
    <p>Thank you</p>
</body>
</html>