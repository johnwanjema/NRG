<!DOCTYPE html>
<html lang="en">

<head>
    <title>NRG RADIO - MVPS</title>
    <link rel="icon" href="https://nrg.radio/wp-content/uploads/2018/04/favicon.png" sizes="32x32" />
    <link rel="icon" href="https://nrg.radio/wp-content/uploads/2018/04/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://nrg.radio/wp-content/uploads/2018/04/favicon.png" />
    <meta charset="utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />


    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/assets/js/plugins/slick/slick.css">
    <link rel="stylesheet" href="/assets/js/plugins/slick/slick-theme.css">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="/assets/css/codebase.min.css">

    <style>
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            padding-left: 220px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <router-link class="navbar-brand" to="/mvps">
                <img src="/images/mvpsLogo.png" width="100" height="50" alt="" />
                NRG - MVPS
            </router-link>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <router-link class="navbar-brand" to="/mvps/dashboard">
                        <h4 style="color:white;padding-top:15px">Dashboard</h4>
                    </router-link>
                  
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto"></ul>
            </div>
        </nav>
        <router-view />

    </div>
    <script src="/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>