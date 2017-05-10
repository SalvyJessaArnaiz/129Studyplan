<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 30px;
                top: 40px;
                font-color:black;
                padding:2px;

            }

            .content {
                text-align: center;
            }

           .title {
                font-size: 65px;
                color:black;
                font-family: serif;
                border:2px solid skyblue;
                border-radius:10%;
                background-color:lightblue;
            }
            .top{
                font-size: 40px;
                margin-bottom:285px;
                color:black;
                 font-family: serif;
            }

            .m-b-md {
                margin-bottom: 190px;
            }
            .upseal{
                position:fixed;
                left:17%;
                top:10px;
                max-width: 100px;
                height:100px;
            }
            .vis{
                position:fixed;
                right:18%;
                top:10px;
                max-width: 100px;
                height:100px;
                border-radius: 100%;
            }
            .button {
                font: bold 20px serif;
                text-decoration: none;
                background-color:skyblue;
                color: black;
                padding: 2px 6px 2px 6px;
                border:2px solid skyblue;
            }
            #full{
                background-color:lightgrey;
            }
        </style>
    </head>
    <body>
       <div id="full" class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="button">Login</a>
                        <a href="{{ url('/register') }}" class="button">Register</a>
                    @endif
                </div>
            @endif

                    <img class="upseal" src="/img-uploads/upseal.png">
            <div class="content">
                <div class="top">
                    <b>University of the Philippines-Visayas</b>
                    <img class="vis" src="/img-uploads/vis.png">
                </div>
                <div class="title m-b-md">
                    <b>Self-Advising Study Plan</b> 
                </div>

            </div>
        </div>
    </body>
</html>
