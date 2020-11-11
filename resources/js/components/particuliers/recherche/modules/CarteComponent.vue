<template>
    <div class="is-map">
        <div class="map" id="map">

            <l-map :zoom="zoom" :center="center">
                <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
                <l-marker :lat-lng="marker"></l-marker>
            </l-map>
        </div>

    </div>
</template>


<script>

    import { LMap, LTileLayer, LMarker } from 'vue2-leaflet'

    export default {
        mounted() {
        },

        components: {
          LMap, LTileLayer, LMarker
        },

        methods: {

            load () {

            }, 

            addMarker (lat, long, text) {

            }
        },

        data () {
            return {
                zoom:13,
                center: L.latLng(33.5814, -7.6733),
                url:'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
                attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                marker: L.latLng(33.5814, -7.6733),
            }
        }



    }

</script>
