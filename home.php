<?php
/**
 * Template name: -Home Page-
 */

get_header();
$assets_url = get_template_directory_uri();
?>

<body>

<section id="header">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow_box" id="navbar_sticky">
        <div class="container">
            <a href="<?= home_url() ?>">
                <img class="logo-img" src="<?= $assets_url ?>/assets/img/logo.png" alt="logo"/>
            </a>

            <div class="dropdown show custom-margin-dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu dropdown-custom" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/uz/">Uzbek</a>
                    <a class="dropdown-item" href="/ru/">Русский</a>
                    <a class="dropdown-item" href="/en/">English</a>
                </div>
            </div>
        </div>
    </nav>
</section>

<section id="slider-area">
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php for ($i = 1; $i <= 2; $i++) { ?>
            <div class="swiper-slide">
                <img src="<?= get_field('slider_image_' . $i) ?>" alt="Slide 1">
                <div class="centered-paragraph"><?= get_field('slider_text_' . $i) ?></div>
            </div>
        <?php } ?>
        </div>

        <!-- Custom navigation buttons with Font Awesome icons -->
        <div class="swiper-button-custom-prev d-none d-lg-block"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="swiper-button-custom-next d-none d-lg-block"><i class="fa-solid fa-arrow-right"></i></div>
    </div>
</section>

