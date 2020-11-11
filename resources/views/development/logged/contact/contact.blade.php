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
                            <div class="row fs">
                                <div class="col-md-5 fs-s">
                                    <div class="is-overlay">
                                        <div class="contact-title">MyHouse</div>
                                        <div class="contact-title-name text-capitalize">by geomark</div>
                                        <div class="contact-desc mt-4">Service Client: +212607440000</div>
                                        <div class="contact-desc-validity">Du lundi au samedi, de 8h00 à 19h00.</div>
                                        <div class="contact-desc-address mt-4">
                                            <div>Adresse postale: 265, Boulevard Zerktouni,</div>
                                            <div>Etage 9, N°92, Casablanca, Maroc.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <form action="#" class="contact-mt">
                                        <div class="form-group">
                                            <input type="text" class="form-control contact-input" placeholder="Sujet">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="#" id="" cols="30" rows="8" class="form-control textarea-input"></textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-light btn-contact text-uppercase mt-1">envoyer</button>
                                        </div>
                                    </form>
                                </div>
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
