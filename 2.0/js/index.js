var old_name = null;

/*
 * Click handlers
 */
$(document).ready(function() {

    /* Make all hidden drawers hidden for the people with JS. */
    $('.hidden').css('display', 'none');

	$('.switcher').click(function(){

        /* Don't open the same drawer twice in a row. */
        new_name = $(this).attr('href');
        if (new_name == old_name) return false;
        old_name = new_name;

        /* Switch accent colors. */
        var color = $(this).attr('data-color');
		$('h1').css('color', color);
		// $('.transition-background').css('background', color);
        // $('.drawer a').css('color', color);

        /* Open the drawer. */
        $toOpen = $(new_name);
        $('.open').hide();
        ($toOpen).slideToggle(500);
        ($toOpen).addClass('open');

        return false;
	});
});
