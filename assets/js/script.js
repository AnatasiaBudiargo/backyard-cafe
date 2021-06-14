// parallax


// Location
$(window).on('load', function() {
    $('.location').addClass('show');
});

// Jumbotron
$(window).on('load', function() {
    $('.jumbotron').addClass('show');
});





$(window).scroll(function() {
    var WindowScroll = $(this).scrollTop();

    // Jumbotron
    $('.jumbotron .logo').css({
        'transform': 'translate(0px, ' + WindowScroll / 2 + '%)'
    });

    $('.jumbotron .display-4').css({
        'transform': 'translate(0px, ' + WindowScroll / 4 + '%)'
    });

    $('.jumbotron p').css({
        'transform': 'translate(0px, ' + WindowScroll / 0.8 + '%)'
    });

    $('.sosmed').css({
        'transform': 'translate(0px, ' + WindowScroll / 0.8 + '%)'
    });

    // book and event
    if (WindowScroll > $('.book-and-event').offset().top - 500) {
        $('.book-and-event .js ').each(function(i) {
            setTimeout(function() {
                $('.book-and-event .js ').eq(i).addClass('show');
            }, 100 * (i + 1));
        });
    }

    // Photo menu
    if (WindowScroll > $('.photo-menu').offset().top - 700) {
        $('.photo-menu .card').each(function(i) {
            setTimeout(function() {
                $('.photo-menu .card').eq(i).addClass('show');
            }, 200 * (i + 1));
        });
    }

    // Our Chef
    if (WindowScroll > $('.our-chef').offset().top - 500) {
        $('.our-chef .gmbr').each(function(i) {
            setTimeout(function() {
                $('.our-chef .gmbr').eq(i).addClass('show');
            }, 300 * (i + 1));
        });
    }

    // book a table
    if (WindowScroll > $('.book-a-table').offset().top - 600) {
        $('.book-a-table .js').each(function(i) {
            setTimeout(function() {
                $('.book-a-table .js').eq(i).addClass('show');
            }, 100 * (i + 1));
        });
    }

});