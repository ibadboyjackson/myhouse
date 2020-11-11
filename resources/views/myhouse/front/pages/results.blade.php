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

<!-- right sidebar -->
<div class="sidebar">
    <div class="top">
        <span class="icon-1" id="icon-1">
            <i class="fas fa-angle-right icon-left"></i>
        </span>
        <span class="icon-2" id="icon-2">
            <i class="fas fa-thumbtack"></i>
        </span>
    </div>
</div>
<!-- Button sidebar -->
<div class="sidebar-button">
    <span class="icon-3" id="icon-3">
        <i class="fas fa-angle-right icon-button"></i>
    </span>
    <span class="btn-text">f</span>
    <span class="btn-text">i</span>
    <span class="btn-text">l</span>
    <span class="btn-text">t</span>
    <span class="btn-text">r</span>
    <span class="btn-text">e</span>
    <span class="btn-text">s</span>
</div>

<!-- Content -->
<div class="container">
    <div class="top-page">
        <div class="btn-top">
            <a class="btn-map" href="#">map</a>
            <a class="btn-list" href="#">liste</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="middle-page">
        <a href="#" class="btn-quarter-1">Maarif</a>
        <a href="#"  class="btn-quarter-2">Anfa</a>
        <a href="#"  class="btn-quarter-3">Racine</a>
        <div class="form">
            <div class="form">
                <select name="" id="">
                    <option value="1">Trier</option>
                </select>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-md-3 content-block">
                <div class="content-block-page">
                    <img src="{{ asset('images/rental/5.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 content-block">
                <div class="content-block-page">
                    <img src="{{ asset('images/rental/5.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 content-block">
                <div class="content-block-page">
                    <img src="{{ asset('images/rental/5.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 content-block">
                <div class="content-block-page">
                    <img src="{{ asset('images/rental/5.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('myhouse/myhouse.js') }}"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</body>
</html>
