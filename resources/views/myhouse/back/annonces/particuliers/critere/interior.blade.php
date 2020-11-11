@if ($particulier->typeBien->nom === 'appartement')
                                                                @if(isset($particulier->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_type') != null ? 'checked' : '' }} name="cuisine_type" id="cuisine_type" value="1" {{ isset($particulier->critere->last()->cuisine_type) && $particulier->critere->last()->cuisine_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($particulier->cuisine_equipe) && $particulier->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_equipe') != null ? 'checked' : '' }} name="cuisine_equipe" id="cuisine_equipe" value="1" {{ isset($particulier->critere->last()->cuisine_equipe) && $particulier->critere->last()->cuisine_equipe == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_chambre') != null ? 'checked' : '' }} name="nombre_chambre" id="nombre_chambre" value="1" {{ isset($particulier->critere->last()->nombre_chambre) && $particulier->critere->last()->nombre_chambre == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif 
                                                                @if(isset($particulier->dressings) && $particulier->dressings > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('dressings') != null ? 'checked' : '' }} name="dressings" id="dressings" value="1" {{ isset($particulier->critere->last()->dressings) && $particulier->critere->last()->dressings == 1 ? 'checked' : '' }}>
                                                                                            <label for="dressings">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->dressings }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif

                                                                @if(isset($particulier->terrasses) && $particulier->terrasses > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->balcons) && $particulier->balcons > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salle_bain') != null ? 'checked' : '' }} name="nombre_salle_bain" id="nombre_salle_bain" value="1" {{ isset($particulier->critere->last()->nombre_salle_bain) && $particulier->critere->last()->nombre_salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salon') != null ? 'checked' : '' }} name="nombre_salon" id="nombre_salon" value="1" {{ isset($particulier->critere->last()->nombre_salon) && $particulier->critere->last()->nombre_salon == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salon }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @if(isset($particulier->jardin_privatif) && $particulier->jardin_privatif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('jardin_privatif') != null ? 'checked' : '' }} name="jardin_privatif" id="jardin_privatif" value="1" {{ isset($particulier->critere->last()->jardin_privatif) && $particulier->critere->last()->jardin_privatif == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->buanderie) && $particulier->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('buanderie') != null ? 'checked' : '' }} name="buanderie" id="buanderie" value="1" {{ isset($particulier->critere->last()->buanderie) && $particulier->critere->last()->buanderie == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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
@elseif($particulier->typeBien->nom === 'Villa')



                                                                @if(isset($particulier->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_type') != null ? 'checked' : '' }} name="cuisine_type" id="cuisine_type" value="1" {{ isset($particulier->critere->last()->cuisine_type) && $particulier->critere->last()->cuisine_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($particulier->cuisine_equipe) && $particulier->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_equipe') != null ? 'checked' : '' }} name="cuisine_equipe" id="cuisine_equipe" value="1" {{ isset($particulier->critere->last()->cuisine_equipe) && $particulier->critere->last()->cuisine_equipe == 1 ? 'checked' : '' }}>
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
                                                                <!--@if(isset($particulier->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($particulier->dressing) && $particulier->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('dressing') != null ? 'checked' : '' }} name="dressing" id="dressing" value="1" {{ isset($particulier->critere->last()->dressing) && $particulier->critere->last()->dressing == 1 ? 'checked' : '' }}>
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salle_bain') != null ? 'checked' : '' }} name="nombre_salle_bain" id="nombre_salle_bain" value="1" {{ isset($particulier->critere->last()->nombre_salle_bain) && $particulier->critere->last()->nombre_salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salon') != null ? 'checked' : '' }} name="nombre_salon" id="nombre_salon" value="1" {{ isset($particulier->critere->last()->nombre_salon) && $particulier->critere->last()->nombre_salon == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salon }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                    

                                                                     @if(isset($particulier->place_vehicule))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('place_vehicule') != null ? 'checked' : '' }} name="place_vehicule" id="place_vehicule" value="1" {{ isset($particulier->critere->last()->place_vehicule) && $particulier->critere->last()->place_vehicule == 1 ? 'checked' : '' }}>
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
                                                                    @endif

                                                                    @if(isset($particulier->terrasses))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
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


                                                                <!--@if(isset($particulier->piscine) && $particulier->piscine > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('piscine') != null ? 'checked' : '' }} name="piscine" id="piscine" value="1" {{ isset($particulier->critere->last()->piscine) && $particulier->critere->last()->piscine == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->jardin_privatif) && $particulier->jardin_privatif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('jardin_privatif') != null ? 'checked' : '' }} name="jardin_privatif" id="jardin_privatif" value="1" {{ isset($particulier->critere->last()->jardin_privatif) && $particulier->critere->last()->jardin_privatif == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->buanderie) && $particulier->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('buanderie') != null ? 'checked' : '' }} name="buanderie" id="buanderie" value="1" {{ isset($particulier->critere->last()->buanderie) && $particulier->critere->last()->buanderie == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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



@elseif($particulier->typeBien->nom === 'Maison')


                                                                @if(isset($particulier->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_type') != null ? 'checked' : '' }} name="cuisine_type" id="cuisine_type" value="1" {{ isset($particulier->critere->last()->cuisine_type) && $particulier->critere->last()->cuisine_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                                @if(isset($particulier->hammam_beldi) && $particulier->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('hammam_beldi') != null ? 'checked' : '' }} name="hammam_beldi" id="hammam_beldi" value="1" {{ isset($particulier->critere->last()->hammam_beldi) && $particulier->critere->last()->hammam_beldi == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->cuisine_equipe) && $particulier->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_equipe') != null ? 'checked' : '' }} name="cuisine_equipe" id="cuisine_equipe" value="1" {{ isset($particulier->critere->last()->cuisine_equipe) && $particulier->critere->last()->cuisine_equipe == 1 ? 'checked' : '' }}>
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
                                                                <!--@if(isset($particulier->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($particulier->dressing) && $particulier->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('dressing') != null ? 'checked' : '' }} name="dressing" id="dressing" value="1" {{ isset($particulier->critere->last()->dressing) && $particulier->critere->last()->dressing == 1 ? 'checked' : '' }}>
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salle_bain') != null ? 'checked' : '' }} name="nombre_salle_bain" id="nombre_salle_bain" value="1" {{ isset($particulier->critere->last()->nombre_salle_bain) && $particulier->critere->last()->nombre_salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salon') != null ? 'checked' : '' }} name="nombre_salon" id="nombre_salon" value="1" {{ isset($particulier->critere->last()->nombre_salon) && $particulier->critere->last()->nombre_salon == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salon }}
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
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




                                                                @if(isset($particulier->jardin_privatif) && $particulier->jardin_privatif > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('jardin_privatif') != null ? 'checked' : '' }} name="jardin_privatif" id="jardin_privatif" value="1" {{ isset($particulier->critere->last()->jardin_privatif) && $particulier->critere->last()->jardin_privatif == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->buanderie) && $particulier->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('buanderie') != null ? 'checked' : '' }} name="buanderie" id="buanderie" value="1" {{ isset($particulier->critere->last()->buanderie) && $particulier->critere->last()->buanderie == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                 @if(isset($particulier->cave) && $particulier->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cave') != null ? 'checked' : '' }} name="cave" id="cave" value="1" {{ isset($particulier->critere->last()->cave) && $particulier->critere->last()->cave == 1 ? 'checked' : '' }}> 
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

                                                                @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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

@elseif($particulier->typeBien->nom === 'Cabanon/Chalet')
                                                                @if(isset($particulier->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_type') != null ? 'checked' : '' }} name="cuisine_type" id="cuisine_type" value="1" {{ isset($particulier->critere->last()->cuisine_type) && $particulier->critere->last()->cuisine_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($particulier->cuisine_equipe) && $particulier->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_equipe') != null ? 'checked' : '' }} name="cuisine_equipe" id="cuisine_equipe" value="1" {{ isset($particulier->critere->last()->cuisine_equipe) && $particulier->critere->last()->cuisine_equipe == 1 ? 'checked' : '' }}>
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
                                                                <!--@if(isset($particulier->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($particulier->dressing) && $particulier->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('dressing') != null ? 'checked' : '' }} name="dressing" id="dressing" value="1" {{ isset($particulier->critere->last()->dressing) && $particulier->critere->last()->dressing == 1 ? 'checked' : '' }}>
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salle_bain') != null ? 'checked' : '' }} name="nombre_salle_bain" id="nombre_salle_bain" value="1" {{ isset($particulier->critere->last()->nombre_salle_bain) && $particulier->critere->last()->nombre_salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salon') != null ? 'checked' : '' }} name="nombre_salon" id="nombre_salon" value="1" {{ isset($particulier->critere->last()->nombre_salon) && $particulier->critere->last()->nombre_salon == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salon }}
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
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

                
                                                                @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->buanderie) && $particulier->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('buanderie') != null ? 'checked' : '' }} name="buanderie" id="buanderie" value="1" {{ isset($particulier->critere->last()->buanderie) && $particulier->critere->last()->buanderie == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->jaccuzi) && $particulier->jaccuzi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('jaccuzi') != null ? 'checked' : '' }} name="jaccuzi" id="jaccuzi" value="1" {{ isset($particulier->critere->last()->jaccuzi) && $particulier->critere->last()->jaccuzi == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->hammam_beldi) && $particulier->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('hammam_beldi') != null ? 'checked' : '' }} name="hammam_beldi" id="hammam_beldi" value="1" {{ isset($particulier->critere->last()->hammam_beldi) && $particulier->critere->last()->hammam_beldi == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->cave) && $particulier->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cave') != null ? 'checked' : '' }} name="cave" id="cave" value="1" {{ isset($particulier->critere->last()->cave) && $particulier->critere->last()->cave == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->chauffage) && $particulier->chauffage > 0)
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('chauffage') != null ? 'checked' : '' }} name="chauffage" id="chauffage" value="1" {{ isset($particulier->critere->last()->chauffage) && $particulier->critere->last()->chauffage == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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
@elseif($particulier->typeBien->nom === 'Riad')
                                                                @if(isset($particulier->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_type') != null ? 'checked' : '' }} name="cuisine_type" id="cuisine_type" value="1" {{ isset($particulier->critere->last()->cuisine_type) && $particulier->critere->last()->cuisine_type == 1 ? 'checked' : '' }}> 
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($particulier->cuisine_equipe) && $particulier->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_equipe') != null ? 'checked' : '' }} name="cuisine_equipe" id="cuisine_equipe" value="1" {{ isset($particulier->critere->last()->cuisine_equipe) && $particulier->critere->last()->cuisine_equipe == 1 ? 'checked' : '' }}>
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
                                                                <!--@if(isset($particulier->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($particulier->dressing) && $particulier->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('dressing') != null ? 'checked' : '' }} name="dressing" id="dressing" value="1" {{ isset($particulier->critere->last()->dressing) && $particulier->critere->last()->dressing == 1 ? 'checked' : '' }}>
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salle_bain') != null ? 'checked' : '' }} name="nombre_salle_bain" id="nombre_salle_bain" value="1" {{ isset($particulier->critere->last()->nombre_salle_bain) && $particulier->critere->last()->nombre_salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salon') != null ? 'checked' : '' }} name="nombre_salon" id="nombre_salon" value="1" {{ isset($particulier->critere->last()->nombre_salon) && $particulier->critere->last()->nombre_salon == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salon }}
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
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

                
                                                                @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}> 
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
                                                                @if(isset($particulier->buanderie) && $particulier->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('buanderie') != null ? 'checked' : '' }} name="buanderie" id="buanderie" value="1" {{ isset($particulier->critere->last()->buanderie) && $particulier->critere->last()->buanderie == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->jaccuzi) && $particulier->jaccuzi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('jaccuzi') != null ? 'checked' : '' }} name="jaccuzi" id="jaccuzi" value="1" {{ isset($particulier->critere->last()->jaccuzi) && $particulier->critere->last()->jaccuzi == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->hammam_beldi) && $particulier->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('hammam_beldi') != null ? 'checked' : '' }} name="hammam_beldi" id="hammam_beldi" value="1" {{ isset($particulier->critere->last()->hammam_beldi) && $particulier->critere->last()->hammam_beldi == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->cave) && $particulier->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cave') != null ? 'checked' : '' }} name="cave" id="cave" value="1" {{ isset($particulier->critere->last()->cave) && $particulier->critere->last()->cave == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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
@elseif($particulier->typeBien->nom === 'Ferme')
                                                                @if(isset($particulier->cuisine_type))
                                                                    <div class="ca-page-item-second-body-card-item-body-item">
                                                                        <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                            <div class="box-display">
                                                                                <div>
                                                                                    <div class="pc-checkbox">
                                                                                        <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_type') != null ? 'checked' : '' }} name="cuisine_type" id="cuisine_type" value="1" {{ isset($particulier->critere->last()->cuisine_type) && $particulier->critere->last()->cuisine_type == 1 ? 'checked' : '' }}>
                                                                                        <label for="cuisine_type">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="pc-label">
                                                                                    {{ $particulier->cuisine_type }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if(isset($particulier->cuisine_equipe) && $particulier->cuisine_equipe > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cuisine_equipe') != null ? 'checked' : '' }} name="cuisine_equipe" id="cuisine_equipe" value="1" {{ isset($particulier->critere->last()->cuisine_equipe) && $particulier->critere->last()->cuisine_equipe == 1 ? 'checked' : '' }}>
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
                                                                <!--@if(isset($particulier->nombre_chambre))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('appart_etage_nombre') != null ? 'checked' : '' }} name="nombre_chambre" id="nombre_chambre" value="1">
                                                                                            <label for="nombre_chambre">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_chambre }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif -->
                                                                @if(isset($particulier->dressing) && $particulier->dressing > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('dressing') != null ? 'checked' : '' }} name="dressing" id="dressing" value="1" {{ isset($particulier->critere->last()->dressing) && $particulier->critere->last()->dressing == 1 ? 'checked' : '' }}>
                                                                                            <label for="dressing">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->dressing }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salle_bain))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salle_bain') != null ? 'checked' : '' }} name="nombre_salle_bain" id="nombre_salle_bain" value="1" {{ isset($particulier->critere->last()->nombre_salle_bain) && $particulier->critere->last()->nombre_salle_bain == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salle_bain">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salle_bain }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endif
                                                                @if(isset($particulier->nombre_salon))
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('nombre_salon') != null ? 'checked' : '' }} name="nombre_salon" id="nombre_salon" value="1" {{ isset($particulier->critere->last()->nombre_salon) && $particulier->critere->last()->nombre_salon == 1 ? 'checked' : '' }}>
                                                                                            <label for="nombre_salon">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ $particulier->nombre_salon }}
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('terrasses') != null ? 'checked' : '' }} name="terrasses" id="terrasses" value="1" {{ isset($particulier->critere->last()->terrasses) && $particulier->critere->last()->terrasses == 1 ? 'checked' : '' }}>
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
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('balcons') != null ? 'checked' : '' }} name="balcons" id="balcons" value="1" {{ isset($particulier->critere->last()->balcons) && $particulier->critere->last()->balcons == 1 ? 'checked' : '' }}>
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

                
                                                                @if(isset($particulier->cour) && $particulier->cour > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cour') != null ? 'checked' : '' }} name="cour" id="cour" value="1" {{ isset($particulier->critere->last()->cour) && $particulier->critere->last()->cour == 1 ? 'checked' : '' }}>
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
                                                                    
                                                                @if(isset($particulier->buanderie) && $particulier->buanderie > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('buanderie') != null ? 'checked' : '' }} name="buanderie" id="buanderie" value="1" {{ isset($particulier->critere->last()->buanderie) && $particulier->critere->last()->buanderie == 1 ? 'checked' : '' }}>
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
                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->jaccuzi) && $particulier->jaccuzi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('jaccuzi') != null ? 'checked' : '' }} name="jaccuzi" id="jaccuzi" value="1" {{ isset($particulier->critere->last()->jaccuzi) && $particulier->critere->last()->jaccuzi == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->hammam_beldi) && $particulier->hammam_beldi > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('hammam_beldi') != null ? 'checked' : '' }} name="hammam_beldi" id="hammam_beldi" value="1" {{ isset($particulier->critere->last()->hammam_beldi) && $particulier->critere->last()->hammam_beldi == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->cheminee) && $particulier->cheminee > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cheminee') != null ? 'checked' : '' }} name="cheminee" id="cheminee" value="1" {{ isset($particulier->critere->last()->cheminee) && $particulier->critere->last()->cheminee == 1 ? 'checked' : '' }}>
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

                                                                @if(isset($particulier->climatisation) && $particulier->climatisation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('climatisation') != null ? 'checked' : '' }} name="climatisation" id="climatisation" value="1" {{ isset($particulier->critere->last()->climatisation) && $particulier->critere->last()->climatisation == 1 ? 'checked' : '' }}>
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


                                                                @if(isset($particulier->chauffe_eau) && $particulier->chauffe_eau > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('chauffe_eau') != null ? 'checked' : '' }} name="chauffe_eau" id="chauffe_eau" value="1" {{ isset($particulier->critere->last()->chauffe_eau) && $particulier->critere->last()->chauffe_eau == 1 ? 'checked' : '' }}>
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



                                                                @if(isset($particulier->cave) && $particulier->cave > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check"  {{ old('cave') != null ? 'checked' : '' }} name="cave" id="cave" value="1" {{ isset($particulier->critere->last()->cave) && $particulier->critere->last()->cave == 1 ? 'checked' : '' }}>
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