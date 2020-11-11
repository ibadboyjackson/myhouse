document.querySelector("input[type=file]")
    .onchange = function(event) {
    let files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        let f = files[i];
        // Only process video files.
        if (!f.type.match('video.*')) {
            continue;
        }

        let source = document.createElement('video'); //added now

        source.width = 280;

        source.height = 240;

        source.controls = true;

        source.src = URL.createObjectURL(files[i]);

        document.body.appendChild(source); // append `<video>` element

    }
}
