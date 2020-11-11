@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/particulier/description.aa') }}
@stop
@section('content')



<div style="position: relative">


    @include('myhouse.front.includes.success')

@php

        $four = ['appartement', 'Villa', 'Maison', 'Cabanon/Chalet', 'Riad', 'Ferme', 'Chambre d\'hôte'];
        $three = ['Cité universitaire', 'Bureau', 'Plateau'];
        $two = ['Terrain agricole', 'Terrain résidentiel', 'Terrain industriel', 'Terrain commercial', 'Propriété agricole'];
        $one = ['Immeuble/Bâtiment', 'Local commercial', 'Garage', 'Entrepôt/Hangar', 'Local industriel'];

        $residential = ['appartement', 'Villa', 'Maison', 'Chalet', 'Riad', 'Ferme', 'Chambre d\'hôte', 'Cité universitaire'];
        $commercial = ['Bureau', 'Plateau', 'Propriété agricole', 'Immeuble/Bâtiment', 'Local commercial', 'Garage', 'Entrepôt', 'Local industriel'];
        $terrain = ['Agricole', 'Terrain résidentiel', 'Terrain industriel', 'Terrain commercial'];
    
@endphp


    @if (in_array($particulier->typeBien->nom, $four))

        <form id="transform" action="{{ route('particulier.localisation') }}" method="get">

        <div class="description-four">
            <div class="particulier">
                <div class="c-page">
                
            @isset(auth()->user()->particulier->last()->page)

                    @if (auth()->user()->particulier->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>

                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/particulier/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/particulier/critere.ab') }} <br> {{ __('myhouse/back/annonces/particulier/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/particulier/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

            @endisset

                    <div class="ca-page">

                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.particulier.left')
                        </div>

                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.back.annonces.modules.particulier.progress')
                                <div class="ca-page-item-third-connexion">

                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="particulier_id" value="{{ $particulier->id }}">


                                        @if ($particulier->typeBien->nom === 'appartement')
                                            
                                            <div class="must-change">
                                            
                                                <div class="ca-page-item-third-types-box-four">
                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>
                                                        <div class="with-critere">
                                                            {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                        </div>


                                                    @include('myhouse.front.includes.backmessage')





                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ic.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">   

                                                                    
                                                                @if(isset($particulier->appart_etage_niveau))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="appart_etage_niveau" id="appart_etage_niveau" value="1" {{ old('appart_etage_niveau') != null ? 'checked' : '' }} {{ isset($particulier->critere->last()->appart_etage_niveau) && $particulier->critere->last()->appart_etage_niveau == 1 ? 'checked' : '' }}>
                                                                                            <label for="appart_etage_niveau">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->appart_etage_niveau }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($particulier->appart_etage_nombre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="appart_etage_nombre" id="appart_etage_nombre" value="1" {{ old('appart_etage_nombre') != null ? 'checked' : '' }} {{ isset($particulier->critere->last()->appart_etage_nombre) && $particulier->critere->last()->appart_etage_nombre == 1 ? 'checked' : '' }}>
                                                                                            <label for="appart_etage_nombre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->appart_etage_nombre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($particulier->appart_etage))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="appart_etage" id="appart_etage" value="1" {{ old('appart_etage') != null ? 'checked' : '' }} {{ isset($particulier->critere->last()->appart_etage) && $particulier->critere->last()->appart_etage == 1 ? 'checked' : '' }}>
                                                                                            <label for="appart_etage">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->appart_etage }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($particulier->appart_etage_immeuble))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="appart_etage_immeuble" id="appart_etage_immeuble" {{ old('appart_etage_immeuble') != null ? 'checked' : '' }} value="1" {{ isset($particulier->critere->last()->appart_etage_immeuble) && $particulier->critere->last()->appart_etage_immeuble == 1 ? 'checked' : '' }}>
                                                                                            <label for="appart_etage_immeuble">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->appart_etage_immeuble }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


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
                                                                @include('myhouse.back.annonces.particuliers.critere.interior')
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
                                                                
                                                                @include('myhouse.back.annonces.particuliers.critere.exterior')
                                                                
                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="yt_b text-center">

                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>

                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.aav') }}</button>
                                                    </div>

                                                </div>
                                            </div>

                                        @endif


                                        @if ($particulier->typeBien->nom === 'Villa')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>

                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                   <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>
 
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
                                                    

                                                                @if(isset($particulier->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('sous_sol') != null ? 'checked' : '' }} name="sous_sol" id="sous_sol" value="1" {{ isset($particulier->critere->last()->sous_sol) && $particulier->critere->last()->sous_sol == 1 ? 'checked' : '' }}>
                                                                                        <label for="sous_sol">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->sous_sol }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                                @if(isset($particulier->type_terrain))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('type_terrain') != null ? 'checked' : '' }} name="type_terrain" id="type_terrain" value="1" {{ isset($particulier->critere->last()->type_terrain) && $particulier->critere->last()->type_terrain == 1 ? 'checked' : '' }}>
                                                                                        <label for="type_terrain">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->type_terrain }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                         
                                                
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
                                                                @include('myhouse.back.annonces.particuliers.critere.interior')
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

                                                                @include('myhouse.back.annonces.particuliers.critere.exterior')


                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbf') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($particulier->typeBien->nom === 'Maison')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/single/v4.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase ">
                                                                    {{ __('myhouse/back/annonces/particulier/description.abk') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                    

                                                                @if(isset($particulier->amenagement_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('amenagement_type') != null ? 'checked' : '' }} name="amenagement_type" id="amenagement_type" value="1" {{ isset($particulier->critere->last()->amenagement_type) && $particulier->critere->last()->amenagement_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="amenagement_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->amenagement_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif



                                                         
                                                
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
                                                                @include('myhouse.back.annonces.particuliers.critere.interior')
                                                            </div>
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
                                                                    
                                                                     @if(isset($particulier->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                         

                                                                @if(isset($particulier->interphone) && $particulier->interphone > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('interphone') != null ? 'checked' : '' }} name="interphone" id="interphone" value="1" {{ isset($particulier->critere->last()->interphone) && $particulier->critere->last()->interphone == 1 ? 'checked' : '' }}>
                                                                                            <label for="interphone">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Interphone' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                            </div>

                                                        </div>


                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbn') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($particulier->typeBien->nom === 'Cabanon/Chalet')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>
                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                       <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/single/v4.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase ">
                                                                    {{ __('myhouse/back/annonces/particulier/description.abk') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                    

                                                                @if(isset($particulier->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('sous_sol') != null ? 'checked' : '' }} name="sous_sol" id="sous_sol" value="1" {{ isset($particulier->critere->last()->sous_sol) && $particulier->critere->last()->sous_sol == 1 ? 'checked' : '' }}>
                                                                                        <label for="sous_sol">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->sous_sol }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
    

                                                                @if(isset($particulier->facade_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('facade_type') != null ? 'checked' : '' }} name="facade_type" id="facade_type" value="1"  {{ isset($particulier->critere->last()->facade_type) && $particulier->critere->last()->facade_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="facade_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->facade_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                         
                                                
                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/tt.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text"> {{ __('myhouse/back/annonces/particulier/description.ak') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                @include('myhouse.back.annonces.particuliers.critere.interior')
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

                                                       

                                                                @if(isset($particulier->espace_vert) && $particulier->espace_vert > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('espace_vert') != null ? 'checked' : '' }} name="espace_vert" id="espace_vert" value="1" {{ isset($particulier->critere->last()->espace_vert) && $particulier->critere->last()->espace_vert == 1 ? 'checked' : '' }}>
                                                                                         <label for="espace_vert">
                                                                                         </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Espaces verts" }}
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                @if(isset($particulier->gardiennage) && $particulier->gardiennage > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('gardiennage') != null ? 'checked' : '' }} name="gardiennage" id="gardiennage" value="1" {{ isset($particulier->critere->last()->gardiennage) && $particulier->critere->last()->gardiennage == 1 ? 'checked' : '' }}>
                                                                                         <label for="gardiennage">
                                                                                         </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Gardiennage" }}
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                     @if(isset($particulier->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                @if(isset($particulier->interphone) && $particulier->interphone > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('interphone') != null ? 'checked' : '' }} name="interphone" id="interphone" value="1" {{ isset($particulier->critere->last()->interphone) && $particulier->critere->last()->interphone == 1 ? 'checked' : '' }}>
                                                                                         <label for="interphone">
                                                                                         </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Interphone" }}
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbf') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($particulier->typeBien->nom === 'Riad')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>                                                    

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/r4.svg" alt="" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                @if(isset($particulier->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('sous_sol') != null ? 'checked' : '' }} name="sous_sol" id="sous_sol" value="1" {{ isset($particulier->critere->last()->sous_sol) && $particulier->critere->last()->sous_sol == 1 ? 'checked' : '' }}>
                                                                                        <label for="sous_sol">
                                                                                        </label>    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->sous_sol }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
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
                                                                @include('myhouse.back.annonces.particuliers.critere.interior')

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

                                                       

                                                                @if(isset($particulier->espace_vert) && $particulier->espace_vert > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('espace_vert') != null ? 'checked' : '' }} name="espace_vert" id="espace_vert" value="1" {{ isset($particulier->critere->last()->espace_vert) && $particulier->critere->last()->espace_vert == 1 ? 'checked' : '' }}>
                                                                                         <label for="espace_vert">
                                                                                         </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Espaces verts" }}
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                @if(isset($particulier->gardiennage) && $particulier->gardiennage > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('gardiennage') != null ? 'checked' : '' }} name="gardiennage" id="gardiennage" value="1" {{ isset($particulier->critere->last()->gardiennage) && $particulier->critere->last()->gardiennage == 1 ? 'checked' : '' }}>
                                                                                         <label for="gardiennage">
                                                                                         </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Gardiennage" }}
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                     @if(isset($particulier->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                @if(isset($particulier->interphone) && $particulier->interphone > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('interphone') != null ? 'checked' : '' }} name="interphone" id="interphone" value="1" {{ isset($particulier->critere->last()->interphone) && $particulier->critere->last()->interphone == 1 ? 'checked' : '' }}>
                                                                                         <label for="interphone">
                                                                                         </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Interphone" }}
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                            </div>

                                                        </div>

                                                        
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.aav') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($particulier->typeBien->nom === 'Ferme')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g2.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                @if(isset($particulier->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('sous_sol') != null ? 'checked' : '' }} name="sous_sol" id="sous_sol" value="1" {{ isset($particulier->critere->last()->sous_sol) && $particulier->critere->last()->sous_sol == 1 ? 'checked' : '' }}>
                                                                                        <label for="sous_sol">
                                                                                        </label>    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->sous_sol }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
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
                                                                @include('myhouse.back.annonces.particuliers.critere.interior')
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

                                                

                                                                @if(isset($particulier->exploitation_agricole) && $particulier->exploitation_agricole > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('exploitation_agricole') != null ? 'checked' : '' }} name="exploitation_agricole" id="exploitation_agricole" value="1" {{ isset($particulier->critere->last()->exploitation_agricole) && $particulier->critere->last()->exploitation_agricole == 1 ? 'checked' : '' }}>
                                                                                            <label for="exploitation_agricole">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Exploitation agricole" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif


                                                                @if(isset($particulier->garage_ferme))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('garage_ferme') != null ? 'checked' : '' }} name="garage_ferme" id="garage_ferme" value="1" {{ isset($particulier->critere->last()->garage_ferme) && $particulier->critere->last()->garage_ferme == 1 ? 'checked' : '' }}>
                                                                                        <label for="garage_ferme">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->garage_ferme }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                @if(isset($particulier->piscine) && $particulier->piscine > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('piscine') != null ? 'checked' : '' }} name="piscine" id="piscine" value="1" {{ isset($particulier->critere->last()->piscine) && $particulier->critere->last()->piscine == 1 ? 'checked' : '' }}>
                                                                                            <label for="piscine">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Piscine" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($particulier->interphone) && $particulier->interphone > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('interphone') != null ? 'checked' : '' }} name="interphone" id="interphone" value="1" {{ isset($particulier->critere->last()->interphone) && $particulier->critere->last()->interphone == 1 ? 'checked' : '' }}>
                                                                                            <label for="interphone">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Interphone" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                            </div>

                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbn') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($particulier->typeBien->nom === 'Chambre d\'hôte')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/cha4.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">


                                                                    @if(isset($particulier->reception) && $particulier->reception > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('reception') != null ? 'checked' : '' }} name="reception" id="reception" value="1" {{ isset($particulier->critere->last()->reception) && $particulier->critere->last()->reception == 1 ? 'checked' : '' }}>
                                                                                            <label for="reception">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.abbk') }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->reservation) && $particulier->reservation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('reservation') != null ? 'checked' : '' }} name="reservation" id="reservation" value="1" {{ isset($particulier->critere->last()->reservation) && $particulier->critere->last()->reservation == 1 ? 'checked' : '' }}>
                                                                                            <label for="reservation">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbl') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

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

                                                                    @if(isset($particulier->dejeune) && $particulier->dejeune > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('dejeune') != null ? 'checked' : '' }} name="dejeune" id="dejeune" value="1" {{ isset($particulier->critere->last()->dejeune) && $particulier->critere->last()->dejeune == 1 ? 'checked' : '' }}>
                                                                                            <label for="dejeune">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbn') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                
                          


                                                                    @if(isset($particulier->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->terrasses))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
                                                                                            <label for="terrasses">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->terrasses }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->balcons))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}> 
                                                                                            <label for="balcons">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->balcons }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->wifi) && $particulier->wifi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('wifi') != null ? 'checked' : '' }} name="wifi" id="wifi" value="1" {{ isset($particulier->critere->last()->wifi) && $particulier->critere->last()->wifi == 1 ? 'checked' : '' }}>
                                                                                            <label for="wifi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbo') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->tele_cable) && $particulier->tele_cable > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('tele_cable') != null ? 'checked' : '' }} name="tele_cable" id="tele_cable" value="1" {{ isset($particulier->critere->last()->tele_cable) && $particulier->critere->last()->tele_cable == 1 ? 'checked' : '' }}>
                                                                                            <label for="tele_cable">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbp') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->type_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('type_chambre') != null ? 'checked' : '' }} name="type_chambre" id="type_chambre" value="1" {{ isset($particulier->critere->last()->type_chambre) && $particulier->critere->last()->type_chambre == 1 ? 'checked' : '' }}>
                                                                                            <label for="type_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->type_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



                                                                    @if(isset($particulier->chambre_non_fumeur) && $particulier->chambre_non_fumeur > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('chambre_non_fumeur') != null ? 'checked' : '' }} name="chambre_non_fumeur" id="chambre_non_fumeur" value="1" {{ isset($particulier->critere->last()->chambre_non_fumeur) && $particulier->critere->last()->chambre_non_fumeur == 1 ? 'checked' : '' }}>
                                                                                            <label for="chambre_non_fumeur">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbr') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->service_en_chambre) && $particulier->service_en_chambre > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('service_en_chambre') != null ? 'checked' : '' }} name="service_en_chambre" id="service_en_chambre" value="1" {{ isset($particulier->critere->last()->service_en_chambre) && $particulier->critere->last()->service_en_chambre == 1 ? 'checked' : '' }}>
                                                                                            <label for="service_en_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbs') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->menage_quotidien) && $particulier->menage_quotidien > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('menage_quotidien') != null ? 'checked' : '' }} name="menage_quotidien" id="menage_quotidien" value="1" {{ isset($particulier->critere->last()->menage_quotidien) && $particulier->critere->last()->menage_quotidien == 1 ? 'checked' : '' }}>
                                                                                            <label for="menage_quotidien">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbt') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->animal_de_compagnie) && $particulier->animal_de_compagnie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('animal_de_compagnie') != null ? 'checked' : '' }} name="animal_de_compagnie" id="animal_de_compagnie" value="1" {{ isset($particulier->critere->last()->animal_de_compagnie) && $particulier->critere->last()->animal_de_compagnie == 1 ? 'checked' : '' }}>
                                                                                            <label for="animal_de_compagnie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbu') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


       


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

                                                                    @if(isset($particulier->espace_vert) && $particulier->espace_vert > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('espace_vert') != null ? 'checked' : '' }} name="espace_vert" id="espace_vert" value="1" {{ isset($particulier->critere->last()->espace_vert) && $particulier->critere->last()->espace_vert == 1 ? 'checked' : '' }}>
                                                                                            <label for="espace_vert">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbv') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->parking_gratuit) && $particulier->parking_gratuit > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('parking_gratuit') != null ? 'checked' : '' }} name="parking_gratuit" id="parking_gratuit" value="1" {{ isset($particulier->critere->last()->parking_gratuit) && $particulier->critere->last()->parking_gratuit == 1 ? 'checked' : '' }}>
                                                                                            <label for="parking_gratuit">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbw') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



                                                                    @if(isset($particulier->piscine) && $particulier->piscine > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('piscine') != null ? 'checked' : '' }} name="piscine" id="piscine" value="1" {{ isset($particulier->critere->last()->piscine) && $particulier->critere->last()->piscine == 1 ? 'checked' : '' }}>
                                                                                            <label for="piscine">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbx') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->restauration) && $particulier->restauration > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('restauration') != null ? 'checked' : '' }} name="restauration" id="restauration" value="1" {{ isset($particulier->critere->last()->restauration) && $particulier->critere->last()->restauration == 1 ? 'checked' : '' }}>
                                                                                            <label for="restauration">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abby') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->cafeteriat) && $particulier->cafeteriat > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('cafeteriat') != null ? 'checked' : '' }} name="cafeteriat" id="cafeteriat" value="1" {{ isset($particulier->critere->last()->cafeteriat) && $particulier->critere->last()->cafeteriat == 1 ? 'checked' : '' }}>
                                                                                            <label for="cafeteriat">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.abbz') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->blanchisserie) && $particulier->blanchisserie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('blanchisserie') != null ? 'checked' : '' }} name="blanchisserie" id="blanchisserie" value="1" {{ isset($particulier->critere->last()->blanchisserie) && $particulier->critere->last()->blanchisserie == 1 ? 'checked' : '' }}>
                                                                                            <label for="blanchisserie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.baaa') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



                                                                    @if(isset($particulier->spa) && $particulier->spa > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('spa') != null ? 'checked' : '' }} name="spa" id="spa" value="1" {{ isset($particulier->critere->last()->spa) && $particulier->critere->last()->spa == 1 ? 'checked' : '' }}>
                                                                                            <label for="spa">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {!! __('myhouse/back/annonces/particulier/description.baab') !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                            </div>

                                                        </div>

                                                        
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ip.svg') }}" alt="" height="50" width="50">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">
                                                                    {{ __('myhouse/back/annonces/particulier/description.aam') }}
                                                                </div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body ca-page-sp-mt">

                                                                @include('myhouse.back.annonces.particuliers.critere.near')

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
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

                                <a href="{{ $url }}">
                                    <div class="menu-wrap-x-buttons">
                                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                                    </div>
                                </a>


                            <div class="ca-page-item-third">

                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>

                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/help.critere') }} 
                                    </div>

                               

                            </div>
                        </div>



                    </div>
                </div>

            </div>

        </div>


    @elseif(in_array($particulier->typeBien->nom, $three))
      
        <form action="{{ route('particulier.localisation') }}" method="get" id="transform">

        <div class="description-three">
            <div class="particulier">
                <div class="c-page">

            @isset(auth()->user()->particulier->last()->page)

                    @if (auth()->user()->particulier->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>

                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/particulier/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/particulier/critere.ab') }} <br> {{ __('myhouse/back/annonces/particulier/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/particulier/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

            @endisset

                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.particulier.left')
                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')


                                @include('myhouse.back.annonces.modules.particulier.progress')


                                <div class="ca-page-item-third-connexion">
                                    <form action="{{ route('particulier.critere') }}" method="get">

                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="particulier_id" value="{{ $particulier->id }}">


                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">

                                        @if ($particulier->typeBien->nom === 'Cité universitaire')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.baav') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>


                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g7.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                            
                                                            <!--     <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="bg-white">
                                                                        <div class="bg-white-text">{{ __('myhouse/back/annonces/particulier/description.baax') }}</div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.baay') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="individuelle" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.baaz') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="deux_lits" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.bbaa') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="trois_lits" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/particulier/description.bbab') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="quatre_lits" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-white">
                                                                    <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.bbac') }}</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="surface_disponible" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/particulier/description.bbaw') }}">
                                                                    </div>
                                                                </div> -->

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

                                                                        <!--@if(isset($particulier->meuble) && $particulier->meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('meuble') != null ? 'checked' : '' }} name="meuble" id="meuble" value="1" {{ isset($particulier->critere->last()->meuble) && $particulier->critere->last()->meuble == 1 ? 'checked' : '' }}>
                                                                                            <label for="meuble">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbae') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif -->
                                 
                                      


                                                                        @if(isset($particulier->kichenette) && $particulier->kichenette > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('kichenette') != null ? 'checked' : '' }} name="kichenette" id="kichenette" value="1" {{ isset($particulier->critere->last()->kichenette) && $particulier->critere->last()->kichenette == 1 ? 'checked' : '' }}>
                                                                                            <label for="kichenette">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbaf') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif




                                                                        @if(isset($particulier->salle_bain) && $particulier->salle_bain > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('salle_bain') != null ? 'checked' : '' }} name="salle_bain" id="salle_bain" value="1" {{ isset($particulier->critere->last()->salle_bain) && $particulier->critere->last()->salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="salle_bain">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbag') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->miroir) && $particulier->miroir > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('miroir') != null ? 'checked' : '' }} name="miroir" id="miroir" value="1" {{ isset($particulier->critere->last()->miroir) && $particulier->critere->last()->miroir == 1 ? 'checked' : '' }}>
                                                                                            <label for="miroir">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbah') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->wifi) && $particulier->wifi > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('wifi') != null ? 'checked' : '' }} name="wifi" id="wifi" value="1" {{ isset($particulier->critere->last()->wifi) && $particulier->critere->last()->wifi == 1 ? 'checked' : '' }}>
                                                                                            <label for="wifi">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbai') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->placard) && $particulier->placard > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('placard') != null ? 'checked' : '' }} name="placard" id="placard" value="1" {{ isset($particulier->critere->last()->placard) && $particulier->critere->last()->placard == 1 ? 'checked' : '' }}>
                                                                                            <label for="placard">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbaj') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->chauffage) && $particulier->chauffage > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('chauffage') != null ? 'checked' : '' }} name="chauffage" id="chauffage" value="1" {{ isset($particulier->critere->last()->chauffage) && $particulier->critere->last()->chauffage == 1 ? 'checked' : '' }}>
                                                                                            <label for="chauffage">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbak') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->eau_chaude) && $particulier->eau_chaude > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('eau_chaude') != null ? 'checked' : '' }} name="eau_chaude" id="eau_chaude" value="1" {{ isset($particulier->critere->last()->eau_chaude) && $particulier->critere->last()->eau_chaude == 1 ? 'checked' : '' }}>
                                                                                            <label for="eau_chaude">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbal') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->placard) && $particulier->placard > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('placard') != null ? 'checked' : '' }} name="placard" id="placard" value="1" {{ isset($particulier->critere->last()->placard) && $particulier->critere->last()->placard == 1 ? 'checked' : '' }}>
                                                                                            <label for="placard">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbam') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif









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

                                                                        @if(isset($particulier->espace_vert) && $particulier->espace_vert > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('espace_vert') != null ? 'checked' : '' }} name="espace_vert" id="espace_vert" value="1" {{ isset($particulier->critere->last()->espace_vert) && $particulier->critere->last()->espace_vert == 1 ? 'checked' : '' }}>
                                                                                            <label for="espace_vert">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbao') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->restauration) && $particulier->restauration > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('restauration') != null ? 'checked' : '' }} name="restauration" id="restauration" value="1" {{ isset($particulier->critere->last()->restauration) && $particulier->critere->last()->restauration == 1 ? 'checked' : '' }}>
                                                                                            <label for="restauration">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbap') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->cafeteriat) && $particulier->cafeteriat > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('cafeteriat') != null ? 'checked' : '' }} name="cafeteriat" id="cafeteriat" value="1" {{ isset($particulier->critere->last()->cafeteriat) && $particulier->critere->last()->cafeteriat == 1 ? 'checked' : '' }}>
                                                                                            <label for="cafeteriat">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbaq') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->terrain_sport) && $particulier->terrain_sport > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('terrain_sport') != null ? 'checked' : '' }} name="terrain_sport" id="terrain_sport" value="1" {{ isset($particulier->critere->last()->terrain_sport) && $particulier->critere->last()->terrain_sport == 1 ? 'checked' : '' }}>
                                                                                            <label for="terrain_sport">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbas') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->superette) && $particulier->superette > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('superette') != null ? 'checked' : '' }} name="superette" id="superette" value="1" {{ isset($particulier->critere->last()->superette) && $particulier->critere->last()->superette == 1 ? 'checked' : '' }}>
                                                                                            <label for="superette">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbat') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->blanchisserie) && $particulier->blanchisserie > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('blanchisserie') != null ? 'checked' : '' }} name="blanchisserie" id="blanchisserie" value="1" {{ isset($particulier->critere->last()->blanchisserie) && $particulier->critere->last()->blanchisserie == 1 ? 'checked' : '' }}>
                                                                                            <label for="blanchisserie">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbau') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif



                                                            </div>

                                                        </div>


                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.bbav') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif


                                        @if ($particulier->typeBien->nom === 'Bureau')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.baav') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g7.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                     @if(isset($particulier->zone_disponible))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('zone_disponible') != null ? 'checked' : '' }} name="zone_disponible" id="zone_disponible" value="1" {{ isset($particulier->critere->last()->zone_disponible) && $particulier->critere->last()->zone_disponible == 1 ? 'checked' : '' }}>
                                                                                                <label for="zone_disponible">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->zone_disponible }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->appart_etage_nombre))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="appart_etage_nombre" id="appart_etage_nombre" value="1" {{ isset($particulier->critere->last()->appart_etage_nombre) && $particulier->critere->last()->appart_etage_nombre == 1 ? 'checked' : '' }}>
                                                                                                <label for="appart_etage_nombre">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->appart_etage_nombre }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                    






                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/i1.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbbd') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                                @include('myhouse.back.annonces.particuliers.critere.three.interior')
                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.particuliers.critere.three.exterior')
      
                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.babk') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($particulier->typeBien->nom === 'Plateau')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.baav') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border ">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/single/g7.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text"> {{ __('myhouse/back/annonces/particulier/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">
                                                
                                        
                                                
                                                                        @if(isset($particulier->zone_disponible))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('zone_disponible') != null ? 'checked' : '' }} name="zone_disponible" id="zone_disponible" value="1" {{ isset($particulier->critere->last()->zone_disponible) && $particulier->critere->last()->zone_disponible == 1 ? 'checked' : '' }}>
                                                                                                <label for="zone_disponible">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->zone_disponible }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->appart_etage_nombre))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="appart_etage_nombre" id="appart_etage_nombre" value="1" {{ isset($particulier->critere->last()->appart_etage_nombre) && $particulier->critere->last()->appart_etage_nombre == 1 ? 'checked' : '' }}>
                                                                                                <label for="appart_etage_nombre">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->appart_etage_nombre }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                    

                                                                        @if(isset($particulier->appart_etage_immeuble))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('appart_etage_immeuble') != null ? 'checked' : '' }} name="appart_etage_immeuble" id="appart_etage_immeuble" value="1" {{ isset($particulier->critere->last()->appart_etage_immeuble) && $particulier->critere->last()->appart_etage_immeuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="appart_etage_immeuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->appart_etage_immeuble }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif                                    
                                          

                                                                        @if(isset($particulier->coworking) && $particulier->coworking > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('coworking') != null ? 'checked' : '' }} name="coworking" id="coworking" value="1" {{ isset($particulier->critere->last()->coworking) && $particulier->critere->last()->coworking == 1 ? 'checked' : '' }}>
                                                                                            <label for="coworking">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.babm') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif




                                                                        @if(isset($particulier->domiciliation) && $particulier->domiciliation > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('domiciliation') != null ? 'checked' : '' }} name="domiciliation" id="domiciliation" value="1" {{ isset($particulier->critere->last()->domiciliation) && $particulier->critere->last()->domiciliation == 1 ? 'checked' : '' }}>
                                                                                            <label for="domiciliation">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.babn') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif















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
                                                                @include('myhouse.back.annonces.particuliers.critere.three.interior')
                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.particuliers.critere.three.exterior')

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
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

                                <a href="{{ $url }}">
                                    <div class="menu-wrap-x-buttons">
                                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                                    </div>
                                </a>


                            <div class="ca-page-item-third">

                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>

                                <div class="ca-page-item-third-text pt-3 text-center">
                                    {{ __('myhouse/help.critere') }} 
                                </div>

                            </div>
                        </div>



                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array($particulier->typeBien->nom, $two))
        
        <form id="transform"  action="{{ route('particulier.localisation') }}" method="get">

        <div class="description-two">
            <div class="particulier">
                <div class="c-page">
            @isset(auth()->user()->particulier->last()->page)

                    @if (auth()->user()->particulier->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>

                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/particulier/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/particulier/critere.ab') }} <br> {{ __('myhouse/back/annonces/particulier/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/particulier/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

            @endisset

                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.particulier.left')
                        </div>

                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')

                                @include('myhouse.back.annonces.modules.particulier.progress')


                                <div class="ca-page-item-third-connexion">

                                    <form action="{{ route('particulier.critere') }}" method="get">
                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="particulier_id" value="{{ $particulier->id }}">


                                        @if ($particulier->typeBien->nom === 'Terrain commercial')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cbar') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box beta">
                                                        @include('myhouse.back.annonces.particuliers.critere.two.global')
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.critere.two.near')
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cbbj') }}</button>
                                                    </div>


                                                </div>
                                            </div>
                                        @endif

                                        @if ($particulier->typeBien->nom === 'Terrain résidentiel')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cabu') }}
                                                    </div>

                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box beta">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('http://31.220.62.192/images/residential/single/gg2.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cabv') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                     

                                                                        @if(isset($particulier->titre_foncier) && $particulier->titre_foncier > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">   
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('titre_foncier') != null ? 'checked' : '' }} name="titre_foncier" id="titre_foncier" value="1" {{ isset($particulier->critere->last()->titre_foncier) && $particulier->critere->last()->titre_foncier == 1 ? 'checked' : '' }}>
                                                                                                <label for="titre_foncier">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.x') }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif 


                                                                
                                                                        @if(isset($particulier->lotissement))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('lotissement') != null ? 'checked' : '' }} name="lotissement" id="lotissement" value="1" {{ isset($particulier->critere->last()->lotissement) && $particulier->critere->last()->lotissement == 1 ? 'checked' : '' }}>
                                                                                                <label for="lotissement">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->lotissement }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->assainissement) && $particulier->assainissement > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('assainissement') != null ? 'checked' : '' }} name="assainissement" id="assainissement" value="1" {{ isset($particulier->critere->last()->assainissement) && $particulier->critere->last()->assainissement == 1 ? 'checked' : '' }}>
                                                                                                <label for="assainissement">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.cabz') }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif 

                                                                        @if(isset($particulier->raccordement_eau) && $particulier->raccordement_eau > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('raccordement_eau') != null ? 'checked' : '' }} name="raccordement_eau" id="raccordement_eau" value="1" {{ isset($particulier->critere->last()->raccordement_eau) && $particulier->critere->last()->raccordement_eau == 1 ? 'checked' : '' }}>
                                                                                                <label for="raccordement_eau">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.cbaa') }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif 

                                                                        @if(isset($particulier->puits) && $particulier->puits > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('puits') != null ? 'checked' : '' }} name="puits" id="puits" value="1" {{ isset($particulier->critere->last()->puits) && $particulier->critere->last()->puits == 1 ? 'checked' : '' }}>
                                                                                                <label for="puits">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.cbab') }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif 


                                                                        @if(isset($particulier->raccordement_electricite) && $particulier->raccordement_electricite > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('raccordement_electricite') != null ? 'checked' : '' }} name="raccordement_electricite" id="raccordement_electricite" value="1" {{ isset($particulier->critere->last()->raccordement_electricite) && $particulier->critere->last()->raccordement_electricite == 1 ? 'checked' : '' }}>
                                                                                                <label for="raccordement_electricite">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.cbac') }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif 



                                                                        @if(isset($particulier->raccordement_telephone) && $particulier->raccordement_telephone > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('raccordement_telephone') != null ? 'checked' : '' }} name="raccordement_telephone" id="raccordement_telephone" value="1" {{ isset($particulier->critere->last()->raccordement_telephone) && $particulier->critere->last()->raccordement_telephone == 1 ? 'checked' : '' }}>
                                                                                                <label for="raccordement_telephone">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.cbad') }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif 

                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.critere.two.near')
                                                        </div>

                                                    </div>

                                                    <div class="yt_b text-center">
                                                    
                                                    <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cbap') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($particulier->typeBien->nom === 'Terrain industriel')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cabu') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.particuliers.critere.two.global')


                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.critere.two.near')
                                                        </div>


                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.aav') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($particulier->typeBien->nom === 'Terrain agricole')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.cabu') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.particuliers.critere.two.global')


                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.particuliers.critere.two.near')
                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ccah') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($particulier->typeBien->nom === 'Propriété agricole')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ccai') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.particuliers.critere.two.global')

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                            @include('myhouse.back.annonces.particuliers.critere.two.near')

                                                        </div>

                                                    </div>


                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
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

                                <a href="{{ $url }}">
                                    <div class="menu-wrap-x-buttons">
                                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                                    </div>
                                </a>


                            <div class="ca-page-item-third">

                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>

                                <div class="ca-page-item-third-text pt-3 text-center">
                                    {{ __('myhouse/help.critere') }} 
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array($particulier->typeBien->nom, $one))
      
        <form action="{{ route('particulier.localisation') }}" method="get" id="transform">
      
            <div class="description-one">
      
            <div class="particulier">
      
                <div class="c-page">
      
            @isset(auth()->user()->particulier->last()->page)

                    @if (auth()->user()->particulier->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>

                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/particulier/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/particulier/critere.ab') }} <br> {{ __('myhouse/back/annonces/particulier/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/particulier/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

            @endisset
      
                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.particulier.left')
                        </div>



                        <div class="ca-page-item">

                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')


                                @include('myhouse.back.annonces.modules.particulier.progress')


                                <div class="ca-page-item-third-connexion">


                                    <form action="{{ route('particulier.critere') }}" method="get">
                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="particulier_id" value="{{ $particulier->id }}">

                                        <!-- Must change -->
                                            <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                {{ __('myhouse/back/annonces/particulier/description.ccbf') }}
                                            </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>


                                                        <div class="with-critere">
                                                            {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                        </div>

                                            @if ($particulier->typeBien->nom === 'Entrepôt/Hangar')

                                                <div class="ca-page-item-third-types-box" style="max-width: 296px !important;">




                                                    <div class="ca-page-item-third-type-box" >
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g5.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ccbg') }}</div>
                                                            </div>
                                                            <div class="pc-y">


                                                                            @if(isset($particulier->zone_implante))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('zone_implante') != null ? 'checked' : '' }} name="zone_implante" id="zone_implante" value="1" {{ isset($particulier->critere->last()->zone_implante) && $particulier->critere->last()->zone_implante == 1 ? 'checked' : '' }}>
                                                                                                    <label for="zone_implante">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->zone_implante }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($particulier->espace_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_entrepot') != null ? 'checked' : '' }} name="espace_entrepot" id="espace_entrepot" value="1" {{ isset($particulier->critere->last()->espace_entrepot) && $particulier->critere->last()->espace_entrepot == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_entrepot">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbj') }}
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                    

                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->espace_entrepot }} m²
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->espace_activite))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_activite') != null ? 'checked' : '' }} name="espace_activite" id="espace_activite" value="1" {{ isset($particulier->critere->last()->espace_activite) && $particulier->critere->last()->espace_activite == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_activite">

                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbk') }}

                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                
                                                                                             <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->espace_activite }} m²
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->espace_bureau))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_bureau') != null ? 'checked' : '' }} name="espace_bureau" id="espace_bureau" value="1" {{ isset($particulier->critere->last()->espace_bureau) && $particulier->critere->last()->espace_bureau == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_bureau">

                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbl') }}

                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                   
                                                                                                
                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                    {{ $particulier->espace_bureau }} m²
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                            
                                                                            @if(isset($particulier->hauteur_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display ">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('hauteur_entrepot') != null ? 'checked' : '' }} name="hauteur_entrepot" id="hauteur_entrepot" value="1" {{ isset($particulier->critere->last()->hauteur_entrepot) && $particulier->critere->last()->hauteur_entrepot == 1 ? 'checked' : '' }}>
                                                                                                    
                                                                                                    <label for="hauteur_entrepot">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbz') }}
                                                                                                    </label>

                                                                                                </div>
                                                                                            </div>

                                                    
                                                                                                <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                    {{ $particulier->hauteur_entrepot }} m
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif 

                                                                            @if(isset($particulier->amenagement_type))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('amenagement_type') != null ? 'checked' : '' }} name="amenagement_type" id="amenagement_type" value="1" {{ isset($particulier->critere->last()->amenagement_type) && $particulier->critere->last()->amenagement_type == 1 ? 'checked' : '' }}>
                                                                                                    <label for="amenagement_type">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->amenagement_type }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->wc_sanitaire) && $particulier->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('wc_sanitaire') != null ? 'checked' : '' }} name="wc_sanitaire" id="wc_sanitaire" value="1" {{ isset($particulier->critere->last()->wc_sanitaire) && $particulier->critere->last()->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                                                <label for="wc_sanitaire">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbo') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->place_vehicule))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                                    <label for="place_vehicule">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->place_vehicule }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($particulier->site_clos) && $particulier->site_clos > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('site_clos') != null ? 'checked' : '' }} name="site_clos" id="site_clos" value="1" {{ isset($particulier->critere->last()->site_clos) && $particulier->critere->last()->site_clos == 1 ? 'checked' : '' }}>
                                                                                                <label for="site_clos">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbq') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->pont_roulant) && $particulier->pont_roulant > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('pont_roulant') != null ? 'checked' : '' }} name="pont_roulant" id="pont_roulant" value="1" {{ isset($particulier->critere->last()->pont_roulant) && $particulier->critere->last()->pont_roulant == 1 ? 'checked' : '' }}>
                                                                                                <label for="pont_roulant">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbr') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($particulier->monte_charge) && $particulier->monte_charge > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('monte_charge') != null ? 'checked' : '' }} name="monte_charge" id="monte_charge" value="1" {{ isset($particulier->critere->last()->monte_charge) && $particulier->critere->last()->monte_charge == 1 ? 'checked' : '' }}>
                                                                                                <label for="monte_charge">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbs') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->alarme) && $particulier->alarme > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('alarme') != null ? 'checked' : '' }} name="alarme" id="alarme" value="1" {{ isset($particulier->critere->last()->alarme) && $particulier->critere->last()->alarme == 1 ? 'checked' : '' }}>
                                                                                                <label for="alarme">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbt') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
        
                                    
                            
                                                                
    
        

                                                                <div class="pc_yt" style="max-width: 252px;">
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="bg-white" style="max-width: 246px !important;">
                                                                                <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>

                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                

                                                                                    @if(isset($particulier->portail_un) && $particulier->portail_un != '00m')
                                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                                <div class="box-displays" style="padding-right: 0;">
                                                                                                    <div>
                                                                                                        <div class="pc-checkbox">
                                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('portail_un') != null ? 'checked' : '' }} name="portail_un" id="portail_un" value="1" {{ isset($particulier->critere->last()->portail_un) && $particulier->critere->last()->portail_un == 1 ? 'checked' : '' }}>
                                                                                                            <label for="portail_un"></label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="pc-label" style="padding-top: 10px;">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbv') }}
                                                                                                    </div>

                                                                                                    <div class="box-text" style="padding-top: 10px; padding-left: 3px;">
                                                                                                        &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_un }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_deux }}m
                                                                                                        
                                                                                                    </div>


                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>



                                                                                
                                                                                
                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxex">
        

                                                                                    @if(isset($particulier->portail_trois) && $particulier->portail_trois != '00m')
                                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                                <div class="box-displays">
                                                                                                    <div>
                                                                                                        <div class="pc-checkbox">
                                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('portail_trois') != null ? 'checked' : '' }} name="portail_trois" id="portail_trois" value="1" {{ isset($particulier->critere->last()->portail_trois) && $particulier->critere->last()->portail_trois == 1 ? 'checked' : '' }}>
                                                                                                            <label for="portail_trois"></label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="pc-label" style="padding-top: 10px;">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbw') }}
                                                                                                    </div>
                                                                                                    <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_trois }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_quatre }}m
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>


                                                                                
                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxex">

                    

                                                                                    @if(isset($particulier->portail_cinq) && $particulier->portail_cinq != '00m')
                                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                                <div class="box-displays">
                                                                                                    <div>
                                                                                                        <div class="pc-checkbox">
                                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('portail_cinq') != null ? 'checked' : '' }} name="portail_cinq" id="portail_cinq" value="1" {{ isset($particulier->critere->last()->portail_cinq) && $particulier->critere->last()->portail_cinq == 1 ? 'checked' : '' }}>
                                                                                                            <label for="portail_cinq">
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbx') }} 
                                                                                                    </div>
                                                                                                    <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_cinq }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_six }}m
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif



                                                                                </div>


                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxex">
        

                                                                                    @if(isset($particulier->portail_sept) && $particulier->portail_sept != '00m')
                                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                                <div class="box-displays">
                                                                                                    <div>
                                                                                                        <div class="pc-checkbox">
                                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('portail_sept') != null ? 'checked' : '' }} name="portail_sept" id="portail_sept" value="1" {{ isset($particulier->critere->last()->portail_sept) && $particulier->critere->last()->portail_sept == 1 ? 'checked' : '' }}>
                                                                                                            <label for="portail_sept">
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="pc-label" style="padding-top: 10px;">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbxa') }}
                                                                                                    </div>
                                                                                                    <div class="box-text" style="padding-top: 10px;">
                                                                                                        &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_sept }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_huit }}m
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>



                                                        </div>
                                                    </div>
                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ccby') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($particulier->typeBien->nom === 'Garage')

                                                <div class="ca-page-item-third-types-box" style="max-width: 303px !important;">
                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g1.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdab') }}</div>
                                                            </div>

                                                            <div class="pc-y pec">

                                                            @if (isset($particulier->hauteur_plafond) && $particulier->hauteur_plafond != '00m')
                                                                <div class="pc_yt" style="max-width: 261px;">
                                                                    
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('hauteur_plafond') != null ? 'checked' : '' }} name="hauteur_plafond" id="hauteur_plafond" value="1" {{ isset($particulier->critere->last()->hauteur_plafond) && $particulier->critere->last()->hauteur_plafond == 1 ? 'checked' : '' }}>
                                                                                                        <label for="hauteur_plafond"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdad') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    {{ $particulier->hauteur_plafond }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                            
                                                                </div>
                                                            @endif


                                                                

        

                                                                        @if(isset($particulier->wc_sanitaire) && $particulier->wc_sanitaire > 0)
                                                                            <div class="pc_yt" style="max-width: 261px;">

                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('wc_sanitaire') != null ? 'checked' : '' }} name="wc_sanitaire" id="wc_sanitaire" value="1" {{ isset($particulier->critere->last()->wc_sanitaire) && $particulier->critere->last()->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                                                <label for="wc_sanitaire"></label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label" style="padding-top: 13px">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdae') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        @endif


                                                                

                                                            @if(isset($particulier->portail) && $particulier->portail != '00m')
                                                                <div class="pc_yt" style="max-width: 261px;">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="bg-white">
                                                                            <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">

                                                                    

                                                                                
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays" style="padding-right: 0;">
                                                                                                
                                                                                                    <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('portail') != null ? 'checked' : '' }} name="portail" id="portail" value="1" {{ isset($particulier->critere->last()->portail) && $particulier->critere->last()->portail == 1 ? 'checked' : '' }}>
                                                                                                        <label for="portail"></label>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.xen') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp; {{ $particulier->portail }} m
                                                                                                </div>



                                                                                                <div class="pc-label" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;">
                                                                                                    x
                                                                                                </div>


                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.xeo') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp; {{ $particulier->portail_deux }} m
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                

                                                                            </div>
                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdah') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($particulier->typeBien->nom === 'Local industriel')
                                                <div class="ca-page-item-third-types-box" style="max-width: 320px !important;">


                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g4.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdai') }}</div>
                                                            </div>
                                                        
                                                            <div class="pc-y">


                                                                            @if(isset($particulier->zone_implante))

                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('zone_implante') != null ? 'checked' : '' }} name="zone_implante" id="zone_implante" value="1" {{ isset($particulier->critere->last()->zone_implante) && $particulier->critere->last()->zone_implante == 1 ? 'checked' : '' }}>
                                                                                                    <label for="zone_implante">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->zone_implante }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> 

                                                                            @endif

                            

                                                                            @if(isset($particulier->espace_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_entrepot') != null ? 'checked' : '' }} name="espace_entrepot" id="espace_entrepot" value="1" {{ isset($particulier->critere->last()->espace_entrepot) && $particulier->critere->last()->espace_entrepot == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_entrepot">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbj') }}
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                    

                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->espace_entrepot }} m²
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->espace_activite))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_activite') != null ? 'checked' : '' }} name="espace_activite" id="espace_activite" value="1" {{ isset($particulier->critere->last()->espace_activite) && $particulier->critere->last()->espace_activite == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_activite">

                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbk') }}

                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                
                                                                                             <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->espace_activite }} m²
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->espace_bureau))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_bureau') != null ? 'checked' : '' }} name="espace_bureau" id="espace_bureau" value="1" {{ isset($particulier->critere->last()->espace_bureau) && $particulier->critere->last()->espace_bureau == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_bureau">

                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbl') }}

                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                   
                                                                                                
                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                    {{ $particulier->espace_bureau }} m²
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                            
                                                                            @if(isset($particulier->hauteur_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display ">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('hauteur_entrepot') != null ? 'checked' : '' }} name="hauteur_entrepot" id="hauteur_entrepot" value="1" {{ isset($particulier->critere->last()->hauteur_entrepot) && $particulier->critere->last()->hauteur_entrepot == 1 ? 'checked' : '' }}>
                                                                                                    
                                                                                                    <label for="hauteur_entrepot">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbz') }}
                                                                                                    </label>

                                                                                                </div>
                                                                                            </div>

                                                    
                                                                                                <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                    {{ $particulier->hauteur_entrepot }} m
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif 


                                                                            @if(isset($particulier->amenagement_type))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('amenagement_type') != null ? 'checked' : '' }} name="amenagement_type" id="amenagement_type" value="1" {{ isset($particulier->critere->last()->amenagement_type) && $particulier->critere->last()->amenagement_type == 1 ? 'checked' : '' }}>
                                                                                                    <label for="amenagement_type">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->amenagement_type }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->wc_sanitaire) && $particulier->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('wc_sanitaire') != null ? 'checked' : '' }} name="wc_sanitaire" id="wc_sanitaire" value="1" {{ isset($particulier->critere->last()->wc_sanitaire) && $particulier->critere->last()->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                                                <label for="wc_sanitaire">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbo') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->place_vehicule))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                                    <label for="place_vehicule">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->place_vehicule }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($particulier->site_clos) && $particulier->site_clos > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('site_clos') != null ? 'checked' : '' }} name="site_clos" id="site_clos" value="1" {{ isset($particulier->critere->last()->site_clos) && $particulier->critere->last()->site_clos == 1 ? 'checked' : '' }}>
                                                                                                <label for="site_clos">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbq') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->pont_roulant) && $particulier->pont_roulant > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('pont_roulant') != null ? 'checked' : '' }} name="pont_roulant" id="pont_roulant" value="1" {{ isset($particulier->critere->last()->pont_roulant) && $particulier->critere->last()->pont_roulant == 1 ? 'checked' : '' }}>
                                                                                                <label for="pont_roulant">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbr') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($particulier->monte_charge) && $particulier->monte_charge > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('monte_charge') != null ? 'checked' : '' }} name="monte_charge" id="monte_charge" value="1" {{ isset($particulier->critere->last()->monte_charge) && $particulier->critere->last()->monte_charge == 1 ? 'checked' : '' }}>
                                                                                                <label for="monte_charge">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbs') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->alarme) && $particulier->alarme > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('alarme') != null ? 'checked' : '' }} name="alarme" id="alarme" value="1" {{ isset($particulier->critere->last()->alarme) && $particulier->critere->last()->alarme == 1 ? 'checked' : '' }}>
                                                                                                <label for="alarme">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbt') }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
        
                                    
                            
                                                                
    
        

                                                                <div class="pc_yt" style="max-width: 252px;">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="bg-white" style="max-width: 246px !important;">
                                                                            <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>

                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                            

                                                                                @if(isset($particulier->portail_un) && $particulier->portail_un != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays" style="padding-right: 0;">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('portail_un') != null ? 'checked' : '' }} name="portail_un" id="portail_un" value="1" {{ isset($particulier->critere->last()->portail_un) && $particulier->critere->last()->portail_un == 1 ? 'checked' : '' }}>
                                                                                                        <label for="portail_un"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbv') }}
                                                                                                </div>

                                                                                                <div class="box-text" style="padding-top: 10px; padding-left: 3px;">
                                                                                                    &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_un }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_deux }}m
                                                                                                    
                                                                                                </div>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>



                                                                            
                                                                            
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
    

                                                                                @if(isset($particulier->portail_trois) && $particulier->portail_trois != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('portail_trois') != null ? 'checked' : '' }} name="portail_trois" id="portail_trois" value="1" {{ isset($particulier->critere->last()->portail_trois) && $particulier->critere->last()->portail_trois == 1 ? 'checked' : '' }}>
                                                                                                        <label for="portail_trois"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbw') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                  &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_trois }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_quatre }}m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>


                                                                            
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">

                

                                                                                @if(isset($particulier->portail_cinq) && $particulier->portail_cinq != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('portail_cinq') != null ? 'checked' : '' }} name="portail_cinq" id="portail_cinq" value="1" {{ isset($particulier->critere->last()->portail_cinq) && $particulier->critere->last()->portail_cinq == 1 ? 'checked' : '' }}>
                                                                                                        <label for="portail_cinq">
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbx') }} 
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                   &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_cinq }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_six }}m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif



                                                                            </div>


                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
    

                                                                                @if(isset($particulier->portail_sept) && $particulier->portail_sept != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox"  class = "myhouse-check" {{ old('portail_sept') != null ? 'checked' : '' }} name="portail_sept" id="portail_sept" value="1" {{ isset($particulier->critere->last()->portail_sept) && $particulier->critere->last()->portail_sept == 1 ? 'checked' : '' }}>
                                                                                                        <label for="portail_sept">
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbxa') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp; <span style="color: rgba(170, 170, 170, 0.81)"> H </span> {{ $particulier->portail_sept }}m <span style="color: rgba(170, 170, 170, 0.81); padding-left: 4px; padding-right: 4px;">x</span> <span style="color: rgba(170, 170, 170, 0.81)"> L </span> {{ $particulier->portail_huit }}m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdba') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($particulier->typeBien->nom === 'Local commercial')
                                                <div class="ca-page-item-third-types-box" style="max-width: 293px !important;">


                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g6.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdbb') }}</div>
                                                            </div>
                                                            <div class="pc-y">
                                                                


                        
                                                                            @if(isset($particulier->fond_commerce))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('fond_commerce') != null ? 'checked' : '' }} name="fond_commerce" id="fond_commerce" value="1" {{ isset($particulier->critere->last()->fond_commerce) && $particulier->critere->last()->fond_commerce == 1 ? 'checked' : '' }}>
                                                                                                    <label for="fond_commerce">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->fond_commerce }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->mezzanine) && $particulier->mezzanine > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('mezzanine') != null ? 'checked' : '' }} name="mezzanine" id="mezzanine" value="1" {{ isset($particulier->critere->last()->mezzanine) && $particulier->critere->last()->mezzanine == 1 ? 'checked' : '' }}>
                                                                                                <label for="mezzanine">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbn') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->sous_pente))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('sous_pente') != null ? 'checked' : '' }} name="sous_pente" id="sous_pente" value="1" {{ isset($particulier->critere->last()->sous_pente) && $particulier->critere->last()->sous_pente == 1 ? 'checked' : '' }}>
                                                                                                    <label for="sous_pente">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.cdbe') }}
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->sous_pente }} m²
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif





                                                                            @if(isset($particulier->terrasse_commerciale))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('terrasse_commerciale') != null ? 'checked' : '' }} name="terrasse_commerciale" id="terrasse_commerciale" value="1" {{ isset($particulier->critere->last()->terrasse_commerciale) && $particulier->critere->last()->terrasse_commerciale == 1 ? 'checked' : '' }}>
                                                                                                    <label for="terrasse_commerciale">

                                                                                                        {{ __('myhouse/back/annonces/particulier/description.cdbf') }}  

                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                
                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->terrasse_commerciale }} m²
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif



                                                                            @if(isset($particulier->espace_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display ">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('espace_entrepot') != null ? 'checked' : '' }} name="espace_entrepot" id="espace_entrepot" value="1" {{ isset($particulier->critere->last()->espace_entrepot) && $particulier->critere->last()->espace_entrepot == 1 ? 'checked' : '' }}>
                                                                                                    <label for="espace_entrepot">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.ccbj') }}
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                    

                                                                                            <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                {{ $particulier->espace_entrepot }} m²
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif



                                                                            @if(isset($particulier->nombre_piece))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display" >
                                                                                            <div    >
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('nombre_piece') != null ? 'checked' : '' }} name="nombre_piece" id="nombre_piece" value="1" {{ isset($particulier->critere->last()->nombre_piece) && $particulier->critere->last()->nombre_piece == 1 ? 'checked' : '' }}>
                                                                                                    <label for="nombre_piece">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->nombre_piece }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif




                                                                            @if(isset($particulier->longueur_facade))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('longueur_facade') != null ? 'checked' : '' }} name="longueur_facade" id="longueur_facade" value="1" {{ isset($particulier->critere->last()->longueur_facade) && $particulier->critere->last()->longueur_facade == 1 ? 'checked' : '' }}>
                                                                                                    <label for="longueur_facade">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.cdbh') }}
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                
                                                                                                <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                    {{ $particulier->longueur_facade }} m
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->hauteur_plafond))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div style="margin-top: 18px;">
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('hauteur_plafond') != null ? 'checked' : '' }} name="hauteur_plafond" id="hauteur_plafond" value="1" {{ isset($particulier->critere->last()->hauteur_plafond) && $particulier->critere->last()->hauteur_plafond == 1 ? 'checked' : '' }}>
                                                                                                    <label for="hauteur_plafond">
                                                                                                        {{ __('myhouse/back/annonces/particulier/description.xeu') }}
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>

                                                                                                <div style="margin-top: 3px; margin-left: 20px;">
                                                                                                    {{ $particulier->hauteur_plafond }} m
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->angle_de_rue) && $particulier->angle_de_rue > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('angle_de_rue') != null ? 'checked' : '' }} name="angle_de_rue" id="angle_de_rue" value="1" {{ isset($particulier->critere->last()->angle_de_rue) && $particulier->critere->last()->angle_de_rue == 1 ? 'checked' : '' }}>
                                                                                                <label for="angle_de_rue">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbk') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->wc_sanitaire) && $particulier->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('wc_sanitaire') != null ? 'checked' : '' }} name="wc_sanitaire" id="wc_sanitaire" value="1" {{ isset($particulier->critere->last()->wc_sanitaire) && $particulier->critere->last()->wc_sanitaire == 1 ? 'checked' : '' }}>
                                                                                                <label for="wc_sanitaire">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbl') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif



                                                                            @if(isset($particulier->place_vehicule))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
                                                                                                    <label for="place_vehicule">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->place_vehicule }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($particulier->alarme) && $particulier->alarme > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('alarme') != null ? 'checked' : '' }} name="alarme" id="alarme" value="1" {{ isset($particulier->critere->last()->alarme) && $particulier->critere->last()->alarme == 1 ? 'checked' : '' }}>
                                                                                                <label for="alarme">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbo') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif



                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdbp') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($particulier->typeBien->nom === 'Immeuble')
                                                <div class="ca-page-item-third-types-box">
                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g3.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdbq') }}</div>
                                                            </div>
                                                            <div class="pc-y">


                                        

                                                                            @if(isset($particulier->surface_batie))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('surface_batie') != null ? 'checked' : '' }} name="surface_batie" id="surface_batie" value="1" {{ isset($particulier->critere->last()->surface_batie) && $particulier->critere->last()->surface_batie == 1 ? 'checked' : '' }}>
                                                                                                    <label for="surface_batie">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbs') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $particulier->surface_batie }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($particulier->amenagement_type))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox"  class = "myhouse-check" {{ old('amenagement_type') != null ? 'checked' : '' }} name="amenagement_type" id="amenagement_type" value="1" {{ isset($particulier->critere->last()->amenagement_type) && $particulier->critere->last()->amenagement_type == 1 ? 'checked' : '' }}>
                                                                                                    <label for="amenagement_type"></label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $particulier->amenagement_type }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif




                                                                            @if(isset($particulier->garage_vehicule) && $particulier->garage_vehicule > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('garage_vehicule') != null ? 'checked' : '' }} name="garage_vehicule" id="garage_vehicule" value="1" {{ isset($particulier->critere->last()->garage_vehicule) && $particulier->critere->last()->garage_vehicule == 1 ? 'checked' : '' }}>
                                                                                                <label for="garage_vehicule">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.w') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                    
            


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="yt_b text-center">
                                                        <a href = "{{ $particulier->descriptionurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
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

                                <a href="{{ $url }}">
                                    <div class="menu-wrap-x-buttons">
                                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                                    </div>
                                </a>


                            <div class="ca-page-item-third">
                                
                    

                                <div class="ca-page-item-third-thumb">
                                    <img src="{{ asset('images/residential/single/gamer.svg') }}" alt="" class="img-fluid">
                                </div>

                                <div class="ca-page-item-third-text pt-3 text-center">
                                    {{ __('myhouse/help.critere') }} 
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


</div>


@stop

@section('scripts')

    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/errors/errors.js') }}"></script>

@stop
