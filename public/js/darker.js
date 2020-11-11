$(function() {


    pw = $('.darkest');
    ps = $('.darkers');
    pe = $('#btn-dark');


    pw.bind('change paste keyup', function() {

        pe.addClass('btn-bg-darker');
        ps.addClass('btn-bg-darker');
        pw.removeClass('man-red');

        if (pw.val() === '') {

            pe.removeClass('btn-bg-darker');
        } else {
            pe.addClass('btn-bg-darker');
            ps.addClass('btn-bg-darker');
        }
    });



    ps.bind('change paste keyup', function() {



        pe.addClass('btn-bg-darker');
        ps.addClass('btn-bg-darker');
        pw.removeClass('man-red');
        pw.removeClass('man-red');

        if (ps.val() === '') {

            pe.removeClass('btn-bg-darker');
        } else {
            pe.addClass('btn-bg-darker');
            ps.addClass('btn-bg-darker');
        }
    });





    pw = $('.darkest');
    ps = $('darkers');
    pe = $('#btn-dark');
    if (pw.val() === '') {

        pe.removeClass('btn-bg-darker');
    } else {
        pe.addClass('btn-bg-darker');
        ps.addClass('btn-bg-darker');
    }




    $("input.typable[type=radio]").change(function() {


        $('#darkers').addClass('btn-bg-darker');

    })



    if ($('input[name=type]:checked').length > 0) {
        $('#darkers').addClass('btn-bg-darker');
    } else {

    }




}, jQuery());