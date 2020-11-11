@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/campaign/push.aa') }}
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
                    <div class="menu-body-title">{{ __('myhouse/back/menu/professionnel/campaign/push.ab') }}</div>
                    <div class="menu-body-hm">
                        <div class="menu-body-hr"></div>
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/professionnel/campaign/push.ac') }}</span>
                            <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                    <div class="menu-body-contents">
                        <div class="menu-body-content-campaign">
                            <div class="menu-body-content-campaign-left">{{ __('myhouse/back/menu/professionnel/campaign/push.ad') }}</div>
                            <div class="menu-body-content-campaign-right">{{ __('myhouse/back/menu/professionnel/campaign/push.ae') }}</div>
                        </div>
                        <div class="menu-body-content-campaign-select">
                            <div class="form-group">
                                <div class="content-arrow">
                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                </div>
                                <select name="#" id="#" class="form-control css-select">
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push.af') }}</option>
                                    <option value="">{{ __('myhouse/back/menu/professionnel/campaign/push.af') }}</option>
                                </select>
                            </div>
                        </div>



                        <div class="menu-body-content-campaign-push">
                            <div class="menu-body-content-campaign-push-title">{{ __('myhouse/back/menu/professionnel/campaign/push.ag') }}</div>
                            <div class="menu-body-content-campaign-push-box">
                                <div class="menu-body-content-campaign-push-box-item">
                                    <div class="menu-body-content-campaign-push-box-item-box">
                                        <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/professionnel/campaign/push.ah') }}</div>
                                        <div class="menu-body-content-campaign-push-box-item-box-right">
                                            <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/professionnel/campaign/push.ai') }}">
                                        </div>
                                    </div>
                                    <div class="menu-body-content-campaign-push-box-item-box">
                                        <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/professionnel/campaign/push.aj') }}</div>
                                        <div class="menu-body-content-campaign-push-box-item-box-right">
                                            <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/professionnel/campaign/push.ak') }}">
                                        </div>
                                    </div>
                                    <div class="menu-body-content-campaign-push-box-item-box">
                                        <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/professionnel/campaign/push.al') }}</div>
                                        <div class="menu-body-content-campaign-push-box-item-box-right">
                                            <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/professionnel/campaign/push.as') }}">
                                        </div>
                                    </div>
                                    <div class="menu-body-content-campaign-push-box-item-box">
                                        <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/professionnel/campaign/push.am') }}</div>
                                        <div class="menu-body-content-campaign-push-box-item-box-right">
                                            <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/professionnel/campaign/push.an') }}">
                                        </div>
                                    </div>
                                    <div class="menu-body-content-campaign-push-box-item-box">
                                        <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/professionnel/campaign/push.ao') }}</div>
                                        <div class="menu-body-content-campaign-push-box-item-box-right">
                                            <textarea name="#" id="" cols="30" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>


                                </div>
                                <div class="menu-body-content-campaign-push-box-item">
                                    <div class="menu-body-content-campaign-push-box-item-box-block">
                                        <div class="upload-img text-center">
                                            <label for="file-upload" class="custom-files-uploads">
                                                <img src="{{ asset('images/residential/single/menu/ico.svg') }}" alt="">
                                            </label>
                                            <input id="file-upload" type="file">
                                            <div class="upload-texts">{{ __('myhouse/back/menu/professionnel/campaign/push.ap') }}</div>
                                            <div class="upload-texts-b">
                                                {{ __('myhouse/back/menu/professionnel/campaign/push.aq') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>








                        <a href="{{ route('professionnel.menu.push.next') }}" style="text-decoration: none; color: inherit">
                            <div class="menu-body-content-campaign-boxes-button">
                                {{ __('myhouse/back/menu/professionnel/campaign/push.ar') }}
                            </div>
                        </a>
                    </div>
                </div>

                <!-- End List -->


            </div>
        </div>
    </div>
@stop
