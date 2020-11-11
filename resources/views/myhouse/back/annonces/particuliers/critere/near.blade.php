
                                                                    @if (request()->get('mplage') == 1 && $particulier->plage != '00m')

                                                                        @if(isset($particulier->plage)) 
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('plage') != null ? 'checked' : '' }} name="plage" id="plage" value="1" {{ isset($particulier->critere->last()->plage) && $particulier->critere->last()->plage == 1 ? 'checked' : '' }}>
                                                                                                <label for="plage">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Plage" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                        {{ $particulier->plage }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @elseif(request()->get('mplage') == 1 && $particulier->plage == '00m')

                                                                        @if(isset($particulier->plage)) 
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('plage') != null ? 'checked' : '' }} name="plage" id="plage" value="1" {{ isset($particulier->critere->last()->plage) && $particulier->critere->last()->plage == 1 ? 'checked' : '' }}>
                                                                                                <label for="plage">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Plage" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                        {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif



                                                                    @if (request()->get('mcampagne') == 1  && $particulier->campagne != '00m')

                                                                        @if(isset($particulier->campagne))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('campagne') != null ? 'checked' : '' }} name="campagne" id="campagne" value="1" {{ isset($particulier->critere->last()->campagne) && $particulier->critere->last()->campagne == 1 ? 'checked' : '' }}>
                                                                                                <label for="campagne">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Campagne" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->campagne }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @elseif(request()->get('mcampagne') == 1  && $particulier->campagne == '00m')

                                                                        @if(isset($particulier->campagne))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('campagne') != null ? 'checked' : '' }} name="campagne" id="campagne" value="1" {{ isset($particulier->critere->last()->campagne) && $particulier->critere->last()->campagne == 1 ? 'checked' : '' }}>
                                                                                                <label for="campagne">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Campagne" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif


                                                                    @if (request()->get('mmontagne') == 1  && $particulier->montagne != '00m')

                                                                        @if(isset($particulier->montagne))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('montagne') != null ? 'checked' : '' }} name="montagne" id="montagne" value="1" {{ isset($particulier->critere->last()->montagne) && $particulier->critere->last()->montagne == 1 ? 'checked' : '' }}>
                                                                                                <label for="montagne">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Montagne" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->montagne }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                    @elseif(request()->get('mmontagne') == 1  && $particulier->montagne == '00m')

                                                                        @if(isset($particulier->montagne))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('montagne') != null ? 'checked' : '' }} name="montagne" id="montagne" value="1" {{ isset($particulier->critere->last()->montagne) && $particulier->critere->last()->montagne == 1 ? 'checked' : '' }}>
                                                                                                <label for="montagne">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Montagne" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif


                                                                    @if (request()->get('mdesert') == 1 && $particulier->desert != '00m')

                                                                        @if(isset($particulier->desert))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('desert') != null ? 'checked' : '' }} name="desert" id="desert" value="1" {{ isset($particulier->critere->last()->desert) && $particulier->critere->last()->desert == 1 ? 'checked' : '' }}>
                                                                                                <label for="desert">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Désert" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->desert }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @elseif(request()->get('mdesert') == 1 && $particulier->desert == '00m')

                                                                        @if(isset($particulier->desert))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('desert') != null ? 'checked' : '' }} name="desert" id="desert" value="1" {{ isset($particulier->critere->last()->desert) && $particulier->critere->last()->desert == 1 ? 'checked' : '' }}>
                                                                                                <label for="desert">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Désert" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif


                                                                    @if (request()->get('mspot_surf') == 1 && $particulier->spot_surf != '00m')

                                                                        @if(isset($particulier->spot_surf))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('spot_surf') != null ? 'checked' : '' }} name="spot_surf" id="spot_surf" value="1" {{ isset($particulier->critere->last()->spot_surf) && $particulier->critere->last()->spot_surf == 1 ? 'checked' : '' }}>
                                                                                                <label for="spot_surf">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Spot surf" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->spot_surf }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                    @elseif(request()->get('mspot_surf') == 1 && $particulier->spot_surf == '00m')

                                                                        @if(isset($particulier->spot_surf))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('spot_surf') != null ? 'checked' : '' }} name="spot_surf" id="spot_surf" value="1" {{ isset($particulier->critere->last()->spot_surf) && $particulier->critere->last()->spot_surf == 1 ? 'checked' : '' }}>
                                                                                                <label for="spot_surf">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Spot surf" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                    @endif



                                                                    @if (request()->get('mgolf') == 1 && $particulier->golf != '00m')


                                                                        @if(isset($particulier->golf))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('golf') != null ? 'checked' : '' }} name="golf" id="golf" value="1" {{ isset($particulier->critere->last()->golf) && $particulier->critere->last()->golf == 1 ? 'checked' : '' }}>
                                                                                                <label for="golf">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Golf" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->golf }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                    @elseif(request()->get('mgolf') == 1 && $particulier->golf == '00m')


                                                                        @if(isset($particulier->golf))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('golf') != null ? 'checked' : '' }} name="golf" id="golf" value="1" {{ isset($particulier->critere->last()->golf) && $particulier->critere->last()->golf == 1 ? 'checked' : '' }}>
                                                                                                <label for="golf">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Golf" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif




                                                                    @if (request()->get('mforet') == 1 && $particulier->foret != '00m')

                                                                        @if(isset($particulier->foret))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('foret') != null ? 'checked' : '' }} name="foret" id="foret" value="1" {{ isset($particulier->critere->last()->foret) && $particulier->critere->last()->foret == 1 ? 'checked' : '' }}>
                                                                                                <label for="foret">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Forêt" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->foret }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @elseif (request()->get('mforet') == 1 && $particulier->foret == '00m')

                                                                        @if(isset($particulier->foret))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('foret') != null ? 'checked' : '' }} name="foret" id="foret" value="1" {{ isset($particulier->critere->last()->foret) && $particulier->critere->last()->foret == 1 ? 'checked' : '' }}>
                                                                                                <label for="foret">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Forêt" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif

                                                                    @if (request()->get('mstation_ski') == 1 && $particulier->station_ski != '00m')

                                                                        @if(isset($particulier->station_ski))   
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('station_ski') != null ? 'checked' : '' }} name="station_ski" id="station_ski" value="1" {{ isset($particulier->critere->last()->station_ski) && $particulier->critere->last()->station_ski == 1 ? 'checked' : '' }}>
                                                                                                <label for="station_ski">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Station ski" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->station_ski }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @elseif(request()->get('mstation_ski') == 1 && $particulier->station_ski == '00m')

                                                                        @if(isset($particulier->station_ski))   
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('station_ski') != null ? 'checked' : '' }} name="station_ski" id="station_ski" value="1" {{ isset($particulier->critere->last()->station_ski) && $particulier->critere->last()->station_ski == 1 ? 'checked' : '' }}>
                                                                                                <label for="station_ski">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Station ski" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif                                                                    



                                                                    @if (request()->get('mriviere') == 1 && $particulier->riviere != '00m')

                                                                        @if(isset($particulier->riviere))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('riviere') != null ? 'checked' : '' }} name="riviere" id="riviere" value="1" {{ isset($particulier->critere->last()->riviere) && $particulier->critere->last()->riviere == 1 ? 'checked' : '' }}>
                                                                                                <label for="riviere">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Étang/Rivière" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ $particulier->riviere }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @elseif(request()->get('mriviere') == 1 && $particulier->riviere == '00m')

                                                                        @if(isset($particulier->riviere))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-displays">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('riviere') != null ? 'checked' : '' }} name="riviere" id="riviere" value="1" {{ isset($particulier->critere->last()->riviere) && $particulier->critere->last()->riviere == 1 ? 'checked' : '' }}>
                                                                                                <label for="riviere">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ "Étang/Rivière" }}
                                                                                        </div>
                                                                                        <div class="box-text">
                                                                                            {{ "00m" }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif






                                                    
