                             <div class="page-list-panel js-marker pop-{{ $particulier->id }}" id ="item"
                             data-lat = "{{ $particulier->latitude }}" data-long="{{ $particulier->longitude }}"
                             data-id = "{{ $particulier->id }}"


                            @if (request()->get('transaction') === 'achat')
                                    data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_vente . 'MAD'  }} ">

                            @elseif(request()->get('transaction') === 'location')

                                @if($particulier->prix_mois != null && $particulier->prix_jour == null)

                                    data-title = "{{ $particulier->typeBien->nom .'<span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_mois . 'MAD/MOIS' }} ">

                                @elseif($particulier->prix_jour != null && $particulier->prix_mois == null)

                                    data-title = "{{ $particulier->typeBien->nom .'<span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_jour  . 'MAD/JOUR' }} ">


                                @elseif($particulier->prix_jour != null && $particulier->prix_mois !== null)

                                    data-title = "{{ $particulier->typeBien->nom .'<span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_mois  . 'MAD/MOIS' . '<br>' . $particulier->prix_jour  . 'MAD/JOUR'}} ">

                                @endif


                            @elseif(request()->get('transaction') === 'echange')


                                @if ($particulier->echange_definitif != 0 && $particulier->echange_provisoir == 0)

                                    data-title = "{{ $particulier->typeBien->nom . '<br>' . 'Echange définitif'}} ">

                                @elseif($particulier->echange_provisoir != 0 && $particulier->echange_definitif == 0)

                                    data-title = "{{ $particulier->typeBien->nom . '<br>' . 'Echange provisoire'}} ">

                                @else

                                    data-title = "{{ $particulier->typeBien->nom . '<br>' . 'Echange provisoire' . '<br>' . 'Echange définitif'}} ">

                                @endif


                            @else

                               @if ($particulier->venteActif != null && $particulier->locationActif == null && $particulier->echangeActif == null)

                                    @if ($particulier->prix_vente != null)

                                        data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_vente . 'MAD'  }} ">

                                    @endif

                               @elseif($particulier->venteActif == null && $particulier->locationActif != null && $particulier->echangeActif == null)


                                    @if($particulier->prix_mois != null && $particulier->prix_jour == null)

                                        data-title = "{{ $particulier->typeBien->nom .'<span style="font-weight: 100">' .substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_mois . 'MAD/MOIS' }} ">

                                    @elseif($particulier->prix_jour != null && $particulier->prix_mois == null)

                                        data-title = "{{ $particulier->typeBien->nom .'<span style="font-weight: 100">' .substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_jour  . 'MAD/JOUR' }} ">


                                    @elseif($particulier->prix_jour == null && $particulier->prix_mois == null)
                                    @endif


                               @elseif ($particulier->venteActif == null && $particulier->locationActif == null && $particulier->echangeActif != null)

                                    @if ($particulier->echange_definitif != 0 && $particulier->echange_provisoir == 0)

                                        data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . 'Echange définitif'}} ">

                                    @elseif($particulier->echange_provisoir != 0 && $particulier->echange_definitif == 0)

                                        data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . 'Echange provisoire'}} ">

                                    @elseif($particulier->echange_provisoir != 0 && $particulier->echange_definitif != 0)

                                        data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . 'Echange provisoire' . '<br>' . 'Echange définitif'}} ">

                                    @endif


                               @elseif ($particulier->venteActif != null && $particulier->locationActif != null && $particulier->echangeActif != null)
                                    @if ($particulier->prix_vente != null)

                                        data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_vente . 'MAD'  }} ">

                                    @endif

                                @else


                                    @if ($particulier->prix_vente != null)

                                        data-title = "{{ $particulier->typeBien->nom .' <span style="font-weight: 100">' . substr($particulier->nombre_chambre, 0, 4) . '</span>' . '<br>' . $particulier->prix_vente . 'MAD'  }} ">

                                    @endif

                               @endif



                            @endif


                                    <div class="page-list-panel-item" style="height: 100%">
                                        <a href="{{ route('resultat.particulier', [strtolower(str_replace('/', '-', $particulier->typeBien->nom)) .'-' . $particulier->id]) }}" target="_blank">

                                            <div class="carousel slide" data-ride="carousel" id="{{ $particulier->last_id }}">
                                                <ol class="carousel-indicators">
                                                    @foreach(json_decode($particulier->images) as $image)
                                                        <li class="{{ $loop->first ? 'active' : '' }}" data-target="#{{ $particulier->last_id }}" data-slide-to="{{ $loop->index }}"></li>
                                                    @endforeach
                                                </ol>
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($particulier->images) as $image)
                                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                            <img
                                                                class="img-fluid"
                                                                src="{{ asset('development/files/particulier/429/') . '/' . $image }}"
                                                                alt="Third Slide"
                                                            />
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#{{ $particulier->last_id }}" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#{{ $particulier->last_id }}" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                        </a>
                                    </div>

                                    <div class="page-list-panel-item-two-pro" style="height: 100%">

                                        <a href="{{ route('resultat.particulier', [strtolower(str_replace('/', '-', $particulier->typeBien->nom)) .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">



                                                        <div class="page-list-panel-item-two-pro-head">
                                                            <div class="page-list-panel-item-two-head-left">
                                                                <div class="page-list-panel-item-two-head-left-box">
                                                                    <div class="page-list-panel-item-two-head-left-box-left">
                                                                        <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid" width="10" height="10">
                                                                    </div>
                                                                    <div class="page-list-panel-item-two-head-left-box-right">
                                                                        {{ substr($particulier->adresse, 0, 38) }} <br>
                                                                    <strong>{{ ucfirst($particulier->quartier) }}</strong> <br>
                                                                    <strong>{{ ucfirst($particulier->ville) }}</strong>

                                                                    <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="page-list-panel-item-two-body-box-item">
                                                                <div class="page-list-panel-item-two-body-box-item-title" style="font-weight: 600; color: #575757">

                                                                    @isset($particulier->typeBien->nom)
                                                                        {{ ucfirst($particulier->typeBien->nom)  }}
                                                                    @endisset


                                                                    <div class="page-list-panel-item-two-body-box-item-title-sp">
                                                                        {{ $particulier->nombre_chambre }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="page-list-panel-item-two-pro-body">

                                                            <div class="page-list-panel-item-two-pro-body-box">

                                                                <div class="page-list-panel-item-two-pro-body-box-st">

                                                                    <div class="page-list-panel-item-two-pro-body-content">

                                                                             @if ($particulier->surface_habitable)

                                                                                @if (isset($particulier->typeBien->id) && $particulier->typeBien->nom === 'Plateau')
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.az') }} {{ $particulier->surface_habitable }} m²</span>
                                                                                @else
                                                                                    <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ay') }} {{ $particulier->surface_habitable }} m²</span>
                                                                                @endif

                                                                            @elseif($particulier->surface_garage)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.ax') }} {{ $particulier->surface_garage }} m²</span>
                                                                            @elseif ($particulier->surface_total)
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aw') }} {{ $particulier->surface_total }} m²</span>
                                                                            @elseif (isset($particulier->typeBien->id) && $particulier->typeBien->nom === 'Cité universitaire')
                                                                                <span style="font-size: 15px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.at') }}</span>
                                                                            @else
                                                                                <div style="color: transparent;">5</div>
                                                                            @endif



                                                                    </div>

                                                                    <div class="page-list-panel-item-two-pro-body-content-text d-flex justify-content-between">

                                                                        @if ($particulier->superficie_terrain)
                                                                            <div style="font-size: 14px; color: #868686;">{{ __('myhouse/back/menu/particulier/annonce.aaa') }} {{ $particulier->superficie_terrain }} m²</div>
                                                                        @elseif(isset($particulier->typeBien->id) && $particulier->typeBien->nom === 'Cité universitaire')
                                                                            <div style="font-size: 14px; color: #868686;">
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.au') }}  {{ $particulier->surface_disponible_un }} m²</span>
                                                                                <span style="font-size: 14px;">{{ __('myhouse/back/menu/particulier/annonce.av') }} {{ $particulier->surface_disponible_deux }} m²</span>
                                                                            </div>
                                                                        @else
                                                                            <div></div>
                                                                        @endif



                                                                        <div class="particulier-vente" style="color: #868686; font-weight: unset;">

                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0 && $particulier->locationActif == 0)

                                                                                @if (request()->get('transaction') === 'vente')
                                                                                    <strong>Achat </strong>
                                                                                @elseif (request()->get('transaction') === 'echange')
                                                                                    @if ($particulier->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($particulier->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif
                                                                                @else
                                                                                    <strong>Achat </strong>
                                                                                @endif

                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0 && $particulier->echangeActif == 0)


                                                                                @if (request()->get('transaction') === 'achat')
                                                                                    <strong>Achat </strong>
                                                                                @elseif(request()->get('transaction') == 'location')
                                                                                    <strong>Location </strong>
                                                                                @else
                                                                                    <strong>Achat </strong>
                                                                                @endif

                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0 && $particulier->venteActif == 0)


                                                                                @if (request()->get('transaction') === 'location')
                                                                                     <strong>Location </strong>
                                                                                @elseif(request()->get('transaction') === 'echange')

                                                                                    @if ($particulier->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($particulier->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @else
                                                                                     <strong>Location </strong>
                                                                                @endif



                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)

                                                                                @if (request()->get('transaction') === 'achat')
                                                                                    <strong>Achat </strong>
                                                                                @elseif(request()->get('transaction') === 'location')
                                                                                     <strong>Location </strong>
                                                                                @elseif(request()->get('transaction') === 'echange')
                                                                                     <strong>Echange </strong>
                                                                                @else
                                                                                    <strong>Achat </strong>
                                                                                @endif




                                                                            @else

                                                                                @if ($particulier->venteActif != 0)
                                                                                    <strong>Achat </strong>

                                                                                @endif

                                                                                @if ($particulier->locationActif != 0)
                                                                                    <strong>Location </strong>

                                                                                @endif

                                                                                @if ($particulier->echangeActif != 0)

                                                                                    @if ($particulier->echange_provisoir == 1)
                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                    @endif

                                                                                    @if ($particulier->echange_definitif == 1)

                                                                                        <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                    @endif

                                                                                @endif

                                                                            @endif



                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="page-list-panel-item-two-pro-text" style="color: rgba(72, 172, 143, 0.62);">



                                                                            @if ($particulier->venteActif !=0 && $particulier->echangeActif !=0)

                                                                                 <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span> </strong>

                                                                            @elseif($particulier->venteActif !=0 && $particulier->locationActif !=0)


                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)

                                                                                    @else


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif

                                                                                        @if ($particulier->prix_jour != null)

                                                                                            <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @endif

                                                                            @elseif($particulier->locationActif !=0 && $particulier->echangeActif !=0)

                                                                                @if ($particulier->echange_provisoir == 1)
                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.aq') }},</span>
                                                                                @endif

                                                                                @if ($particulier->echange_definitif == 1)

                                                                                    <span style="font-size: 13px;">{{ __('myhouse/back/menu/particulier/annonce.ar') }}</span>

                                                                                @endif

                                                                            @elseif($particulier->echangeActif !=0 && $particulier->locationActif !=0 && $particulier->venteActif !=0)
                                                                                strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                            @else


                                                                                @if($particulier->venteActif)
                                                                                    <strong>{{ $particulier->prix_vente }} <span style="font-size: 13px;">MAD</span> </strong>
                                                                                @endif

                                                                                @if($particulier->locationActif)

                                                                                    @if ($particulier->prix_mois != null && $particulier->prix_jour != null)

                                                                                    @else


                                                                                        @if ($particulier->prix_mois != null)

                                                                                            <strong>{{ $particulier->prix_mois }} <span style="font-size: 13px;">MAD/mois</span> </strong>

                                                                                        @endif

                                                                                        @if ($particulier->prix_jour != null)

                                                                                            <strong>{{ $particulier->prix_jour }} <span style="font-size: 13px;">MAD/jour</span> </strong>

                                                                                        @endif


                                                                                    @endif


                                                                                @endif


                                                                                @if ($particulier->echangeActif)
                                                                                    <strong>{{ ucfirst(__('myhouse/back/menu/particulier/annonce.as')) }}</strong>
                                                                                @endif


                                                                            @endif


                                                                </div>

                                                            </div>


                                                            <!-- <div class="page-list-item-two-pro-body-content-text">
                                                                {{ substr($particulier->description, 0, 92) }} (...)

                                                            </div> -->

                                                        </div>

                                                        <div class="page-list-panel-item-two-pro-footer">

                                                            <div class="page-list-panel-item-two-body-box-threes" >



                                                            @include('myhouse.share.criteres', ['particuliers' => $particulier])


                                                            </div>

                                                        </div>

                                        </a>
                                    </div>
                                </div>
