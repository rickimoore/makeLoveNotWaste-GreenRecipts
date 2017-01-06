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
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 2% 0;
            font-size: 18px;
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

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            width: 50%;
            text-align: center;
        }

        .title {
            font-size: 84px;
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

        .green{
            color: #008080;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .route{
            position: absolute;
        }
        .route a{
            margin: 0 5px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="route">
            <a href="/purchases">
                <span>
                    Back
                </span>
            </a>
            <a href="/">
                <span>
                    Home
                </span>
            </a>
            <a href="/statistics">
                <span>
                    Statistics
                </span>
            </a>
        </div>
        <div class="title m-b-md">
            {{$client}}
        </div>
        <div class="date-time">
            <h2>{{$date}}</h2>
        </div>
        <ul id="products">
            <li>
                <div class="product">
                    <span>
                        1.
                    </span>
                    <span>Product Name</span>
                </div>
                <div class="price">
                    <span class="amount">$1.00</span>
                    <span>/</span>
                    <span class="count">1 kg</span>
                </div>
            </li>
            <li>
                <div class="product">
                    <span>
                        1.
                    </span>
                    <span>Product Name</span>
                </div>
                <div class="price">
                    <span class="amount">$1.00</span>
                    <span>/</span>
                    <span class="count">1 kg</span>
                </div>
            </li>
            <li>
                <div class="product">
                    <span>
                        1.
                    </span>
                    <span>Product Name</span>
                </div>
                <div class="price">
                    <span class="amount">$1.00</span>
                    <span>/</span>
                    <span class="count">1 kg</span>
                </div>
            </li>
            <li>
                <div class="product">
                    <span>
                        1.
                    </span>
                    <span>Product Name</span>
                </div>
                <div class="price">
                    <span class="amount">$1.00</span>
                    <span>/</span>
                    <span class="count">1 kg</span>
                </div>
            </li>
            <li>
                <div class="product">
                    <span>
                        1.
                    </span>
                    <span>Product Name</span>
                </div>
                <div class="price">
                    <span class="amount">$1.00</span>
                    <span>/</span>
                    <span class="count">1 kg</span>
                </div>
            </li>
            <li>
                <div class="product">
                    <span>
                        1.
                    </span>
                    <span>Product Name</span>
                </div>
                <div class="price">
                    <span class="amount">$1.00</span>
                    <span>/</span>
                    <span class="count">1 kg</span>
                </div>
            </li>
        </ul>
        <div class="total">
            <div class="subtotal">
                <h2 class="green">Subtotal</h2>
                <span>$15</span>
            </div>
        </div>
        <div class="note">

        </div>
    </div>
</div>
</body>
</html>
