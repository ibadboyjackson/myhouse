$(document).ready(function() {


    var SITEURL = "";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });


    let $lang = $('meta[name="has-locale"]').attr('content');
    let $particulier = $('meta[name="particulier"]').attr('content');
    let $user = $('meta[name="user"]').attr('content');
    let $page = $('meta[name="page"]').attr('content');

    let $message = $('meta[name="message"]').attr('content');
    let $update = $('meta[name="update"]').attr('content');
    let $delete = $('meta[name="delete"]').attr('content');
    let $info = $('meta[name="info"]').attr('content');




    let calendar = $('#calendar').fullCalendar({
        editable: true,
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

        selectable: true,
        selectHelper: true,

        select: function(start, end, allDay) {

            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");


            $("#myModal").modal("show");


            $("#btn-time").click(function() {

                let $time = $("#input-time").val();

                let $start = start.replace("00:00:00", $time)

                $.ajax({

                    url: SITEURL + "/api/calendar/add",
                    data: 'particulier_id=' + $particulier + '&amp;start=' + $start + '&amp;end=' + end + '&amp;user_id=' + $user,
                    type: "POST",

                    success: function(data) {
                        displayMessage("Added Successfully");
                    },

                    error: function(xhr, status, errorThrown) {
                        //Here the status code can be retrieved like;
                        xhr.status;

                        //The message added to Response object in Controller can be retrieved as following.
                        xhr.responseText;

                        if (xhr.status == 401) {
                            window.location.replace("http://myhouse.com/connexion");
                        }

                    }

                });

                $.notify($message, {
                    position: "left bottom",
                    className: "success"
                });

                $.notify($info, {
                    position: "bottom right",
                    className: "warn"
                });


                setTimeout(function() {

                    location.reload();

                }, 7000);


                calendar.fullCalendar('renderEvent', {
                        start: start,
                        end: end,
                        allDay: allDay
                    },
                    true

                );

            })

            calendar.fullCalendar('unselect');

        },

        eventDrop: function(event, delta) {

            var start = $.fullCalendar;
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");


            alert(event.id)



            $("#myModal").modal("show");





            $("#btn-time").click(function() {

                let $time = $("#input-time").val();

                let $ttime = start.formatDate(event.start, "Y-MM-DD " + $time);

                $.ajax({
                    url: SITEURL + '/api/calendar/update',
                    data: 'title=' + event.title + '&amp;start=' + $ttime + '&amp;end=' + end + '&amp;id=' + event.id,
                    type: "PUT",

                    success: function(response) {
                        displayMessage("Updated Successfully");
                    },

                });


                $.notify($update, {
                    position: "left bottom",
                    className: "success"
                });


                setTimeout(function() {

                    location.reload();

                }, 2000);


            })


        },

        eventClick: function(event) {


            var deleteMsg = confirm("Do you really want to delete?");


            if (deleteMsg) {

                $.ajax({

                    type: "DELETE",

                    url: SITEURL + '/api/calendar/delete',

                    data: "&amp;id=" + event.id,

                    success: function(response) {

                        if (parseInt(response) > 0) {

                            $('#calendar').fullCalendar('removeEvents', event.id);

                            displayMessage("Deleted Successfully");

                        }

                    }

                });


                $.notify($delete, {
                    position: "left bottom",
                    className: "success"
                });


                setTimeout(function() {

                    location.reload();

                }, 2000);
            }
        }

    });



});

function displayMessage(message) {
    $(".response").html("<div class='success'>" + message + "</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
