    $(document).ready(function() {


        /*
            Location
        */


        $("#ios-checkbox-page").click(function() {

            let input = '';
            input += '<input type="hidden" name="was-click" value="herman">';

            $('#transform')
                .append(input)
                .submit()
        });


        $('#ios-checkbox-loyerMois').click(function() {


            check = $("#without-me").prop("checked");

            if (check) {

                $('#you-cant').addClass('silent');
                $('#prix_mois').attr('disabled', false);
                $('#prix_mois').focus();


            } else {

                $('#you-cant').removeClass('silent');
                $('#prix_mois').attr('disabled', true);

            }

        })



        $('#ios-checkbox-loyerJour').click(function() {


            check = $("#with-me").prop("checked");

            if (check) {

                $('#prix_jour').attr('disabled', false);
                $('#prix_jour').focus();


            } else {

                $('#prix_jour').attr('disabled', true);

            }

        })


        $('#charge_oui').click(function() {

            checks = $('#charge_oui').prop('checked');


            if (checks) {
                $('#charges_copropriete').attr('disabled', true);
            }

        })


        $('#charge_non').click(function() {

            checks = $('#charge_non').prop('checked');


            if (checks) {
                $('#charges_copropriete').attr('disabled', false);
                $('#charges_copropriete').focus();
            }

        })



        if ($('#charge_oui').is(':checked')) {

            $('#charges_copropriete').attr('disabled', true);

        }




        if ($('#with-me').is(':checked')) {

            $('#prix_jour').attr('disabled', false);

        } else {
            $('#prix_jour').attr('disabled', true);
        }





        if ($('#without-me').is(':checked')) {

            $('#prix_mois').attr('disabled', false);

        } else {
            $('#prix_mois').attr('disabled', true);
        }






        /*
            Echange
        */



        if ($('#must-use-me').is(':checked')) {

            $('#periode-un').attr('disabled', false);
            $('#periode-deux').attr('disabled', false);


        } else {
            $('#periode-deux').attr('disabled', true);
            $('#periode-un').attr('disabled', true);
        }



        $('#must-use-me').click(function() {

            checks = $('#must-use-me').prop('checked');


            if (checks) {
                $('#periode-un').attr('disabled', false);
                $('#periode-deux').attr('disabled', false);
                $('#periode-un').focus();

            } else {
                $('#periode-deux').attr('disabled', true);
                $('#periode-un').attr('disabled', true);
            }

        })














        $('#transaction-close').click(function() {
            $('#transaction-block').addClass('close-block')
        })

        $('#transaction-closes').click(function() {
            $('#transaction-block').addClass('close-block')
        })













        if ($('#voom2').is(':checked')) {

            $('#vega1').removeClass('tab-current');
            $('#vega3').removeClass('tab-current');
            $('#vega2').addClass('tab-current');


            $('#section-shape-1').removeClass('content-current');
            $('#section-shape-2').addClass('content-current');
            $('#section-shape-3').removeClass('content-current');

        }


        if ($('#voom3').is(':checked')) {

            $('#vega1').removeClass('tab-current');
            $('#vega3').addClass('tab-current');
            $('#vega2').removeClass('tab-current');



            $('#section-shape-1').removeClass('content-current');
            $('#section-shape-2').removeClass('content-current');
            $('#section-shape-3').addClass('content-current');

        }


        if ($('#voom1').is(':checked')) {

            $('#vega1').addClass('tab-current');
            $('#vega3').removeClass('tab-current');
            $('#vega2').removeClass('tab-current');



            $('#section-shape-1').addClass('content-current');
            $('#section-shape-2').removeClass('content-current');
            $('#section-shape-3').removeClass('content-current');
        }



        $('#vega1').click(function() {

            $('#vega3').removeClass('tab-current');
            $('#vega2').removeClass('tab-current');

            $('#section-shape-2').removeClass('content-current');
            $('#section-shape-3').removeClass('content-current');
        });





        $('#vega2').click(function() {

            $('#vega3').removeClass('tab-current');
            $('#vega1').removeClass('tab-current');

            $('#section-shape-3').removeClass('content-current');
            $('#section-shape-1').removeClass('content-current');
        });


        $('#vega3').click(function() {

            $('#vega2').removeClass('tab-current');
            $('#vega1').removeClass('tab-current');

            $('#section-shape-2').removeClass('content-current');
            $('#section-shape-1').removeClass('content-current');
        });












        if ($('#voom5').is(':checked')) {

            $('#vega4').removeClass('tab-current');
            $('#vega6').removeClass('tab-current');
            $('#vega5').addClass('tab-current');


            $('#section-shape-4').removeClass('content-current');
            $('#section-shape-5').addClass('content-current');
            $('#section-shape-6').removeClass('content-current');

        }


        if ($('#voom6').is(':checked')) {

            $('#vega4').removeClass('tab-current');
            $('#vega6').addClass('tab-current');
            $('#vega5').removeClass('tab-current');



            $('#section-shape-4').removeClass('content-current');
            $('#section-shape-5').removeClass('content-current');
            $('#section-shape-6').addClass('content-current');

        }


        if ($('#voom4').is(':checked')) {

            $('#vega4').addClass('tab-current');
            $('#vega6').removeClass('tab-current');
            $('#vega5').removeClass('tab-current');



            $('#section-shape-4').addClass('content-current');
            $('#section-shape-5').removeClass('content-current');
            $('#section-shape-6').removeClass('content-current');
        }



        $('#vega4').click(function() {

            $('#vega6').removeClass('tab-current');
            $('#vega5').removeClass('tab-current');

            $('#section-shape-5').removeClass('content-current');
            $('#section-shape-6').removeClass('content-current');
        });





        $('#vega5').click(function() {

            $('#vega6').removeClass('tab-current');
            $('#vega4').removeClass('tab-current');

            $('#section-shape-6').removeClass('content-current');
            $('#section-shape-4').removeClass('content-current');
        });


        $('#vega6').click(function() {

            $('#vega5').removeClass('tab-current');
            $('#vega4').removeClass('tab-current');

            $('#section-shape-5').removeClass('content-current');
            $('#section-shape-4').removeClass('content-current');
        });





















        $('#man-1').autotab({ target: '#man-2', format: 'numeric' });
        $('#man-2').autotab({ target: '#man-3', format: 'numeric', previous: '#man-1' });
        $('#man-3').autotab({ previous: '#man-2', format: 'numeric' });


        $('#loyerm1').autotab({ target: '#loyerm2', format: 'numeric' });
        $('#loyerm2').autotab({ target: '#loyerm', format: 'numeric', previous: '#loyerm1' });

        $('#loyerj1').autotab({ target: '#loyerj2', format: 'numeric' });
        $('#loyer2').autotab({ target: '#loyerj', format: 'numeric', previous: '#loyerj1' });

        $('#charge1').autotab({ target: '#charge2', format: 'numeric' });
        $('#charge2').autotab({ target: '#loyerj', format: 'numeric', previous: '#charge1' });




        $('#man-4').autotab({ target: '#man-5', format: 'numeric' });
        $('#man-5').autotab({ target: '#man-6', format: 'numeric', previous: '#man-4' });
        $('#man-6').autotab({ previous: '#man-5', format: 'numeric' });

        $('#man-7').autotab({ target: '#man-8', format: 'numeric' });
        $('#man-8').autotab({ target: '#man-9', format: 'numeric', previous: '#man-7' });
        $('#man-9').autotab({ previous: '#man-8', format: 'numeric' });

        $('#man-10').autotab({ target: '#man-11', format: 'numeric' });
        $('#man-11').autotab({ target: '#man-12', format: 'numeric', previous: '#man-10' });
        $('#man-12').autotab({ previous: '#man-11', format: 'numeric' });

        $('#man-13').autotab({ target: '#man-14', format: 'numeric' });
        $('#man-14').autotab({ target: '#man-15', format: 'numeric', previous: '#man-13' });
        $('#man-15').autotab({ previous: '#man-14', format: 'numeric' });

        $('#man-16').autotab({ target: '#man-17', format: 'numeric' });
        $('#man-17').autotab({ target: '#man-18', format: 'numeric', previous: '#man-16' });
        $('#man-18').autotab({ previous: '#man-17', format: 'numeric' });

        $('#man-19').autotab({ target: '#man-20', format: 'numeric' });
        $('#man-20').autotab({ target: '#man-21', format: 'numeric', previous: '#man-19' });
        $('#man-21').autotab({ previous: '#man-20', format: 'numeric' });

        $('#man-22').autotab({ target: '#man-23', format: 'numeric' });
        $('#man-23').autotab({ target: '#man-24', format: 'numeric', previous: '#man-22' });
        $('#man-24').autotab({ previous: '#man-23', format: 'numeric' });

        $('#man-25').autotab({ target: '#man-26', format: 'numeric' });
        $('#man-26').autotab({ target: '#man-27', format: 'numeric', previous: '#man-25' });
        $('#man-27').autotab({ previous: '#man-26', format: 'numeric' });

        $('#man-28').autotab({ target: '#man-29', format: 'numeric' });
        $('#man-29').autotab({ target: '#man-30', format: 'numeric', previous: '#man-28' });
        $('#man-30').autotab({ previous: '#man-29', format: 'numeric' });

    });