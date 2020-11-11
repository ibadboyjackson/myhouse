                                                                @if(isset($professionnel->plage) && $professionnel->plage != '00m') 
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-displays">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="plage" id="plage" value="1">
                                                                                        <label for="plage">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ "Plage" }}
                                                                                </div>
                                                                                <div class="box-text">
                                                                                   {{ $professionnel->plage }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                    @if(isset($professionnel->campagne) && $professionnel->campagne != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="campagne" id="campagne" value="1">
                                                                                            <label for="campagne">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Campagne" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->campagne }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->montagne) && $professionnel->montagne != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="montagne" id="montagne" value="1">
                                                                                            <label for="montagne">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Montagne" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->montagne }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->desert) && $professionnel->desert != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="desert" id="desert" value="1">
                                                                                            <label for="desert">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Désert" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->desert }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->spot_surf) && $professionnel->spot_surf != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="spot_surf" id="spot_surf" value="1">
                                                                                            <label for="spot_surf">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Spot surf" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->spot_surf }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->riviere) && $professionnel->riviere != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="riviere" id="riviere" value="1">
                                                                                            <label for="riviere">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Étang/Rivière" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->riviere }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->golf) && $professionnel->golf != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="golf" id="golf" value="1">
                                                                                            <label for="golf">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Golf" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->golf }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->foret) && $professionnel->foret != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="foret" id="foret" value="1">
                                                                                            <label for="foret">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Forêt" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->foret }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    @if(isset($professionnel->station_ski) && $professionnel->station_ski != '00m')
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-displays">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="station_ski" id="station_ski" value="1">
                                                                                            <label for="station_ski">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Station ski" }}
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        {{ $professionnel->station_ski }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif