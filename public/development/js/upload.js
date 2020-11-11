function handleFileSelect() {

    //Check File API support

    if (window.File && window.FileList && window.FileReader) {

        let files = event.target.files; //FileList object
        let output = document.getElementById("result");


        let number = [];

        if (files.length > 9) {

            alert('Vous ne pouvez sélectionner que 9 photos')

        } else

        {

            let conveniancecounts = $('.ca-page-item-third-type-boxe-upload-results-item').length

            let hastotal = files.length + conveniancecounts;


            if (hastotal > 9) {

                alert('Vous ne pouvez sélectionner que 9 photos')

            } else {

                for (let i = 0; i < files.length; i++) {

                    let file = files[i];

                    //Only pics

                    if (!file.type.match('image')) continue;

                    $('.ca-page-item-item').hide();



                    let picReader = new FileReader();

                    picReader.addEventListener("load", function(event) {

                        let picFile = event.target;


                        let div = document.createElement("div");

                        let span = document.createElement("span");

                        span.classList.add('delete-preview');

                        div.classList.add('ca-page-item-third-type-boxe-upload-results-item');

                        div.innerHTML = "<img class='ca-page-img image-count img-fluid' ondragstart='return false;' alt='' src='" + picFile.result + "'" + " '" + picFile.name + "'/>";

                        output.insertBefore(div, null);

                        div.insertBefore(span, null);


                        // check if the file contains 


                        // when click x button


                        $(".delete-preview").click(function() {

                            $(this).parent(".ca-page-item-third-type-boxe-upload-results-item").remove();

                            let conveniancecount = $('.ca-page-item-third-type-boxe-upload-results-item').length


                            if (conveniancecount > 9) {
                                alert("Vous arrivez à votre nombre maximum de photos")
                                $("#files").prop("disabled", true);
                                $('#custom-label').addClass('labelable')
                            } else {
                                $("#files").prop("disabled", false);
                                $('#custom-label').removeClass('labelable')
                            }


                        });


                        let conveniancecount = $('.ca-page-item-third-type-boxe-upload-results-item').length


                        if (conveniancecount > 9) {
                            alert("Vous arrivez à votre nombre maximum de photos")
                            $("#files").prop("disabled", true);
                            $('#custom-label').addClass('labelable')
                        } else {
                            $("#files").prop("disabled", false);
                            $('#custom-label').removeClass('labelable')
                        }


                    });








                    //Read the image

                    picReader.readAsDataURL(file);

                    // limit number of image to 9

                    // let conveniancecount = $('.image-count')

                    // number.push(conveniancecount)

                }

                let conveniancecount = $('.ca-page-item-third-type-boxe-upload-results-item').length

                if (conveniancecount > 9) {
                    alert("Vous arrivez à votre nombre maximum de photos")

                    $("#files").prop("disabled", true);
                    $('#custom-label').addClass('labelable')

                    let last = $('#result').children().last()

                    last.remove()

                }

            }

        }


    } else {
        console.log("Your browser does not support File API");
    }
}
document.getElementById('files').addEventListener('change', handleFileSelect, false);







$('#area').click(function() {

    document.querySelector("textarea").focus(); //set the focus - cursor at end
    document.querySelector("textarea").setSelectionRange(0, 0); // place cursor at start

})