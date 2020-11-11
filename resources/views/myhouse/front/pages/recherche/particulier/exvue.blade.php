    
                             <div class="page-list-panel" data-lat="{{ $particulier->latitude }}" data-long="{{ $particulier->longitude }}">
                                    <div class="page-list-panel-item">
                                        <a href="{{ route('resultat.particulier', [strtolower($particulier->typeBien->nom) .'-' . $particulier->id]) }}" target="_blank">

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

                                    <div class="page-list-panel-item-two-pro">
                                      
                                        <a href="{{ route('resultat.particulier', [strtolower($particulier->typeBien->nom) .'-' . $particulier->id]) }}" style="text-decoration: none; color: inherit" target="_blank">
                                      
                                            
                                            
                                            <div class="page-list-panel-item-two-pro-head">
                                                <div class="page-list-panel-item-two-head-left">
                                                    <div class="page-list-panel-item-two-head-left-box">
                                                        <div class="page-list-panel-item-two-head-left-box-left">
                                                            <img src="{{ asset('images/residential/loc.svg') }}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="page-list-panel-item-two-head-left-box-right">
                                                            {{ substr($particulier->adresse, 0, 26) }} <br>
                                                            {{ substr($particulier->adresse, 26, 50) }}
                                                            <!-- <div class="page-list-panel-item-two-head-left-box-right-sp">300m du lieu de recherche</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-list-panel-item-two-body-box-item">
                                                    <div class="page-list-panel-item-two-body-box-item-title">
                                                        {{ ucfirst($particulier->typeBien->nom) }}
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

                                                            @if($particulier->venteActif)
                                                                Vente
                                                            @endif

                                                            @if($particulier->locationActif)
                                                                Location
                                                            @endif




                                                            <div class="page-list-panel-item-two-pro-body-content-text">

                                                                @if($particulier->venteActif)
                                                                    {{ $particulier->prix_vente }} MAD
                                                                @endif

                                                                @if($particulier->locationActif)
                                                                        @if($particulier->prix_mois)
                                                                            {{ $particulier->prix_mois }}<span> MAD/MOIS</span>
                                                                        @endif
                                                                        @if($particulier->prix_jour)
                                                                            {{ $particulier->prix_jour }}<span> MAD/JOUR</span>
                                                                        @endif
                                                                    @endif

                                                                @if($particulier->echangeActif)
                                                                    25/02/2020 - 30/02/2020
                                                                @endif
                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="page-list-panel-item-two-pro-text">
                                                                @if ($particulier->surface_habitable)
                                                                    {{ $particulier->surface_habitable }} m²
                                                                @endif

                                                                <!--@if ($particulier->superficie_terrain)
                                                                    {{ $particulier->superficie_terrain }} m²
                                                                @endif -->

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
                                                    </div>
                                                </div>


                                                <div class="page-list-item-two-pro-body-content-text">
                                                    {{ substr($particulier->description, 0, 150) }}...
                                                </div>


                                            </div>
                                            
                                            
                                            <div class="page-list-panel-item-two-pro-footer">
                                                <div class="page-list-panel-item-two-body-box-threes">
                                                    @include('myhouse.share.criteres', ['particulier' => $particulier])
                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
