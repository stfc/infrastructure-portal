(function($,Drupal, drupalSettings) {
    "use strict";

    Drupal.behaviors.cookieControlWidget = {
        attach: function (context, setting) {

            try {

                var config = JSON.parse(drupalSettings.civiccookiecontrol);
                if (config.debug) {
                  console.log(config);
                }

                config.onLoad = ccEval(config.onLoad);
                if (config.optionalCookies != null) {
                    config.optionalCookies.forEach(
                        function (optCookie) {
                            optCookie.onAccept = ccEval(optCookie.onAccept);
                            optCookie.onRevoke = ccEval(optCookie.onRevoke);
                            /*if (optCookie.thirdPartyCookies != null) {
                                optCookie.thirdPartyCookies = JSON.parse(optCookie.thirdPartyCookies);
                            }*/
                        }
                    );
                } else {
                    if (config.iabCMP === false)
                      console.error("No Cookie Categories added in Cookie Control module. You need to add at least one Cookie Category for the Cookie Control module to properly operate.");
                }
                CookieControl.load(config);
            }catch (e) {
                console.log(e.message.toString());
            }
            function ccEval(cc) {
                try {
                    return new Function('return ' + cc)();
                } catch (e) {
                    console.log(e);
                }
            }

            function ccFunc(cc) {
                return new Function(cc)();
            }
        }
    }
})(jQuery,Drupal, drupalSettings);
