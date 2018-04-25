$(document).ready(function() {


    // jQuery to collapse the navbar on scroll
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".top-navigation").addClass("top-nav-collapse");
        } else {
            $(".top-navigation").removeClass("top-nav-collapse");
        }
    });



    // jQuery Resize Height START
    function heightDetect(){
        $('.home-section').css("height", $(window).height());
    }

    heightDetect();

    $(window).resize(function(){
        heightDetect();
    });
    // jQuery Resize Height END

});