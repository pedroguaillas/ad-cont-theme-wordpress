document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            toggle.classList.toggle('active');
            nav.classList.toggle('active');
        });

        // Close menu when clicking a nav link
        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                toggle.classList.remove('active');
                nav.classList.remove('active');
            });
        });
    }

    // Smooth scroll offset for fixed header
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;

            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                var headerHeight = document.querySelector('.site-header').offsetHeight;
                var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Header background change on scroll
    var header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Carrusel de posts — un post a la vez
    document.querySelectorAll('.carousel-wrapper').forEach(function (wrapper) {
        var track   = wrapper.querySelector('.carousel-track');
        var prev    = wrapper.querySelector('.carousel-prev');
        var next    = wrapper.querySelector('.carousel-next');
        var counter = wrapper.querySelector('.carousel-counter');
        var cards   = Array.from(track.querySelectorAll('.post-card'));
        if (!cards.length) return;

        var current = 0;
        var total   = cards.length;

        function goTo(index) {
            current = Math.max(0, Math.min(index, total - 1));
            track.style.transform = 'translateX(-' + (current * 100) + '%)';
            prev.disabled = current === 0;
            next.disabled = current === total - 1;
            if (counter) counter.textContent = (current + 1) + ' / ' + total;
        }

        prev.addEventListener('click', function () { goTo(current - 1); });
        next.addEventListener('click', function () { goTo(current + 1); });

        goTo(0);
    });

    // Scroll-triggered animations via IntersectionObserver
    var animatedEls = document.querySelectorAll('[data-animate]');
    if (animatedEls.length && 'IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var delay = el.getAttribute('data-delay');
                    if (delay) {
                        el.style.animationDelay = delay + 'ms';
                    }
                    el.classList.add('is-visible');
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.12 });

        animatedEls.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback: show everything immediately
        animatedEls.forEach(function (el) {
            el.classList.add('is-visible');
        });
    }
});
