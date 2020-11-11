@if ($particulier->typeBien->nom === 'Bureau')
                                                



                                                                        @if(isset($particulier->nombre_piece))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('nombre_piece') != null ? 'checked' : '' }} name="nombre_piece" id="nombre_piece" value="1" {{ isset($particulier->critere->last()->nombre_piece) && $particulier->critere->last()->nombre_piece == 1 ? 'checked' : '' }}>
                                                                                                <label for="nombre_piece">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->nombre_piece }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->hauteur_sous_plafond))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('hauteur_sous_plafond') != null ? 'checked' : '' }} name="hauteur_sous_plafond" id="hauteur_sous_plafond" value="1" {{ isset($particulier->critere->last()->hauteur_sous_plafond) && $particulier->critere->last()->hauteur_sous_plafond == 1 ? 'checked' : '' }}>
                                                                                                <label for="hauteur_sous_plafond">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                           
                                                                                                <div>
                                                                                                    {{ __('myhouse/back/annonces/particulier/description.bbbu') }}
                                                                                                </div>
                                                                                                
                                                                                                <div style="text-align: right;">
                                                                                                    {{ $particulier->hauteur_sous_plafond }} m²
                                                                                                </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->internet) && $particulier->internet > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('internet') != null ? 'checked' : '' }} name="internet" id="internet" value="1" {{ isset($particulier->critere->last()->internet) && $particulier->critere->last()->internet == 1 ? 'checked' : '' }}>
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

                                                                        @if(isset($particulier->terrasses))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
                                                                                                <label for="terrasses">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->terrasses }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->balcons))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
                                                                                                <label for="balcons">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->balcons }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->wc_sanitaire) && $particulier->wc_sanitaire > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('wc_sanitaire') != null ? 'checked' : '' }} name="wc_sanitaire" id="wc_sanitaire" value="1" {{ isset($particulier->critere->last()->wc_sanitaire) && $particulier->critere->last()->wc_sanitaire == 1 ? 'checked' : '' }}>
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


                                                                        @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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


                                                                        @if(isset($particulier->coin_cuisine) && $particulier->coin_cuisine > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('coin_cuisine') != null ? 'checked' : '' }} name="coin_cuisine" id="coin_cuisine" value="1" {{ isset($particulier->critere->last()->coin_cuisine) && $particulier->critere->last()->coin_cuisine == 1 ? 'checked' : '' }}>
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




                                                                        @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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


                                                                        @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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
                                              

                                                                        @if(isset($particulier->chauffage) && $particulier->chauffage > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('chauffage') != null ? 'checked' : '' }} name="chauffage" id="chauffage" value="1" {{ isset($particulier->critere->last()->chauffage) && $particulier->critere->last()->chauffage == 1 ? 'checked' : '' }}>
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





                            
@elseif($particulier->typeBien->nom === 'Plateau')


                                                                        @if(isset($particulier->open_space) && $particulier->open_space > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('open_space') != null ? 'checked' : '' }} name="open_space" id="open_space" value="1" {{ isset($particulier->critere->last()->open_space) && $particulier->critere->last()->open_space == 1 ? 'checked' : '' }}>
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

                                                                        @if(isset($particulier->nombre_box))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('nombre_box') != null ? 'checked' : '' }} name="nombre_box" id="nombre_box" value="1" {{ isset($particulier->critere->last()->nombre_box) && $particulier->critere->last()->nombre_box == 1 ? 'checked' : '' }}>
                                                                                                <label for="nombre_box">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->nombre_box }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->salle_reunion))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('salle_reunion') != null ? 'checked' : '' }} name="salle_reunion" id="salle_reunion" value="1" {{ isset($particulier->critere->last()->salle_reunion) && $particulier->critere->last()->salle_reunion == 1 ? 'checked' : '' }}>
                                                                                                <label for="salle_reunion">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->salle_reunion }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->hauteur_sous_plafond))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('hauteur_sous_plafond') != null ? 'checked' : '' }} name="hauteur_sous_plafond" id="hauteur_sous_plafond" value="1" {{ isset($particulier->critere->last()->hauteur_sous_plafond) && $particulier->critere->last()->hauteur_sous_plafond == 1 ? 'checked' : '' }}>
                                                                                                <label for="hauteur_sous_plafond">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">

                                                                                            <div>
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bbbu') }}
                                                                                            </div>
                                                                                            
                                                                                            <div style="text-align: right;">
                                                                                                {{ $particulier->hauteur_sous_plafond }} m²
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->internet) && $particulier->internet > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('internet') != null ? 'checked' : '' }} name="internet" id="internet" value="1" {{ isset($particulier->critere->last()->internet) && $particulier->critere->last()->internet == 1 ? 'checked' : '' }}>
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



                                                                        @if(isset($particulier->wc_sanitaire) && $particulier->wc_sanitaire > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('wc_sanitaire') != null ? 'checked' : '' }} name="wc_sanitaire" id="wc_sanitaire" value="1" {{ isset($particulier->critere->last()->wc_sanitaire) && $particulier->critere->last()->wc_sanitaire == 1 ? 'checked' : '' }}>
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


                                                                        @if(isset($particulier->terrasses))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
                                                                                                <label for="terrasses">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->terrasses }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->balcons))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
                                                                                                <label for="balcons">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ $particulier->balcons }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->coin_cuisine) && $particulier->coin_cuisine > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('coin_cuisine') != null ? 'checked' : '' }} name="coin_cuisine" id="coin_cuisine" value="1" {{ isset($particulier->critere->last()->coin_cuisine) && $particulier->critere->last()->coin_cuisine == 1 ? 'checked' : '' }}>
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

                                                                        @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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

                                                                        @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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



                                                                        @if(isset($particulier->chauffage) && $particulier->chauffage > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" {{ old('chauffage') != null ? 'checked' : '' }} name="chauffage" id="chauffage" value="1" {{ isset($particulier->critere->last()->chauffage) && $particulier->critere->last()->chauffage == 1 ? 'checked' : '' }}>
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