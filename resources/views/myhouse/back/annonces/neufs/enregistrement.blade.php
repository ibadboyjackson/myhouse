@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/enregistrement.aa') }}
@stop

@section('content')
    <div class="c-page a-neuf">
        <div class="ca-page">
            <div class="ca-page-item">
                @include('myhouse.back.annonces.modules.neuf.left')
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-second">

                    @include('myhouse.back.annonces.modules.neuf.progress')


                    <form action="{{ route('neuf.entreprise') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">

                                <div class="ca-page-item-third-connexion-box-title">
                                    {{ __('myhouse/back/annonces/neuf/enregistrement.ab') }}
                                </div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>
                                <div class="ca-page-item-third-connexion-box-title-title">{{ __('myhouse/back/annonces/neuf/enregistrement.ac') }}</div>

                            </div>
                        </div>
                        <div class="ca-page-item-second-subscription">
                            <div class="ca-page-item-second-body">

                                <div class="cap-page-item-second-body-child" style="margin-bottom: 166px;">
                                    <div class="field">
                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/neuf/enregistrement.ad') }}</label>
                                        <input type="text" id="name" name="name" class="field-input" required>

                                        @error(str_replace(' ', '_',  __('myhouse/back/annonces/neuf/enregistrement.ad')))
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!--

                                <div class="ca-page-item-second-enterprise">
                                    <div class="ca-page-item-second-enterprise-box">
                                        <div class="ca-page-item-second-enterprise-title">
                                            {{ __('myhouse/back/annonces/neuf/enregistrement.ae') }}
                                        </div>
                                        <div class="ca-page-item-second-enterprise-box-box">
                                            <div class="ca-page-item-second-enterprise-box-box-item">
                                                <div class="ca-page-item-second-enterprise-box-box-item-child">
                                                    <div class="ca-page-item-second-enterprise-box-box-item-child-one">
                                                    <span class="country-content-content">
                                                        <input type="radio" id="enter" name="radio-groups">
                                                        <label for="enter"></label>
                                                    </span>
                                                    </div>
                                                    <div class="ca-page-item-second-enterprise-box-box-item-child-two">
                                                        <img src="{{ asset('images/residential/single/menu/rec.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-second-enterprise-box-box-item-child">
                                                    <div class="ca-page-item-second-enterprise-box-box-item-child-one">
                                                    <span class="country-content-content">
                                                        <input type="radio" id="enter1" name="radio-groups">
                                                        <label for="enter1"></label>
                                                    </span>
                                                    </div>
                                                    <div class="ca-page-item-second-enterprise-box-box-item-child-two">
                                                        <img src="{{ asset('images/residential/single/menu/rec.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ca-page-item-second-enterprise-or" style="padding-top: 101px; padding-bottom: 104px;">{{ __('myhouse/back/annonces/neuf/enregistrement.af') }}</div>

                                -->

                                <!-- <div class="ca-page-item-second-enterprise">
                                    <div class="ca-page-item-second-enterprise-box">
                                        <div class="ca-page-item-second-enterprise-title"></div>
                                        <div class="ca-page-item-second-enterprise-box-box">
                                            <div class="ca-page-item-second-enterprise-box-box-item">
                                                <div class="ca-page-item-second-enterprise-box-box-item-child">
                                                    1
                                                </div>
                                                <div class="ca-page-item-second-enterprise-box-box-item-child">2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="ca-page-item-body-child-enterprise">

                                    <div class="ca-page-item-body-child-enterprise">
                                        <div class="ca-page-item-child-enterprise-box">
                                            <div class="ca-page-item-child-enterprise-box-title">{{ __('myhouse/back/annonces/professionnel/enregistrement.af') }}</div>
                                            <div class="ca-page-item-child-enterprise-box-title-field">
                                                <div class="ca-page-item-child-enterprise-box-title-field-content">
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.ag') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.ag') }}" class="field-input">

                                                        @error(str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.ag')))
                                                            <span class="myhouse-invalid" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.ah') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.ah') }}" class="field-input">

                                                        @error(str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.ah')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.ai') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.ai') }}" class="field-input">

                                                        @error(str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.ai')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.aj') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.aj') }}" class="field-input">

                                                        @error(str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.aj')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.ak') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.ak') }}" class="field-input">
                                                    </div>
                                                </div>
                                                <div class="ca-page-item-child-enterprise-box-title-field-content">
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.al') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.al') }}" class="field-input">

                                                        @error(str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.al')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.am') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.am') }}" class="field-input">

                                                        @error(str_replace(' ', '_', __('myhouse/back/annonces/professionnel/enregistrement.aj')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.an') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.an') }}" class="field-input">
                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.ao') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.ao') }}" class="field-input">
                                                    </div>
                                                    <div class="field">
                                                        <label for="name" class="field-label">{{ __('myhouse/back/annonces/professionnel/enregistrement.as') }}</label>
                                                        <input type="text" id="name" name="{{ __('myhouse/back/annonces/professionnel/enregistrement.as') }}" class="field-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ca-page-item-child-enterprise-box-upload">
                                                <label for="file-upload" class="custom-file-upload">
                                                    <img src="{{ asset('images/residential/upload.svg') }}" alt="">
                                                </label>
                                                <input type="file" id="file-upload" name="image" />
                                                <div class="file-upload-text">{{ __('myhouse/back/annonces/professionnel/enregistrement.ap') }}</div>
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
                            <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/enregistrement.ar') }}</button>
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
                        <img src="{{ asset('images/residential/data.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/neuf/enregistrement.as') }} <br>
                        {{ __('myhouse/back/annonces/neuf/enregistrement.at') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
