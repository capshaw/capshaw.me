/* Once the page has loaded, add the 'loaded' class to the body. This toggles
 * css specific to the loaded state and prevents transitions from occurring as
 * the page loads. */
$(document).ready(function() {
    $('body').addClass('loaded');
});