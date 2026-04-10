document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    // Create and inject overlay if not present
    let menuOverlay = document.querySelector('.menu-overlay');
    if (!menuOverlay && mobileMenu) {
        menuOverlay = document.createElement('div');
        menuOverlay.className = 'menu-overlay';
        document.body.appendChild(menuOverlay);
    }

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', () => {
            const isActive = mobileToggle.classList.contains('active');

            if (isActive) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.mobile-menu a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close on overlay click
        menuOverlay.addEventListener('click', closeMenu);
    }

    function openMenu() {
        mobileToggle.classList.add('active');
        mobileMenu.classList.add('active');
        menuOverlay.classList.add('active');
        document.body.classList.add('no-scroll');
    }

    function closeMenu() {
        mobileToggle.classList.remove('active');
        mobileMenu.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
    }

    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const nav = document.querySelector('nav');
        if (nav && window.scrollY > 100) {
            nav.classList.add('scrolled');
        } else if (nav) {
            nav.classList.remove('scrolled');
        }
    });

    // Drag-to-Scroll for Carousels
    const sliders = document.querySelectorAll('.photo-gallery');

    sliders.forEach(slider => {
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.style.cursor = 'grabbing';
            // Disable snap temporarily for smooth dragging
            slider.style.scrollSnapType = 'none';
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.style.cursor = 'grab';
            slider.style.scrollSnapType = '';
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.style.cursor = 'grab';
            slider.style.scrollSnapType = '';
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; // scroll-fast multiplier
            slider.scrollLeft = scrollLeft - walk;
        });
    });

    // Gallery Filtering and Load More Logic
    const filterBtns = document.querySelectorAll('.filter-btn');
    const masonryItems = document.querySelectorAll('.masonry-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');

    if (filterBtns.length > 0 && masonryItems.length > 0) {
        let currentFilter = 'all';
        let itemsToShow = 9;

        function updateGallery() {
            let visibleCount = 0;
            let totalMatching = 0;

            masonryItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                const matches = currentFilter === 'all' || itemCategory === currentFilter;

                if (matches) {
                    totalMatching++;
                    if (visibleCount < itemsToShow) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                        visibleCount++;
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });

            if (loadMoreBtn) {
                if (totalMatching > itemsToShow) {
                    loadMoreBtn.style.display = 'inline-block';
                } else {
                    loadMoreBtn.style.display = 'none';
                }
            }
        }

        // Initial setup
        updateGallery();

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                currentFilter = btn.getAttribute('data-filter');
                itemsToShow = 9; // Reset on filter change
                updateGallery();
            });
        });

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => {
                itemsToShow += 9;
                updateGallery();
            });
        }
    }

    // Mini Carousel Logic
    const miniCarousels = document.querySelectorAll('.mini-carousel');
    miniCarousels.forEach(carousel => {
        const track = carousel.querySelector('.mini-carousel-track');
        const images = track.querySelectorAll('img');
        const prevBtn = carousel.querySelector('.mc-btn.prev');
        const nextBtn = carousel.querySelector('.mc-btn.next');
        const dotsContainer = carousel.querySelector('.mc-dots');
        let currentIndex = 0;

        if (images.length > 1) {
            // Create dots
            images.forEach((_, i) => {
                const dot = document.createElement('span');
                dot.classList.add('mc-dot');
                if (i === 0) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(i));
                if (dotsContainer) dotsContainer.appendChild(dot);
            });

            const dots = dotsContainer ? dotsContainer.querySelectorAll('.mc-dot') : [];

            function updateCarousel() {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === currentIndex);
                });
            }

            function goToSlide(index) {
                currentIndex = index;
                updateCarousel();
            }

            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
                    updateCarousel();
                });
                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
                    updateCarousel();
                });
            }
        } else {
            // Hide controls if only 1 image
            if (prevBtn) prevBtn.style.display = 'none';
            if (nextBtn) nextBtn.style.display = 'none';
        }
    });

    // Lightbox Logic for Masonry Gallery AND Carousel Galleries
    const lightboxTriggers = document.querySelectorAll('.masonry-item img, .gallery-item img, .mini-carousel-track img');
    let lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    let lightboxImg = document.createElement('img');
    let closeBtn = document.createElement('span');
    closeBtn.className = 'lightbox-close';
    closeBtn.innerHTML = '&times;';

    lightbox.appendChild(lightboxImg);
    lightbox.appendChild(closeBtn);
    document.body.appendChild(lightbox);

    lightboxTriggers.forEach(img => {
        img.addEventListener('click', (e) => {
            lightboxImg.src = e.target.src;
            lightbox.classList.add('active');
            document.body.classList.add('no-scroll');
        });
    });

    lightbox.addEventListener('click', (e) => {
        if (e.target !== lightboxImg) {
            lightbox.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
    });

});
