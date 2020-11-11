@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/neuf/upload.aa') }}
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


                        <form action="{{ route('neuf.uploader') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="ca-page-item-third-connexion">
                                <div class="ca-page-item-third-connexion-box">

                                    <input type="hidden" name="id" value="{{ $id }}">

                                    <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                        {{ __('myhouse/back/annonces/neuf/upload.ab') }}
                                    </div>
                                    <div class="ca-page-item-third-connexion-box-title-hr"></div>


                                </div>
                            </div>
                            <div class="ca-page-item-third-type-boxe">
                                <div class="ca-page-item-third-type-boxe-upload">
                                    <div class="upload-img text-center">
                                        <label for="files" class="custom-file-upload">
                                            <img src="http://myhouse.com/images/residential/upload.svg" alt="">
                                        </label>
                                        <input id="files" type="file" name="media[]" multiple="multiple">
                                        <div class="upload-text">{{ __('myhouse/back/annonces/neuf/upload.ac') }}</div>
                                        <div class="up-text">{{ __('myhouse/back/annonces/neuf/upload.ad') }}</div>
                                    </div>

                                </div>
                            </div>
                            <div class="ca-page-item-third-type-boxe-upload-results" style="min-height: 100px;" id="result">




                            </div>


                            <div class="ca-page-item-second-footer">
                                <button class="btn btn-prev mr-2">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/neuf/upload.ae') }}</button>
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
                            <img src="{{ asset('images/residential/itt.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="ca-page-item-third-text pt-3 text-center">
                            {{ __('myhouse/back/annonces/neuf/upload.af') }}
                        </div>
                        <div class="media-mt">
                            <div class="ca-page-item-third-thumb">
                                <img src="{{ asset('images/residential/single/d2.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="ca-page-item-third-text pt-3 text-center">
                                {{ __('myhouse/back/annonces/neuf/upload.ag') }}
                            </div>
                            <div class="ca-page-item-third-text-text">
                                {{ __('myhouse/back/annonces/neuf/upload.ah') }} <br>
                                {{ __('myhouse/back/annonces/neuf/upload.ai') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ asset('development/js/upload.js') }}"></script>
@stop
