@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/generique/faq.aa') }}
@stop

@section('content')
    <div class="menu-wrap">
        <div class="menu-wrap-content">
            <!-- X button -->
            <a href="{{ $url }}" style="text-decoration: none; color: inherit">
                <div class="menu-wrap-x-button">
                    <img src="{{ asset('images/residential/single/x.svg') }}" alt="">
                </div>
            </a>
            <!-- End X button -->

        @if ($user === 'neuf')
            @include('myhouse.back.includes.neuf.aside')
        @endif

        @if ($user === 'professionnel')
            @include('myhouse.back.includes.professionnel.aside')
        @endif

        @if ($user === 'particulier')
            @include('myhouse.back.includes.particulier.aside')
        @endif

        <!-- List -->

            <div class="menu-body pl-var">
                <div class="menu-body-title">{{ __('myhouse/back/menu/generique/faq.ab') }}</div>
                <div class="menu-body-hr"></div>
                @if ($user === 'professionnel')
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">{{ __('myhouse/back/menu/generique/faq.ac') }}</span>
                        <span class="menu-body-subs-two">abderazakjamo@hotmail.com</span>
                    </div>
                @endif

                <div class="menu-body-profile">
                    <div class="menu-body-profile-box-faq">
                        <div class="menu-body-profile-box-faq-content">
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>
                            <div class="menu-body-profile-box-faq-question">
                                <h1>Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum ?gentilitatem oppressi.  ob nominum ?gentilitatem </h1>
                                <p>
                                    Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso. tatuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <!-- End List -->


        </div>
    </div>
@stop
