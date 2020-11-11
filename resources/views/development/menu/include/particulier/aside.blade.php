<!-- Aside -->
<div class="menu-wrap-aside">
    <div class="menu-wrap-aside-box">
        <div class="menu-wrap-aside-box-title">menu</div>
        <a href="{{ route('particulier.menu.annonces', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('particulier.menu.annonces') ? 'box-item-active' : '' }} ">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m1.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Mes annonces (17) </div>
                </div>
            </div>
        </a>
        <a href="{{ route('particulier.menu.interesse', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('particulier.menu.interesse') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m2.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Ça m'intéresse (5) </div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.messagerie', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.messagerie') }}) ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m3.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Messagerie  (1)</div>
                </div>
            </div>
        </a>
        <a href="{{ route('particulier.menu.agenda', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('particulier.menu.agenda') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m4.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Agenda (3) </div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.profile', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.profile') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m5.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Mon profil</div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.faq', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.faq') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m6.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">FAQ </div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.charte', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.charte') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m7.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Termes & Charte </div>
                </div>
            </div>
        </a>
        <a href="{{ route('menu.contact', ['user' => 'particulier']) }}">
            <div class="menu-wrap-aside-box-item {{ Route::is('menu.contact') ? 'box-item-active' : '' }}">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m8.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Contacter MyHouse</div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="menu-wrap-aside-box-item">
                <div class="menu-wrap-aside-box-item-box">
                    <div class="menu-wrap-aside-box-item-box-img">
                        <img src="{{ asset('images/residential/single/menu/m9.svg') }}" alt="">
                    </div>
                    <div class="menu-wrap-aside-box-item-box-text">Paramètres </div>
                </div>
            </div>
        </a>

    </div>
</div>
<!-- End Aside -->
