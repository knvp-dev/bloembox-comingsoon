<!DOCTYPE html>
<html>
    <head>
        <title>Bloembox.be</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="content" id="app">
                <div class="logo"><img src="{{ asset('images/logo@2x.png') }}" alt=""></div>
                <div class="comingsoon">
                    <span>Coming soon</span>
                </div>
                <p class="intro">Bloembox is een innovatieve en eenvoudige manier om een bloemetje te laten leveren bij de persoon die je lief hebt, zonder dat het jou al te veel moeite kost!</p>
                <span class="line"></span>
                <div class="register" v-if="!loading" v-show="!success">
                    <p>Als eerste op de hoogte zijn van de lancering?</p><br>
                    <input type="email" name="email" id="email" placeholder="Email adres" v-model="email"><br>
                    <button class="submit" v-on:click="register">VERZENDEN</button>
                </div>
                <div class="loadingandconfirm">
                    <div class="loader" v-if="loading">Loading...</div>
                    <div class="success" v-if="success"><i class="fa fa-check"></i> <br> Bedankt, U wordt op de hoogte gehouden van de lancering!</div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
