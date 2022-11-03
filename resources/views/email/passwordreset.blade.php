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

        click <a href="{{url('/passwordreset/'.$user->passwordreset->token)}}">here </a>to reset your password
    </p>
</body>
</html>
