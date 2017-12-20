function initiateMainSlider() {
    $('.main-slider').owlCarousel({
        margin: 0,
        nav: false,
        dots: true,
        dotsContainer: '.main-slider__dots',
        responsive: {
            0: {
                items: 1
            }
        }
    })
}

document.addEventListener('DOMContentLoaded', initiateMainSlider);
