<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link
        href="data:image/jpeg;base64,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">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /*
Button
            */
        .buttonX {
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 24px;
            padding: 20px;
            width: 300px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .buttonX span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .buttonX span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .buttonX:hover span {
            padding-right: 25px;
        }

        .buttonX:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                ~ My Daily Task App ~
            </div>

            <div>
                <button class="buttonX" onclick="window.location='/task'"><span>GO TO TASK APP </span></button>
            </div>
        </div>
    </div>
</body>

</html>