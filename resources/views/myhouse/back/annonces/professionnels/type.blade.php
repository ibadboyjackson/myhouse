@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/type.aa') }}
@stop

@section('content')

<form action="{{ route('professionnel.description') }}" method="get" id= "transform">
 
  <input type="hidden" name="id" value="{{ $id }}">
    <div class="c-page">



            @if (auth()->user()->professionnel->last()->page === 'type')
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
                            <div class="ca-page-item-third-connexion-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    {{ __('myhouse/back/annonces/professionnel/type.ab') }}
                                </div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>

                            </div>
                        </div>
                        <div class="ca-page-item-second-subscriptionss">

                            <div class="ca-page-item-second-body">
                                <div class="ca-page-item-third-type-box">
                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                        <div class="pt_ytts text-center text-uppercase">
                                            <img src="http://myhouse.com/images/residential/single/b1.svg" alt="">
                                            {{ __('myhouse/back/annonces/professionnel/type.ac') }}
                                        </div>

                                            <div class="pc-y">
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort9" name="type" value="appartement" {{ $professionnel->type_bien_id == 1 ? 'checked' : '' }}>
                                                        <label for="sort9">{{ __('myhouse/back/annonces/particulier/type.ad') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort10" name="type" value="villa" {{ $professionnel->type_bien_id == 2 ? 'checked' : '' }}>
                                                        <label for="sort10">{{ __('myhouse/back/annonces/particulier/type.ae') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort11" name="type" value="maison" {{ $professionnel->type_bien_id == 3 ? 'checked' : '' }}>
                                                        <label for="sort11">{{ __('myhouse/back/annonces/particulier/type.af') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort12" name="type" value="chalet" {{ $professionnel->type_bien_id == 4 ? 'checked' : '' }}>
                                                        <label for="sort12">{{ __('myhouse/back/annonces/particulier/type.ag') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort13" name="type" value="riad" {{ $professionnel->type_bien_id == 5 ? 'checked' : '' }}>
                                                        <label for="sort13">{{ __('myhouse/back/annonces/particulier/type.ah') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort14" name="type" value="ferme" {{ $professionnel->type_bien_id == 6 ? 'checked' : '' }}>
                                                        <label for="sort14">{{ __('myhouse/back/annonces/particulier/type.ai') }}</label>
                                                    </div>
                                                </div>


                                                @if (request()->get('locationActif') === 'on')
                                                    <div class="pc_yt">
                                                        <div class="pc_ytt">
                                                            <input type="radio" id="sort30" name="type" value="cite" {{ $professionnel->type_bien_id == 8 ? 'checked' : '' }}>
                                                            <label for="sort30">{{ __('myhouse/back/annonces/particulier/type.al') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="pc_yt">
                                                        <div class="pc_ytt">
                                                            <input type="radio" id="sort147" name="type" value="chambre" {{ $professionnel->type_bien_id == 7 ? 'checked' : '' }}>
                                                            <label for="sort147">{{ __('myhouse/back/annonces/particulier/type.aj') }}</label>
                                                        </div>
                                                    </div>
                                                @endif


                                            </div>
                                    
                                    </div>
                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                        <div class="pt_ytts text-center text-uppercase">
                                            <img src="http://myhouse.com/images/residential/single/b2.svg" alt="">
                                            {{ __('myhouse/back/annonces/professionnel/type.aj') }}
                                        </div>
                                        
                                            <div class="pc-y">
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort15" name="type" value="bureau" {{ $professionnel->type_bien_id == 9 ? 'checked' : '' }}>
                                                        <label for="sort15" style="margin-top: 15px;">
                                                            {{ __('myhouse/back/annonces/particulier/type.am') }}
                                                            {{ __('myhouse/back/annonces/particulier/type.aab') }}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort189" name="type" value="local_commercial" {{ $professionnel->type_bien_id == 14 ? 'checked' : '' }}>
                                                        <label for="sort189">{{ __('myhouse/back/annonces/particulier/type.ar') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort16" name="type" value="plateau" {{ $professionnel->type_bien_id == 10 ? 'checked' : '' }}>
                                                        <label for="sort16">{{ __('myhouse/back/annonces/particulier/type.an') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort17" name="type" value="entrepot" {{ $professionnel->type_bien_id == 11 ? 'checked' : '' }}>
                                                        <label for="sort17">{{ __('myhouse/back/annonces/particulier/type.ao') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort18" name="type" value="garage" {{ $professionnel->type_bien_id == 12 ? 'checked' : '' }}>
                                                        <label for="sort18">{{ __('myhouse/back/annonces/particulier/type.ap') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort19" name="type" value="local_industriel" {{ $professionnel->type_bien_id == 13 ? 'checked' : '' }}>
                                                        <label for="sort19">{{ __('myhouse/back/annonces/particulier/type.aq') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort20" name="type" value="propriete_agricole" {{ $professionnel->type_bien_id == 15 ? 'checked' : '' }}>
                                                        <label for="sort20">{{ __('myhouse/back/annonces/particulier/type.as') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort21" name="type" value="immeuble" {{ $professionnel->type_bien_id == 16 ? 'checked' : '' }}>
                                                        <label for="sort21">{{ __('myhouse/back/annonces/particulier/type.at') }}</label>
                                                    </div>
                                                </div>


                                            </div>
                                    
                                    </div>
                                    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                        <div class="pt_ytts text-center text-uppercase">
                                            <img src="http://myhouse.com/images/residential/single/b3.svg" alt="">
                                            {{ __('myhouse/back/annonces/professionnel/type.as') }}
                                        </div>
                                      
                                            <div class="pc-y">

                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort39" name="type" value="residentiel" {{ $professionnel->type_bien_id == 17 ? 'checked' : '' }}>
                                                        <label for="sort39">{{ __('myhouse/back/annonces/particulier/type.av') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort22" name="type" value="commercial" {{ $professionnel->type_bien_id == 18 ? 'checked' : '' }}>
                                                        <label for="sort22">{{ __('myhouse/back/annonces/particulier/type.aw') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort23" name="type" value="agricole" {{ $professionnel->type_bien_id == 19 ? 'checked' : '' }}>
                                                        <label for="sort23">{{ __('myhouse/back/annonces/particulier/type.ax') }}</label>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <input type="radio" id="sort24" name="type" value="industriel" {{ $professionnel->type_bien_id == 20 ? 'checked' : '' }}>
                                                        <label for="sort24">{{ __('myhouse/back/annonces/particulier/type.ay') }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                   
                                    </div>
                                </div>

                            </div>


                            <div class="ca-page-item-second-footer">
                               <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left"></i>
                               </a>
                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/professionnel/type.ax') }}</button>
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
                        <img src="{{ asset('images/residential/single/type.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/professionnel/type.ay') }}
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
@stop

 @section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>
@stop
