/*
 * Click handlers
 */
$(document).ready(function() {

    var divs = ['h1', '.stripe']

    for(div in divs) {
        $(div).css('transition', 'border 2s');
        $(div).css('-moz-transition', 'border 2s');
        $(div).css('-webkit-transition', 'border 2s');
        $(div).css('-o-transition', 'border 2s');
    }

	$(document).click(function(){
		$('h1').css('color', 'rgba(100,200,100, 0.8)');
		$('.stripe').css('border-bottom-color', 'rgba(100,200,100, 0.8)');
	});
});
