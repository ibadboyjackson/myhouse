<div class="ca-page-item-first">
    <div class="ca-page-item-first-img">
        <img src="{{ asset('images/residential/building.svg') }}" alt="building" class="img-fluid">
    </div>
    <div class="ca-page-item-first-text">{{ __('myhouse/back/annonces/modules/professionnel/left.aa') }}</div>
</div>
<div class="pa-info">

    @if (Route::is('professionnel.subscription') || Route::is('professionnel.enregistrement'))

    @else

        <div class="pa-info-left">
            {{ __('myhouse/back/annonces/modules/professionnel/left.ab') }} <br>
            {{ __('myhouse/back/annonces/modules/professionnel/left.ac') }}
        </div>

    @endif


    <div class="pa-info-right">
        

        @if (Route::is('professionnel.transaction') || Route::is('professionnel.edit'))
            @if (isset($id) && isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'transaction' : '')
                <input type="checkbox" id="transaction" name="page" value="transaction"  class="ios" checked>
            @else
                <input type="checkbox" id="transaction" name="page" value="transaction"  class="ios">
            @endif
        @endif


            @if (Route::is('professionnel.update') || Route::is('professionnel.type.type'))
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'type' : '')
                    <input type="checkbox" id="transaction" name="page" value="type"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="type"  class="ios">
                @endif
            @endif

            @if (Route::is('professionnel.description'))
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'description' : '')
                    <input type="checkbox" id="transaction" name="page" value="description"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="description"  class="ios">
                @endif
            @endif

            @if (Route::is('professionnel.critere'))
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'critere' : '')
                    <input type="checkbox" id="transaction" name="page" value="critere"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="critere"  class="ios">
                @endif
            @endif



            @if (Route::is('professionnel.annonce'))
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'annonce' : '')
                    <input type="checkbox" id="transaction" name="page" value="annonce"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="annonce"  class="ios">
                @endif
            @endif


            @if (Route::is('professionnel.localisation')) 
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'localisation' : '')
                    <input type="checkbox" id="transaction" name="page" value="localisation"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="localisation"  class="ios">
                @endif
            @endif


            @if (Route::is('professionnel.upload'))
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'upload' : '')
                    <input type="checkbox" id="transaction" name="page" value="upload"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="upload"  class="ios">
                @endif
            @endif

            @if (Route::is('professionnel.media'))
                @if (isset(auth()->user()->professionnel->last()->page) ? auth()->user()->professionnel->last()->page === 'media' : '')
                    <input type="checkbox" id="transaction" name="page" value="media"  class="ios" checked>
                @else
                    <input type="checkbox" id="transaction" name="page" value="media"  class="ios">
                @endif
            @endif
    </div>
</div>
<div class="pa-info-first">
    <div class="pa-info-hr"></div>
    <div class="pa-info-first-text"> 
        {{ __('myhouse/back/annonces/modules/professionnel/left.ad') }} <span>{{ auth()->user()->email }}</span>
    </div>
    <div class="pa-info-hr"></div>

    <div class="pa-info-desc">
        <div class="pa-info-desc-type-one">
            <div class="pa-info-desc-type-one-left">Votre abonnement</div>
            <div class="pa-info-desc-type-one-right">Pack 6</div>
        </div>

        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Annonces BIEN IMMOBILIER</div>
            <div class="pa-info-desc-type-two-right">
                200
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Vidéos HD</div>
            <div class="pa-info-desc-type-two-right">
                10
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Photos</div>
            <div class="pa-info-desc-type-two-right">
                100
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Push mobile</div>
            <div class="pa-info-desc-type-two-right">
                10
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Repère map 2x plus grand</div>
            <div class="pa-info-desc-type-two-right">
                10x15 jours
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Repère map en couleur</div>
            <div class="pa-info-desc-type-two-right">
                10x15 jours
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Bannière 300 x 600 px page d'accueil</div>
            <div class="pa-info-desc-type-two-right">
                10x 3 jours
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Bannière 300 x 600 px page LISTE</div>
            <div class="pa-info-desc-type-two-right">
                10x 3 jours
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Rectangle 336 x 280 px page d'accueil</div>
            <div class="pa-info-desc-type-two-right">
                10x 3 jours
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Rectangle 336 x 280 px page LISTE</div>
            <div class="pa-info-desc-type-two-right">
                10x 3 jours
            </div>
        </div>
        <div class="pa-info-desc-type-two mt-1">
            <div class="pa-info-desc-type-two-left">Bannière 970 x 90 px page d'accueil</div>
            <div class="pa-info-desc-type-two-right">
                10x 3 jours
            </div>
        </div>
    </div>
</div>
