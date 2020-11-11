@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/success.aa') }}
@stop

@section('content')
    <div class="page-rise-mt">
        <div class="page-rise-st">
            <div class="page-rise-success">
                <div class="page-rise-success-box">
                    <div class="page-rise-success-box-text">{{ __('myhouse/back/annonces/neuf/success.ab') }}</div>
                    <div class="page-rise-success-box-text-right">
                        <div class="page-rise-button">

                            <!--
                                <div class="btn-rouge">{{ __('myhouse/back/annonces/neuf/success.ac') }}</div>
                                <div class="btn-vert">{{ __('myhouse/back/annonces/neuf/success.ad') }}</div>
                            -->
                        </div>

                    </div>
                    <div class="page-rise-success-box-image">
                        <div>
                            <img src="{{ asset('images/residential/single/ok.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
