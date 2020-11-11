<div class="ca-page-item-second-title">
    <span class="ca-page-item-second-title-first">{{ __('myhouse/back/annonces/modules/professionnel/progress.aa') }}</span>
    <span class="ca-page-item-second-title-second text-uppercase">{{ __('myhouse/back/annonces/modules/professionnel/progress.ab') }}</span>
</div>
<div class="ca-page-item-second-round">

    <div class="ca-page-hr"></div>

    <div class="ca-page-item-second-round-block">

        <div class="ca-page-item-second-round-block-rounded">
            <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                {{ __('myhouse/back/annonces/modules/professionnel/progress.ac') }}
            </div>
            <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                {{ __('myhouse/back/annonces/modules/professionnel/progress.ad') }}
            </div>
        </div>

        <div class="ca-page-item-second-round-block-rounded">
            <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                {{ __('myhouse/back/annonces/modules/professionnel/progress.ae') }}
            </div>
            <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                {{ __('myhouse/back/annonces/modules/professionnel/progress.af') }} 
            </div>
        </div>


        @if(Route::is('professionnel.enregistrement') ||
            Route::is('professionnel.transaction') ||
            Route::is('professionnel.edit') ||

            Route::is('professionnel.type.type') ||
            Route::is('professionnel.description') ||
            Route::is('professionnel.annonce') ||
            Route::is('professionnel.media') ||
            Route::is('professionnel.critere') ||

            Route::is('professionnel.payement') ||
            Route::is('professionnel.localisation')
            )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ag') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ah') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ag') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ah') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.transaction') ||
            Route::is('professionnel.type.type') ||
            Route::is('professionnel.description') ||
            Route::is('professionnel.annonce') ||
            Route::is('professionnel.media') ||
            Route::is('professionnel.critere') ||
            Route::is('professionnel.edit') ||

            Route::is('professionnel.payement') ||
            Route::is('professionnel.localisation')
            )

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ai') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.aj') }}
                </div>
            </div>
        @else

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ai') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.aj') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.type.type') ||
            Route::is('professionnel.description') ||
            Route::is('professionnel.annonce') ||
            Route::is('professionnel.critere') ||

            Route::is('professionnel.media') ||
            Route::is('professionnel.payement') ||
            Route::is('professionnel.localisation')
            )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ak') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.al') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ak') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.al') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.description') ||
            Route::is('professionnel.media') ||
            Route::is('professionnel.annonce') ||
            Route::is('professionnel.critere') ||

            Route::is('professionnel.payement') ||
            Route::is('professionnel.localisation')
            )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.am') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.an') }} <br>
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ao') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.am') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.an') }} <br>
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ao') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.annonce') ||
            Route::is('professionnel.media') ||
            
            Route::is('professionnel.localisation') ||
            Route::is('professionnel.payement')
            )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ap') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.aq') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ap') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.aq') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.media') ||
            Route::is('professionnel.localisation') ||
            Route::is('professionnel.payement')
            )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ar') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.as') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.ar') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.as') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.localisation') ||
            Route::is('professionnel.payement'))
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.at') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.au') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.at') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.au') }}
                </div>
            </div>
        @endif


        @if(Route::is('professionnel.payement'))
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.av') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.aw') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.av') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/professionnel/progress.aw') }}
                </div>
            </div>
        @endif















    </div>
</div>
