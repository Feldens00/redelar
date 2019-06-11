$( document ).ready(function() {
	// ancoragem
	var $doc = $('html, body');
	$('.nav-link').click(function() {
	    $doc.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});

	// menu fixo
	var offset = $('#menu-navbar').offset().top;
	var $meuMenu = $('#menu-navbar');
	$(document).on('scroll', function () {
	    if (offset <= $(window).scrollTop()) {
	        $meuMenu.addClass('fixed-top');
	    } else {
	        $meuMenu.removeClass('fixed-top');
	    }
	});
});
