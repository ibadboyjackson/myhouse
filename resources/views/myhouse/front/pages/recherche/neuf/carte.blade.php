@extends('myhouse.front.template')

@section('title')
    Projets neufs carte
    @stop

@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop

@section('content')
    <div class="overclay" style="padding-bottom: 15px;">
        <div class="d-flex justify-content-center mt-101">
            <div class="col-md-12">
                <div class="with-map">
                    <div class="map" id="map"></div>
                </div>
            </div>
        </div>
    </div>
@stop
