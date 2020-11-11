@extends('myhouse.front.template')

@section('title')
   {{ __('myhouse/auth/password.aa') }}
@stop

@section('content')


<div style="position: relative;">

    @include('myhouse.front.includes.success')

    <div class="overlay mt-89">
     
        <a href="{{ $url }}">
            <div class="connection-x-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </a>


            <div class="row justify-content-center">
                <div class="panel mt-57 rounded mx-sm-auto">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="content-top">
                                <h3>{{ __('myhouse/auth/password.ab') }}</h3>
                                <div class="has-form">
                                    <form action="{{ route('password.update') }}" method="post">
                                        @csrf 

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="field">

                                            <label for="email" class="field-label">{{ __('myhouse/auth/password.ac') }}</label>

                                            <input type="text" id="email" name="email" class="field-input darkest" value="{{ old('email') }}">

                                            @error('email')
                                                <span class="myhouse-invalid" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>


                                        <div class="field">
                                            <label for="password" class="field-label">{{ __('myhouse/auth/password.ad') }}</label>

                                            <input type="password" id="password" name="password" class="field-input darkest" value={{ old('password')}}>
                                            
                                            <a href="#" class="show-password password-hide" id = 'password-eye'>
                                                <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                            </a>
                                            @error(str_replace(' ', '_', __('myhouse/auth/inscription.ao')))
                                            <span class="myhouse-invalid" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label for="password" class="field-label">{{ __('myhouse/auth/password.ae') }}</label>
                                            <input type="password" id="passwords" name="password_confirmation" class="field-input">


                                            <a href="#" class="show-password password-hide" id = 'password-eyes'>
                                                <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                            </a>

                                        </div>
                                        <div class="field-seconds">
                                            <div class="text-center">
                                                <div class="lg-connection">
                                                    <button class="btn btn-connections" id = "btn-dark" type="submit">{{ __('myhouse/auth/password.af') }}</button>
                                                </div>

                                        
                                                <a href="{{ route('menu.charte', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit">
                                                    <div class="mt-5 conditions">{{ __('myhouse/auth/password.ag') }}</div>
                                                </a>    
                                            
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="second-place">
                                <div>{{ __('myhouse/auth/password.ah') }}</div>
                                <div>{{ __('myhouse/auth/password.ai') }}</div>
                                <div>{{ __('myhouse/auth/password.aj') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>



@stop

@section('scripts')

    <script src="{{ asset('myhouse/eye.js') }}"></script>
    <script src="{{ asset('development/js/errors/errors.js') }}"></script>

@stop

