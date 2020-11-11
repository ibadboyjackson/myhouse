                                                                 @if (in_array($particulier->typeBien->nom, $residential))

                                                                    @if ($particulier->venteActif == 1)

                                                                        @if(isset($particulier->vente_meuble) && $particulier->vente_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="vente_meuble" id="vente_meuble" value="1" {{ isset($particulier->critere->last()->vente_meuble) && $particulier->critere->last()->vente_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="vente_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Meublé' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->vente_non_meuble) && $particulier->vente_non_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="vente_non_meuble" id="vente_non_meuble" value="1" {{ isset($particulier->critere->last()->vente_non_meuble) && $particulier->critere->last()->vente_non_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="vente_non_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Non meublé' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif

                                                                    @if ($particulier->locationActif == 1)

                                                                        @if(isset($particulier->location_meuble) && $particulier->location_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="location_meuble" id="location_meuble" value="1" {{ isset($particulier->critere->last()->location_meuble) && $particulier->critere->last()->location_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="location_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Meublée' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->location_non_meuble) && $particulier->location_non_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="location_non_meuble" id="location_non_meuble" value="1" {{ isset($particulier->critere->last()->location_non_meuble) && $particulier->critere->last()->location_non_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="location_non_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Non meublée' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif

                                                                @endif


                                                                @if (in_array($particulier->typeBien->nom, $commercial))


                                                                    @if ($particulier->venteActif == 1)

                                                                        @if(isset($particulier->vente_meuble) && $particulier->vente_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="vente_meuble" id="vente_meuble" value="1" {{ isset($particulier->critere->last()->vente_meuble) && $particulier->critere->last()->vente_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="vente_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Avec mobilier' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        @if(isset($particulier->vente_non_meuble) && $particulier->vente_non_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="vente_non_meuble" id="vente_non_meuble" value="1" {{ isset($particulier->critere->last()->vente_non_meuble) && $particulier->critere->last()->vente_non_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="vente_non_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Sans mobilier' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif

                                                                    @if ($particulier->locationActif == 1)

                                                                        @if(isset($particulier->location_meuble) && $particulier->location_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="location_meuble" id="location_meuble" value="1" {{ isset($particulier->critere->last()->location_meuble) && $particulier->critere->last()->location_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="location_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Avec mobilier' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif


                                                                        @if(isset($particulier->location_non_meuble) && $particulier->location_non_meuble > 0)
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                    <div class="box-display">
                                                                                        <div>
                                                                                            <div class="pc-checkbox">
                                                                                                <input type="checkbox"  class = "myhouse-check" name="location_non_meuble" id="location_non_meuble" value="1" {{ isset($particulier->critere->last()->location_non_meuble) && $particulier->critere->last()->location_non_meuble == 1 ? 'checked' : '' }}>
                                                                                                <label for="location_non_meuble">
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="pc-label">
                                                                                            {{ 'Sans mobilier' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                    @endif

                                                                @endif

                                                                    
                                                                    


                                                        


                                                                    @if(isset($particulier->colocation) && $particulier->colocation > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" name="colocation" id="colocation" value="1" {{ isset($particulier->critere->last()->colocation) && $particulier->critere->last()->colocation == 1 ? 'checked' : '' }}>
                                                                                            <label for="colocation">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Colocation acceptée' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if(isset($particulier->location_etudiant) && $particulier->location_etudiant > 0)
                                                                        <div class="ca-page-item-second-body-card-item-body-item">
                                                                            <div class="ca-page-item-second-body-card-item-body-item-box">
                                                                                <div class="box-display">
                                                                                    <div>
                                                                                        <div class="pc-checkbox">
                                                                                            <input type="checkbox"  class = "myhouse-check" name="location_etudiant" id="location_etudiant" value="1" {{ isset($particulier->critere->last()->location_etudiant) && $particulier->critere->last()->location_etudiant == 1 ? 'checked' : '' }}>
                                                                                            <label for="location_etudiant">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pc-label">
                                                                                        {{ 'Etudiant accepté(e)' }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif