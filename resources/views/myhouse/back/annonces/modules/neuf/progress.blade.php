<div class="ca-page-item-second-title">
    <span class="ca-page-item-second-title-first">{{ __('myhouse/back/annonces/modules/neuf/progress.aa') }}</span>
    <span class="ca-page-item-second-title-second">{{ __('myhouse/back/annonces/modules/neuf/progress.ab') }}</span>
</div>
<div class="ca-page-item-second-round">
    <div class="ca-page-hr"></div>
    <div class="ca-page-item-second-round-block">
        <div class="ca-page-item-second-round-block-rounded">
            <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ac') }}</div>
            <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ad') }}</div>
        </div>

            @if (Route::is('neuf.abonnement') ||
                     Route::is('neuf.enregistrement') ||
                     Route::is('neuf.description') ||
                     Route::is('neuf.critere') ||
                     Route::is('neuf.annonce') ||
                     Route::is('neuf.upload') ||
                     Route::is('neuf.localisation') ||
                     Route::is('neuf.type') ||
                     Route::is('neuf.payment')
                     )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ae') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.af') }}</div>
            </div>

            @else
                <div class="ca-page-item-second-round-block-rounded">
                    <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.ae') }}</div>
                    <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.af') }}</div>
                </div>
            @endif

            @if (Route::is('neuf.enregistrement') ||
                     Route::is('neuf.description') ||
                     Route::is('neuf.critere') ||
                     Route::is('neuf.annonce') ||
                     Route::is('neuf.upload') ||
                     Route::is('neuf.localisation') ||
                     Route::is('neuf.type') ||
                     Route::is('neuf.payment')
                     )
                    <div class="ca-page-item-second-round-block-rounded">
                        <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ag') }}</div>
                        <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ah') }}</div>
                    </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.ag') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.ah') }}</div>
            </div>
                @endif

            @if (Route::is('neuf.description') ||
                     Route::is('neuf.critere') ||
                     Route::is('neuf.annonce') ||
                     Route::is('neuf.upload') ||
                     Route::is('neuf.localisation') ||
                     Route::is('neuf.type') ||
                     Route::is('neuf.payment')
                     )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ai') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.aj') }}</div>
            </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.ai') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.aj') }}</div>
            </div>
                @endif

            @if (Route::is('neuf.critere') ||
                     Route::is('neuf.annonce') ||
                     Route::is('neuf.upload') ||
                     Route::is('neuf.localisation') ||
                     Route::is('neuf.type') ||
                     Route::is('neuf.payment')
                     )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ak') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.al') }}</div>
            </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.ak') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.al') }}</div>
            </div>
                @endif

            @if (Route::is('neuf.annonce') ||
                     Route::is('neuf.upload') ||
                     Route::is('neuf.localisation') ||
                     Route::is('neuf.type') ||
                     Route::is('neuf.payment')
                     )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.am') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.an') }} <br>
                    {{ __('myhouse/back/annonces/modules/neuf/progress.ao') }}
                </div>
            </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.am') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.an') }} <br>
                    {{ __('myhouse/back/annonces/modules/neuf/progress.ao') }}
                </div>
            </div>
                @endif

            @if (Route::is('neuf.upload') ||
                   Route::is('neuf.localisation') ||
                   Route::is('neuf.type') ||
                   Route::is('neuf.payment')
                   )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ap') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.aq') }}</div>
            </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.ap') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.aq') }}</div>
            </div>
                @endif


            @if (Route::is('neuf.localisation') ||
                 Route::is('neuf.type') ||
                 Route::is('neuf.payment')
                 )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ar') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.as') }}</div>
            </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.ar') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.as') }}</div>
            </div>
                @endif


            @if (Route::is('neuf.type') || Route::is('neuf.payment'))
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.at') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.au') }} <br>
                    {{ __('myhouse/back/annonces/modules/neuf/progress.av') }}
                </div>
            </div>
                @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.at') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.au') }} <br>
                    {{ __('myhouse/back/annonces/modules/neuf/progress.av') }}
                </div>
            </div>
                @endif

            @if (Route::is('neuf.payment'))

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/neuf/progress.aw') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/neuf/progress.ax') }}</div>
            </div>
                @else

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">{{ __('myhouse/back/annonces/modules/neuf/progress.aw') }}</div>
                <div class="ca-page-item-second-round-block-rounded-text">{{ __('myhouse/back/annonces/modules/neuf/progress.ax') }}</div>
            </div>
                @endif























    </div>
</div>
