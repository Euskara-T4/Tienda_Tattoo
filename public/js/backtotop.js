// Si bajamos la pagina que aparezca la flecha
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {
        $('#backtotop').fadeIn(200);
        $("#backtotop").addClass("visible");

    } else {
        $('#backtotop').fadeOut(200);
        $("#backtotop").removeClass("visible");

    }
});


// Cuando clickamos la flecha
$('#backtotop').click(function() {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});