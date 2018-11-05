<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
            *{
                margin: 0;
                padding: 0;
            }
            html {
                font-family: monospace;
            }
            body {
            }

            .grid{
                background-image: url();
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
            img {
                position: absolute;
                top:23%;
                left:46%;
                width: 200px;
            }
            .container {
                text-align: center;
            }
            .box{
                display: inline-block;
                margin: 1em;
                margin-top: 20%;
            }
            h1 {
                font-weight: 500;
                font-size: 5em;
            }

            .p {
                font-size: 3em;
                font-style: italic;
                font-weight: 100;
            }
            .s {
                font-size: 1em;
                font-style: italic;
            }
        </style>
    </head>
    <body>
            <img src="/img/Master/dogsad.png" alt="dog">
            <div class="container">
                <div class="box">
                    <h1>404</h1>
                </div>
                <div class="box">
                    <p class="p">Page Not Found</p>
                    <p class="s">It's not you, It's us.. </p>
                </div>
            </div>
    </body>
</html>
