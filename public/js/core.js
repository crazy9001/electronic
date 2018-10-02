var Electronic = Electronic || {};

$(document).ready( function () {
    Electronic.showNotice = function (e, n, t) {
        toastr.options = {
            closeButton: !0,
            positionClass: "toast-bottom-right",
            onclick: null,
            showDuration: 1e3,
            hideDuration: 1e3,
            timeOut: 1e4,
            extendedTimeOut: 1e3,
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        }, toastr[e](n, t)
    },
    $("#side-nav").slimScroll({
        height: "100%",
        railOpacity: .4,
        wheelStep: 12
    })
});
