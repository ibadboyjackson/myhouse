@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/description.aa') }}
@stop

@section('content')
    <div class="neuf-desc">
        <div class="c-page a-neuf">
            <div class="ca-page">
                <div class="ca-page-item">
                    @include('myhouse.back.annonces.modules.neuf.left')
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-second">

                        @include('myhouse.back.annonces.modules.neuf.progress')


                        @if (isset($id))
                            <form action="{{ route('neuf.update', ['id' => $id]) }}" method="post">
                            @csrf
                            @else
                            <form action="{{ route('neuf.critere') }}" method="get">
                            @endif



                            <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-connexion-box">

                                    <input type="hidden" name="nom_projet" value="{{ urldecode(request()->get('nom_projet')) }}">
                                    <input type="hidden" name="last_id" value="{{ \Illuminate\Support\Str::random(16) }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/neuf/description.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-title-hr"></div>
                                    <div class="ca-page-item-third-connexion-box-title-title">{{ __('myhouse/back/annonces/neuf/description.ac') }}</div>

                                </div>
                            </div>
                            <div class="ca-page-item-second-subscription">
                                <div class="ca-page-item-second-body">
                                    <div class="ca-page-item-third-type-box">


                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                            <div class="pt_ytts text-center text-uppercase">
                                                <img src="http://myhouse.com/images/residential/single/b1.svg" alt="">
                                                {{ __('myhouse/back/annonces/neuf/description.ad') }}
                                            </div>
                                            <div class="pc-y">
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="appartement" id="appartement" value="1">
                                                                <label for="appartement">
                                                                    {{ __('myhouse/back/annonces/neuf/description.ae') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man1" id="man-1" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man2" id="man-2" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man3" id="man-3" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ah') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_appartement" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_appartement" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ak') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_de_appartement" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.al') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_a_appartement" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.am') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="villa" id="villa" value="1">
                                                                <label for="villa">
                                                                    {{ __('myhouse/back/annonces/neuf/description.an') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man4" id="man-4" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man5" id="man-5" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man6" id="man-6" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ao') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_villa" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_villa" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ak') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_de_villa" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.al') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_a_villa" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.am') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="maison" id="maison" value="1">
                                                                <label for="maison">
                                                                    {{ __('myhouse/back/annonces/neuf/description.ap') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man7" id="man-7" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man8" id="man-8" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man9" id="man-9" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ah') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_maison" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_maison" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ak') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_de_maison" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.al') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_a_maison" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.am') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="riad" id="riad" value="1">
                                                                <label for="riad">
                                                                    {{ __('myhouse/back/annonces/neuf/description.aq') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man10" id="man-10" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man11" id="man-11" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man12" id="man-12" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ah') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_riad" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_riad" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ak') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_de_riad" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.al') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_a_riad" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.am') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="chalet" id="chalet" value="1">
                                                                <label for="chalet">
                                                                    {{ __('myhouse/back/annonces/neuf/description.ar') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man13" id="man-13" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man14" id="man-14" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man15" id="man-15" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ah') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_chalet" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_chalet" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.ak') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_de_chalet" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.al') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="nombre_chambre_a_chalet" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.am') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border-tb">
                                            <div class="pt_ytts text-center text-uppercase">
                                                <img src="http://myhouse.com/images/residential/single/b2.svg" alt="">
                                                {{ __('myhouse/back/annonces/neuf/description.as') }}
                                            </div>
                                            <div class="pc-y">
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="commerce" id="commerce" value="1">
                                                                <label for="commerce">
                                                                    {{ __('myhouse/back/annonces/neuf/description.at') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man16" id="man-16" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man17" id="man-17" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man18" id="man-18" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.au') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_commerce" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_commerce" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="bureau" id="bureau" value="1">
                                                                <label for="bureau">
                                                                    {{ __('myhouse/back/annonces/neuf/description.av') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man19" id="man-19" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man20" id="man-20" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man21" id="man-21" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.au') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_bureau" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_bureau" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="plateau" id="plateau" value="1">
                                                                <label for="plateau">
                                                                    {{ __('myhouse/back/annonces/neuf/description.aw') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man22" id="man-22" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man23" id="man-23" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man24" id="man-24" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.au') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_plateau" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_plateau" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ca-page-item-third-type-box-item ca-page-item-third-type-box-border">
                                            <div class="pt_ytts text-center text-uppercase">
                                                <img src="http://myhouse.com/images/residential/single/b3.svg" alt="">
                                                {{ __('myhouse/back/annonces/neuf/description.ax') }}
                                            </div>
                                            <div class="pc-y">
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="residentiel" id="residentiel" value="1">
                                                                <label for="residentiel">
                                                                    {{ __('myhouse/back/annonces/neuf/description.ay') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man25" id="man-25" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man26" id="man-26" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man27" id="man-27" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.au') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_residentiel" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_residentiel" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pc_yt">
                                                    <div class="pc_ytt">
                                                        <div class="pc-ty">
                                                            <div class="pc-checkbox">
                                                                <input type="checkbox" name="commercial" id="commercial" value="1">
                                                                <label for="commercial">
                                                                    {{ __('myhouse/back/annonces/neuf/description.as') }}
                                                                </label>
                                                            </div>
                                                            <div class="pc-ty-content">
                                                                <div class="pc-ty-content-title">{{ __('myhouse/back/annonces/neuf/description.af') }}</div>
                                                                <div class="pc-ty-content-input">
                                                                    <div>
                                                                        <input type="text" name="man28" id="man-28" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man29" id="man-29" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        <input type="text" name="man30" id="man-30" placeholder="000." maxlength="3">
                                                                    </div>
                                                                    <div>
                                                                        MAD
                                                                    </div>
                                                                </div>
                                                                <div class="pc-ty-content-other">
                                                                    <div class="pc-ty-content-other-title">{{ __('myhouse/back/annonces/neuf/description.au') }}</div>
                                                                    <div class="pc-ty-content-other-input">
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_de_commercial" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.ai') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="ca-page-item-second-body-card-item-body-item">
                                                                                <input type="text" name="superficie_a_commercial" class="form-control yt-input" placeholder="{{ __('myhouse/back/annonces/neuf/description.aj') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                            <div class="ca-page-item-second-footer">
                                <button class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/description.az') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-third">
                        <div class="ca-page-item-third-button-x clearfix">
                            <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>
                        <div class="ca-page-item-third-thumb">
                            <img src="{{ asset('images/residential/desc.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/neuf/description.aaa') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
    <script src="{{ asset('development/js/autotab.js') }}"></script>
@stop
