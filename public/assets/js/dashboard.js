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
