@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/campaign/push-success.aa') }}
@stop

@section('content')
    <div class="professionnel">
        <div class="menu-wrap">
            <div class="menu-wrap-content">
                <!-- X button -->
                <div class="menu-wrap-x-button">
                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" style='cursor: pointer;'>
                          <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
                    </a>
                </div>
                <!-- End X button -->
            @include('myhouse.back.includes.professionnel.aside')
            @include('myhouse.back.includes.professionnel.subscription')


            <!-- List -->

                <div class="menu-body">
                    <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/campaign/push-success.ab') }}</div>
                    <div class="menu-body-hm">
                        <div class="menu-body-hr"></div>
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/campaign/push-success.ac') }}</span>
                            <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                    <div class="menu-body-contents">
                        <div class="menu-body-content-campaign">
                            <div class="menu-body-content-campaign-left">{{ __('myhouse/back/menu/professionnel/campaign/push-success.ad') }}</div>
                            <div class="menu-body-content-campaign-right">{{ __('myhouse/back/menu/professionnel/campaign/push-success.ae') }}</div>
                        </div>
                        <div class="menu-body-content-campaign-select">
                            <div class="form-group">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="#" id="#" class="form-control css-select">
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-success.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-success.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-success.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-success.af') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="menu-body-content-campaign-select-boot">
                            {{ __('myhouse/back/menu/professionnel/campaign/push-success.ag') }}
                        </div>
                        <div class="menu-body-content-campaign-boxes-success">
                            <div class="menu-body-content-campaign-boxes-success-title">{{ __('myhouse/back/menu/professionnel/campaign/push-success.ah') }} <br> {{ __('myhouse/back/menu/professionnel/campaign/push-success.ai') }}</div>
                            <div class="menu-body-content-campaign-boxes-success-img">
                                <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                            </div>
                        </div>
                        <a href="{{ route('professionnel.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                            <div class="menu-body-content-campaign-boxes-button">
                                {{ __('myhouse/back/menu/professionnel/campaign/push-success.aj') }}
                            </div>
                        </a>
                    </div>
                </div>

                <!-- End List -->


            </div>
        </div>
    </div>
@stop
