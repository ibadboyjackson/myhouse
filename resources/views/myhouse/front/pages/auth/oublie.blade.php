@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/auth/oublie.aa') }}
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
                                <h3>{{ __('myhouse/auth/oublie.ab') }}</h3>
                                <div class="has-form">
                                    <form action="{{ route('forgot.email') }}" method="post">
                                        @csrf
                                        <div class="field">
                                            <label for="email" class="field-label">{{ __('myhouse/auth/oublie.ac') }}</label>
                                            <input type="email" id="email" name="email" class="field-input darkest" value="{{ old('email') }}">

                                            @error('email')
                                                 <span class="myhouse-invalid" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror
                                        </div>  
                                        <div class="field-second">
                                            <div class="text-center">
                                                
                                                <!--<div class="inscription text-uppercase">
                                                    <a href="{{ route('inscription') }}">{{ __('myhouse/auth/oublie.ad') }}</a>
                                                </div>-->

                                                <div class="lg-connection mt-4">
                                                    <button class="btn btn-connections" id = "btn-dark" type="submit">{{ __('myhouse/auth/oublie.ae') }}</button>
                                                </div>

                                                <a href="{{ route('menu.charte', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit">
                                                    <div class="mt-5 conditions">{{ __('myhouse/auth/oublie.af') }}</div>
                                                </a>        

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="second-place">
                                <div>{{ __('myhouse/auth/oublie.ag') }}</div>
                                <div>{{ __('myhouse/auth/oublie.ah') }}</div>
                                <div>{{ __('myhouse/auth/oublie.ai') }}</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>


                

@section('scripts')

    <script src="{{ asset('development/js/errors/errors.js') }}"></script>


@endsection



@stop
