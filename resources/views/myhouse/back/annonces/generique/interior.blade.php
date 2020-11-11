<div class="ca-page-item-second-body-card-item-head">

    @if(request()->get('type') === 'villa')
        <div class="ca-page-item-second-body-card-item-head-img">
            <img src="http://31.220.62.192/images/residential/single/tt.svg" alt="" width="30" height="30">
        </div>
    @endif

    @if(request()->get('type') === 'maison')
        <div class="ca-page-item-second-body-card-item-head-img">
           <img src="http://31.220.62.192/images/residential/single/tt.svg" alt="" width="30" height="30">
        </div>
    @endif

    <div class="ca-page-item-second-body-card-item-head-text">{{ __('myhouse/back/annonces/particulier/description.abo') }}</div>
</div>
<div class="ca-page-item-second-body-card-item-body">
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.two')
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.abq') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="cuisine_equipe" id="#" class="ios" value="1" {{ $particulier->cuisine_equipe == 1 ? 'checked' : '' }} {{ old('cuisine_equipe') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.three')
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.dressing')

    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.four')
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.five')
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.six')
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.terrase')
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        @include('myhouse.back.annonces.particuliers.extra.balcon')
    </div>

    @if(request()->get('type') === 'villa')

    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.abw') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="piscine" id="#" class="ios" value="1" {{ $particulier->piscine == 1 ? 'checked' : '' }} {{ old('piscine') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>

    @endif

    @if(request()->get('type') === 'maison')

        <div class="ca-page-item-second-body-card-item-body-item">
            <div class="ca-page-item-second-body-card-item-body-item-box">
                <div class="ca-page-item-second-body-card-item-body-item-box-text">
                    {{ __('myhouse/back/annonces/particulier/description.bbi') }}
                </div>
                <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                    <input type="checkbox" name="jardin_privatif" id="#" class="ios" value="1" {{ $particulier->jardin_privatif == 1 ? 'checked' : '' }} {{ old('jardin_privatif') != null ? 'checked' : '' }}>
                </div>
            </div>
        </div>

    @endif

    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.abx') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="cour" id="#" class="ios" value="1" {{ $particulier->cour == 1 ? 'checked' : '' }} {{ old('cour') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.aby') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="buanderie" id="#" class="ios" value="1" {{ $particulier->buanderie == 1 ? 'checked' : '' }} {{ old('buanderie') != null ? 'checked' : '' }}> 
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.abz') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="cheminee" id="#" class="ios" value="1" {{ $particulier->cheminee == 1 ? 'checked' : '' }} {{ old('cheminee') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.baa') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="climatisation" id="#" class="ios" value="1" {{ $particulier->climatisation == 1 ? 'checked' : '' }} {{ old('climatisation') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.bab') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="chauffage" id="#" class="ios" value="1" {{ $particulier->chauffage == 1 ? 'checked' : '' }} {{ old('chauffage') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.bac') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="jaccuzi" id="#" class="ios" value="1" {{ $particulier->jaccuzi == 1 ? 'checked' : '' }} {{ old('jaccuzi') != null ? 'checked' : '' }}>
            </div>
        </div> 
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.bad') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="hammam_beldi" id="#" class="ios" value="1" {{ $particulier->hammam_beldi == 1 ? 'checked' : '' }} {{ old('hammam_beldi') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.bae') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="cave" id="#" class="ios" value="1" {{ $particulier->cave == 1 ? 'checked' : '' }} {{ old('cave') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="ca-page-item-second-body-card-item-body-item">
        <div class="ca-page-item-second-body-card-item-body-item-box">
            <div class="ca-page-item-second-body-card-item-body-item-box-text">
                {{ __('myhouse/back/annonces/particulier/description.baf') }}
            </div>
            <div class="ca-page-item-second-body-card-item-body-item-box-checkbox">
                <input type="checkbox" name="chauffe_eau" id="#" class="ios" value="1" {{ $particulier->chauffe_eau == 1 ? 'checked' : '' }} {{ old('chauffe_eau') != null ? 'checked' : '' }}>
            </div>
        </div>
    </div>



</div>
