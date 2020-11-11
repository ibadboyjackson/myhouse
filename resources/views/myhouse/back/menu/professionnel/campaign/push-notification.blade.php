@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/campaign/push-notification.aa') }}
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
                    <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ab') }}</div>
                    <div class="menu-body-hm">
                        <div class="menu-body-hr"></div>
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ac') }}</span>
                            <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                    <div class="menu-body-contents">
                        <div class="menu-body-content-campaign">
                            <div class="menu-body-content-campaign-left">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ad') }}</div>
                            <div class="menu-body-content-campaign-right">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ae') }}</div>
                        </div>
                        <div class="menu-body-content-campaign-select">
                            <div class="form-group">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="#" id="#" class="form-control css-select">
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.af') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="menu-body-content-campaign-s-title">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ag') }}</div>



                        <div class="menu-body-content-campaign-push-next">
                            <div class="menu-body-content-campaign-push-next-item">
                                <div class="menu-body-content-campaign-push-next-item-block">
                                    <div class="menu-body-content-campaign-push-next-item-block-logo">
                                        <img src="{{ asset('images/residential/single/menu/logo.svg') }}" alt="">
                                    </div>
                                    <div class="menu-body-content-campaign-push-next-item-block-item pb-site">

                                            <div class="menu-body-content-campaign-push-next-item-block-item-title">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ah') }}</div>
                                        <div class="menu-body-content-campaign-push-next-item-block-item-content mb-content">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ai') }}</div>

                                        <div class="menu-body-content-campaign-push-next-item-block-item-content mb-content">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.aj') }}</div>

                                        <div class="menu-body-content-campaign-push-next-item-block-item-content mb-content">002126666666</div>


                                        <div class="menu-body-content-campaign-push-next-item-block-item-content mb-content">
                                            {{ __('myhouse/back/menu/professionnel/campaign/push-notification.ak') }}
                                        </div>

                                        <div class="menu-body-content-campaign-push-next-item-block-item-content">
                                            {{ __('myhouse/back/menu/professionnel/campaign/push-notification.al') }} <br>
                                            {{ __('myhouse/back/menu/professionnel/campaign/push-notification.am') }}

                                        </div>



                                    </div>
                                    <div class="menu-body-content-campaign-push-next-item-block-item">
                                        <div class="menu-body-content-campaign-push-next-item-block-item-img">
                                            <img src="{{ asset('images/residential/single/menu/zz.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-body-content-campaign-push-next-item">
                                <div class="menu-body-content-campaign-push-next-item-ck">
                                    <div class="menu-body-content-campaign-push-next-item-ck-title">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.an') }}</div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">{{ __('myhouse/back/menu/professionnel/campaign/push-notification.ao') }}</div>
                                        <div class="portail-content-map-second">
                                            <div class="portail-content-map-second-box">
                                                <div class="portail-content-map-second-box-item">
                                                    <label for="#"></label>
                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                </div>
                                                <div class="portail-content-map-second-box-item">
                                                    <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>








                        <div class="d-flex justify-content-center align-items-center" style="margin-top: 78px; margin-bottom: 50px;">
                            <div>
                                <a href="{{ route('professionnel.menu.push') }}" class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('professionnel.menu.push.next.success') }}" style="text-decoration: none; color: inherit">
                                    <div class="menu-body-content-campaign-boxes-buttons">
                                        {{ __('myhouse/back/menu/professionnel/campaign/push-notification.ap') }}
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- End List -->


            </div>
        </div>
    </div>
@stop
