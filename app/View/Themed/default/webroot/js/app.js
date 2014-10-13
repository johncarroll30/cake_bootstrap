//$(document).foundation();
$(document).ready(function() {

    $("#menu").on('click touchstart', function (e) {
        e.preventDefault();
        if ($('body').hasClass('off')) {
            $('body').addClass("on").removeClass("off");
        } else {
            $('body').removeClass("on").addClass("off"); 
        }
        return false;
    });

    $(".filter-expand").on('click touchstart', function (e) {
        e.preventDefault();
        if ( $(this).parent().find('.filter-properties').hasClass('filter-off')) {
             $(this).parent().find('.filter-properties').addClass("filter-on").removeClass("filter-off");
             $(this).parent().find('.search-accordion').removeClass("icon-arrow-down").addClass("icon-arrow-up"); 
        } else {
             $(this).parent().find('.filter-properties').removeClass("filter-on").addClass("filter-off"); 
             $(this).parent().find('.search-accordion').removeClass("icon-arrow-up").addClass("icon-arrow-down"); 
        }
        return false;
    });

    $(".button-map-grid .button").on('click touchstart', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        $(".button").removeClass("active");
        $(this).addClass("active")
        $('#grid-view, #map-canvas').removeClass('show');
        $('#'+id).addClass('show');
        initialize();
    });

    $(".listing-sidenav.tabs li").on('click touchstart', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-tab");
        $('.listing-sidenav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').addClass('show-for-small');
        $('#'+id).removeClass('show-for-small');
    });

    $.cookieBar({
        forceShow: false
    });

});