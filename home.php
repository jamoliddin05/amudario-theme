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
        <div class="container d-none d-md-flex">
            <a href="<?= home_url() ?>">
                <img class="logo-img" src="<?= $assets_url ?>/assets/img/logo.png" alt="logo"/>
            </a>

            <div class="contact-buttons">
                <a href="mailto:info@amudar.io" class="button primary">info@amudar.io</a>
                <a href="tel:+998900350225" class="button primary m-2">+998 90 035-02-25</a>
            </div>

            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu dropdown-custom" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/uz/">Uzbek</a>
                    <a class="dropdown-item" href="/ru/">Русский</a>
                    <a class="dropdown-item" href="/en/">English</a>
                </div>
            </div>
        </div>

        <div class="container d-block d-md-none mobile-menu">
            <div class="mobile-logo mb-3">
                <a href="<?= home_url() ?>">
                    <img class="logo-img" src="<?= $assets_url ?>/assets/img/logo.png" alt="logo"/>
                </a>
            </div>

            <div class="sticky-buttons d-flex justify-content-between">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLinkMobileContact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Алока</a>
                    <div class="dropdown-menu dropdown-custom" aria-labelledby="dropdownMenuLinkMobileContact">
                        <a href="mailto:info@amudar.io" class="dropdown-item contact-link">info@amudar.io</a>
                        <a href="tel:+998900350225" class="dropdown-item contact-link">+998 90 035-02-25</a>
                    </div>
                </div>

                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLinkMobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu dropdown-custom" aria-labelledby="dropdownMenuLinkMobile">
                        <a class="dropdown-item" href="/uz/">Uzbek</a>
                        <a class="dropdown-item" href="/ru/">Русский</a>
                        <a class="dropdown-item" href="/en/">English</a>
                    </div>
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
            <div class="swiper-slide">
                <img src="<?= $slider_fields['image-' . $i] ?>" alt="Slide 1">
                <div class="centered-paragraph"><?= $slider_fields['content-' . $i] ?></div>
            </div>
        <?php } ?>
        </div>

        <div class="swiper-button-custom-prev d-none d-lg-block"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="swiper-button-custom-next d-none d-lg-block"><i class="fa-solid fa-arrow-right"></i></div>
    </div>
</section>

<section id="about_h" class="p_3">
    <?php $first_icon_fields = get_group_by_name('first-icons-section'); ?>
    <div class="container-xl">
        <div class="row about_h1 text-center mb-4">
            <div class="col-md-12">
                <span class="mt-2 section-title"><?= $first_icon_fields['title-first-icons'] ?></span>
            </div>
        </div>
        <div class="row about_h2">
            <?php
            for ($i = 1; $i <= 3; $i++) {
                echo $first_icon_fields['icon-html-' . $i];
            }
            ?>
        </div>
        <div class="row about_h2 justify-content-around">
            <?php for ($i = 4; $i <= 5; $i++) {
                echo $first_icon_fields['icon-html-' . $i];
            }
            ?>
        </div>
    </div>
</section>

<section id="about_h_2" class="p_3">
    <?php $second_icon_fields = get_group_by_name('second-icons-section'); ?>
    <div class="container-xl">
        <div class="row about_h1 text-center mb-4 pt-4">
            <div class="col-md-12">
                <span class="mt-2 section-title"><?= $second_icon_fields['title-second-icons'] ?></span>
            </div>
        </div>
        <div class="row about_h2">
            <?php
            for ($i = 1; $i <= 3; $i++) {
                echo $second_icon_fields['icon-html-second-' . $i];
            }
            ?>
        </div>
    </div>
</section>

<section class="main-content">
    <?php
        $first_section_fields = get_group_by_name('first-section');
    ?>
    <div class="container my-5">
        <div class="row">
            <!-- Text Content -->
            <div class="col-md-6 p-5">
                <?= $first_section_fields['content'] ?>
            </div>
            <!-- Image Content -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="<?= $first_section_fields['first-image'] ?>" alt="Meteostation Dashboard" class="img-fluid rounded">
                    </div>
                    <div class="col-12">
                        <img src="<?= $first_section_fields['second-image'] ?>" alt="Meteostation Graphs" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content p-4" style="background-color: rgb(227, 242, 253);">
    <?php
    $second_section_fields = get_group_by_name('second-section');
    ?>
    <div class="container my-5">
        <div class="row">
            <!-- Image Content -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="<?= $second_section_fields['first-image-second-section'] ?>" alt="Meteostation Dashboard" class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <!-- Text Content -->
            <div class="col-md-6 p-5">
                <?= $second_section_fields['content-second-section'] ?>
            </div>
        </div>
    </div>
</section>

<section class="main-content">
    <?php
    $third_section_fields = get_group_by_name('third-section');
    ?>
    <div class="container my-5">
        <div class="row">
            <!-- Text Content -->
            <div class="col-md-6 p-5">
                <?= $third_section_fields['content-third-section'] ?>
            </div>
            <!-- Image Content -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="<?= $third_section_fields['first-image-third-section'] ?>" alt="Meteostation Dashboard" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content p-4" style="background-color: rgb(241, 248, 233);">
    <?php
    $fourth_section_fields = get_group_by_name('fourth-section');
    ?>
    <div class="container my-5">
        <div class="row">
            <!-- Image Content -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="<?= $fourth_section_fields['fourth-section-image'] ?>" alt="Meteostation Dashboard" class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <!-- Text Content -->
            <div class="col-md-6 p-5">
                <?= $fourth_section_fields['fourth-section-title'] ?>
            </div>
        </div>
    </div>
</section>

<section class="p-5" style="background-color: rgb(40, 40, 40);">
    <div class="col-md-12">
        <span class="mb-4 section-title" style="color: white">ФОТОГАЛЕРЕЯ</span>
    </div>
    <div class="carousel" data-flickity='{ "lazyLoad": 2, "wrapAround": true, "fullscreen": true}'>
        <?php
        $args = array(
            'post_type'      => 'post', // Post type
            'category_name'  => 'gallery',     // Number of posts to retrieve
        );

        // Create a new instance of WP_Query
        $gallery_posts = new WP_Query($args);

        while ($gallery_posts->have_posts()) : $gallery_posts->the_post();
            $photo = get_field('gallery-image'); // Ensure ACF (Advanced Custom Fields) plugin is active
            ?>
            <img class="carousel-image"
                 data-flickity-lazyload="<?= $photo ?>" />
        <?php endwhile; ?>
    </div>
</section>

<section class="footer">
    <div class="container text-center p-5">
        <span>БУЮРТМА БЕРИНГ!</span>
        <p>Буюртма бериш ва cизни қизиқтирган саволлар учун:</p>
        <div class="contact-buttons">
            <a href="mailto:info@amudar.io" class="button primary">info@amudar.io</a>
            <a href="tel:+998900350225" class="button primary m-2">+998 90 035-02-25</a>
        </div>
    </div>
</section>

<section class="post-footer">
    <div class="container p-2 text-center text-md-start">
        <span>2024 © Amudar.io</span>
    </div>
</section>
</body>

<?php
get_footer();
?>
