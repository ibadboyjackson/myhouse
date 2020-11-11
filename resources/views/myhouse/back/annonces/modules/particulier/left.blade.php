<div class="ca-page-item-first">
    <div class="ca-page-item-first-img">
        <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
    </div>
    <div class="ca-page-item-first-text">{{ __('myhouse/back/annonces/modules/particulier/left.aa') }}</div>
</div>
<div class="pa-info">
    <div class="pa-info-left">
        {{ __('myhouse/back/annonces/modules/particulier/left.ab') }} <br>
        {{ __('myhouse/back/annonces/modules/particulier/left.ac') }}
    </div>
    <div class="pa-info-right">


        @if (Route::is('particulier.transaction') || Route::is('particulier.edit'))
            @if (isset($id) && isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'transaction' : '')
                <input type="checkbox" id="transaction" name="page" value="transaction"  class="ios" checked>
            @else
                <input type="checkbox" id="transaction" name="page" value="transaction"  class="ios">
            @endif
        @endif

            @if (Route::is('particulier.update') || Route::is('particulier.type.type'))
                @if (isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'type' : '')
                    <input type="checkbox" id="transaction" name="page" value="type"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="type"  class="ios">
                @endif
            @endif

            @if (Route::is('particulier.description'))
                @if (isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'description' : '')
                    <input type="checkbox" id="transaction" name="page" value="description"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="description"  class="ios">
                @endif
            @endif

            @if (Route::is('particulier.critere'))
                @if (isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'critere' : '')
                    <input type="checkbox" id="transaction" name="page" value="critere"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="critere"  class="ios">
                @endif
            @endif

            @if (Route::is('particulier.localisation.localisation'))
                @if (isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'localisation' : '')
                    <input type="checkbox" id="transaction" name="page" value="localisation"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="localisation"  class="ios">
                @endif
            @endif

            @if (Route::is('particulier.upload'))
                @if (isset(auth()->user()->particulier->last()->page) ? auth()->user()->particulier->last()->page === 'upload' : '')
                    <input type="checkbox" id="transaction" name="page" value="upload"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="upload"  class="ios">
                @endif
            @endif


    </div>
</div>
<div class="pa-info-first">
    <div class="pa-info-hr"></div>
    <div class="pa-info-first-text">
        <span class="pa-info-desc-type-one-left">{{ __('myhouse/back/annonces/modules/particulier/left.ad') }}</span>  <span>{{ auth()->user()->email }}</span>
    </div>

    <div class="pa-info-hr"></div>
    <div class="pa-info-desc">
        <div class="pa-info-desc-type-one">
            <div class="pa-info-desc-type-one-left">{{ __('myhouse/back/annonces/modules/particulier/left.ae') }}</div>
            <div class="pa-info-desc-type-one-right">{{ __('myhouse/back/annonces/modules/particulier/left.af') }}</div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">{{ __('myhouse/back/annonces/modules/particulier/left.ag') }}</div>

            @if ( auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count() == 4)
                <div class="pa-info-desc-type-two-right">
                    <span class="text-red">{{ auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count() }}/{{ __('myhouse/back/annonces/modules/particulier/left.ah') }}</span>
                </div>
            @else
                <div class="pa-info-desc-type-two-right">
                    <span class="text-red">{{ auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count() }}/</span>{{ __('myhouse/back/annonces/modules/particulier/left.ah') }}
                </div>
            @endif

        </div>
    </div>

</div>


