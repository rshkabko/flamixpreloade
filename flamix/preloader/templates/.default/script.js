document.addEventListener("DOMContentLoaded", function(event) {
    setTimeout(FlamixPreloaderFade, 2000, "flamixPreloader");
});

function FlamixPreloaderFade(elementToFade) {
    var preloader = document.getElementById(elementToFade);
    preloader.classList.add("hidden");
    setTimeout(function() {
        preloader.style.display = 'none';
    }, 2000);
};