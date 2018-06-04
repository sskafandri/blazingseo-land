
<?php get_header();?>



<!--pricing welcome section start-->
<section id="pricing-welcome" class="pricing-welcome-section">
    <h1 class="section-title text-center"
        data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
        Package Description & Choose Your Region
    </h1>
</section>
<!--pricing welcome section end-->

<!--pricing section start-->
<div class="pricing-section pricing-section-content" id="pricing">

    <div class="step-title">
        <h2>Step 1</h2>
        <h4>Pick a proxy country</h4>
    </div>
    <div class="price-nav container mt-5">
        <ul class="ml-auto mr-auto nav">
            <li class="active">
                <a href="#usa-tab" data-toggle="tab">
                    <span>USA</span>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/USA-flag.png" class="" alt="usa">
                </a>


            </li>
            <li >
                <a href="#german-tab" data-toggle="tab">
                    <span>German</span>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/GERMAN-flag.png" alt="german">
                </a>

            </li>
            <li><a href="#brazil-tab" data-toggle="tab">
                    <span>Brazil</span>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/BRAZIL-flag.png" alt="brazil">
                </a>

            </li>
            <li><a href="#" data-toggle="tab">
                    <span>Sneaker</span>

                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/sneaker.png" class="" width="65px" alt="sneaker">
                </a>
            </li>
        </ul>
    </div>

    <div class="step-title">
        <h2>Step 2</h2>
        <h4>Choose a proxy type</h4>
    </div>


    <div class="prices container-fluid">

        <div class="row">
            <div class="col-lg-12 col-xl-10 offset-xl-1">
                <div class="row">
                    <div class="col-12 mb-5 order-2 order-md-1 col-md-4">
                        <div class="price">
                            <div class="price-body">
                                <h5 class="price-title">
                                    Semi-dedicated
                                </h5>
                                <p class="price-sub-title">
                                    Starting at
                                </p>

                                <span class="price-value">1.00 $</span>

                                <label class="select-container">
                                    <input type="radio" name="pack" id="pack1" value="1.00">
                                    <!--<span class="checkmark"></span>-->
                                    <i class="fas fa-check-circle"></i>
                                    <span class="select-text">Select Pack</span>
                                </label>

                                <a href="#" class="trial-link">Start a trial now <i class="fas fa-chevron-circle-right"></i>

                                </a>
                            </div>

                            <div class="price-footer">
                                Semi-dedicated proxies are shared between 3 users.
                                This means the other 2 users could. Do not use this
                                option for social media accounts.
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mb-5 order-md-2 order-1 col-md-4">
                        <div class="price recommended">
                            <div class="price-recommended text-uppercase">
                                recommended
                            </div>

                            <div class="price-body">
                                <h5 class="price-title">
                                    Dedicated
                                </h5>
                                <p class="price-sub-title">
                                    Starting at
                                </p>

                                <span class="price-value">1.00 $</span>


                                <label class="select-container pack-selected">
                                    <input type="radio" name="pack" id="pack2" checked value="1.00">
                                    <i class="fas fa-check-circle"></i>
                                    <span class="select-text">Select Pack</span>
                                    <!--<span class="checkmark"></span>-->
                                </label>

                                <a href="#" class="trial-link">Start a trial now <i class="fas fa-chevron-circle-right"></i>

                                </a>
                            </div>
                            <div class="price-footer">
                                Dedicated proxies are used by ONLY you. No other user will have access to these IPs, so this option is best suited for needs such as social media accounts.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-5 order-3 col-md-4">
                        <div class="price">
                            <div class="price-body">
                                <h5 class="price-title">
                                    Rotating
                                </h5>
                                <p class="price-sub-title">
                                    Starting at
                                </p>

                                <span class="price-value">1.50 $</span>

                                <label class="select-container">
                                    <input type="radio" name="pack" id="pack3" value="1.50">
                                    <i class="fas fa-check-circle"></i>
                                    <!--<span class="checkmark"></span>-->
                                    <span class="select-text">Select Pack</span>
                                </label>

                                <a href="#" class="trial-link">Start a trial now <i class="fas fa-chevron-circle-right"></i>

                                </a>
                            </div>

                            <div class="price-footer">
                                Rotating proxies give you a single IP and multiple ports. Upon connecting to one of the ports, your traffic will be automatically routed to a proxy IP.
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="row progress-form mt-md-5 text-center">

            <!-- progressbar -->
            <div class="progressbar-container">
                <div class="progressbar-item"><span>1</span></div>
                <div class="progressbar-item"><span>2</span></div>
                <div class="progressbar-item"><span>3</span></div>


                <div class="form-item">
                    <h5>Type how many proxies you need</h5>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, iste!</p>

                    <div class="quantity">
                        Type how many proxies you need




                        <input id='quantity-input' name='proxy-quantity' type="number" min="1" max="999999" step="1" value="1"
                               placeholder="#" >

                        <div class="input-tooltip">
                            You may purchase this amount automatically, but if you wish to talk to a sales representative about your needs, please email <a href="mailto:support@blazingseollc.com">support@blazingseollc.com</a> and we'll get right back to you!
                        </div>

                    </div>



                </div>
                <div class="form-item">
                    <h5>Choose duration</h5>

                    <div class="duration">
                        <div class="duration-item">
                            <label class="select-duration-container">
                                    <span class="select-text">
                                        1
                                    </span>

                                <span class="month">Month</span>
                                <span class="discount invisible">
                                       10% Off
                                   </span>
                                <input type="radio" name="duration" value="1" checked>
                                <span class="checkmark">
                                        <i class="fas fa-check"></i>
                                    </span>
                            </label>
                        </div>
                        <div class="duration-item">
                            <label class="select-duration-container">
                                    <span class="select-text">
                                        3
                                    </span>

                                <span class="month">Month</span>
                                <span class="discount">
                                       10% Off
                                   </span>
                                <input type="radio" name="duration" value="3">
                                <span class="checkmark">
                                       <i class="fas fa-check"></i>
                                    </span>
                            </label>
                        </div>
                        <div class="duration-item">
                            <label class="select-duration-container">
                                    <span class="select-text">
                                        6
                                    </span>

                                <span class="month">Month</span>

                                <span class="discount">
                                       10% Off
                                   </span>

                                <input type="radio" name="duration" value="6">
                                <span class="checkmark">
                                       <i class="fas fa-check"></i>
                                   </span>

                            </label>
                        </div>

                    </div>

                </div>
                <div class="form-item">
                    <h5>Confirm total</h5>


                    <div class="total">
                        <div class="left">
                            <span class="total-proxies">1</span> Proxies
                            <br>
                            <span class="total-month">1</span> Month
                        </div>
                        <div class="right">

                            <span class="total-money"><span class="inline">0</span>$</span>
                            Total
                        </div>
                    </div>

                    <button class="complete-order-btn" type="submit">Complete Order Now <i class="fas fa-arrow-circle-right"></i>

                    </button>



                </div>
            </div>

        </div>

    </div>


