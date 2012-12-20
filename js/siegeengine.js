    ;(function($, window, undefined) {
    $(document).ready(function() {
    $('.toggle-switch label').bind('click', function(e) {
    var $checkbox = $(this).siblings('input');
    e.preventDefault();
    $checkbox.attr('checked', !$checkbox.attr('checked'));
    });
    });
    })(jQuery, this);