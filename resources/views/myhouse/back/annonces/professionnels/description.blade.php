@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/description.aa') }}
@stop

@section('content')

    @php
        $four = ['appartement', 'villa', 'maison', 'chalet', 'riad', 'ferme', 'chambre'];
        $three = ['bureau', 'plateau', 'cite'];
        $two = ['agricole', 'residentiel', 'industriel', 'commercial', 'propriete_agricole'];
        $one = ['immeuble', 'local_industriel', 'garage', 'entrepot', 'local_commercial'];
    @endphp



    @if (in_array(request()->get('type'), $four))

<form action="{{ route('professionnel.critere') }}" method="get" id="transform">
    @csrf

        <div class="description-four">
            <div class="particuliers with-gomez">
                <div class="c-page">


                    @if (auth()->user()->professionnel->last()->page === 'description')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                                <div class="transaction-block-content-body">
                                    Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    FERMER
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-seconds">
                                @include('myhouse.back.annonces.modules.professionnel.progress')

                                <div class="ca-page-item-third-connexion">


                                    <!-- Must change -->
                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">


                                        @if (request()->get('type') === 'appartement')
                                                <div class="must-change">
                                                    <div class="ca-page-item-third-types-box-four">

                                                        <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                            {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                        </div>
                                                        <div class="ca-page-item-third-connexion-box-hr"></div>
                                                        <div class="ca-page-item-third-type-box">
                                                            <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                                <div class="ca-page-item-second-body-card-item-head">
                                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                                        <img src="{{ asset('images/residential/ic.svg') }}" alt="">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <!-- Surface    -->

                                                                        <div class="ca-page-surface">
                                                                            <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ae') }}</div>
                                                                            <div class="ca-page-surface-input">
                                                                                <div class="ca-page-surface-input-field">
                                                                                    <input type="text" name="surface_habitable" value="{{ $professionnel->surface_habitable }}" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                                </div>
                                                                                <div class="ca-page-surface-input-unit">m²</div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Surface    -->
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <select name="appart_etage_niveau" id="" class="form-control yt-select">
                                                                            
                                                                            @if($professionnel->appart_etage_niveau != "")
                                                                                <option hidden selected value="{{ $professionnel->appart_etage_niveau }}">{{ $professionnel->appart_etage_niveau }}</option>
                                                                            @endif

                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.af') }}">{{ __('myhouse/back/annonces/particulier/description.af') }}</option>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.bbz') }}">{{ __('myhouse/back/annonces/particulier/description.bbz') }}</option>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.aaaa') }}">{{ __('myhouse/back/annonces/particulier/description.aaaa') }}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.nine', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.ten', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item" style="margin: 0 4px;">
                                                                        @include('myhouse.back.annonces.particuliers.extra.eleven', ['particulier' => $professionnel])
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                                <div class="ca-page-item-second-body-card-item-head">
                                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                                        <img src="{{ asset('images/residential/single/tt.svg') }}" alt="" width="30" height="30">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.two', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1" {{ $professionnel->cuisine_equipe == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.three', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.dressing', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.four', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.five', ['particulier' => $professionnel])
                                                                    </div>

                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                    </div>

                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.as') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="jardin_privatif" id="#" class="ios" value="1" {{ $professionnel->jardin_privatif == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" {{ $professionnel->cour == 1 ? 'checked' : '' }}>
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
                                                                                <input type="checkbox" name="buanderie" id="#" class="ios" value="1" {{ $professionnel->buanderie == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="cheminee" id="#" class="ios" value="1" {{ $professionnel->cheminee == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $professionnel->climatisation == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1" {{ $professionnel->chauffe_eau == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                                <div class="ca-page-item-second-body-card-item-head">
                                                                    <div class="ca-page-item-second-body-card-item-head-img">
                                                                        <img src="{{ asset('images/residential/it.svg') }}" alt="">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ay') }}</div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body">

                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.az') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $professionnel->espace_vert == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aaa') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="gardiennage" id="#" class="ios" value="1" {{ $professionnel->gardiennage == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ca-page-item-second-body-card-item-body-item" style="margin-left: 6px; margin-right: 6px">
                                                                        @include('myhouse.back.annonces.particuliers.extra.six', ['particulier' => $professionnel])
                                                                    </div>

                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aac') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="box" id="#" class="ios" value="1" {{ $professionnel->box == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aad') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="piscine" id="#" class="ios" value="1" {{ $professionnel->piscine == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aae') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="terrain_sport" id="#" class="ios" value="1" {{ $professionnel->terrain_sport == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aaf') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="salle_fitness" id="#" class="ios" value="1" {{ $professionnel->salle_fitness == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aag') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="spa" id="#" class="ios" value="1" {{ $professionnel->spa == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aah') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="superette" id="#" class="ios" value="1" {{ $professionnel->superette == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aai') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox" >
                                                                                <input type="checkbox" name="ecole" id="#" class="ios" value="1" {{ $professionnel->ecole == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aaj') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="mosquee" id="#" class="ios" value="1" {{ $professionnel->mosquee == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aak') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="shopping" id="#" class="ios" value="1" {{ $professionnel->shopping == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aal') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="restaurent" id="#" class="ios" value="1" {{ $professionnel->restaurent == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.aaii') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="cafe"  id="#" class="ios" value="1" {{ $professionnel->cafe == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                            @include('myhouse.back.annonces.particuliers.extra.near', ['particulier' => $professionnel])
                                                        </div>
                                                        <div class="yt_b text-center">
                                                            <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                                <i class="fa fa-chevron-left"></i>
                                                            </a>
                                                            <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.aav') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endif

                                        @if (request()->get('type') === 'villa')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/single/v4.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase ">
                                                                    {{ __('myhouse/back/annonces/particulier/description.abk') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbg') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_habitable }}" name="surface_habitable" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbh') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.seven', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">

                                                                    <select name="type_terrain" id="" class="form-control yt-select">

                                                                        @if($professionnel->type_terrain != "")
                                                                            <option hidden selected value="{{ $professionnel->type_terrain }}">{{ $professionnel->type_terrain }}</option>
                                                                        @endif

                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abn') }}">{{ __('myhouse/back/annonces/particulier/description.abn') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abba') }}">{{ __('myhouse/back/annonces/particulier/description.abba') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abbb') }}">{{ __('myhouse/back/annonces/particulier/description.abbb') }}</option>

                                                                    </select>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.generique.interior', ['particulier' => $professionnel])
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/it.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bag') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bah') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $professionnel->espace_vert == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bai') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="gardiennage" id="#" class="ios" value="1" {{ $professionnel->gardiennage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bak') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="terrain_sport" id="#" class="ios" value="1" {{ $professionnel->terrain_sport == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bal') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="service_menage" id="#" class="ios" value="1" {{ $professionnel->service_menage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bam') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="salle_fitness" id="#" class="ios" value="1" {{ $professionnel->salle_fitness == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ban') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="spa" id="#" class="ios" value="1" {{ $professionnel->spa == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bao') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="superette" id="#" class="ios" value="1" {{ $professionnel->superette == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bap') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="ecole" id="#" class="ios" value="1" {{ $professionnel->ecole == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.baq') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="mosquee" id="#" class="ios" value="1" {{ $professionnel->mosquee == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bar') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="shopping" id="#" class="ios" value="1" {{ $professionnel->shopping == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bas') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="restaurent" id="#" class="ios" value="1" {{ $professionnel->restaurent == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bass') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cafe" id="#" class="ios" value="1" {{ $professionnel->cafe == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bat') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="air_jeu" id="#" class="ios" value="1" {{ $professionnel->air_jeu == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bau') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $professionnel->interphone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>

                                                            @include('myhouse.back.annonces.generique.near', ['particulier' => $professionnel])

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbf') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'maison')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                            @include('myhouse.back.annonces.generique.global', ['particulier' => $professionnel])
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.generique.interior', ['particulier' => $professionnel])
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src=" {{ asset('images/residential/it.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbk') }} </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.six', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbm') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $professionnel->interphone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                            @include('myhouse.back.annonces.generique.near', ['particulier' => $professionnel])

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbn') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'chalet')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            @include('myhouse.back.annonces.generique.global', ['particulier' => $professionnel])
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text"> {{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.two', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1" {{ $professionnel->cuisine_equipe == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.three', ['particulier' => $professionnel])
                                                                </div>
                                                                

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.dressing', ['particulier' => $professionnel])
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.four', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.five', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cour" id="#" class="ios" value="1" {{ $professionnel->cour == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="buanderie" id="#" class="ios" value="1" {{ $professionnel->buanderie == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bac') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="jaccuzi" id="#" class="ios" value="1" {{ $professionnel->jaccuzi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bad') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="hammam_beldi" id="#" class="ios" value="1" {{ $professionnel->hammam_beldi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bae') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cave" id="#" class="ios" value="1" {{ $professionnel->cave == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cheminee" id="#" class="ios" value="1" {{ $professionnel->cheminee == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $professionnel->climatisation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bgg') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffage" id="#" class="ios" value="1" {{ $professionnel->chauffage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bae') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cave" id="#" class="ios" value="1" {{ $professionnel->cave == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.baf') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1" {{ $professionnel->chauffe_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/it.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bag') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bah') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $professionnel->espace_vert == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bai') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="gardiennage" id="#" class="ios" value="1" {{ $professionnel->gardiennage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.six', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bau') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $professionnel->interphone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                            @include('myhouse.back.annonces.generique.near', ['particulier' => $professionnel])

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbf') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'riad')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/r4.svg" alt="" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbg') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_habitable }}" name="surface_habitable" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbh') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.seven', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.two', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1" {{ $professionnel->cuisine_equipe == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.three', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.dressing', ['particulier' => $professionnel])

                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.four', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.five', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                </div>
                                            
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cour" id="#" class="ios" value="1" {{ $professionnel->cour == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="buanderie" id="#" class="ios" value="1" {{ $professionnel->buanderie == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bac') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="jaccuzi" id="#" class="ios" value="1" {{ $professionnel->jaccuzi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bad') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="hammam_beldi" id="#" class="ios" value="1" {{ $professionnel->hammam_beldi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bae') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cave" id="#" class="ios" value="1" {{ $professionnel->cave == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cheminee" id="#" class="ios" value="1" {{ $professionnel->cheminee == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $professionnel->climatisation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1" {{ $professionnel->chauffe_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/it.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ay') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.az') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $professionnel->espace_vert == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.six', ['particulier' => $professionnel])

                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bau') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $professionnel->interphone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>


                                                            @include('myhouse.back.annonces.generique.near', ['particulier' => $professionnel])

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.aav') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'ferme')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g2.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbg') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_habitable }}" name="surface_habitable" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbh') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.seven', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.abo') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.two', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.am') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1" {{ $professionnel->cuisine_equipe == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.three', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.dressing', ['particulier' => $professionnel])

                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.four', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.five', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.at') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cour" id="#" class="ios" value="1" {{ $professionnel->cour == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.au') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="buanderie" id="#" class="ios" value="1" {{ $professionnel->buanderie == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.av') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cheminee" id="#" class="ios" value="1" {{ $professionnel->cheminee == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.aw') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $professionnel->climatisation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ax') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1" {{ $professionnel->chauffe_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bac') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="jaccuzi" id="#" class="ios" value="1" {{ $professionnel->jaccuzi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bad') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="hammam_beldi" id="#" class="ios" value="1" {{ $professionnel->hammam_beldi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bae') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cave" id="#" class="ios" value="1" {{ $professionnel->cave == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/it.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bag') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbj') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="exploitation_agricole" id="#" class="ios" value="1" {{ $professionnel->exploitation_agricole == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="garage_ferme" id="" class="form-control yt-select">

                                                                        @if($professionnel->garage_ferme != "")
                                                                            <option hidden selected value="{{ $professionnel->garage_ferme }}">{{ $professionnel->garage_ferme }}</option>                                                                     
                                                                        @endif

                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abbf') }}">{{ __('myhouse/back/annonces/particulier/description.abbf') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abbg') }}">{{ __('myhouse/back/annonces/particulier/description.abbg') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abbh') }}">{{ __('myhouse/back/annonces/particulier/description.abbh') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abbi') }}">{{ __('myhouse/back/annonces/particulier/description.abbi') }}</option>

                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abei') }}">{{ __('myhouse/back/annonces/particulier/description.abei') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abdi') }}">{{ __('myhouse/back/annonces/particulier/description.abdi') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abfi') }}">{{ __('myhouse/back/annonces/particulier/description.abfi') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abgi') }}">{{ __('myhouse/back/annonces/particulier/description.abgi') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abhi') }}">{{ __('myhouse/back/annonces/particulier/description.abhi') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.abii') }}">{{ __('myhouse/back/annonces/particulier/description.abii') }}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abw') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="piscine" id="#" class="ios" value="1" {{ $professionnel->piscine == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bau') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $professionnel->interphone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.particuliers.extra.near', ['particulier' => $professionnel])
                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbn') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'chambre')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/cha4.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbk') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="reception" id="#" class="ios" value="1" {{ $professionnel->reception == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {!! __('myhouse/back/annonces/particulier/description.abbl') !!}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="reservation" id="#" class="ios" value="1" {{ $professionnel->reservation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/chambre.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.abbm') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbn') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="dejeune" id="#" class="ios" value="1" {{ $professionnel->dejeune == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.six', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                </div>
                                                                <!-- if wanted
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chambre familiale

                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2 places</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            -->
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbo') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wifi" id="#" class="ios" value="1" {{ $professionnel->wifi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbp') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="tele_cable" id="#" class="ios" value="1" {{ $professionnel->tele_cable == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="type_chambre" id="" class="form-control yt-select">

                                                                                @if($professionnel->type_chambre != "")
                                                                                    <option hidden selected value="{{ $professionnel->type_chambre }}">{{ $professionnel->type_chambre }}</option>
                                                                                @endif

                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baac') }}">{{ __('myhouse/back/annonces/particulier/description.baac') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baad') }}">{{ __('myhouse/back/annonces/particulier/description.baad') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baae') }}">{{ __('myhouse/back/annonces/particulier/description.baae') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baaf') }}">{{ __('myhouse/back/annonces/particulier/description.baaf') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baag') }}">{{ __('myhouse/back/annonces/particulier/description.baag') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baah') }}">{{ __('myhouse/back/annonces/particulier/description.baah') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baai') }}">{{ __('myhouse/back/annonces/particulier/description.baai') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baaj') }}">{{ __('myhouse/back/annonces/particulier/description.baaj') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.baak') }}">{{ __('myhouse/back/annonces/particulier/description.baak') }}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbr') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chambre_non_fumeur" id="#" class="ios" value="1" {{ $professionnel->chambre_non_fumeur == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbs') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="service_en_chambre" id="#" class="ios" value="1" {{ $professionnel->service_en_chambre == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbt') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="menage_quotidien" id="#" class="ios" value="1" {{ $professionnel->menage_quotidien == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbu') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="animal_de_compagnie" id="#" class="ios" value="1" {{ $professionnel->animal_de_compagnie == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/it.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ay') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbv') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $professionnel->espace_vert == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.six', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbx') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="piscine" id="#" class="ios" value="1" {{ $professionnel->piscine == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abby') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="restauration" id="#" class="ios" value="1" {{ $professionnel->restauration == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.abbz') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cafeteriat" id="#" class="ios" value="1" {{ $professionnel->cafeteriat == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.baaa') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="blanchisserie" id="#" class="ios" value="1" {{ $professionnel->blanchisserie == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.baab') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="spa" id="#" class="ios" value="1" {{ $professionnel->spa == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.particuliers.extra.near', ['particulier' => $professionnel])
                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbn') }}</button>
                                                    </div>
                                                </div>
                                            </div>

                                         @endif 
                                    <!-- Must change -->

                                    </form>
                                </div>
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
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>

                                @if (request()->get('type') === 'appartement')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baal') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                                @if (request()->get('type') === 'villa')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baan') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                                @if (request()->get('type') === 'maison')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baap') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                                @if (request()->get('type') === 'chalet')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baar') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                                @if (request()->get('type') === 'riad')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baas') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                                @if (request()->get('type') === 'ferme')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baat') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                                @if (request()->get('type') === 'chambre')
                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/back/annonces/particulier/description.baau') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.baam') }}
                                    </div>
                                @endif

                            </div>
                        </div>




                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array(request()->get('type'), $three))

<form action="{{ route('professionnel.critere') }}" method="get" id="transform">
    @csrf

        <div class="description-three">
            <div class="particulier with-goomez">
                <div class="c-page">


                    @if (auth()->user()->professionnel->last()->page === 'description')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                                <div class="transaction-block-content-body">
                                    Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    FERMER
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-seconds">
                                @include('myhouse.back.annonces.modules.professionnel.progress')

                                <div class="ca-page-item-third-connexion">



                                    <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">

                                        @if (request()->get('type') === 'cite')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.baav') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g7.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="bg-white">
                                                                        <div class="bg-white-text">{{ __('myhouse/back/annonces/particulier/description.baax') }}</div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.baay') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="individuelle" id="#" class="ios" value="1" {{ $professionnel->individuelle == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.baaz') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="deux_lits" id="#" class="ios" value="1" {{ $professionnel->deux_lits == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.bbaa') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="trois_lits" id="#" class="ios" value="1" {{ $professionnel->trois_lits == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.bbab') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="quatre_lits" id="#" class="ios" value="1" {{ $professionnel->quatre_lits == 1 ? 'checked' : '' }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="bg-white">
                                                                    <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.bbac') }}</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="surface_disponible" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbaw') }}">
                                                                    </div>
                                                                </div> -->

                                                                <div class="bg-white">
                                                                    <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.bbac') }}</div>
                                                                    <div class="bg-white-content">
                                                                        <div class="bg-white-content-text">{{ __('myhouse/back/annonces/particulier/description.xee') }}</div>
                                                                        <div class="bg-white-content-input">
                                                                            <input type="text" value="{{ $professionnel->surface_disponible_un }}" name="surface_disponible_un" class="form-control" placeholder="Tapez">
                                                                        </div>
                                                                        <div class="bg-white-content-text">{{ __('myhouse/back/annonces/particulier/description.xef') }}</div>
                                                                        <div class="bg-white-content-input">
                                                                            <input type="text" value="{{ $professionnel->surface_disponible_deux }}"  name="surface_disponible_deux" class="form-control" placeholder="Tapez">
                                                                        </div>
                                                                        <div class="bg-white-content-text">m²</div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/chambre.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbad') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbae') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="meuble" id="#" class="ios" value="1" {{ $professionnel->meuble == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- if wanted
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                        Chambre familiale

                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                        <input type="checkbox" name="#" id="#" class="ios">
                                                                    </div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-input">
                                                                        <select name="#" id="" class="form-control yt-select">
                                                                            <option value="#">2 places</option>
                                                                            <option value="#">100m</option>
                                                                            <option value="#">200m</option>
                                                                            <option value="#">300m</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            -->
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbaf') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="kichenette" id="#" class="ios" value="1" {{ $professionnel->kichenette == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbag') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="salle_bain" id="#" class="ios" value="1" {{ $professionnel->salle_bain == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbah') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="miroir" id="#" class="ios" value="1" {{ $professionnel->miroir == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbai') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wifi" id="#" class="ios" value="1" {{ $professionnel->wifi == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbaj') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="placard" id="#" class="ios" value="1" {{ $professionnel->placard == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbak') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffage" id="#" class="ios" value="1" {{ $professionnel->chauffage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbal') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="eau_chaude" id="#" class="ios" value="1" {{ $professionnel->eau_chaude == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbam') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="placard" id="#" class="ios" value="1" {{ $professionnel->placard == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/it.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bban') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbao') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $professionnel->espace_vert == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbap') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="restauration" id="#" class="ios" value="1" {{ $professionnel->restauration == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbaq') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cafeteriat" id="#" class="ios" value="1" {{ $professionnel->cafeteriat == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbas') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="terrain_sport" id="#" class="ios" value="1" {{ $professionnel->terrain_sport == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbat') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="superette" id="#" class="ios" value="1" {{ $professionnel->superette == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbau') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="blanchisserie" id="#" class="ios" value="1" {{ $professionnel->blanchisserie == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbav') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'bureau')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.baav') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g7.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.babl') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_habitable }}" name="surface_habitable" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Surface    -->



                                                                <!-- Surface    -->
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.eight', ['particulier' => $professionnel])
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.nine', ['particulier' => $professionnel])
                                                                </div>
                                                                <!-- <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.ten', ['particulier' => $professionnel])
                                                                </div> -->
                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/i1.svg" alt="" width="33" height="38">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbbd') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.twelve', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbbu') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" name="hauteur_sous_plafond" value="{{ $professionnel->hauteur_sous_plafond }}" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazg') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                </div>



                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbbv') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="internet" id="#" class="ios" value="1" {{ $professionnel->internet == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbbw') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wc_sanitaire" id="#" class="ios" value="1" {{ $professionnel->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbbx') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1" {{ $professionnel->chauffe_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.bbbz') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="coin_cuisine" id="#" class="ios" value="1" {{ $professionnel->coin_cuisine == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.baba') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cour" id="#" class="ios" value="1" {{ $professionnel->cour == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.babb') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $professionnel->climatisation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.babc') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffage" id="#" class="ios" value="1" {{ $professionnel->chauffage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.particuliers.extra.exterior', ['particulier' => $professionnel])

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.babk') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'plateau')
                                         <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.baav') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/single/g7.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text"> {{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.babl') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" name="surface_habitable" value="{{ $professionnel->surface_habitable }}" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Surface    -->
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.eight', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.nine', ['particulier' => $professionnel])

                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.eleven', ['particulier' => $professionnel])
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.babm') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="coworking" id="#" class="ios" value="1" {{ $professionnel->coworking == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.babn') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="domiciliation" id="#" class="ios" value="1" {{ $professionnel->domiciliation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/i1.svg" alt="" width="30" height="30">
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
                                                                            <input type="checkbox" name="open_space" id="#" class="ios" value="1" {{ $professionnel->open_space == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="nombre_box" id="" class="form-control yt-selects">

                                                                        @if($professionnel->nombre_box != "")
                                                                            <option hidden selected value="{{ $professionnel->nombre_box }}">{{ $professionnel->nombre_box }}</option>
                                                                        @endif

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

                                                                        @if($professionnel->salle_reunion != "")
                                                                            <option hidden selected value="{{ $professionnel->salle_reunion }}">{{ $professionnel->salle_reunion }}</option>
                                                                        @endif

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
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cabg') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" name="hauteur_sous_plafond" value="{{ $professionnel->hauteur_sous_plafond }}" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazg') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabh') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="hauteur_sous_plafond" id="#" class="ios" value="1" {{ $professionnel->hauteur_sous_plafond == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                        

                                                                
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabi') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="internet" id="#" class="ios" value="1" {{ $professionnel->internet == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabj') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wc_sanitaire" id="#" class="ios" value="1" {{ $professionnel->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        @include('myhouse.back.annonces.particuliers.extra.terrase', ['particulier' => $professionnel])
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        @include('myhouse.back.annonces.particuliers.extra.balcon', ['particulier' => $professionnel])
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabl') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="coin_cuisine" id="#" class="ios" value="1" {{ $professionnel->coin_cuisine == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabm') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="cour" id="#" class="ios" value="1" {{ $professionnel->cour == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabn') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $professionnel->climatisation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cabo') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="chauffage" id="#" class="ios" value="1" {{ $professionnel->chauffage == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.particuliers.extra.exterior', ['particulier' => $professionnel])

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cabp') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                    @endif


                                    <!-- Must change -->

                                    </form>
                                </div>
                            </div>
                        </div>





                        <div class="ca-page-item">
                            <div class="ca-page-item-third">
                                <div class="ca-page-item-third-button-x clearfix">
                                    <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                                </div>
                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    @if(request()->get('type') === 'cite')
                                        {{ __('myhouse/back/annonces/particulier/description.cabq') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cabr') }}
                                    @endif
                                    @if(request()->get('type') === 'bureau')
                                        {{ __('myhouse/back/annonces/particulier/description.cabs') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cabr') }}
                                    @endif
                                    @if(request()->get('type') === 'plateau')
                                        {{ __('myhouse/back/annonces/particulier/description.cabt') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cabr') }}
                                    @endif
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array(request()->get('type'), $two))
<form action="{{ route('professionnel.critere') }}" method="get" id="transform">
    @csrf
        <div class="description-two">
            <div class="particulier with-gomez">
                <div class="c-page">

                    @if (auth()->user()->professionnel->last()->page === 'description')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                                <div class="transaction-block-content-body">
                                    Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    FERMER
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>




                        <div class="ca-page-item">
                            <div class="ca-page-item-seconds">

                                @include('myhouse.back.annonces.modules.professionnel.progress')


                                <div class="ca-page-item-third-connexion">


                                    <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">

                                        @if (request()->get('type') === 'commercial')
                                           <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cbar') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box beta">
                                                        @include('myhouse.back.annonces.particuliers.extra.global', ['particulier' => $professionnel])
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.extra.nears', ['particulier' => $professionnel])
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cbbj') }}</button>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif

                                        @if (request()->get('type') === 'residentiel')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cabu') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box beta">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('http://31.220.62.192/images/residential/single/gg2.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cabv') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                <div class="ca-page-item-second-body-card-item-body-item">

                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cbat') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->

                                                                </div>


                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.x') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="titre_foncier" id="#" class="ios" value="1" {{ $professionnel->titre_foncier == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="lotissement" id="" class="form-control yt-select">

                                                                        @if($professionnel->lotissement != "")
                                                                            <option hidden selected value="{{ $professionnel->lotissement }}">{{ $professionnel->lotissement }}</option>
                                                                        @endif

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
                                                                            <input type="checkbox" name="assainissement" id="#" class="ios" value="1" {{ $professionnel->assainissement == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbaa') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_eau" id="#" class="ios" value="1" {{ $professionnel->raccordement_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbab') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="puits" id="#" class="ios" value="1" {{ $professionnel->puits == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbac') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_electricite" id="#" class="ios" value="1" {{ $professionnel->raccordement_electricite == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbad') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_telephone" id="#" class="ios" value="1" {{ $professionnel->raccordement_telephone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.extra.nears', ['particulier' => $professionnel])
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">

                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cbap') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'industriel')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cabu') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.particuliers.extra.global', ['particulier' => $professionnel])
                                                        @include('myhouse.back.annonces.particuliers.extra.far', ['particulier' => $professionnel])


                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.aav') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'agricole')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cabu') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/gg2.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cbbo') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body beta">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <!-- Surface    -->

                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cbat') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Surface    -->
                                                                </div>
                                                                <!--<div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="titre_type" id="" class="form-control yt-select">
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbbq') }}">{{ __('myhouse/back/annonces/particulier/description.cbbq') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cbbq') }}">{{ __('myhouse/back/annonces/particulier/description.cbbq') }}</option>
                                                                    </select>
                                                                </div>

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbbr') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="constructible" id="#" class="ios" value="1">
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbbs') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_eau" id="#" class="ios" value="1" {{ $professionnel->raccordement_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.x') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="titre_foncier" id="#" class="ios" value="1" {{ $professionnel->titre_foncier == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbbt') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="puits" id="#" class="ios" value="1" {{ $professionnel->puits == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbbu') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_electricite" id="#" class="ios" value="1" {{ $professionnel->raccordement_electricite == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cbbv') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_telephone" id="#" class="ios" value="1" {{ $professionnel->raccordement_telephone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.extra.nears', ['particulier' => $professionnel])
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ccah') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'propriete_agricole')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ccai') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/gg2.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ccaj') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                <div class="pc_yyt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-surface">
                                                                            <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccak') }}</div>
                                                                            <div class="ca-page-surface-input">
                                                                                <div class="ca-page-surface-input-field">
                                                                                    <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                                </div>
                                                                                <div class="ca-page-surface-input-unit">m²</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc_yyt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-surface">
                                                                            <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccal') }}</div>
                                                                            <div class="ca-page-surface-input">
                                                                                <div class="ca-page-surface-input-field">
                                                                                    <input type="text" value="{{ $professionnel->superficie_exploitable }}" name="superficie_exploitable" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                                </div>
                                                                                <div class="ca-page-surface-input-unit">m²</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="pc_yyt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-surface">
                                                                            <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccam') }}</div>
                                                                            <div class="ca-page-surface-input">
                                                                                <div class="ca-page-surface-input-field">
                                                                                    <input type="text" value="{{ $professionnel->surface_batie }}" name="surface_batie" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                                </div>
                                                                                <div class="ca-page-surface-input-unit">m²</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccan') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_eau" id="#" class="ios" value="1" {{ $professionnel->raccordement_eau == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccao') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="puits" id="#" class="ios" value="1" {{ $professionnel->puits == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccaao') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="habitation" id="#" class="ios" value="1" {{ $professionnel->habitation == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccap') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_electricite" id="#" class="ios" value="1" {{ $professionnel->raccordement_electricite == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccaq') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="raccordement_telephone" id="#" class="ios" value="1" {{ $professionnel->raccordement_telephone == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                            @include('myhouse.back.annonces.particuliers.extra.nears', ['particulier' => $professionnel])

                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ccay') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    <!-- Must change -->

                                    </form>
                                </div>
                            </div>
                        </div>





                        <div class="ca-page-item">
                            <div class="ca-page-item-third">
                                <div class="ca-page-item-third-button-x clearfix">
                                    <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                                </div>
                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="ca-page-item-third-text pt-3 text-center">
                                    @if (request()->get('type') === 'propriete_agricole')
                                        {{ __('myhouse/back/annonces/particulier/description.ccaz') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.ccba') }}
                                    @endif

                                    @if (request()->get('type') === 'agricole')
                                        {{ __('myhouse/back/annonces/particulier/description.ccbb') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.ccba') }}
                                    @endif

                                    @if (request()->get('type') === 'residentiel')
                                        {{ __('myhouse/back/annonces/particulier/description.ccbc') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.ccba') }}
                                    @endif

                                    @if (request()->get('type') === 'industriel')
                                        {{ __('myhouse/back/annonces/particulier/description.ccbd') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.ccba') }}
                                    @endif

                                    @if (request()->get('type') === 'commercial')
                                        {{ __('myhouse/back/annonces/particulier/description.ccbe') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.ccba') }}
                                    @endif
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array(request()->get('type'), $one))

<form action="{{ route('professionnel.critere') }}" method="get" id="transform">
    @csrf

        <div class="description-one">
            <div class="particuliers ">
                <div class="c-page">

                    @if (auth()->user()->professionnel->last()->page === 'description')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                                <div class="transaction-block-content-body">
                                    Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    FERMER
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>




                        <div class="ca-page-item">
                            <div class="ca-page-item-seconds">

                                @include('myhouse.back.annonces.modules.professionnel.progress')


                                <div class="ca-page-item-third-connexion">


                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">

                                    <!-- Must change -->
                                        <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                            {{ __('myhouse/back/annonces/particulier/description.ccbf') }}
                                        </div>

                                        @if (request()->get('type') === 'entrepot')
                                           <div class="ca-page-item-third-types-box">


                                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                                <div class="ca-page-item-third-type-box">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-heeads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://31.220.62.192/images/residential/single/g5.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ccbg') }}</div>
                                                        </div>
                                                        <div class="pc-y">
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.implnte', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccbh') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="frigorifique" id="" class="ios" value="1" {{ $professionnel->frigorifique == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbi') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_batiment }}" name="surface_batiment" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbj') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->espace_entrepot }}" name="espace_entrepot" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbk') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text"  value="{{ $professionnel->espace_activite }}" name="espace_activite" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbl') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text"  value="{{ $professionnel->espace_bureau }}" name="espace_bureau" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.amenagement', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbz') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->hauteur_entrepot }}" name="hauteur_entrepot" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazg') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccbo') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wc_sanitaire" id="" class="ios" value="1" {{ $professionnel->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="place_vehicule" id="" class="form-control yt-select">
                                                                        <?php for ($i = 1; $i <=20; $i++): ?>

                                                                            <option value="{{ $i }} {{ __('myhouse/back/annonces/particulier/description.ccbp') }}  ">{{ $i }} {{ __('myhouse/back/annonces/particulier/description.ccbp') }}</option>

                                                                        <?php endfor; ?>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.ccbdp') }} ">{{ __('myhouse/back/annonces/particulier/description.ccbdp') }}</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccbq') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="site_clos" id="" class="ios" value="1" {{ $professionnel->site_clos == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccbr') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="pont_roulant" id="" class="ios" value="1" {{ $professionnel->pont_roulant == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccbs') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="monte_charge" id="" class="ios" value="1" {{ $professionnel->monte_charge == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.ccbt') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="alarme" id="" class="ios" value="1" {{ $professionnel->alarme == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbv') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_un }}" name="portail_un" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_deux }}" name="portail_deux" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbw') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_trois }}" name="portail_trois" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_quatre }}" name="portail_quatre" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbx') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_cinq }}" name="portail_cinq" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_six }}" name="portail_six" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbxa') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_sept }}" name="portail_sept" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_huit }}" name="portail_huit" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="yt_b text-center">
                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ccby') }}</button>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'garage')
                                            <div class="ca-page-item-third-types-box">
                                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                                <div class="ca-page-item-third-type-box">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-heeads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://31.220.62.192/images/residential/single/g1.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdab') }}</div>
                                                        </div>
                                                        <div class="pc-y">
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cdac') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_garage }}" name="surface_garage" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cdad') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->hauteur_plafond }}" name="hauteur_plafond" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazg') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdae') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wc_sanitaire" id="" class="ios" value="1" {{ $professionnel->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbv') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail }}" name="portail" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_deux }}" name="portail_deux" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="yt_b text-center">
                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdah') }}</button>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'local_industriel')
                                            <div class="ca-page-item-third-types-box">


                                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                                <div class="ca-page-item-third-type-box">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-heeads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://31.220.62.192/images/residential/single/g4.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdai') }}</div>
                                                        </div>
                                                        <div class="pc-y">
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.implnte', ['particulier' => $professionnel])

                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbi') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_batiment }}" name="surface_batiment" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbk') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->espace_activite }}"  name="espace_activite" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbj') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->espace_entrepot }}"  name="espace_entrepot" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbl') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->espace_bureau }}"  name="espace_bureau" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.amenagement', ['particulier' => $professionnel])

                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbz') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->espace_bureau }}"  name="hauteur_entrepot" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazg') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdaq') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="wc_sanitaire" id="" class="ios" value="1" {{ $professionnel->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="place_vehicule" id="" class="form-control yt-select">
                                                                        <?php for ($i = 1; $i <=20; $i++): ?>

                                                                        <option value="{{ $i }} {{ __('myhouse/back/annonces/particulier/description.cdar') }}">{{ $i }} {{ __('myhouse/back/annonces/particulier/description.cdar') }}</option>

                                                                        <?php endfor; ?>
                                                                            <option value="{{ __('myhouse/back/annonces/particulier/description.ccbdp') }} ">{{ __('myhouse/back/annonces/particulier/description.ccbdp') }}</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdas') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="site_clos" id="" class="ios" value="1" {{ $professionnel->site_clos == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdat') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="pont_roulant" id="" class="ios" value="1" {{ $professionnel->pont_roulant == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdau') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="monte_charge" id="" class="ios" value="1" {{ $professionnel->monte_charge == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdav') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="alarme" id="" class="ios" value="1" {{ $professionnel->alarme == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbv') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_un }}"  name="portail_un" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_deux }}"  name="portail_deux" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbw') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_trois }}"  name="portail_trois" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_quatre }}"  name="portail_quatre" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbx') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_cinq }}"  name="portail_cinq" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_six }}"  name="portail_six" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                        <div class="ca-page-encounter">
                                                                            <div class="ca-page-encounter-title">{{ __('myhouse/back/annonces/particulier/description.ccbxa') }}</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_sept }}"  name="portail_sept" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-x">x</div>
                                                                            <div class="ca-page-encounter-input">
                                                                                <input type="text" value="{{ $professionnel->portail_huit }}"  name="portail_huit" class="form-control" placeholder="Tapez">
                                                                            </div>
                                                                            <div class="ca-page-encounter-unit">m</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="yt_b text-center">
                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdba') }}</button>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'local_commercial')
                                            <div class="ca-page-item-third-types-box">


                                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                                <div class="ca-page-item-third-type-box">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-heeads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://31.220.62.192/images/residential/single/g6.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdbb') }}</div>
                                                        </div>
                                                        <div class="pc-y">
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">

                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="fond_commerce" id="" class="form-control yt-select">
                                                                        @if ($professionnel->fond_commerce != "")
                                                                            <option hidden selected value="{{ $professionnel->fond_commerce }}">{{ $professionnel->fond_commerce }}</option>
                                                                        @endif

                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cdbc') }}">{{ __('myhouse/back/annonces/particulier/description.cdbc') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cdbcc') }}">{{ __('myhouse/back/annonces/particulier/description.cdbcc') }}</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbze') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->surface_total }}" name="surface_total" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdbn') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="mezzanine" id="" class="ios" value="1" {{ $professionnel->mezzanine == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cdbe') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->sous_pente }}" name="sous_pente" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.ccbzf') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->terrasses }}" name="terrasses" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.piece', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cdbh') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->longueur_facade }}" name="longueur_facade" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cdbi') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->hauteur_plafond }}" name="hauteur_plafond" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazg') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="zone_implante" id="" class="form-control yt-select">
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cdbj') }}">{{ __('myhouse/back/annonces/particulier/description.cdbj') }}</option>
                                                                        <option value="{{ __('myhouse/back/annonces/particulier/description.cdbj') }}">{{ __('myhouse/back/annonces/particulier/description.cdbj') }}</option>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                            <!--<div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.nine', ['particulier' => $professionnel])
                                                                </div>
                                                            </div> -->
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdbk') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="angle_de_rue" id="" class="ios" value="1" {{ $professionnel->angle_de_rue == 1 ? 'checked' : '' }}>
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
                                                                            <input type="checkbox" name="wc_sanitaire" id="" class="ios" value="1" {{ $professionnel->wc_sanitaire == 1 ? 'checked' : '' }}>
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
                                                                            {{ __('myhouse/back/annonces/particulier/description.cdbo') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="alarme" id="" class="ios" value="1" {{ $professionnel->alarme == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="yt_b text-center">
                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdbp') }}</button>
                                                </div>
                                            </div>
                                        @endif

                                        @if (request()->get('type') === 'immeuble')
                                            <div class="ca-page-item-third-types-box">
                                                <div class="ca-page-item-third-connexion-box-hr"></div>
                                                <div class="ca-page-item-third-type-box">
                                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                        <div class="ca-page-item-second-body-card-item-heeads">
                                                            <div class="ca-page-item-second-body-card-item-head-img">
                                                                <img src="http://31.220.62.192/images/residential/single/g3.svg" alt="">
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdbq') }}</div>
                                                        </div>
                                                        <div class="pc-y">
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.one', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cbat') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" value="{{ $professionnel->superficie_terrain }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="pc_yat">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-surface">
                                                                        <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.cdbs') }}</div>
                                                                        <div class="ca-page-surface-input">
                                                                            <div class="ca-page-surface-input-field">
                                                                                <input type="text" name="surface_batie" value="{{ $professionnel->surface_batie }}" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbazf') }}">
                                                                            </div>
                                                                            <div class="ca-page-surface-input-unit">m²</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    @include('myhouse.back.annonces.particuliers.extra.amenagement', ['particulier' => $professionnel])
                                                                </div>
                                                            </div>
                                                            <!-- <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <select name="place_vehicule" id="" class="form-control yt-select">

                                                                        <?php for ($i = 1; $i <=10; $i++): ?>

                                                                        <option value="{{ $i }} {{ __('myhouse/back/annonces/particulier/description.cdbu') }}">{{ $i }} {{ __('myhouse/back/annonces/particulier/description.cdbu') }}</option>

                                                                        <?php endfor; ?>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                            <div class="pc_yt">
                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                            {{ __('myhouse/back/annonces/particulier/description.w') }}
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                            <input type="checkbox" name="garage_vehicule" id="" class="ios" value="1" {{ $professionnel->garage_vehicule == 1 ? 'checked' : '' }}>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="yt_b text-center">
                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdbv') }}</button>
                                                </div>
                                            </div>
                                        @endif

                                    <!-- Must change -->

                                    </form>
                                </div>
                            </div>
                        </div>





                        <div class="ca-page-item">
                            <div class="ca-page-item-third">
                                <div class="ca-page-item-third-button-x clearfix">
                                    <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                                </div>
                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="ca-page-item-third-text pt-3 text-center">

                                    @if (request()->get('type') === 'immeuble')
                                        {{ __('myhouse/back/annonces/particulier/description.cdbw') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cdbx') }}
                                    @endif

                                    @if (request()->get('type') === 'garage')
                                        {{ __('myhouse/back/annonces/particulier/description.cdby') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cdbx') }}
                                    @endif

                                    @if (request()->get('type') === 'local_industriel')
                                        {{ __('myhouse/back/annonces/particulier/description.cdbz') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cdbx') }}
                                    @endif

                                    @if (request()->get('type') === 'local_commercial')
                                        {{ __('myhouse/back/annonces/particulier/description.ceaa') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cdbx') }}
                                    @endif

                                    @if (request()->get('type') === 'entrepot')
                                        {{ __('myhouse/back/annonces/particulier/description.ceab') }} <br>
                                        {{ __('myhouse/back/annonces/particulier/description.cdbx') }}
                                    @endif

                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>

        </div>
    @else
        <div style="margin-top: 500px; text-align: center">
            <h1>{{ __('myhouse/back/annonces/particulier/description.cead') }}</h1>
        </div>
    @endif

@stop


 @section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>
@stop
