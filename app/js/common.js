$(document).ready(function() {


    AOS.init({

    });



    $( ".price-nav ul li a" ).click(function() {


        $( ".price-nav ul li" ).each(function( index ) {
            $(this).removeClass('active')
        });

        $(this).parent().addClass("active");
    });




    $("#sandwich").click(function() {
        $("#sandwich").toggleClass("active");
    });

    // MENU STAFF START
    $(".menu-list li a").click(function () {
        $(".top-menu").fadeOut(600);
        $(".top-content").css("opacity", 1);
        $("#sandwich").toggleClass("active");
    });



    $('.toggle-menu').click(function () {
        if ($(".top-menu").is(":visible")) {
            $(".top-content").css("opacity", 1);
            $(".menu-list li a").removeClass("fadeInUp animated");
            $(".top-menu").fadeOut(600);
            $(".menu-list li a").addClass("fadeOutUp animated");
        } else {
            $(".top-content").css("opacity", .1);
            $(".menu-list li a").removeClass("fadeOutUp animated");
            $(".top-menu").fadeIn(600);
            $(".menu-list li a").addClass("fadeInUp animated");
        };
    })
    // MENU STAFF END


    // jQuery to collapse the navbar on scroll
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".top-navigation").addClass("top-nav-collapse");
        } else {
            $(".top-navigation").removeClass("top-nav-collapse");
        }
    });



    // jQuery Resize Height START
    // function heightDetect(){
    //     $('.home-section').css("height", $(window).height());
    // }

    // heightDetect();

    // $(window).resize(function(){
    //     heightDetect();
    // });
    // jQuery Resize Height END




});




var $form = $('.register');

function validateEmail(email) {
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
};

$form.on('keyup', 'input', function(e) {
    var $this = $(this),
        $input = $this.val();
    if ($input.length > 0) {
        $form.find('label').addClass('active');
        if (validateEmail($input)) {
            $form.find('button').addClass('active');
            console.log(e);
            if (e.which === 13) {
                $form.find('button').click();
                $this.blur();
            }
        } else {
            $form.find('button').removeClass('active');
        }
        $(this).addClass('active');
    } else {
        $form.find('label').removeClass('active');
        $form.find('button').removeClass('active');
        $(this).removeClass('active');
    }
});

$form.on('click', 'button.active', function(e) {
    e.preventDefault;
    var $this = $(this);
    $(this).addClass('full');
    $(this).html('Thanks!');

    setTimeout(()=> {
        $form.find('input').val('').removeClass('active');
        $form.find('label').removeClass('active');
        $this.removeClass('full active');
        $this.html('OK');
    }, 1200);
})