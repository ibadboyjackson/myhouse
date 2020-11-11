@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/type.aa') }}
@stop

@section('content')
    <div class="annonce a-neuf">
        <div class="c-page">
            <div class="ca-page">
                <div class="ca-page-item">
                    @include('myhouse.back.annonces.modules.neuf.left')
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-second">

                        @include('myhouse.front.includes.messages')

                        @include('myhouse.back.annonces.modules.neuf.progress')



                        <form action="{{ route('neuf.process') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="projet_id" value="{{ request()->get('id') }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-connexion-box">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/neuf/type.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-title-hr"></div>
                                </div>
                            </div>
                            <div class="ca-page-item-third-with-body">
                                <div class="ca-page-item-third-with-body-head">
                                    <div class="ca-page-item-third-with-body-head-title">{{ __('myhouse/back/annonces/neuf/type.ac') }}</div>

                                    <div class="ca-page-item-third-with-body-head-box">


                                            @if($neuf->appartement)
                                                 <div class="ca-page-item-third-with-body-head-box-item" id = "appartement">
                                                <div class="ca-page-item-third-with-body-head-box-item-box">
                                                    <span class="ca-page-item-third-with-body-head-box-item-box-span bien-actif" id = "appa"></span>
                                                </div>
                                                <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.ad') }}</div>
                                            </div>
                                                <input type="hidden" name="appartement" value="1">
                                             @endif

                                            @if($neuf->villa)
                                                 <div class="ca-page-item-third-with-body-head-box-item" id = "villa">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "vil"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.ae') }}</div>
                                                    </div>
                                                    <input type="hidden" name="villa" value="1">

                                                @endif

                                            @if($neuf->maison)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "maison">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "mai"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.af') }}</div>
                                                    </div>
                                                    <input type="hidden" name="maison" value="1">
                                                @endif

                                            @if($neuf->riad)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "riad">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "ria"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.ag') }}</div>
                                                    </div>
                                                    <input type="hidden" name="riad" value="1">

                                                @endif

                                            @if($neuf->bureau)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "bureau">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span" id = "bur"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.ah') }}</div>
                                                    </div>
                                                    <input type="hidden" name="bureau" value="1">

                                                @endif

                                            @if($neuf->plateau)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "plateau">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "plat"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.ai') }}</div>
                                                    </div>
                                                    <input type="hidden" name="plateau" value="1">

                                                @endif

                                            @if($neuf->chalet)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "chalet">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "cha"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.aw') }}</div>
                                                    </div>
                                                    <input type="hidden" name="chalet" value="1">

                                                @endif

                                            @if($neuf->commerce)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "commerce">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "com"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.av') }}</div>
                                                    </div>
                                                    <input type="hidden" name="commerce" value="1">

                                                @endif

                                            @if($neuf->residentiel)
                                                 <div class="ca-page-item-third-with-body-head-box-item" id = "residentiel">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "res"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.au') }}</div>
                                                    </div>
                                                    <input type="hidden" name="residentiel" value="1">

                                                @endif

                                            @if($neuf->commercial)
                                                <div class="ca-page-item-third-with-body-head-box-item" id = "commercial">
                                                        <div class="ca-page-item-third-with-body-head-box-item-box">
                                                            <span class="ca-page-item-third-with-body-head-box-item-box-span " id = "comm"></span>
                                                        </div>
                                                        <div class="ca-page-item-third-with-body-head-box-item-text">{{ __('myhouse/back/annonces/neuf/type.at') }}</div>
                                                    </div>
                                                    <input type="hidden" name="commercial" value="1">

                                                @endif


                                    </div>

                                    <div class="ca-page-item-third-with-body-head-box-hr"></div>
                                </div>

                                <div class="ca-page-item-third-with-body-content">

                                @if($neuf->appartement)
                                    <!-- Appartement -->
                                        <div id = "the-appartement" class="musts-change must-change-show">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man1" id="man-1" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man2" id="man-2" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man3" id="man-3" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">



                                                <div class="ca-page-item-second-body-card">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/ic.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input name="surface_habitable" type="text" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.ae') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="appart_etage_niveau" id="" class="form-control yt-select">
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.af') }}">{{ __('myhouse/back/annonces/particulier/description.af') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.bbz') }}">{{ __('myhouse/back/annonces/particulier/description.bbz') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.aaaa') }}">{{ __('myhouse/back/annonces/particulier/description.aaaa') }}</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.nine')
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.two')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.three')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ao') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="dressing" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.four')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.five')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ar') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="terrasse" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.as') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="jardin_privatif" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="buanderie" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cheminee" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>


                                                </div>


                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesa" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesa" type="file" name="medias_appartement[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="appartementa">


                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_appartement" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish" value="1">
                                                <label for="publish">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Appartement -->
                                @endif

                                @if($neuf->villa)
                                    <!-- Villa -->
                                        <div id = "the-villa" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man4" id="man-4" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man5" id="man-5" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man6" id="man-6" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="ca-page-item-second-body-card">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/v4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text text-uppercase ">
                                                                {{ __('myhouse/back/annonces/particulier/description.abk') }}
                                                            </div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="surface_habitable" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbg') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="superficie_terrain" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbh') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.seven')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="type_terrain" id="" class="form-control yt-select">
                                                                    <option value="#">{{ __('myhouse/back/annonces/particulier/description.abn') }}</option>
                                                                    <option value="#">{{ __('myhouse/back/annonces/particulier/description.abba') }}</option>
                                                                    <option value="#">{{ __('myhouse/back/annonces/particulier/description.abbb') }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.two')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.three')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ao') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="dressing" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.four')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.five')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ar') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="terrasse" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.as') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="jardin_privatif" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="buanderie" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cheminee" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesk" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesk" type="file" name="medias_villa[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="villaa">



                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_villa" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_1" value="1">
                                                <label for="publish_1">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Villa -->
                                @endif

                                @if($neuf->maison)
                                    <!-- Maison -->
                                        <div id = "the-maison" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man7" id="man-7" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man8" id="man-8" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man9" id="man-9" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="ca-page-item-second-body-card">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/m4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbo') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="surface_habitable" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbr') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="superficie_terrain" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbs') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="amenagement_type" id="" class="form-control yt-select">
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.bbq') }}">{{ __('myhouse/back/annonces/particulier/description.bbq') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.bbq') }}">{{ __('myhouse/back/annonces/particulier/description.bbq') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.bbq') }}">{{ __('myhouse/back/annonces/particulier/description.bbq') }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.two')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.three')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ao') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="dressing" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.four')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.five')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ar') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="terrasse" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.as') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="jardin_privatif" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="buanderie" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cheminee" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesg" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesg" type="file" name="medias_maison[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="maisona">


                                                </div>



                                            </div>

                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_maison" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_2" value="1">
                                                <label for="publish_2">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Maison -->
                                @endif

                                @if($neuf->riad)
                                    <!-- Riad -->
                                        <div id = "the-riad" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man10" id="man-10" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man11" id="man-11" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="ma12" id="man-12" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="ca-page-item-second-body-card">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/r4.svg" alt="" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="surface_habitable" class="form-control yt-input" placeholder="Surface habitable___m²">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.seven')
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.two')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.three')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ao') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="dressing" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.four')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.five')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ar') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="terrasse" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.as') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="jardin_privatif" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="buanderie" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cheminee" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesj" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesj" type="file" name="medias_riad[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="riada">


                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_riad" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_3" value="1">
                                                <label for="publish_3">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>
                                        </div>
                                    <!-- End Riad -->
                                @endif

                                @if($neuf->bureau)
                                    <!-- Bureau -->
                                        <div id = "the-bureau" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man13" id="man-13" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man14" id="man-14" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man15" id="man-15" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="ca-page-item-second-body-card">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/g7.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="surface_habitable" class="form-control yt-inputs" placeholder="{{ __('myhouse/back/annonces/particulier/description.babl') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.eight')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.nine')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.ten')
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/i1.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbbd') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.twelve')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="hauteur_sous_plafond" class="form-control yt-inputs" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbbu') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bbbv') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="internet" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bbbw') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="wc_sanitaire" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bbbx') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bbby') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="balcon" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bbbz') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="coin_cuisine" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.baba') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.babb') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.babc') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffage" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>



                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesc" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesc" type="file" name="medias_bureau[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="bureaua">


                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_bureau" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_4" value="1">
                                                <label for="publish_4">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Bureau -->
                                @endif

                                @if($neuf->plateau)
                                    <!-- Plateau -->
                                        <div id = "the-plateau" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man16" id="man-16" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man17" id="man-17" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man18" id="man-18" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="ca-page-item-second-body-card">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/g7.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text"> {{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="surface_habitable" class="form-control yt-inputs" placeholder="{{ __('myhouse/back/annonces/particulier/description.babl') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.eight')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.nine')

                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.eleven')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.babm') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="coworking" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.babn') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="domiciliation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/i1.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.babo') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.babp') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="open_space" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="nombre_box" id="" class="form-control yt-selects">
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babq') }}">{{ __('myhouse/back/annonces/particulier/description.babq') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babr') }}">{{ __('myhouse/back/annonces/particulier/description.babr') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babs') }}">{{ __('myhouse/back/annonces/particulier/description.babs') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babt') }}">{{ __('myhouse/back/annonces/particulier/description.babt') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babu') }}">{{ __('myhouse/back/annonces/particulier/description.babu') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babv') }}">{{ __('myhouse/back/annonces/particulier/description.babv') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babw') }}">{{ __('myhouse/back/annonces/particulier/description.babw') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babx') }}">{{ __('myhouse/back/annonces/particulier/description.babx') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.baby') }}">{{ __('myhouse/back/annonces/particulier/description.baby') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.babz') }}">{{ __('myhouse/back/annonces/particulier/description.babz') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caaa') }}">{{ __('myhouse/back/annonces/particulier/description.caaa') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caab') }}">{{ __('myhouse/back/annonces/particulier/description.caab') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caac') }}">{{ __('myhouse/back/annonces/particulier/description.caac') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caad') }}">{{ __('myhouse/back/annonces/particulier/description.caad') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caae') }}">{{ __('myhouse/back/annonces/particulier/description.caae') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caaf') }}">{{ __('myhouse/back/annonces/particulier/description.caaf') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caag') }}">{{ __('myhouse/back/annonces/particulier/description.caag') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caah') }}">{{ __('myhouse/back/annonces/particulier/description.caah') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caai') }}">{{ __('myhouse/back/annonces/particulier/description.caai') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caaj') }}">{{ __('myhouse/back/annonces/particulier/description.caaj') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caak') }}">{{ __('myhouse/back/annonces/particulier/description.caak') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caal') }}">{{ __('myhouse/back/annonces/particulier/description.caal') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caam') }}">{{ __('myhouse/back/annonces/particulier/description.caam') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caan') }}">{{ __('myhouse/back/annonces/particulier/description.caan') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caao') }}">{{ __('myhouse/back/annonces/particulier/description.caao') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caap') }}">{{ __('myhouse/back/annonces/particulier/description.caap') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caaq') }}">{{ __('myhouse/back/annonces/particulier/description.caaq') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caar') }}">{{ __('myhouse/back/annonces/particulier/description.caar') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caas') }}">{{ __('myhouse/back/annonces/particulier/description.caas') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caat') }}">{{ __('myhouse/back/annonces/particulier/description.caat') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caau') }}">{{ __('myhouse/back/annonces/particulier/description.caau') }}</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="salle_reunion" id="" class="form-control yt-selects">
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caav') }}">{{ __('myhouse/back/annonces/particulier/description.caav') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caaw') }}">{{ __('myhouse/back/annonces/particulier/description.caaw') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caax') }}">{{ __('myhouse/back/annonces/particulier/description.caax') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caay') }}">{{ __('myhouse/back/annonces/particulier/description.caay') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caaz') }}">{{ __('myhouse/back/annonces/particulier/description.caaz') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.caba') }}">{{ __('myhouse/back/annonces/particulier/description.caba') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.cabb') }}">{{ __('myhouse/back/annonces/particulier/description.cabb') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.cabc') }}">{{ __('myhouse/back/annonces/particulier/description.cabc') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.cabd') }}">{{ __('myhouse/back/annonces/particulier/description.cabd') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.cabe') }}">{{ __('myhouse/back/annonces/particulier/description.cabe') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.cabf') }}">{{ __('myhouse/back/annonces/particulier/description.cabf') }}</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" class="form-control yt-inputs" placeholder="{{ __('myhouse/back/annonces/particulier/description.cabg') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabh') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="hauteur_sous_plafond" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabi') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="internet" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabj') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="wc_sanitaire" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabk') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="balcon" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabl') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="coin_cuisine" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabm') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabn') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.cabo') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffage" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesh" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesh" type="file" name="medias_plateau[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="plateaua">


                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_plateau" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_5" value="1">
                                                <label for="publish_5">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Plateau -->
                                @endif

                                @if($neuf->chalet)
                                    <!-- Chalet -->
                                        <div id = "the-chalet" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man19" id="man-19" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man20" id="man-20" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man21" id="man-21" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="ca-page-item-second-body-card">

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/ch4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbo') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.one')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="surface_habitable" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbr') }}">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <input type="text" name="superficie_terrain" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbs') }}">
                                                            </div>


                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="chalet_type" id="" class="form-control yt-select">
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.abbc') }}">{{ __('myhouse/back/annonces/particulier/description.abbc') }}</option>
                                                                </select>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <select name="facade_type" id="" class="form-control yt-select">
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.abbd') }}">{{ __('myhouse/back/annonces/particulier/description.abbd') }}</option>
                                                                    <option value="{{ __('myhouse/back/annonces/particulier/description.abbe') }}">{{ __('myhouse/back/annonces/particulier/description.abbe') }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                        <div class="ca-page-item-second-body-card-item-head">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://myhouse.com/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text"> {{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                        </div>
                                                        <div class="ca-page-item-second-body-card-item-body">
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.two')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.three')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ao') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="dressing" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.four')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                @include('myhouse.back.annonces.particuliers.extra.five')
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.ar') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="terrasse" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cour" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="buanderie" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cheminee" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="climatisation" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bgg') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffage" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.bae') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="cave" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        {{ __('myhouse/back/annonces/particulier/description.baf') }}
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesd" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesd" type="file" name="medias_chalet[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="chaleta">

                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_chalet" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_6" value="1">
                                                <label for="publish_6">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Chalet -->
                                @endif

                                @if($neuf->commerce)
                                    <!-- Commerce -->
                                        <div id = "the-commerce" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man22" id="man-22" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man23" id="man-23" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man24" id="man-24" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="must-use-one">
                                                    <div class="ca-page-item-second-body-card">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://myhouse.com/images/residential/single/g6.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdbb') }}</div>
                                                            </div>
                                                            <div class="pc-y">
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.one')
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <select name="fond_commerce" id="" class="form-control yt-select">
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.cdbc') }}">{{ __('myhouse/back/annonces/particulier/description.cdbc') }}</option>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.cdbc') }}">{{ __('myhouse/back/annonces/particulier/description.cdbc') }}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="surface_total" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cdbd') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="sous_pente" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cdbe') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="terrasses" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cdbf') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <select name="nombre_piece" id="" class="form-control yt-select">
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.cdbg') }}">{{ __('myhouse/back/annonces/particulier/description.cdbg') }}</option>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.cdbg') }}">{{ __('myhouse/back/annonces/particulier/description.cdbg') }}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="longueur_facade" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cdbh') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="hauteur_plafond" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cdbi') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <select name="zone_implante" id="" class="form-control yt-select">
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.cdbj') }}">{{ __('myhouse/back/annonces/particulier/description.cdbj') }}</option>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.cdbj') }}">{{ __('myhouse/back/annonces/particulier/description.cdbj') }}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.nine')
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.cdbk') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="angle_de_rue" id="" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.cdbl') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="wc_sanitaire" id="" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <select name="place_vehicule" id="" class="form-control yt-select">
                                                                            <?php for ($i = 1; $i <=20; $i++): ?>

                                                                            <option value="{{ $i }} {{ __('myhouse/back/annonces/particulier/description.cdbm') }}">{{ $i }} {{ __('myhouse/back/annonces/particulier/description.cdbm') }}</option>

                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.cdbn') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="mezzanine" id="" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.cdbo') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="alarme" id="" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesb" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesb" type="file" name="medias_commerce[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="commercea">


                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_commerce" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_7" value="1">
                                                <label for="publish_7">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Commerce -->
                                @endif

                                @if($neuf->commercial)
                                    <!-- Commercial -->
                                        <div id = "the-commercial" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man25" id="man-25" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man26" id="man-26" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man27" id="man-27" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="must-use-one">
                                                    <div class="ca-page-item-second-body-card">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbas') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <input type="text" name="superficie_terrain" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbat') }}">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="zone_implante" id="" class="form-control yt-select">
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbau') }}">{{ __('myhouse/back/annonces/particulier/description.cbau') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbau') }}">{{ __('myhouse/back/annonces/particulier/description.cbau') }}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="terrain_type" id="" class="form-control yt-select">
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbav') }}">{{ __('myhouse/back/annonces/particulier/description.cbav') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbav') }}">{{ __('myhouse/back/annonces/particulier/description.cbav') }}</option>
                                                                    </select>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbaw') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="assainissement" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbax') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_eau" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbay') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="puits" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbaz') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_electricite" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbba') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_telephone" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesi" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesi" type="file" name="medias_commercial[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="commerciala">

                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_commercial" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_8" value="1">
                                                <label for="publish_8">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Commercial -->
                                @endif

                                @if($neuf->residentiel)
                                    <!-- Residentiel -->
                                        <div id = "the-residentiel" class="musts-change">

                                            <div class="ca-page-item-third-with-body-content-price-box">
                                                <div class="ca-page-item-third-with-body-content-price-box-title">{{ __('myhouse/back/annonces/neuf/type.as') }}</div>
                                                <div class="ca-page-item-third-with-body-content-price">
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man28" id="man-28" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man29" id="man-29" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item">
                                                        <input type="text" name="man30" id="man-30" class="form-control" placeholder="000." maxlength="3">
                                                    </div>
                                                    <div class="ca-page-item-third-with-body-content-price-item sdf">
                                                        MAD
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ca-page-item-third-with-body-content-right">

                                                <div class="must-use-one">
                                                    <div class="ca-page-item-second-body-card">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://myhouse.com/images/residential/single/gg2.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cabv') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <input type="text" name="superficie_terrain" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.cabw') }}">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="titre_foncier" id="" class="form-control yt-select">
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cabx') }}">{{ __('myhouse/back/annonces/particulier/description.cabx') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cabx') }}">{{ __('myhouse/back/annonces/particulier/description.cabx') }}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="lotissement" id="" class="form-control yt-select">
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.caby') }}">{{ __('myhouse/back/annonces/particulier/description.caby') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbaq') }}">{{ __('myhouse/back/annonces/particulier/description.cbaq') }}</option>
                                                                    </select>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabz') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="assainissement" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbaa') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_eau" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbab') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="puits" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbac') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_electricite" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbad') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_telephone" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="ca-page-item-third-type-boxe">
                                                    <div class="ca-page-item-third-type-boxe-upload">
                                                        <div class="upload-img text-center">
                                                            <label for="filesf" class="custom-file-upload">
                                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                                            </label>
                                                            <input id="filesf" type="file" name="medias_residentiel[]" multiple="multiple">
                                                            <div class="upload-text">{{ __('myhouse/back/annonces/neuf/type.ax') }}</div>
                                                            <div class="up-text">{{ __('myhouse/back/annonces/neuf/type.ay') }}</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="ca-page-item-third-type-boxe-upload-results" id="residentiela">

                                                </div>



                                            </div>
                                            <div class="ca-page-item-second-subscription">
                                                <div class="ca-page-item-second-body">
                                                    <div class="ca-page-item-second-body-annonce-box">
                                                        <textarea cols="30" name="description_residentiel" rows="17" class="form-control" placeholder="{{ __('myhouse/back/annonces/neuf/type.az') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pc-checkbox">
                                                <input type="checkbox" name="particulier_portail" id="publish_9" value="1">
                                                <label for="publish_9">
                                                    {{ __('myhouse/back/annonces/neuf/type.ba') }}
                                                </label>
                                            </div>

                                        </div>
                                    <!-- End Residentiel -->
                                @endif

                                </div>

                            </div>



                            <div class="ca-page-item-second-footer">
                                <button class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <a href="{{ route('neuf.success') }}" class="btn btn-connections" type="submit" style="line-height: 41px;">
                                    {{ __('myhouse/back/annonces/neuf/type.aj') }}
                                </a>
                                <button class="btn btn-connections" type="submit">
                                    {{ __('myhouse/back/annonces/neuf/type.ak') }}
                                </button>
                            </div>



                        </form>
                    </div>
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-thirds cap-appartement" id = "cap">
                        <div class="ca-page-item-third-button-x clearfix">
                            <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>

                        <div class="ca-page-item-third-thumbs">
                            <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/neuf/type.al') }}
                        </div>

                        <div class="man1">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/man1.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                {{ __('myhouse/back/annonces/neuf/type.am') }} <br>
                                {{ __('myhouse/back/annonces/neuf/type.an') }}
                            </div>
                        </div>
                        <div class="man2">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                {{ __('myhouse/back/annonces/neuf/type.ao') }}
                            </div>
                            <div class="ca-page-item-third-text-text">
                                {{ __('myhouse/back/annonces/neuf/type.ap') }} <br>
                                {{ __('myhouse/back/annonces/neuf/type.aq') }}
                            </div>
                        </div>
                        <div class="man3">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/d3.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                {{ __('myhouse/back/annonces/neuf/type.ar') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>


    <script src="{{ asset('development/js/type/appartement.js') }}"></script>
    <script src="{{ asset('development/js/type/villa.js') }}"></script>
    <script src="{{ asset('development/js/type/maison.js') }}"></script>
    <script src="{{ asset('development/js/type/riad.js') }}"></script>
    <script src="{{ asset('development/js/type/chalet.js') }}"></script>
    <script src="{{ asset('development/js/type/bureau.js') }}"></script>
    <script src="{{ asset('development/js/type/plateau.js') }}"></script>
    <script src="{{ asset('development/js/type/residentiel.js') }}"></script>
    <script src="{{ asset('development/js/type/commercial.js') }}"></script>
    <script src="{{ asset('development/js/type/commerce.js') }}"></script>

@stop
