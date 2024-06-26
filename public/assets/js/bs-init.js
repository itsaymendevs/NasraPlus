if (window.innerWidth < 768) {
    [].slice
        .call(document.querySelectorAll("[data-bss-disabled-mobile]"))
        .forEach(function (elem) {
            elem.classList.remove("animated");
            elem.removeAttribute("data-bss-hover-animate");
            elem.removeAttribute("data-aos");
            elem.removeAttribute("data-bss-parallax-bg");
            elem.removeAttribute("data-bss-scroll-zoom");
        });
}

// -------------------------------------------------------------

document.addEventListener(
    "DOMContentLoaded",
    function () {
        AOS && AOS.init({ once: true });

        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll("[data-bss-tooltip]")
        );
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    },
    false
);

// -------------------------------------------------------------

document.addEventListener(
    "livewire:navigated",
    function () {
        $(document).ready(function () {
            AOS && AOS.init({ once: true });

            var tooltipTriggerList = [].slice.call(
                document.querySelectorAll("[data-bss-tooltip]")
            );

            var tooltipList = tooltipTriggerList.map(function (
                tooltipTriggerEl
            ) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    },
    false
);
