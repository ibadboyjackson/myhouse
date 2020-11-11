<nav class="myhouseNav-v">

    <form action="{{ route('recherche', $type = 'mixte') }}" method="get" id = "navbar-form">
        <input type="hidden" name="location" value="{{ request()->get('location') }}">
        <div class="myHouse-nav-first">
            <div class="navbar-logo">
                <a href="/" class="nav-logo">
                    <img src="{{ asset('development/images/logo.svg') }}" alt="" class="img-fluid">
                </a>
            </div>


            @if(Route::is('recherche'))

                <div class="myHouse-select-gradient">
                    <label>
                        <select class="selectpicker myHouse-select-gradient-item" name="page" onchange="this.form.submit()">
                            @if(request()->get('page') === 'neufs')
                                <option value="neufs" selected class="neufs-select"> {{ __('myhouse/navbar.aa') }} </option>
                                <option value="professionnels" class="neufs-select">{{ __('myhouse/navbar.ab') }}</option>
                                <option value="particuliers" class="neufs-select">{{ __('myhouse/navbar.ac') }}</option>
                            @endif
                            @if(request()->get('page') === "professionnels")
                                <option value="neufs" class="professionnels-select"> {{ __('myhouse/navbar.aa') }}</option>
                                <option value="professionnels" selected class="professionnels-select">{{ __('myhouse/navbar.ab') }}</option>
                                <option value="particuliers" class="professionnels-select">{{ __('myhouse/navbar.ac') }}</option>
                            @endif
                            @if(request()->get('page') === 'particuliers')
                                <option value="neufs" class="professionnels-select"> {{ __('myhouse/navbar.aa') }}</option>
                                <option value="professionnels" class="professionnels-select">{{ __('myhouse/navbar.ab') }}</option>
                                <option value="particuliers" selected  class="professionnels-select">{{ __('myhouse/navbar.ac') }}</option>
                            @endif
             
                        </select>
                    </label>
                </div>
                <div class="myHouse-location-search">
                    <input type="text" name="location" class="form-control rounded-pill small-text search-input" placeholder="Casablanca" value="{{ request()->get('location') }}">
                </div>
            @endif

            @if (Route::is('recherche'))

            @elseif(Route::is('acceuil'))

            @else



                    <div class="myHouse-select-gradient">
                        <label>
                            <select class="selectpicker myHouse-select-gradient-item" title="Aucune sélection" name="page" onchange="this.form.submit()">
                                
                                <option hidden selected class="professionnels-select" value="{{ strtoupper(session('page')) }}">{{ strtoupper(session('page')) }}</option>
                                
                                <option value="neufs" class="professionnels-select"> {{ __('myhouse/navbar.aa') }}</option>
                                <option value="professionnels" class="professionnels-select">{{ __('myhouse/navbar.ab') }}</option>
                                <option value="particuliers" class="professionnels-select">{{ __('myhouse/navbar.ac') }}</option>
                
                            </select>
                        </label>
                    </div>
                    <div class="myHouse-location-search">
                        <input type="text" name="location" id = "geolocal" class="form-control rounded-pill small-text search-input" placeholder="Casablanca" value="{{ session('location') }}">
                    </div>


            @endif


        </div>
    </form>

    <div class="myhouseNav-nav">
        <div class="menu menu-nav" id="menu-nav">
            <span class="hamburger"></span>
        </div>
        <div class="navbar-left">
            <div class="navbar-left-item">


                <form action="{{ route('lang') }}" method="post" id = "language">
                    @csrf
                    <div class="navbar-left-item-first" id="lang">
                        <div class="navbar-left-item-one">
                            <img src="{{ asset('images/residential/flagT.svg') }}" alt="" class="site-img">
                        </div>
                        <div class="navbar-left-item-two">
                            @if (app()->getLocale() === 'fr')
                                <img src="{{ asset('images/residential/flag.svg') }}" alt="">
                            @elseif(app()->getLocale() === 'en')
                                <img src="{{ asset('images/residential/en.png') }}" alt="" class="site-img">
                            @endif
                        </div>
                        <div class="navbar-left-item-three {{ app()->getLocale() === 'fr' ? 't-b' : 'tb-2' }} ">
                            @if (app()->getLocale() === 'fr')
                                {{ __('myhouse/navbar.ad') }}
                            @elseif(app()->getLocale() === 'en')
                                {{ __('myhouse/navbar.ae') }}
                            @endif

                        </div>
                        <div class="country-dropdown" id="country-dropdown">
                            <span class="country-content">
                                <span class="country-content-content">
                                    <input type="radio" id="test1" name="language" value="fr" {{ app()->getLocale() === 'fr' ? 'checked' : '' }}>
                                    <label for="test1">{{ __('myhouse/navbar.ad') }}</label>
                                </span>
                                <span class="country-content-content">
                                    <input type="radio" id="test2" name="language" value="en" {{ app()->getLocale() === 'en' ? 'checked' : '' }}>
                                    <label for="test2">{{ __('myhouse/navbar.ae') }}</label>
                                </span>
                            </span>
                        </div>
                    </div>
                </form>



                <div class="navbar-left-item-second" id="currency">
                    <div class="navbar-left-item-four">
                        <img src="{{ asset('images/residential/Currency.svg') }}" alt="">
                    </div>
                    <div class="navbar-left-item-five">
                        MAD
                    </div>
                    <div class="currency-dropdown" id="currency-dropdown">
                            <span class="currency-content">

                              <span class="currency-content-content">
                                  <input type="radio" id="test80" name="radio-group-2" checked>
                                  <label for="test80">{{ __('myhouse/navbar.aag') }} <span class="text-uppercase" style="margin-left: 170px;">MAD</span> </label>
                              </span>

                              <!--
                                <span class="currency-content-content">
                                    <input type="radio" id="test80" name="radio-group-2">
                                    <label for="test80">{{ __('myhouse/navbar.af') }} <span class="text-uppercase" style="margin-left: 130px;">AFN</span> </label>
                                </span>

                                <span class="currency-content-content">
                                    <input type="radio" id="test81" name="radio-group-2">
                                    <label for="test81">{{ __('myhouse/navbar.ag') }} <span class="text-uppercase" style="margin-left: 108px;">ZAR</span> </label>
                                </span>

                                <span class="currency-content-content">
                                    <input type="radio" id="test82" name="radio-group-2">
                                    <label for="test82">{{ __('myhouse/navbar.ah') }} <span class="text-uppercase" style="margin-left: 165px;">all</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test83" name="radio-group-2">
                                    <label for="test83">{{ __('myhouse/navbar.ai') }} <span class="text-uppercase" style="margin-left: 169px;">dzd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test84" name="radio-group-2">
                                    <label for="test84">{{ __('myhouse/navbar.aj') }} <span class="text-uppercase" style="margin-left: 138px;">eur</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test85" name="radio-group-2">
                                    <label for="test85">{{ __('myhouse/navbar.ak') }} <span class="text-uppercase" style="margin-left: 156px;">aoa</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test86" name="radio-group-2">
                                    <label for="test86">{{ __('myhouse/navbar.al') }}<span class="text-uppercase" style="margin-left: 164px;">xcd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test87" name="radio-group-2">
                                    <label for="test87">{{ __('myhouse/navbar.am') }} <span class="text-uppercase" style="margin-left: 83px;">sar</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test88" name="radio-group-2">
                                    <label for="test88">{{ __('myhouse/navbar.an') }} <span class="text-uppercase" style="margin-left: 100px;">ars</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test89" name="radio-group-2">
                                    <label for="test89">{{ __('myhouse/navbar.ao') }} <span class="text-uppercase" style="margin-left: 143px;">amd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test90" name="radio-group-2">
                                    <label for="test90">{{ __('myhouse/navbar.ap') }} <span class="text-uppercase" style="margin-left: 154px;">aud</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test91" name="radio-group-2">
                                    <label for="test91">{{ __('myhouse/navbar.aq') }} <span class="text-uppercase" style="margin-left: 150px;">eur</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test92" name="radio-group-2">
                                    <label for="test92">{{ __('myhouse/navbar.ar') }} <span class="text-uppercase" style="margin-left: 155px;">Bsd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test93" name="radio-group-2">
                                    <label for="test93">{{ __('myhouse/navbar.as') }} <span class="text-uppercase" style="margin-left: 128px;">bhd</span> </label>
                                </span>
                                <span class="currency-content-content">
                                    <input type="radio" id="test94" name="radio-group-2">
                                    <label for="test94">{{ __('myhouse/navbar.at') }}<span class="text-uppercase" style="margin-left: 146px;">bdt</span> </label>
                                </span>

                                -->
                            </span>
                    </div>

                </div>
                <div class="navbar-left-item-third" id="surface-dropdown">
                    <div class="navbar-left-item-six">
                        <img src="{{ asset('images/residential/measure.svg') }}" alt=""><br>
                    </div>
                    <div class="navbar-left-item-seven">
                        m
                    </div>
                    <div class="surface-dropdown" id="surface">
                             <span class="surface-content">
                                <span class="surface-content-content">
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">{{ __('myhouse/navbar.au') }} &nbsp; &nbsp;  &nbsp;   (m)</label>
                                </span>
