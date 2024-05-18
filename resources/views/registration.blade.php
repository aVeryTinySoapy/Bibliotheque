<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <title>Registration</title>
</head>
<body>
<div class="container">
    <form id="form-register" class="form">
        <h2>Register</h2>
        <input type="text" id="username" name="username" class="box" placeholder="Enter username">
        <input type="password" id="password" name="password" class="box" placeholder="Enter Password">
        <input type="submit" value="Sign-up" id="submit">
        <a href="/login">Already have an account?</a>
    </form>
    <div class="side">
        <h2>Bibliotheque De Sasa</h2>
        <img src="{{asset('/resources/images/book.png')}}" alt="pc">
    </div>
</div>

<script src="{{asset('/js/user/register.js')}}"></script>
</body>
</html>

