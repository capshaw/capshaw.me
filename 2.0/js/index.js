/*
 * Click handlers
 */
$(document).ready(function() {

    /* Make all hidden drawers (minus hash) hidden for the people with JS. */
    $('.hidden').css('display', 'none')
    if(window.location.hash) {
        hash = '#' + window.location.hash.substring(1)
        $(hash).show()
        $(hash).addClass('open')
    }

    /* Resize all elements to the size of the screen. */
    $('.container').css('height', $(window).height());
    $(window).resize(function() {
        $('.container').css('height', $(window).height());
    });

    /* On nav click, show the correct frames. */
	$('.switcher').click(function(){

        /* Don't open the same drawer twice in a row. */
        new_name = $(this).attr('href');
        $to_open = $(new_name);

        /* Close an already open container. */
        if($to_open.hasClass('open')) {
            $to_open.hide('slide', { direction: 'left' }, 500)
            $to_open.removeClass('open')
            window.location.hash = ''
            return false
        }

        /* There is nothing open. */
        $open_drawers = $('.open');
        if($open_drawers.length == 0) openClose()

        /* Close and old container and open a new one. */
        $open_drawers.hide('slide', { direction: 'left' }, 500, function() { openClose() });

        function openClose() {
            $to_open.show('slide', { direction: 'left' }, 500)
            $open_drawers.removeClass('open')
            $to_open.addClass('open')
            return false
        }

        /* Switch accent colors. */
        // var color = $(this).attr('data-color');

        // /* Open the drawer. If there is no open container, don't try to close anything. */
        // if ($('.open').length == 0) {
        //     ($toOpen).show("slide", { direction: "left" }, 500);
        // }else{
        //     $('.open').hide("slide", { direction: "left" }, 500, function(){

        //         if (new_name == old_name){
        //             new_name = null;
        //         }else{
        //             ($toOpen).show("slide", { direction: "left" }, 500);
        //         }

        //         $('.open').removeClass('open');
        //         $(toOpen).addClass('open');
        //     });
        // }

        // old_name = new_name;
        // return false;
	});
});