const asideHoverClose = document.querySelector('.aside-hover-close');

const toggleBodyOverflow = (isHovering) => {
    if (isHovering) {
        document.body.classList.add('no-scroll');

        if (asideHoverClose) {
            asideHoverClose.style.display = "block";
        }
    } else {
        document.body.classList.remove('no-scroll');
        if (asideHoverClose) {
            asideHoverClose.style.display = "none";
        }
    }
};

const asideSubmenuLink = document.querySelector('.aside-submenu__link');
        if (asideSubmenuLink) {
            asideSubmenuLink.addEventListener('click', () => {
                document.body.classList.remove('no-scroll');
        });
}


document.addEventListener('DOMContentLoaded', () => {
    // Инициализация всех слайдеров Swiper
    const initializeSwipers = () => {
        new Swiper('.slider-hero', {
            spaceBetween: 30,
            loop: false,
            speed: 2000,
            slidesPerView: 1,
            navigation: {
                nextEl: ".slider-hero-right",
                prevEl: ".slider-hero-left",
            },
        });

        new Swiper('.slider-hero-2', {
            spaceBetween: 16,
            loop: false,
            speed: 2000,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: ".slider-hero-right-2",
                prevEl: ".slider-hero-left-2",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.25,
                },
                768: {
                    slidesPerView: 2.25,
                },
                991: {
                    slidesPerView: 3,
                },
            },
        });

        new Swiper('.slider-popular', {
            spaceBetween: 16,
            loop: false,
            speed: 2000,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: ".slider-popular-right",
                prevEl: ".slider-popular-left",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.25,
                },
                768: {
                    slidesPerView: 2.25,
                },
                991: {
                    slidesPerView: 4,
                },
            },
        });

        const swiper_advantages = new Swiper('.swiper-advantages', {
            spaceBetween: 16,
            loop: false,
            breakpoints: {
                0: {
                    slidesPerView: 1.25,
                },
                768: {
                    slidesPerView: 3.25,
                },
                991: {
                    slidesPerView: 4.1,
                },
            },
        });

        const swiper_works = new Swiper('.swiper-works', {
            spaceBetween: 16,
            loop: false,
            breakpoints: {
                0: {
                    slidesPerView: 1.25,
                },
                768: {
                    slidesPerView: 3.25,
                },
                991: {
                    slidesPerView: 4.1,
                },
            },
        });

        const swiper_reviews = new Swiper('.swiper-reviews', {
            spaceBetween: 16,
            loop: false,
            breakpoints: {
                0: {
                    slidesPerView: 1.25,
                },
                768: {
                    slidesPerView: 3.25,
                },
                991: {
                    slidesPerView: 4.1,
                },
            },
        });

        const swiper_product = new Swiper('.swiper-product', {
            spaceBetween: 16,
            loop: false,
            breakpoints: {
                0: {
                    slidesPerView: 2.5,
                },
                991: {
                    slidesPerView: 5,
                },
            },
        });

        const galleryThumbs = new Swiper(".gallery-thumbs", {
            centeredSlides: true,
            centeredSlidesBounds: true,
            direction: "horizontal",
            spaceBetween: 16,
            slidesPerView: 3,
            freeMode: false,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            watchOverflow: true,
            breakpoints: {
                480: {
                    direction: "vertical",
                    slidesPerView: 4,
                }
            },
        });

        const galleryTop = new Swiper(".gallery-top", {
            direction: "horizontal",
            spaceBetween: 16,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            a11y: {
                prevSlideMessage: "Previous slide",
                nextSlideMessage: "Next slide",
            },
            keyboard: {
                enabled: true,
            },
            thumbs: {
                swiper: galleryThumbs
            },
        });

        galleryTop.on("slideChangeTransitionStart", function () {
            galleryThumbs.slideTo(galleryTop.activeIndex);
        });

        galleryThumbs.on("transitionStart", function () {
            galleryTop.slideTo(galleryThumbs.activeIndex);
        });
    };

    

    const initializeGallerySwiper = () => {
        const $lgSwiper = document.getElementById('lg-swipper');
        if (!$lgSwiper) return;

        const swiper4 = new Swiper(".gallery-swiper", {
            navigation: {
                nextEl: ".btn-gallery.swiper-button-next",
                prevEl: ".btn-gallery.swiper-button-prev",
            },
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination-4",
                type: "fraction",
            },
            breakpoints: {
                567: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 4,
                },
            },
            on: {
                init: function () {
                    const lg = lightGallery($lgSwiper, {
                        plugins: [lgZoom, lgThumbnail],
                        closable: true,
                        speed: 500,
                        controls: true,
                        download: false,
                        zoom: true,
                        actualSize: true,
                        thumbnail: false,
                    });
                    $lgSwiper.addEventListener('lgBeforeClose', () => {
                        swiper4.slideTo(lg.index, 0)
                    });
                },
            }
        });
    };

    const tabLinks = document.querySelectorAll('.tab-link');
    const tabs = document.querySelectorAll('.tab');

    function activateTab(tabId) {
        tabs.forEach(tab => tab.classList.remove('active'));
        tabLinks.forEach(link => link.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
        document.querySelector(`.tab-link[data-tab="${tabId}"]`).classList.add('active');
    }

    tabLinks.forEach(link => {
        link.addEventListener('click', () => {
            const tabId = link.getAttribute('data-tab');
            activateTab(tabId);
        });
    });

    if (tabLinks.length > 0) {
        activateTab(tabLinks[0].getAttribute('data-tab'));
    }

    const updateLogoClass = () => {
        const asideBlock = document.querySelector('.aside-block');
        const logo = document.querySelector('.logo-mini');
        const headerTop = document.querySelector('.header-top');
        const headerBottom = document.querySelector('.header-bottom');
        const btnMainMenu = document.querySelector('.button-main-menu');
        const closeBtnMainMenu = document.querySelector('.button-close-menu');
        const btnCatalog = document.querySelector('.button-catalog');
        
        if (window.matchMedia("(max-width: 991px)").matches) {
            asideBlock.classList.add('hidden');
        }

        btnMainMenu.addEventListener('click', () => {
            headerBottom.classList.toggle('active');
        });

        btnCatalog.addEventListener('click', () => {
            asideBlock.classList.toggle('hidden');
        });

        if (closeBtnMainMenu) {
            closeBtnMainMenu.addEventListener('click', () => {
                headerBottom.classList.remove('active');
            });
        }
    

        if (asideBlock && logo && headerTop && headerBottom) {
            if (asideBlock.classList.contains('hidden')) {
                logo.style.display = 'block';
                headerTop.style.padding = '0.875rem 0';
                headerBottom.style.padding = '0.5rem 0';
            } else {
                logo.style.display = 'none';
                headerTop.style.padding = '0.875rem 2rem';
                headerBottom.style.padding = '0.5rem 2rem';
            }
        } else {
            console.warn('One or more elements not found.');
        }
    };

    const initializeModal = () => {
        const modal = document.getElementById('modal');
        const overlay = document.getElementById('overlay');
        const openModalBtns = document.querySelectorAll('.button.cart');
        const closeModalBtn = document.getElementById('close-btn');

        // if (openModalBtn && modal) {
        //     openModalBtn.addEventListener('click', () => {
        //         modal.classList.add('show');
        //         overlay.classList.add('show');
        //     });
        // }
        openModalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modal.classList.add('show');
                overlay.classList.add('show');
            });
        });

        if (closeModalBtn && modal) {
            closeModalBtn.addEventListener('click', () => {
                modal.classList.remove('show');
                overlay.classList.remove('show');
            });
        }

        if (modal) {
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.classList.remove('show');
                    overlay.classList.remove('show');
                }
            });
        }
    };

    // Инициализация всех функций
    initializeSwipers();
    initializeGallerySwiper();
    updateLogoClass();
    initializeModal();
});
