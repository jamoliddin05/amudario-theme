<?php $assets_url = get_template_directory_uri(); ?>

<script src="<?= $assets_url ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?= $assets_url ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= $assets_url ?>/assets/js/main.js?v=1"></script>
<script src="<?= $assets_url ?>/assets/js/flickity.pkgd.min.js"></script>
<script src="<?= $assets_url ?>/assets/js/fullscreen.js"></script>
<script src="<?= $assets_url ?>/assets/js/carousel.js?v=1"></script>
<script>
    window.onscroll = function() {myFunction()};
    var navbar_sticky = document.getElementById("navbar_sticky");
    var sticky = navbar_sticky.offsetTop;
    var navbar_height = document.querySelector('.navbar').offsetHeight;
    function myFunction() {
        if (window.pageYOffset >= sticky + navbar_height) {
            navbar_sticky.classList.add("sticky")
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            navbar_sticky.classList.remove("sticky");
            document.body.style.paddingTop = '0'
        }
    }
</script>

</html>