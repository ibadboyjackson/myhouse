@extends('myhouse.front.template')

@if ($email)
    @section('title')
        Email
    @stop
@else
    @section('title')
        {{ __('myhouse/auth/confirm.aa') }}
    @stop
@endif

@section('content')


<div style="position: relative;">

    @include('myhouse.front.includes.success')


    <div class="overlay mt-89">
        <a href="{{ $url }}">
            <div class="connection-x-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </a>


        <form action="{{ route('confirm', $email) }}">
            <div class="row justify-content-center">
                <div class="panel mt-57 rounded mx-sm-auto">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="content-top">
                                <h3>{{ __('myhouse/auth/confirm.ab') }}</h3>
                                <div class="text-center">
                                    <div class="paragraph-1">
                                        {{ __('myhouse/auth/confirm.ac') }}
                                    </div>
                                    <div class="paragraph-2">
                                        {{ $email }}
                                    </div>
                                    <div class="paragraph-3">
                                        <div class="link-text">
                                            {{ __('myhouse/auth/confirm.ad') }}
                                        </div>
                                        <div class="link">
                                            <a href="{{ route('email', $email) }}">{{ __('myhouse/auth/confirm.ae') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">

                                        <a href="{{ route('menu.charte', ['user' => 'particulier']) }}" style="text-decoration: none; color: inherit">

                                            <div class="text-bottom conditions">
                                                {{ __('myhouse/auth/confirm.af') }} 
                                            </div>
                                            
                                        </a>


                                </div>





                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="second-place">
                                <div>{{ __('myhouse/auth/confirm.ag') }}</div>
                                <div>{{ __('myhouse/auth/confirm.ah') }}</div>
                                <div>{{ __('myhouse/auth/confirm.ai') }}</div>
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

    <script src="{{ asset('development/js/errors/errors.js') }}"></script>

@stop
