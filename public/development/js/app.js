$(function() {

    $('#myHouse-checkbox-select').multiselect({

        includeSelectAllOption: false,
        nonSelectedText: 'Choisissez',

    });

    $('#myHouse-filters').click(function (e) {
        $(this).toggleClass('show');
    });
    $('#myHouse-filters-dropdown').click(function (e) {
        e.stopPropagation()
    });

    $('#myHouse-sort').click (function () {
        $(this).toggleClass('is-opened');
    });

    $('#myHouse-sort-dropdown').click(function (e) {
        e.stopPropagation()
    });


    $('#link-3').click(function (e) {
        e.preventDefault();



        let element = $('#link-1');
        let elements = $('#link-2');

        e.preventDefault();
        $(this).addClass('myHouse-three-link-active');
        element.removeClass('myHouse-three-link-active');
        elements.removeClass('myHouse-three-link-active');
    });

    $('#link-2').click(function (e) {
        e.preventDefault();

        let element = $('#link-1');
        let elements = $('#link-3');

        e.preventDefault();
        $(this).addClass('myHouse-three-link-active');
        element.removeClass('myHouse-three-link-active');
        elements.removeClass('myHouse-three-link-active');
    });

    $('#link-1').click(function (e) {
        e.preventDefault();

        let element = $('#link-2');
        let elements = $('#link-3');

        e.preventDefault();
        $(this).addClass('myHouse-three-link-active');
        element.removeClass('myHouse-three-link-active');
        elements.removeClass('myHouse-three-link-active');
    });



    $( '.input-range').each(function(){
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if( separator !== -1 ){
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[ i ] = parseFloat( item );
            });
        } else {
            value = parseFloat( value );
        }

        $( this ).slider({
            formatter: function(value) {
                console.log(value);
                return '$' + value;
            },
            min: parseFloat( $( this ).attr('data-slider-min') ),
            max: parseFloat( $( this ).attr('data-slider-max') ),
            range: $( this ).attr('data-slider-range'),
            value: value,
            tooltip_split: $( this ).attr('data-slider-tooltip_split'),
            tooltip: $( this ).attr('data-toggle')
        });
    });

    /*
    $('#btnget').click(function() {

        alert($('#chkveg').val());

    })

     */




    $( '.input-ranges').each(function(){
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if( separator !== -1 ){
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[ i ] = parseFloat( item );
            });
        } else {
            value = parseFloat( value );
        }

        $( this ).slider({
            formatter: function(value) {
                console.log(value);
                return value + 'm²';
            },
            min: parseFloat( $( this ).attr('data-slider-min') ),
            max: parseFloat( $( this ).attr('data-slider-max') ),
            range: $( this ).attr('data-slider-range'),
            value: value,
            tooltip_split: $( this ).attr('data-slider-tooltip_split'),
            tooltip: $( this ).attr('data-toggle')
        });
    });



    $( '#myHouse-range').each(function(){
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if( separator !== -1 ){
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[ i ] = parseFloat( item );
            });
        } else {
            value = parseFloat( value );
        }

        $( this ).slider({
            min: parseFloat( $( this ).attr('data-slider-min') ),
            max: parseFloat( $( this ).attr('data-slider-max') ),
            range: $( this ).attr('data-slider-range'),
            value: value,
            tooltip_split: $( this ).attr('data-slider-tooltip_split'),
            tooltip: $( this ).attr('data-toggle')
        });
    });


    $( '#input-range-check').each(function(){
        let value = $(this).attr('data-slider-value');
        let separator = value.indexOf(',');
        if( separator !== -1 ){
            value = value.split(',');
            value.forEach(function(item, i, arr) {
                arr[ i ] = parseFloat( item );
            });
        } else {
            value = parseFloat( value );
        }

        $( this ).slider({
            min: parseFloat( $( this ).attr('data-slider-min') ),
            max: parseFloat( $( this ).attr('data-slider-max') ),
            range: $( this ).attr('data-slider-range'),
            value: value,
            tooltip_split: $( this ).attr('data-slider-tooltip_split'),
            tooltip: $( this ).attr('data-toggle')
        });
    });


});
