@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/abonnement.aa') }}
@stop

@section('content')
    <div class="c-page">
        <div class="ca-page">
            <div class="ca-page-item">
                @include('myhouse.back.annonces.modules.professionnel.left')
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-seconds">
                    @include('myhouse.back.annonces.modules.professionnel.progress')

                    <form action="{{ route('professionnel.enregistrement') }}" method="get">
                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">
                                <div class="ca-page-item-third-connexion-box-title">{{ __('myhouse/back/annonces/professionnel/abonnement.ab') }}</div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>
                            </div>

                            <div class="ca-page-item-third-abonnement-box-mt">
                                <div class="ca-page-item-third-abonnement-box">
                                    <div class="ca-page-item-third-abonnement-box-text">
                                        Votre abonnement en cours                                
                                    </div>
                                    <div class="ca-page-item-third-abonnement-box-content">
                                        <div class="ca-page-item-third-abonnement-box-content-item-one">
                                            <div class="ca-page-item-third-abonnement-box-content-first">
                                                <div class="ca-page-item-third-abonnement-box-content-first-pack">
                                                    <div class="ca-page-item-third-abonnement-box-content-first-pack-valide">
                                                        <img src="{{ asset('images/residential/single/valide.svg') }}" alt="">
                                                    </div>
                                                    <div class="ca-page-item-third-abonnement-box-content-first-pack-text">
                                                        Pack 6
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-first-price">
                                                    <div class="ca-page-item-third-abonnement-box-content-first-price-price">
                                                        12.000
                                                    </div>
                                                    <div class="ca-page-item-third-abonnement-box-content-first-price-unit">
                                                        MAD/mois
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-first-date">
                                                    Activé le jj/mm/aa
                                                </div>

                                            </div>
                                            <div class="ca-page-item-third-abonnement-box-content-second">

                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Annonces PROJET</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Annonces BIEN IMMOBILIER</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">200</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Vidéos HD</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Photos</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">100</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Push mobile</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Journées Portes Ouvertes</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-second-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Jeu Chasse au Trésor</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10</div>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-abonnement-box-content-item-two">
                                            <div class="ca-page-item-third-abonnement-box-content-item-two-barre"></div>
                                            <div class="ca-page-item-third-abonnement-box-content-item-two-content">
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Repère map 2x plus grand</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x15 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Repère map en couleur</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x15 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Bannière 300 x 600 px page d'accueil</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Bannière 300 x 600 px page LISTE</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Rectangle 336 x 280 px page d'accueil</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Rectangle 336 x 280 px page LISTE</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                                <div class="ca-page-item-third-abonnement-box-content-two-flex">
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-one">Bannière 970 x 90 px page d'accueil</div>
                                                    <div class="ca-page-item-third-abonnement-box-content-second-item-two">10x3 jours</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-footer">
                                        <div style="margin-top: 159px;">
                                            <div class="ca-page-footer-block" style="display: none">
                                                <div class="ca-page-footer-second">Souscrire à un nouvel abonnement?</div>
                                                <a href="{{ route('professionnel.service') }}" style="text-decoration: none; color: inherit">
                                                    <div class="ca-page-footer-third">Cliquez ici</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="cap-page-footer-fourth">

                                            















                                            <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                    <i class="fa fa-chevron-left"></i>
                                            </a>
                                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/professionnel/type.ax') }}</button>















                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-third">


                    
            <a href="{{ $url }}">
                <div class="ca-page-item-third-button-x clearfix">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                </div>
            </a>

                    <div class="ca-page-item-third-thumb">
                        <img src="{{ asset('images/residential/single/rent.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/professionnel/abonnement.ac') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
