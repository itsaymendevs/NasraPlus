$(document).ready(function () {
    $("img").addClass("no-blur");
    $("#preloader").fadeOut("1500");
});

document.addEventListener("livewire:navigated", function () {
    $(document).ready(function () {
        $("img").addClass("no-blur");
        $("#preloader").fadeOut("400");
    });
});

window.addEventListener("noBlur", (event) => {
    $(document).ready(function () {
        $("img").addClass("no-blur");
    });
});
