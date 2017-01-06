<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Green Reciepts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div id="green" class="flex-center position-ref full-height" v-cloak>
            <div class="content">
                <div class="title-contain">
                    <transition name="fadeIn">
                        <div class="title title-green m-b-md" v-show="isTitle">
                            <span>Green</span>
                            <div class="presentation">
                                <div class="items" :class="{'active-items': isReveal}">
                                    <span class="green">Economy</span>
                                    <span class="green">Reciepts</span>
                                </div>
                            </div>
                        </div>
                    </transition>
                </div>
                <transition name="fadeIn">
                    <div class="links" v-show="isMenu">
                        <a href="/new-receipt">New Reciept</a>
                        <a href="purchases">Purchases</a>
                        <a href="/statistics">Statistics</a>
                        <a href="/settings">Settings</a>
                    </div>
                </transition>
            </div>
        </div>
        <script type="text/javascript" src="/js/welcome.js"></script>
    </body>
</html>
