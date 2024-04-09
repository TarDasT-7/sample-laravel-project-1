$(document).ready(function () {
    $(".input-spinner-btn").on("click", function () {
        var inputField = $(this).siblings(".input-spinner-field");
        var currentValue = parseInt(inputField.val());
        var step = parseInt(inputField.attr("step")) || 1;
        var minValue = parseInt(inputField.attr("min")) || 1;
        var maxValue = parseInt(inputField.attr("max")) || 10;

        if ($(this).hasClass("increase")) {
            inputField.val(Math.min(currentValue + step, maxValue));
        } else {
            inputField.val(Math.max(currentValue - step, minValue));
        }
    });
});
