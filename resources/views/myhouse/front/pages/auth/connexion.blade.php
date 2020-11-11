@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/auth/connexion.aa') }}
@stop

@section('content')


<div style="position: relative">

    @include('myhouse.front.includes.success')


    <div class="overlay mt-89">
        <a href="{{ $url }}">
            <div class="connection-x-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </a>
        
        <form action="{{ route('connexion') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="panel mt-57 rounded mx-sm-auto">
                    <div class="panel-title-login text-uppercase">{{ __('myhouse/auth/connexion.ab') }}</div>
                    <div class="rr-row">
                        <div class="row">
                            <div class="col-sm-5 offset-sm-3 col-md-8 offset-md-4 .col-12 mt-5 ">
                                <div class="row r-row">
                                    <div class="col-md-12">
                                        <div id="has-error">
                                            <div class="pr">
                                                <div class="field">
                                                    <label for="email" class="field-label">{{ __('myhouse/auth/connexion.ac') }}</label>
                                                    <input type="text" id="email" name="{{ __('myhouse/auth/connexion.aj') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/connexion.aj'))) }}">

                                                    @error(str_replace(' ', '_', __('myhouse/auth/connexion.aj')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="field">
                                                    <label for="password" class="field-label">{{ __('myhouse/auth/connexion.ad') }}</label>

                                                    <input type="password" id="password" name="{{ __('myhouse/auth/connexion.ak') }}" class="field-input darkest" value="{{ old(__('myhouse/auth/connexion.ak')) }}">


                                                    <a href="#" class="show-password password-hide" id = 'password-eye'>
                                                        <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                                    </a>


                                                    @error(str_replace(' ', '_', __('myhouse/auth/connexion.ak')))
                                                        <span class="myhouse-invalid" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--     <div class="col-md-6">
                                        <div class="ml-6">
                                            <div class="dis errors" id="error">
                                                <span class="error-text-1">Commencez l'expérience</span>
                                                <span class="error-text-2 d-block">MyHouse !</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="mt-5 lg-check">
                                    <label for="">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('myhouse/auth/connexion.ae') }}
                                    </label>
                                    <span class="password float-right">
                                 <a href="{{ route('forgot') }}">{{ __('myhouse/auth/connexion.af') }}</a>
                                </span>
                                    <div class="text-center mt-5">
                                        <div class="inscription text-uppercase">
                                            <a href="{{ route('inscription') }}">{{ __('myhouse/auth/connexion.ag') }}</a>
                                        </div>
                                        <div class="lg-connection mt-4">
                                            <button class="btn btn-connections" id="btn-dark" type="submit">{{ __('myhouse/auth/connexion.ah') }}</button>
                                        </div>


                                        <a href="{{ route('menu.charte', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit">
                                            <div class="conditions mt-5">
                                                {{ __('myhouse/auth/connexion.ai') }}
                                            </div>
                                        </a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

</div>


@stop

@section('scripts')
    <script src="{{ asset('myhouse/eye.js') }}"></script>
@stop
