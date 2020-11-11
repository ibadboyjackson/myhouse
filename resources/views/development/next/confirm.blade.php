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
    <form action="{{ route('confirm') }}">
        <div class="row justify-content-center">
            <div class="panel mt-57 rounded mx-sm-auto">
                <div class="row">
                    <div class="col-md-5">
                        <div class="content-top">
                            <h3>SE CONNECTER</h3>
                            <div class="text-center">
                                <div class="paragraph-1">
                                    Un lien a été envoyé à
                                </div>
                                <div class="paragraph-2">
                                    johndoe@gmail.com
                                </div>
                                <div class="paragraph-3">
                                    <div class="link-text">
                                        Vous n'avez pas reçu d'email ?
                                    </div>
                                    <div class="link">
                                        <a href="{{ route('password') }}">Renvoyer un nouveau lien</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="text-bottom conditions">
                                    Termes & Charte
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="second-place">
                            <div> Veuillez accéder à votre boite email</div>
                            <div>pour valider la réinitialisation de</div>
                            <div>votre mot de passe</div>
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
