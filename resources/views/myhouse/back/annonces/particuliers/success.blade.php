@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/particulier/success.aa') }}
@stop



@section('content')
    <div class="page-rise-mt">
        <div class="page-rise-nxt">

            <a href="{{ $url }}">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>

            <div class="page-rise-success">
                <div class="page-rise-success-box">
                    <div class="page-rise-success-box-msg">
                        {{ __('myhouse/back/annonces/particulier/success.ab') }}
                    </div>
                    <div class="page-rise-success-box-text">{{ __('myhouse/back/annonces/particulier/success.ac') }}</div>
                    <div class="page-rise-success-box-text-right">
                        <!--    <div class="page-rise-button">
                                <div class="btn-rouge">TERMINER</div>
                                <div class="btn-vert">AJOUTER UNE ANNONCE</div>
                            </div> -->

                    </div>
                    <div class="page-rise-success-box-image">
                        <div>
                            <img src="{{ asset('images/residential/single/ok.svg') }}" alt="">
                        </div>
                    </div>
                        <!-- <div style="margin-top: 149px; display: flex; justify-content: center;">
                            <a href="/" style="text-decoration: none; color: inherit;">
                                <button class="btn btn-contact-error text-uppercase">{{ __('myhouse/back/annonces/particulier/transaction.aag') }}</button>
                            </a>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
@stop
