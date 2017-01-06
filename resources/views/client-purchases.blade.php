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

        ul{
            padding: 0;
            width: 100%;
            list-style: none;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        li {
            padding: 5% 0;
            font-size: 28px;
            text-align: left;
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
        .icon{
            margin-right: 50px;
        }

        .purchase{
            width: 15%;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            height: 80%;
            width: 60%;
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .recipts{
            overflow: scroll;
            height: 80%;
        }

        .recipts li{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        li:hover{
            background: #EEEEEE;
        }

        .green{
            color: #008080;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="route">
            <a href="/client">
                Back
            </a>
        </div>
        <div class="title m-b-md">
            Purchases
        </div>

        <ul class="recipts">
            <a href="/client/item/Item-90">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                        Item.90
                    </span>
                    </div>
                    <span>
                    02 Dec
                </span>
                </li>
            </a>
            <a href="/client/item/Item-91">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.91
                </span>
                    </div>
                    <span>
                    30 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-92">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.92
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-94">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.94
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-945">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.945
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-100">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.100
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-191">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.191
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-87">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.87
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/client/item/Item-292">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <span>#939j1d8d</span>
                        </div>
                        <span>
                    Item.292
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
        </ul>
    </div>
</div>
</body>
</html>
