$(document).on('ready', function () {
    var $myGroup = $('#parent');
    $myGroup.on('show.bs.collapse', '.collapse', function () {
        $myGroup.find('.collapse.in').collapse('hide');
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('#parent').addClass('fixed');
        }
        else {
            $('#parent').removeClass('fixed');
        }
    });
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).parent().find(".fa-plus").removeClass("fa fa-plus").addClass("fa fa-minus");
    }).on('hidden.bs.collapse', function () {
        $(this).parent().find(".fa-minus").removeClass("fa fa-minus").addClass("fa fa-plus");
    });
    $("#f11,#f12,#f13,#f14,#f15").click(function () {
        var sec = $(this).attr('href');
        if (window.location.href.indexOf("help1") > -1) {
            $('html, body').animate({
                scrollTop: $(sec).offset().top
            }, 500);
        }
        else {
            window.location.href = 'help1.html' + sec;
        }
    });
    $("#f21,#f22,#f23,#f24,#f25").click(function () {
        var sec = $(this).attr('href');
        if (window.location.href.indexOf("help2") > -1) {
            $('html, body').animate({
                scrollTop: $(sec).offset().top
            }, 500);
        }
        else {
            window.location.href = 'help2.html' + sec;
        }
    });
    $("#f31,#f32,#f33,#f34,#f35").click(function () {
        var sec = $(this).attr('href');
        if (window.location.href.indexOf("help3") > -1) {
            $('html, body').animate({
                scrollTop: $(sec).offset().top
            }, 500);
        }
        else {
            window.location.href = 'help3.html' + sec;
        }
    });
    $("#f41,#f42,#f43,#f44,#f45").click(function () {
        var sec = $(this).attr('href');
        if (window.location.href.indexOf("help4") > -1) {
            $('html, body').animate({
                scrollTop: $(sec).offset().top
            }, 500);
        }
        else {
            window.location.href = 'help4.html' + sec;
        }
    });
    $("#f51,#f52,#f53,#f54,#f55").click(function () {
        var sec = $(this).attr('href');
        if (window.location.href.indexOf("help5") > -1) {
            $('html, body').animate({
                scrollTop: $(sec).offset().top
            }, 500);
        }
        else {
            window.location.href = 'help5.html' + sec;
        }
    });
    $("#cb").click(function(){
        $(this).delay(500).queue(function() {
        $('html, body').animate({
                scrollTop: $("#campa-form-div").offset().top
            }, 500);
            $(this).dequeue();
        });
    });
    
});