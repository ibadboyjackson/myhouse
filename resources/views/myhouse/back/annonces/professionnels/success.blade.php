@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/success.aa') }}
@stop

@section('content')
    <div class="page-rise-mt">
        <div class="page-rise-st">
            <div class="page-rise-success">
                <div class="page-rise-success-box">
                    <div class="page-rise-success-box-text">{{ __('myhouse/back/annonces/professionnel/success.ab') }}</div>
                    <div class="page-rise-success-box-text-right">
                        <div class="page-rise-button">
                            <div class="btn-rouge">
                                <a href="/" style="text-decoration: none; color: inherit">
                                    {{ __('myhouse/back/annonces/professionnel/success.ac') }}
                                </a>
                            </div>
                            <div class="btn-vert">
                                <a href="{{ route('pricing') }}" style="text-decoration: none; color: inherit">
                                    {{ __('myhouse/back/annonces/professionnel/success.ad') }}
                                </a>
                            </div>
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
