@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/critere.aa') }}
@stop

@section('content')
    <div class="c-page a-neuf">
        <div class="ca-page">
            <div class="ca-page-item">

                @include('myhouse.back.annonces.modules.neuf.left')

            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-second">

                    @include('myhouse.back.annonces.modules.neuf.progress')


                    <form action="{{ route('neuf.annonce') }}" method="get">
                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">

                                <input type="hidden" name="last_id" value="{{ $last_id }}">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    {{ __('myhouse/back/annonces/neuf/critere.ab') }}
                                </div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>
                                <div class="ca-page-item-third-connexion-box-title-title">{{ __('myhouse/back/annonces/neuf/critere.ac') }}</div>

                            </div>
                        </div>
                        <div class="ca-page-item-second-subscription">
                            <div class="ca-page-item-second-body">
                                <div class="ca-page-item-second-body-card">


                                    <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                        <div class="ca-page-item-second-body-card-item-head">
                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                <img src="{{ asset('images/residential/ic.svg') }}" alt="">
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/neuf/critere.ad') }}</div>
                                        </div>
                                        <div class="ca-page-item-second-body-card-item-body">
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <input type="text" name="superficie" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/critere.ae') }}" required>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <input type="text" name="espace_vert" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/critere.af') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border-tb">
                                        <div class="ca-page-item-second-body-card-item-head">
                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                <img src="{{ asset('images/residential/it.svg') }}" alt="">
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/neuf/critere.ag') }}</div>
                                        </div>
                                        <div class="ca-page-item-second-body-card-item-body">
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.ah') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="gardiennage" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.ai') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="air_de_jeu" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.aj') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="piscine" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.ak') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="terrain_sport" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.al') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="salle_fitness" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.am') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="spa" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.an') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="superette" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.ao') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="ecole" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.ap') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="mosque" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.aq') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="shopping" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.ar') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="restaurant" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/neuf/critere.as') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" class="ios" name="service_menage" value="1">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="ca-page-item-second-body-card-item ca-page-item-third-type-box-border">
                                        <div class="ca-page-item-second-body-card-item-head">
                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/neuf/critere.at') }}</div>
                                        </div>
                                        <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aan') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="plage" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="plage" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aao') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="campagne" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="campagne" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aap') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="montagne" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="montagne" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aaq') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="desert" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="desert" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aar') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="spot_surf" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="spot_surf" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aas') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="golf" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="golf" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aat') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="foret" id="#" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="foret" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.aau') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="station_ski" id="" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="station_ski" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                        {{ __('myhouse/back/annonces/particulier/description.ceae') }}
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                        <input type="checkbox" name="riviere" id="" class="ios" value="1">
                                                    </div>
                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                        <select name="riviere" id="" class="form-control yt-select">
                                                            @include('myhouse.back.annonces.particuliers.extra.meter')
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="ca-page-item-second-footer">
                            <button class="btn btn-prev mr-2">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/critere.aad') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-third">
                    <div class="ca-page-item-third-button-x clearfix">
                        <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                    </div>
                    <div class="ca-page-item-third-thumb">
                        <img src="{{ asset('images/residential/menu/gamer.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/neuf/critere.aae') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
