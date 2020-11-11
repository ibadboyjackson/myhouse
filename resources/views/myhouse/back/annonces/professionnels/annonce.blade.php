@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/annonces/professionnel/annonce.aa') }}
@stop

@section('content')

<form action="{{ route('professionnel.media') }}" method="get" id = "transform">


    <div class="c-page with-lg">


                @isset(auth()->user()->professionnel->last()->page)
                    @if (auth()->user()->professionnel->last()->page === 'annonce')
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

                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="ca-page-item-third-connexion">
                            <div class="ca-page-item-third-connexion-box">

                                <div class="ca-page-item-third-connexion-box-title text-uppercase">
                                    {{ __('myhouse/back/annonces/professionnel/annonce.ab') }}
                                </div>
                                <div class="ca-page-item-third-connexion-box-title-hr"></div>

                            </div>
                        </div>
                        <div class="ca-page-item-second-subscriptionsss">

                            <div class="ca-page-item-second-body">
                                <div class="ca-page-item-second-body-beta">
                                    <textarea name="description" required id="#" cols="30" rows="16" class="form-control @error('description') man-red @enderror" placeholder="{{ __('myhouse/back/annonces/professionnel/annonce.ae') }}">
                                        {{ $professionnel->description }}
                                    </textarea>
                                </div>
                            </div>


                            <div class="ca-page-item-second-footer">
                                                        <a onClick="window.history.back()" data-dismiss="modal" aria-label="Close" class="btn btn-prev mr-2">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                <button class="btn btn-connections" type="submit">{{ __('myhouse/back/annonces/professionnel/annonce.ac') }}</button>
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
                        <img src="{{ asset('images/residential/single/d3.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="ca-page-item-third-text pt-3 text-center">
                        {{ __('myhouse/back/annonces/professionnel/annonce.ad') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop



@section('scripts')
    <script src="{{ asset('development/js/level.js') }}"></script>
@stop
