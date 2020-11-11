let $map = document.querySelector('#map');


class leafletMap {

    constructor() {
        this.map = null
        this.bounds = []
    }

    async load(element) {

        return new Promise((resolve, reject) => {

            $script('http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js', () => {


                this.map = L.map(element).setView([33.5814, -7.6733], 11);
                L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                    minZoom: 1,
                    maxZoom: 17,
                }).addTo(this.map);
                resolve()
            })

        });

    }

    addMarker(lat, lng, text) {

        let point = [lat, lng]

        this.bounds.push(point)

        return new leafletMarker(point, text, this.map)
    }


    center() {
        this.map.fitBounds(this.bounds)
    }

}



class leafletMarker {

    constructor(point, text, map) {

        this.text = text
        this.popup = L.popup({
                autoClose: false,
                closeOnEscapeKey: false,
                closeOnClick: false,
                closeButton: true,
                className: 'marker',
                maxWidth: 400
            })
            .setLatLng(point)
            .setContent(text)
            .openOn(map)

    }


    setActive() {
        this.popup.getElement().classList.add('is-actives')
    }

    unsetActive() {
        this.popup.getElement().classList.remove('is-actives')
    }

    addEventListener(event, cb) {

        this.popup.getElement().addEventListener(event, cb)

    }

    setContent(text) {
        this.popup.setContent(text)
        this.popup.getElement().classList.add('is-expanded')
        this.popup.update()
    }

    resetContent() {
        this.popup.setContent(this.text)
        this.popup.getElement().classList.remove('is-expanded')
        this.popup.update()
    }

}



const initMap = async function() {

    let map = new leafletMap();
    let hoverMarker = null
    let activeMarker = null

    await map.load($map);


    Array.from(document.querySelectorAll('.js-marker')).forEach((item) => {

        let marker = map.addMarker(item.dataset.lat, item.dataset.long, item.dataset.title);


       // let markers = L.markerClusterGroup()
        // markers.addLayer(marker)



        item.addEventListener('mouseover', function() {

            if (hoverMarker !== null) {
                hoverMarker.unsetActive()
            }

            marker.setActive()
            hoverMarker = marker

        })
        item.addEventListener('mouseleave', function() {
            marker.unsetActive()
        })
        marker.addEventListener('click', (e) => {

            let $id = item.dataset.id;


            let element = $('.pop-' + $id);

            let markers = e.target._leaflet_id

            $('.page-liste').scrollTo (element, 1000)

            element.toggleClass('menu-unencounter')

            setTimeout(function() {
                $('.pop-' + $id).removeClass('menu-unencounter');
            }, 3000);

        })

    })


};





if ($map !== null) {
    initMap()
}



