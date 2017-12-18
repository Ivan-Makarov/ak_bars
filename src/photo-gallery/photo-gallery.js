function activateGallery() {
    const openGalleryBtns = [...document.querySelectorAll('.gallery__link')]
    const album = document.querySelector('.photo-album');

    function clear(element) {
        while (element.firstChild) {
            element.removeChild(element.firstChild)
        }
    }

    openGalleryBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            clear(album);
            const album_items_links = btn.dataset.items.split(', ');
            const album_items = document.createDocumentFragment();
            album_items_links.forEach(item => {
                const image = document.createElement('img');
                image.src = item;
                const image_container = document.createElement('article');
                image_container.classList.add('photo-album__item');
                image_container.appendChild(image)
                album_items.appendChild(image_container)
            })
            album.appendChild(album_items);
            destroyAlbum();
            launchAlbum();
        });
    });

    function destroyAlbum() {
        $('.photo-album').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
        $('.photo-album').find('.owl-stage-outer').children().unwrap();
    }

    function launchAlbum() {
        $('.photo-album').addClass('owl-carousel')
        $('.photo-album').parent().append('<section class="photo-album__nav container-flex container-flex_sb"></section>')
        $('.photo-album').owlCarousel({
            margin: 0,
            nav: true,
            dots: false,
            navContainer: '.photo-album__nav',
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                }
            }
        })
    }
}

document.addEventListener('DOMContentLoaded', activateGallery);
