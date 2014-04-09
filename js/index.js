/**
 /**
 * Project: Petulant-Octo-Tyrion
 * User: Hector Ordonez
 * Description:
 * Date: 08/04/14 12:25
 */

jQuery(document).ready(function () {
    // Navigation functionality events
    jQuery('nav').find('button').click(function () {
        openNavigationPanel();
    });

    var $webNavPanel = jQuery('#webNavPanel');
    $webNavPanel.find('button').click(function () {
        closeNavigationPanel();
    });

    $webNavPanel.find('li').click(function () {
        closeNavigationPanel();
    });

    // Scrolling events
    jQuery(window).scroll(scrollController);

});

function openNavigationPanel() {
    jQuery('#webNavPanel').slideDown();
}
function closeNavigationPanel() {
    jQuery('#webNavPanel').slideUp();
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