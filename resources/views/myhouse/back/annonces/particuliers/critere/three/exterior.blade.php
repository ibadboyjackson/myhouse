@if(request()->get('type') === 'plateau')
    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
        <div class="ca-page-item-second-body-card-item-head">
            <div class="ca-page-item-second-body-card-item-head-img">
                <img src="http://31.220.62.192/images/residential/it.svg" alt="">
            </div>
            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.babd') }}</div>
        </div>
        <div class="ca-page-item-second-body-card-item-body">

            @if(isset($particulier->gardiennage) && $particulier->gardiennage > 0)
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
                                    {{ "gardiennage" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif
                    
            @if(isset($particulier->acceuil) && $particulier->acceuil > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('acceuil') != null ? 'checked' : '' }} name="acceuil" id="acceuil" value="1" {{ isset($particulier->critere->last()->acceuil) && $particulier->critere->last()->acceuil == 1 ? 'checked' : '' }}>
                                <label for="acceuil">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Acceuil" }}
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
                                                                        @endif

 


            @if(isset($particulier->ascenseur) && $particulier->ascenseur > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('ascenseur') != null ? 'checked' : '' }} name="ascenseur" id="ascenseur" value="1" {{ isset($particulier->critere->last()->ascenseur) && $particulier->critere->last()->ascenseur == 1 ? 'checked' : '' }}>
                                <label for="ascenseur">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Ascenseur" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif  

            @if(isset($particulier->interphone) && $particulier->interphone > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('interphone') != null ? 'checked' : '' }} name="interphone" id="interphone" value="1" {{ isset($particulier->critere->last()->interphone) && $particulier->critere->last()->interphone == 1 ? 'checked' : '' }}>
                                <label for="interphone">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Interphone" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif  


            @if(isset($particulier->monte_charge) && $particulier->monte_charge > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('monte_charge') != null ? 'checked' : '' }} name="monte_charge" id="monte_charge" value="1" {{ isset($particulier->critere->last()->monte_charge) && $particulier->critere->last()->monte_charge == 1 ? 'checked' : '' }}>
                                <label for="monte_charge">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Monte-charge" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif  




        </div>

    </div>



@else

    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
        <div class="ca-page-item-second-body-card-item-head">
            <div class="ca-page-item-second-body-card-item-head-img">
                <img src="http://31.220.62.192/images/residential/it.svg" alt="">
            </div>
            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.babd') }}</div>
        </div>
        <div class="ca-page-item-second-body-card-item-body">

            
              @if(isset($particulier->gardiennage) && $particulier->gardiennage > 0)
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
                                    {{ "gardiennage" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif
                    
            @if(isset($particulier->acceuil) && $particulier->acceuil > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('acceuil') != null ? 'checked' : '' }} name="acceuil" id="acceuil" value="1" {{ isset($particulier->critere->last()->acceuil) && $particulier->critere->last()->acceuil == 1 ? 'checked' : '' }}>
                                <label for="acceuil">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Acceuil" }}
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
                                                                        @endif

 


            @if(isset($particulier->ascenseur) && $particulier->ascenseur > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('ascenseur') != null ? 'checked' : '' }} name="ascenseur" id="ascenseur" value="1" {{ isset($particulier->critere->last()->ascenseur) && $particulier->critere->last()->ascenseur == 1 ? 'checked' : '' }}>
                                <label for="ascenseur">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Ascenseur" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif  

            @if(isset($particulier->interphone) && $particulier->interphone > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('interphone') != null ? 'checked' : '' }} name="interphone" id="interphone" value="1" {{ isset($particulier->critere->last()->interphone) && $particulier->critere->last()->interphone == 1 ? 'checked' : '' }}>
                                <label for="interphone">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Interphone" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif  


            @if(isset($particulier->monte_charge) && $particulier->monte_charge > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox"  class = "myhouse-check" {{ old('monte_charge') != null ? 'checked' : '' }} name="monte_charge" id="monte_charge" value="1" {{ isset($particulier->critere->last()->monte_charge) && $particulier->critere->last()->monte_charge == 1 ? 'checked' : '' }}>
                                <label for="monte_charge">
                                </label>
                                </div>
                            </div>
                                <div class="pc-label">
                                    {{ "Monte-charge" }}
                                </div>
                        </div>
                    </div>
                </div>
            @endif  



            @if(isset($particulier->espace_vert) && $particulier->espace_vert > 0)
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


        </div>

    </div>
@endif
