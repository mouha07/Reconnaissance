
<div id="test">

</div>
<iframe  width="200" height="200" src="http://192.168.43.46:8085/javascript_simple.html" frameborder="0" allowfullscreen></iframe>

<div>Teachable Machine Image Model</div>
<button type="button" id="my-button">Start</button>
<div id="webcam-container"></div>
<div id="label-container"></div>





<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
<script type="text/javascript">

    /* Copyright (C) 2007 Richard Atterer, richard©atterer.net
       This program is free software; you can redistribute it and/or modify it
       under the terms of the GNU General Public License, version 2. See the file
       COPYING for details. */

    var imageNr = 0; // Serial number of current image
    var finished = new Array(); // References to img objects which have finished downloading
    var paused = false;

    function createImageLayer() {
      var img = new Image();
      img.style.position = "absolute";
      img.style.zIndex = -1;
      img.onload = imageOnload;
      img.onclick = imageOnclick;
      img.src = "./?action=snapshot&n=" + (++imageNr);
      var webcam = document.getElementById("webcam");
      webcam.insertBefore(img, webcam.firstChild);
    }

    // Two layers are always present (except at the very beginning), to avoid flicker
    function imageOnload() {
      this.style.zIndex = imageNr; // Image finished, bring to front!
      while (1 < finished.length) {
        var del = finished.shift(); // Delete old image(s) from document
        del.parentNode.removeChild(del);
      }
      finished.push(this);
      if (!paused) createImageLayer();
    }

    function imageOnclick() { // Clicking on the image will pause the stream
      paused = !paused;
      if (!paused) createImageLayer();
    }

    </script>

<script type="text/javascript">
    // More API functions here:
    // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

    // the link to your model provided by Teachable Machine export panel
    // const URL = "C:/Users/MOUHA-PC/Documents/Projet mémoire/Site_Memoire_L3/Site web/AgriNews/public/ia";

    let model, webcam, webcam2, labelContainer, maxPredictions;

    // Load the image model and setup the webcam
    async function init() {
        const modelURL =  "ia/model.json";
        const metadataURL = "ia/metadata.json";

        // load the model and metadata
        // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
        // or files from your local hard drive
        // Note: the pose library adds "tmImage" object to your window (window.tmImage)
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();

        // Convenience function to setup a webcam
        const flip = true; // whether to flip the webcam
        webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
        webcam2 = document.getElementById("test")
        await webcam.setup(); // request access to the webcam
        await webcam.play();
        window.requestAnimationFrame(loop);

        // append elements to the DOM
        document.getElementById("webcam-container").appendChild(webcam.canvas);
        labelContainer = document.getElementById("label-container");
        for (let i = 0; i < maxPredictions; i++) { // and class labels
            labelContainer.appendChild(document.createElement("div"));
        }
    }

    async function loop() {
        webcam.update(); // update the webcam frame
        await predict();
        window.requestAnimationFrame(loop);
    }

    // run the webcam image through the image model
    async function predict() {
        // predict can take in an image, video or canvas html element
        const prediction = await model.predict(webcam.canvas);

        prediction.sort(function (a,b){
            return (b.probability - a.probability);
        });
        for (let i = 0; i < maxPredictions; i++) {
            const classPrediction =
                prediction[i].className + ": " + prediction[i].probability.toFixed(2);
            labelContainer.childNodes[i].innerHTML = classPrediction;
        }
    }
    document.getElementById('my-button').addEventListener('click', init);

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>
<script src="{{ asset('bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-summernote/dist/angular-summernote.min.js') }}"></script>

<script src="{{ asset('angular/app.js') }}"></script>
// {{-- @endsection --}}
