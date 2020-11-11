@extends('myhouse.front.template')

@section('title')
    {{ __('myhouse/back/menu/generique/contact.aa') }}
@stop

@section('content')
    @include('myhouse.front.includes.success')

<div style="position: relative;">
    <div class="menu-wrap-full">
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

            <div class="menu-body stf">
                <div class="menu-body-title pl-var">{{ __('myhouse/back/menu/generique/contact.ab') }}</div>
                <div class="menu-body-flex pl-var">
                    <div class="menu-body-hr"></div>
                </div>
                @if ($user === 'professionnel')
                    <div class="menu-body-subs">
                        <span class="menu-body-subs-one">{{ __('myhouse/back/menu/generique/contact.ac') }}</span>
                        <span class="menu-body-subs-two">{{ auth()->user()->email }}</span>
                    </div>
                @endif

                <div class="menu-body-contact pl-var">
                    <div class="menu-body-contact-box">
                        <div class="menu-body-contact-box-block">
                            <div class="menu-body-contact-box-block-item">
                                <div class="menu-body-content-box-bg">
                                    <div class="menu-body-contact-box-block-left-box">
                                        <div class="menu-body-contact-box-block-left-box-title">
                                            {{ __('myhouse/back/menu/generique/contact.ad') }}
                                        </div>
                                        <div class="menu-body-contact-box-block-left-box-title-next">
                                            {{ __('myhouse/back/menu/generique/contact.ae') }}
                                        </div>
                                        <div class="menu-body-contact-box-block-left-box-info">
                                            {{ __('myhouse/back/menu/generique/contact.af') }}
                                            {{ __('myhouse/back/menu/generique/contact.ag') }}
                                        </div>
                                        <div class="menu-body-contact-box-block-left-box-info"  >
                                            {{ __('myhouse/back/menu/generique/contact.ah') }}
                                            {{ __('myhouse/back/menu/generique/contact.ai') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-body-contact-box-block-item mt-45">
                                <form action="{{ route('menu.contact', auth()->user()->id) }}" method="post">

                                    @csrf

                                    <div class="form-group">
                                        <label for="#"></label>
                                        <input type="text" name="{{ __('myhouse/back/menu/generique/contact.al') }}" id="#" class="form-control contact-inputs" placeholder="{{ __('myhouse/back/menu/generique/contact.aj') }}">

                                        @error( str_replace(' ', '_', __('myhouse/back/menu/generique/contact.al')) )
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="#"></label>
                                        <label for=""></label>
                                        <textarea name="{{ __('myhouse/back/menu/generique/contact.am') }}" id=""  class="form-control contact-area"></textarea>

                                        @error( str_replace(' ', '_',   __('myhouse/back/menu/generique/contact.am') ) )
                                            <span class="myhouse-invalid" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="menu-body-profile-box-button text-uppercase" style="background-color: transparent !important;">
                                        <div class="inscription">
                                            <button class="btn btn-connections" type="submit">{{ __('myhouse/back/menu/generique/contact.ak') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- End List -->

            <!--
              <div class="menu-body-profile-box-button">ENVOYER</div>
            -->

        </div>
    </div>
</div>


@stop



