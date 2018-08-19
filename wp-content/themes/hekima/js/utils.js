$(function () {
    $('.height-100').css("height", window.innerHeight + 'px');
    $(window).resize(function () {
        $('.height-100').css("height", window.innerHeight + 'px');
    });
});