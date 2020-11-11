@extends('myhouse.front.template')

@section('title')
    {{ $name }}
@stop

@section('content')
    <div class="the-professionnelle">
        <div class="the-page pb-5">
            <div class="the-page-mt">
                <div class="the-page-close-button">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="">
                </div>
                <div class="the-page-website">
                    <div class="the-page-website-box">
                        <div class="the-page-website-img">
                            <img src="{{ asset('images/residential/single/menu/web.svg') }}" alt="">
                        </div>
                        <div class="the-page-website-text">{{ __('myhouse/recherche/neuf/entreprise.aa') }}</div>
                    </div>
                    <div class="the-page-website-link">www.realestatemorocco.ma</div>
                </div>


                <!-- With grid -->

                <div class="the-page-grids">
                    <div class="the-page-grid-containers">
                        <div class="the-page-grid-container-item">
                            <div class="the-page-printable">
                                <div class="the-page-printable-box-one">
                                    <div class="the-page-printable-box-one-img">
                                        <img src="{{ asset('images/residential/single/menu/pdf.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-printable-box-one-text">
                                        {{ __('myhouse/recherche/neuf/entreprise.ab') }}
                                    </div>
                                </div>
                                <div class="the-page-printable-box-two">
                                    <div class="the-page-printable-box-two-img">
                                        <img src="{{ asset('images/residential/single/menu/share.svg') }}" alt="">
                                    </div>
                                    <div class="the-page-printable-box-two-text">{{ __('myhouse/recherche/neuf/entreprise.ac') }}</div>
                                </div>
                            </div>
                            <div class="the-page-thumbnail">
                                <img src="{{ asset('images/residential/single/menu/entre.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="the-page-content-bottom">
                                <div class="the-page-content-bottom-box-one">
                                    <div class="the-page-content-bottom-box-one-box">
                                        <div class="the-page-content-bottom-box-one-box-img">
                                            <img src="{{ asset('images/residential/single/menu/msg.svg') }}" alt="">
                                        </div>
                                        <div class="the-page-content-bottom-box-one-box-text">
                                            {{ __('myhouse/recherche/neuf/entreprise.ad') }}
                                        </div>
                                    </div>
                                    <div class="the-page-content-bottom-box-one-email">
                                        johndoe@hotmail.com <br>
                                        janedoe@hotmail.com
                                    </div>
                                </div>
                                <div class="the-page-content-bottom-box-two">
                                    <div class="the-page-content-bottom-box-one-box">
                                        <div class="the-page-content-bottom-box-one-box-img">
                                            <img src="{{ asset('images/residential/single/menu/spo.svg') }}" alt="">
                                        </div>
                                        <div class="the-page-content-bottom-box-one-box-text">
                                            {{ __('myhouse/recherche/neuf/entreprise.ae') }}
                                        </div>
                                    </div>
                                    <div class="the-page-content-bottom-box-two-content">
                                        <div class="the-page-content-bottom-box-two-content-title">{{ __('myhouse/recherche/neuf/entreprise.af') }}</div>
                                        00212522334455 <br>
                                        00212522334457
                                        <div class="the-page-content-bottom-box-two-content-title">{{ __('myhouse/recherche/neuf/entreprise.ag') }}</div>
                                        00212622334455 <br>
                                        00212622334455
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="the-page-grid-container-item">
                            <div class="the-page-head">
                                <div>
                                    <div class="the-page-head-title" style="padding-top: 31px;">
                                        promoteur REAL ESTATE<br>
                                        MOROCCO MILLENIUM
                                    </div>
                                    <div class="the-page-head-hr"></div>
                                </div>
                            </div>
                            <div class="enterprise-presentation">
                                <div class="enterprise-presentation-title">
                                    {{ __('myhouse/recherche/neuf/entreprise.ah') }}
                                </div>
                                <div class="enterprise-presentation-hr"></div>
                                <div class="enterprise-presentation-body">
                                    texte de présentation de l'agence, du professionnel <br><br>

                                    Culpa qui officia deserunt mollit anim id est laborum.
                                    Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptartem accusantium doloremque laudantium, totam
                                    rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                    et quasi ropeior architecto beatae vitae dicta sunt.doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi ropeior architecto beatae vitae doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi ropeior architecto beatae vitae dicta
                                    sunt.doloremque
                                </div>
                            </div>

                            <div class="the-page-suggestion">
                                <a href="{{ route('resultat.neuf', $name) }}" style="text-decoration: none; color: inherit" target="_blank">
                                    <div class="the-page-suggestion-button">{{ __('myhouse/recherche/neuf/entreprise.ai') }}</div>
                                </a>

                                <div class="the-page-suggestion-media mt-5">
                                    <div class="the-page-suggestion-chevron">
                                        <div class="the-page-suggestion-chevron-left">
                                            <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                        </div>
                                        <div class="the-page-suggestion-chevron-right">
                                            <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                        </div>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="the-page-suggestion-media mt-5">
                                    <div class="the-page-suggestion-chevron">
                                        <div class="the-page-suggestion-chevron-left">
                                            <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                        </div>
                                        <div class="the-page-suggestion-chevron-right">
                                            <img src="{{ asset('images/residential/single/right.svg') }}" alt="" class="t-p">
                                        </div>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="carouse">
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-image">
                                                <div class="page-list-item-enterprise-logos">
                                                    <div class="page-list-item-enterprise-logo-box">
                                                        <div class="page-list-item-enterprise-logo-img">
                                                            <img src="http://myhouse.com/images/residential/rest.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-item-enterprise-logos-text">
                                                            Real Estate Immobilier
                                                        </div>
                                                    </div>
                                                    <div class="page-list-item-enterprise-logo-box-name">
                                                    <span>
                                                        Résidence VAL <br>
                                                    </span>
                                                    </div>

                                                </div>
                                                <div class="slide">
                                                    <img src="{{ asset('images/residential/single/menu/image.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="http://myhouse.com/resultat/neufs/residence-du-val-de-marne" style="text-decoration: none; color: inherit" target="_blank">
                                            <div class="carouse-with-body">
                                                <div class="clearfix mx-1">
                                                    <div class="float-left">
                                                        <div class="page-list-panel-item-two-head-left-box">
                                                            <div class="page-list-panel-item-two-head-left-box-left">
                                                                <img src="http://myhouse.com/images/residential/loc.svg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="page-list-panel-item-two-head-left-box-right">
                                                                Casablanca Maarif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right carouse-with-body-text">300m du lieu de recherche</div>
                                                </div>
                                                <div class="carouse-with-body-two">
                                                    Prix à partir de
                                                </div>
                                                <div class="carouse-with-footer">
                                                    <div class="carouse-body-content-box">
                                                        <div class="carouse-body-content-box-title">Appartement</div>
                                                        <div class="carouse-body-content-box-desc">1.000.000 MAD</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="the-page-grid-container-item">
                            <div class="enterprise-log">
                                <div class="enterprise-log-img">
                                    <img src="{{ asset('images/residential/single/menu/enlo.svg') }}" alt="">
                                </div>
                                <div class="enterprise-log-text">
                                    33, angle boulevard Abderrahmane <br>
                                    Youssoufi de la Sole <br>
                                    Casablanca <br>
                                    Maroc
                                </div>
                            </div>
                            <div class="content-button"> {{ __('myhouse/recherche/neuf/entreprise.aj') }}</div>
                            <div class="content-map">
                                <div class="map" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@stop
