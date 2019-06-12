$('.nav a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 100
    }, 500);
});

jQuery(function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            $("#menu").addClass("menu-diferente");
        } else {
            $("#menu").removeClass("menu-diferente");
        }
    });
});