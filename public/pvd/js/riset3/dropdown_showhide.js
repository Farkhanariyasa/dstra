$(document).ready(function() {
$("#name").on('change', function() {
    $(".datatujuan").hide();

    $("#" + $(this).val()).fadeIn(700);
    // alert($(this).val());
});
});
