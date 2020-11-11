@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/annonce.aa') }}
@stop

@section('content')
    <div class="annonce a-neuf">
        <div class="c-page">
            <div class="ca-page">
                <div class="ca-page-item">
                    @include('myhouse.back.annonces.modules.neuf.left')
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-second">

                        @include('myhouse.back.annonces.modules.neuf.progress')

                        <form action="{{ route('neuf.upload') }}" method="get">

                            <input type="hidden" name="id" value="{{ $id }}">

                            <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-connexion-box">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/neuf/annonce.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-title-hr"></div>

                                </div>
                            </div>
                            <div class="ca-page-item-second-subscription">
                                <div class="ca-page-item-second-body">
                                    <div class="ca-page-item-second-body-annonce-box">
                                        <textarea cols="30" rows="17" name="description" class="form-control  @error('description') man-red @enderror" placeholder="{{ __('myhouse/back/annonces/neuf/annonce.ae') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="ca-page-item-second-footer">
                                <button class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <button class="btn  btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/annonce.ac') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ca-page-item">
                    <div class="ca-page-item-third">
                        <div class="ca-page-item-third-button-x clearfix">
                            <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>
                        <div class="ca-page-item-third-thumb">
                            <img src="{{ asset('images/residential/ia.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/neuf/annonce.ad') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
