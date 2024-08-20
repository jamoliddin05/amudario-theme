// Select the carousel and the sticky menu by its ID
const carousel = document.querySelector('.carousel');
const stickyMenu = document.getElementById('navbar_sticky');

// Function to check if the carousel is in fullscreen mode
function checkFullscreen() {
    if (carousel.classList.contains('is-fullscreen')) {
        stickyMenu.style.display = 'none';
    } else {
        stickyMenu.style.display = 'block';
    }
}

// Observe class changes in the carousel element
const observer = new MutationObserver(checkFullscreen);

// Start observing the carousel element for class changes
observer.observe(carousel, {
    attributes: true, // Look for attribute changes
    attributeFilter: ['class'] // Only watch for class attribute changes
});

// Initial check in case the page loads with the carousel already in fullscreen
checkFullscreen();
