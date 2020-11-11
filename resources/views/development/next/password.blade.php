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
    <form action="{{ route('success') }}">
        <div class="row justify-content-center">
            <div class="panel mt-57 rounded mx-sm-auto">
                <div class="row">
                    <div class="col-md-5">
                        <div class="content-top">
                            <h3>SE CONNECTER</h3>
                            <div class="has-form">
                                <form action="{{ route('confirm') }}" method="get">
                                    <div class="field">
                                        <label for="doge" class="field-label">mot de passe</label>
                                        <input type="password" id="password" name="doge" class="field-input">
                                        <a href="#" class="show-password">
                                            <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="field">
                                        <label for="doge" class="field-label">mot de passe</label>
                                        <input type="password" id="password" name="doge" class="field-input">
                                        <a href="#" class="show-password">
                                            <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="field-seconds">
                                        <div class="text-center">
                                            <div class="lg-connection">
                                                <button class="btn btn-connections" type="submit">Envoyer</button>
                                            </div>
                                            <div class="mt-5 conditions">Termes & Charte </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="second-place">
                            <div>Ok ! </div>
                            <div>Vous pouvez changer votre</div>
                            <div>mot de passe</div>
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
