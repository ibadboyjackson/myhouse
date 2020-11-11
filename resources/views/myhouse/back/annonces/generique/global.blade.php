    @if (request()->get('type') === 'maison')

    <div class="ca-page-item-second-body-card-item-head">
        <div class="ca-page-item-second-body-card-item-head-img">
            <img src="http://31.220.62.192/images/residential/single/m4.svg" alt="" width="30" height="30">
        </div>
        <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbo') }}</div>
    </div>
    <div class="ca-page-item-second-body-card-item-body">
        <div class="ca-page-item-second-body-card-item-body-item">
            @include('myhouse.back.annonces.particuliers.extra.one')
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <!-- Surface    -->

            @include('myhouse.back.annonces.particuliers.plus.habitable')


            <!-- Surface    -->
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <!-- Surface    -->

            <div class="ca-page-surface">
                <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbh') }}</div>
                <div class="ca-page-surface-input">
                    <div class="ca-page-surface-input-field">
                        <input type="text" value="{{ $particulier->superficie_terrain ?? old('superficie_terrain') }}" name="superficie_terrain" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                    </div>
                    <div class="ca-page-surface-input-unit">m²</div>
                </div>
            </div>

            <!-- Surface    -->
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            @include('myhouse.back.annonces.particuliers.extra.amenagement')
        </div>
                                                                    @include('myhouse.back.annonces.particuliers.location')

    </div>
@endif

@if (request()->get('type') === 'chalet')
    <div class="ca-page-item-second-body-card-item-head">
        <div class="ca-page-item-second-body-card-item-head-img">
            <img src="http://31.220.62.192/images/residential/single/ch4.svg" alt="">
        </div>
        <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.bbo') }}</div>
    </div>
    <div class="ca-page-item-second-body-card-item-body">

        <div class="ca-page-item-second-body-card-item-body-item">
            @include('myhouse.back.annonces.particuliers.extra.one')
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <!-- Surface    -->

            @include('myhouse.back.annonces.particuliers.plus.habitable')


            <!-- Surface    -->
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <!-- Surface    -->

            <div class="ca-page-surface">
                <div class="ca-page-surface-text">{{ __('myhouse/back/annonces/particulier/description.bbh') }}</div>
                <div class="ca-page-surface-input">
                    <div class="ca-page-surface-input-field">
                        <input type="text" name="superficie_terrain" value="{{ $particulier->superficie_terrain ?? old('superficie_terrain') }}" id="" class="form-control" placeholder="{{ __('myhouse/back/annonces/particulier/description.cbaze') }}">
                    </div>
                    <div class="ca-page-surface-input-unit">m²</div>
                </div>
            </div>

            <!-- Surface    -->
        </div>


        <div class="ca-page-item-second-body-card-item-body-item">
            @include('myhouse.back.annonces.particuliers.extra.seven')
        </div>
        <div class="ca-page-item-second-body-card-item-body-item">
            <select name="facade_type" id="" class="form-control yt-select">


                @if($particulier->facade_type != "")
                    <option hidden selected value="{{ $particulier->facade_type }}">{{ $particulier->facade_type }}</option>
                @endif

                        @if(old('facade_type'))
                            <option hidden selected value="{{ old('facade_type') }}">{{ old('facade_type') }}</option>
                        @endif


                <option value="{{ __('myhouse/back/annonces/particulier/description.abbd') }}">{{ __('myhouse/back/annonces/particulier/description.abbd') }}</option>
                <option value="{{ __('myhouse/back/annonces/particulier/description.abbe') }}">{{ __('myhouse/back/annonces/particulier/description.abbe') }}</option>
            </select>
        </div>
                                                                   
                                                                    @include('myhouse.back.annonces.particuliers.location')

    </div>
@endif


