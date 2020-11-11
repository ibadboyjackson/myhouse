@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/abonnement.aa') }}
@stop

@section('content')
    <div class="abonnementes">
        <div class="c-page a-neuf">
            <div class="ca-page">
                <div class="ca-page-item">
                    <!-- Must include the left bar -->
                    @include('myhouse.back.annonces.modules.neuf.left')
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-second">

                        <!-- Must include the progress bar -->
                        @include('myhouse.back.annonces.modules.neuf.progress')

                        <form action="{{ route('neuf.enregistrement') }}" method="get">

                            <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-connexion-box">

                                    <div class="ca-page-item-third-connexion-box-title">{{ __('myhouse/back/annonces/neuf/abonnement.ab') }}</div>
                                    <div class="ca-page-item-third-connexion-box-title-hr"></div>
                                    <div class="ca-page-item-third-connexion-box-title-title">{{ __('myhouse/back/annonces/neuf/abonnement.ac') }}</div>


                                </div>
                                <div class="ca-page-item-third-abonnement-box-mt">
                                    <div class="ca-page-item-third-abonnement-box">
                                        <div class="ca-page-item-third-abonnement-box-text">
                                            {{ __('myhouse/back/annonces/neuf/abonnement.ad') }}
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
                                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/abonnement.af') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!--  <div class="ca-page-item-second-subscription">
                                  <div class="ca-page-item-second-subscription-box">
                                      <div class="ca-page-item-second-subscription-box-block">

                                          <div class="ca-page-item-second-subscription-box-block-zero">
                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack" name="pack1" checked="">
                                                      <label for="pack">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-second text-center">
                                                      <div>offre</div>
                                                      <div>de</div>
                                                      <div>lancement</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-second-one">gratuit</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack1" name="pack1">
                                                      <label for="pack1">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                      <div>pack 1</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-one">3000</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>

                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack2" name="pack1">
                                                      <label for="pack2">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                      <div>pack 2</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-one">4000</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack3" name="pack1">
                                                      <label for="pack3">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                      <div>pack 3</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-one">5000</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack4" name="pack1">
                                                      <label for="pack4">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                      <div>pack 4</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-one">6000</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack5" name="pack1">
                                                      <label for="pack5">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                      <div>pack 5</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-one">7000</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>
                                              <div class="ca-page-item-second-subscription-box-block-first">
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-first">
                                                      <input type="radio" id="pack6" name="pack1">
                                                      <label for="pack6">
                                                      </label>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-item-third text-center">
                                                      <div>pack 6</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-one">12.000</div>
                                                      <div class="ca-page-item-second-subscription-box-block-first-item-third-two">MAD/mois</div>
                                                  </div>
                                                  <div class="ca-page-item-second-subscription-box-block-first-hr"></div>
                                              </div>


                                          </div>


                                      </div>
                                  </div>
                              </div> -->



                        </form>
                    </div>
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-third">
                        <div class="ca-page-item-third-button-x clearfix">
                            <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>
                        <div class="ca-page-item-third-thumb">
                            <img src="{{ asset('images/residential/subs.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/neuf/abonnement.ae') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
