<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myhouse/app.css') }}">

</head>
<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('logo/myhouse.svg') }}" alt="MyHouse-Logo">
        </a>

        <div class="rex ml-auto">


            <div class="group">
                <a href="{{ route('login') }}" class="user" style="font-size: 25px">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <span class="user-text"> Se connecter </span>
            </div>

            <div class="group group-2">
                <a href="#" class="button-publish">Publier mon annonce</a>
            </div>

            <div class="group">
                <a href="#" class="button-publish-2">BANNIERE 2 </a>
            </div>

        </div>
        <div class="rex-2">
            <a href="" class="hamburger">
                <span></span>
            </a>
        </div>
    </div>
</nav>

<!-- End Navigation -->

<!-- Section page -->
<div class="container">
    <div class="col-md-12 justify-content-center">
        <div class="section-1">
            <span class="circles">
                <span class="circle-item">echange</span>
            </span>
            <span class="circles-2">
                <span class="circle-item-2">bail location</span>
            </span>
            <span class="circles-3">
                <span class="circle-item-3">achat</span>
            </span>
        </div>
        <div class="section-2">
            Un contenu de test
        </div>
    </div>
</div>




<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</body>
</html>
