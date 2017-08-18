/**
 * Created by Юрий on 22.02.2017.
 */

$(function () {
    $(window).resize(function () {
        if ($(window).width() <= 768) {
            $('#menu').css('display', 'none');
            var style = $('#menu').css('display');
        };
    });
    var style = $('#menu').css('display');
    $('#pull').click(function () {
        if (style == 'none') {
            $('#menu').css('display', 'flex');
            style = 'flex';
        }
        else {
            $('#menu').css('display', 'none');
            style = 'none';
        }
        return false;
    });
});
$(window).resize(function () {
    if ($(window).width() > 768) {
        $('#menu').css('display', 'flex');
    };
});
