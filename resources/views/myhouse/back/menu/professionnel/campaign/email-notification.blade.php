@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/professionnel/campaign/email-notif.aa') }}
@stop

@section('content')
    <div class="professionnel">
        <div class="menu-wrap">
            <div class="menu-wrap-content">
                <!-- X button -->
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
                <!-- End X button -->
            @include('myhouse.back.includes.professionnel.aside')
            @include('myhouse.back.includes.professionnel.subscription')




            <!-- List -->

                <div class="email">
                    <div class="menu-body">
                        <div class="menu-body-title"> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.ab') }}</div>
                        <div class="menu-body-hm">
                            <div class="menu-body-hr"></div>
                            <div class="menu-body-subs">
                                <span class="menu-body-subs-one"> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.ac') }}</span>
                                <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                            </div>
                        </div>
                        <div class="menu-body-contents">
                            <div class="menu-body-content-campaign">
                                <div class="menu-body-content-campaign-left">{{ __('myhouse/back/menu/professionnel/campaign/email-notif.ad') }}</div>
                                <div class="menu-body-content-campaign-right"> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.ae') }}</div>
                            </div>
                            <div class="menu-body-content-campaign-select">
                                <div class="form-group">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="#" id="#" class="form-control css-select">
                                        <option value=""> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.af') }}</option>
                                        <option value=""> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.af') }}</option>
                                        <option value=""> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.af') }}</option>
                                        <option value=""> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.af') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="menu-body-content-campaign-s-title"> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.ag') }}</div>



                            <div class="menu-body-content-campaign-push-email">

                                <div class="menu-body-content-campaign-push-email-item">
                                    <div class="menu-body-content-campaign-push-email-logo">
                                        <img src="{{ asset('images/residential/single/menu/logo.svg') }}" alt="">
                                    </div>
                                    <div class="menu-body-content-campaign-push-email-item-flex">
                                        <div class="menu-body-content-campaign-push-email-item-one">
                                            <div class="menu-body-content-campaign-push-email-item-one-first campaign-mb-one">
                                                Hac ita persuasione <br>
                                                reducti intra moenia
                                            </div>
                                            <div class="menu-body-content-campaign-push-email-item-one-first campaign-mb-two">
                                                Hac ita persuasione intra <br>
                                                reducti intra moenia
                                            </div>
                                            <div class="menu-body-content-campaign-push-email-item-one-second">
                                                Hac ita persuasione reducti intra <br>
                                                moenia bellatores obseratis undique <br>
                                                portarum aditibus, propugnaculis
                                            </div>
                                        </div>
                                        <div class="menu-body-content-campaign-push-email-item-two">
                                            <div class="menu-body-content-campaign-push-email-item-two-img">
                                                <img src="{{ asset('images/residential/single/menu/ui.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-body-content-campaign-push-email-item-flex-second">
                                        <div class="menu-body-content-campaign-push-email-item-flex-second-one">
                                            Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia
                                            crebra urbes duae faciunt claram salamis et paphus, altera iovis delubris altera
                                            veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum
                                            omnium eadem cyprus ut nullius externi indigens adminiculi indigenis viribus a
                                            fundamento ipso carinae ad supremos usque carbasos
                                        </div>
                                        <div class="menu-body-content-campaign-push-email-item-flex-second-two">
                                            Nec vox
                                            accusatoris ulla
                                            licet subditicii in
                                            malorum
                                            quaerebatur
                                        </div>
                                    </div>
                                    <div class="menu-body-content-campaign-push-email-foot">
                                        <div class="menu-body-content-campaign-push-email-foot-item">
                                            <div> {{ __('myhouse/back/menu/professionnel/campaign/email-notif.ah') }}</div>
                                            <div>002125555555</div>
                                            <div>002125666666</div>
                                        </div>
                                        <div class="menu-body-content-campaign-push-email-foot-item">
                                            <div>{{ __('myhouse/back/menu/professionnel/campaign/email-notif.ai') }}</div>
                                            <div>Autem tamque multiplici </div>
                                            <div>fertilitate abundat</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-body-content-campaign-push-email-item bg-tf">
                                    <div class="menu-body-content-campaign-push-next-item-ck-titles mt-53">{{ __('myhouse/back/menu/professionnel/campaign/email-notif.aj') }}</div>
                                    <div class="portail-content-map">
                                        <div class="portail-content-map-first">{{ __('myhouse/back/menu/professionnel/campaign/email-notif.ak') }}</div>
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


                            <div class="d-flex justify-content-center align-items-center" style="margin-top: 78px; margin-bottom: 50px;">
                                <div>
                                    <a href="{{ route('professionnel.menu.email') }}" class="btn btn-prev mr-2">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('professionnel.menu.push.next.email') }}" style="text-decoration: none; color: inherit">
                                        <div class="menu-body-content-campaign-boxes-buttons">
                                            {{ __('myhouse/back/menu/professionnel/campaign/email-notif.al') }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End List -->


            </div>
        </div>





    </div>
@stop

