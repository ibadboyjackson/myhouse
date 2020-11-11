@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/neuf/entreprise.aa') }}
@stop

@section('content')
    <div class="plateform">
        <div class="plateform-wrap">
            <div class="menu-wrap-x-button">
                <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
            </div>

            <div class="palateform-title text-uppercase">
                {{ __('myhouse/back/menu/neuf/entreprise.ab') }}
            </div>
            <div class="palateform-subtitle-hr"></div>

            <div class="entreprise">
                <div class="ca-page-item-second-enterprise">
                    <div class="ca-page-item-second-enterprise-box">
                        <div class="ca-page-item-second-enterprise-title">
                            {{ __('myhouse/back/menu/neuf/entreprise.ac') }}
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

            </div>

            <div class="entreprise-title">
                <div class="ca-page-item-second-enterprise-title">
                    {{ __('myhouse/back/menu/neuf/entreprise.ad') }}
                </div>
            </div>
            <div class="entreprise-up">
                <div class="ca-page-item-third-type-boxe-upload">
                    <div class="upload-img text-center">
                        <label for="file-upload" class="custom-file-upload">
                            <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                        </label>
                        <input id="file-upload" type="file">
                        <div class="upload-text">{{ __('myhouse/back/menu/neuf/entreprise.ae') }}</div>
                    </div>
                </div>
            </div>

            <div class="entreprise-area">
                <div class="ca-page-item-second-enterprise-title">
                    {{ __('myhouse/back/menu/neuf/entreprise.af') }}
                </div>
                <div class="ca-page-item-second-subscriptionsss">

                    <div class="ca-page-item-second-body">
                        <div class="ca-page-item-second-body-beta">
                            <textarea name="#" id="#" cols="30" rows="16" class="form-control" placeholder="{{ __('myhouse/back/menu/neuf/entreprise.ag') }}"></textarea>
                        </div>
                    </div>


                    <div class="ca-page-item-second-footer">
                        <button class="btn btn-connections" type="submit">{{ __('myhouse/back/menu/neuf/entreprise.ah') }}</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop
