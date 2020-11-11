<!-- Aside -->
<div class="menu-wrap-content-top">
    <div class="menu-wrap-content-top-head">{{ __('myhouse/back/modules/neuf/sidebar.aa') }}</div>
    <div class="menu-wrap-content-top-hr"></div>
    <div class="menu-wrap-content-top-footer">
        <div class="menu-wrap-content-top-footer-text">{{ __('myhouse/back/modules/neuf/sidebar.ab') }}</div>
        <div class="menu-wrap-content-top-footer-box">
            <div class="menu-wrap-content-top-footer-box-img">
                <img src="{{ asset('images/residential/single/menu/chat.svg') }}" alt="">
            </div>
            <div class="menu-wrap-content-top-footer-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ac') }}</div>
        </div>
    </div>
</div>
<div class="professionnel-aside">
    <div class="menu-wrap-aside">
        <div class="menu-wrap-aside-box">
            <div class="menu-wrap-aside-box-title">{{ __('myhouse/back/modules/neuf/sidebar.ad') }}</div>
            <a href="{{ route('neuf.menu.backoffice') }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('neuf.menu.backoffice') ? 'box-item-active' : '' }} ">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/office.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ae') }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('neuf.menu.interesse', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('neuf.menu.interesse') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m2.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.af') }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('menu.messagerie', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('menu.messagerie') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m3.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ag') }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('neuf.menu.agenda') }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('neuf.menu.agenda') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m4.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ah') }}</div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="menu-wrap-aside-box-item {{ Route::is('professionnel.menu.neuf') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/stat.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ai') }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('menu.facture', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('menu.facture') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/fact.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.aj') }}</div>
                    </div>
                </div>
            </a>

            <a href="{{ route('menu.profile', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('menu.profile') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m5.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ak') }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('menu.faq', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('menu.faq') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m6.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.al') }} </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('menu.charte', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('menu.charte') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m7.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.am') }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('menu.contact', ['user' => 'neuf']) }}">
                <div class="menu-wrap-aside-box-item {{ Route::is('menu.contact') ? 'box-item-active' : '' }}">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m8.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.an') }}</div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="menu-wrap-aside-box-item">
                    <div class="menu-wrap-aside-box-item-box">
                        <div class="menu-wrap-aside-box-item-box-img">
                            <img src="{{ asset('images/residential/single/menu/m9.svg') }}" alt="">
                        </div>
                        <div class="menu-wrap-aside-box-item-box-text">{{ __('myhouse/back/modules/neuf/sidebar.ao') }} </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

</div>
<!-- End Aside -->
