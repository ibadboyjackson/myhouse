<!doctype html>
<!--/
                        _   _       _a_a
            _   _     _{.`=`.}_    {/ ''\_
      _    {.`'`.}   {.'  _  '.}  {|  ._oo)
     { \  {/ .-. \} {/  .' '.  \} {/  |
~^~^~`~^~`~^~`~^~`~^~^~`^~^~`^~^~^~^~^~^~`^~~`MyHouse.ma
/-->
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

<div class="overplay mt-89">
    <div class="d-flex justify-content-end mr-4 mt-3">
        <img src="{{ asset('images/residential/x.svg') }}" alt="">
    </div>
    <div class="wraps">
        <div class="row">
            <div class="col-md-2">
                @include('development.includes.aside')
            </div>
            <div class="col-md-10 mb-5">
                <div class="bg-warning mt-10 mr-41">
                    <div class="facture">
                        <div class="facture-first pl-3 pt-3">
                            <div class="button-facture">
                                <button class="btn btn-facture text-uppercase">imprimer</button>
                            </div>
                            <div class="facture-share">
                                <img src="{{ asset('images/residential/menu/list/facture/share.svg') }}" alt="">
                                <span class="facture-text-first text-capitalize">partager</span>
                            </div>
                            <div class="facture-bare">
                                <span class="invisible">2</span>
                            </div>
                            <div class="facture-head">
                                <span class="facture-head-name text-left">MyHouse</span>
                                <span class="facture-head-title text-capitalize">facture</span>
                            </div>
                            <div class="facture-address ml-62">
                                <div class="facture-street">
                                    234 Bd Zerktouni
                                </div>
                                <div class="facture-country">
                                    BP 20030 Casablanca, Maroc
                                </div>
                            </div>
                            <div class="facture-destination ml-62">
                                <div class="facture-destination-intension">
                                    Facture à l'attention de
                                    <span class="float-right mr-94">Date: 15 avril 2019</span>
                                </div>
                                <div class="facture-destination-name">Ahmed Sibouli</div>
                                <div class="facture-destination-address">Avenir Immobilier, 12 Rue des Rosiers BP 22345 Casablanca, Maroc</div>
                            </div>

                            <div class="facture-table ml-62 mr-94">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr class="bg-first">
                                        <th>#</th>
                                        <th class="text-uppercase">RéFéRENCE</th>
                                        <th>DESCRIPTION</th>
                                        <th>DATE</th>
                                        <th>PRIX</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-table">
                                        <th scope="row">1</th>
                                        <td>3476B67</td>
                                        <td>Projet immobilier</td>
                                        <td>10/11/2019</td>
                                        <td>1000,00 MAD</td>
                                    </tr>
                                    <tr class="bg-second bg-table">
                                        <th scope="row">2</th>
                                        <td>6779A52</td>
                                        <td>Projet immobilier</td>
                                        <td>15/12/2019</td>
                                        <td>1000,00 MAD</td>
                                    </tr>
                                    <tr class="bg-table">
                                        <th scope="row">3</th>
                                        <td>2476B88</td>
                                        <td>Projet immobilier</td>
                                        <td>04/01/2020</td>
                                        <td>500,00 MAD</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="facture-footer ml-62 mr-94">
                                <div class="clearfix">
                                    <div class="paye float-left">
                                        <img src="{{ asset('images/residential/menu/list/paye.svg') }}" alt="">
                                    </div>
                                    <div class="facture-addition float-right text-right">
                                        <div class="addition-first">Total: 2500.00 MAD</div>
                                        <div class="addition-first">Remise: 10%</div>
                                        <div class="addition-first">TVA: 10%</div>
                                        <div class="addition-last text-uppercase mt-1">MAD 2500.00</div>
                                    </div>
                                </div>
                                <div class="facture-tampon text-uppercase text-center">
                                    TAMPON MYHOUSE
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