<!--  <span class="surface-content-conte                               <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">{{ __('myhouse/navbar.av') }} &nbsp; &nbsp;   (ha)</label>
                                </span>
                                 <span class="surface-content-content">
                                    <input type="radio" id="test3" name="radio-group">
                                    <label for="test3">{{ __('myhouse/navbar.aw') }} &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  (a)</label>
                                </span>
                                <span class="surface-content-content">
                                    <input type="radio" id="test4" name="radio-group">
                                    <label for="test4">{{ __('myhouse/navbar.ax') }} &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; (ft2)</label>
                                </span>
                                <span class="surface-content-content">
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">{{ __('myhouse/navbar.ay') }} &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (yd2)</label>
                                </span>
                                 <span class="surface-content-content">
                                    <input type="radio" id="test6" name="radio-group">
                                    <label for="test6">{{ __('myhouse/navbar.az') }} &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; (acre)</label>
                                </span>
-->
                             </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-right" id="with-menu">
            <div class="content-nav">
                <div class="content-nav-one">
                    <a href="{{ route('blog', ['click' => 'click']) }}" style="text-decoration: none;" class="myhouse-a">
                        <button class="btn align-self-center text-center rounded-pill myHouse-red btn-blog">
                                {{ __('myhouse/navbar.aaa') }}
                        </button>
                    </a>
                </div>
                <div class="content-nav-two">
                    <a href="{{ route('particulier.pricing.url') }}" style="text-decoration: none; color: inherit" class="myhouse-a">
                        <button class="btn align-self-center text-center rounded-pill myHouse-red btn-first">
                            {{ __('myhouse/navbar.aab') }}
                        </button>
                    </a>
                </div>
                <div class="content-nav-five">
                    <button class="btn align-self-center rounded-pill btn-second" id="appstore">{{ __('myhouse/navbar.aac') }}</button>
                    <div id="appstore-dropdown" class="content-nav-five-dropdowm">
                        <div class="content-nav-five-dropdowm-box">
                            <div class="content-nav-five-dropdowm-box-text">Android</div>
                            <div class="content-nav-five-dropdowm-box-img">
                                <img src="{{ asset('images/residential/single/menu/google.png') }}" alt="">
                            </div>
                        </div>
                        <div class="content-nav-five-dropdowm-box">
                            <div class="content-nav-five-dropdowm-box-text"> iOS &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
                            <div class="content-nav-five-dropdowm-box-img">
                                <img src="{{ asset('images/residential/single/menu/iphone.png') }}" alt="">
                            </div>
                        </div>
                        <div class="content-nav-five-dropdowm-box no-bottom">
                            <div class="content-nav-five-dropdowm-box-text">Windows <br> Desktop</div>
                            <div class="content-nav-five-dropdowm-box-img">
                                <img src="{{ asset('images/residential/single/menu/windows.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                @guest
                    <div class="log-in">
                        <a href="{{ route('connexion', ['click' => 'click']) }}" style="text-decoration: none; color: inherit">
                            <div class="login-box">
                                <div class="login-img">
                                    <img src="{{ asset('development/images/connexion.svg') }}" alt="">
                                </div>
                                <div class="login-text">
                                    {{ __('myhouse/navbar.aad') }} 
                                </div>
                            </div>
                        </a>
                    </div>
                @endguest

                @auth
                    <div class="log-in" onclick="document.getElementById('logout-form').submit()" style="cursor: pointer">
                        <form action="{{ route('logout') }}" id = 'logout-form' method="post">
                            @csrf
                            <div class="login-box">
                                <div class="login-img">
                                    <img src="{{ asset('images/residential/single/path.svg') }}" alt="">
                                </div>
                                <div class="login-text">
                                    {{ __('myhouse/navbar.aaf') }}
                                </div>
                            </div>
                        </form>
                    </div>
                @endauth




                <div class="content-nav-four">
                    <a href="{{ route('menu') }}" >
                        <div class="menu sp-menu">
                            <span class="hamburger">
                              <span class="menu-text">{{ __('myhouse/navbar.aae') }}</span>
                           </span>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

</nav>

