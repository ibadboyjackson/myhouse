@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/generique/profil.aa') }}
@stop

@section('content')

<div style="position: relative;">
    @include('myhouse.front.includes.success')
    @include('myhouse.front.includes.criteresmessage')
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

            <div class="menu-body pl-var">

                <div class="menu-body-title">{{ __('myhouse/back/menu/generique/profil.ab') }}</div>
                <div class="menu-body-hr"></div>
                @if ($user === 'professionnel')
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">{{ __('myhouse/back/menu/generique/profil.ac') }}</span>
                        <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                    </div>
                @endif

                <div class="menu-body-profile">
                    <form action="{{ route('user.update', auth()->user()->id) }}" method="post">
                        @csrf
                        <div class="menu-body-profile-box">
                            <div class="menu-body-profile-box-title">{{ __('myhouse/back/menu/generique/profil.ad') }}</div>
                            <div class="menu-body-profile-box-block">
                                <div class="menu-body-profile-box-block-item">
                                    <div class="field">
                                        <label for="nom" class="field-label">{{ __('myhouse/back/menu/generique/profil.ae') }}</label>
                                        <input type="text" id="nom" name="{{ __('myhouse/auth/inscription.ac') }}" class="field-input" value="{{ auth()->user()->nom }}">

                                        @error( str_replace(' ', '_', __('myhouse/auth/inscription.ac')) )
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="Ville" class="field-label">{{ __('myhouse/back/menu/generique/profil.af') }}</label>
                                        <input type="text" id="Ville" name="{{ __('myhouse/auth/inscription.ad') }}" class="field-input" value="{{ auth()->user()->ville }}">

                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ad')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="field">
                                        <label for="phone" class="field-label">{{ __('myhouse/back/menu/generique/profil.ag') }}</label>
                                        <input type="text" id="phone" name="{{ __('myhouse/auth/inscription.ae') }}" class="field-input" value="{{ auth()->user()->telephone }}">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ae')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="menu-body-profile-box-block-item">
                                    <div class="field">
                                        <label for="doge" class="field-label">{{ __('myhouse/back/menu/generique/profil.ah') }}</label>
                                        <input type="email" id="email" name="{{ __('myhouse/auth/inscription.ag') }}" class="field-input" value="{{ auth()->user()->email }}">

                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ag')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="field">
                                        <label for="country" class="field-label">{{ __('myhouse/back/menu/generique/profil.ai') }}</label>
                                        <input type="text" id="country" name="{{ __('myhouse/auth/inscription.ah') }}" class="field-input" value="{{ auth()->user()->pays   }}">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ah')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="password" class="field-label">{{ __('myhouse/auth/inscription.af') }}</label>
                                        <input type="password" id="password" name="{{ __('myhouse/auth/inscription.ao') }}" class="field-input">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ao')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <a href="#" class="show-password password-hide" id = 'password-eye'>
                                            <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="menu-body-profile-box-button text-uppercase" style="background-color: transparent !important;">
                                <div class="inscription">
                                    <button class="btn btn-connections" type="submit">{{ __('myhouse/back/menu/generique/profil.ak') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

            <!-- End List -->


        </div>
    </div>
</div>


@stop
