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
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .statistics{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .item-detail{
            display: flex;
            flex-direction: column;
            margin-left: 50px;
            width: 20%;
            text-align: left;
        }
        .details{
            font-size: 18px;
            margin-bottom: 50px;
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

        @media only screen
        and (min-device-width : 768px)
        and (max-device-width : 1024px)  {
            .statistics{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .item-detail {
                width: 80%;
            }
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="route">
            <a href="/client/purchases">
                Back
            </a>
        </div>
        <div class="title m-b-md">
            <span class="green">{{$item_id}}</span>
        </div>
        <div class="statistics">
            <img src="/image/chart.jpg" alt="chart.js fake">
            <div class="item-detail">
                <div class="details">
                    <span id="title">{{$item_id}}</span>
                    <span>$1.00</span>
                </div>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet feugiat libero. Cras pulvinar suscipit eleifend. Fusce quam lectus, semper eget fermentum nec, vulputate vitae nulla. Maecenas in mauris ac arcu aliquam pharetra. Nulla rutrum mattis venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum, tortor non cursus ornare, erat quam porttitor lorem, in luctus erat massa nec mauris.</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
