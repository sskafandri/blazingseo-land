<?php get_header();?>

    <!--faq welcome section start-->
    <section id="FAQ-welcome" class="faq-welcome-section">
        <h1 class="section-title text-center"
            data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
            Frequently Asked Questions
        </h1>
    </section>
    <!--faq welcome section end-->

    <!--faq content start-->
    <section id="faq-content" class="faq-content-section">
        <div class="container">
            <div class="grid-container  text-center" id="myBtnContainer">

                <button class="btn" onclick="filterSelection('billing');"

                        data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1200">

                    <!-- <img src="img/faq/billing.png" alt="billing"> -->
                    <i class="fas fa-calculator"></i>
                    <div>Billing</div>

                </button>
                <button class="btn" onclick="filterSelection('auth');"
                        data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1200">

                    <!-- <img src="img/faq/Authorization.png" alt="auth"> -->
                    <i class="fas fa-unlock-alt"></i>
                    <div>Authorization <br>/ Ports</div>

                </button>
                <button class="btn" onclick="filterSelection('all');">

                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-support.png" width="50%" alt="all">
                    <div>All FAQs</div></a>

                </button>
                <button class="btn" onclick="filterSelection('proxies');"
                        data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1200">

                    <!-- <img src="img/faq/Proxies.png" alt="proxies"> -->
                    <i class="fas fa-random"></i>
                    <div>Proxies</div>

                </button>
                <button class="btn" onclick="filterSelection('socks');"
                        data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1200">

                    <!-- <img src="img/faq/Socks.png" alt="socks"> -->
                    <i class="fas fa-server"></i>
                    <div>SOCKS</div>

                </button>
            </div>

            <div class="questions-wrap">

                <div  class="row mt-md-5 mt-3 filterDiv billing fadeInUp">
                    <div class="question">
                        <button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="question1">

                            <span>How do I use the proxy tester in the dashboard?</span>
                        </button>
                        <div class="question-body collapse" id="question1">

                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="row mt-md-5 mt-3 filterDiv billing">
                    <div class="question">
                        <button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="true" aria-controls="question2">

                            <span>How do I use the proxy tester in the dashboard?</span>
                        </button>
                        <div class="question-body collapse" id="question2">

                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="row mt-md-5 mt-3 filterDiv auth">
                    <div class="question" >
                        <button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question3" aria-expanded="true" aria-controls="question3">

                            <span>How do I use the proxy tester in the dashboard?</span>
                        </button>
                        <div class="question-body collapse" id="question3">

                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="row mt-md-5 mt-3 filterDiv proxies">
                    <div class="question proxies" >
                        <button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question4" aria-expanded="true" aria-controls="question4">

                            <span>How do I use the proxy tester in the dashboard?</span>
                        </button>
                        <div class="question-body collapse" id="question4">

                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-md-5 mt-3 filterDiv socks">
                    <div class="question" >
                        <button class="question-btn collapsed" type="button" data-toggle="collapse" data-target="#question5" aria-expanded="true" aria-controls="question5">

                            <span>How do I use the proxy tester in the dashboard?</span>
                        </button>
                        <div class="question-body collapse" id="question5">

                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam animi architecto assumenda consequuntur dolorum error esse ex fugiat illum inventore ipsa magni maxime praesentium quia recusandae repellat sed suscipit temporibus ullam, vero voluptatem voluptatum. Assumenda debitis dolorem harum minima, obcaecati omnis qui reiciendis totam veritatis voluptatibus. Dolores, molestias!
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!--faq content end-->

    <script>
        filterSelection("all");
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show animated bounceOutLeft");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show animated fadeInDown");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        };

    </script>


<?php the_content(); ?>

<?php get_footer();?>