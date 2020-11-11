@extends('myhouse.front.template')

@section('title')
    {{ $professionnel->typeBien->nom}}
@stop

@section('meta')
    <meta name = "professionnel" content="{{ $professionnel->id }}">
    <meta name = "page" content ='{{  str_replace("http://myhouse.com", "", request()->url())  }}'>
    <meta name = "message" content = "{{ __('myhouse/recherche/message/message.success') }}">
    <meta name = "update" content = "{{ __('myhouse/recherche/message/message.update') }}">
    <meta name = "delete" content = "{{ __('myhouse/recherche/message/message.delete') }}">
    <meta name = "info" content = "{{ __('myhouse/recherche/message/message.info') }}">


    @auth
        <meta name = "user" content="{{ auth()->user()->id }}">
    @endauth

@stop

@section('content')
    <div class="the-professionnel">
        <div class="the-page pb-5">
            <div class="the-page-mt">
                <div class="the-page-close-button">
                    <img src="{{ asset('images/residential/xs.svg') }}" alt="">
                </div>
                <div class="the-page-head">

           <div style="margin-top: 79px;">
                    @include('myhouse.front.includes.message')
                </div>

                    <div>
                        <div class="the-page-head-title">
                            {{ $professionnel->typeBien->nom}} {{ $professionnel->surface_habitable}}m²
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
                               {{ $professionnel->user->entreprises->first()->nom }}
                            </div>
                            <div class="the-page-enterprise-logo-box-content-button">
                                <a href="{{ route('professionnel.entreprise',['id' => $professionnel->user->entreprises->first()->id ]) }}" style="text-decoration: none; color: inherit">
                                    <div class="the-page-enterprise-logo-box-content-button-button">{{ __('myhouse/recherche/professionnel/resultat.aa') }}</div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

               <!--  <div class="the-page-enterprise-promotion">
                    <div class="the-page-enterprise-promotion-img">
                        <img src="{{ asset('images/residential/single/menu/pro.svg') }}" alt="">
                    </div>
                    <div class="the-page-enterprise-promotion-text">
                        <div class="the-page-enterprise-promotion-text-first">
                            {{ __('myhouse/recherche/professionnel/resultat.ab') }} <br>
                            {{ __('myhouse/recherche/professionnel/resultat.ac') }}
                        </div>
                        <div class="the-page-enterprise-promotion-text-second">{{ __('myhouse/recherche/professionnel/resultat.ad') }}</div>
                        <div class="the-page-enterprise-promotion-text-third">{{ __('myhouse/recherche/professionnel/resultat.ae') }}</div>
                    </div>
                </div> -->

                <div class="particulier">
                    <div class="the-page-enterprise-logo-box-content-achat-type">
                        <div class="the-page-enterprise-logo-box-content-achat-type-box">



                            @if($professionnel->venteActif)
                                <div class="particulier-type">
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                        {{ __('myhouse/recherche/particulier/resultat.am') }}
                                    </div>
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                        @if($professionnel->venteActif)
                                            {{ $professionnel->prix_vente }} <span>MAD</span>
                                        @endif
                                    </div>
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-surface-box">
                                        {{ __('myhouse/recherche/particulier/resultat.ab') }} m2
                                    </div>
                                </div>
                            @endif
                            @if($professionnel->locationActif)
                                <div class="particulier-type">
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                        {{ __('myhouse/recherche/particulier/resultat.ac') }}
                                    </div>

                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                        @if($professionnel->prix_jour)
                                            {{ $professionnel->prix_jour }}<span> MAD</span><span class="jour">/
                                        {{ __('myhouse/recherche/particulier/resultat.ad') }}</span>
                                        @endif
                                    </div>
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                        @if($professionnel->prix_mois)
                                            {{ $professionnel->prix_mois }}<span> MAD</span><span class="jour">/
                                        {{ __('myhouse/recherche/particulier/resultat.ae') }}</span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @if($professionnel->echangeActif)
                                <div class="particulier-type">
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                        {{ __('myhouse/recherche/particulier/resultat.af') }}
                                    </div>
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                        {{ __('myhouse/recherche/particulier/resultat.ag') }}
                                    </div>
                                    <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                        {{ __('myhouse/recherche/particulier/resultat.ah') }}
                                    </div>
                                </div>
                            @endif

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
                                <div class="the-page-grid-container-number">6/{{ count(json_decode($professionnel->images)) }}</div>
                                <div id="sync2" class="owl-carousel">
                                    @foreach(json_decode($professionnel->images) as $image)
                                        <div class="item">
                                            <img src="{{ asset('development/files/professionnel/124/') . '/' . $image }}" alt="" class="img-fluid">
                                        </div>
                                    @endforeach

                                </div>
                                <div id="sync1" class="owl-carousel">
                                    @foreach(json_decode($professionnel->images) as $image)
                        
                                        <div class="item">
                        

                                        <a href="{{ route('professionnel.annonce.interesse', $professionnel->id) }}">
                                            <div class="sync-text rounded-pill">
                                                <img src="{{ asset('images/residential/single/heart.svg') }}" alt="">
                                                {{ __('myhouse/recherche/particulier/resultat.ai') }}
                                            </div>
                                        </a>

                                            <img src="{{ asset('development/files/professionnel/878/') . '/' . $image }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>




                            <div class="the-page-description">
                                <div class="the-page-description-head">
                                    <!-- <div class="the-page-description-head-title">
                                        Une résidence de prestige
                                        <div class="the-page-description-head-title-hr"></div>
                                    </div> -->
                                    <div class="the-page-description-head-publish">
                                        <button class="btn btn-light btn-publish">{{ __('myhouse/recherche/professionnel/resultat.ak') }}
                                            {{ str_replace(' ', '/', \Carbon\Carbon::parse($professionnel->created_at)->format('d m y')) }}
                                        </button>
                                    </div>
                                </div>
                                <div class="the-page-description-body">
                                    {{ $professionnel->description }}
                                </div>
                            </div>
                            @include('myhouse.front.pages.recherche.extra.modules.description', ['professionnel' => $professionnel])
                            @include('myhouse.front.pages.recherche.extra.modules.discover',  ['professionnel' => $professionnel])
                        </div>
                        <div class="the-page-grid-container-item">
                            @include('myhouse.front.pages.recherche.extra.modules.extraleft', ['professionnel' => $professionnel])
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>











<!-- Modal -->





<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog gomez modal-sm">

    <!-- Modal content-->

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ __('myhouse/recherche/message/message.hour') }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
            <div class="form-group">
                <input id="input-time" type="time" step='1' min="00:00:00" max="20:00:00" name="hour" class="form-control">
            </div>
      </div>    
      <div class="modal-footer">
        <button type="button" id = "btn-time" class="btn btn-success" data-dismiss="modal">{{ __('myhouse/recherche/message/message.valide') }}</button>
      </div>
    </div>

  </div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

<!-- Modal -->

















@stop


@section('scripts')
    <script src = "{{ asset('development/js/calendar/proresult.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/ui.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/notify.js') }}"></script>
@stop 