(function ($) {
    "use strict";

    $(".messages").animate({ scrollTop: $(document).height() }, "fast");

    $(".expand-button").click(function () {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });

    function newMessage() {
        var message = $("#sentmsg").val();
        if ($.trim(message) == '') {
            return false;
        }
        var dateTime = new Date().toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
        $('<li class="sent"><img src="assets/img/user/1.jpg" alt="" /><p>' + message + '</p><span class="date-time"><i class="ri-check-line"></i>' + dateTime + '</span></li>').appendTo($('.messages ul'));
        $('#sentmsg').val(null);
        $('.contact.active .preview').html('<span>You: </span>' + message);
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
    };

    $('.submit').click(function (e) {
        newMessage(e);
    });

    $(window).on('keydown', function (e) {
        if (e.which == 13) {
            newMessage(e);
            return false;
        }
    });

    // Search user on contact sidebar
    $(document).ready(function() {
        $('[data-search]').on('keyup', function() {
            var searchVal = $(this).val();
            var filterItems = $('[data-filter-item]');
            console.log(searchVal);
            if ( searchVal != '' ) {
                filterItems.closest(".contact").addClass('hide');
                $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').closest(".contact").removeClass('hide');
            } else {
                filterItems.closest(".contact").removeClass('hide');
            }
        });
     });

})(jQuery);