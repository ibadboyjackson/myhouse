

@if (request()->get('page') === "particuliers")

    @if (request()->get('transaction') === "achat" && request()->get('category') === "residentiel")      
            


    <div class="temps-item">
        <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
            <span class="dropdown-toggle myHouse-caret"></span>
                <span>{{ __('myhouse/header.ax') }}</span>
                    <span class="critere-dropdown text-left" id="critere-dropdown">
                        <span class="critere-around">
                            <span class="critere-first d-inline-flex">
                                            
                                <span class="critere-item c1">


                                            <span class="img-critere">
                                                    <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide">
                                                        <input id="input-range-check" name="prix" onchange="this.form.submit()" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                    </span>
                                                    <span class="rest-text">
                                                        {{ __('myhouse/header.ay') }}
                                                    </span>
                                                </span>
                                            </span>

                                            <span class="critere-item c3">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide">
                                                        <input id="input-range-check-2" onchange="this.form.submit()" name="surface" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                    </span>
                                                    <span class="rest-text-3">{{ __('myhouse/header.aab') }}</span>
                                                </span>
                                            </span>
                                            
                                            <span class="critere-item c2">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slided">
                                                        
                                                        <div class="pc-checkbox">
                                                            
                                                            <div class="without-gomez">
                                                                <input type="checkbox" onchange="this.form.submit()" name="location_meuble" id="location_meuble" value="1">
                                                            
                                                                    <label for="location_meuble">
                                                                        {{ __('myhouse/header.az') }}
                                                                    </label>
                                                            </div>

                                                        </div>

                                                    </span>
                                                    <span class="rest-texte">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" onchange="this.form.submit()" name="location_nom_meuble" id="location_nom_meuble" value="1">
                                                            <label for="location_nom_meuble">
                                                                {{ __('myhouse/header.aaa') }}
                                                            </label>
                                                        </div>
                                                    </span>
                                                </span>
                                            </span>
                                            


                                        </span>


                                        <span class="critere-second mt-5 d-flex justify-content-around">
                                            
                                            
                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">

                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" onchange="this.form.submit()" name="appart_type_un" id="appart_type_un" value="Sur plan">
                                                            <label for="appart_type_un">
                                                            </label>
                                                        </div>

                                                    </span>
                                                    <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                </span>
                                            </span>




                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" onchange="this.form.submit()" name="appart_type_deux" id="appart_type_deux" value="En construction">
                                                            <label for="appart_type_deux">
                                                            </label>
                                                        </div>
                                                    </span>
                                                    <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                </span>
                                            </span>




                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" onchange="this.form.submit()" name="appart_type_trois" id="appart_type_trois" value="Livraison immédiate">
                                                            <label for="appart_type_trois">
                                                            </label>
                                                        </div>
                                                    </span>
                                                    <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                </span>
                                            </span>



                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" onchange="this.form.submit()" name="appart_type_quatre" id="appart_type_quatre" value="2eme main">
                                                            <label for="appart_type_quatre">
                                                            </label>
                                                        </div>
                                                    </span>
                                                    <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aau') }}</span>
                                                </span>
                                            </span>



                                        </span>
                                    </span>
                                </span>
                        </div>
    </div>


    @elseif(request()->get('transaction') === "achat" && request()->get('category') === "commercial") 

        <div class="temps-item">
            <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                <span class="dropdown-toggle myHouse-caret"></span>
                    <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown">
                            <span class="critere-around">
                                <span class="critere-first d-inline-flex">
                                                
                          
                         
                                                
                                                <span class="critere-item c2">
                                                    <span class="img-critere">
                                                        <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                    </span>
                                                    <span class="critere-rest">
                                                        <span class="rest-slided">
                                                            
                                                            <div class="pc-checkbox">
                                                                
                                                                <div class="without-gomez">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="location_meuble" id="location_meuble" value="1">
                                                                
                                                                        <label for="location_meuble">
                                                                            {{ __('myhouse/header.az') }}
                                                                        </label>
                                                                </div>

                                                            </div>

                                                        </span>
                                                        <span class="rest-texte">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" onchange="this.form.submit()" name="nom_meuble" id="nom_meuble" value="1">
                                                                <label for="nom_meuble">
                                                                    {{ __('myhouse/header.aaa') }}
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </span>
                                                </span>
                                                


                                            </span>


                                            <span class="critere-second mt-5 d-flex justify-content-around">
                                                
                                                
                                                <span class="critere-item">
                                                    <span class="img-critere">
                                                        <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                    </span>
                                                    <span class="critere-rest">
                                                        <span class="rest-slide-2">

                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" onchange="this.form.submit()" name="appart_type_un" id="appart_type_un" value="Sur plan">
                                                                <label for="appart_type_un">
                                                                </label>
                                                            </div>

                                                        </span>
                                                        <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                    </span>
                                                </span>




                                                <span class="critere-item">
                                                    <span class="img-critere">
                                                        <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                    </span>
                                                    <span class="critere-rest">
                                                        <span class="rest-slide-2">
                                                            <div class="pc-checkbox"> 
                                                                <input type="checkbox" onchange="this.form.submit()" name="appart_type_deux" id="appart_type_deux" value="En construction">
                                                                <label for="appart_type_deux">
                                                                </label>
                                                            </div>
                                                        </span>
                                                        <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                    </span>
                                                </span>




                                                <span class="critere-item">
                                                    <span class="img-critere">
                                                        <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                    </span>
                                                    <span class="critere-rest">
                                                        <span class="rest-slide-2">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" onchange="this.form.submit()" name="appart_type_trois" id="appart_type_trois" value="Livraison immédiate">
                                                                <label for="appart_type_trois">
                                                                </label>
                                                            </div>
                                                        </span>
                                                        <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                    </span>
                                                </span>



                                                <span class="critere-item">
                                                    <span class="img-critere">
                                                        <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                                    </span>
                                                    <span class="critere-rest">
                                                        <span class="rest-slide-2">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" onchange="this.form.submit()" name="appart_type_quatre" id="appart_type_quatre" value="2eme main">
                                                                <label for="appart_type_quatre">
                                                                </label>
                                                            </div>
                                                        </span>
                                                        <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aau') }}</span>
                                                    </span>
                                                </span>



                                            </span>
                                        </span>
                                    </span>
                            </div>
        </div>

    @elseif(request()->get('transaction') === "achat" && request()->get('category') === "terrain")      
      <div class="temps-item">
            <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                <span class="dropdown-toggle myHouse-caret"></span>
                    <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 465px; margin-left: -152px;">
                            <div class="p-critere">
                                
                                <div class="pp-critere">
                                     <div class="pp-critere">
                                           <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                     </div>
                                     <div class="pp-critere" style="padding-left: 10px;">
                                        {{ __('myhouse/header.aav') }}
                                     </div>
                                </div>

                                <div class="pp-critere">
                                     <div class="pp-critere" style="padding-right: 7px;">
                                        {{ __('myhouse/header.aaw') }}
                                     </div>
                                     <div class="pp-critere">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" onchange="this.form.submit()" name="tous" id="tous" value="tous">
                                            <label for="tous">
                                            </label>
                                         </div>
                                     </div>
                                </div>


                            </div>

                            <div class="p-checker">

                                <div class="p-checker-item">

                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-17" value="Sous-sol">
                                            <label for="tous-17">
                                                {{ __('myhouse/header.aaaa') }}
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-18" value="Plain-pied">
                                            <label for="tous-18">
                                                {{ __('myhouse/header.aaab') }}
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-1" value="R + 13">
                                            <label for="tous-1">
                                                 R + 1 
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-2" value="R + 2">
                                            <label for="tous-2">
                                                R + 2
                                            </label>
                                         </div>
                                    </div>

                                </div>
                                <div class="p-checker-item" style="margin-left: 22px;">

                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-3" value="R + 3">
                                            <label for="tous-3">
                                                R + 3
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-4" value="R + 4">
                                            <label for="tous-4">
                                                R + 4
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-5" value="R + 5">
                                            <label for="tous-5">
                                                 R + 5 
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-6" value="R + 6">
                                            <label for="tous-6">
                                                R + 6
                                            </label>
                                         </div>
                                    </div>

                                </div> 

                                <div class="p-checker-item" style="margin-left: 20px;">

                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-7" value="R + 7">
                                            <label for="tous-7">
                                                R + 7
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-8" value="R + 8">
                                            <label for="tous-8">
                                                R + 8
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-9" value="R + 9">
                                            <label for="tous-9">
                                                 R + 9 
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable"  id="tous-10" value="R + 10">
                                            <label for="tous-10">
                                                R + 10
                                            </label>
                                         </div>
                                    </div>

                                </div>  

                                <div class="p-checker-item" style="margin-left: 24px;">

                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-11" value="R + 11">
                                            <label for="tous-11">
                                                R + 11
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-12" value="R + 12">
                                            <label for="tous-12">
                                                R + 12 
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-13" value="R + 13">
                                            <label for="tous-13">
                                                 R + 13
                                            </label>
                                         </div>
                                    </div>


                                    <div class="p-checker-item-child">
                                         <div class="pc-checkbox" style="margin-top: -12px !important;">
                                            <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-14" value="Plus">
                                            <label for="tous-14">
                                                {{ __('myhouse/header.aaac') }}
                                            </label>
                                         </div>
                                    </div>

                                </div>  

                            </div>


                        </span>
                    <span>
                <span>        
            </div>
        </div>

    @endif






























    @if (request()->get('transaction') === "location" && request()->get('category') === "residentiel")      
         <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                        
                                        <span class="critere-item c1">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check" onchange="this.form.submit()" name="prix" onchange="this.form.submit()" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text">
                                                    {{ __('myhouse/header.ay') }}
                                                </span>
                                            </span>
                                        </span>
                                        
                                        <span class="critere-item c2">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                      
                                                      <div class="pc-checkbox">
                                                        
                                                        <div class="without-gomez">
                                                            <input type="checkbox" onchange="this.form.submit()" name="location_meuble" id="location_meuble" value="1">
                                                        
                                                                <label for="location_meuble">
                                                                    {{ __('myhouse/header.az') }}
                                                                </label>
                                                        </div>

                                                      </div>

                                                </span>
                                                <span class="rest-texte">
                                                    <div class="pc-checkbox">
                                                        <input type="checkbox" onchange="this.form.submit()" name="nom_meuble" id="nom_meuble" value="1">
                                                        <label for="nom_meuble">
                                                            {{ __('myhouse/header.aaa') }}
                                                        </label>
                                                    </div>
                                                </span>
                                            </span>
                                        </span>
                                        
                                        <span class="critere-item c3">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check-2" onchange="this.form.submit()" name="surface" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text-3">{{ __('myhouse/header.aab') }}</span>
                                            </span>
                                        </span>

                                    </span>


                                    <span class="critere-second mt-5 d-flex justify-content-around">
                                        
                                        
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">

                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" onchange="this.form.submit()" name="location_longue_duree" id="location_longue_duree" value="1">
                                                        <label for="location_longue_duree">
                                                        </label>
                                                    </div>

                                                </span>
                                                <span class="rest-text-2 a1">{{ __('myhouse/header.aac') }}</span>

                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_courte_duree" onchange="this.form.submit()" id="location_courte_duree" value="1">
                                                        <label for="location_courte_duree">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a2">{{ __('myhouse/header.aad') }}</span>
                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="colocation" onchange="this.form.submit()" id="colocation" value="1">
                                                        <label for="colocation">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a3">{{ __('myhouse/header.aae') }}</span>
                                            </span>
                                        </span>



                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_etudiant" onchange="this.form.submit()" id="location_etudiant" value="1">
                                                        <label for="location_etudiant">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aaf') }}</span>
                                            </span>
                                        </span>



                                    </span>
                                </span>
                            </span>
                    </div>
                </div>



    @elseif(request()->get('transaction') === "location" && request()->get('category') === "commercial") 
         <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 558px; height: 171px;  margin-left: -208px;">
                                <span class="critere-around">
      

                                    <span class="critere-second mt-5 d-flex justify-content-around">
                                        
                                        
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">

                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_longue_duree" onchange="this.form.submit()" id="location_longue_duree" value="1">
                                                        <label for="location_longue_duree">
                                                        </label>
                                                    </div>

                                                </span>
                                                <span class="rest-text-2 a1">{{ __('myhouse/header.aac') }}</span>

                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_courte_duree" onchange="this.form.submit()" id="location_courte_duree" value="1">
                                                        <label for="location_courte_duree">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a2">{{ __('myhouse/header.aad') }}</span>
                                            </span>
                                        </span>


                                        <span class="critere-item">
                                            <span class="img-critere" style="margin-right: 74px;">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                      
                                                      <div class="pc-checkbox">
                                                        
                                                        <div class="without-gomez" style="margin-left: -77px !important">
                                                            <input type="checkbox" name="location_meuble" onchange="this.form.submit()" id="location_meuble" value="1">
                                                        
                                                                <label for="location_meuble">
                                                                    {{ __('myhouse/header.az') }}
                                                                </label>
                                                        </div>

                                                      </div>

                                                </span>
                                                <span class="rest-texte" style="margin-left: -58px">
                                                    <div class="pc-checkbox">
                                                        <input type="checkbox" name="nom_meuble" onchange="this.form.submit()" id="nom_meuble" value="1">
                                                        <label for="nom_meuble">
                                                            {{ __('myhouse/header.aaa') }}
                                                        </label>
                                                    </div>
                                                </span>
                                            </span>
                                        </span>


                                    </span>
                                </span>
                            </span>
                    </div>
                </div>
    @elseif(request()->get('transaction') === "location" && request()->get('category') === "terrain") 
         <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 410px !important; margin-left: -120px !important; height: 178px !important;">
                                <span class="critere-around" style="margin: 15px 20px !important;">
      

                                    <span class="critere-second mt-5 d-flex justify-content-around">
                                        
                                        
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">

                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_longue_duree" onchange="this.form.submit()" id="location_longue_duree" value="1">
                                                        <label for="location_longue_duree">
                                                        </label>
                                                    </div>

                                                </span>
                                                <span class="rest-text-2 a1">{{ __('myhouse/header.aac') }}</span>

                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_courte_duree" onchange="this.form.submit()" id="location_courte_duree" value="1">
                                                        <label for="location_courte_duree">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a2">{{ __('myhouse/header.aad') }}</span>
                                            </span>
                                        </span>


                                    </span>
                                </span>
                            </span>
                    </div>
                </div>
    @else

    @endif



        @if (request()->get('transaction') === "echange" && request()->get('category') === "residentiel")      
            <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 789px; margin-left: -304px;">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                        


                                        <span class="critere-item " style="margin-left: -7px;">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                      
                                                      <div class="pc-checkbox">
                                                        
                                                        <div class="without-gomez">
                                                            <input type="checkbox" onchange="this.form.submit()" name="echange_definif" id="echange_definif" value="1">
                                                        
                                                                <label for="echange_definif">
                                                                    {{ __('myhouse/header.aaad') }}
                                                                </label>
                                                        </div>

                                                      </div>

                                                </span>
                                                <span class="rest-texte">
                                                    <div class="pc-checkbox">
                                                        <input type="checkbox" name="echange_provisoire" onchange="this.form.submit()" id="echange_provisoire" value="1">
                                                        <label for="echange_provisoire">
                                                            {{ __('myhouse/header.aaae') }}
                                                        </label>
                                                    </div>
                                                </span>
                                            </span>
                                        </span>



                                        <span class="critere-item c1" style="padding-left: 165px">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check" name="prix" onchange="this.form.submit()" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text">
                                                    {{ __('myhouse/header.ay') }}
                                                </span>
                                            </span>
                                        </span>
                                        

                                        
                                        <span class="critere-item c3" style="padding-left: 0px;">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check-2" onchange="this.form.submit()" name="surface" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text-3">{{ __('myhouse/header.aab') }}</span>
                                            </span>
                                        </span>



                                        <span class="critere-item" style="margin-left: 156px;">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                      
                                                      <div class="pc-checkbox">
                                                        
                                                        <div class="without-gomez">
                                                            <input type="checkbox" name="location_meuble" onchange="this.form.submit()" id="location_meuble" value="1">
                                                        
                                                                <label for="location_meuble">
                                                                    {{ __('myhouse/header.az') }}
                                                                </label>
                                                        </div>

                                                      </div>

                                                </span>
                                                <span class="rest-texte">
                                                    <div class="pc-checkbox">
                                                        <input type="checkbox" name="nom_meuble" onchange="this.form.submit()" id="nom_meuble" value="1">
                                                        <label for="nom_meuble">
                                                            {{ __('myhouse/header.aaa') }}
                                                        </label>
                                                    </div>
                                                </span>
                                            </span>
                                        </span>

                                    </span>








                                        <span class="critere-second mt-5 d-flex justify-content-around">
                                            
                                            
                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">

                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" name="appart_type_un" onchange="this.form.submit()" id="appart_type_un" value="Sur plan">
                                                            <label for="appart_type_un">
                                                            </label>
                                                        </div>

                                                    </span>
                                                    <span class="rest-text-2 a1" style="margin-left: -42px !important;">{{ __('myhouse/header.aar') }}</span>

                                                </span>
                                            </span>




                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" name="appart_type_deux" onchange="this.form.submit()" id="appart_type_deux" value="En construction">
                                                            <label for="appart_type_deux">
                                                            </label>
                                                        </div>
                                                    </span>
                                                    <span class="rest-text-2 a2" style="margin-left: -59px !important;">{{ __('myhouse/header.aas') }}</span>
                                                </span>
                                            </span>




                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" name="appart_type_trois" onchange="this.form.submit()" id="appart_type_trois" value="Livraison immédiate">
                                                            <label for="appart_type_trois">
                                                            </label>
                                                        </div>
                                                    </span>
                                                    <span class="rest-text-2 a3" style="margin-left: -63px !important;">{{ __('myhouse/header.aat') }}</span>
                                                </span>
                                            </span>



                                            <span class="critere-item">
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slide-2">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" name="appart_type_quatre" onchange="this.form.submit()" id="appart_type_quatre" value="2eme main">
                                                            <label for="appart_type_quatre">
                                                            </label>
                                                        </div>
                                                    </span>
                                                    <span class="rest-text-2 text-capitalize a4" style="margin-left: -39px !important;">{{ __('myhouse/header.aau') }}</span>
                                                </span>
                                            </span>



                                        </span>




                                </span>
                            </span>
                    </div>
                </div>
        @elseif(request()->get('transaction') === "echange" && request()->get('category') === "commercial") 
            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex" style="margin-left: 111px">
                                                    
                            
                            


                                            <span class="critere-item " >
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slided">
                                                        
                                                        <div class="pc-checkbox">
                                                            
                                                            <div class="without-gomez">
                                                                <input type="checkbox" name="echange_definif" onchange="this.form.submit()" id="echange_definif" value="1">
                                                            
                                                                    <label for="echange_definif">
                                                                        {{ __('myhouse/header.aaad') }}
                                                                    </label>
                                                            </div>

                                                        </div>

                                                    </span>
                                                    <span class="rest-texte">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" name="echange_provisoire" onchange="this.form.submit()" id="echange_provisoire" value="1">
                                                            <label for="echange_provisoire">
                                                                {{ __('myhouse/header.aaae') }}
                                                            </label>
                                                        </div>
                                                    </span>
                                                </span>
                                            </span>



                                                    
                                                    <span class="critere-item c2">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slided">
                                                                
                                                                <div class="pc-checkbox">
                                                                    
                                                                    <div class="without-gomez">
                                                                        <input type="checkbox" name="mobilier" onchange="this.form.submit()" id="mobilier" value="1">
                                                                    
                                                                            <label for="mobilier">
                                                                                {{ __('myhouse/header.aaaf') }}
                                                                            </label>
                                                                    </div>

                                                                </div>

                                                            </span>
                                                            <span class="rest-texte">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="sans-mobilier" onchange="this.form.submit()" id="sans-mobilier" value="1">
                                                                    <label for="sans-mobilier">
                                                                        {{ __('myhouse/header.aaag') }}
                                                                    </label>
                                                                </div>
                                                            </span>
                                                        </span>
                                                    </span> 
                                                    


                                                </span>


                                                <span class="critere-second mt-5 d-flex justify-content-around">
                                                    
                                                    
                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">

                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_un" onchange="this.form.submit()" id="appart_type_un" value="Sur plan">
                                                                    <label for="appart_type_un">
                                                                    </label>
                                                                </div>

                                                            </span>
                                                            <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_deux" onchange="this.form.submit()" id="appart_type_deux" value="En construction">
                                                                    <label for="appart_type_deux">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_trois" onchange="this.form.submit()" id="appart_type_trois" value="Livraison immédiate">
                                                                    <label for="appart_type_trois">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                        </span>
                                                    </span>



                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_quatre" onchange="this.form.submit()" id="appart_type_quatre" value="2eme main">
                                                                    <label for="appart_type_quatre">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aau') }}</span>
                                                        </span>
                                                    </span>



                                                </span>
                                            </span>
                                        </span>
                                </div>
            </div>

        @elseif(request()->get('transaction') === "echange" && request()->get('category') === "terrain") 

            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 648px;">


                                <div class="sp-sprite">

                                    <div class="sprite-left">
                                    
                                            <span class="critere-item " >
                                                <span class="img-critere">
                                                    <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                </span>
                                                <span class="critere-rest">
                                                    <span class="rest-slided">
                                                        
                                                        <div class="pc-checkbox">
                                                            
                                                            <div class="without-gomez">
                                                                <input type="checkbox" name="echange_definif" onchange="this.form.submit()" id="echange_definif" value="1">
                                                            
                                                                    <label for="echange_definif">
                                                                        {{ __('myhouse/header.aaad') }}
                                                                    </label>
                                                            </div>

                                                        </div>

                                                    </span>
                                                    <span class="rest-texte">
                                                        <div class="pc-checkbox">
                                                            <input type="checkbox" name="echange_provisoire" onchange="this.form.submit()" id="echange_provisoire" value="1">
                                                            <label for="echange_provisoire">
                                                                {{ __('myhouse/header.aaae') }}
                                                            </label>
                                                        </div>
                                                    </span>
                                                </span>
                                            </span>
                                    
                                    </div>
                                    <div class="sprite-right">
                                    
                                        <div class="p-critere">
                                            
                                            <div class="pp-critere">
                                                <div class="pp-critere">
                                                    <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                </div>
                                                <div class="pp-critere" style="padding-left: 10px;">
                                                    {{ __('myhouse/header.aav') }}
                                                </div>
                                            </div>

                                            <div class="pp-critere">
                                                <div class="pp-critere" style="padding-right: 7px;">
                                                    {{ __('myhouse/header.aaw') }}
                                                </div>
                                                <div class="pp-critere">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()"  id="tous" value="tous">
                                                        <label for="tous">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="p-checker">

                                            <div class="p-checker-item">

                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-17" value="Sous-sol">
                                                        <label for="tous-17">
                                                            {{ __('myhouse/header.aaaa') }}
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-18" value="Plain-pied">
                                                        <label for="tous-18">
                                                            {{ __('myhouse/header.aaab') }}
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-1" value="R + 13">
                                                        <label for="tous-1">
                                                            R + 1 
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-2" value="R + 2">
                                                        <label for="tous-2">
                                                            R + 2
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="p-checker-item" style="margin-left: 22px;">

                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-3" value="R + 3">
                                                        <label for="tous-3">
                                                            R + 3
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-4" value="R + 4">
                                                        <label for="tous-4">
                                                            R + 4
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-5" value="R + 5">
                                                        <label for="tous-5">
                                                            R + 5 
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-6" value="R + 6">
                                                        <label for="tous-6">
                                                            R + 6
                                                        </label>
                                                    </div>
                                                </div>

                                            </div> 

                                            <div class="p-checker-item" style="margin-left: 20px;">

                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-7" value="R + 7">
                                                        <label for="tous-7">
                                                            R + 7
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-8" value="R + 8">
                                                        <label for="tous-8">
                                                            R + 8
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-9" value="R + 9">
                                                        <label for="tous-9">
                                                            R + 9 
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable"  id="tous-10" value="R + 10">
                                                        <label for="tous-10">
                                                            R + 10
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>  

                                            <div class="p-checker-item" style="margin-left: 24px;">

                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-11" value="R + 11">
                                                        <label for="tous-11">
                                                            R + 11
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-12" value="R + 12">
                                                        <label for="tous-12">
                                                            R + 12 
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-13" value="R + 13">
                                                        <label for="tous-13">
                                                            R + 13
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="p-checker-item-child">
                                                    <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                        <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-14" value="Plus">
                                                        <label for="tous-14">
                                                            {{ __('myhouse/header.aaac') }}
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>  

                                        </div>

                                    
                                    </div>

                                </div>


                            </span>
                        </span>
                    </span>    
                        
                </div>
            </div>

        @elseif (is_null(request()->get('category')) || is_null(request()->get('transaction')) )


                    <div class="temps-item">
                        <div class="dropdown-menus rounded-pill text-center t"  style="cursor: not-allowed">
                            <span class="dropdown-toggle myHouse-caret"></span>
                            <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                    <span class="critere-around">
                

                                    </span>
                            </span>
                        </div>
                    </div>

        @endif








