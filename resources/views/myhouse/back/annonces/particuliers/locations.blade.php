                                                                    @if (in_array(request()->get('type'), $residential)) 


                                                                        @if ($particulier->venteActif == 1) 

                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.xew') }}
                                                                                    </div>
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                        <input type="checkbox" name="vente_meuble" id="#" class="ios" value="1" {{ $particulier->vente_meuble == 1 ? 'checked' : '' }} {{ old('vente_meuble') != null ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.xey') }}
                                                                                    </div>
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                        <input type="checkbox" name="vente_non_meuble" id="#" class="ios" value="1" {{ $particulier->vente_non_meuble == 1 ? 'checked' : '' }} {{ old('vente_non_meuble') != null ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        @endif

    
                                                                        @if ($particulier->prix_mois != null) 

                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.xev') }}
                                                                                    </div>
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                        <input type="checkbox" name="location_meuble" id="#" class="ios" value="1" {{ $particulier->location_meuble == 1 ? 'checked' : '' }} {{ old('location_meuble') != null ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.xei') }}
                                                                                    </div>
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                        <input type="checkbox" name="location_non_meuble" id="#" class="ios" value="1" {{ $particulier->location_non_meuble == 1 ? 'checked' : '' }} {{ old('location_non_meuble') != null ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.xel') }}
                                                                                    </div>
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                        <input type="checkbox" name="location_etudiant" id="#" class="ios" value="1" {{ $particulier->location_etudiant == 1 ? 'checked' : '' }} {{ old('location_etudiant') != null ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                        {{ __('myhouse/back/annonces/particulier/description.xem') }}
                                                                                    </div>
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                        <input type="checkbox" name="colocation" id="#" class="ios" value="1" {{ $particulier->colocation == 1 ? 'checked' : '' }} {{ old('colocation') != null ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        @endif


                                                                    @elseif (in_array(request()->get('type'), $commercial))

                                                                        @if ($particulier->venteActif == 1) 

                                                                            
                                                                            <div class="pc_yt">

                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.xbw') }}
                                                                                        </div>
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                            <input type="checkbox" name="vente_meuble" id="#" class="ios" value="1" {{ $particulier->vente_meuble == 1 ? 'checked' : '' }} {{ old('vente_meuble') != null ? 'checked' : '' }}>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                            <div class="pc_yt">

                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.xcw') }}
                                                                                        </div>
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                            <input type="checkbox" name="vente_non_meuble" id="#" class="ios" value="1" {{ $particulier->vente_non_meuble == 1 ? 'checked' : '' }} {{ old('vente_non_meuble') != null ? 'checked' : '' }}>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        @endif


                                                                        @if ($particulier->prix_mois != null) 


                                                                            <div class="pc_yt">

                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.xez') }}
                                                                                        </div>
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                            <input type="checkbox" name="location_meuble" id="#" class="ios" value="1" {{ $particulier->location_meuble == 1 ? 'checked' : '' }} {{ old('location_meuble') != null ? 'checked' : '' }}>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                            <div class="pc_yt">


                                                                                <div class="ca-page-item-second-body-card-item-body-item">
                                                                                    <div class="ca-page-item-second-body-card-item-body-item-boxes">
                                                                                            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                                                                                            {{ __('myhouse/back/annonces/particulier/description.xaw') }}
                                                                                        </div>
                                                                                        <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                                                                                            <input type="checkbox" name="location_non_meuble" id="#" class="ios" value="1" {{ $particulier->location_non_meuble == 1 ? 'checked' : '' }} {{ old('location_non_meuble') != null ? 'checked' : '' }}>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>




                                                                        @endif

                                                                    @endif