<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/landing/marketing.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Landing Page</title>
</head>
<body>
<div id="head">
    <div class="head-bar">
        <div class="head-title">
            <h1>Prism</h1>
        </div>
        <div class="head-interact">
            <a href="">Refresh Page <i class="fas fa-sync-alt"></i></a>
        </div>
    </div>
</div>
<div id="head-msg">
    <div class="top-left">
        <img src="https://media.giphy.com/media/oYtVHSxngR3lC/giphy.gif" alt="gif2">
    </div>
    <div class="msg">
        <p>
            Are you somebody that is tired of facebook? <br />
            It's too mainstream... It's overpopulated... <br />
            too much Donald Trump.. Want to start fresh? <br />
            a Friendly Environtment? Funny <span>GIFS</span>??

        </p>


    </div>
    <div class="top-right">
        <img src=" https://media.giphy.com/media/Lcn0yF1RcLANG/giphy.gif" alt="gif3">
    </div>
    <div class="bottom-right">
        <img src="https://media.giphy.com/media/5VKbvrjxpVJCM/giphy.gif" alt="gif1">
    </div>
</div>
<div id="main-msg">
    <div class="testimonial">
        <p>
            "You said Gifs?? Say No More." <br />
            <span>
                -Jamie Lee Carter
            </span>
        </p>
    </div>
</div>
<div id="fact-msg">
    <div class="fact">
        <div class="fact-card 1" id="fact-left">
            <p>
                Meet new people and send each other Gifs!!
            </p>
            <img src="/img/Landing/group.jpg" alt="friends">
        </div>
        <div class="fact-card 2" id="fact-right">
            <img src="/img/Landing/sharing1.jpg" alt="sharing">
            <p>
                Like each others post!
            </p>
        </div>
    </div>
</div>
<div id="form">
    <h2>Join Us Now!</h2>
    <div class="form-control">
        <div class="form-card">
            <div>
                <form class="register_form" method="POST" action="/register">
                    {{ csrf_field() }}
                    <input id="name" type="text" name="name" placeholder="Enter your Name" class="input">
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
            <div>
                <p>Already a Member? <a href="/">Click Here</a></p>
            </div>
        </div>
    </div>
</div>
<div id="foot">
    <p>Copyright &copy; JJM 2018</p>
</div>

<script src="ScrollMagic.min.js"></script>
<script src="/js/landing/marketing.js"></script>
</body>
</html>
