@if(request()->get('type') === 'plateau')
    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
        <div class="ca-page-item-second-body-card-item-head">
            <div class="ca-page-item-second-body-card-item-head-img">
                <img src="http://31.220.62.192/images/residential/it.svg" alt="">
            </div>
            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.babd') }}</div>
        </div>
        <div class="ca-page-item-second-body-card-item-body">

            @if(isset($professionnel->gardiennage) && $professionnel->gardiennage > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="gardiennage" id="gardiennage" value="1">
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
                    
            @if(isset($professionnel->acceuil) && $professionnel->acceuil > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="acceuil" id="acceuil" value="1">
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



                                                                        @if(isset($professionnel->place_vehicule))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                                <label for="balcons">
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

 


            @if(isset($professionnel->ascenseur) && $professionnel->ascenseur > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="ascenseur" id="ascenseur" value="1">
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

            @if(isset($professionnel->interphone) && $professionnel->interphone > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="interphone" id="interphone" value="1">
                                <label for="ascenseur">
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


            @if(isset($professionnel->monte_charge) && $professionnel->monte_charge > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="monte_charge" id="monte_charge" value="1">
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

            
              @if(isset($professionnel->gardiennage) && $professionnel->gardiennage > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="gardiennage" id="gardiennage" value="1">
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
                    
            @if(isset($professionnel->acceuil) && $professionnel->acceuil > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="acceuil" id="acceuil" value="1">
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



                                                                        @if(isset($professionnel->place_vehicule))
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox" name="place_vehicule" id="place_vehicule" value="1">
                                                                                                <label for="balcons">
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

 


            @if(isset($professionnel->ascenseur) && $professionnel->ascenseur > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="ascenseur" id="ascenseur" value="1">
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

            @if(isset($professionnel->interphone) && $professionnel->interphone > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="interphone" id="interphone" value="1">
                                <label for="ascenseur">
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


            @if(isset($professionnel->monte_charge) && $professionnel->monte_charge > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="monte_charge" id="monte_charge" value="1">
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



            @if(isset($professionnel->espace_vert) && $professionnel->espace_vert > 0)
                <div class="ca-page-item-second-body-card-item-body-item">
                    <div class="ca-page-item-second-body-card-item-body-item-box">
                        <div class="box-display">
                            <div>
                                <div class="pc-checkbox">
                                <input type="checkbox" name="espace_vert" id="espace_vert" value="1">
                                <label for="monte_charge">
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
