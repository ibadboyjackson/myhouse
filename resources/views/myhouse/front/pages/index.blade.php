@extends('myhouse.front.template')

@section('title')
    My House
@stop

@section('style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@stop

@section('content')
    <div class="ls" id="must-closes">
    <div class="wrap mt-100">
        <div class="container-fluid">
            <div class="content-with-bg">
                <div class="website-ads">
                    <div class="website-ads-carousel">
                        <div class="carousel slide mb-5" data-ride="carousel" id="aa5{{ $bannieres->last()->id ?? '' }}">

                            <ol class="carousel-indicators">

                                @foreach($bannieres as $image)
                                    <li class="{{ $loop->first ? 'active' : '' }}" data-target="#aa5{{ $bannieres->last()->id ?? '' }}" data-slide-to="{{ $loop->index }}"></li>
                                @endforeach

                            </ol>

                            <div class="carousel-inner">

                                @foreach($bannieres as $image)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img
                                            class="img-fluid"
                                            src="{{ asset('development/files/professionnel/banniere/') . '/' . $image->image }}"
                                            alt="Third Slide"
                                        />
                                    </div>
                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#aa5{{ $bannieres->last()->id ?? '' }}" role="button" data-slide="prev" style="padding-left: 80px;">
                                <span><i class="fa fa-angle-left font-zl" aria-hidden="true" style="color: #AAAAAA;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#aa5{{ $bannieres->last()->id ?? '' }}" role="button" data-slide="next" style="padding-right: 80px;">
                                <span><i class="fa fa-angle-right font-zr" aria-hidden="true" style="color: #AAAAAA;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <form action="{{ route('recherche', $type) }}" method="get" id="form" class="home-form">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container mt-203">
                            <div class="form-group">
                                <div class="holder f-18 title-gray">
                                    {{ __('myhouse/acceuil.aa') }}
                                    <span class="red">
                                      {{ __('myhouse/acceuil.ab') }}
                                    </span>
                                </div>
                                <input type="search" class="form-control rounded-pill myHouse-search mx-auto"
                                       name="location"
                                       id="input-search"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Ce champ est obligatoire"
                                       autocomplete="off"
                                >
                                <input type="hidden" name="page" id="searchable">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-sm-auto mt-website mx-auto">
                        <div class="col-sm-5 col-md-12">
                            <button class="myHouse-button btn myHouse-bg-gray text-white text-uppercase rounded-pill mr-15" type="submit" id="neufs" onclick="showTooltip()">{{ __('myhouse/acceuil.ac') }}</button>
                            <button class="myHouse-button btn myHouse-bg-gray text-white text-uppercase rounded-pill mr-15" type="submit" id="professionnels" onclick="showTooltip()">{{ __('myhouse/acceuil.ad') }}</button>
                            <button class="myHouse-button btn myHouse-bg-gray text-white text-uppercase rounded-pill" type="submit" id="particuliers" onclick="showTooltip()">{{ __('myhouse/acceuil.ae') }}</button>
                        </div>
                    </div>
                </div>
                <div class="myHouse-text">
                    <div class="row">
                        <div class="col-sm-12 text-center section-text title-gray aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <p class="mx-sm-3" style="margin-bottom: 0 !important;">{{ __('myhouse/acceuil.af') }}</p>
                        </div>
                    </div>
                </div>
            </form>

            <div class="section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="state-img-1">
                                <img src="{{ asset('images/residential/svg.svg') }}" alt="" width="95" height="55">
                            </div>
                            <h4 class = "title-gray title-is-gray"> {{ __('myhouse/acceuil.ag') }} </h4>
                            <p class="mt-2 title-gray-o aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">


                                {{ __('myhouse/acceuil.ah') }}
                                <span class="spa__br">
                               <span class="spa__brl">
                                   <span> <img src="{{ asset('images/residential/nike.svg') }}" alt=""> </span>
                                   <span style="margin-left: 12px;">{{ __('myhouse/acceuil.ai') }}</span>
                               </span>
                               <span class="spa__brl">
                                   <span> <img src="{{ asset('images/residential/nike.svg') }}" alt=""> </span>
                                   <span style="margin-left: 12px;" class="text-capitalize">{{ __('myhouse/acceuil.aj') }}</span>
                               </span>
                               <span class="spa__brl">
                                   <span> <img src="{{ asset('images/residential/nike.svg') }}" alt=""> </span>
                                   <span style="margin-left: 12px;" class="text-capitalize">{{ __('myhouse/acceuil.ak') }}</span>
                               </span>
                           </span>
                            </p>



                        </div>
                        <div class="col-md-4 text-center">
                            <div class="state-img" style="padding-top: 5px;">
                                <img src="{{ asset('images/residential/free.svg') }}" alt="" width="80" height="50">
                            </div>
                            <h4 class="title-gray title-is-gray">{{ __('myhouse/acceuil.al') }}</h4>


                            <p class="title-gray-o  aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000" style="padding-top: 1px;">
                                {{ __('myhouse/acceuil.am') }}<br>
                                {{ __('myhouse/acceuil.an') }}<br>
                                {{ __('myhouse/acceuil.ao') }}
                            </p>

                        </div>
                        <div class="col-md-4 text-center">
                            <div class="state-img" style="padding-top: 5px;">
                                <img src="{{ asset('images/residential/devices.svg') }}" alt="" width="82" height="55">
                            </div>
                            <h4 class="title-gray title-is-gray">{{ __('myhouse/acceuil.ap') }}</h4>
                            <p class="mt-2 title-gray-o aos-init aos-animate"  data-aos="fade-right" data-aos-duration="1000">
                                {{ __('myhouse/acceuil.aq') }}<br>
                                {{ __('myhouse/acceuil.ar') }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="website-section-1">
                <div class="website-section-one">
                    <div class="website-section-one-first">
                        <img src="{{ asset('images/residential/single/menu/ad.png') }}" alt="">
                    </div>
                    <div class="website-section-one-second">
                        <img src="{{ asset('images/residential/single/menu/pub.png') }}" alt="">
                    </div>
                </div>
                <div class="website-section-two">
                    <div class="website-section-carousel">
                        <div class="carousel slide" data-ride="carousel" id="slider1">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                <li data-target="#slider1" data-slide-to="1"></li>
                                <li data-target="#slider1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/single/menu/carousel.png') }}"
                                        alt="First Slide"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/single/menu/carousel.png') }}"
                                        alt="Second Slide"
                                    />
                                </div>
                                <div class="carousel-item ">
                                    <img
                                        class="d-block img-fluid mx-auto"
                                        src="{{ asset('images/residential/single/menu/carousel.png') }}"
                                        alt="Third Slide"
                                    />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider1" role="button" data-slide="prev" style="padding-left: 80px;">
                                <span><i class="fa fa-angle-left font-z" aria-hidden="true" style="color: #40987F;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider1" role="button" data-slide="next" style="padding-right: 80px;">
                                <span><i class="fa fa-angle-right font-z" aria-hidden="true" style="color: #40987F;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>


                <div class="website-section-three">
                    <div class="website-section-three-one">
                        <img src="{{ asset('images/residential/single/menu/ad.png') }}" alt="">
                    </div>
                    <div class="website-section-three-two">
                        <img src="{{ asset('images/residential/single/menu/pub.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="website-section-2">

            <div class="section-2-box">
                <div class="website-section-2-one">
                    <div class="website-section-2-one-text">{{ __('myhouse/acceuil.as') }}</div>

                    <a href="{{ route('menu.faq', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit;">
                        <div class="website-section-2-one-button">
                            {{ __('myhouse/acceuil.at') }}
                        </div>
                    </a>

                </div>


                <div class="website-section-2-two">
                    <div class="website-section-2-one-text">{{ __('myhouse/acceuil.au') }}</div>
                    
                    <a href="{{ route('menu.contact', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit;">
                        <div class="website-section-2-two-button">
                            {{ __('myhouse/acceuil.av') }}
                        </div>
                    </a>

                </div>
            </div>
        </div>
        <div class="website-section-3">
            <footer class="geo-foot">
                <div class="geo-foot-grig">
                    <div class="geo-foot-grig-item">
                        <div class="geo-foot-grig-item-ptt">
                            <div class="geo-foot-grid-social">
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Facebook</div>
                                </div>
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Twitter</div>
                                </div>
                                <div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Instagram</div>
                                </div>
                                <!--<div class="geo-foot-grid-social-block">
                                    <div class="geo-foot-grid-social-block-img">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </div>
                                    <div class="geo-foot-grid-social-block-text">Google</div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="geo-foot-grig-item">
                            <div class="geo-foot-grid-subscribe">
                                <div class="geo-grid-subscribe-pt">
                                    <div class="geo-foot-grid-subscribe-text">
                                        {{ __('myhouse/acceuil.aw') }}
                                    </div>
                                    <div class="geo-subscribe">
                                        <div class="geo-foot-with-input">
                                            <label>
                                                <input type="text" placeholder="{{ __('myhouse/acceuil.ax') }}" class="form-control">
                                            </label>
                                        </div>
                                        <div class="geo-foot-with-button">
                                            <button class="btn">{{ __('myhouse/acceuil.ay') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="geo-foot-grig-item">
                        <div class="geo-foot-grig-item-ptt f-r ">
  
                            
                            <a href="/blog" style="text-decoration: none; color: inherit;">
                                <div >
                                    {{ __('myhouse/acceuil.az') }}
                                </div>
                            </a>

                            <a href="{{ route('menu.charte', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit;">
                                <div >
                                    {{ __('myhouse/acceuil.aaa') }}
                                </div>
                            </a>
                            
                



                            <a href="{{ route('menu.faq', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit;">
                                <div>
                                    FAQ
                                </div>
                            </a>

                            <a href="{{ route('menu.contact', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit;">
                                <div >
                                    Contact
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="geo-foot-copy">
            © GEOMARK 2020
        </div>
    </div>

</div>
@stop


@section('scripts')

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('development/js/here.js') }}"></script>

@endsection
