$(function() {

    $('#must-closes').click(function() {
        $('#appstore-dropdown').removeClass('appstoreactive');
        $('#country-dropdown').removeClass('country-show');
        $('#currency-dropdown').removeClass('currency-show');
        $('#surface').removeClass('surface-show');
    });


    // Type de bien projet neuf
    let com = $('#com');
    let comm = $('#comm');
    let cha = $('#cha');
    let res = $('#res');
    let appa = $('#appa');
    let vil = $('#vil');
    let bur = $('#bur');
    let plat = $('#plat');
    let mai = $('#mai');
    let ria = $('#ria');


    let the_appartement = $('#the-appartement');
    let the_commerce = $('#the-commerce');
    let the_commercial = $('#the-commercial');
    let the_chalet = $('#the-chalet');
    let the_residentiel = $('#the-residentiel');
    let the_villa = $('#the-villa');
    let the_bureau = $('#the-bureau');
    let the_plateau = $('#the-plateau');
    let the_maison = $('#the-maison');
    let the_riad = $('#the-riad');


    function addTheClass(classname) {
        classname.addClass('bien-actif');
    }

    function addTheClassNext(classname) {
        classname.addClass('must-change-show');
    }

    function removeTheClassNext(one, two, three, four, five, six, seven, height, nine) {
        removableNext(one);
        removableNext(two);
        removableNext(three);
        removableNext(four);
        removableNext(five);
        removableNext(six);
        removableNext(seven);
        removableNext(height);
        removableNext(nine);
    }


    function removable(variable) {
        return variable.removeClass('bien-actif');
    }

    function removableNext(variable) {
        return variable.removeClass('must-change-show');
    }

    function removeTheClass(one, two, three, four, five, six, seven, height, nine) {
        removable(one);
        removable(two);
        removable(three);
        removable(four);
        removable(five);
        removable(six);
        removable(seven);
        removable(height);
        removable(nine);
    }


    $('#appartement').click(function() {

        /*
         ***** First input color ********
         */

        addTheClass(appa);
        removeTheClass(vil, com, comm, cha, bur, res, plat, mai, ria);

        addTheClassNext(the_appartement);
        removeTheClassNext(the_commerce, the_commercial, the_chalet, the_residentiel, the_villa, the_bureau, the_plateau, the_maison, the_riad);


        let cap = $('#cap');
        cap.addClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');

    });

    $('#villa').click(function() {


        addTheClass(vil);
        removeTheClass(appa, com, comm, cha, bur, res, plat, mai, ria);

        /*
         ********* Bottom block
         */

        addTheClassNext(the_villa);
        removeTheClassNext(the_commerce, the_commercial, the_chalet, the_residentiel, the_appartement, the_bureau, the_plateau, the_maison, the_riad);

        let cap = $('#cap');
        cap.addClass('cap-villa');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');
    });

    $('#maison').click(function() {

        addTheClass(mai);
        removeTheClass(appa, com, comm, cha, bur, res, plat, vil, ria);

        addTheClassNext(the_maison);
        removeTheClassNext(the_commerce, the_commercial, the_chalet, the_residentiel, the_appartement, the_bureau, the_plateau, the_villa, the_riad);


        let cap = $('#cap');
        cap.addClass('cap-maison');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');
    });

    $('#bureau').click(function() {

        addTheClass(bur);
        removeTheClass(appa, com, comm, cha, mai, res, plat, vil, ria);

        addTheClassNext(the_bureau);
        removeTheClassNext(the_commerce, the_commercial, the_chalet, the_residentiel, the_appartement, the_maison, the_plateau, the_villa, the_riad);


        let cap = $('#cap');
        cap.addClass('cap-bureau');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');
    });

    $('#plateau').click(function() {

        addTheClass(plat);
        removeTheClass(appa, com, comm, cha, mai, res, bur, vil, ria);

        addTheClassNext(the_plateau);
        removeTheClassNext(the_commerce, the_commercial, the_chalet, the_residentiel, the_appartement, the_maison, the_bureau, the_villa, the_riad);



        let cap = $('#cap');
        cap.addClass('cap-plateau');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');
    });

    $('#riad').click(function() {

        addTheClass(ria);
        removeTheClass(appa, com, comm, cha, mai, res, bur, plat, vil);

        addTheClassNext(the_riad);
        removeTheClassNext(the_commerce, the_commercial, the_chalet, the_residentiel, the_appartement, the_maison, the_bureau, the_villa, the_plateau);


        let cap = $('#cap');
        cap.addClass('cap-riad');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-villa');

        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');


    });




    $('#chalet').click(function() {
        addTheClass(cha);
        removeTheClass(appa, com, comm, ria, mai, res, bur, plat, vil);

        addTheClassNext(the_chalet);
        removeTheClassNext(the_commerce, the_commercial, the_riad, the_residentiel, the_appartement, the_maison, the_bureau, the_villa, the_plateau);


        let cap = $('#cap');
        cap.addClass('cap-chalet');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-commercial');

    });

    $('#commercial').click(function() {
        addTheClass(comm);
        removeTheClass(appa, cha, com, ria, mai, res, bur, plat, vil);

        addTheClassNext(the_commercial);
        removeTheClassNext(the_commerce, the_chalet, the_riad, the_residentiel, the_appartement, the_maison, the_bureau, the_villa, the_plateau);

        let cap = $('#cap');
        cap.addClass('cap-commercial');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-chalet');

    });

    $('#commerce').click(function() {
        addTheClass(com);
        removeTheClass(appa, cha, comm, ria, mai, res, bur, plat, vil);

        addTheClassNext(the_commerce);
        removeTheClassNext(the_commercial, the_chalet, the_riad, the_residentiel, the_appartement, the_maison, the_bureau, the_villa, the_plateau);

        let cap = $('#cap');
        cap.addClass('cap-commerce');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commercial');
        cap.removeClass('cap-residentiel');
        cap.removeClass('cap-chalet');

    });

    $('#residentiel').click(function() {
        addTheClass(res);
        removeTheClass(appa, cha, com, ria, mai, comm, bur, plat, vil);

        addTheClassNext(the_residentiel);
        removeTheClassNext(the_commercial, the_chalet, the_riad, the_commerce, the_appartement, the_maison, the_bureau, the_villa, the_plateau);

        let cap = $('#cap');
        cap.addClass('cap-residentiel');
        cap.removeClass('cap-appartement');
        cap.removeClass('cap-maison');
        cap.removeClass('cap-bureau');
        cap.removeClass('cap-plateau');
        cap.removeClass('cap-riad');
        cap.removeClass('cap-villa');
        cap.removeClass('cap-commercial');
        cap.removeClass('cap-commerce');
        cap.removeClass('cap-chalet');
    });













































































































    // List page buttons

    $('#list-one-button').click(function(e) {
        e.preventDefault();

        $('#liste-one').addClass('liste-active');
        $('#liste-three').removeClass('liste-active');
        $('#liste-five').removeClass('liste-active');

        $('#icon-one').addClass('is-active');
        $('#icon-two').removeClass('is-active');
        $('#icon-three').removeClass('is-active');

    });
    $('#list-two-button').click(function(e) {
        e.preventDefault();

        $('#liste-one').removeClass('liste-active');
        $('#liste-three').addClass('liste-active');
        $('#liste-five').removeClass('liste-active');

        $('#icon-one').removeClass('is-active');
        $('#icon-two').addClass('is-active');
        $('#icon-three').removeClass('is-active');
    });
    $('#list-three-button').click(function(e) {
        e.preventDefault();

        $('#liste-one').removeClass('liste-active');
        $('#liste-three').removeClass('liste-active');
        $('#liste-five').addClass('liste-active');

        $('#icon-one').removeClass('is-active');
        $('#icon-two').removeClass('is-active');
        $('#icon-three').addClass('is-active');
    });



    // Ghoumari button feature

    $('#ghoumari-button-one').click(function() {
        $('#ghoumari-form').attr('action', '/recherche/carte');
    });
    $('#ghoumari-button-two').click(function() {
        $('#ghoumari-form').attr('action', '/recherche/mixte');
    });
    $('#ghoumari-button-three').click(function() {
        $('#ghoumari-form').attr('action', '/recherche/liste');
    });


    // body content child count

    let element = document.querySelectorAll('#courousel-body-count');

    element.forEach(function(e) {
        let res = e.children.length;


        if (res < 3) {}
    });






    // MENU
    $('#menu-nav').click(function() {
        $('#with-menu').toggleClass('menu-show');
    });

    $('#sidebar-button').click(function() {
        $('.sidebar').toggleClass('is-open');
    });

    // X-button

    $('#button-sp').click(function() {
        $('.header').addClass('header-t');
    });
    $('#must-close').click(function() {
        $('.header').removeClass('header-t');
    });

    // Blog dropdown

    $('#bimg').click(function() {
        $('#filter-blog-dropdown').toggleClass('filter-blog-active')
    });

    // Country dropdown

    $('#lang').click(function(e) {
        $('#country-dropdown').toggleClass('country-show');
        $('#currency-dropdown').removeClass('currency-show');
        $('#surface').removeClass('surface-show');
        e.stopPropagation();
    });

    // Currency dropdown

    $('#currency').click(function() {
        $('#currency-dropdown').toggleClass('currency-show');
        $('#country-dropdown').removeClass('country-show');
        $('#surface').removeClass('surface-show');
    });


    // Surface dropdown

    $('#surface-dropdown').click(function() {
        $('#surface').toggleClass('surface-show');
        $('#country-dropdown').removeClass('country-show');
        $('#currency-dropdown').removeClass('currency-show');
    });

    // App store dropdown

    $('#appstore').click(function(e) {
        e.preventDefault();

        $('#appstore-dropdown').toggleClass('appstoreactive');

    });

    // input textarea

    $(".holder +  .myHouse-search").keyup(function() {
        if ($(this).val().length) {
            $(this).prev('.holder').hide();
        } else {
            $(this).prev('.holder').show();
        }
    });
    $(".holder").click(function() {
        $(this).next().focus();
    });


    // field

    //  Au focus
    $('.field-input').focus(function() {
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function() {
        $parent = $(this).parent();
        if ($(this).val() == '') {
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function() {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-label');
        }
    });

    // Critere dropdown

    $('#dropdown-critere').click(function() {
        $('#critere-dropdown').toggleClass('critere-show');
    });

    $('#critere-dropdown').click(function(e) {
        e.stopPropagation();
    });

    // MyHouse-Sort dropdown

    $('#myHouse-sort').click(function() {
        $('#myHouse-sort-dropdown').toggleClass('myHouse-sort-show');
    });

    $('#neufs').click(function(e) {
        e.preventDefault();

        $('#searchable').attr("value", "neufs");

        let input = $('#input-search');
        let val = input.val();

        if (val === '') {
            input.addClass('is-invalid');
            showTooltip();
        } else {
            $('#form').submit();
        }

        function showTooltip() {
            return input.tooltip("show");
        }
    });

    $('#professionnels').click(function(e) {
        e.preventDefault();

        $('#searchable').attr("value", "professionnels");

        let input = $('#input-search');
        let val = input.val();

        if (val === '') {
            input.addClass('is-invalid');
            showTooltip();
        } else {
            $('#form').submit();
        }

        function showTooltip() {
            return input.tooltip("show");
        }
    });

    $('#particuliers').click(function(e) {
        e.preventDefault();

        $('#searchable').attr("value", "particuliers");

        let input = $('#input-search');
        let val = input.val();

        if (val === '') {
            input.addClass('is-invalid');
            showTooltip();
        } else {
            $('#form').submit();
        }

        function showTooltip() {
            return input.tooltip("show");
        }

    });


    // Select picker
    let fr = $('#fr');
    let en = $('#en');

    if (fr.length >= 1) {
        $('#myHouse-checkbox-select').multiselect({

            includeSelectAllOption: false,
            nonSelectedText: 'Choisissez',


            onChange: function(option, checked) {
                // Get selected options.
                let selectedOptions = $('#myHouse-checkbox-select option:selected');

                if (selectedOptions.length >= 3) {
                    // Disable all other checkboxes.
                    let nonSelectedOptions = $('#myHouse-checkbox-select option').filter(function() {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function() {
                        let input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                } else {
                    // Enable all checkboxes.
                    $('#myHouse-checkbox-select option').each(function() {
                        let input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            },

            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'Choisissez';
                } else if (options.length === 2) {
                    return '2 sélectionnés';
                } else if (options.length === 3) {
                    return '3 sélectionnés'
                } else {
                    let labels = [];
                    options.each(function() {
                        if ($(this).attr('label') !== undefined) {
                            labels.push($(this).attr('label'));
                        } else {
                            labels.push($(this).html());
                        }
                    });
                    return labels.join(', ') + '';
                }
            }

        });
    }

    if (en.length >= 1) {
        $('#myHouse-checkbox-select').multiselect({

            includeSelectAllOption: false,
            nonSelectedText: 'Choose',


            onChange: function(option, checked) {
                // Get selected options.
                let selectedOptions = $('#myHouse-checkbox-select option:selected');

                if (selectedOptions.length >= 3) {
                    // Disable all other checkboxes.
                    let nonSelectedOptions = $('#myHouse-checkbox-select option').filter(function() {
                        return !$(this).is(':selected');
                    });

                    nonSelectedOptions.each(function() {
                        let input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', true);
                        input.parent('li').addClass('disabled');
                    });
                } else {
                    // Enable all checkboxes.
                    $('#myHouse-checkbox-select option').each(function() {
                        let input = $('input[value="' + $(this).val() + '"]');
                        input.prop('disabled', false);
                        input.parent('li').addClass('disabled');
                    });
                }
            },

            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'Choose';
                } else if (options.length === 2) {
                    return '2 sélectionnés';
                } else if (options.length === 3) {
                    return '3 sélectionnés'
                } else {
                    let labels = [];
                    options.each(function() {
                        if ($(this).attr('label') !== undefined) {
                            labels.push($(this).attr('label'));
                        } else {
                            labels.push($(this).html());
                        }
                    });
                    return labels.join(', ') + '';
                }
            }

        });
    }

    // Slider

    $('.input-range').each(function() {
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if (separator !== -1) {
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[i] = parseFloat(item);
            });
        } else {
            value = parseFloat(value);
        }

        $(this).slider({
            formatter: function(value) {
                console.log(value);
                return value;
            },
            min: parseFloat($(this).attr('data-slider-min')),
            max: parseFloat($(this).attr('data-slider-max')),
            range: $(this).attr('data-slider-range'),
            value: value,
            tooltip_split: $(this).attr('data-slider-tooltip_split'),
            tooltip: $(this).attr('data-toggle')
        });
    });

    $('#range').each(function() {
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if (separator !== -1) {
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[i] = parseFloat(item);
            });
        } else {
            value = parseFloat(value);
        }

        $(this).slider({
            formatter: function(value) {
                console.log(value);
                return value;
            },
            min: parseFloat($(this).attr('data-slider-min')),
            max: parseFloat($(this).attr('data-slider-max')),
            range: $(this).attr('data-slider-range'),
            value: value,
            tooltip_split: $(this).attr('data-slider-tooltip_split'),
            tooltip: $(this).attr('data-toggle')
        });
    });

    $('#btn-connexion').click(function(e) {
        e.preventDefault();

        let first_input = $('#email');
        let second_input = $('#password');

        if (first_input.val() === '' || second_input.val() === '') {
            $('#has-error').addClass('has-error');
            $('#error').addClass('errors');
        }
    });

    $('#input-range-check').each(function() {
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if (separator !== -1) {
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[i] = parseFloat(item);
            });
        } else {
            value = parseFloat(value);
        }

        $(this).slider({
            min: parseFloat($(this).attr('data-slider-min')),
            max: parseFloat($(this).attr('data-slider-max')),
            range: $(this).attr('data-slider-range'),
            value: value,
            tooltip_split: $(this).attr('data-slider-tooltip_split'),
            tooltip: $(this).attr('data-toggle')
        });
    });

    $('#input-range-check-2').each(function() {
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if (separator !== -1) {
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[i] = parseFloat(item);
            });
        } else {
            value = parseFloat(value);
        }

        $(this).slider({
            min: parseFloat($(this).attr('data-slider-min')),
            max: parseFloat($(this).attr('data-slider-max')),
            range: $(this).attr('data-slider-range'),
            value: value,
            tooltip_split: $(this).attr('data-slider-tooltip_split'),
            tooltip: $(this).attr('data-toggle')
        });
    });



    // Ios checkbox

    $(".ios").iosCheckbox();


}, jQuery());
