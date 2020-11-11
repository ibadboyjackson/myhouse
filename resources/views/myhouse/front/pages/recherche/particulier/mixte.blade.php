@extends('myhouse.front.template')


@section('title')
    Particulier mixte
@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('development/cluster/cluster.css') }}">
    <link rel="stylesheet" href="{{ asset('development/cluster/clusterDefault.css') }}">
@stop


@section('scripts')


    <script src="{{ asset('development/cluster/cluster.js') }}"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js.map"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>


@stop




@section('content')
    <div id="app">
        <Mixte></Mixte>
    </div>
@stop





