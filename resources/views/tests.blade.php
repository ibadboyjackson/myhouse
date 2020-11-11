<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui' />
    <title>Leaflet Bing Maps Layer</title>
    <script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Promise"></script>
    <script src="{{ asset('js/leaflet-bing-layer.js') }}"></script>
    <link href='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css' rel='stylesheet' />
    <style>

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>

<body>
<div id='map'></div>

<script src="{{ asset('js/map.js') }}"></script>

</body>
</html>
