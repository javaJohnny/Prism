<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/master/customfonts.css">
    <link rel="stylesheet" href="/css/master/home.css">
    <link rel="stylesheet" href="/css/profile/profile.css">
    <link rel="stylesheet" href="/css/master/dashboard.css">
    <link rel="stylesheet" href="/css/master/main.css">
    <link rel="stylesheet" href="/css/master/trending.css">
    <link rel="stylesheet" href="/css/master/head.css">
    <link rel="stylesheet" href="/css/master/user_card.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Prism - Dashboard</title>
</head>
<body>
<div id="app">
<div class="head">
    @include('includes.head.head')
</div>
<div class="main">
    <!-- @include('includes.main.main') -->
    @yield('main')
    <!-- @yield('profile') -->

</div>
<div class="foot">
    <p>Copyright &copy; JJM 2018</p>
</div>
</div>

<script src="/js/master/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="/js/master/master.js"></script>
<script src="/js/app.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
