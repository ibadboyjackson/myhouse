@extends('myhouse.front.template')

@section('title')
   {{ __('myhouse/back/menu/neuf/evenements/plateform.aa') }}
@stop

@section('content')
    <div class="plateform">
        <div class="plateform-wrap">
            <div class="menu-wrap-x-button">
                <img src="http://myhouse.com/images/residential/single/x.svg" alt="">
            </div>

            <div class="palateform-title">
                {{ __('myhouse/back/menu/neuf/evenements/plateform.ab') }}
            </div>
            <div class="palateform-subtitle-hr"></div>
            <div class="palateform-subtitle">
                {{ __('myhouse/back/menu/neuf/evenements/plateform.ac') }}<span class="plateform-email"> abderazakjamo@hotmail.com</span>
            </div>

            <div class="plateform-guide">
                <div class="plateform-guide-title">{{ __('myhouse/back/menu/neuf/evenements/plateform.ad') }}</div>
                <div class="plateform-guide-title-box">
                    <div class="plateform-guide-title-box-text">{{ __('myhouse/back/menu/neuf/evenements/plateform.ae') }}</div>
                    <div class="plateform-guide-title-box-text">{{ __('myhouse/back/menu/neuf/evenements/plateform.af') }}</div>
                </div>
            </div>

            <div class="plateform-box">
                <div class="plateform-box-st">
                    <div class="plateform-box-one">
                        <label for="file-upload">
                            <img src="{{ asset('images/residential/single/menu/spio.svg') }}" alt="">
                        </label>
                        <input id="file-upload" type="file">
                    </div>
                    <div class="plateform-box-two">{{ __('myhouse/back/menu/neuf/evenements/plateform.ag') }}</div>
                </div>
            </div>
            <div class="menu-body-event-bbox-buuton-box pb-5">
                <div>
                    <a href="{{ route('neuf.menu.backoffice') }}" style="text-decoration: none; color: inherit">
                        <div class="menu-body-event-bbox-buuton-box-one">{{ __('myhouse/back/menu/neuf/evenements/plateform.ah') }}</div>
                    </a>
                </div>
                <div>
                    <a href="" style="text-decoration: none; color: inherit">
                        <div class="menu-body-event-bbox-buuton-box-two text-uppercase">
                            {{ __('myhouse/back/menu/neuf/evenements/plateform.ai') }}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
