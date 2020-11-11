@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/auth/success.aa') }}
@stop

@section('content')
    <div class="overlay mt-89">
        <a href="{{ $url }}">
            <div class="connection-x-button">
                <img src="{{ asset('images/residential/x.svg') }}" alt="">
            </div>
        </a>
        <form action="">
            <div class="row justify-content-center">
                <div class="panel mt-57 rounded mx-sm-auto">
                    <div class="panel-title text-center content-tops text-uppercase">{{ __('myhouse/auth/success.ab') }}</div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="mt-588">
                                <div class="l-success">
                                    <img src="{{ asset('images/residential/success.svg') }}" alt="" width="154" height="132">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
