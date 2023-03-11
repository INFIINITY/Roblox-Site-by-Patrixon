function pokazPowiadomienie(tytul, tresc) {
    var powiadomienie = $('<div class="powiadomienie"><h2>' + tytul + '</h2><p>' + tresc + '</p></div>');
    $('body').append(powiadomienie);
    $('.powiadomienieTlo').addClass('aktywne');
    powiadomienie.fadeIn('slow').delay(2000).fadeOut('slow', function() {
        $(this).remove();
        $('.powiadomienieTlo').removeClass('aktywne');
    });
}