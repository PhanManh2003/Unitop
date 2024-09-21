$(document).ready(function () {
    $('#menu-icon').click(function () {
        $('#responsive-menu').stop().slideToggle();
        return false
    })

    $('.responsive-menu-toggle').click(function () {
        $(this).next('.sub-menu').stop().slideToggle();
        $(this).toggleClass('opening');
        return false
    })

    $(window).resize(function () {
        $('#responsive-menu').slideUp();
        $('#responsive-menu .sub-menu').slideUp();
        $('.responsive-menu-toggle').removeClass('opening');
    });

    $(window).scroll(function () {
        $('#responsive-menu').slideUp();
        $('#responsive-menu .sub-menu').slideUp();
        $('.responsive-menu-toggle').removeClass('opening');
    });
});



