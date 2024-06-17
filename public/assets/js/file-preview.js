// 1: previewFile
$(document).ready(() => {
    $(".file--input").change(function () {
        // 1.1: getId / data-preview / files
        id = $(this).attr("id");
        previewFrame = $(this).attr("data-preview");
        const file = this.files[0];

        // 1.2: preview
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $(`#${previewFrame}`).attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});
