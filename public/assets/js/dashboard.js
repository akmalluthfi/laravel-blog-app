/* globals Chart:false, feather:false */

(function () {
    "use strict";

    feather.replace({ "aria-hidden": "true" });
})();

// handle create slug
const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("change", function () {
    fetch("/dashboard/posts/createSlug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});

// Disable upload file trix
document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});

// create preview image
function previewImage() {
    const img = document.querySelector("#image");
    const imgPreview = document.querySelector("#img-preview");

    imgPreview.classList.add("mb-3");

    const oFReader = new FileReader();
    oFReader.readAsDataURL(img.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.setAttribute("src", oFREvent.target.result);
    };
}
