function initiateMatchSlider() {
    $('.match-slider').owlCarousel({
        margin:40,
        nav:true,
        dots: false,
        navContainer: '.match-slider__nav',
        navText: ['', ''],
        responsive:{
            0:{
                items:5
            }
        }
    })
}

window.addEventListener('load', initiateMatchSlider);
