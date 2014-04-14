/**
 /**
 * Project: Petulant-Octo-Tyrion
 * User: Hector Ordonez
 * Description:
 * Date: 08/04/14 12:25
 */

jQuery(document).ready(function () {
    // Initializing parameters
    var $nav = jQuery('nav');
    
    /**
     * Smoothing the nav links scrolling on click. 
     */
    enableSmoothScrolling($nav.find('a'));
    
    // Navigation functionality events
    $nav.find('.button').click(function () {
        toggleNavigationPanel();
    });

    var webNavPanelLinks = jQuery('#webNavPanel').find('a');
    
    enableSmoothScrolling(webNavPanelLinks);

    webNavPanelLinks.click(function () {
        toggleNavigationPanel();
    });

    // Scrolling events
    jQuery(window).scroll(scrollController);

});

function toggleNavigationPanel() {
    jQuery('#webNavPanel').slideToggle();
}

function scrollController() {
    var currentPosition = jQuery(window).scrollTop();
    // navPositioning(currentPosition);
}

function navPositioning(currentPosition) {
    var $nav = jQuery('nav');
    var $mainHeader = jQuery('#mainHeader');
    var mainHeaderMiddle = $mainHeader.offset().top + ($mainHeader.height() / 2);

    if (currentPosition >= mainHeaderMiddle && $nav.css('position') == 'relative') {
        console.log('to fixed');
        $nav.css('position', 'fixed');
        $nav.animate({
            'background-color': '#8A2C13'
        });
    } else if (currentPosition < mainHeaderMiddle && $nav.css('position') == 'fixed') {
        console.log('to relative');
        $nav.css('position', 'relative');
        $nav.animate({
            'background-color': 'transparent'
        });

    }
}

/**
 * Receives "a" elements and adds a smooth scrolling to them.
 * Note: speed / moving_frequency must return an integer number, otherwise does not works properly.
 * @param links
 */
function enableSmoothScrolling(links) {
    var speed = 500;
    var moving_frequency = 25; // Affects performance !
    var href;
    for (var i = 0; i < links.length; i++) {
        href = (typeof(links[i].attributes.href) == 'undefined') ? null : links[i].attributes.href.nodeValue.toString();
        if (href !== null && href.length > 1 && href.substr(0, 1) == '#') {
            links[i].onclick = function () {
                var element;
                var href = this.attributes.href.nodeValue.toString();
                if (element = document.getElementById(href.substr(1))) {
                    var hop_count = speed / moving_frequency;
                    var getScrollTopDocumentAtBegin = getScrollTopDocument();
                    var gap = (getScrollTopElement(element) - getScrollTopDocumentAtBegin) / hop_count;
                    for (var i = 1; i <= hop_count; i++) {
                        (function () {
                            var hop_top_position = gap * i;
                            setTimeout(function () {
                                window.scrollTo(0, hop_top_position + getScrollTopDocumentAtBegin);
                            }, moving_frequency * i);
                        })();
                    }
                }

                return false;
            };
        }
    }

    var getScrollTopElement = function (e) {
        var top = 0;

        while (typeof(e.offsetParent) != 'undefined' && e.offsetParent != null) {
            top += e.offsetTop + (e.clientTop != null ? e.clientTop : 0);
            e = e.offsetParent;
        }

        return top;
    };

    var getScrollTopDocument = function () {
        return document.documentElement.scrollTop + document.body.scrollTop;
    };
}