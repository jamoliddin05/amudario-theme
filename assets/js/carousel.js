var carousel = document.querySelector('.carousel');

function initializeFlickity() {
    var flkty = new Flickity(carousel, {
        lazyLoad: 10,
        wrapAround: true,
        cellSelector: '.carousel-image',
        freeScroll: true,
        pageDots: false
    });
    return flkty;
}

// Initialize Flickity
var flkty = initializeFlickity();

var lightbox = document.getElementById('lightbox');
var lightboxImg = lightbox.querySelector('img');

flkty.on('staticClick', function(event, pointer, cellElement, cellIndex) {
    if (!cellElement) {
        return;
    }

    var prevClickedCell = carousel.querySelector('.is-clicked');
    if (prevClickedCell) {
        prevClickedCell.classList.remove('is-clicked');
    }
    cellElement.classList.add('is-clicked');

    // Open Lightbox with the clicked image
    var imgSrc = cellElement.getAttribute('src');
    lightboxImg.src = imgSrc;
    lightbox.classList.add('active');
});

// Close Lightbox when clicked outside the image
lightbox.addEventListener('click', function(e) {
    if (e.target !== lightboxImg) {
        lightbox.classList.remove('active');
    }
});
