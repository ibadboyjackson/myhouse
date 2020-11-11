@extends('myhouse.front.template')

@section('title')
   {{ __('myhouse/auth/inscription.aa') }}
@stop

@section('content')

    <!-- Overlay -->

<div style="position: relative;">

    @include('myhouse.front.includes.success')


    <div class="overlays mt-89">
            <a href="{{ $url }}">
                <div class="connection-x-button">
                    <img src="{{ asset('images/residential/x.svg') }}" alt="">
                </div>
            </a>
        <form action="{{ route('inscription') }}" method="post" id ="inscription-form">
            @csrf
            <div class="row justify-content-center">
                <div class="panels mt-57 rounded mx-sm-auto">
                    <div class="mt-59 mx-57">
                        <div class="panel-title-login text-center text-uppercase">{{ __('myhouse/auth/inscription.ab') }}</div>
                        <div class="row">
                            <div class="col-md-6">
 
                                <div class="field">
                                    <label for="nom" class="field-label @error('nom') myhouse-is-invalid @enderror">{{ __('myhouse/auth/inscription.ac') }}</label>
                                    <input type="text" id="nom" name="{{ __('myhouse/auth/inscription.ac') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ac'))) }}">
                                    @error( str_replace(' ', '_', __('myhouse/auth/inscription.ac')) )
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="ville" class="field-label">{{ __('myhouse/auth/inscription.ad') }}</label>
                                    <input type="text" id="ville" name="{{ __('myhouse/auth/inscription.ad') }}" class="field-input darkest" value="{{ old(__('myhouse/auth/inscription.ad')) }}">
                                    @error(str_replace(' ', '_', __('myhouse/auth/inscription.ad')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="telephone" class="field-label">{{ __('myhouse/auth/inscription.ae') }}</label>
                                    <input type="text" id="telephone" name="{{ __('myhouse/auth/inscription.ae') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ae'))) }}">
                                    @error(str_replace(' ', '_', __('myhouse/auth/inscription.ae')))
                                        <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="password" class="field-label">{{ __('myhouse/auth/inscription.af') }}</label>
                                    <input type="password" id="password" name="{{ __('myhouse/auth/inscription.ao') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ao'))) }}">

                                    <a href="#" class="show-password password-hide" id = 'password-eye'>
                                        <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                    </a>
                                    @error(str_replace(' ', '_', __('myhouse/auth/inscription.ao')))
                                    <span class="myhouse-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="float-right">
                                    <div class="field">
                                        <label for="email" class="field-label">{{ __('myhouse/auth/inscription.ag') }}</label>
                                        <input type="text" id="email" name="{{ __('myhouse/auth/inscription.ag') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ag'))) }}">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ag')))
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="pays" class="field-label">{{ __('myhouse/auth/inscription.ah') }}</label>
                                        <input type="text" id="pays" name="{{ __('myhouse/auth/inscription.ah') }}" class="field-input darkest" value="{{ old(__('myhouse/auth/inscription.ah')) }}">
                                        @error(str_replace(' ', '_', __('myhouse/auth/inscription.ah')))
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="phone" class="field-label">{{ __('myhouse/auth/inscription.ai') }} <span style="font-size: 12px">{{ __('myhouse/auth/inscription.bbv') }}</span> </label>
                                        <input type="text" id="phone" name="{{ __('myhouse/auth/inscription.ai') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.ai'))) }}">
                                    </div>
                                    <div class="field">
                                        <label for="passwords" class="field-label">{{ __('myhouse/auth/inscription.aj') }}</label>
                                        <input type="password" id="passwords" name="{{ __('myhouse/auth/inscription.an') }}" class="field-input darkest" value="{{ old(str_replace(' ', '_', __('myhouse/auth/inscription.an'))) }}">
                                        <a href="#" class="show-password password-hide" id = 'password-eyes'>
                                            <img src="{{ asset('images/residential/eyes.svg') }}" alt="">
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="text-center s-ry">
                                <div class="has-condition">
                                    <label for="">
                                        <input type="checkbox" id = "inscription-check">
                                        {{ __('myhouse/auth/inscription.ak') }}
                                    </label>
                                </div>
                                <div class="inscription mt-4">
                                    <button class="btn btn-connections btn-bg-darker" type="submit" id = 'btn-inscription' disabled>{{ __('myhouse/auth/inscription.al') }}</button>
                                </div>
                                <a href="{{ route('menu.charte', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit">
                                    <div class="conditions mt-4">
                                        {{ __('myhouse/auth/inscription.am') }}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> 

                </div>
            </div>
        </form>
    </div>


</div>



    <!-- Overlay -->



@stop

@section('scripts')

    <script src="{{ asset('myhouse/eye.js') }}"></script>
    <script src="{{ asset('development/js/errors/errors.js') }}"></script>

@stop
