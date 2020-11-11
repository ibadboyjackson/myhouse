<!-- Aside -->
<div class="menu-wrap-aside">
    <div class="menu-wrap-aside-box">
        <div class="menu-wrap-aside-box-title">{{ __('myhouse/back/modules/particulier/sidebar.aa') }}</div>
        <a href="{{ route('particulier.menu.annonces', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('particulier.menu.annonces') ? 'box-item-active' : '' }} " > 
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m1.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">

                        {{ __('myhouse/back/modules/particulier/sidebar.ab') }} 

                        @auth

                            @if (auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count() == 0 )

                            @else
                                ({{ auth()->user()->particulier->where('images','!=', null)->count() + auth()->user()->particulier->where('page','!=', null)->count() }})
                            @endif


                        @endauth
                    
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('particulier.menu.interesse', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('particulier.menu.interesse') ? 'box-item-active' : '' }}"> 
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m2.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.ac') }} 

                            @auth

                                @if (auth()->user()->interesse_particulier->count() == 0 )

                                @else
                                    ({{ auth()->user()->interesse_particulier->count() }})
                                @endif


                            @endauth

                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.messagerie', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.messagerie') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m3.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.ad') }}  </div>
                </div>
            </div>
        </a>
        <a href="{{ route('particulier.menu.agenda', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('particulier.menu.agenda') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m4.svg') }}" alt="">
                    </div>
                    
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.ae') }} 
                        

                            @auth

                                @if (auth()->user()->agenda_particulier->count() == 0 )

                                @else
                                    ({{ auth()->user()->agenda_particulier->count() }})
                                @endif


                            @endauth



                    </div>

                </div>
            </div>
        </a>
        <a href="{{ route('menu.profile', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.profile') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m5.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.af') }}</div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.faq', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.faq') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m6.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.ag') }}</div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.charte', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.charte') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m7.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.ah') }}</div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.contact', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.contact') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m8.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.ai') }}</div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="menu-wrap-aside-box-item">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m9.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/particulier/sidebar.aj') }}</div>
                </div>
            </div>
        </a>

    </div>
</div>
<!-- End Aside -->
