// -------------------------------------------------------------

// 1: dropDowns
$(document).ready(function () {
    $(".dropdown-menu").dropdown();
});

// -------------------------------------------------------------

// 2: reloadPage if back/forward
window.addEventListener("popstate", function (event) {
    $("body").addClass("d-none");
    window.location.reload();
});

// -------------------------------------------------------------

// 3: closeModal
window.addEventListener("closeModal", (event) => {
    // 1: get closeButtonParams
    closeModalButton = event.detail.modal;
    $(closeModalButton).trigger("click");
});

// -------------------------------------------------------------

// 4: initExpand
window.addEventListener("initExpand", (event) => {
    $(document).ready(function () {
        $(".expand--paragraph").each(function () {
            if ($(this).height() <= 70) {
                $(this).addClass("no-events");
                $(this).find("i").addClass("d-none");
            }
        });
    });
});

// -------------------------------------------------------------

// 5: initTooltips
window.addEventListener("initTooltips", (event) => {
    $(document).ready(function () {
        $("[data-bss-tooltip]").tooltip("dispose");

        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll("[data-bss-tooltip]")
        );

        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
});

// -------------------------------------------------------------

// 6: resetFile
window.addEventListener("resetFile", (event) => {
    $(document).ready(function () {
        // 1: getFile - filePreview
        file = event.detail.file;
        defaultPreview = event.detail.defaultPreview;
        filePreview = $(`#${file}`).attr("data-preview");

        // 1.2: resetFile - resetFilePreview
        $(`#${file}`).val("");
        $(`#${filePreview}`).attr("src", defaultPreview);
    });
});

// -------------------------------------------------------------

// 7: setFilePreview
window.addEventListener("setFilePreview", (event) => {
    $(document).ready(function () {
        // 1: get filePreview
        filePreview = event.detail.filePreview;
        defaultPreview = event.detail.defaultPreview;

        $(`#${filePreview}`).attr("src", defaultPreview);
    });
});

// -------------------------------------------------------------

// 8: resetForm
window.addEventListener("resetFormCheckboxes", (event) => {
    // 1: getId
    form = event.detail.form;

    $(form + ' input[type="checkbox"]').prop("checked", false);
    $(form + ' input[type="radio"]').prop("checked", false);
});
