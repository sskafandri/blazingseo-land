window.$ = jQuery;

$(document).ready(function() {


    //USA_________

    //usa-semi-3
    $.ajax('http://dashboard.proxy.staging.sprious.com/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['us'],
                "category": ['semi-3'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-usa-semi-3").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-usa-semi-3").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //usa-dedicated
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['us'],
                "category": ['dedicated'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-usa-dedicated").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-usa-dedicated").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //usa-rotating
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['us'],
                "category": ['rotating'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-usa-rotating").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-usa-rotating").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });


    //GERMAN________

    //de-semi-3
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['de'],
                "category": ['semi-3'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-de-semi-3").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-de-semi-3").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //de-dedicated
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['de'],
                "category": ['dedicated'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-de-dedicated").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-de-dedicated").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //de-rotating
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['de'],
                "category": ['rotating'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-de-rotating").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-de-rotating").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //Brazil

    //br-semi-3
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['br'],
                "category": ['semi-3'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-br-semi-3").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-br-semi-3").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //br-dedicated
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['br'],
                "category": ['dedicated'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-br-dedicated").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-br-dedicated").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    //br-rotating
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['br'],
                "category": ['rotating'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-br-rotating").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-br-rotating").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });


    //sneaker
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['us'],
                "category": ['sneaker'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-sneaker").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-sneaker").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });



    //price-shopify
    $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
        method: "GET",
        crossDomain: true,
        /*headers: {
            "Access-Control-Allow-Origin": "*"
        },*/
        data: {

            "plan": {
                "country":['us'],
                "category": ['shopify'],
                'billingCycle': 'monthly',
                'amount':["5"]
            }
        },
        dataType: 'json',
        beforeSend: function(xhr){
            xhr.withCredentials = true;
        },
        success: function(data) {
            // alert("successs");
            $(".price-shopify").html("$" + data.total.toFixed(2));

        },
        error: function() {
            $(".price-shopify").html("<a href='http://support.blazingseollc.com/support/tickets/new?step=2&deptid=3'></a>" );
        },
    });

    var url = window.location.href.split( '/' );


    // USA -----------------

    if (url[ url.length - 1 ] == '#locations'){
        $('#locations .btn-more').click();

    }

    if (url[ url.length - 1 ] == '#features'){
        getScroll();
    }

    $("a[href*='#']").mPageScroll2id();


    AOS.init({

    });



    var link = $('ul.menu-list li').has('ul').find('a:first').append('<i class="fas fa-caret-down"></i>\n' +
        '\n');

    link.click(function (e) {
        e.preventDefault();
    });





    $( ".price-nav ul li a" ).click(function() {


        $( ".price-nav ul li" ).each(function( index ) {
            $(this).removeClass('active')
        });

        $(this).parent().addClass("active");
    });




    $("#sandwich").click(function() {
        $("#sandwich").toggleClass("active");
        $(".toggle-menu").addClass("fixed-burger-btn");
    });


    $(window).scrollTop("10px");




    // MENU STAFF START
    $(".menu-list li a").click(function () {

        if ($(".menu-list").hasClass("mobile-menu-off")){
            return;
        }

        $(".top-menu").fadeOut(600);
        $(".top-content").css("opacity", 1);
        $("#sandwich").toggleClass("active");
        $(".toggle-menu").removeClass("fixed-burger-btn");
    });

    $('.toggle-menu').click(function () {
        if ($(".top-menu").is(":visible")) {
            $(".top-content").css("opacity", 1);
            $(".menu-list li a").removeClass("fadeInUp animated");
            $(".top-menu").fadeOut(600);
            $(".menu-list li a").addClass("fadeOutUp animated");
            $(".toggle-menu").removeClass("fixed-burger-btn");


        } else {
            $(".top-content").css("opacity", .1);
            $(".menu-list li a").removeClass("fadeOutUp animated");
            $(".top-menu").fadeIn(600);
            $(".menu-list li a").addClass("fadeInUp animated");
        };
    })



    // jQuery to collapse the navbar on scroll
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".top-navigation").addClass("top-nav-collapse");
        } else {
            $(".top-navigation").removeClass("top-nav-collapse");
        }
    });



    // jQuery Resize Height START
    function setMenu(){

        if(    $(window).width() < 991 ){
            $('.top-menu').addClass('menu-height');
            $('.menu-height').css("height", $(window).height());
            $(".menu-list").removeClass("mobile-menu-off");


        }

        if(    $(window).width() > 991 ){
            $('.top-menu').removeClass('menu-height');
            $('.top-menu').css("height", 'initial');
            $(".menu-list").addClass("mobile-menu-off");
        }
    }
    setMenu();

    $(window).resize(function(){
        setMenu();


    });
    // jQuery Resize Height END
    //





    $(".top-menu ul a").mPageScroll2id();


});

function getScroll() {
    $('a[href="/#features"]').click();

}




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