/*
 * Click handlers
 */
$(document).ready(function() {

	$('.switcher').click(function(){

        var color = $(this).attr('data-color');

		$('h1').css('color', color);
		$('.bottom-stripe').css('border-bottom-color', color);

        $('.open').hide();
        $($(this).attr('href')).slideToggle(500);
        $($(this).attr('href')).addClass('open');

        return false;
	});
});
