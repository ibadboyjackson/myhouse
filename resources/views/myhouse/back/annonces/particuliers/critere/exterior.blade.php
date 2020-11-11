                                                                @if(isset($particulier->espace_vert)  && $particulier->espace_vert > 0)
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
                                                              
                                                                    @if(isset($particulier->gardiennage)  && $particulier->gardiennage > 0)
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

                                                                    <!--@if(isset($particulier->place_vehicule))
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
                                                                    @endif -->

                                                                    @if(isset($particulier->box)  && $particulier->box > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('box') != null ? 'checked' : '' }} name="box" id="box" value="1" {{ isset($particulier->critere->last()->box) && $particulier->critere->last()->box == 1 ? 'checked' : '' }}>
                                                                                            <label for="box">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Box" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->piscine)  && $particulier->piscine > 0)
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

                                                                    @if(isset($particulier->terrain_sport)  && $particulier->terrain_sport > 0)
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
                                                                                        {{ "Terrains de sport" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->salle_fitness)  && $particulier->salle_fitness > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('salle_fitness') != null ? 'checked' : '' }} name="salle_fitness" id="salle_fitness" value="1" {{ isset($particulier->critere->last()->salle_fitness) && $particulier->critere->last()->salle_fitness == 1 ? 'checked' : '' }}>
                                                                                            <label for="salle_fitness">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Salle de fitness" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif


                                                                    @if(isset($particulier->spa)  && $particulier->spa > 0)
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
                                                                                        {{ "Spa" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->superette)  && $particulier->superette > 0)
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
                                                                                        {{ "Superette" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->ecole)  && $particulier->ecole > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('ecole') != null ? 'checked' : '' }} name="ecole" id="ecole" value="1" {{ isset($particulier->critere->last()->ecole) && $particulier->critere->last()->ecole == 1 ? 'checked' : '' }}>
                                                                                            <label for="ecole">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "École" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->mosquee)  && $particulier->mosquee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('mosquee') != null ? 'checked' : '' }} name="mosquee" id="mosquee" value="1" {{ isset($particulier->critere->last()->mosquee) && $particulier->critere->last()->mosquee == 1 ? 'checked' : '' }}> 
                                                                                            <label for="mosquee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Mosquée" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    
                                                                    @if(isset($particulier->shopping)  && $particulier->shopping > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('shopping') != null ? 'checked' : '' }} name="shopping" id="shopping" value="1" {{ isset($particulier->critere->last()->shopping) && $particulier->critere->last()->shopping == 1 ? 'checked' : '' }}>
                                                                                            <label for="shopping">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Shopping" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->restaurent)  && $particulier->restaurent > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('restaurent') != null ? 'checked' : '' }} name="restaurent" id="restaurent" value="1" {{ isset($particulier->critere->last()->restaurent) && $particulier->critere->last()->restaurent == 1 ? 'checked' : '' }}>
                                                                                            <label for="restaurent">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Restaurant" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    
                                                                    @if(isset($particulier->cafeteriat)  && $particulier->cafeteriat > 0)
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
                                                                                        {{ "Cafétéria" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif