<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MyHouse </title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('development/css/header.css') }}">


    <!-- CDN LINK -->

    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-test">

@include('development.next.include.myhouseNav')




<!-- Overlay -->

<div class="overlay mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <form action="#">
        <div class="row justify-content-center">
            <div class="panel mt-57 rounded mx-sm-auto">
                <div class="panel-title-login text-uppercase">se connecter</div>
                <div class="rr-row">
                    <div class="row">
                        <div class="col-sm-5 offset-sm-3 col-md-8 offset-md-4 .col-12 mt-5 ">
                            <div class="row r-row">
                                <div class="col-md-12">
                                    <div id="has-error">
                                        <div class="pr">
                                            <div class="field">
                                                <label for="doge" class="field-label">email ou mobile</label>
                                                <input type="email" id="email" name="doge" class="field-input">
                                            </div>
                                            <div class="field">
                                                <label for="doge" class="field-label">mot de passe</label>
                                                <input type="password" id="password" name="doge" class="field-input">
                                                <a href="#" class="show-password">
                                                    <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--     <div class="col-md-6">
                                    <div class="ml-6">
                                        <div class="dis errors" id="error">
                                            <span class="error-text-1">Commencez l'expérience</span>
                                            <span class="error-text-2 d-block">MyHouse !</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="mt-5 lg-check">
                                <label for="">
                                    <input type="checkbox">
                                    Se souvenir de moi
                                </label>
                                <span class="password float-right">
                                 <a href="{{ route('forgot') }}">Identifiants oubliés ?</a>
                                </span>
                                <div class="text-center mt-5">
                                    <div class="inscription text-uppercase">
                                        <a href="{{ route('inscription') }}">s'inscrire</a>
                                    </div>
                                    <div class="lg-connection mt-4">
                                        <button class="btn btn-connections" id="btn-connexion" type="submit">se connecter</button>
                                    </div>
                                    <div class="mt-5 conditions">Termes & Charte </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<!-- Overlay -->





<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</body>
</html>