</div>
<!--pricing section end-->

<!--faq subsection start-->
<section id="faq-subsection" class="faq-subsection">
    <h3 class="section-title text-center"
        data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
        Frequently Asked Questions
    </h3>
    <h5 class="section-subtitle text-center"
        data-aos="fade-up" data-aos-delay="700" data-aos-duration="1200">
        New user? Let’s get started with these basics
    </h5>

    <div class="container">


        <?php $query = new WP_Query( 'cat=6' ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $i = 0?>





            <div class="row mt-5 filterDiv billing"
                 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="question">
                    <button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#<?php  preg_replace('/\s+/', "_", the_title());?>" aria-expanded="true" aria-controls="question-<?php echo $i;?>">

                        <span><?php the_title(); ?></span>
                    </button>
                    <div class="question-body collapse" id="question-<?php echo preg_replace('/\s+/', the_title());?>">

                        <?php $i +=1 ; ?>
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>



        <!---->
        <!--		<div class="row mt-5 filterDiv billing"-->
        <!--		     data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">-->
        <!--			<div class="question">-->
        <!--				<button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="question1">-->
        <!---->
        <!--					<span>How do I use the proxy tester in the dashboard?</span>-->
        <!--				</button>-->
        <!--				<div class="question-body collapse" id="question1">-->
        <!---->
        <!--					<div class="text">-->
        <!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!---->
        <!--		<div class="row mt-5 filterDiv billing"-->
        <!--		     data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">-->
        <!--			<div class="question">-->
        <!--				<button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="true" aria-controls="question2">-->
        <!---->
        <!--					<span>How do I use the proxy tester in the dashboard?</span>-->
        <!--				</button>-->
        <!--				<div class="question-body collapse" id="question2">-->
        <!---->
        <!--					<div class="text">-->
        <!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!---->
        <!--		<div class="row mt-5 filterDiv auth"-->
        <!--		     data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">-->
        <!--			<div class="question">-->
        <!--				<button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question3" aria-expanded="true" aria-controls="question3">-->
        <!---->
        <!--					<span>How do I use the proxy tester in the dashboard?</span>-->
        <!--				</button>-->
        <!--				<div class="question-body collapse" id="question3">-->
        <!---->
        <!--					<div class="text">-->
        <!--						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->

    </div>
    <a href="" class="see-more-link"
       data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
        See more
    </a>

</section>
<!--faq subsection end-->


<script>
    $('input:radio[name=pack]').change(function () {

        $('input:radio[name=pack]').each(function( index ) {
            $(this).parent().removeClass('pack-selected');

        });

        $(this).parent().addClass('pack-selected');

        refreshTotalPrice();
    });




    $("#quantity-input").on('keyup change click', function () {

        $('.total-proxies').html(this.value);

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

            $('.input-tooltip').css('opacity', '0');
            $('.input-tooltip').css('visibility', 'hidden');
        })



        refreshTotalPrice();
    });


    $('input[type=radio][name=duration]').change(function() {
        if (this.value == 1) {
            $('.total-month').html(this.value);
        }
        else if (this.value == 3) {
            $('.total-month').html(this.value);
        } else {
            $('.total-month').html(this.value);
        }


        refreshTotalPrice();
    });





    refreshTotalPrice();

    function refreshTotalPrice() {
        var total = 0;

        total = $("input:radio[name=pack]:checked").val() * $('#quantity-input').val() * $('.total-month').html();

        $(".total-money span").html(total);

    }



</script>




<?php get_footer();?>