@elseif (request()->get('page') === "professionnels")

       
        @if (request()->get('transaction') === "achat" && request()->get('category') === "residentiel")


            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                                    
                                        <span class="critere-item c1">


                                                    <span class="img-critere">
                                                            <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide">
                                                                <input id="input-range-check"  name="prix" onchange="this.form.submit()" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                            </span>
                                                            <span class="rest-text">
                                                                {{ __('myhouse/header.ay') }}
                                                            </span>
                                                        </span>
                                                    </span>

                                                    <span class="critere-item c3">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide">
                                                                <input id="input-range-check-2"  onchange="this.form.submit()" name="surface" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                            </span>
                                                            <span class="rest-text-3">{{ __('myhouse/header.aab') }}</span>
                                                        </span>
                                                    </span>
                                                    
                                                    <span class="critere-item c2">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slided">
                                                                
                                                                <div class="pc-checkbox">
                                                                    
                                                                    <div class="without-gomez">
                                                                        <input type="checkbox" onchange="this.form.submit()" name="location_meuble" id="location_meuble" value="1">
                                                                    
                                                                            <label for="location_meuble">
                                                                                {{ __('myhouse/header.az') }}
                                                                            </label>
                                                                    </div>

                                                                </div>

                                                            </span>
                                                            <span class="rest-texte">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="nom_meuble" id="nom_meuble" value="1">
                                                                    <label for="nom_meuble">
                                                                        {{ __('myhouse/header.aaa') }}
                                                                    </label>
                                                                </div>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    


                                                </span>


                                                <span class="critere-second mt-5 d-flex justify-content-around">
                                                    
                                                    
                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">

                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_un" id="appart_type_un" value="Sur plan">
                                                                    <label for="appart_type_un">
                                                                    </label>
                                                                </div>

                                                            </span>
                                                            <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_deux" id="appart_type_deux" value="En construction">
                                                                    <label for="appart_type_deux">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_trois" id="appart_type_trois" value="Livraison immédiate">
                                                                    <label for="appart_type_trois">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                        </span>
                                                    </span>



                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_quatre" id="appart_type_quatre" value="2eme main">
                                                                    <label for="appart_type_quatre">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aau') }}</span>
                                                        </span>
                                                    </span>



                                                </span>
                                            </span>
                                        </span>
                                </div>
            </div>


        @elseif(request()->get('transaction') === "achat" && request()->get('category') === "commercial")


            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                                    
                            
                            
                                                    
                                                    <span class="critere-item c2">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slided">
                                                                
                                                                <div class="pc-checkbox">
                                                                    
                                                                    <div class="without-gomez">
                                                                        <input type="checkbox" onchange="this.form.submit()" name="location_meuble" id="location_meuble" value="1">
                                                                    
                                                                            <label for="location_meuble">
                                                                                {{ __('myhouse/header.az') }}
                                                                            </label>
                                                                    </div>

                                                                </div>

                                                            </span>
                                                            <span class="rest-texte">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="nom_meuble" id="nom_meuble" value="1">
                                                                    <label for="nom_meuble">
                                                                        {{ __('myhouse/header.aaa') }}
                                                                    </label>
                                                                </div>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    


                                                </span>


                                                <span class="critere-second mt-5 d-flex justify-content-around">
                                                    
                                                    
                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">

                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_un" id="appart_type_un" value="Sur plan">
                                                                    <label for="appart_type_un">
                                                                    </label>
                                                                </div>

                                                            </span>
                                                            <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_deux" id="appart_type_deux" value="En construction">
                                                                    <label for="appart_type_deux">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_trois" id="appart_type_trois" value="Livraison immédiate">
                                                                    <label for="appart_type_trois">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                        </span>
                                                    </span>



                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_quatre" id="appart_type_quatre" value="2eme main">
                                                                    <label for="appart_type_quatre">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aau') }}</span>
                                                        </span>
                                                    </span>



                                                </span>
                                            </span>
                                        </span>
                                </div>
            </div>


        @elseif(request()->get('transaction') === "achat" && request()->get('category') === "terrain")

            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 465px; margin-left: -152px;">
                                <div class="p-critere">
                                    
                                    <div class="pp-critere">
                                        <div class="pp-critere">
                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                        </div>
                                        <div class="pp-critere" style="padding-left: 10px;">
                                            {{ __('myhouse/header.aav') }}
                                        </div>
                                    </div>

                                    <div class="pp-critere">
                                        <div class="pp-critere" style="padding-right: 7px;">
                                            {{ __('myhouse/header.aaw') }}
                                        </div>
                                        <div class="pp-critere">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" id="tous" value="tous">
                                                <label for="tous">
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="p-checker">

                                    <div class="p-checker-item">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-17" value="Sous-sol">
                                                <label for="tous-17">
                                                    {{ __('myhouse/header.aaaa') }}
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-18" value="Plain-pied">
                                                <label for="tous-18">
                                                    {{ __('myhouse/header.aaab') }}
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-1" value="R + 13">
                                                <label for="tous-1">
                                                    R + 1 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-2" value="R + 2">
                                                <label for="tous-2">
                                                    R + 2
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="p-checker-item" style="margin-left: 22px;">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-3" value="R + 3">
                                                <label for="tous-3">
                                                    R + 3
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-4" value="R + 4">
                                                <label for="tous-4">
                                                    R + 4
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-5" value="R + 5">
                                                <label for="tous-5">
                                                    R + 5 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-6" value="R + 6">
                                                <label for="tous-6">
                                                    R + 6
                                                </label>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="p-checker-item" style="margin-left: 20px;">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" class="checkable" name="tous" id="tous-7" value="R + 7">
                                                <label for="tous-7">
                                                    R + 7
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-8" value="R + 8">
                                                <label for="tous-8">
                                                    R + 8
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-9" value="R + 9">
                                                <label for="tous-9">
                                                    R + 9 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable"  id="tous-10" value="R + 10">
                                                <label for="tous-10">
                                                    R + 10
                                                </label>
                                            </div>
                                        </div>

                                    </div>  

                                    <div class="p-checker-item" style="margin-left: 24px;">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-11" value="R + 11">
                                                <label for="tous-11">
                                                    R + 11
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-12" value="R + 12">
                                                <label for="tous-12">
                                                    R + 12 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-13" value="R + 13">
                                                <label for="tous-13">
                                                    R + 13
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" class="checkable" id="tous-14" value="Plus">
                                                <label for="tous-14">
                                                    {{ __('myhouse/header.aaac') }}
                                                </label>
                                            </div>
                                        </div>

                                    </div>  

                                </div>


                            </span>
                        <span>
                    <span>        
                </div>
            </div>



        @elseif (request()->get('transaction') === "location" && request()->get('category') === "residentiel")

                <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                        
                                        <span class="critere-item c1">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check" name="prix" onchange="this.form.submit()" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text">
                                                    {{ __('myhouse/header.ay') }}
                                                </span>
                                            </span>
                                        </span>
                                        
                                        <span class="critere-item c2">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                      
                                                      <div class="pc-checkbox">
                                                        
                                                        <div class="without-gomez">
                                                            <input type="checkbox" onchange="this.form.submit()" name="location_meuble" id="location_meuble" value="1">
                                                        
                                                                <label for="location_meuble">
                                                                    {{ __('myhouse/header.az') }}
                                                                </label>
                                                        </div>

                                                      </div>

                                                </span>
                                                <span class="rest-texte">
                                                    <div class="pc-checkbox">
                                                        <input type="checkbox" name="nom_meuble" onchange="this.form.submit()" id="nom_meuble" value="1">
                                                        <label for="nom_meuble">
                                                            {{ __('myhouse/header.aaa') }}
                                                        </label>
                                                    </div>
                                                </span>
                                            </span>
                                        </span>
                                        
                                        <span class="critere-item c3">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide">
                                                    <input id="input-range-check-2" onchange="this.form.submit()" name="surface" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                </span>
                                                <span class="rest-text-3">{{ __('myhouse/header.aab') }}</span>
                                            </span>
                                        </span>

                                    </span>


                                    <span class="critere-second mt-5 d-flex justify-content-around">
                                        
                                        
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">

                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_longue_duree" onchange="this.form.submit()" id="location_longue_duree" value="1">
                                                        <label for="location_longue_duree">
                                                        </label>
                                                    </div>

                                                </span>
                                                <span class="rest-text-2 a1">{{ __('myhouse/header.aac') }}</span>

                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_courte_duree" onchange="this.form.submit()" id="location_courte_duree" value="1">
                                                        <label for="location_courte_duree">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a2">{{ __('myhouse/header.aad') }}</span>
                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="colocation" onchange="this.form.submit()" id="colocation" value="1">
                                                        <label for="colocation">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a3">{{ __('myhouse/header.aae') }}</span>
                                            </span>
                                        </span>



                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/student.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_etudiant" onchange="this.form.submit()" id="location_etudiant" value="1">
                                                        <label for="location_etudiant">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 text-capitalize a4">{{ __('myhouse/header.aaf') }}</span>
                                            </span>
                                        </span>



                                    </span>
                                </span>
                            </span>
                    </div>
                </div>



        @elseif(request()->get('transaction') === "location" && request()->get('category') === "commercial")


                <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown">
                                <span class="critere-around">
      

                                    <span class="critere-second mt-5 d-flex justify-content-around">
                                        
                                        
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">

                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_longue_duree" onchange="this.form.submit()" id="location_longue_duree" value="1">
                                                        <label for="location_longue_duree">
                                                        </label>
                                                    </div>

                                                </span>
                                                <span class="rest-text-2 a1">{{ __('myhouse/header.aac') }}</span>

                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_courte_duree" onchange="this.form.submit()" id="location_courte_duree" value="1">
                                                        <label for="location_courte_duree">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a2">{{ __('myhouse/header.aad') }}</span>
                                            </span>
                                        </span>


                                        <span class="critere-item">
                                            <span class="img-critere" style="margin-right: 74px;">
                                                <img src="{{ asset('images/residential/furnished.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slided">
                                                      
                                                      <div class="pc-checkbox">
                                                        
                                                        <div class="without-gomez" style="margin-left: -77px !important">
                                                            <input type="checkbox" name="location_meuble" onchange="this.form.submit()" id="location_meuble" value="1">
                                                        
                                                                <label for="location_meuble">
                                                                    {{ __('myhouse/header.az') }}
                                                                </label>
                                                        </div>

                                                      </div>

                                                </span>
                                                <span class="rest-texte" style="margin-left: -58px">
                                                    <div class="pc-checkbox">
                                                        <input type="checkbox" name="nom_meuble" onchange="this.form.submit()" id="nom_meuble" value="1">
                                                        <label for="nom_meuble">
                                                            {{ __('myhouse/header.aaa') }}
                                                        </label>
                                                    </div>
                                                </span>
                                            </span>
                                        </span>


                                    </span>
                                </span>
                            </span>
                    </div>
                </div>


        @elseif(request()->get('transaction') === "location" && request()->get('category') === "terrain")

                <div class="temps-item">
                    <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                        <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                        <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 410px !important; margin-left: -120px !important; height: 178px !important;">
                                <span class="critere-around" style="margin: 15px 20px !important;">
      

                                    <span class="critere-second mt-5 d-flex justify-content-around">
                                        
                                        
                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">

                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_longue_duree" onchange="this.form.submit()" id="location_longue_duree" value="1">
                                                        <label for="location_longue_duree">
                                                        </label>
                                                    </div>

                                                </span>
                                                <span class="rest-text-2 a1">{{ __('myhouse/header.aac') }}</span>

                                            </span>
                                        </span>




                                        <span class="critere-item">
                                            <span class="img-critere">
                                                <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                            </span>
                                            <span class="critere-rest">
                                                <span class="rest-slide-2">
                                                     <div class="pc-checkbox">
                                                        <input type="checkbox" name="location_courte_duree" onchange="this.form.submit()" id="location_courte_duree" value="1">
                                                        <label for="location_courte_duree">
                                                        </label>
                                                    </div>
                                                </span>
                                                <span class="rest-text-2 a2">{{ __('myhouse/header.aad') }}</span>
                                            </span>
                                        </span>


                                    </span>
                                </span>
                            </span>
                    </div>
                </div>

        @elseif (is_null(request()->get('category')) || is_null(request()->get('transaction')) )


                    <div class="temps-item">
                        <div class="dropdown-menus rounded-pill text-center t"  style="cursor: not-allowed">
                            <span class="dropdown-toggle myHouse-caret"></span>
                            <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                    <span class="critere-around">
                

                                    </span>
                            </span>
                        </div>
                    </div>

        @endif


