<?php
/**
 * Template name: -Home Page-
 */

get_header();
$assets_url = get_template_directory_uri();
?>

<body>

<section id="header">
    <nav class="navbar pt-4 navbar-expand-md navbar-light bg-white shadow_box" id="navbar_sticky">
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
        <?php $slider_fields = get_group_by_name('slider-content'); ?>
        <?php for ($i = 1; $i <= 2; $i++) { ?>
                <?php $img_url = $slider_fields['image-' . $i] ?? "";
                      $text_content = $slider_fields['content-' . $i] ?? "No text"; ?>
            <div class="swiper-slide">
                <img src="<?= $img_url ?>" alt="Slide 1">
                <div class="centered-paragraph"><?= $text_content ?></div>
            </div>
        <?php } ?>
        </div>

        <div class="swiper-button-custom-prev d-none d-lg-block"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="swiper-button-custom-next d-none d-lg-block"><i class="fa-solid fa-arrow-right"></i></div>
    </div>
</section>

<section id="about_h" class="p_3">
    <div class="container-xl">
        <div class="row about_h1 text-center mb-4">
            <div class="col-md-12">
                <span class="mt-2 section-title">ҚИШЛОҚ ХЎЖАЛИГИ СОХАСИДАГИ АЙРИМ МУАММОЛАР</span>
            </div>
        </div>
        <div class="row about_h2">
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2">
                            <i class="fa fa-cloud"></i>
                        </span>
                    </div>
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">Corporate Services</h5>
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
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">Convenient Pickup</h5>
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
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">E-waste Events</h5>
                        <p class="mb-0">We work with non-profits, businesses, and other organizations to host community
                            e-waste events.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_h2 justify-content-around">
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2">
                            <i class="fa fa-cloud"></i>
                        </span>
                    </div>
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">Corporate Services</h5>
                        <p class="mb-0">Guaranteed that all of your universal waste management is performed safely and
                            responsibly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1 position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2"><i
                                    class="fa fa-inbox"></i></span>
                    </div>
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">Convenient Pickup</h5>
                        <p class="mb-0">We offer business pickup services to safely recycle your electronics in a safe
                            manner.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about_h_2" class="p_3">
    <div class="container-xl">
        <div class="row about_h1 text-center mb-4 pt-4">
            <div class="col-md-12">
                <span class="mt-2 section-title">ҚИШЛОҚ ХЎЖАЛИГИ СОХАСИДАГИ АЙРИМ МУАММОЛАР</span>
            </div>
        </div>
        <div class="row about_h2">
            <div class="col-md-4">
                <div class="about_h2i text-center position-relative">
                    <div class="about_h2i1  position-absolute w-100">
                        <span class="d-inline-block bg_green text-white rounded-circle text-center fs-2">
                            <i class="fa fa-cloud"></i>
                        </span>
                    </div>
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">Corporate Services</h5>
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
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">Convenient Pickup</h5>
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
                    <div class="about_h2i2 p-2 px-4 rounded-3 border_1">
                        <h5 class="mb-3 mt-4">E-waste Events</h5>
                        <p class="mb-0">We work with non-profits, businesses, and other organizations to host community
                            e-waste events.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-5">
        <div class="row">
            <!-- Text Content -->
            <div class="col-md-6">
                <h5 class="fw-bold">МЕТЕОСТАНЦИЯНИНГ ОНЛАЙН ТАБЛОСИ</h5>
                <ul>
                    <li class="mb-5 mt-4">* Метеостанция ёрдамида oлинган маълумотлар</li>
                    <li class="mb-5">* Бир ҳафталик об-ҳаво ва бошқа агрометеорологик башоратлар</li>
                    <li class="mb-5">* Агрономлар учун керакли статистик кўрсаткичлар</li>
                    <li class="mb-5">* 30 дан ошиқ касалликлар ва зараркунандалар учун башоратлар</li>
                </ul>
            </div>
            <!-- Image Content -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="image-top.png" alt="Meteostation Dashboard" class="img-fluid rounded">
                    </div>
                    <div class="col-12">
                        <img src="image-bottom.png" alt="Meteostation Graphs" class="img-fluid rounded">
                    </div>
                </div>
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
