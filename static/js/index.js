$(document).ready(function() {
    var pancake = $('#pancake');
    var navigation = $('#navigation');

    pancake.click(function(e) {
        e.preventDefault();
        navigation.toggleClass('hidden');
        return false;
    });
});