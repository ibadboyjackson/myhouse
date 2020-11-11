<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    #preview_ie {
        FILTER: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)
    }
</style>
<body>


<input type="file" multiple id="gallery-photo-add">
<div class="gallery"></div>
<script>
    $(function() {
        // Multiple images preview in browser
        let imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                let filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    let reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    };

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });
</script>
</body>
</html>
