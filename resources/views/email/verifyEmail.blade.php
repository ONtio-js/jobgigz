<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Verification</title>
</head>
<body>
    <h2>Welcome to jobgigz</h2>
    <p>

        click <a href="{{url('/users/verify/'.$user->verify_user->token)}}">here </a>to verify your account
    </p>
</body>
</html>
