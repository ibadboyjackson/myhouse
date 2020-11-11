$(function () {

    /*
        ****** Password eye show and hide
     */

    let pw = $('#password');
    let pe = $('#password-eye');

    pw.bind('change paste keyup', function () {
        pe.removeClass('password-hide').addClass('password-show');

        if (pw.val() === '') {
            pe.removeClass('password-show').addClass('password-hide');
        }
    });

    pe.click (function (e) {

        e.preventDefault();

        if (pw.attr('type') === 'password') {
            pw.attr('type', 'text');
        }else {
            pw.attr('type', 'password');
        }

    });




    /*
        ****** Inscription checkbox ******
     */

    let check = $('#inscription-check');
    let btnInscription = $('#btn-inscription');

    check.click(function () {

        if (check.is(':checked')) {
            btnInscription.removeAttr('disabled');
        }else {
            btnInscription.attr('disabled', 'true');
        }


    });





    /*
        ****** Password eye show and hide
     */

    let pc = $('#passwords');
    let pk = $('#password-eyes');

    pc.bind('change paste keyup', function () {
        pk.removeClass('password-hide').addClass('password-show');

        if (pc.val() === '') {
            pk.removeClass('password-show').addClass('password-hide');
        }
    });

    pk.click (function (e) {

        e.preventDefault();

        if (pc.attr('type') === 'password') {
            pc.attr('type', 'text');
        }else {
            pc.attr('type', 'password');
        }

    });





}, jQuery());
