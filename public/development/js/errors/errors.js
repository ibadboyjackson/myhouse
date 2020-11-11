$(document).ready(function() {


    $('#errors-button').click(function() {

        $('#myhouse-errors').addClass('myhouse-sleep');
        $('#myhouse-errors').removeClass('myhouse-awake');


    });



    $("input.myhouse-check[type=checkbox]").change(function() {

        var max = 6;

        if ($("input.myhouse-check[type=checkbox]:checked").length == max) {



            $("input.myhouse-check[type=checkbox]").attr('disabled', 'disabled');
            $("input.myhouse-check[type=checkbox]:checked").removeAttr('disabled');


            $('#myhouse-errors').addClass('myhouse-awake');
            $('#myhouse-errors').removeClass('housable');
            $('#myhouse-errors').removeClass('myhouse-sleep');


        } else

        {

            $("input.myhouse-check[type=checkbox]").removeAttr('disabled');

        }


        /*  let get = 1;

          if ($("input.myhouse-check[type=checkbox]:checked").length == get) {

              $(window).bind('beforeunload', function() {

                  return 'are you sure you want to leave?';

              });


          }
          */

    })





});