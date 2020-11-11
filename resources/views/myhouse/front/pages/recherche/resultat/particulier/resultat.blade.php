@extends('myhouse.front.template')

@section('title')

    {{ $particulier->typeBien->nom  }}

@stop


@section('style')


    <style>
        ::-webkit-datetime-edit-second-field {
            background: $color-white;
            color: transparent;
            margin-left: -3px;
            position: absolute;
            width: 1px;
        }
    </style>


@endsection


@section('meta')
    <meta name = "particulier" content="{{ $particulier->id }}">
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

<div style="position: relative;">

    @include('myhouse.front.includes.success')



    <div class="the-page pb-5">
        <div class="the-page-mt">
            <div class="the-page-close-button">
                <img src="{{ asset('images/residential/xx.svg') }}" alt="">
            </div>



            <div class="the-page-head">

    
                <div>
                    <div class="the-page-head-title">
                        {{ $particulier->typeBien->nom }}
                                                                @if ($particulier->surface_habitable)
                                                                    {{ $particulier->surface_habitable }} m²
                                                                @endif

                                              
                                                                @if ($particulier->surface_totale)
                                                                    {{ $particulier->surface_totale }} m² 
                                                                @endif

                                                                @if ($particulier->surface_batiment)
                                                                    {{ $particulier->surface_batiment }} m²
                                                                @endif

                                                                @if ($particulier->surface_garage)
                                                                    {{ $particulier->surface_garage }} m²
                                                                @endif


                                                                @if ($particulier->surface_disponible_un)
                                                                    {{ $particulier->surface_disponible_un }} m²
                                                                @endif

                                                                @if ($particulier->surface_disponible_deux)
                                                                    -   {{ $particulier->surface_disponible_deux }} m²
                                                                @endif
                    </div>


                    <!--<div class="the-page-head-hr"></div> -->
                </div>
            </div>
            
        @include('myhouse.front.pages.recherche.extra.modules.share')

        <!-- Logp
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
                            <div class="the-page-enterprise-logo-box-content-button-button">En savoir plus</div>
                        </div>

                    </div>

                </div>

            </div>
        -->
            <div class="the-page-enterprise-ads">
                <img src=" {{ asset('images/residential/single/menu/pub.png') }} " alt="">
            </div>

            <div class="particulier">
                <div class="the-page-enterprise-logo-box-content-achat-type">
                    <div class="the-page-enterprise-logo-box-content-achat-type-box">



                        @if($particulier->venteActif)
                            <div class="particulier-type">
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                    {{ ucfirst(__('myhouse/recherche/particulier/resultat.aa')) }}
                                </div>
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                    @if($particulier->venteActif)
                                        {{ $particulier->prix_vente }} <span>MAD</span>
                                    @endif
                                </div>
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-surface-box">
                                        <span>{{ __('myhouse/recherche/particulier/resultat.ab') }} au m²</span>
                                        <br> 

                                        @if ($particulier->prix_m)
                                            <span style="font-size: 19px; font-weight: 400;">{{ $particulier->prix_m }}</span><span style="font-size: 19px; font-weight: 400; font-size: 14px;"> MAD</span>
                                        @else
                                            N.C
                                        @endif
                                        
                                        
                                </div>
                            </div>
                        @endif
                        @if($particulier->locationActif)
                            <div class="particulier-type">
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                    {{ __('myhouse/recherche/particulier/resultat.ac') }}
                                </div>

                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                    @if($particulier->prix_jour)
                                        {{ $particulier->prix_jour }}<span> MAD /</span><span class="jour">
                                        {{ __('myhouse/recherche/particulier/resultat.ad') }}</span>
                                    @endif
                                </div>
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price">
                                    @if($particulier->prix_mois)
                                        {{ $particulier->prix_mois }}<span> MAD /</span><span class="jour">
                                        {{ __('myhouse/recherche/particulier/resultat.ae') }}</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @if($particulier->echangeActif)
                            <div class="particulier-type">
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-type">
                                    {{ __('myhouse/recherche/particulier/resultat.af') }}
                                </div>

                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price" style="font-size: 19px;">
                                    {{ __('myhouse/recherche/particulier/resultat.ah') }}
                                </div>
                                <div class="the-page-enterprise-logo-box-content-achat-type-box-text-price" style="font-size: 19px;">
                                    {{ __('myhouse/recherche/particulier/resultat.ag') }} 
                                    
                                    <div style="font-size: 14px; color: rgba(87, 87, 87, 0.71)">
                                        {{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_un)->format('d m y')) }}-{{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->echange_periode_deux)->format('d m y')) }}
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

            <!-- With grid -->

            <div class="the-page-grid">
                <div class="the-page-grid-container">
                    <div class="the-page-grid-container-item">
                        @include('myhouse.front.pages.recherche.include.calendar')
                    </div>
                    <div class="the-page-grid-container-item">
                        <div class="medias">
                            <div class="the-page-grid-container-number">6/{{ count(json_decode($particulier->images)) }}</div>
                            <div id="sync2" class="owl-carousel">
                                @foreach(json_decode($particulier->images) as $image)
                                    <div class="item">
                                        <img src="{{ asset('development/files/particulier/124/') . '/' . $image }}" alt="" class="img-fluid">
                                    </div>
                                @endforeach

                            </div>
                            <div id="sync1" class="owl-carousel">
                                @foreach(json_decode($particulier->images) as $image)
                                    <div class="item">



                                @auth
                                        @if (auth()->user()->favorite_particulier()->where('particulier_id', $particulier->id)->count() == 0)

                                            <a href="{{ route('particulier.annonce.interesse', $particulier->id) }}">
                                                <div class="sync-text rounded-pill">
                                                    <img src="{{ asset('images/residential/single/heart.svg') }}" alt="">
                                                    {{ __('myhouse/recherche/particulier/resultat.ai') }}
                                                </div>
                                            </a>

                                        @else

                                            <a href="{{ route("particulier.annonce.uninteresse", $particulier->id) }}">
                                                <div class="sync-text rounded-pill">
                                                   <i class="fa fa-heart" aria-hidden="true" style="width: 15px;"></i>
                                                    {{ __('myhouse/recherche/particulier/resultat.ai') }}
                                                </div>
                                            </a>

                                        @endif
                                @else
                                     <a href="{{ route('particulier.annonce.interesse', $particulier->id) }}">
                                                <div class="sync-text rounded-pill">
                                                    <img src="{{ asset('images/residential/single/heart.svg') }}" alt="">
                                                    {{ __('myhouse/recherche/particulier/resultat.ai') }}
                                                </div>
                                            </a>


                                @endauth





                                        <img src="{{ asset('development/files/particulier/878/') . '/' . $image }}" alt="">
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
                                    <button class="btn btn-light btn-publish">{{ __('myhouse/recherche/particulier/resultat.aj') }} {{ str_replace(' ', '/', \Carbon\Carbon::parse($particulier->created_at)->format('d m y')) }}</button>
                                </div>
                            </div>
                            <div class="the-page-description-body">
                               {{ $particulier->description }}
                            </div>
                        </div>

                            
                        </div>
                        
                        
                        <div class="the-page-grid-container-item">
                            @include('myhouse.front.pages.recherche.extra.modules.extraleft', ['particulier' => $particulier])
                        </div>
                </div>
            </div>


            
                 @include('myhouse.front.pages.recherche.extra.modules.description', ['particulier' => $particulier])


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
    <script src = "{{ asset('development/js/calendar/paresult.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/ui.js') }}"></script>
    <script src = "{{ asset('development/js/calendar/notify.js') }}"></script>
    <script src = "{{ asset('js/map.js') }}"
@stop