@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/media.aa') }}
@stop


@section('style')
    <style>
        label:disabled {
            cursor: not-allowed;
            pointer-events: all !important;
        }
    </style>
@stop


@section('content')

<form action="{{ route('professionnel.upload') }}" method="post" enctype="multipart/form-data" id="transform">
    @csrf

    <div class="c-page">


                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'media')
                        <div class="transaction-block" id="transaction-block">
                            <div class="transaction-block-content">
                                <div class="transaction-block-content-x" id="transaction-close">
                                    <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                                </div>
                                <div class="transaction-block-content-title">{{ __('myhouse/back/annonces/professionnel/critere.aa') }}</div>
                                <div class="transaction-block-content-body">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ab') }} <br> {{ __('myhouse/back/annonces/professionnel/critere.ac') }}
                                </div>
                                <div class="transaction-block-content-hr"></div>
                                <div class="transaction-bock-footer" id="transaction-closes">
                                    {{ __('myhouse/back/annonces/professionnel/critere.ad') }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endisset

        <div class="ca-page">
            <div class="ca-page-item">
                @include('myhouse.back.annonces.modules.professionnel.left')
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-seconds">
                    @include('myhouse.back.annonces.modules.professionnel.progress')


                        <input type="hidden" name="id" value="{{ $id }}">

                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-types-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    {{ __('myhouse/back/annonces/professionnel/media.ab') }} 
                                </div>
                                <div class="ca-page-item-third-connexion-box-hr"></div>

                                <div class="ca-page-item-third-type-boxe">

                                    <div class="ca-page-item-third-type-boxe-upload">
                                        <div class="upload-img text-center">
                                            <label for="files" class="custom-file-upload">
                                                <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                            </label>

                                            <input id="files" type="file" multiple="multiple" name="image[]">

                                            <div class="upload-text">{{ __('myhouse/back/annonces/professionnel/media.ac') }}</div>
                                            <div class="up-text">{{ __('myhouse/back/annonces/professionnel/media.ad') }}</div>
                                        </div>
                                    </div>

                                    <div class="ca-page-item-third-type-boxe-upload-results">
                                    <div class="ca-page-item-third-type-boxe-upload-results-img" id="result"></div>
                                        <!-- File result here -->
                                    </div>

                                </div>

                                <div class="yt_b text-center">
                                    <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                        <i class="fa fa-chevron-left"></i>
                                     </a>
                                    <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/professionnel/media.ae') }}</button>
                                </div>

                            </div>

                        </div>


                    </form>
                </div>
            </div>
            <div class="ca-page-item">
                <div class="ca-page-item-third">

                    <a href="{{ $url }}">
                        <div class="ca-page-item-third-button-x clearfix">
                             <img src="{{ asset('images/residential/x.svg') }}" alt="" class="float-right">
                        </div>
                    </a>

                    <div class="ca-page-item-third-thumb">
                        <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/professionnel/media.af') }}
                    </div>
                    <div class="media-mt">
                        <div class="ca-page-item-third-thumb">
                            <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/professionnel/media.ag') }}
                        </div>
                        <div class="ca-page-item-third-text-text">
                            {{ __('myhouse/back/annonces/professionnel/media.ah') }} <br>
                            {{ __('myhouse/back/annonces/professionnel/media.ai') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    <script src="{{ asset('development/js/upload.js') }}"></script>
    <script src="{{ asset('development/js/video.js') }}"></script>
    <script src="{{ asset('development/js/level.js') }}"></script>

@stop