<section id="about_h" class="p_3">
    <div class="container-xl">
        <div class="row about_h1 text-center mb-4">
            <div class="col-md-12">
                <span class="col_green fs-1 lh-1"><i class="fa fa-recycle"></i></span>
                <h3 class="mt-2">Welcome to GoGreen</h3>
                <h6 class="mt-3">MORE ABOUT US</h6>
                <p class="mb-0 mt-3">
                    GoGreen is a Family-owned company located in San Diego, California proudly serving <br> individuals
                    and businesses in Southern California with their computers and electronics <br> upgrade needs,
                    accepting computers and electronics waste in any conditions.</p>
            </div>
        </div>
        <div class="row about_h2">
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-leaf"></i></span>
                    </div>
                    <div class="about_h2i2 p-5 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4"><a href="#">Corporate Services</a></h5>
                        <p class="mb-0">Guaranteed that all of your universal waste management is performed safely and
                            responsibly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-inbox"></i></span>
                    </div>
                    <div class="about_h2i2 p-5 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4"><a href="#">Convenient Pickup</a></h5>
                        <p class="mb-0">We offer business pickup services to safely recycle your electronics in a safe
                            manner.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-calendar"></i></span>
                    </div>
                    <div class="about_h2i2 p-5 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4"><a href="#">E-waste Events</a></h5>
                        <p class="mb-0">We work with non-profits, businesses, and other organizations to host community
                            e-waste events.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mission">
    <div class="container-fluid px-0">
        <div class="row mission_1 mx-0">
            <div class="col-md-6 p-0">
                <div class="mission_1l">
                    <div class="grid clearfix">
                        <figure class="effect-jazz mb-0">
                            <a href="#"><img src="img/6-1.jpg" class="w-100" alt="abc"></a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="mission_1r p-5">
                    <span class="col_green fs-1 lh-1"><i class="fa fa-recycle"></i></span>
                    <h3 class="mt-2">Our Mission</h3>
                    <h6 class="mt-3 mb-3">ABOUT US</h6>
                    <p>Our mission is to keep as much electronic waste from ending up in local landfills as we can</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-check-circle me-2"></i> REDUCING WASTE
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p class="mb-0">Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum
                                        dolor sit amet ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-check-circle me-2"></i> REDUSE PROGRAM
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum
                                        dolor sit amet ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <i class="fa fa-check-circle me-2"></i> RECYCLE MORE
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum
                                        dolor sit amet ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="p_3 bg-light">
    <div class="container-xl">
        <div class="row about_h1 text-center mb-4">
            <div class="col-md-12">
                <span class="col_green fs-1 lh-1"><i class="fa fa-recycle"></i></span>
                <h3 class="mt-2">FAQ</h3>
                <h6 class="mt-3 mb-0">FREQUENTLY ASKED QUESTIONS</h6>
            </div>
        </div>
        <div class="row about_h2">
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-question"></i></span>
                    </div>
                    <div class="about_h2i2 p-5 px-4 rounded-3 border_1 bg-white">
                        <h5 class="mb-3 mt-4"><a href="#">Consetetur sadipscing elitr, sed diam nonumy?</a></h5>
                        <p class="mb-0">Lorem ipsum dolamet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-question"></i></span>
                    </div>
                    <div class="about_h2i2 p-5 px-4 rounded-3 border_1 bg-white">
                        <h5 class="mb-3 mt-4"><a href="#">Eirmod tempor invidunt ut labore et?</a></h5>
                        <p class="mb-0">Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                            et accusam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-question"></i></span>
                    </div>
                    <div class="about_h2i2 p-5 px-4 rounded-3 border_1 bg-white">
                        <h5 class="mb-3 mt-4"><a href="#">Dolore magna aquyam erat, sed diam voluptua?</a></h5>
                        <p class="mb-0">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sched_1 mt-4 text-center">
            <div class="col-md-12">
                <div class="sched_1i">
                    <h6 class="mb-0"><a class="button_1" href="#">TO FAQ PAGE</a></h6>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="subs" class="pt-5 pb-5 bg_green">
    <div class="container-xl">
        <div class="row center_h1">
            <div class="col-md-9">
                <div class="center_h1l">
                    <div class="center_h1li row">
                        <div class="col-md-6">
                            <div class="center_h1lil">
                                <div class="center_h1lili row">
                                    <div class="col-md-2">
                                        <div class="center_h1lilil">
                                            <span class="d-inline-block bg-white col_green rounded-circle text-center fs-3"><i
                                                        class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="center_h1lilir">
                                            <h5 class="text-white">+(123) 456-7890 </h5>
                                            <h6 class="mb-0 text-light font_14">110 LOREM CIRCLE, TAN FIEGO, DA</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="center_h1lil">
                                <div class="center_h1lili row">
                                    <div class="col-md-2">
                                        <div class="center_h1lilil">
                                            <span class="d-inline-block bg-white col_green rounded-circle text-center fs-3"><i
                                                        class="fa fa-clock-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="center_h1lilir">
                                            <h5 class="text-white">Open Hours</h5>
                                            <h6 class="mb-0 text-light font_14">WEEKDAYS 9.00-17.00, SAT: CLOSED</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="center_h1r text-end">
                    <div class="input-group bg-white">
                        <input type="text" class="form-control border-0" placeholder="Email Address">
                        <span class="input-group-btn">
					<button class="btn btn-primary col_green bg-transparent rounded-0 p-3 px-4 border-0" type="button">
						<i class="fa fa-pencil"></i> </button>
				</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery">
    <div class="container-fluid p-0">
        <div class="contact_2 row mx-0">
            <div class="col-md-12 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788"
                        height="400" style="border:0; width:100%;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<section id="footer" class="p_3">
    <div class="container-xl">
        <div class="footer_1 row">
            <div class="col-md-4">
                <div class="footer_1i">
                    <h4 class="mb-4"><a class="text-white" href="index.html"><i
                                    class="fa fa-recycle me-1 col_green align-middle"></i> Recycling</a></h4>
                    <p class="text-white-50">Family-owned company from San Diego proudly serving individuals and
                        businesses in Southern California.</p>
                    <h6 class="text-light"><i class="fa fa-map-marker col_green me-1"></i> 120 Lorem Circle, Tan Porta,
                        DA</h6>
                    <h6 class="mt-3"><i class="fa fa-phone col_green me-1"></i> <a class="text-light" href="#">+123 4567
                            890</a></h6>
                    <h6 class="mt-3 mb-0"><i class="fa fa-envelope col_green me-1"></i> <a class="text-light" href="#">info@gmail.com</a>
                    </h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_1i row">
                    <div class="col-md-6"><img src="img/35-3.jpg" class="w-100"></div>
                    <div class="col-md-6"><img src="img/35-1.jpg" class="w-100"></div>
                    <div class="col-md-6"><img src="img/35-2.jpg" class="w-100"></div>
                    <div class="col-md-6"><img src="img/35-4.jpg" class="w-100"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_1i">
                    <h4 class="mb-4 text-white">Recent News</h4>
                    <p class="text-white-50 mb-2">Chuck alcatra short ribs strip steak shoulder jowl</p>
                    <h6 class="col_green">July 20, 2022</h6>
                    <p class="text-white-50 mb-2 mt-3">Tail doner short ribs meatball jowl pork loin biltong</p>
                    <h6 class="col_green">July 22, 2022</h6>
                    <p class="text-white-50 mb-2 mt-3">Short loin pork chop kielbasa chicken bacon meatloaf</p>
                    <h6 class="col_green mb-0">July 26, 2022</h6>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

<?php
get_footer();
?>
