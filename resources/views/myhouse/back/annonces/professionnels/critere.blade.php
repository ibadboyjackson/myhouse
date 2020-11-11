@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/description.aa') }}
@stop
@section('content')


    @php

        $four = ['appartement', 'Villa', 'Maison', 'Chalet', 'Riad', 'Ferme', 'Chambre d\'hôte'];
        $three = ['Cité universitaire', 'Bureau', 'Plateau'];
        $two = ['Agricole', 'Résidentiel', 'Industriel', 'Commercial', 'Propriété agricole', 'Agricole'];
        $one = ['Immeuble', 'Local commercial', 'Garage', 'Entrepôt', 'Local industriel'];
    
    @endphp





    @if (in_array($professionnel->typeBien->nom, $four))

        <form id="transform" action="{{ route('professionnel.storecritere') }}" method="post">
        @csrf
       

        <div class="description-four">
            <div class="professionnel">
                <div class="c-page">
                    
                @isset(auth()->user()->professionnel->last()->page)    
                
                    @if (auth()->user()->professionnel->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

                @endisset

                    <div class="ca-page gomez">

                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>

                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')


                                @include('myhouse.back.annonces.modules.professionnel.progress')
                                <div class="ca-page-item-third-connexion">

                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="professionnel_id" value="{{ $professionnel->id }}">


                                        @if ($professionnel->typeBien->nom === 'appartement')
                                            
                                            <div class="must-change">
                                            
                                                <div class="ca-page-item-third-types-box-four">
                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
                                                    </div>
                                                    
                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="{{ asset('images/residential/ic.svg') }}" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ac') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">                

                                           


                                                                    @if(isset($professionnel->vente_meuble) && $professionnel->vente_meuble > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="vente_meuble" id="vente_meuble" value="1">
                                                                                            <label for="vente_meuble">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Vente meublé' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($professionnel->location_longue_duree) && $professionnel->location_longue_duree > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="location_longue_duree" id="location_longue_duree" value="1">
                                                                                            <label for="location_longue_duree">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Location longue durée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->echange_definitif) && $professionnel->echange_definitif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="echange_definitif" id="echange_definitif" value="1">
                                                                                            <label for="echange_definitif">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Echange définitif' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->appart_etage_niveau))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="appart_etage_niveau" id="appart_etage_niveau" value="1">
                                                                                            <label for="appart_etage_niveau">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->appart_etage_niveau }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->appart_etage_nombre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="appart_etage_nombre" id="appart_etage_nombre" value="1">
                                                                                            <label for="appart_etage_nombre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->appart_etage_nombre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->appart_etage))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="appart_etage" id="appart_etage" value="1">
                                                                                            <label for="appart_etage">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->appart_etage }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->appart_etage_immeuble))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="appart_etage_immeuble" id="appart_etage_immeuble" value="1">
                                                                                            <label for="appart_etage_immeuble">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->appart_etage_immeuble }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.interior')
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
                                                                
                                                                @include('myhouse.back.annonces.professionnels.critere.exterior')
                                                                
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

                                                                @include('myhouse.back.annonces.professionnels.critere.near')

                                                            </div>
                                                        </div>

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


                                        @if ($professionnel->typeBien->nom === 'Villa')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}

                                                    </div>

                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                   <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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
                                                    

                                                                @if(isset($professionnel->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="sous_sol" id="sous_sol" value="1" >
                                                                                        <label for="sous_sol">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->sous_sol }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                                @if(isset($professionnel->type_terrain))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="type_terrain" id="type_terrain" value="1" >
                                                                                        <label for="type_terrain">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->type_terrain }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.interior')
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

                                                                @include('myhouse.back.annonces.professionnels.critere.exterior')


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

                                                                @include('myhouse.back.annonces.professionnels.critere.near')

                                                            </div>
                                                        </div>

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



                                        @if ($professionnel->typeBien->nom === 'Maison')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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
                                                    

                                                                @if(isset($professionnel->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="sous_sol" id="sous_sol" value="1" >
                                                                                        <label for="sous_sol">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->sous_sol }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.interior')
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
                                                                    
                                                                     @if(isset($professionnel->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                         

                                                                @if(isset($professionnel->interphone) && $professionnel->interphone > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="interphone" id="interphone" value="1">
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

                                                                @include('myhouse.back.annonces.professionnels.critere.near')

                                                            </div>
                                                        </div>

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


                                        @if ($professionnel->typeBien->nom === 'Chalet')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>
                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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
                                                    

                                                                @if(isset($professionnel->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="sous_sol" id="sous_sol" value="1" >
                                                                                        <label for="sous_sol">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->sous_sol }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
    

                                                                @if(isset($professionnel->facade_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="facade_type" id="facade_type" value="1" >
                                                                                        <label for="facade_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->facade_type }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.interior')
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

                                                       

                                                                @if(isset($professionnel->espace_vert) && $professionnel->espace_vert > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="espace_vert" id="espace_vert" value="1">
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


                                                                @if(isset($professionnel->gardiennage) && $professionnel->gardiennage > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="gardiennage" id="gardiennage" value="1">
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


                                                                     @if(isset($professionnel->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                @if(isset($professionnel->interphone) && $professionnel->interphone > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="interphone" id="interphone" value="1">
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

                                                                @include('myhouse.back.annonces.professionnels.critere.near')

                                                            </div>
                                                        </div>

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


                                        @if ($professionnel->typeBien->nom === 'Riad')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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
                                                                @if(isset($professionnel->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="sous_sol" id="sous_sol" value="1">
                                                                                        <label for="sous_sol">
                                                                                        </label>    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->sous_sol }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.interior')

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

                                                       

                                                                @if(isset($professionnel->espace_vert) && $professionnel->espace_vert > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="espace_vert" id="espace_vert" value="1">
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


                                                                <!-- @if(isset($professionnel->gardiennage) && $professionnel->gardiennage > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="gardiennage" id="gardiennage" value="1">
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
                                                                @endif -->


                                                                     @if(isset($professionnel->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                @if(isset($professionnel->interphone) && $professionnel->interphone > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="interphone" id="interphone" value="1">
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

                                                                @include('myhouse.back.annonces.professionnels.critere.near')

                                                            </div>
                                                        </div>

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


                                        @if ($professionnel->typeBien->nom === 'Ferme')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/back/annonces/particulier/description.ab') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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
                                                                @if(isset($professionnel->sous_sol))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="sous_sol" id="sous_sol" value="1">
                                                                                        <label for="sous_sol">
                                                                                        </label>    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->sous_sol }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.interior')
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

                                                

                                                                @if(isset($professionnel->exploitation_agricole) && $professionnel->exploitation_agricole > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="exploitation_agricole" id="exploitation_agricole" value="1">
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


                                                                @if(isset($professionnel->garage_ferme))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="garage_ferme" id="garage_ferme" value="1">
                                                                                        <label for="garage_ferme">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->garage_ferme }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                                @if(isset($professionnel->piscine) && $professionnel->piscine > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="piscine" id="piscine" value="1">
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

                                                                @if(isset($professionnel->interphone) && $professionnel->interphone > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="interphone" id="interphone" value="1">
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

                                                                @include('myhouse.back.annonces.professionnels.critere.near')

                                                            </div>
                                                        </div>

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


                                        @if ($professionnel->typeBien->nom === 'Chambre d\'hôte')
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


                                                                    @if(isset($professionnel->reception) && $professionnel->reception > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="reception" id="reception" value="1">
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

                                                                    @if(isset($professionnel->reservation) && $professionnel->reservation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="reservation" id="reservation" value="1">
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

                                                                    @if(isset($professionnel->dejeune) && $professionnel->dejeune > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dejeune" id="dejeune" value="1">
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
                                                                
                          


                                                                    @if(isset($professionnel->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->place_vehicule }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->terrasses))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="terrasses" id="terrasses" value="1">
                                                                                            <label for="terrasses">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->terrasses }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->balcons))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="balcons" id="balcons" value="1">
                                                                                            <label for="balcons">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->balcons }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($professionnel->wifi) && $professionnel->wifi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="wifi" id="wifi" value="1">
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


                                                                    @if(isset($professionnel->tele_cable) && $professionnel->tele_cable > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="tele_cable" id="tele_cable" value="1">
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


                                                                    @if(isset($professionnel->type_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="type_chambre" id="type_chambre" value="1">
                                                                                            <label for="type_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->type_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



                                                                    @if(isset($professionnel->chambre_non_fumeur) && $professionnel->chambre_non_fumeur > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="chambre_non_fumeur" id="chambre_non_fumeur" value="1">
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


                                                                    @if(isset($professionnel->service_en_chambre) && $professionnel->service_en_chambre > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="service_en_chambre" id="service_en_chambre" value="1">
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


                                                                    @if(isset($professionnel->menage_quotidien) && $professionnel->menage_quotidien > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="menage_quotidien" id="menage_quotidien" value="1">
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


                                                                    @if(isset($professionnel->animal_de_compagnie) && $professionnel->animal_de_compagnie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="animal_de_compagnie" id="animal_de_compagnie" value="1">
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

                                                                    @if(isset($professionnel->espace_vert) && $professionnel->espace_vert > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="espace_vert" id="espace_vert" value="1">
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

                                                                    @if(isset($professionnel->parking_gratuit) && $professionnel->parking_gratuit > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="parking_gratuit" id="parking_gratuit" value="1">
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



                                                                    @if(isset($professionnel->piscine) && $professionnel->piscine > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="piscine" id="piscine" value="1">
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


                                                                    @if(isset($professionnel->restauration) && $professionnel->restauration > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="restauration" id="restauration" value="1">
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

                                                                    @if(isset($professionnel->cafeteriat) && $professionnel->cafeteriat > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cafeteriat" id="cafeteriat" value="1">
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


                                                                    @if(isset($professionnel->blanchisserie) && $professionnel->blanchisserie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="blanchisserie" id="blanchisserie" value="1">
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



                                                                    @if(isset($professionnel->spa) && $professionnel->spa > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="spa" id="spa" value="1">
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

                                                                @include('myhouse.back.annonces.particuliers.critere.near', ['particulier' => $professionnel])

                                                            </div>
                                                        </div>
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

                                    <div class="ca-page-item-third-text pt-3 text-center">
                                        {{ __('myhouse/help.critere') }} 
                                    </div>
                        </div>



                    </div>
                </div>

            </div>

        </div>


    @elseif(in_array($professionnel->typeBien->nom, $three))
      
        <form action="{{ route('professionnel.storecritere') }}" method="post" id="transform">

        @csrf
       


        <div class="description-three">
            <div class="professionnel">
                <div class="c-page gomez">

                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

                @endisset

    


                    <div class="ca-page">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')


                                @include('myhouse.back.annonces.modules.professionnel.progress')


                                <div class="ca-page-item-third-connexion">
                                    <form action="{{ route('professionnel.critere') }}" method="get">

                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="professionnel_id" value="{{ $professionnel->id }}">


                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">

                                        @if ($professionnel->typeBien->nom === 'Cité universitaire')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}

                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>


                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g7.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/professionnel/description.baaw') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                            <!--     <div class="ca-page-item-second-body-card-item-body-item">
                                                                    <div class="bg-white">
                                                                        <div class="bg-white-text">{{ __('myhouse/back/annonces/professionnel/description.baax') }}</div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/professionnel/description.baay') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="individuelle" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/professionnel/description.baaz') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="deux_lits" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/professionnel/description.bbaa') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="trois_lits" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                {{ __('myhouse/back/annonces/professionnel/description.bbab') }}
                                                                            </div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                <input type="checkbox" name="quatre_lits" id="#" class="ios" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-white">
                                                                    <div class="bg-text-gray">{{ __('myhouse/back/annonces/professionnel/description.bbac') }}</div>
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <input type="text" name="surface_disponible" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/professionnel/description.bbaw') }}">
                                                                    </div>
                                                                </div> -->

                                                            </div>
                                                        </div>

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                                            <div class="ca-page-item-second-body-card-item-head">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/chambre.svg" alt="" width="30" height="30">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/professionnel/description.bbad') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                        @if(isset($professionnel->meuble) && $professionnel->meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="meuble" id="meuble" value="1">
                                                                                            <label for="meuble">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbae') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                 
                                      


                                                                        @if(isset($professionnel->kichenette) && $professionnel->kichenette > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="kichenette" id="kichenette" value="1">
                                                                                            <label for="kichenette">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbaf') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif




                                                                        @if(isset($professionnel->salle_bain) && $professionnel->salle_bain > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="salle_bain" id="salle_bain" value="1">
                                                                                            <label for="salle_bain">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbag') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->miroir) && $professionnel->miroir > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="miroir" id="miroir" value="1">
                                                                                            <label for="miroir">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbah') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->wifi) && $professionnel->wifi > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="wifi" id="wifi" value="1">
                                                                                            <label for="wifi">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbai') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->placard) && $professionnel->placard > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="placard" id="placard" value="1">
                                                                                            <label for="placard">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbaj') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->chauffage) && $professionnel->chauffage > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="chauffage" id="chauffage" value="1">
                                                                                            <label for="chauffage">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbak') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->eau_chaude) && $professionnel->eau_chaude > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="eau_chaude" id="eau_chaude" value="1">
                                                                                            <label for="eau_chaude">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbal') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->placard) && $professionnel->placard > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="placard" id="placard" value="1">
                                                                                            <label for="placard">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbam') }}
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
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/professionnel/description.bban') }}</div>
                                                            </div>
                                                            <div class="ca-page-item-second-body-card-item-body">

                                                                        @if(isset($professionnel->espace_vert) && $professionnel->espace_vert > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="espace_vert" id="espace_vert" value="1">
                                                                                            <label for="espace_vert">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbao') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->restauration) && $professionnel->restauration > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="restauration" id="restauration" value="1">
                                                                                            <label for="restauration">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbap') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->cafeteriat) && $professionnel->cafeteriat > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cafeteriat" id="cafeteriat" value="1">
                                                                                            <label for="cafeteriat">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbaq') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->terrain_sport) && $professionnel->terrain_sport > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="terrain_sport" id="terrain_sport" value="1">
                                                                                            <label for="terrain_sport">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbas') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->superette) && $professionnel->superette > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="superette" id="superette" value="1">
                                                                                            <label for="superette">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbat') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->blanchisserie) && $professionnel->blanchisserie > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="blanchisserie" id="blanchisserie" value="1">
                                                                                            <label for="blanchisserie">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/professionnel/description.bbau') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif



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


                                        @if ($professionnel->typeBien->nom === 'Bureau')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}

                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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

                                                             @if(isset($professionnel->zone_disponible))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="zone_disponible" id="zone_disponible" value="1">
                                                                                                <label for="zone_disponible">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->zone_disponible }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->appart_etage_nombre))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="appart_etage_nombre" id="appart_etage_nombre" value="1">
                                                                                                <label for="appart_etage_nombre">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->appart_etage_nombre }}
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
                                                                @include('myhouse.back.annonces.professionnels.critere.three.interior')
                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.professionnels.critere.three.exterior')
      
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

                                        @if ($professionnel->typeBien->nom === 'Plateau')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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
                                                
                                        
                                                
                                                                        @if(isset($professionnel->zone_disponible))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="zone_disponible" id="zone_disponible" value="1">
                                                                                                <label for="zone_disponible">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->zone_disponible }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->appart_etage_nombre))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="appart_etage_nombre" id="appart_etage_nombre" value="1">
                                                                                                <label for="appart_etage_nombre">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->appart_etage_nombre }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                    

                                                                        @if(isset($professionnel->appart_etage_immeuble))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="appart_etage_immeuble" id="appart_etage_immeuble" value="1">
                                                                                                <label for="appart_etage_immeuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->appart_etage_immeuble }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif                                    
                                          

                                                                        @if(isset($professionnel->coworking) && $professionnel->coworking > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="coworking" id="coworking" value="1">
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




                                                                        @if(isset($professionnel->domiciliation) && $professionnel->domiciliation > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="domiciliation" id="domiciliation" value="1">
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
                                                                @include('myhouse.back.annonces.professionnels.critere.three.interior')
                                                            </div>

                                                        </div>

                                                        @include('myhouse.back.annonces.professionnels.critere.three.exterior')

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
                                        {{ __('myhouse/help.critere') }} 
                                    </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array($professionnel->typeBien->nom, $two))
        
        <form id="transform"  action="{{ route('professionnel.storecritere') }}" method="post">
        @csrf
       


        <div class="description-two">
            <div class="professionnel">
                <div class="c-page">

                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

                @endisset

                    <div class="ca-page gomez">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>

                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')

                                @include('myhouse.back.annonces.modules.professionnel.progress')


                                <div class="ca-page-item-third-connexion">

                                    <form action="{{ route('professionnel.critere') }}" method="get">
                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="professionnel_id" value="{{ $professionnel->id }}">


                                        @if ($professionnel->typeBien->nom === 'Commercial')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box beta">
                                                        @include('myhouse.back.annonces.professionnels.critere.two.global')
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.professionnels.critere.two.near')
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

                                        @if ($professionnel->typeBien->nom === 'Résidentiel')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}
                                                    </div>

                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
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

                                     

                                                                        @if(isset($professionnel->titre_foncier) && $professionnel->titre_foncier > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="titre_foncier" id="titre_foncier" value="1">
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


                                                                
                                                                        @if(isset($professionnel->lotissement))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="lotissement" id="lotissement" value="1">
                                                                                                <label for="lotissement">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->lotissement }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->assainissement) && $professionnel->assainissement > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="assainissement" id="assainissement" value="1">
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

                                                                        @if(isset($professionnel->raccordement_eau) && $professionnel->raccordement_eau > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="raccordement_eau" id="raccordement_eau" value="1">
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

                                                                        @if(isset($professionnel->puits) && $professionnel->puits > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="puits" id="puits" value="1">
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


                                                                        @if(isset($professionnel->raccordement_electricite) && $professionnel->raccordement_electricite > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="raccordement_electricite" id="raccordement_electricite" value="1">
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



                                                                        @if(isset($professionnel->raccordement_telephone) && $professionnel->raccordement_telephone > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="raccordement_telephone" id="raccordement_telephone" value="1">
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
                                                            @include('myhouse.back.annonces.professionnels.critere.two.near')
                                                        </div>

                                                    </div>

                                                    <div class="yt_b text-center">
                                                    
                                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/professionnel/description.cbap') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($professionnel->typeBien->nom === 'Industriel')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/particulier/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.professionnels.critere.two.global')


                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.professionnels.critere.two.near')
                                                        </div>


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

                                        @if ($professionnel->typeBien->nom === 'Agricole')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                        {{ __('myhouse/help.desc') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.professionnels.critere.two.global')


                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">
                                                            @include('myhouse.back.annonces.professionnels.critere.two.near')
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

                                        @if ($professionnel->typeBien->nom === 'Propriété agricole')
                                            <div class="must-change">
                                                <div class="ca-page-item-third-types-box-four beta">

                                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                          {{ __('myhouse/help.desc') }}
                                                    </div>
                                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                                    <div class="with-critere">
                                                        {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
                                                    </div>

                                                    <div class="ca-page-item-third-type-box">

                                                        @include('myhouse.back.annonces.professionnels.critere.two.global')

                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tbt">

                                                            @include('myhouse.back.annonces.professionnels.critere.two.near')

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
                                        {{ __('myhouse/help.critere') }} 
                                    </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    @elseif(in_array($professionnel->typeBien->nom, $one))
      
        <form action="{{ route('professionnel.storecritere') }}" method="post" id="transform">

             @csrf
       


      
            <div class="description-one">
      
            <div class="professionnel">
      
                <div class="c-page">
                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'critere')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif

                @endisset
      
                    <div class="ca-page gomeze">


                        <div class="ca-page-item">
                            @include('myhouse.back.annonces.modules.professionnel.left')
                        </div>



                        <div class="ca-page-item">
                            <div class="ca-page-item-second">

                                @include('myhouse.front.includes.backmessage')


                                @include('myhouse.back.annonces.modules.professionnel.progress')


                                <div class="ca-page-item-third-connexion">


                                    <form action="{{ route('professionnel.critere') }}" method="get">
                                        <!-- Must change -->
                                        <input type="hidden" name="id" value="{{ request()->get('id') }}">
                                        <input type="hidden" name="professionnel_id" value="{{ $professionnel->id }}">

                                        <!-- Must change -->
                                            <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                                {{ __('myhouse/help.desc') }}
                                            </div>
                                            <div class="ca-page-item-third-connexion-box-hr"></div>


                                                        <div class="with-critere">
                                                            {{ __('myhouse/back/annonces/professionnel/critere.ae') }}
                                                        </div>

                                            @if ($professionnel->typeBien->nom === 'Entrepôt')
                                                <div class="ca-page-item-third-types-box">




                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g5.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.ccbg') }}</div>
                                                            </div>
                                                            <div class="pc-y">


                                                                            @if(isset($professionnel->zone_implante))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="zone_implante" id="zone_implante" value="1">
                                                                                                    <label for="zone_implante">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->zone_implante }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($professionnel->frigorifique) && $professionnel->frigorifique > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="frigorifique" id="frigorifique" value="1">
                                                                                                <label for="frigorifique">
                                                                                                </label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbh') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif



                                                                            @if(isset($professionnel->espace_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="espace_entrepot" id="espace_entrepot" value="1">
                                                                                                    <label for="espace_entrepot">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbj') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->espace_entrepot }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->espace_activite))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="espace_activite" id="espace_activite" value="1">
                                                                                                    <label for="espace_activite">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbk') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->espace_activite }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->espace_bureau))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="espace_bureau" id="espace_bureau" value="1">
                                                                                                    <label for="espace_bureau">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbl') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->espace_bureau }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                            
                                                                            @if(isset($professionnel->hauteur_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="hauteur_entrepot" id="hauteur_entrepot" value="1">
                                                                                                    <label for="hauteur_entrepot">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbz') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->hauteur_entrepot }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->amenagement_type))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="amenagement_type" id="amenagement_type" value="1">
                                                                                                    <label for="amenagement_type">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->amenagement_type }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->wc_sanitaire) && $professionnel->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="wc_sanitaire" id="wc_sanitaire" value="1">
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


                                                                            @if(isset($professionnel->place_vehicule))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                                    <label for="place_vehicule">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->place_vehicule }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($professionnel->site_clos) && $professionnel->site_clos > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="site_clos" id="site_clos" value="1">
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


                                                                            @if(isset($professionnel->pont_roulant) && $professionnel->pont_roulant > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="pont_roulant" id="pont_roulant" value="1">
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

                                                                            @if(isset($professionnel->monte_charge) && $professionnel->monte_charge > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="monte_charge" id="monte_charge" value="1">
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


                                                                            @if(isset($professionnel->alarme) && $professionnel->alarme > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="alarme" id="alarme" value="1">
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
        
                                    
                            
                                                                
    
        

                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="bg-white">
                                                                            <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>

                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                            

                                                                                @if(isset($professionnel->portail_un) && $professionnel->portail_un != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_un" id="portail_un" value="1">
                                                                                                        <label for="portail_un"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbv') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp; {{ $professionnel->portail_un }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>



                                                                            
                                                                            
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
    

                                                                                @if(isset($professionnel->portail_trois) && $professionnel->portail_trois != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_trois" id="portail_trois" value="1">
                                                                                                        <label for="portail_trois"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/professionnel/description.ccbw') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                &nbsp;&nbsp;&nbsp; {{ $professionnel->portail_trois }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>


                                                                            
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">

                

                                                                                @if(isset($professionnel->portail_cinq) && $professionnel->portail_cinq != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_cinq" id="portail_cinq" value="1">
                                                                                                        <label for="portail_cinq">
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                {{ __('myhouse/back/annonces/professionnel/description.ccbx') }} 
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp;  {{ $professionnel->portail_cinq }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif



                                                                            </div>


                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
    

                                                                                @if(isset($professionnel->portail_sept) && $professionnel->portail_sept != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_sept" id="portail_sept" value="1">
                                                                                                        <label for="portail_sept">
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/professionnel/description.ccbxa') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                &nbsp;&nbsp;&nbsp; {{ $professionnel->portail_sept }} m
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
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.ccby') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($professionnel->typeBien->nom === 'Garage')
                                                <div class="ca-page-item-third-types-box">
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
                                                            


                                                                                @if(isset($professionnel->hauteur_plafond) && $professionnel->hauteur_plafond != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="hauteur_plafond" id="hauteur_plafond" value="1">
                                                                                                        <label for="hauteur_plafond"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdad') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    {{ $professionnel->hauteur_plafond }} 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                </div>


                                                                <div class="pc_yt">

        

                                                                            @if(isset($professionnel->wc_sanitaire) && $professionnel->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="wc_sanitaire" id="wc_sanitaire" value="1">
                                                                                                <label for="wc_sanitaire"></label>
                                                                                                </div>
                                                                                            </div>
                                                                                                <div class="pc-label" style="padding-top: 13px">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdae') }}
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                </div>


                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="bg-white">
                                                                            <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.cdaf') }}</div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">

                                                                    

                                                                                @if(isset($professionnel->portail) && $professionnel->portail != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail" id="portail" value="1">
                                                                                                        <label for="portail"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbv') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp; {{ $professionnel->portail }} m
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
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdah') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($professionnel->typeBien->nom === 'Local industriel')
                                                <div class="ca-page-item-third-types-box">


                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g4.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdai') }}</div>
                                                            </div>
                                                        
                                                            <div class="pc-y">


                                                                            @if(isset($professionnel->zone_implante))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="zone_implante" id="zone_implante" value="1">
                                                                                                    <label for="zone_implante">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->zone_implante }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                



                                                                            @if(isset($professionnel->espace_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="espace_entrepot" id="espace_entrepot" value="1">
                                                                                                    <label for="espace_entrepot">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbj') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->espace_entrepot }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->espace_activite))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="espace_activite" id="espace_activite" value="1">
                                                                                                    <label for="espace_activite">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbk') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->espace_activite }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->espace_bureau))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="espace_bureau" id="espace_bureau" value="1">
                                                                                                    <label for="espace_bureau">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbl') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->espace_bureau }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                            
                                                                            @if(isset($professionnel->hauteur_entrepot))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="hauteur_entrepot" id="hauteur_entrepot" value="1">
                                                                                                    <label for="hauteur_entrepot">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbz') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->hauteur_entrepot }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->amenagement_type))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="amenagement_type" id="amenagement_type" value="1">
                                                                                                    <label for="amenagement_type">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->amenagement_type }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->wc_sanitaire) && $professionnel->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="wc_sanitaire" id="wc_sanitaire" value="1">
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


                                                                            @if(isset($professionnel->place_vehicule))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                                    <label for="place_vehicule">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->place_vehicule }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($professionnel->site_clos) && $professionnel->site_clos > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="site_clos" id="site_clos" value="1">
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


                                                                            @if(isset($professionnel->pont_roulant) && $professionnel->pont_roulant > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="pont_roulant" id="pont_roulant" value="1">
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

                                                                            @if(isset($professionnel->monte_charge) && $professionnel->monte_charge > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="monte_charge" id="monte_charge" value="1">
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


                                                                            @if(isset($professionnel->alarme) && $professionnel->alarme > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="alarme" id="alarme" value="1">
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
        
                                    
                            
                                                                
    
        

                                                                <div class="pc_yt">
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="bg-white">
                                                                            <div class="bg-text-gray">{{ __('myhouse/back/annonces/particulier/description.ccbu') }}</div>

                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
                                                            

                                                                                @if(isset($professionnel->portail_un) && $professionnel->portail_un != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_un" id="portail_un" value="1">
                                                                                                        <label for="portail_un"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbv') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp; {{ $professionnel->portail_un }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>



                                                                            
                                                                            
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
    

                                                                                @if(isset($professionnel->portail_trois) && $professionnel->portail_trois != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_trois" id="portail_trois" value="1">
                                                                                                        <label for="portail_trois"></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbw') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                &nbsp;&nbsp;&nbsp; {{ $professionnel->portail_trois }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif


                                                                            </div>


                                                                            
                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">

                

                                                                                @if(isset($professionnel->portail_cinq) && $professionnel->portail_cinq != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_cinq" id="portail_cinq" value="1">
                                                                                                        <label for="portail_cinq">
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.ccbx') }} 
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                    &nbsp;&nbsp;&nbsp;  {{ $professionnel->portail_cinq }} m
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif



                                                                            </div>


                                                                            <div class="ca-page-item-second-body-card-item-body-item-boxex">
    

                                                                                @if(isset($professionnel->portail_sept) && $professionnel->portail_sept != '00m')
                                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                            <div class="box-displays">
                                                                                                <div>
                                                                                                    <div class="pc-checkbox">
                                                                                                        <input type="checkbox" name="portail_sept" id="portail_sept" value="1">
                                                                                                        <label for="portail_sept">
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="pc-label" style="padding-top: 10px;">
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.ccbxa') }}
                                                                                                </div>
                                                                                                <div class="box-text" style="padding-top: 10px;">
                                                                                                &nbsp;&nbsp;&nbsp; {{ $professionnel->portail_sept }} m
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
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdba') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($professionnel->typeBien->nom === 'Local commercial')
                                                <div class="ca-page-item-third-types-box">


                                                    <div class="ca-page-item-third-type-box">
                                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                                            <div class="ca-page-item-second-body-card-item-heeads">
                                                                <div class="ca-page-item-second-body-card-item-head-img">
                                                                    <img src="http://31.220.62.192/images/residential/single/g6.svg" alt="">
                                                                </div>
                                                                <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.cdbb') }}</div>
                                                            </div>
                                                            <div class="pc-y">
                                                                


                                



                                                                            @if(isset($professionnel->fond_commerce))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="fond_commerce" id="fond_commerce" value="1">
                                                                                                    <label for="fond_commerce">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->fond_commerce }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->mezzanine) && $professionnel->mezzanine > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="mezzanine" id="mezzanine" value="1">
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


                                                                            @if(isset($professionnel->sous_pente))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="sous_pente" id="sous_pente" value="1">
                                                                                                    <label for="sous_pente">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbe') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->sous_pente }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif



                                                                            @if(isset($professionnel->terrasses))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="terrasses" id="terrasses" value="1">
                                                                                                    <label for="terrasses">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbf') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->terrasses }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->nombre_piece))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="nombre_piece" id="nombre_piece" value="1">
                                                                                                    <label for="nombre_piece">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->nombre_piece }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif




                                                                            @if(isset($professionnel->longueur_facade))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="longueur_facade" id="longueur_facade" value="1">
                                                                                                    <label for="longueur_facade">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbh') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->longueur_facade }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->hauteur_plafond))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="hauteur_plafond" id="hauteur_plafond" value="1">
                                                                                                    <label for="hauteur_plafond">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbi') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->hauteur_plafond }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->angle_de_rue) && $professionnel->angle_de_rue > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="angle_de_rue" id="angle_de_rue" value="1">
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


                                                                            @if(isset($professionnel->wc_sanitaire) && $professionnel->wc_sanitaire > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="wc_sanitaire" id="wc_sanitaire" value="1">
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



                                                                            @if(isset($professionnel->place_vehicule))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                                    <label for="place_vehicule">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->place_vehicule }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif


                                                                            @if(isset($professionnel->alarme) && $professionnel->alarme > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="alarme" id="alarme" value="1">
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
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/description.cdbp') }}</button>
                                                    </div>
                                                </div>
                                            @endif

                                            @if ($professionnel->typeBien->nom === 'Immeuble')
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


                                        

                                                                            @if(isset($professionnel->surface_batie))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="surface_batie" id="surface_batie" value="1">
                                                                                                    <label for="surface_batie">
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">

                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.cdbs') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->surface_batie }} m²
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if(isset($professionnel->amenagement_type))
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                    <input type="checkbox" name="amenagement_type" id="amenagement_type" value="1">
                                                                                                    <label for="amenagement_type"></label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="pc-label">
                                                                                                {{ $professionnel->amenagement_type }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif




                                                                            @if(isset($professionnel->garage_vehicule) && $professionnel->garage_vehicule > 0)
                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="box-display">
                                                                                            <div>
                                                                                                <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="garage_vehicule" id="garage_vehicule" value="1">
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


@stop

@section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
@stop
