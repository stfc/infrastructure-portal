(function ($) {
    'use strict';

    Drupal.behaviors.cookieControlAdmin = {
        attach: function (context, setting) {
            $('.colorfield').minicolors({
                position: 'bottom right',
            });
        }
    }

})(jQuery);
