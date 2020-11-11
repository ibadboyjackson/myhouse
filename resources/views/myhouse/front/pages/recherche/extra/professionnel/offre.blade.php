@extends('myhouse.front.template')

@section('title')
    {{ $name }}
@stop

@section('content')
    <div class="the-page pb-5">
        <div class="the-page-mt">
            <div class="the-page-close-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
            <div class="the-page-head">
                <div>
                    <div class="the-page-head-title">
                        Appartement 120m2
                    </div>
                    <div class="the-page-head-hr"></div>
                </div>
            </div>

            @include('myhouse.front.pages.recherche.extra.modules.share')
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
                            <div class="the-page-enterprise-logo-box-content-button-button">{{ __('myhouse/recherche/professionnel/offre.aa') }}</div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="the-page-enterprise-promotion">
                <div class="the-page-enterprise-promotion-img">
                    <img src="{{ asset('images/residential/single/menu/pro.svg') }}" alt="">
                </div>
                <div class="the-page-enterprise-promotion-text">
                    <div class="the-page-enterprise-promotion-text-first">
                        {{ __('myhouse/recherche/professionnel/offre.ab') }} <br>
                        {{ __('myhouse/recherche/professionnel/offre.ac') }}
                    </div>
                </div>
            </div>

            <div class="offre">
                <div class="particulier">
                    <div class="the-page-enterprise-logo-box-content-achat-type">
                        <div class="the-page-enterprise-logo-box-content-achat-type-box">
                            <div class="particulier-type">
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                    {{ __('myhouse/recherche/professionnel/offre.ad') }}
                                </div>
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                    790.000 <span>MAD</span>
                                </div>
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-surface-box">
                                    {{ __('myhouse/recherche/professionnel/offre.ae') }} m2
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
                                        {{ __('myhouse/recherche/professionnel/offre.af') }}
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
                                    <button class="btn btn-light btn-publish">{{ __('myhouse/recherche/professionnel/offre.ag') }} 14/09/2019</button>
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
                        @include('myhouse.front.pages.recherche.extra.modules.discover')
                    </div>
                    <div class="the-page-grid-container-item">
                        @include('myhouse.front.pages.recherche.extra.modules.extraleft')
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

