@if ($professionnel->typeBien->nom === 'appartement')
                                                                @if(isset($professionnel->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="cuisine_type" id="cuisine_type" value="1">
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($professionnel->cuisine_equipe) && $professionnel->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cuisine_equipe" id="cuisine_equipe" value="1">
                                                                                            <label for="cuisine_equipe">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Cuisine équipée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                <!--@if(isset($professionnel->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($professionnel->dressings) && $professionnel->dressings > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressing" id="dressing" value="1">
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressings }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salle_bain" id="nombre_salle_bain" value="1">
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salon" id="nombre_salon" value="1">
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salon }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->jardin_privatif) && $professionnel->jardin_privatif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jardin_privatif" id="jardin_privatif" value="1">
                                                                                            <label for="jardin_privatif">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Jardin privatif' }}
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
                                                                                        {{ "Cour/Patio" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->buanderie) && $professionnel->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="buanderie" id="buanderie" value="1">
                                                                                            <label for="buanderie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Buanderie" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminée" }}
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
                                                                                        {{ "Climatisation" }}
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
                                                                                        {{ "Chauffe-eau" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                    @if(isset($professionnel->dressings))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressings" id="dressings" value="1">
                                                                                            <label for="dressings">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressings }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
@elseif($professionnel->typeBien->nom === 'Villa')



                                                                @if(isset($professionnel->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="cuisine_type" id="cuisine_type" value="1">
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($professionnel->cuisine_equipe) && $professionnel->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cuisine_equipe" id="cuisine_equipe" value="1">
                                                                                            <label for="cuisine_equipe">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Cuisine équipée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                <!--@if(isset($professionnel->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($professionnel->dressing) && $professionnel->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressing" id="dressing" value="1">
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salle_bain" id="nombre_salle_bain" value="1">
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salon" id="nombre_salon" value="1">
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salon }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



                                                                        @if(isset($professionnel->jaccuzi) && $professionnel->jaccuzi > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jaccuzi" id="jaccuzi" value="1">
                                                                                            <label for="jaccuzi">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bac') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif



                                                                        @if(isset($professionnel->hammam_beldi) && $professionnel->hammam_beldi > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="hammam_beldi" id="hammam_beldi" value="1">
                                                                                            <label for="hammam_beldi">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bad') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($professionnel->cave) && $professionnel->cave > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cave" id="cave" value="1">
                                                                                            <label for="cave">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bae') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                    

                                                                     @if(isset($professionnel->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                            <label for="place_vehicule">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->place_vehicule }}
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


                                                                    @if(isset($professionnel->dressings))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressings" id="dressings" value="1">
                                                                                            <label for="dressings">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressings }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif



                                                                <!--@if(isset($professionnel->piscine) && $professionnel->piscine > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="piscine" id="piscine" value="1">
                                                                                            <label for="piscine">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Piscine' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif -->


                                                                @if(isset($professionnel->jardin_privatif) && $professionnel->jardin_privatif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jardin_privatif" id="jardin_privatif" value="1">
                                                                                            <label for="jardin_privatif">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Jardin privatif' }}
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
                                                                                        {{ "Cour/Patio" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->buanderie) && $professionnel->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="buanderie" id="buanderie" value="1">
                                                                                            <label for="buanderie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Buanderie" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminée" }}
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
                                                                                        {{ "Climatisation" }}
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
                                                                                        {{ "Chauffe-eau" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif



@elseif($professionnel->typeBien->nom === 'Maison')


                                                                @if(isset($professionnel->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="cuisine_type" id="cuisine_type" value="1">
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($professionnel->cuisine_equipe) && $professionnel->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cuisine_equipe" id="cuisine_equipe" value="1">
                                                                                            <label for="cuisine_equipe">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Cuisine équipée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                <!--@if(isset($professionnel->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($professionnel->dressing) && $professionnel->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressing" id="dressing" value="1">
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salle_bain" id="nombre_salle_bain" value="1">
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salon" id="nombre_salon" value="1">
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salon }}
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

                                                                    @if(isset($professionnel->dressings))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressings" id="dressings" value="1">
                                                                                            <label for="dressings">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressings }}
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




                                                                @if(isset($professionnel->jardin_privatif) && $professionnel->jardin_privatif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jardin_privatif" id="jardin_privatif" value="1">
                                                                                            <label for="jardin_privatif">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Jardin privatif' }}
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
                                                                                        {{ "Cour/Patio" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->buanderie) && $professionnel->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="buanderie" id="buanderie" value="1">
                                                                                            <label for="buanderie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Buanderie" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminée" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                 @if(isset($professionnel->cave) && $professionnel->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cave" id="cave" value="1">
                                                                                            <label for="cave">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cave" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                        @if(isset($professionnel->jaccuzi) && $professionnel->jaccuzi > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jaccuzi" id="jaccuzi" value="1">
                                                                                            <label for="jaccuzi">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bac') }}
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif



                                                                        @if(isset($professionnel->hammam_beldi) && $professionnel->hammam_beldi > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="hammam_beldi" id="hammam_beldi" value="1">
                                                                                            <label for="hammam_beldi">
                                                                                            </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <div class="pc-label">
                                                                                                {{ __('myhouse/back/annonces/particulier/description.bad') }}
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
                                                                                        {{ "Climatisation" }}
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
                                                                                        {{ "Chauffe-eau" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

@elseif($professionnel->typeBien->nom === 'Chalet')
                                                                @if(isset($professionnel->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="cuisine_type" id="cuisine_type" value="1">
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($professionnel->cuisine_equipe) && $professionnel->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cuisine_equipe" id="cuisine_equipe" value="1">
                                                                                            <label for="cuisine_equipe">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Cuisine équipée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                <!--@if(isset($professionnel->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($professionnel->dressing) && $professionnel->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressing" id="dressing" value="1">
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salle_bain" id="nombre_salle_bain" value="1">
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salon" id="nombre_salon" value="1">
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salon }}
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
                                                                                        {{ "Cour/Patio" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->buanderie) && $professionnel->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="buanderie" id="buanderie" value="1">
                                                                                            <label for="buanderie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Buanderie" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminée" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->jaccuzi) && $professionnel->jaccuzi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jaccuzi" id="jaccuzi" value="1">
                                                                                            <label for="jaccuzi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Jaccuzi" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->hammam_beldi) && $professionnel->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="hammam_beldi" id="hammam_beldi" value="1">
                                                                                            <label for="hammam_beldi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Hamam beldi" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif


                                                                @if(isset($professionnel->cave) && $professionnel->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cave" id="cave" value="1">
                                                                                            <label for="cave">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cave" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminee" }}
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
                                                                                        {{ "Climatisation" }}
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
                                                                                        {{ "Chauffage" }}
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
                                                                                        {{ "Chauffe-eau" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
@elseif($professionnel->typeBien->nom === 'Riad')
                                                                @if(isset($professionnel->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="cuisine_type" id="cuisine_type" value="1">
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($professionnel->cuisine_equipe) && $professionnel->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cuisine_equipe" id="cuisine_equipe" value="1">
                                                                                            <label for="cuisine_equipe">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Cuisine équipée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                <!--@if(isset($professionnel->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($professionnel->dressing) && $professionnel->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressing" id="dressing" value="1">
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salle_bain" id="nombre_salle_bain" value="1">
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salon" id="nombre_salon" value="1">
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salon }}
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
                                                                                        {{ "Cour/Patio" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($professionnel->buanderie) && $professionnel->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="buanderie" id="buanderie" value="1">
                                                                                            <label for="buanderie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Buanderie" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminée" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->jaccuzi) && $professionnel->jaccuzi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jaccuzi" id="jaccuzi" value="1">
                                                                                            <label for="jaccuzi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Jaccuzi" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->hammam_beldi) && $professionnel->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="hammam_beldi" id="hammam_beldi" value="1">
                                                                                            <label for="hammam_beldi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Hamam beldi" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif


                                                                @if(isset($professionnel->cave) && $professionnel->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cave" id="cave" value="1">
                                                                                            <label for="cave">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cave" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminee" }}
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
                                                                                        {{ "Climatisation" }}
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
                                                                                        {{ "Chauffe-eau" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
@elseif($professionnel->typeBien->nom === 'Ferme')
     @if(isset($professionnel->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox" name="cuisine_type" id="cuisine_type" value="1">
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $professionnel->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($professionnel->cuisine_equipe) && $professionnel->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cuisine_equipe" id="cuisine_equipe" value="1">
                                                                                            <label for="cuisine_equipe">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Cuisine équipée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                <!--@if(isset($professionnel->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($professionnel->dressing) && $professionnel->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="dressing" id="dressing" value="1">
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salle_bain" id="nombre_salle_bain" value="1">
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="nombre_salon" id="nombre_salon" value="1">
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $professionnel->nombre_salon }}
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
                                                                                        {{ "Cour/Patio" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    
                                                                @if(isset($professionnel->buanderie) && $professionnel->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="buanderie" id="buanderie" value="1">
                                                                                            <label for="buanderie">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Buanderie" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminée" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->jaccuzi) && $professionnel->jaccuzi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="jaccuzi" id="jaccuzi" value="1">
                                                                                            <label for="jaccuzi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Jaccuzi" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($professionnel->hammam_beldi) && $professionnel->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="hammam_beldi" id="hammam_beldi" value="1">
                                                                                            <label for="hammam_beldi">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Hamam beldi" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif


                                                                @if(isset($professionnel->cheminee) && $professionnel->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cheminee" id="cheminee" value="1">
                                                                                            <label for="cheminee">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cheminee" }}
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
                                                                                        {{ "Climatisation" }}
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
                                                                                        {{ "Chauffe-eau" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif



                                                                @if(isset($professionnel->cave) && $professionnel->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox" name="cave" id="cave" value="1">
                                                                                            <label for="cave">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ "Cave" }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
@else
@endif