<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/landing/login.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Welcome To Prism!</title>
</head>
<body>

<div class="grid">
    <div class="head">
        <div class="navbar">
            <div class="nav-title">
                <h1>Prism</h1>
            </div>
            <div class="nav-form">
                <form method="POST" action="/login">
                    {{csrf_field()}}
                    <div class="form-control">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-control">
                        <label for="password">Password</label>
                        <br>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </div>
                    <div class="form-control">
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="logo">
            <img src="/img/master/logo.png" alt="Logo">
        </div>
        <div class="main-form">
            <div class="main-text">
                <h2>Create a new account</h2>
                <p>It's free and always will be.</p>
            </div>
            <form action="/register" method="POST">
                {{csrf_field()}}
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class="input" required>
                <select name="gender" id="gender">
                    <option value="" disabled checked>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <div class="foot">
        <p>JJM &copy; 2018</p>
    </div>
</div>


<script src="/js/landing/login.js"></script>
</body>
</html>
