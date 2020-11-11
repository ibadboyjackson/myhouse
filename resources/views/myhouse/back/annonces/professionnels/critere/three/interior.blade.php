@if ($professionnel->typeBien->nom === 'Bureau')
                                                



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


                                                                        @if(isset($professionnel->hauteur_sous_plafond))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="hauteur_sous_plafond" id="hauteur_sous_plafond" value="1">
                                                                                                <label for="hauteur_sous_plafond">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                           
                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.bbbu') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $professionnel->hauteur_sous_plafond }} m²
                                                                                                </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->internet) && $professionnel->internet > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="internet" id="internet" value="1">
                                                                                                <label for="internet"></label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                               {{ __('myhouse/back/annonces/particulier/description.bbbv') }}
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
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bbbw') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->chauffe_eau) && $professionnel->chauffe_eau > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="chauffe_eau" id="chauffe_eau" value="1">
                                                                                            <label for="chauffe_eau">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bbbx') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->coin_cuisine) && $professionnel->coin_cuisine > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="coin_cuisine" id="coin_cuisine" value="1">
                                                                                            <label for="coin_cuisine">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bbbz') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif




                                                                        @if(isset($professionnel->cour) && $professionnel->cour > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cour" id="cour" value="1">
                                                                                            <label for="cour">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.baba') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->climatisation) && $professionnel->climatisation > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="climatisation" id="climatisation" value="1">
                                                                                            <label for="climatisation">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.babb') }}
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
                                                                                                {{ __('myhouse/back/annonces/particulier/description.babc') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif





                            
@elseif($professionnel->typeBien->nom === 'Plateau')


                                                                        @if(isset($professionnel->open_space) && $professionnel->open_space > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="open_space" id="open_space" value="1">
                                                                                            <label for="open_space">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.babp') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->nombre_box))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="nombre_box" id="nombre_box" value="1">
                                                                                                <label for="nombre_box">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->nombre_box }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->salle_reunion))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="salle_reunion" id="salle_reunion" value="1">
                                                                                                <label for="salle_reunion">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $professionnel->salle_reunion }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->hauteur_sous_plafond))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="hauteur_sous_plafond" id="hauteur_sous_plafond" value="1">
                                                                                                <label for="hauteur_sous_plafond">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">

                                                                                            <div>
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bbbu') }}
                                                                                            </div>
                                                                                            
                                                                                            <div style="text-align: right;">
                                                                                                {{ $professionnel->hauteur_sous_plafond }} m²
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($professionnel->internet) && $professionnel->internet > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="internet" id="internet" value="1">
                                                                                            <label for="internet">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.cabi') }}
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
                                                                                                {{ __('myhouse/back/annonces/particulier/description.cabj') }}
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


                                                                        @if(isset($professionnel->coin_cuisine) && $professionnel->coin_cuisine > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="coin_cuisine" id="coin_cuisine" value="1">
                                                                                            <label for="coin_cuisine">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.cabl') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif



                                                                        @if(isset($professionnel->cour) && $professionnel->cour > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cour" id="cour" value="1">
                                                                                            <label for="cour">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.cabm') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->climatisation) && $professionnel->climatisation > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="climatisation" id="climatisation" value="1">
                                                                                            <label for="climatisation">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.cabn') }}
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
                                                                                                {{ __('myhouse/back/annonces/particulier/description.cabo') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

@else

@endif