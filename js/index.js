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
});

function openNavigationPanel() {
    jQuery('#webNavPanel').slideDown();
}
function closeNavigationPanel() {
    jQuery('#webNavPanel').slideUp();
}