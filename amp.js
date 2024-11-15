document.addEventListener("DOMContentLoaded", function() {
    const mapContainer = document.getElementById("map");
    const iframe = document.createElement("iframe");
    iframe.src = "https://yandex.ru/map-widget/v1/?um=constructor%3A119c68069bfefb15769fb624aa76fab745471db80f3f78b0d04afe8052b0e74a&amp;source=constructor";
    iframe.width = "400";  // Set to desired width
    iframe.height = "350"; // Set to desired height
    iframe.frameBorder = "0";
    iframe.allowFullscreen = true;
    iframe.style.display = "block";
    mapContainer.appendChild(iframe);
});
