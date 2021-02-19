(function($) {
    $.fn.loadLicense = function(data) {
        $(this).attr('checked', 'checked');
    };

    $.fn.reloadApiKey = function(data) {
        $(this).val(data);
    };


})(jQuery);
