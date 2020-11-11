@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/generique/message.aa') }}
@stop

@section('content')
    <div class="menu-wrap-full">
        <div class="menu-wrap-content">

            <!-- X button -->
            <a href="{{ $url }}" style="text-decoration: none; color: inherit">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>
            <!-- End X button -->

        @if ($user === 'neuf')
            @include('myhouse.back.includes.neuf.aside')
        @endif

        @if ($user === 'professionnel')
            @include('myhouse.back.includes.professionnel.aside')
        @endif

        @if ($user === 'particulier')
            @include('myhouse.back.includes.particulier.aside')
        @endif

        <!-- List -->

            <div class="menu-body stf pl-var">
                <div class="menu-body-title ">{{ __('myhouse/back/menu/generique/message.ab') }}</div>
                <div class="menu-body-flex">
                    <div class="menu-body-hr"></div>

                    @if ($user === 'professionnel')
                        <div class="menu-body-subs">
                            <span class="menu-body-subs-one">{{ __('myhouse/back/menu/generique/message.ac') }}</span>
                            <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                        </div>
                    @endif

                </div>

                <div class="menu-body-chat">
                    <div class="menu-body-chat-box">
                        <div class="menu-body-chat-box-item">
                            <div class="users mr-1">
                                <div class="chat-header-user">
                                    <div class="form-group">
                                        <input type="search" name="#" id="" class="form-control chat-search" placeholder="{{ __('myhouse/back/menu/generique/message.ad') }}">
                                    </div>
                                </div>
                                <div class="chat-body-user">
                                    <div class="box-chat active-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/menu/list/11.png') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            10min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/menu/list/11.png') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            12min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/single/cha.svg') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            40min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/single/cha.svg') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            1 heure
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/menu/list/11.png') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            10 min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/single/chad.svg') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            9min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/single/cha.svg') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            9min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-chat">
                                        <div>
                                            <div class="chat-first">

                                                <div class="person-message">
                                                    <div class="person">
                                                        <div class="picture">
                                                            <img src="{{ asset('images/residential/menu/list/11.png') }}" alt="">
                                                        </div>
                                                        <div class="person-info">
                                                            <div class="personne-info-name">
                                                                Rachid Malek
                                                            </div>
                                                            <div class="personne-info-preview">
                                                                Lorem ipsum...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="person-notif">
                                                        <div class="person-notif-delay">
                                                            9min
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="chat-footer">
                                    <div class="chat-footer-content">
                                        <img src="{{ asset('images/residential/menu/list/chat-footer.svg') }}" alt="">
                                        <span class="chat-footer-text text-capitalize">{{ __('myhouse/back/menu/generique/message.ae') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-body-chat-box-item">
                            <div class="chat-area">
                                <div class="chat-header-area">
                                    <div class="chat-area-user">
                                       <!-- <div class="chat-fit">
                                            <img src="{{ asset('images/residential/menu/list/1.png') }}" alt="">
                                            <span class="text-t">Rachid Scopito</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="chat-content">
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chat-content-inside mx-3 mt-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-778">
                                                <div class="from">
                                                    Salut comment vas tu ?
                                                </div>
                                                <div class="time">20:24</div>
                                            </div>
                                            <div class="mt-778">
                                                <div class="to">
                                                    Je vais bien et toi ?
                                                </div>
                                                <div class="time-right text-right">23:30</div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="chat-text-area " style="position: relative">
                                    <form action="#">
                                        <div class="button-chat">
                                            <div class="d-flex justify-content-end">
                                                <div class="image-chat">
                                                    <a href="#">
                                                        <img src="{{ asset('images/residential/menu/list/chat.svg') }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="1" class="form-control chat-textarea" placeholder="{{ __('myhouse/back/menu/generique/message.af') }}"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" style="text-decoration: none; color: inherit">
                        <div class="page-rise-account-button text-uppercase" style="margin-top: 40px; margin-bottom: 40px;">
                            {{ __('myhouse/back/annonces/modules/abonne.ac') }}
                        </div>
                    </a>
                </div>



            </div>

            <!-- End List -->

            <!--
              <div class="menu-body-profile-box-button">ENVOYER</div>
            -->

        </div>
    </div>
@stop
