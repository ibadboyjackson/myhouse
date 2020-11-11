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

<div class="overlays mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <form action="{{ route('test') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="panels mt-57 rounded mx-sm-auto">
                    <div class="mt-59 mx-57">
                        <div class="panel-title-login text-center text-uppercase">S'INSCRIRE</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field">
                                    <label for="doge" class="field-label">nom d'utilisateur (trice)</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                                <div class="field">
                                    <label for="doge" class="field-label">ville</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                                <div class="field">
                                    <label for="doge" class="field-label">téléphone mobile</label>
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
                            <div class="col-md-6">
                                <div class="float-right">
                                    <div class="field">
                                        <label for="doge" class="field-label">email</label>
                                        <input type="email" id="email" name="doge" class="field-input">
                                    </div>
                                    <div class="field">
                                        <label for="doge" class="field-label">pays</label>
                                        <input type="email" id="email" name="doge" class="field-input">
                                    </div>
                                    <div class="field">
                                        <label for="doge" class="field-label">téléphone mobile (2)</label>
                                        <input type="email" id="email" name="doge" class="field-input">
                                    </div>
                                    <div class="field">
                                        <label for="doge" class="field-label">confirmer le mot de passe</label>
                                        <input type="password" id="password" name="doge" class="field-input">
                                        <a href="#" class="show-password">
                                            <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="text-center s-ry">
                            <div class="has-condition">
                                <label for="">
                                    <input type="checkbox">
                                    J'ai lu et j'accepte les termes et conditions
                                </label>
                            </div>
                            <div class="inscription mt-4">
                                <button class="btn  btn-connections" type="submit">continuer</button>
                            </div>
                            <div class="conditions mt-4">
                                Termes & Charte
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
