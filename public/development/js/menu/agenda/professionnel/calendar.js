$(document).ready(function() {


    var SITEURL = "";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });


    let $lang = $('meta[name="has-locale"]').attr('content');
    let $professionnel = $('meta[name="professionnel"]').attr('content');
    let $user = $('meta[name="user"]').attr('content');

    let $page = $('meta[name="page"]').attr('content');

    let $message = $('meta[name="message"]').attr('content');
    let $update = $('meta[name="update"]').attr('content');
    let $delete = $('meta[name="delete"]').attr('content');
    let $info = $('meta[name="info"]').attr('content');




    let calendar = $('#calendar').fullCalendar({

        events: SITEURL + $page,
        displayEventTime: true,
        editable: true,
        locale: $lang,

        eventRender: function(event, element, view) {

            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },

        selectable: false,
        selectHelper: true,

        eventClick: function(event) {

            let $id = event.professionnel_id;

            let s = $('#' + $id).toggleClass('menu-encounter');

            setTimeout(function() {
                $('#' + $id).removeClass('menu-encounter');
            }, 2000);


            $('html, body').animate({
                scrollTop: $('#' + $id).offset().top
            }, 2000);

        }

    });



});

function displayMessage(message) {
    $(".response").html("<div class='success'>" + message + "</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}