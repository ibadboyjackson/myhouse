@extends('myhouse.front.template')

@section('title')
    {{ $name }}
@stop

@section('content')
    <div class="the-neuf">
        <div class="the-page pb-5">
            <div class="the-page-mt">
                <div class="the-page-close-button">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="">
                </div>
                <div class="the-real-page-head">
                    <div class="the-page-head">
                        <div class="the-page-head-title">
                            Résidence du val de marne
                        </div>
                    </div>
                    <div class="the-page-contact"></div>
                    @include('myhouse.front.pages.recherche.extra.modules.share')
                </div>
                <div class="the-page-head-hr"></div>
                <div class="the-page-neuf-promotion">
                    <div class="the-page-neuf-promotion-title">
                        Promotions & cadeaux, événements
                    </div>

                    <div class="the-page-neuf-promotion-box">
                        <div class="the-page-neuf-promotion-box-one">
                            <div class="the-page-neuf-promotion-box-one-text">
                                24 ET 25 JUIN
                                <div class="the-page-neuf-promotion-box-one-text-img">
                                    <img src="{{ asset('images/residential/single/menu/jp.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="the-page-neuf-promotion-box-one-connexion">
                                <div class="the-page-neuf-promotion-box-one-connexion-img">
                                    <img src="{{ asset('images/residential/single/menu/s5.svg') }}" alt="">
                                </div>
                                <div class="the-page-neuf-promotion-box-one-connexion-text">S'inscrire</div>
                            </div>
                        </div       >
                        <div class="the-page-neuf-promotion-box-two">
                            <div class="the-page-neuf-promotion-box-two-box">
                                <div class="the-page-neuf-promotion-box-two-box-left">
                                    <div class="the-page-neuf-promotion-box-two-box-left-one">
                                        TOMBOLA
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-left-two">
                                        Tirage le 3 mai 2020
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-left-three">
                                        <img src="{{ asset('images/residential/single/menu/ca.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-left-four">
                                        <div class="the-page-neuf-promotion-box-two-box-left-four-one">
                                            <img src="{{ asset('images/residential/single/menu/icos.svg') }}" alt="">
                                        </div>
                                        <div class="the-page-neuf-promotion-box-two-box-left-four-two">S'inscrire</div>
                                    </div>
                                </div>
                                <div class="the-page-neuf-promotion-box-two-box-right">
                                    <div class="the-page-neuf-promotion-box-two-box-right-one">Achetez</div>
                                    <div class="the-page-neuf-promotion-box-two-box-right-two">
                                        du <br>
                                        1 janvier <br>
                                        au 1 mai 2020
                                    </div>
                                    <div class="the-page-neuf-promotion-box-two-box-right-three">
                                        Appartement <br>
                                        Villa
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="the-page-neuf-promotion-box-three">
                            <div class="page-list-item-enterprise-event-chasse-box">
                                <div class="page-list-item-enterprise-event-chasse-box-one">
                                    Chasse
                                    au
                                    Trésor
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-two">
                                    <img src="http://myhouse.com/images/residential/single/menu/pi.svg " alt="">
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-three">
                                    <div class="page-list-item-enterprise-event-chasse-box-three-text-one">gagnez</div>
                                    <div class="page-list-item-enterprise-event-chasse-box-three-text-two">100.000 dh</div>
                                    <div class="page-list-item-enterprise-event-chasse-box-three-text-three">à l'achat de votre bien</div>
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-four">
                                    <img src="http://myhouse.com/images/residential/single/menu/fo.svg " alt="">
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-five">
                                    Samedi 23 juillet 2020
                                </div>
                                <div class="page-list-item-enterprise-event-chasse-box-six" data-toggle="modal" data-target="#modal">
                                    <div class="page-list-item-enterprise-event-chasse-box-six-one">
                                        <img src="http://myhouse.com/images/residential/single/menu/icoo.svg " alt="">
                                    </div>
                                    <div class="page-list-item-enterprise-event-chasse-box-six-two">S'inscrire</div>
                                </div>
                            </div>
                        </div>
                        <div class="the-page-neuf-promotion-box-four">
                            <div class="the-page-neuf-promotion-box-four-box">
                                <div class="the-page-neuf-promotion-box-four-box-right-four">
                                    <img src="{{ asset("images/residential/single/menu/pro.svg") }}" alt="">
                                </div>
                                <div class="the-page-neuf-promotion-box-four-box-right">
                                    <div class="the-page-neuf-promotion-box-four-box-right-one">
                                        Votre salon <br>
                                        meublé !
                                    </div>
                                    <div class="the-page-neuf-promotion-box-four-box-right-two">Contactez-nous vite !</div>
                                    <div class="the-page-neuf-promotion-box-four-box-right-three">Offre limitée</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="the-page-appartement-title" >
                    Appartement 134 m2
                </div>
                <div class="the-page-enterprise-logo">

                    <div class="the-page-enterprise-logo-box">

                        <div class="the-page-enterprise-logo-box-img">
                            <img src="{{ asset('images/residential/single/logo.svg') }}" alt="">
                        </div>

                        <div class="the-page-enterprise-logo-box-content">

                            <div class="the-page-enterprise-logo-box-content-text">
                                Agence Real <br>
                                Estate Morocco
                            </div>
                            <div class="the-page-enterprise-logo-box-content-button">
                                <div class="the-page-enterprise-logo-box-content-button-button">{{ __('myhouse/recherche/neuf/bien.aa') }}</div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="particulier">
                    <div class="the-page-enterprise-logo-box-content-achat-type">
                        <div class="appartement-type-box">
                            <div class="appartement-type-box-item">
                                <div class="madias-bare-img">
                                    <img src="{{ asset('images/residential/single/media.svg') }}" alt="">
                                    <div class="madias-bare-text">
                                        1.000.000 <span>MAD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="appartement-type-box-item">
                                <div class="appartement-type-box-sp">
                                    <div class="appartement-type-box-sp-text">{{ __('myhouse/recherche/neuf/bien.ab') }} m2</div>
                                    <div class="appartement-type-box-sp-text-two">
                                        {{ __('myhouse/recherche/neuf/bien.ac') }}
                                        <span class="appartement-type-box-sp-text-two-text">15.000</span>
                                        <span class="appartement-type-box-sp-text-two-text-span text-uppercase">MAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="the-page-enterprise-logo-box-content-achat-type">
                     <div class="the-page-enterprise-logo-box-content-achat-type-box">
                         <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                             Achat
                         </div>
                         <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                             790.000 <span>MAD</span>
                         </div>
                         <div class="the-page-enterprise-logo-box-content-achat-type-box-text-surface-box">
                             Prix m2
                         </div>
                     </div>
                 </div> -->

                <!-- With grid -->
                <div class="the-page-grid">
                    <div class="the-page-grid-container">
                        <div class="the-page-grid-container-item">
                            @include('myhouse.front.pages.recherche.include.calendar')
                        </div>
                        <div class="the-page-grid-container-item">
                            <div class="medias">
                                <div class="the-page-grid-container-number">6/20</div>
                                <div id="sync2" class="owl-carousel">
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/6.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/2.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/3.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/4.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/5.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/6.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/3.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/5.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/6.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/2.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/5.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/2.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/1.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/3.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/item.png') }}" alt=""  class="img-fluid">
                                    </div>
                                </div>
                                <div id="sync1" class="owl-carousel">
                                    <div class="item">
                                        <div class="sync-text rounded-pill">
                                            <img src="{{ asset('images/residential/single/heart.svg') }}" alt="">
                                            {{ __('myhouse/recherche/neuf/bien.ad') }}

                                        </div>
                                        <video controls class="d-block w-100">
                                            <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('images/residential/single/7.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="the-page-description">
                                <div class="the-page-description-head">
                                    <div class="the-page-description-head-title">
                                        Une résidence de prestige
                                        <div class="the-page-description-head-title-hr"></div>
                                    </div>
                                    <div class="the-page-description-head-publish">
                                        <button class="btn btn-light btn-publish">{{ __('myhouse/recherche/neuf/bien.ae') }} 14/09/2019</button>
                                    </div>
                                </div>
                                <div class="the-page-description-body">
                                    Culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptartem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi ropeior architecto beatae vitae dicta sunt.doloremque laudantium,
                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi ropeior architecto beatae
                                    vitae doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    ropeior architecto beatae vitae dicta sunt.doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                    ab illo inventore veritatis et quasi ropeior architecto beatae vitae. Culpa qui officia deserunt mollit
                                    anim id est laborum. Sed ut
                                </div>
                            </div>
                            @include('myhouse.front.pages.recherche.extra.modules.description')
                        </div>
                        <div class="the-page-grid-container-item">
                            @include('myhouse.front.pages.recherche.extra.modules.extraleft')
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="the-neuf">
        <!-- Modal First -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <a href="" class="close" data-dismiss="modal" aria-label="Close">
                            <div class="modal-body-x-button">
                                <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                            </div>
                        </a>

                        <div class="modal-body-title text-uppercase">{{ __('myhouse/recherche/neuf/resultat.ad') }}</div>
                        <div class="modal-body-desc">{{ __('myhouse/recherche/neuf/resultat.ae') }}</div>
                        <div class="modal-body-desc">{{ __('myhouse/recherche/neuf/resultat.af') }}</div>
                        <div class="modal-body-desc-next text-center">
                            <div class="modal-body-desc-next-one">{{ __('myhouse/recherche/neuf/resultat.ag') }}</div>
                            <div class="modal-body-desc-next-two">{{ __('myhouse/recherche/neuf/resultat.ah') }} (23/07/2020)</div>
                        </div>
                        <div class="modal-body-content">
                            <div class="modal-body-content-left">
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.ai') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.aj') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                            </div>
                            <div class="modal-body-content-right">
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.ak') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                                <div class="field">
                                    <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.al') }}</label>
                                    <input type="email" id="email" name="doge" class="field-input">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body-content-late-foot">
                            <div class="field">
                                <label for="doge" class="field-label">{{ __('myhouse/recherche/neuf/resultat.am') }}</label>
                                <input type="email" id="email" name="doge" class="field-input">
                            </div>
                        </div>
                        <div class="modal-body-content-foot">
                            <div class="modal-body-coontent-foot-button text-uppercase">{{ __('myhouse/recherche/neuf/resultat.an') }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Modal First -->
    </div>
@stop
