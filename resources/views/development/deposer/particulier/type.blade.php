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
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/iosCheckbox.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/tabs.css') }} " />
    <link rel="stylesheet" type="text/css" href="{{ asset('development/css/tabstyles.css') }} " />

    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('development/css/select/dist/css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
@include('development.next.include.myhouseNav')

<div class="particulier">
    <div class="c-page">
        <div class="ca-page">


            <div class="ca-page-item">
                <div class="ca-page-item-first">
                    <div class="ca-page-item-first-img">
                        <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
                    </div>
                    <div class="ca-page-item-first-text">particuliers</div>
                </div>
                <div class="pa-info">
                    <div class="pa-info-left">
                        Sauvegarder l'annonce <br>
                        et continuer plus tard
                    </div>
                    <div class="pa-info-right">
                        <label for="#">
                            <input type="checkbox" name="#" id="#" class="ios">
                        </label>
                    </div>
                </div>
                <div class="pa-info-first">
                    <div class="pa-info-hr"></div>
                    <div class="pa-info-first-text">
                        <span class="pa-info-desc-type-one-left">Compte</span>  <span>abderazakjamo@hotmail.com</span>
                    </div>
                    <div class="pa-info-hr"></div>
                    <div class="pa-info-desc">
                        <div class="pa-info-desc-type-one">
                            <div class="pa-info-desc-type-one-left">Votre abonnement</div>
                            <div class="pa-info-desc-type-one-right">Gratuit</div>
                        </div>
                        <div class="pa-info-desc-type-two mt-1">
                            <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
                            <div class="pa-info-desc-type-two-right">
                                <span class="text-red"></span> 4
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="ca-page-item">
                <div class="ca-page-item-second">
                    <div class="ca-page-item-second-title">
                        <span class="ca-page-item-second-title-first">VOTRE ANNONCE</span>
                        <span class="ca-page-item-second-title-second text-uppercase">Particuliers</span>
                    </div>
                    <div class="ca-page-item-second-round">
                        <div class="ca-page-hr"></div>
                        <div class="ca-page-item-second-round-block">
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">1</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Connecté(e)</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">2</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Transaction</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">2</div>
                                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">Type de bien</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">2</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Description du
                                    <br> bien</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">3</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Localisation</div>
                            </div>
                            <div class="ca-page-item-second-round-block-rounded">
                                <div class="ca-page-item-second-round-block-rounded-circle">4</div>
                                <div class="ca-page-item-second-round-block-rounded-text">Médias & Texte</div>
                            </div>
                        </div>
                    </div>

                    <div class="ca-page-item-third-connexion">
                        <form action="{{ route('particulier.description') }}" method="get">
                            @csrf
                            <div class="ca-page-item-third-types-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    TYPE DE BIEN
                                </div>
                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                <div class="ca-page-item-third-type-box">
                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="http://myhouse.com/images/residential/residential.svg" alt="">
                                            résidentiel
                                        </div>
                                        <div class="pc-y">
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort9" name="type" value="appartement">
                                                    <label for="sort9">Appartement</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort10" name="type" value="villa">
                                                    <label for="sort10">Villa</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort11" name="type" value="maison">
                                                    <label for="sort11">Maison</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort12" name="type" value="chalet">
                                                    <label for="sort12">Cabanon/Chalet</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort13" name="type" value="riad">
                                                    <label for="sort13">Riad</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort14" name="type" value="ferme">
                                                    <label for="sort14">Ferme</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort147" name="type" value="chambre">
                                                    <label for="sort147">Chambre d'hôte</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb ">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="http://myhouse.com/images/residential/commercial.svg" alt="">
                                            commercial
                                        </div>
                                        <div class="pc-y">
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort30" name="type" value="cite">
                                                    <label for="sort30">Cité universitaire</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort15" name="type" value="bureau">
                                                    <label for="sort15" style="margin-top: 15px;">Bureau/
                                                        Appart'professionnel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort16" name="type" value="plateau">
                                                    <label for="sort16">Plateau</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort17" name="type" value="entrepot">
                                                    <label for="sort17">Entrepôt/Hangar</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort18" name="type" value="garage">
                                                    <label for="sort18">Garage</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort19" name="type" value="local_industriel">
                                                    <label for="sort19">Local industriel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort189" name="type" value="local_commercial">
                                                    <label for="sort189">Local commercial</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort20" name="type" value="propriete_agricole">
                                                    <label for="sort20">Propriété agricole</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort21" name="type" value="immeuble">
                                                    <label for="sort21">Immeuble/Bâtiment</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                        <div class="pt_ytt text-center text-uppercase">
                                            <img src="http://myhouse.com/images/residential/terrain.svg" alt="">
                                            terrain
                                        </div>
                                        <div class="pc-y">

                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort39" name="type" value="residentiel">
                                                    <label for="sort39">Résidentiel</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort22" name="type" value="commercial">
                                                    <label for="sort22">Commercial</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort23" name="type" value="agricole">
                                                    <label for="sort23">Agricole</label>
                                                </div>
                                            </div>
                                            <div class="pc_yt">
                                                <div class="pc_ytt">
                                                    <input type="radio" id="sort24" name="type" value="industriel">
                                                    <label for="sort24">Industriel</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="yt_b text-center">
                                    <button class="btn btn-prev mr-2">
                                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fa fa-chevron-left" aria-hidden="true"></i> -->
                                    </button>
                                    <button class="btn btn-contact text-uppercase">continuer</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>





            <div class="ca-page-item">
                <div class="ca-page-item-third">
                    <div class="ca-page-item-third-button-x clearfix">
                        <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                    </div>
                    <div class="ca-page-item-thirds-thumbs">
                        <img src="{{ asset('images/residential/single/rr.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        Sélectionner le type de bien
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



















<svg class="hidden" style="display: none">
    <defs>
        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" />
    </defs>
</svg>






<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="{{ asset('development/js/cbpFWTabs.js') }} "></script>


<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>
<script src="{{ asset('development/js/iosCheckbox.js') }} "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
<script src="{{ asset('js/map.js') }}"></script>

<script>
    (function() {
        [].slice.call(document.querySelectorAll(".tabs")).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
</script>

<script type="text/javascript">
    jQuery(function ($){
        $(".ios").iosCheckbox();
    });
</script>

</body>
</html>

