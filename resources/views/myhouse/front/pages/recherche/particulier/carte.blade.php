@extends('myhouse.front.template')


@section('title')
    Particulier carte
@stop


@section('scripts')


   <script src="http://myhouse.com/development/cluster/cluster.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js.map"></script>
        <script src = "{{ asset('js/map.js') }}"></script>


@endsection


@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="overclay" style="padding-bottom: 15px;">
        <div class="d-flex justify-content-center mt-101">
            <div class="col-md-12 pl-0 pr-0">
                <div class="with-map" style="height: calc(100vh - 88px - 82px);">
                    <div class="map" id="map"></div>
                </div>
            </div>
        </div>
    </div>

@stop


