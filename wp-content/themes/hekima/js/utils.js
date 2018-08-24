$(function () {
    $('.height-100').css("height", window.innerHeight + 'px');

    $(window).resize(function () {
        $('.height-100').css("height", window.innerHeight + 'px');
    });

    $(".icon-menu-mobile").click(function () {
        $('.menu-mobile').fadeIn();
    });

    $(".icon-menu-mobile-close").click(function () {
        $('.menu-mobile').fadeOut();
    });

});
$(window).load(function () {
    // Animate loader off screen
    $('.page-loading').fadeOut('Slow');
});