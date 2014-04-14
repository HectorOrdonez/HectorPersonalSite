/**
 /**
 * Project: Petulant-Octo-Tyrion
 * User: Hector Ordonez
 * Description:
 * Date: 08/04/14 12:25
 */

/**
 * Amazing Hector Website constructor.
 * @constructor
 * 
 * @param webNavElement Expected to be jQuery object.
 */
function awesomeHectorWebsite(webNavElement) {
    var $webNavPanel;
    var self = this;
    
    /*****************************************************************************************************************/
    /** Public methods                                                                                              **/
    /*****************************************************************************************************************/

    /**
     * Receives "a" elements and adds a smooth scrolling to them.
     * Note: speed / moving_frequency must return an integer number, otherwise does not works properly.
     * @param links
     */
    this.enableSmoothScrolling = function (links) {
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
    };

    this.toggleWebNavOnClick = function (element) {
        element.click(function()
        {
            $webNavPanel.slideToggle();
        });
    };
    
    /*****************************************************************************************************************/
    /** Site construction                                                                                           **/
    /*****************************************************************************************************************/

    try {
        // Validate
        validate();

        // Initializing website scripts
        initialize()
    }
    catch (error) {
        displayError(error);
    }

    /*****************************************************************************************************************/
    /** Private methods                                                                                             **/
    /*****************************************************************************************************************/

    function validate() {
        if (webNavElement == 'undefined')
        {
            throw 'Web navigation element expected to be jQuery object. Undefined instead.';
        }
        
        if (!(webNavElement instanceof jQuery))
        {
            throw 'webNavElement must be an instance of jQuery.';
        }
    }
    
    function initialize() {
        $webNavPanel = webNavElement; 
    }
    
    function displayError(msg) {
        console.error('Received error while initializing website: ' + msg);
    }
}