<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('development/js/apps.js') }}"></script>
<script src="{{ asset('development/js/myhouse.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="{{ asset('development/js/owl.js') }}"></script>
<script src="{{ asset('development/js/iosCheckbox.js ') }}"></script>


<!-- From calendar -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> -->


<script src="{{ asset('development/js/fullcalendar/fullcalendar.js') }}"></script>
<script src="{{ asset('development/js/fullcalendar/locale-all.js') }}"></script>


<!-- Calendar -->


<script src="{{ asset('development/js/cbpFWTabs.js') }} "></script>

<script>

    (function() {
        [].slice.call(document.querySelectorAll(".tabs")).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();

</script>

<script type="text/javascript">

    jQuery(function ($){
        $(".ios").iosCheckbox();
    });

</script>

<script src="{{ asset('development/js/errors/errors.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

<script src='http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js'></script>


<script>
    AOS.init();
</script>
<script src="{{ asset('js/vendor.js') }}"></script>


@yield ('scripts')

<script src="{{ asset('js/darker.js') }}"></script>
<!-- <script src="{{ asset('development/js/google/google.js') }}"></script>  -->



<svg class="hidden" style="display: none">
    <defs>
        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" />
    </defs>
</svg>


</body>
</html>

