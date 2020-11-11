<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>range</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">
    <div class="row">



        <div class="col-md-6" style="margin-top: 50px;">
            <div class="slider-wrapper green">
                <input class="input-range" data-slider-id='ex1Slider' type="text" data-slider-min="0"  data-slider-max="100" data-slider-step="1" data-slider-value="14"/>
            </div>
        </div>

        <div class="col-md-6" style="margin-top: 50px;">
            <div class="slider-wrapper">
                <input class="input-range"  data-slider-id='ex12cSlider' type="text" data-slider-tooltip="always" data-slider-step="1" data-slider-value="50, 60" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
            </div>
        </div>

        <div class="col-md-6" style="margin-top: 50px;">
            <div class="slider-wrapper slider-ghost">
                <input class="input-range"  data-slider-id='ex12cSlider' type="text" data-slider-step="1" data-slider-value="50, 60" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
            </div>
        </div>

        <!-- Default checkbox -->
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                Option one
            </label>
        </div>

        <!-- Checked checkbox -->
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                Option two is checked by default
            </label>
        </div>

        <!-- Disabled checkbox -->
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" disabled>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                Option three is disabled
            </label>
        </div>

    </div>
</div>


<script>
    (function( $ ){
        $( document ).ready( function() {


            $('[data-toggle="tooltip"]').tooltip();


            $( '.input-range').each(function(){
                var value = $(this).attr('data-slider-value');
                var separator = value.indexOf(',');
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
                    tooltip: $( this ).attr('data-slider-tooltip')
                });

            });
        } );
    } )( jQuery );
</script>

</body>
</html>
