$( document ).ready(function() {
	var $doc = $('html, body');
	$('.nav-link').click(function() {
	    $doc.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
});