function handleFileSelect() {

    //Check File API support

    if (window.File && window.FileList && window.FileReader) {

        let files = event.target.files; //FileList object
        let output = document.getElementById("villaa");

        for (let i = 0; i < files.length; i++) {

            let file = files[i];

            //Only pics

            if (!file.type.match('image')) continue;

            let picReader = new FileReader();

            picReader.addEventListener("load", function (event) {
                let picFile = event.target;
                let div = document.createElement("div");
                div.classList.add('class=\'ca-page-item-third-type-boxe-upload-results-item\'');
                div.innerHTML = "<img class='ca-page-img'  alt='' src='" + picFile.result + "'" + " title='" + picFile.name + "'/>";
                output.insertBefore(div, null);
            });

            //Read the image

            picReader.readAsDataURL(file);
        }
    } else {
        console.log("Your browser does not support File API");
    }
}
document.getElementById('filesk').addEventListener('change', handleFileSelect, false);
