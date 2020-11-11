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

<div class="chat mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <div class="wraps">
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-1">
                @include('development.includes.aside')
            </div>
            <div class="col-md-11 col-lg-10 col-xl-11">
                <div class="">
                    <div class="row ml-8 justify-content-center">
                        <div class="contact mt-5">
                            <div class="row justify-content-center">
                                <div class="profile-title">Modifier mes informations</div>
                            </div>
                            <div class="has-field">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field">
                                            <label for="username" class="field-label">Nom d'utilisateur</label>
                                            <input type="text" id="username" name="username" value="Nabil Taoussi" class="field-input">
                                        </div>
                                        <div class="field">
                                            <label for="city" class="field-label">Ville</label>
                                            <input type="text" id="city" name="city" value="Rabat" class="field-input">
                                        </div>
                                        <div class="field">
                                            <label for="phone" class="field-label">Téléphone portable</label>
                                            <input type="text" id="phone" name="phone" value="+21266666666" class="field-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field">
                                            <label for="email" class="field-label">Email</label>
                                            <input type="email" id="email" name="email" value="nabiltaoussi@gmail.com" class="field-input">
                                        </div>
                                        <div class="field">
                                            <label for="country" class="field-label">Pays</label>
                                            <input type="text" id="country" name="country" value="Maroc" class="field-input">
                                        </div>
                                        <div class="field">
                                            <label for="password" class="field-label">Mot de passe</label>
                                            <input type="password" id="password" name="password" class="field-input">
                                            <a href="#" class="show-password">
                                                <img src="{{ asset('images/residential/eye.svg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-button mt-5 text-center">
                                <button class="btn btn-contact">Modifier</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
