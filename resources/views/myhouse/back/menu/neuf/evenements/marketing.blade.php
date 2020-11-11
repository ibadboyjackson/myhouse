@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/neuf/evenements/marketing.aa') }}
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
                @include('myhouse.back.includes.neuf.aside')


                <div class="neuf">
                    @include('myhouse.back.includes.neuf.subscription')
                </div>



                <!-- List -->

                <div class="menu-body">

                    <div class="menu-body-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.ab') }}</div>

                    <div class="menu-body-hm">
                        <div class="menu-body-hr"></div>
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/neuf/evenements/marketing.ac') }}</span>
                            <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                        </div>
                    </div>

                    <form action="" method="get" id = "campagne-form">
                        @csrf
                        <div class="menu-body-event">

                            <div class="menu-body-event-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.ad') }}</div>

                            @if (request()->get('q') === 'portes-ouvertes')

                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>

                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                       @include('myhouse.back.menu.neuf.evenements.module.extract')
                                    </select>

                                </div>

                                <div class="menu-body-event-select-subtitle">{{ __('myhouse/back/menu/neuf/evenements/marketing.ai') }}</div>


                                @if(isset($clickable))
                                    <div class="menu-body-event-bbox-success">
                                        <div class="menu-body-event-bbox-success-title">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aj') }} <br>
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.ak') }}
                                        </div>
                                        <div class="menu-body-event-bbox-success-img">
                                            <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                                        <div class="menu-body-event-close menu-body-event-c14">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.al') }}
                                        </div>
                                    </a>
                                @else
                                    <div class="menu-body-event-bbox">
                                        <div class="menu-body-content-campaign-push-next-item-ck-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.am') }}</div>
                                        <div class="portail-content-map">
                                            <div class="portail-content-map-seconds">
                                                <div class="portail-content-map-second-boxs">
                                                    <div>
                                                        <div class="portail-content-map-second-box-item">
                                                            <div class="portail-content-map-firsts">{{ __('myhouse/back/menu/neuf/evenements/marketing.an') }}</div>
                                                            <label for="#"></label>
                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                        </div>
                                                    </div>
                                                    <div class="portail-content-map-second-box-item">
                                                        <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                    </div>
                                                    <div class="portail-content-map-second-box-item">
                                                        <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-body-event-close menu-body-event-c14" id="campagne">
                                        <input type="hidden" name="clickable" value="click">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.ao') }}
                                    </div>
                                @endif




































                            @elseif(request()->get('q') === 'campagne-facebook')


                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        @include('myhouse.back.menu.neuf.evenements.module.extract')
                                    </select>

                                </div>

                                @if(isset($facebook))
                                    <div class="menu-body-event-facebook-result">
                                        <div class="menu-body-event-facebook-result-title">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.ap') }}
                                        </div>
                                        <div class="menu-body-event-facebook-result-box">

                                            <div class="menu-body-event-facebook-result-box-grid">
                                                <div class="menu-body-event-facebook-result-box-one">
                                                    <div class="menu-body-event-facebook-result-box-one-img">
                                                        <img src="{{ asset('images/residential/single/menu/im.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="menu-body-event-facebook-result-box-two">
                                                    <div class="menu-body-event-facebook-result-box-two-block">
                                                        <div class="menu-body-content-campaign-push-next-item-ck-title-cp">{{ __('myhouse/back/menu/neuf/evenements/marketing.aq') }}</div>
                                                        <div class="portail-content-map">
                                                            <div class="portail-content-map-seconds">
                                                                <div class="portail-content-map-second-boxs">
                                                                    <div>
                                                                        <div class="portail-content-map-second-box-item">
                                                                            <div class="portail-content-map-firsts">{{ __('myhouse/back/menu/neuf/evenements/marketing.ar') }}</div>
                                                                            <label for="#"></label>
                                                                            <input type="checkbox" name="#" id="#" class="ios">
                                                                        </div>
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

                                        </div>
                                    </div>
                                    <div class="menu-body-event-close menu-body-event-close-facebook-two" id="campagne">
                                        <input type="hidden" name="facebook-two" value="facebook_two">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.as') }}
                                    </div>
                                @elseif (isset($facebook_two))
                                    <div class="menu-body-event-bbox-success">
                                        <div class="menu-body-event-bbox-success-title">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.at') }} <br>
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.au') }}
                                        </div>
                                        <div class="menu-body-event-bbox-success-img">
                                            <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                                        <div class="menu-body-event-close menu-body-event-c14">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.av') }}
                                        </div>
                                    </a>
                                @else
                                    <div class="menu-body-event-facebook">
                                        <div class="menu-body-content-campaign-push-next-item-ck-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aw') }}</div>
                                        <div class="menu-body-event-facebook-box">
                                            <div class="menu-body-envent-facebook-box-img">
                                                <div class="upload-img text-center">
                                                    <label for="file-upload" class="custom-files-uploads">
                                                        <img src="http://myhouse.com/images/residential/single/menu/ico.svg" alt="">
                                                    </label>
                                                    <input id="file-upload" type="file">
                                                    <div class="upload-texts">{{ __('myhouse/back/menu/neuf/evenements/marketing.ax') }}</div>
                                                    <div class="upload-texts-b">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.ay') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-body-envent-facebook-box-text">
                                                <div class="menu-body-envent-facebook-box-text-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.az') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaa') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aab') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-body-event-close menu-body-event-close-facebook" id="campagne">
                                        <input type="hidden" name="facebook" value="facebook">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.aac') }}
                                    </div>
                                @endif














                            @elseif(request()->get('q') === 'tombola')


                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        @include('myhouse.back.menu.neuf.evenements.module.extract')
                                    </select>
                                </div>

                                <div class="menu-body-event-select-subtitle">{{ __('myhouse/back/menu/neuf/evenements/marketing.aad') }}</div>


                                @if (isset($tombola))
                                    <div class="menu-body-event-bbox-success">
                                        <div class="menu-body-event-bbox-success-title">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aae') }} <br>
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaf') }}
                                        </div>
                                        <div class="menu-body-event-bbox-success-img">
                                            <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                                        <div class="menu-body-event-close menu-body-event-c14">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aag') }}
                                        </div>
                                    </a>
                                @else
                                    <div class="menu-body-event-tombola">
                                        <div class="menu-body-event-tombola-grid">
                                            <div class="menu-body-event-tombola-grid-one">
                                                <div class="menu-body-event-tombola-grid-one-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aah') }}</div>

                                                <div class="menu-body-event-tombola-select">
                                                    <div class="content-arrow">
                                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                                    </div>
                                                    <select name="p" id="#" class="form-control css-select ms-center">
                                                        <option selected hidden>Sélectionner</option>
                                                        <option value="portes-ouvertes" class="ms-center">Journées Portes Ouvertes</option>
                                                        <option value="campagne-facebook"  class="ms-center">Campagne Facebook</option>
                                                        <option value="tombola"  class="ms-center">Tombola</option>
                                                    </select>
                                                </div>

                                                <div class="menu-body-event-tombola-second">
                                                    <div class="menu-body-event-tombola-grid-one-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aai') }}</div>
                                                </div>
                                                <div class="portail-content-map">
                                                    <div class="portail-content-map-seconds">
                                                        <div class="portail-content-map-second-boxs">
                                                            <div class="portail-content-map-second-box-item">
                                                                <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                            </div>
                                                            <div class="portail-content-map-second-box-item">
                                                                <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="menu-body-event-tombola-grid-two">
                                                <div class="menu-body-event-tombola-grid-one-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aaj') }}</div>
                                                <div class="portail-content-map">
                                                    <div class="portail-content-map-seconds">
                                                        <div class="portail-content-map-second-boxs">
                                                            <div>
                                                                <div class="portail-content-map-second-box-item">
                                                                    <div class="portail-content-map-firsts">{{ __('myhouse/back/menu/neuf/evenements/marketing.aak') }}</div>
                                                                    <label for="#"></label>
                                                                    <input type="checkbox" name="#" id="#" class="ios">
                                                                </div>
                                                            </div>
                                                            <div class="portail-content-map-second-box-item">
                                                                <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-body-event-tombola-second">
                                                    <div class="menu-body-event-tombola-grid-one-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aal') }}</div>
                                                </div>
                                                <div class="menu-body-event-tombola-second-input">
                                                    <input type="text" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu-body-event-close menu-body-event-close-tombola" id="campagne">
                                        <input type="hidden" name="tombola" value="tombola">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.aam') }}
                                    </div>
                                @endif




                            @elseif(request()->get('q') === 'chasse')


                                @if (isset($tresor))




                                    <div class="menu-body-event-select">
                                        <div class="content-arrow">
                                            <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                        </div>
                                        <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                            @include('myhouse.back.menu.neuf.evenements.module.extract')
                                        </select>
                                    </div>
                                    <div class="menu-body-content-campaign-push">


                                        <div class="menu-body-content-campaign-push-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aan') }}</div>
                                        <div class="menu-body-content-campaign-push-box">
                                            <div class="menu-body-content-campaign-push-box-item">
                                                <div class="menu-body-content-campaign-push-box-item-box">
                                                    <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/neuf/evenements/marketing.aao') }}</div>
                                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                                        <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/neuf/evenements/marketing.aap') }}">
                                                    </div>
                                                </div>
                                                <div class="menu-body-content-campaign-push-box-item-box">
                                                    <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/neuf/evenements/marketing.aaq') }}</div>
                                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                                        <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/neuf/evenements/marketing.aar') }}">
                                                    </div>
                                                </div>
                                                <div class="menu-body-content-campaign-push-box-item-box">
                                                    <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/neuf/evenements/marketing.aas') }}</div>
                                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                                        <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/neuf/evenements/marketing.aat') }}">
                                                    </div>
                                                </div>
                                                <div class="menu-body-content-campaign-push-box-item-box">
                                                    <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/neuf/evenements/marketing.aau') }}</div>
                                                    <div class="menu-body-content-campaign-push-box-item-box-right">
                                                        <input type="text" name="#" id="" class="form-control" placeholder="{{ __('myhouse/back/menu/neuf/evenements/marketing.aav') }}">
                                                    </div>
                                                </div>
                                                <div class="menu-body-content-campaign-push-box-item-box">
                                                    <div class="menu-body-content-campaign-push-box-item-box-left">{{ __('myhouse/back/menu/neuf/evenements/marketing.aaw') }} <br> {{ __('myhouse/back/menu/neuf/evenements/marketing.aax') }}</div>
                                                    <div class="menu-body-content-campaign-push-box-item-box-rights">
                                                        <textarea name="#" id="" cols="30" rows="6" class="form-control"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="menu-body-content-campaign-push-box-item">
                                                <div class="menu-body-content-campaign-push-box-item-box-block">
                                                    <div class="upload-img text-center">
                                                        <label for="file-upload" class="custom-files-uploads">
                                                            <img src="http://myhouse.com/images/residential/single/menu/ico.svg" alt="">
                                                        </label>
                                                        <input id="file-upload" type="file">
                                                        <div class="upload-texts">{{ __('myhouse/back/menu/neuf/evenements/marketing.aay') }}</div>
                                                        <div class="upload-texts-b">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaz') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="menu-body-event-close menu-body-event-close-tombola" id="campagne">
                                        <input type="hidden" name="tresor_notif" value="tresor_notif">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.aba') }}
                                    </div>


                                @elseif (isset($tresor_notif))


                                    <div class="menu-body-event-select">
                                        <div class="content-arrow">
                                            <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                        </div>
                                        <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                            @include('myhouse.back.menu.neuf.evenements.module.extract')
                                        </select>


                                    </div>
                                    <div class = "menu-body-event-select-tit">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abb') }}
                                    </div>
                                    <div class="menu-body-event-select-tit-ts">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abc') }} <br>
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abd') }} <br>
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abe') }}
                                    </div>


                                    <div class="menu-body-event-select-grid">

                                        <div class="menu-body-event-select-grid-item-one">
                                            <div class="menu-body-event-select-grid-item-one-box">
                                                <div class="menu-body-event-select-grid-item-one-box-first">
                                                    <div class="menu-body-event-select-grid-item-one-box-first-img">
                                                        <img src="{{ asset('images/residential/single/menu/logo.svg') }}" alt="">
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-first-text">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abf') }} <br>
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abg') }}
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-first-text-st">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abh') }}
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-first-text-st">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abi') }}
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-first-text-ct">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abj') }} 002126666666
                                                    </div>
                                                </div>
                                                <div class="menu-body-event-select-grid-item-one-box-second">
                                                    <div class="menu-body-event-select-grid-item-one-box-second-img">
                                                        <img src="{{ asset('images/residential/single/menu/ham.png') }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-second-green">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abk') }} <br>
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abl') }} <br>
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abm') }}
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-second-st">
                                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abn') }}
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-second-award">
                                                        <div class="menu-body-event-select-grid-item-one-box-second-award-red">{{ __('myhouse/back/menu/neuf/evenements/marketing.abo') }}</div>
                                                        <div class="menu-body-event-select-grid-item-one-box-second-award-price">100.000 DH</div>
                                                        <div class="menu-body-event-select-grid-item-one-box-second-award-achat">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.abp') }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-body-event-select-grid-item-one-box-third">
                                                    <div class="menu-body-event-select-grid-item-one-box-third-img">
                                                        <img src="{{ asset('images/residential/single/menu/zz.png') }}" alt="">
                                                    </div>
                                                    <div class="menu-body-event-select-grid-item-one-box-third-txt">
                                                        <div class="menu-body-event-select-grid-item-one-box-third-txt-green">{{ __('myhouse/back/menu/neuf/evenements/marketing.abq') }}</div>
                                                        <div class="menu-body-event-select-grid-item-one-box-third-txt-red">{{ __('myhouse/back/menu/neuf/evenements/marketing.abr') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-body-event-select-grid-item-two">
                                            <div class="menu-body-content-campaign-push-next-item-ck-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.abs') }}</div>
                                            <div class="portail-content-map">
                                                <div class="portail-content-map-seconds">
                                                    <div class="portail-content-map-second-boxs">
                                                        <div>
                                                            <div class="portail-content-map-second-box-item">
                                                                <div class="portail-content-map-firsts">{{ __('myhouse/back/menu/neuf/evenements/marketing.abt') }}</div>
                                                                <label for="#"></label>
                                                                <input type="checkbox" name="#" id="#" class="ios">
                                                            </div>
                                                        </div>
                                                        <div class="portail-content-map-second-box-item">
                                                            <input type="text" name="#" id="#" class="form-control protail-input" placeholder="jj/mm/aaaa">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu-body-event-close menu-body-event-close-tombola mb-5" id="campagne">
                                        <input type="hidden" name="tresor_valid" value="tresor_valid">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.abu') }}
                                    </div>

                                @elseif (isset($tresor_valid))

                                    <div class="menu-body-event-select-info">
                                        <div class="menu-body-event-select-info-first">{{ __('myhouse/back/menu/neuf/evenements/marketing.abv') }}</div>
                                        <div class="menu-body-event-select-info-second">
                                            <div class="menu-body-event-select-info-second-one">{{ __('myhouse/back/menu/neuf/evenements/marketing.abw') }}</div>
                                            <div class="menu-body-event-select-info-second-two">{{ __('myhouse/back/menu/neuf/evenements/marketing.abx') }}</div>
                                        </div>
                                        <div class="menu-body-event-select-info-third">
                                            <div class="menu-body-event-select-info-third-one">{{ __('myhouse/back/menu/neuf/evenements/marketing.aby') }}</div>

                                            <div class="menu-body-event-select-info-third-two-box">
                                                <div class="menu-body-event-select-info-third-two-box-img">
                                                    <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-select-info-third-two-box-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.abz') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.baa') }}
                                                </div>
                                            </div>

                                            <div class="menu-body-event-select-info-third-two-box">
                                                <div class="menu-body-event-select-info-third-two-box-img">
                                                    <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-select-info-third-two-box-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bab') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bac') }}
                                                </div>
                                            </div>

                                            <div class="menu-body-event-select-info-third-two-box">
                                                <div class="menu-body-event-select-info-third-two-box-img">
                                                    <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-select-info-third-two-box-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bad') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bae') }}
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="menu-body-event-select">
                                        <div class="content-arrow">
                                            <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                        </div>
                                        <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                            @include('myhouse.back.menu.neuf.evenements.module.extract')
                                        </select>


                                    </div>

                                    <div class="menu-body-event-bbox-success mt-5">
                                        <div class="menu-body-event-bbox-success-title">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.baf') }} <br>
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bag') }}
                                        </div>
                                        <div class="menu-body-event-bbox-success-img">
                                            <img src="{{ asset('images/residential/single/menu/valid.svg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="menu-body-event-bbox-buuton-box">
                                        <div class="menu-body-event-bbox-buuton-box-one">{{ __('myhouse/back/menu/neuf/evenements/marketing.bah') }}</div>
                                        <div class="menu-body-event-bbox-buuton-box-two" id="campagne">
                                            <input type="hidden" name="tresor_plateform" value="tresor_plateform">
                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bai') }}
                                        </div>
                                    </div>




                                @elseif (isset($tresor_plateform))


                                    <div class="menu-body-event-select">
                                        <div class="content-arrow">
                                            <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                        </div>
                                        <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                            @include('myhouse.back.menu.neuf.evenements.module.extract')
                                        </select>


                                    </div>
                                    <div class="menu-body-event-select-plateform">
                                        <div class="menu-body-event-select-plateform-one">
                                            <div class="menu-body-event-select-plateform-one-first">{{ __('myhouse/back/menu/neuf/evenements/marketing.baj') }}</div>
                                            <div class="menu-body-event-select-plateform-one-second">{{ __('myhouse/back/menu/neuf/evenements/marketing.bak') }} </div>
                                            <div class="menu-body-event-select-plateform-one-third">{{ __('myhouse/back/menu/neuf/evenements/marketing.bal') }}</div>
                                        </div>


                                        <div class="menu-body-event-select-plateform-two">
                                            <div class="menu-body-event-select-info-third-one">{{ __('myhouse/back/menu/neuf/evenements/marketing.bam') }}</div>

                                            <div class="menu-body-event-select-info-third-two-boxes pt-2">
                                                <div class="menu-body-event-select-info-third-two-box-img">
                                                    <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-select-info-third-two-box-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.ban') }}
                                                </div>
                                            </div>
                                            <div class="menu-body-event-select-info-third-two-boxes">
                                                <div class="menu-body-event-select-info-third-two-box-img">
                                                    <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-select-info-third-two-box-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bao') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-body-event-select-plateform-three">
                                            <div class="menu-body-event-select-info-third-two-boxes">
                                                <div class="menu-body-event-select-info-third-two-box-img">
                                                    <img src="{{ asset('images/residential/single/menu/p.svg') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-select-info-third-two-box-text">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bap') }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="menu-body-event-bbox-buuton-box pb-5">
                                        <div class="menu-body-event-bbox-buuton-box-one">{{ __('myhouse/back/menu/neuf/evenements/marketing.baq') }}</div>
                                        <div>
                                            <a href="{{ route('neuf.menu.plateform') }}" style="text-decoration: none; color: inherit">
                                                <div class="menu-body-event-bbox-buuton-box-two">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bar') }}
                                                </div>
                                            </a>
                                        </div>
                                    </div>
















                                @else
                                    <div class="menu-body-event-chasse">
                                        <div class="menu-body-event-chasse-one">
                                            <div class="menu-body-event-chasse-one-first">
                                                <div class="menu-body-event-chasse-one-img">
                                                    <img src="{{ asset('images/residential/single/menu/es.png') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-chasse-title">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bas') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bat') }}
                                                </div>
                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bau') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bav') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.baw') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bax') }}
                                                </p>
                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bay') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.baz') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bba') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbb') }} <br>
                                                </p>
                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbc') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbd') }}
                                                </p>
                                                <p class="menu-body-event-chasse-one-p text-uppercase text-red">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbe') }}

                                                </p>
                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbf') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbg') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbh') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbi') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbj') }}
                                                </p>
                                                <div class="text-bb">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbk') }}
                                                </div>
                                            </div>
                                            <div class="menu-body-event-chasse-one-second">
                                                <div class="menu-body-event-chasse-title">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbl') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbm') }}
                                                </div>
                                                <div class="menu-body-event-chasse-one-p-nxt">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbn') }}
                                                </div>
                                                <div class="menu-body-event-chasse-one-p-nxt">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbo') }}
                                                </div>
                                                <div class="menu-body-event-chasse-one-p-nxt">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbp') }}
                                                </div>
                                                <div class="text-bb">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.bbq') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-body-event-chasse-two">
                                            <div class="menu-body-event-chasse-two-one">
                                                <div class="content-arrow">
                                                    <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                                </div>
                                                <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                                    @include('myhouse.back.menu.neuf.evenements.module.extract')
                                                </select>

                                                <div class="menu-body-event-chasse-two-content">
                                                    <div class="menu-body-event-chasse-two-content-box">
                                                        <div class="menu-body-event-chasse-two-content-box-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.bbr') }}</div>

                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bbs') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bbt') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bbu') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bbv') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bbw') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.bbx') }}</div>
                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.bby') }}
                                                            <div class="text-green">{{ __('myhouse/back/menu/neuf/evenements/marketing.bbz') }}</div>
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aaaa') }}</div>
                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaab') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aaac') }}</div>
                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaad') }}
                                                        </div>

                                                        <div class="menu-body-event-chasse-two-content-box-title">{{ __('myhouse/back/menu/neuf/evenements/marketing.aaae') }}</div>
                                                        <div class="menu-body-event-chasse-two-content-box-p">
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaaf') }}
                                                            <br>
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaag') }}
                                                            <br>
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaah') }}
                                                            <br>
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaai') }} <br>
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaaj') }}

                                                            <div class="text-green">
                                                                {{ __('myhouse/back/menu/neuf/evenements/marketing.aaak') }}
                                                            </div>
                                                            {{ __('myhouse/back/menu/neuf/evenements/marketing.aaal') }}
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-body-event-chasse-three">
                                            <div class="menu-body-event-chasse-three-one">
                                                <div class="menu-body-event-chasse-three-one-img">
                                                    <img src="{{ asset('images/residential/single/menu/ham.png') }}" alt="">
                                                </div>
                                                <div class="menu-body-event-chasse-title">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaam') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaan') }}
                                                </div>
                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaao') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaap') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaaq') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaar') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaas') }}
                                                </p>
                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaat') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaau') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaav') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaaw') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaax') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaay') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaaz') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aaba') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabb') }}

                                                </p>

                                                <p class="menu-body-event-chasse-one-p">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabc') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabd') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabe') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabf') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabg') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabh') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabi') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabi') }}
                                                </p>
                                                <div class="text-bb">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabk') }}
                                                </div>
                                            </div>
                                            <div class="menu-body-event-chasse-three-two">

                                                <div class="menu-body-event-chasse-three-two-input">
                                                    <input type="text" class="form-control" placeholder="{{ __('myhouse/back/menu/neuf/evenements/marketing.aabl') }}">
                                                </div>

                                                <div class="menu-body-event-chasse-title-st">
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabm') }} <br>
                                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabn') }}
                                                </div>

                                                <div class="menu-body-event-chasse-three-two-img">
                                                    <img src="{{ asset('images/residential/single/menu/ind.png') }}" alt="">
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="menu-body-event-close menu-body-event-close-facebook" id="campagne">
                                        <input type="hidden" name="tresor" value="tresor">
                                        {{ __('myhouse/back/menu/neuf/evenements/marketing.aabo') }}
                                    </div>

                                @endif







                            @else
                                <div class="menu-body-event-select">
                                    <div class="content-arrow">
                                        <img src="{{ asset('images/residential/single/menu/arrow.svg') }}" alt="">
                                    </div>
                                    <select name="q" id="#" class="form-control css-select ms-center" onchange="this.form.submit()">
                                        <option selected hidden> {{ __('myhouse/back/menu/neuf/evenements/marketing.aabq') }} </option>
                                        @include('myhouse.back.menu.neuf.evenements.module.extract')

                                    </select>
                                </div>
                                <div class="menu-body-event-close menu-body-event-close-mt ">
                                    {{ __('myhouse/back/menu/neuf/evenements/marketing.aabo') }}
                                </div>
                            @endif



                        </div>
                    </form>

                </div>

                <!-- End List -->


            </div>
        </div>


        @include('myhouse.back.includes.generique.modal')

    </div>
@stop


@section('scripts')
    <script>
        $('#campagne').click(function () {
            let form = $('#campagne-form');
            form.attr('method', 'post');
            form.submit();
        })
    </script>
@stop
