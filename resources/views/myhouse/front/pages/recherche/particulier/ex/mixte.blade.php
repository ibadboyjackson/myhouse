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
    <script src="{{ asset('js/exmap.js') }}"></script>


@stop


@section('header')
    @include('myhouse.front.pages.recherche.include.header')
@stop


@section('content')
    <div class="particulier pa mixte">
        <div class="overplay">
            <div class="row mt-25">
                <div class="page">
                    <div class="page-carte">
                        <div class="is-map">
                            <div class="map" id="map"></div>
                        </div>
                    </div>
                    <div class="page-liste">


                    @if ($particuliers->count() <= 0)
                        <div class="no-result">
                            <p>
                                {{ __('myhouse/recherche/particulier/resultat.ak') }}
                            </p>
                        </div>
                    @else


                        @if(request()->get('transaction') === "location")


                            @include('myhouse.front.pages.recherche.particulier.count', ['variable' => $particuliers->where('locationActif', 1)])


                            @foreach($particuliers->where('locationActif', 1) as $particulier)

                                @include('myhouse.front.pages.recherche.particulier.vue')

                            @endforeach



                        @elseif(request()->get('transaction') === "achat")


                            @include('myhouse.front.pages.recherche.particulier.count', ['variable' => $particuliers->where('venteActif', 1)])


                            @foreach($particuliers->where('venteActif', 1) as $particulier)

                                @include('myhouse.front.pages.recherche.particulier.vue')

                            @endforeach



                        @elseif(request()->get('transaction') === "echange")

                            @include('myhouse.front.pages.recherche.particulier.count', ['variable' => $particuliers->where('echangeActif', 1)])


                            @foreach($particuliers->where('echangeActif', 1) as $particulier)

                                @include('myhouse.front.pages.recherche.particulier.vue')

                            @endforeach

                        @else

                            @include('myhouse.front.pages.recherche.particulier.count', ['variable' => $particuliers])


                            @foreach($particuliers as $particulier)

                                @include('myhouse.front.pages.recherche.particulier.vue')

                            @endforeach

                        @endif


                    @endif


                    </div>
                </div>
            </div>
        </div>

    </div>
@stop





