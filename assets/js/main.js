var swiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 500, // Transition speed (in milliseconds)
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-custom-next',
        prevEl: '.swiper-button-custom-prev',
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    touchRatio: 2, // Increase touch sensitivity (default is 1)
    touchReleaseOnEdges: true, // Allows the slider to release when dragging at the edges
    longSwipesMs: 300, // Time needed to trigger swipe
    longSwipesRatio: 0.1, // Ratio to trigger swipe (lower = easier to swipe)
    allowTouchMove: true, // Allow touch move initially

    on: {
        touchStart: function () {
            if (swiper.allowTouchMove) {
                document.querySelector('.swiper-container').classList.add('grabbing');
            }
        },
        touchEnd: function () {
            document.querySelector('.swiper-container').classList.remove('grabbing');
        },
        transitionStart: function () {
            swiper.allowTouchMove = false; // Disable touch move during transition
        },
        transitionEnd: function () {
            swiper.allowTouchMove = true; // Re-enable touch move after transition
        },
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const currentUrl = window.location.href; // Get the current URL
    const languageMatch = currentUrl.match(/\/(uz|ru|en)\//); // Match the language in the URL
    const currentLanguage = languageMatch ? languageMatch[1] : 'en'; // Default to 'en' if no match is found

    // Set the dropdown title based on the current language
    const dropdownTitle = document.getElementById('dropdownMenuLink');
    const dropdownTitleMobile = document.getElementById('dropdownMenuLinkMobile');
    switch (currentLanguage) {
        case 'uz':
            dropdownTitle.textContent = 'Uzbek';
            dropdownTitleMobile.textContent = 'Uzbek';
            break;
        case 'ru':
            dropdownTitle.textContent = 'Русский';
            dropdownTitleMobile.textContent = 'Русский';
            break;
        case 'en':
            dropdownTitle.textContent = 'English';
            dropdownTitleMobile.textContent = 'English';
            break;
        default:
            dropdownTitle.textContent = 'Select Language';
            break;
    }

    // Set the active class for the current language in the dropdown
    const languageItems = document.querySelectorAll('.dropdown-item');
    languageItems.forEach(function(item) {
        if (item.getAttribute('href').includes(`/${currentLanguage}/`)) {
            item.classList.add('active');
        }
    });
});

function switchLanguage(language) {
    const currentUrl = window.location.href; // Get the current URL
    const newUrl = currentUrl.replace(/\/(uz|ru|en)\//, `/${language}/`); // Replace the current language in the URL
    window.location.href = newUrl; // Redirect to the new URL
}

// Add event listeners to dropdown items
document.querySelectorAll('.dropdown-item').forEach(function(item) {
    item.addEventListener('click', function(event) {
        // Check if the clicked item has the 'contact-link' class
        if (!item.classList.contains('contact-link')) {
            event.preventDefault(); // Prevent the default link behavior only if it's not a contact link
            const language = item.getAttribute('href').match(/\/(uz|ru|en)\//)[1];
            switchLanguage(language); // Call the switchLanguage function
        }
    });
});