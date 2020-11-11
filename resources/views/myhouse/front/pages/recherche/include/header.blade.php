<!-- HEADER -->
<div class="wrap mt-73" id ="{{ app()->getLocale() }}">
    <header class="header">
        <form  method="get" id ="ghoumari-form" action="">
            <input type="hidden" value="{{ request()->get('location') }}" name="location">
            <input type="hidden" value="{{ request()->get('page') }}" name="page">
            <div class="temps">
                <span class="myHouse-circle">
                    <span class="myHouse-circle-text">1</span>
                </span>
                <span class="myHouse-hr"></span>
                <span class="myHouse-circle-1">
                    <span class="myHouse-circle-text">2</span>
                </span>
                <span class="myHouse-circle-2">
                    <span class="myHouse-circle-text">3</span>
                </span>
                <div class="must-close">
                    <div class="d-flex justify-content-end mr-3 button-x mt-2">
                        <img src="{{ asset('images/residential/x.svg') }}" alt="" id="must-close">
                    </div>
                </div>


                @if(request()->get('transaction'))

                        @if(request()->get('page') === 'neufs')
                            <div class="temps-item">
                                <div class="grid_1">
                                    <select class="selectpicker myHouse-select" name="transaction" onchange="this.form.submit()">
                                        <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                    </select>
                                </div>
                            </div>
                        @elseif(request()->get('page') === 'professionnels')
                            <div class="temps-item">
                                <div class="grid_1">
                                    <select class="selectpicker myHouse-select" name="transaction" onchange="this.form.submit()">

                                        @if (request()->get('transaction') === 'achat')
                                            <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                            <option selected data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                        @else
                                            <option selected data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                            <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                        @endif


                                    </select>
                                </div>
                            </div>

                        @else
                            <div class="temps-item">
                                <div class="grid_1">
                                    <select class="selectpicker myHouse-select" name="transaction" onchange="this.form.submit()">

                                        @if(request()->get('transaction') === "achat")
                                            <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                            <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                            <option data-content="<img src='{{ asset('images/residential/echange.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'>   {{ __('myhouse/header.ac') }} </span> " value="echange"></option>
                                    
                                        @elseif(request()->get('transaction') === "location")

                                            <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                            <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                            <option data-content="<img src='{{ asset('images/residential/echange.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'>   {{ __('myhouse/header.ac') }} </span> " value="echange"></option>
                                   

                                        @elseif(request()->get('transaction') === "echange")
                                            <option data-content="<img src='{{ asset('images/residential/echange.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'>   {{ __('myhouse/header.ac') }} </span> " value="echange"></option>

                                            <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                            <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                                                         
                                        @endif           
                        
                                    </select>
                                </div>
                            </div>
                        @endif


                    @if (request()->get('category'))

                            <div class="temps-item">
                                <div class="grid_2">
                                    <select name="category" class="selectpicker myHouse-select" onchange="this.form.submit()">
                                        @if (request()->get('category') === 'residentiel')
                                            <option selected data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> {{ __('myhouse/header.ad') }} </span> " value="residentiel"></option>
                                            <option data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  {{ __('myhouse/header.ae') }} </span> " value="commercial"></option>
                                            <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   {{ __('myhouse/header.af') }} </span> " value="terrain"></option>
                                        @elseif(request()->get('category') === 'commercial')
                                            <option data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> {{ __('myhouse/header.ad') }} </span> " value="residentiel"></option>
                                            <option selected data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  {{ __('myhouse/header.ae') }} </span> " value="commercial"></option>
                                            <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   {{ __('myhouse/header.af') }} </span> " value="terrain"></option>
                                        @else
                                            <option data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> {{ __('myhouse/header.ad') }} </span> " value="residentiel"></option>
                                            <option data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  {{ __('myhouse/header.ae') }} </span> " value="commercial"></option>
                                            <option selected data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   {{ __('myhouse/header.af') }} </span> " value="terrain"></option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="temps-item">
                                <div class="grid_2">
                                    <select name="category" class="selectpicker myHouse-select" title=" {{ __('myhouse/header.aai') }}" onchange="this.form.submit()">
                                        <option data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> {{ __('myhouse/header.ad') }} </span> " value="residentiel"></option>
                                        <option data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  {{ __('myhouse/header.ae') }} </span> " value="commercial"></option>
                                        <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   {{ __('myhouse/header.af') }} </span> " value="terrain"></option>
                                    </select>
                                </div>
                            </div>
                        @endif


                        @if (request()->get('page') === 'neufs')
                                    @if (request()->get('transaction') === 'achat' && request()->get('category') === 'residentiel')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="Appartement">Appartement</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Riad">Riad</option>
                                                <option value="Chalet">Cabanon/Chalet</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'achat' && request()->get('category') === 'commercial')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commerce</option>
                                                <option value="bureau">Bureau/Appart' professionnel</option>
                                                <option value="plateau">Plateau</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'achat' && request()->get('category') === 'terrain')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="residentiel">Résidentiel</option>
                                                <option value="commercial">Commercial</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'achat')
                                        <div class="temps-item">
                                            <div class="grid_3">
                                                <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                                    <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                                    <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                @endif

                        @elseif(request()->get('page') === 'professionnels')

                                @if (request()->get('transaction') === 'achat' && request()->get('category') === 'residentiel')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="Appartement">Appartement</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Riad">Riad</option>
                                                <option value="Chalet">Cabanon/Chalet</option>
                                                <option value="Ferme">Ferme</option>
                                            </select>
                                        </div>
                                @elseif(request()->get('transaction') === 'achat' && request()->get('category') === 'commercial')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commerce</option>
                                                <option value="bureau">Bureau/Appart' professionnel</option>
                                                <option value="plateau">Plateau</option>
                                                <option value="hangar">Entrepôt/Hangar</option>
                                                <option value="local_industriel">Local industriel</option>
                                                <option value="garage">Garage</option>
                                                <option value="propriete_agricole">Propriété agricole</option>
                                                <option value="mozarella">Immeuble/Bâtiment </option>
                                            </select>
                                        </div>
                                @elseif(request()->get('transaction') === 'achat' && request()->get('category') === 'terrain')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="residentiel">Résidentiel</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="agricole">Agricole</option>
                                                <option value="industriel">Industriel</option>
                                            </select>
                                        </div>
                                @elseif(request()->get('transaction') === 'location' && request()->get('category') === 'residentiel')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="Appartement">Appartement</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Riad">Riad</option>
                                                <option value="Chalet">Cabanon/Chalet</option>
                                                <option value="Ferme">Ferme</option>
                                                <option value="cite_universitaire">Cité universitaire</option>
                                                <option value="chambre">Chambre d'hôte</option>
                                            </select>
                                        </div>
                                @elseif(request()->get('transaction') === 'location' && request()->get('category') === 'commercial')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commerce</option>
                                                <option value="bureau">Bureau/Appart' professionnel</option>
                                                <option value="plateau">Plateau</option>
                                                <option value="hangar">Entrepôt/Hangar</option>
                                                <option value="local_industriel">Local industriel</option>
                                                <option value="garage">Garage</option>
                                                <option value="propriete_agricole">Propriété agricole</option>
                                                <option value="mozarella">Immeuble/Bâtiment </option>
                                            </select>
                                        </div>
                                @elseif(request()->get('transaction') === 'location' && request()->get('category') === 'terrain')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commercial</option>
                                                <option value="agricole">Agricole</option>
                                                <option value="industriel">Industriel</option>
                                            </select>
                                        </div>



                                @elseif(request()->get('transaction') === 'location')
                                        <div class="temps-item">
                                            <div class="grid_3">
                                                <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                                    <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                                    <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                                    <option value="tomatoes">{{ __('myhouse/header.ai') }}</option>
                                                    <option value="mozarella">{{ __('myhouse/header.aj') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                @elseif(request()->get('transaction') === 'achat')
                                        <div class="temps-item">
                                            <div class="grid_3">
                                                <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                                    <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                                    <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                @endif


                                

                        @else

                                    @if (request()->get('transaction') === 'achat' && request()->get('category') === 'residentiel')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="Appartement">Appartement</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Riad">Riad</option>
                                                <option value="Chalet">Cabanon/Chalet</option>
                                                <option value="Ferme">Ferme</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'achat' && request()->get('category') === 'commercial')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commerce</option>
                                                <option value="bureau">Bureau/Appart' professionnel</option>
                                                <option value="plateau">Plateau</option>
                                                <option value="hangar">Entrepôt/Hangar</option>
                                                <option value="local_industriel">Local industriel</option>
                                                <option value="garage">Garage</option>
                                                <option value="propriete_agricole">Propriété agricole</option>
                                                <option value="mozarella">Immeuble/Bâtiment </option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'achat' && request()->get('category') === 'terrain')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="residentiel">Résidentiel</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="agricole">Agricole</option>
                                                <option value="industriel">Industriel</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'location' && request()->get('category') === 'residentiel')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="Appartement">Appartement</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Riad">Riad</option>
                                                <option value="Chalet">Cabanon/Chalet</option>
                                                <option value="Ferme">Ferme</option>
                                                <option value="cite_universitaire">Cité universitaire</option>
                                                <option value="chambre">Chambre d'hôte</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'location' && request()->get('category') === 'commercial')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commerce</option>
                                                <option value="bureau">Bureau/Appart' professionnel</option>
                                                <option value="plateau">Plateau</option>
                                                <option value="hangar">Entrepôt/Hangar</option>
                                                <option value="local_industriel">Local industriel</option>
                                                <option value="garage">Garage</option>
                                                <option value="propriete_agricole">Propriété agricole</option>
                                                <option value="mozarella">Immeuble/Bâtiment </option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'location' && request()->get('category') === 'terrain')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commercial</option>
                                                <option value="agricole">Agricole</option>
                                                <option value="industriel">Industriel</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'echange' && request()->get('category') === 'residentiel')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="Appartement">Appartement</option>
                                                <option value="Villa">Villa</option>
                                                <option value="tomatoes">Maison</option>
                                                <option value="Maison">Riad</option>
                                                <option value="Chalet">Chalet</option>
                                                <option value="Ferme">Ferme</option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'echange' && request()->get('category') === 'commercial')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="commercial">Commerce</option>
                                                <option value="bureau">Bureau/Appart' professionnel</option>
                                                <option value="plateau">Plateau</option>
                                                <option value="hangar">Entrepôt/Hangar</option>
                                                <option value="local_industriel">Local industriel</option>
                                                <option value="garage">Garage</option>
                                                <option value="propriete_agricole">Propriété agricole</option>
                                                <option value="mozarella">Immeuble/Bâtiment </option>
                                            </select>
                                        </div>
                                    @elseif(request()->get('transaction') === 'echange' && request()->get('category') === 'terrain')
                                        <div class="grid_3">
                                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple">
                                                <option value="residentiel">Résidentiel</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="agricole">Agricole</option>
                                                <option value="industriel">Industriel</option>
                                            </select>
                                        </div>















                                    @elseif(request()->get('transaction') === 'echange')
                                        <div class="temps-item">
                                            <div class="grid_3">
                                                <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                                    <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                                    <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @elseif(request()->get('transaction') === 'echange')
                                        <div class="temps-item">
                                            <div class="grid_3">
                                                <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                                    <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                                    <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @else
                                        <div class="temps-item">
                                            <div class="grid_3">
                                                <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                                    <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                                    <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endif


                        @endif









                    @else


                    @if(request()->get('page') === 'neufs')
                        <div class="temps-item">
                            <div class="grid_1">
                                <select class="selectpicker myHouse-select" name="transaction" onchange="this.form.submit()" title=" {{ __('myhouse/header.aai') }}">
                                    <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                </select>
                            </div>
                        </div>
                    @elseif(request()->get('page') === 'professionnels')
                        <div class="temps-item">
                            <div class="grid_1">
                                <select class="selectpicker myHouse-select" name="transaction" onchange="this.form.submit()" title=" {{ __('myhouse/header.aai') }}">
                                    <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                    <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                </select>
                            </div>
                        </div>
                    @else
                        <div class="temps-item">
                            <div class="grid_1">
                                <select class="selectpicker myHouse-select" name="transaction" onchange="this.form.submit()" title=" {{ __('myhouse/header.aai') }}">
                                    <option data-content="<img src='{{ asset('images/residential/location.svg') }}' class='myHouse-image-1'> &nbsp; &nbsp;&nbsp;&nbsp;     <span class='custom-txt-1'> {{ __('myhouse/header.aa') }}</span> " value="location"></option>
                                    <option data-content="<img src='{{ asset('images/residential/achat.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1-1'>  {{ __('myhouse/header.ab') }} </span> " value="achat"></option>
                                    <option data-content="<img src='{{ asset('images/residential/echange.svg') }}' class='myHouse-image-1'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-1'>   {{ __('myhouse/header.ac') }} </span> " value="echange"></option>
                                </select>
                            </div>
                        </div>
                     @endif



                    <div class="temps-item">
                        <div class="grid_2">
                            <select class="selectpicker myHouse-select" title=" {{ __('myhouse/header.aai') }}" disabled>
                                <option data-content="<img src='{{ asset('images/residential/residential.svg') }}' class='myHouse-image-2-1'> &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-1'> {{ __('myhouse/header.ad') }} </span> " value="residentiel"></option>
                                <option data-content="<img src='{{ asset('images/residential/commercial.svg') }}' class='myHouse-image-2-2'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-2'>  {{ __('myhouse/header.ae') }} </span> " value="commercial"></option>
                                <option data-content="<img src='{{ asset('images/residential/terrain.svg') }}' class='myHouse-image-2-3'>  &nbsp; &nbsp;&nbsp;&nbsp; <span class='custom-txt-2-3'>   {{ __('myhouse/header.af') }} </span> " value="terrain"></option>
                            </select>
                        </div>
                    </div>

                    <div class="temps-item">
                        <div class="grid_3">
                            <select name="house[]" id="myHouse-checkbox-select" multiple ="multiple" disabled>
                                <option value="cheese">{{ __('myhouse/header.ag') }}</option>
                                <option value="aa">{{ __('myhouse/header.ah') }}</option>
                                <option value="tomatoes">{{ __('myhouse/header.ai') }}</option>
                                <option value="mozarella">{{ __('myhouse/header.aj') }}</option>
                                <option value="mushrooms">{{ __('myhouse/header.ak') }}</option>
                                <option value="pepperoni">{{ __('myhouse/header.al') }}</option>
                                <option value="c">{{ __('myhouse/header.am') }}</option>
                                <option value="v">{{ __('myhouse/header.an') }}</option>
                                <option value="r">{{ __('myhouse/header.ao') }}</option>
                                <option value="b">{{ __('myhouse/header.ap') }}</option>
                                <option value="u">{{ __('myhouse/header.aq') }}</option>
                            </select>
                        </div>
                    </div>
                @endif




                <div class="temps-item">
                    <div class="myHouse-feature">
                        <div class="p-sm-f">
                            <span class="myHouse-three-text">{{ __('myhouse/header.ar') }}</span>
                            <div class="myHouse-three mt-27">
                                <div class="myHouse-three-button">
                                    <div>
                                        <button id = "ghoumari-button-one" type="submit" class="ghoumari-button-one {{ $type === 'carte' ? 'ghoumari-button-active' : '' }}"></button>
                                    </div>
                                    <div>
                                        <button id = "ghoumari-button-two"  type="submit" class="ghoumari-button-two {{ $type === 'mixte' ? 'ghoumari-button-active' : '' }}"></button>
                                    </div>
                                    <div>
                                        <button id = "ghoumari-button-three" type="submit" class="ghoumari-button-three {{ $type === 'liste' ? 'ghoumari-button-active' : '' }}"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="legend">
                                <div class="myHouse-three-text-left">{{ __('myhouse/header.as') }}</div>
                                <div class="myHouse-three-text-middle  myHouse-three-text-active">{{ __('myhouse/header.at') }}</div>
                                <div class="myHouse-three-text-right">{{ __('myhouse/header.au') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="temps-item">
                    <div class="breack">
                        <div class="slider">
                            <div class="slider-wrap">
                                <span class="unit text-uppercase myHouse-red">mad</span>
                                <input onchange="this.form.submit()"  class="input-range" name="prix" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="10000" data-slider-value="1, 99000000000" data-slider-min="1" data-slider-max="99000000000" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">{{ __('myhouse/header.av') }}</span>
                            </div>
                            <div class="slider-wrap-2">
                                <span class="unit text-lowercase myHouse-red">m²</span>
                                <input onchange="this.form.submit() class="input-range" name="surface" id="range" data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="100" data-slider-value="1, 1000" data-slider-min="1" data-slider-max="1000" data-slider-range="true" data-slider-tooltip_split="true" />
                                <span class="slider-text text-uppercase myHouse-red">{{ __('myhouse/header.aw') }}</span>
                            </div>
                        </div>
                    </div>
                </div>




                
                @include('myhouse.front.pages.recherche.include.critere')











                <div class="temps-item">
                    <div class="input-search">
                        <input type="text" name="word" class="form-control rounded-pill small-text search-input" placeholder="{{ __('myhouse/header.aag') }}">
                    </div>
                </div>
                <div class="temps-item">
                    <div class="myHouse-sort" id="myHouse-sort">
                            <div class="last-filter">
                                <div class="last-filter-img">
                                    <img src="{{ asset('images/residential/sort.svg') }}" alt="">
                                </div>
                                <div class="last-filter-text">{{ __('myhouse/header.aah') }}</div>
                            </div>

                            <span class="myHouse-sort-dropdown" id="myHouse-sort-dropdown">
                                <span class="sort-around">
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort" name="tri" onchange="this.form.submit()" value="created_at">
                                        <label for="sort">{{ __('myhouse/header.aaj') }}</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort2" name="tri" value="updated_at" onchange="this.form.submit()">
                                        <label for="sort2">{{ __('myhouse/header.aak') }}</label>
                                    </span>
                                    <!--<span class="sort-around-around">
                                        <input type="radio" id="sort3" name="tri" value="distance_ville" onchange="this.form.submit()">
                                        <label for="sort3">{{ __('myhouse/header.aal') }}</label>
                                    </span> -->

                                    <span class="sort-around-around">
                                        <input type="radio" id="sort4" name="tri" value="distance_recherche" onchange="this.form.submit()">
                                        <label for="sort4">{{ __('myhouse/header.aam') }}</label>
                                    </span> 
                                    
                                    
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort5" name="tri" value="prix_asc" onchange="this.form.submit()">
                                        <label for="sort5">{{ __('myhouse/header.aan') }}</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort6" name="tri" value="prix_desc" onchange="this.form.submit()">
                                        <label for="sort6">{{ __('myhouse/header.aao') }}</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort7" name="tri" value="surface_asc" onchange="this.form.submit()">
                                        <label for="sort7">{{ __('myhouse/header.aap') }}</label>
                                    </span>
                                    <span class="sort-around-around">
                                        <input type="radio" id="sort8" name="tri" value="surface_desc" onchange="this.form.submit()">
                                        <label for="sort8">{{ __('myhouse/header.aaq') }}</label>
                                    </span>

                                </span>
                            </span>
                        </div>
                </div>



            </div>
        </form>
    </header>
</div>
<!-- HEADER -->
