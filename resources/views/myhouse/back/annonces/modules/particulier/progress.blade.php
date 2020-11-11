<div class="ca-page-item-second-title">
    <span class="ca-page-item-second-title-first">{{ __('myhouse/back/annonces/modules/particulier/progress.aa') }}</span>
    <span class="ca-page-item-second-title-second text-uppercase">{{ __('myhouse/back/annonces/modules/particulier/progress.ab') }}</span>
</div>


<div class="ca-page-item-second-round">
    <div class="ca-page-hr"></div>
    <div class="ca-page-item-second-round-block">

        <div class="ca-page-item-second-round-block-rounded">
            <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">{{ __('myhouse/back/annonces/modules/particulier/progress.ac') }}</div>
            <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">{{ __('myhouse/back/annonces/modules/particulier/progress.ad') }}</div>
        </div>

        @if(Route::is('particulier.transaction') ||
            Route::is('particulier.type.type') ||
            Route::is('particulier.description') ||
            Route::is('particulier.edit') ||
            Route::is('particulier.critere') ||
            Route::is('particulier.localisation.localisation') ||
            Route::is('particulier.upload')
            )

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ae') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.af') }}
                </div>
            </div>

        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ae') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.af') }}
                </div>
            </div>
        @endif

        @if(Route::is('particulier.type.type') ||
            Route::is('particulier.description') ||
            Route::is('particulier.critere') ||

            Route::is('particulier.localisation.localisation') ||
            Route::is('particulier.upload')
            )

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ag') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ah') }}
                </div>
            </div>

        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ag') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ah') }}
                </div>
            </div>
        @endif

        @if(Route::is('particulier.description') ||
            Route::is('particulier.localisation.localisation') ||
            Route::is('particulier.critere') ||
            Route::is('particulier.upload')
            )

            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ai') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.aj') }}
                    <br> {{ __('myhouse/back/annonces/modules/particulier/progress.ak') }}
                </div>
            </div>

        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ai') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.aj') }}
                    <br> {{ __('myhouse/back/annonces/modules/particulier/progress.ak') }}
                </div>
            </div>

        @endif

        @if(Route::is('particulier.localisation.localisation') ||
            Route::is('particulier.upload')
            )
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.al') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.am') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.al') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.am') }}
                </div>
            </div>
        @endif

        @if(Route::is('particulier.upload'))
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle ca-page-bg-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.an') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text ca-page-txt-active">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ao') }}
                </div>
            </div>
        @else
            <div class="ca-page-item-second-round-block-rounded">
                <div class="ca-page-item-second-round-block-rounded-circle">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.an') }}
                </div>
                <div class="ca-page-item-second-round-block-rounded-text">
                    {{ __('myhouse/back/annonces/modules/particulier/progress.ao') }}
                </div>
            </div>
        @endif
















    </div>
</div>
