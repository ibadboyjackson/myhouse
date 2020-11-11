@if(request()->get('type') === 'plateau')
    <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
        <div class="ca-page-item-second-body-card-item-head">
            <div class="ca-page-item-second-body-card-item-head-img">
                <img src="http://31.220.62.192/images/residential/it.svg" alt="">
            </div>
            <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.babd') }}</div>
        </div>
        <div class="ca-page-item-second-body-card-item-body">

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babe') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="gardiennage" id="#" class="ios" value="1" {{ $particulier->gardiennage != 0 ? 'checked' : '' }}  {{ old('gardiennage') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babf') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="acceuil" id="#" class="ios" value="1" {{ $particulier->acceuil != 0 ? 'checked' : '' }}  {{ old('acceuil') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                @include('myhouse.back.annonces.particuliers.extra.six')
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babg') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="ascenseur" id="#" class="ios" value="1" {{ $particulier->ascenseur != 0 ? 'checked' : '' }}  {{ old('ascenseur') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babh') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $particulier->interphone != 0 ? 'checked' : '' }}  {{ old('interphone') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babi') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="monte_charge" id="#" class="ios" value="1" {{ $particulier->monte_charge != 0 ? 'checked' : '' }}  {{ old('monte_charge') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>



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

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babe') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="gardiennage" id="#" class="ios" value="1" {{ $particulier->gardiennage != 0 ? 'checked' : '' }}  {{ old('gardiennage') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babf') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="acceuil" id="#" class="ios" value="1" {{ $particulier->acceuil != 0 ? 'checked' : '' }}  {{ old('acceuil') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                @include('myhouse.back.annonces.particuliers.extra.six')
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babg') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="ascenseur" id="#" class="ios" value="1" {{ $particulier->ascenseur != 0 ? 'checked' : '' }}  {{ old('ascenseur') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babh') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="interphone" id="#" class="ios" value="1" {{ $particulier->interphone != 0 ? 'checked' : '' }}  {{ old('interphone') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babi') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="monte_charge" id="#" class="ios" value="1" {{ $particulier->monte_charge != 0 ? 'checked' : '' }}  {{ old('monte_charge') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>

            <div class="ca-page-item-second-body-card-item-body-item">
                <div class="ca-page-item-second-body-card-item-body-item-boxes">
                    <div class="ca-page-item-second-body-card-item-body-item-box-text">
                        {{ __('myhouse/back/annonces/particulier/description.babj') }}
                    </div>
                    <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                        <input type="checkbox" name="espace_vert" id="#" class="ios" value="1" {{ $particulier->espace_vert != 0 ? 'checked' : '' }}  {{ old('espace_vert') != null ? 'checked' : '' }}>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endif
