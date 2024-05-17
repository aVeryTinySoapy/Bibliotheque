<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="/login/verify" method="post" class="form">
            @csrf
        <h2>Sign-in</h2>
            <input type="text" id="user_name" name="username" class="box" placeholder="Enter username">
            <input type="password" id="user_pass" name="password" class="box" placeholder="Enter Password">
            <input type="submit" value="Sign-in" id="submit">
            <a href="/registration">Sign up</a>
        </form>
        <div class="side">
            <h2>Bibliotheque De Sasa</h2>
            <img src="{{asset('/resources/images/book.png')}}" alt="pc">
        </div>
    </div>
</body>
</html>