@elseif (request()->get('page') === "neufs")



        @if (request()->get('transaction') === "achat" && request()->get('category') === "residentiel")



            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 489px;  margin-left: -165px;">
                                <span class="critere-around">
                                    <span class="critere-first d-inline-flex">
                                                    
                                                    <span class="critere-item c1" style="margin-left: 36px !important;">


                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/room.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide">
                                                                <input id="input-range-check"  name="prix" onchange="this.form.submit()" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                            </span>
                                                            <span class="rest-text">
                                                                {{ __('myhouse/header.ay') }}
                                                            </span>
                                                        </span>
                                                    </span>

                                                    <span class="critere-item c3" style="margin-left: 155px !important;">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/bathroom.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide">
                                                                <input id="input-range-check-2" onchange="this.form.submit()" name="surface" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-tooltip="always" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                                            </span>
                                                            <span class="rest-text-3">{{ __('myhouse/header.aab') }}</span>
                                                        </span>
                                                    </span>
                                                    
                                              


                                                </span>


                                                <span class="critere-second mt-5 d-flex justify-content-around">
                                                    
                                                    
                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">

                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_un" onchange="this.form.submit()" id="appart_type_un" value="Sur plan">
                                                                    <label for="appart_type_un">
                                                                    </label>
                                                                </div>

                                                            </span>
                                                            <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_deux" onchange="this.form.submit()" id="appart_type_deux" value="En construction">
                                                                    <label for="appart_type_deux">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_trois" onchange="this.form.submit()" id="appart_type_trois" value="Livraison immédiate">
                                                                    <label for="appart_type_trois">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                        </span>
                                                    </span>






                                                </span>
                                            </span>
                                        </span>
                                </div>
            </div>



        @elseif(request()->get('transaction') === "achat" && request()->get('category') === "commercial")

            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 489px;  margin-left: -165px;  height: 178px;">
                                <span class="critere-around">
                       

                                                <span class="critere-second mt-5 d-flex justify-content-around">
                                                    
                                                    
                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">

                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" onchange="this.form.submit()" name="appart_type_un" id="appart_type_un" value="Sur plan">
                                                                    <label for="appart_type_un">
                                                                    </label>
                                                                </div>

                                                            </span>
                                                            <span class="rest-text-2 a1">{{ __('myhouse/header.aar') }}</span>

                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/layer.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_deux" onchange="this.form.submit()" id="appart_type_deux" value="En construction">
                                                                    <label for="appart_type_deux">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a2">{{ __('myhouse/header.aas') }}</span>
                                                        </span>
                                                    </span>




                                                    <span class="critere-item">
                                                        <span class="img-critere">
                                                            <img src="{{ asset('images/residential/friendship.svg') }}" alt="">
                                                        </span>
                                                        <span class="critere-rest">
                                                            <span class="rest-slide-2">
                                                                <div class="pc-checkbox">
                                                                    <input type="checkbox" name="appart_type_trois" onchange="this.form.submit()" id="appart_type_trois" value="Livraison immédiate">
                                                                    <label for="appart_type_trois">
                                                                    </label>
                                                                </div>
                                                            </span>
                                                            <span class="rest-text-2 a3">{{ __('myhouse/header.aat') }}</span>
                                                        </span>
                                                    </span>






                                                </span>
                                            </span>
                                        </span>
                                </div>
            </div>




        @elseif(request()->get('transaction') === "achat" && request()->get('category') === "terrain")


            <div class="temps-item">
                <div class="dropdown-menus rounded-pill text-center t" id="dropdown-critere">
                    <span class="dropdown-toggle myHouse-caret"></span>
                        <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown" style="width: 465px; margin-left: -152px;">
                                <div class="p-critere">
                                    
                                    <div class="pp-critere">
                                        <div class="pp-critere">
                                            <img src="{{ asset('images/residential/agenda.svg') }}" alt="">
                                        </div>
                                        <div class="pp-critere" style="padding-left: 10px;">
                                            {{ __('myhouse/header.aav') }}
                                        </div>
                                    </div>

                                    <div class="pp-critere">
                                        <div class="pp-critere" style="padding-right: 7px;">
                                            {{ __('myhouse/header.aaw') }}
                                        </div>
                                        <div class="pp-critere">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" onchange="this.form.submit()" name="tous" id="tous" value="tous">
                                                <label for="tous">
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="p-checker">

                                    <div class="p-checker-item">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-17" value="Sous-sol">
                                                <label for="tous-17">
                                                    {{ __('myhouse/header.aaaa') }}
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" onchange="this.form.submit()" class="checkable" id="tous-18" value="Plain-pied">
                                                <label for="tous-18">
                                                    {{ __('myhouse/header.aaab') }}
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-1" value="R + 13">
                                                <label for="tous-1">
                                                    R + 1 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-2" value="R + 2">
                                                <label for="tous-2">
                                                    R + 2
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="p-checker-item" style="margin-left: 22px;">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-3" value="R + 3">
                                                <label for="tous-3">
                                                    R + 3
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-4" value="R + 4">
                                                <label for="tous-4">
                                                    R + 4
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-5" value="R + 5">
                                                <label for="tous-5">
                                                    R + 5 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-6" value="R + 6">
                                                <label for="tous-6">
                                                    R + 6
                                                </label>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="p-checker-item" style="margin-left: 20px;">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" class="checkable" onchange="this.form.submit()" name="tous" id="tous-7" value="R + 7">
                                                <label for="tous-7">
                                                    R + 7
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable" onchange="this.form.submit()" id="tous-8" value="R + 8">
                                                <label for="tous-8">
                                                    R + 8
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable" id="tous-9" onchange="this.form.submit()" value="R + 9">
                                                <label for="tous-9">
                                                    R + 9 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable"  id="tous-10" onchange="this.form.submit()" value="R + 10">
                                                <label for="tous-10">
                                                    R + 10
                                                </label>
                                            </div>
                                        </div>

                                    </div>  

                                    <div class="p-checker-item" style="margin-left: 24px;">

                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable" id="tous-11" onchange="this.form.submit()" value="R + 11">
                                                <label for="tous-11">
                                                    R + 11
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable" id="tous-12" onchange="this.form.submit()" value="R + 12">
                                                <label for="tous-12">
                                                    R + 12 
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable" id="tous-13" onchange="this.form.submit()" value="R + 13">
                                                <label for="tous-13">
                                                    R + 13
                                                </label>
                                            </div>
                                        </div>


                                        <div class="p-checker-item-child">
                                            <div class="pc-checkbox" style="margin-top: -12px !important;">
                                                <input type="checkbox" name="tous" class="checkable" id="tous-14" onchange="this.form.submit()" value="Plus">
                                                <label for="tous-14">
                                                    {{ __('myhouse/header.aaac') }}
                                                </label>
                                            </div>
                                        </div>

                                    </div>  

                                </div>


                            </span>
                        <span>
                    <span>        
                </div>
            </div>


        @elseif (is_null(request()->get('category')) || is_null(request()->get('transaction')) )


                    <div class="temps-item">
                        <div class="dropdown-menus rounded-pill text-center t"  style="cursor: not-allowed">
                            <span class="dropdown-toggle myHouse-caret"></span>
                            <span>{{ __('myhouse/header.ax') }}</span>
                            <span class="critere-dropdown text-left" id="critere-dropdown">
                                    <span class="critere-around">
                

                                    </span>
                            </span>
                        </div>
                    </div>

        @endif

@endif





    @section('style')


        <link rel="stylesheet" href="{{ asset('development/js/leaflet/markercluster.css') }}">
        <link rel="stylesheet" href="{{ asset('development/js/leaflet/markerclusterdefault.css') }}">

    @stop


       
     @section('scripts')

        <script>

            $("#tous").click(function () {
            $('.checkable').not(this).prop('checked', this.checked);
        });



        </script>

        <script src="{{ asset('development/js/leaflet/markercluster.js') }}"></script>

    @endsection
   

       
       
       
      