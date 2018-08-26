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

    $('button[type=submit]').on('click', function () {
        $('.material-input, .material-textarea').find('label').css({color: ''});
        setTimeout(function () {
            $('.wpcf7-not-valid').parents('.material-input, .material-textarea').find('label').css({color: '#c66262'});
        }, 1000)
    })

    $('.material-textarea').click(function () {
        $(this).find('textarea').focus();
    });

    $('.material-input').click(function () {
        $(this).find('input').focus();
    });

    var headerOffset = $("header.desktop");
    if (headerOffset.offset().top >= 64) {
        $("header.desktop").addClass('scrolled');
    } else {
        $("header.desktop").removeClass('scrolled');
    }

    $(window).scroll(function () {
        var headerOffset = $("header.desktop");
        if (headerOffset.offset().top >= 64) {
            $("header.desktop").addClass('scrolled');
        } else {
            $("header.desktop").removeClass('scrolled');
        }
    });

});
$(window).load(function () {
    // Animate loader off screen
    $('.page-loading').fadeOut('Slow');
});


