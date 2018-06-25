
<?php get_header();?>


<?php the_post() ?>

<?php  the_content(); ?>

<?php header("Access-Control-Allow-Origin: *"); ?>
<script>


    $('input:radio[name=category]').change(function () {

        $('input:radio[name=category]').each(function( index ) {
            $(this).parent().removeClass('pack-selected');
            $(this).parent().find(".select-text").html('Select Pack');

        });

        $(this).parent().addClass('pack-selected');
        $(this).parent().find(".select-text").html('Selected');

        refreshTotalPrice();
    });




    $("#quantity-input").on('keyup change click ', function () {

        if (this.value < 5){
            $('.min-quantity-tooltip').css('opacity', '1');
            $('.min-quantity-tooltip').css('visibility', 'visible');
            // $(this).val(0);

            $('.progressbar-item span').removeClass("filled");
            $('.progressbar-container .progressbar-item:nth-child(2)').removeClass("filled");
            $('.progressbar-container .progressbar-item:nth-child(3)').removeClass("filled");

            $('.duration-item input').prop('checked', false);

            // refreshTotalPrice();

            $('.complete-order-btn').attr('disabled')

        } else {

            $('.min-quantity-tooltip').css('opacity', '0');
            $('.min-quantity-tooltip').css('visibility', 'hidden');

        }



        $('.total-proxies').html(this.value);


        if(this.value == 0){
            $('.reset-duration').prop("checked", true);
            $('.total-month').html('0');
            $('.progressbar-item span').removeClass("filled");
            $('.progressbar-container .progressbar-item:nth-child(2)').removeClass("filled");
            $('.progressbar-container .progressbar-item:nth-child(3)').removeClass("filled");

            $('.duration-item input').prop('checked', false);

            // refreshTotalPrice();

        }


        if(this.value != 0){
            $('.progressbar-container .progressbar-item:nth-child(2)').addClass("filled");
        }


        if($('input[name="plan[amount]"]')){
            $('.progressbar-item:first span').addClass("filled");
        } else {

        }

        if(this.value >= 500) {


            // // $("#quantity-input").tooltip();
            // alert("hello")
            $('.input-tooltip').css('opacity', '1');
            $('.input-tooltip').css('visibility', 'visible');

        } else {

            // $('.input-tooltip').css('display', 'none');
            $('.input-tooltip').css('opacity', '0');
            $('.input-tooltip').css('visibility', 'hidden');

        }

        $("#quantity-input").focusout(function () {

            if($("#quantity-input").val() ==0 ){
                $('.progressbar-item:first span').removeClass("filled");
            }


            $('.input-tooltip').css('opacity', '0');
            $('.input-tooltip').css('visibility', 'hidden');
        })


        refreshTotalPrice();
    });


    $('input[type=radio][name=billingCycle]').change(function() {

        if($("#quantity-input").val() < 5){
            $('.reset-duration').prop("checked", true);
            $('.total-month').html('0');
            $('.progressbar-item span').removeClass("filled");
            $('.progressbar-container .progressbar-item').removeClass("filled");

        }

        if($("#quantity-input").val() != 0){
            $("#quantity-input").click();
        }

        if($("#quantity-input").val() == 0){
            $('.reset-duration').prop("checked", true);
            $('.total-month').html('0');
            $('.progressbar-item span').removeClass("filled");
            $('.progressbar-container .progressbar-item').removeClass("filled");


            $('#quantity-input').focus();

            $('.duration-item input').prop('checked', false);

            refreshTotalPrice();
            $('.progressbar-item:first span').addClass("filled");
            return;
        }


        $('.progressbar-container .progressbar-item:nth-child(2) span').addClass('filled');
        $('.progressbar-container .progressbar-item:nth-child(3)').addClass('filled');
        

        if ($(this).val() === "monthly") {

            $('.total-month').html("1");
            $(".month-months").html("Month");
            refreshTotalPrice();
        }
        else if (this.value == "quarterly") {
            $('.total-month').html("3");
            refreshTotalPrice();
            $(".month-months").html("Months");

        } else {
            $('.total-month').html("6");
            refreshTotalPrice();
            $(".month-months").html("Months");

        }


    });



    refreshTotalPrice();

    function refreshTotalPrice() {


        $.ajax('https://blazingseollc.com/proxy/dashboard/api/total', {
            method: "GET",
            crossDomain: true,
            /*headers: {
                "Access-Control-Allow-Origin": "*"
            },*/
            data: {

                "plan": {
                    "country":[  $('input[name=country]:checked').val()],
                    "category": ['' + $('input[name=category]:checked').val()],
                    'billingCycle': '' +$('input[name=billingCycle]:checked').val(),
                    'amount':["" + $("#quantity-input").val()]
                }
            },
            dataType: 'json',
            beforeSend: function(xhr){
                xhr.withCredentials = true;
            },
            success: function(data) {
                // alert("successs");
                $(".total-money span").html(data.total.toFixed(2));

            },
            error: function() {  },

        });


    }





    function gaussRound(num, decimalPlaces) {

        var d = decimalPlaces || 0,
            m = Math.pow(10, d),
            n = +(d ? num * m : num).toFixed(8),
            i = Math.floor(n), f = n - i,
            e = 1e-8,
            r = (f > 0.50 - e && f < 0.50 + e) ?
                ((i % 2 == 0) ? i : i + 1) : Math.round(n);
        return d ? r / m : r;
    }



</script>





<?php get_footer();?>