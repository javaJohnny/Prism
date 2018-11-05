<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/landing/landing.css">
    <title>Prism - Login</title>
</head>
<body>
<div class="landingPage">
    <div class="split left">
        <div class="landing_card">
            <h2> Not a Member? </h2>
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <input id="name" type="text" name="name" placeholder="Enter your Name" class="input" required autofocus>
                <input name="email" type="text" placeholder="Enter Email" class="input">
                <select name="gender" id="gender" class="input">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input name="password" type="password" placeholder="Enter Password" class="input">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class="input" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <div class="split right">
        <div class="landing_card">
            <h2>Login</h2>
            <form method="POST" action="/login">
                {{ csrf_field() }}
                <input name="email" type="emial" placeholder="Enter Email" class="input">
                <input name="password" type="password" placeholder="Enter Password" class="input">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="/js/landing/landing.js"></script>
</body>
</html>
