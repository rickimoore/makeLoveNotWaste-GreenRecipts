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

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .new-item{
            position: absolute;
            right: -50px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .recipts li, .purchase{
            position: relative;
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
    <div class="content">
        <div class="route">
            <a href="/">
                Home
            </a>
        </div>
        <div class="title m-b-md">
            Purchases
        </div>

        <ul class="recipts">
            <a href="/purchases/mercadona/12-02-2016">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <img src="/image/ic_shopping_cart_black_24px.svg" alt="cart">
                        </div>
                        <span>
                        Mercadona
                    </span>
                    </div>
                    <span>
                    02 Dec
                </span>
                    <span class="new-item">
                        <img src="/image/ic_payment_black_24px.svg" alt="">
                    </span>
                </li>
            </a>
            <a href="/purchases/zara/11-30-2016">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <img src="/image/ic_shopping_cart_black_24px.svg" alt="cart">
                        </div>
                        <span>
                    Zara
                </span>
                    </div>
                    <span>
                    30 Nov
                </span>
                </li>
            </a>
            <a href="/purchases/macdonalds/11-01-2016">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <img src="/image/ic_shopping_cart_black_24px.svg" alt="cart">
                        </div>
                        <span>
                    Macdonalds
                </span>
                    </div>
                    <span>
                    01 Nov
                </span>
                </li>
            </a>
            <a href="/purchases/ikea/11-01-2016">
                <li>
                    <div class="purchase">
                        <div class="icon">
                            <img src="/image/ic_shopping_cart_black_24px.svg" alt="cart">
                        </div>
                        <span>
                    Ikea
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
