<nav class="myhouseNav-v">

    <form action="{{ route('recherche', $type = 'mixte') }}" method="get">
        <input type="hidden" name="location" value="{{ request()->get('location') }}">
        <div class="myHouse-nav-first">
            <div class="navbar-logo">
                <a href="/" class="nav-logo">
                    <img src="{{ asset('development/images/logo.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="myHouse-select-gradient">
                <label>
                    <select class="selectpicker myHouse-select-gradient-item" name="page" onchange="this.form.submit()">
                        @if(request()->get('page') === 'neufs')
                            <option value="neufs" selected class="neufs-select">PROJETS NEUFS</option>
                            <option value="professionnels" class="neufs-select">PROFESSIONNELS</option>
                            <option value="particuliers" class="neufs-select">PARTICULIERS</option>
                        @endif
                        @if(request()->get('page') === "professionnels")
                                <option value="neufs" class="professionnels-select">PROJETS NEUFS</option>
                                <option value="professionnels" selected class="professionnels-select">PROFESSIONNELS</option>
                                <option value="particuliers" class="professionnels-select">PARTICULIERS</option>
                        @endif
                        @if(request()->get('page') === 'particuliers')
                                <option value="neufs" class="particulier-select">PROJETS NEUFS</option>
                                <option value="professionnels" class="particulier-select">PROFESSIONNELS</option>
                                <option value="particuliers" class="particulier-select" selected>PARTICULIERS</option>
                        @endif
                    </select>
                </label>
            </div>
            <div class="myHouse-location-search">
                <input type="text" class="form-control rounded-pill small-text search-input" placeholder="Casablanca" value="{{ request()->get('location') }}">
            </div>
        </div>
    </form>
    <div class="myhouseNav-nav">
        <div class="menu menu-nav" id="menu-nav">
            <span class="hamburger"></span>
        </div>
        <div class="navbar-left">
            <div class="navbar-left-item">
                <div class="navbar-left-item-first" id="lang">
                    <div class="navbar-left-item-one">
                        <img src="{{ asset('images/residential/flagT.svg') }}" alt="" class="site-img">
                    </div>
                    <div class="navbar-left-item-two">
                        <img src="{{ asset('images/residential/flag.svg') }}" alt="">
                    </div>
                    <div class="navbar-left-item-three t-b">
                        Francais
                    </div>
                    <div class="country-dropdown" id="country-dropdown">
                            <span class="country-content">
                                <span class="country-content-content">
                                    <input type="radio" id="test1" name="radio-groups" checked>
                                    <label for="test1">Français</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test2" name="radio-groups">
                                    <label for="test2">Anglais</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test3" name="radio-groups">
                                    <label for="test3">Arabe</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test4" name="radio-groups">
                                    <label for="test4">Chinois</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test5" name="radio-groups">
                                    <label for="test5">Espagnol</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test6" name="radio-groups">
                                    <label for="test6">Russe</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test7" name="radio-groups">
                                    <label for="test7">Albanais</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test8" name="radio-groups">
                                    <label for="test8">Allemand</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test9" name="radio-groups">
                                    <label for="test9">Amazigh</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test10" name="radio-groups">
                                    <label for="test10">Arménien</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test11" name="radio-groups">
                                    <label for="test11">Aymara</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test12" name="radio-groups">
                                    <label for="test12">Bengali</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test13" name="radio-groups">
                                    <label for="test13">Catalan</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test14" name="radio-groups">
                                    <label for="test14">Coréen</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test15" name="radio-groups">
                                    <label for="test15">Croate</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test16" name="radio-groups">
                                    <label for="test16">Danois</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test17" name="radio-groups">
                                    <label for="test17">Guarani</label>
                                </span>

                            </span>
                    </div>

                </div>
                <div class="navbar-left-item-second" id="currency">
                    <div class="navbar-left-item-four">
                        <img src="{{ asset('images/residential/Currency.svg') }}" alt="">
                    </div>
                    <div class="navbar-left-item-five">
                        €
                    </div>
                    <div class="currency-dropdown" id="currency-dropdown">
                            <span class="currency-content">
                                <span class="currency-content-content">
                                    <input type="radio" id="test80" name="radio-group-2" checked>
                                    <label for="test80">Afghanistan <span class="text-uppercase" style="margin-left: 130px;">AFN</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test81" name="radio-group-2">
                                    <label for="test81">Afrique du Sud <span class="text-uppercase" style="margin-left: 108px;">ZAR</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test82" name="radio-group-2">
                                    <label for="test82">Albanie <span class="text-uppercase" style="margin-left: 165px;">all</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test83" name="radio-group-2">
                                    <label for="test83">Agérie <span class="text-uppercase" style="margin-left: 169px;">dzd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test84" name="radio-group-2">
                                    <label for="test84">Allemagne <span class="text-uppercase" style="margin-left: 138px;">eur</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test85" name="radio-group-2">
                                    <label for="test85">Andorre <span class="text-uppercase" style="margin-left: 156px;">aoa</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test86" name="radio-group-2">
                                    <label for="test86">Angola <span class="text-uppercase" style="margin-left: 164px;">xcd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test87" name="radio-group-2">
                                    <label for="test87">Atigua-et-Barbuda <span class="text-uppercase" style="margin-left: 83px;">sar</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test88" name="radio-group-2">
                                    <label for="test88">Arabie Saoudite <span class="text-uppercase" style="margin-left: 100px;">ars</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test89" name="radio-group-2">
                                    <label for="test89">Argentine <span class="text-uppercase" style="margin-left: 143px;">amd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test90" name="radio-group-2">
                                    <label for="test90">Arménie <span class="text-uppercase" style="margin-left: 154px;">aud</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test91" name="radio-group-2">
                                    <label for="test91">Australie <span class="text-uppercase" style="margin-left: 150px;">eur</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test92" name="radio-group-2">
                                    <label for="test92">Autriche <span class="text-uppercase" style="margin-left: 155px;">Bsd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test93" name="radio-group-2">
                                    <label for="test93">Azerbaidjan <span class="text-uppercase" style="margin-left: 128px;">bhd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test94" name="radio-group-2">
                                    <label for="test94">Bahamas <span class="text-uppercase" style="margin-left: 146px;">bdt</span> </label>
                                </span>


                            </span>
                    </div>

                </div>
                <div class="navbar-left-item-third" id="surface-dropdown">
                    <div class="navbar-left-item-six">
                        <img src="{{ asset('images/residential/measure.svg') }}" alt=""><br>
                    </div>
                    <div class="navbar-left-item-seven">
                        m²
                    </div>
                    <div class="surface-dropdown" id="surface">
                             <span class="surface-content">
                                <span class="surface-content-content">
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">Mètre &nbsp; &nbsp;  &nbsp;   (m²)</label>
                                </span>
                                <span class="surface-content-content">
                                    <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">Hectare &nbsp; &nbsp;   (ha)</label>
                                </span>
                                 <span class="surface-content-content">
                                    <input type="radio" id="test3" name="radio-group">
                                    <label for="test3">Are &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  (a)</label>
                                </span>
                                <span class="surface-content-content">
                                    <input type="radio" id="test4" name="radio-group">
                                    <label for="test4">Feet &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; (ft2)</label>
                                </span>
                                <span class="surface-content-content">
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">Yard &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (yd2)</label>
                                </span>
                                 <span class="surface-content-content">
                                    <input type="radio" id="test6" name="radio-group">
                                    <label for="test6">Acre &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; (acre)</label>
                                </span>

                             </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-right" id="with-menu">
            <div class="content-nav">
                <div class="content-nav-one">
                    <button class="btn btn-light align-self-center text-center rounded-pill myHouse-red btn-blog">
                        <a href="{{ route('blog') }}" style="text-decoration: none; color: #46AB8E">
                            Blog
                        </a>
                    </button>

                </div>
                <div class="content-nav-two">
                    <button class="btn btn-light align-self-center text-center rounded-pill myHouse-red btn-first">
                        <a href="{{ route('pricing') }}" style="text-decoration: none; color: #46AB8E">
                            Déposer une annonce
                        </a>
                    </button>
                </div>
                <div class="content-nav-five">
                    <button class="btn btn-light align-self-center rounded-pill myHouse-red btn-second" id="appstore">Apps MyHouse</button>
                    <div id="appstore-dropdown" class="content-nav-five-dropdowm">
                        <div class="content-nav-five-dropdowm-box">
                            <div class="content-nav-five-dropdowm-box-text">Android</div>
                            <div class="content-nav-five-dropdowm-box-img">
                                <img src="{{ asset('images/residential/single/menu/google.png') }}" alt="">
                            </div>
                        </div>
                        <div class="content-nav-five-dropdowm-box">
                            <div class="content-nav-five-dropdowm-box-text">iPhone</div>
                            <div class="content-nav-five-dropdowm-box-img">
                                <img src="{{ asset('images/residential/single/menu/iphone.png') }}" alt="">
                            </div>
                        </div>
                        <div class="content-nav-five-dropdowm-box">
                            <div class="content-nav-five-dropdowm-box-text">Desktop</div>
                            <div class="content-nav-five-dropdowm-box-img">
                                <img src="{{ asset('images/residential/single/menu/windows.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="content-nav-three">
                    <a href="{{ route('connexion') }}" class="shift-three">
                        <img src="{{ asset('development/images/connexion.svg') }}" alt="">
                        <span class="text-connections">Se connecter</span>
                    </a>
                </div>
                <div class="content-nav-four">
                    <a href="{{ route('particulier.menu.annonces') }}" >
                        <div class="menu sp-menu">
                            <span class="hamburger">
                              <span class="menu-text">Menu</span>
                           </span>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

</nav>

