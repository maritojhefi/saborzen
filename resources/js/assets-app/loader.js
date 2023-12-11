
$(window).on('load', function () {
    $('#backk').hide();
    $("#logocontainer").hide();
})
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ajaxStart(function () {
    $('#backk').show();
    $("#logocontainer").show();
});
$(document).ajaxComplete(function () {
    $('#backk').hide();
    $("#logocontainer").hide();
});
