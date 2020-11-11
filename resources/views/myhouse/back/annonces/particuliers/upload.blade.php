@extends('myhouse.front.template')

@section('title')
   {{ __('myhouse/back/annonces/particulier/upload.aa') }}
@stop

@section('style')


    <link rel = "stylesheet" href="{{ asset('development/js/dropzone/dropzone.min.css') }}">


    <style>
        label:disabled {
            cursor: not-allowed;
            pointer-events: all !important;
        }
    </style>
@stop

@section('content')

    <form action="{{ route('particulier.successfull') }}" method="post" enctype="multipart/form-data" id="transform">
        @csrf

    <div class="particulier" style="position: relative;">

    @include('myhouse.front.includes.criteresmessage')


        <div class="c-page">
            @if (auth()->user()->particulier->last()->page === 'upload')
                <div class="transaction-block" id="transaction-block">
                    <div class="transaction-block-content">
                        <div class="transaction-block-content-x" id="transaction-close">
                            <img src="{{ asset('images/residential/single/menu/path.svg') }}" alt="">
                        </div>
                        <div class="transaction-block-content-title">Votre annonce est sauvegardée</div>
                        <div class="transaction-block-content-body">
                            Retrouvez l'annonce dans votre menu pour la <br> réactiver et continuer
                        </div>
                        <div class="transaction-block-content-hr"></div>
                        <div class="transaction-bock-footer" id="transaction-closes">
                            FERMER
                        </div>
                    </div>
                </div>
            @endif
            <div class="ca-page">


                <div class="ca-page-item">
                    @include('myhouse.back.annonces.modules.particulier.left')
                </div>



                <div class="ca-page-item">

                    <div class="ca-page-item-second">
                        @include('myhouse.back.annonces.modules.particulier.progress')

                        <div class="ca-page-item-third-connexion">

                                <div class="ca-page-item-third-types-box">

                                    <input type="hidden" name="id" value="{{ $particulier->id }}">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/particulier/upload.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-hr"></div>

                                    <div class="ca-page-item-third-type-boxe">
                                        <div class="ca-page-item-third-type-boxe-upload">
                                            <div class="upload-img text-center">
                                                <label for="files" class="custom-file-upload" id="custom-label">
                                                    <img src="{{ asset('images/residential/upload.svg') }}" alt="">
                                                </label>
                                                <input id="files" type="file" multiple="multiple" name="image[]">
                                                <div class="upload-text">{{ __('myhouse/back/annonces/particulier/upload.ac') }}</div>
                                                <div class="up-text">{{ __('myhouse/back/annonces/particulier/upload.ad') }}</div>
                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe-upload-results">
                                            <div class="ca-page-item-third-type-boxe-upload-results-img" id="result">

                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>
                                                <div class="ca-page-item-item"></div>


                                            </div>
                                        </div>

                                        <div class="ca-page-item-third-type-boxe-upload-description">
                                            <textarea name="description" class="form-control" style="padding: 30px; text-align: justify;">{{ $particulier->description }}</textarea>
                                        </div>

                                    </div>

                                    <div class="yt_b text-center">
                                        <a href = "{{ $particulier->localisationurl }}" style="text-decoration: none; color: inherit;" class="btn btn-prev mr-2">
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                        <button class="btn btn-contact text-uppercase">{{ __('myhouse/back/annonces/particulier/upload.af') }}</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>





                <div class="ca-page-item">

                                <a href="{{ $url }}">
                                    <div class="menu-wrap-x-buttons">
                                        <img src="{{ asset('images/residential/single/x.svg') }}" alt="" class="float-right">
                                    </div>
                                </a>


                    <div class="ca-page-item-third">

                        <div class="ca-page-item-thirds-thumbs mt-sp-one">
                            <img src="{{ asset('images/residential/single/d1.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/particulier/upload.ah') }}
                        </div>
                    </div>



                    <div class="ca-page-item-thirds">
                        <div class="ca-page-item-third-thumbs mt-two">
                            <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/particulier/upload.ai') }}
                        </div>
                        <div class="ca-page-item-third-text-b mt-one-half">
                            {{ __('myhouse/back/annonces/particulier/upload.aj') }}
                        </div>
                    </div>


                    <div class="ca-page-item-thirds">
                        <div class="ca-page-item-third-thumbs mt-three">
                            <img src="{{ asset('images/residential/single/d3.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/particulier/upload.ak') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')

    <script src="{{ asset('development/js/upload.js') }}"></script>
    <script src="{{ asset('development/js/level.js') }}"></script>


    <script src ="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src ="{{ asset('development/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('development/js/errors/errors.js') }}"></script>


@stop
