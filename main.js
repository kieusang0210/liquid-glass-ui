/* ═══════════════════════════════════════
   Easy Marketing — Premium JS
   IntersectionObserver for scroll reveals
   GSAP only for hero entrance
   ═══════════════════════════════════════ */

// ─── Loader ───
function bootPage() {
    const loader = document.getElementById('loader');
    if (!loader || loader.classList.contains('done')) return;

    const fill = loader.querySelector('.loader-fill');

    requestAnimationFrame(() => {
        if (fill) {
            fill.style.transition = 'width .55s cubic-bezier(.22,1,.36,1)';
            fill.style.width = '100%';
        }
    });

    setTimeout(() => {
        loader.classList.add('done');
        document.body.style.overflow = '';
        initAll();
    }, 650);
}

document.body.style.overflow = 'hidden';

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', bootPage, { once: true });
} else {
    bootPage();
}

// ─── Init Everything ───
function initAll() {
    // initCursor(); // disabled for performance
    initHeader();
    initMobileMenu();
    initCardSpotlight();
    initSmoothScroll();
    initScrollReveal();
    initCounters();
    initTestiCarousel();

    // GSAP hero only — optional enhancement
    if (typeof gsap !== 'undefined') {
        initHeroGSAP();
    }
}

// ─── Custom Cursor ───
function initCursor() {
    const cursor = document.getElementById('cursor');
    if (!cursor || window.innerWidth < 768) return;

    let mouseX = 0, mouseY = 0, cursorX = 0, cursorY = 0;

    document.addEventListener('mousemove', e => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function updateCursor() {
        cursorX += (mouseX - cursorX) * 0.15;
        cursorY += (mouseY - cursorY) * 0.15;
        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        requestAnimationFrame(updateCursor);
    }
    updateCursor();

    document.querySelectorAll('[data-hover], a, button').forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hovering'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hovering'));
    });
}

// ─── Header Scroll ───
function initHeader() {
    const header = document.getElementById('header');
    if (!header) return;
    let last = 0;

    window.addEventListener('scroll', () => {
        const y = window.scrollY;
        header.classList.toggle('scrolled', y > 80);
        header.classList.toggle('hidden', y > last && y > 400);
        last = y;
    }, { passive: true });
}

// ─── Mobile Menu ───
function initMobileMenu() {
    const toggle = document.getElementById('navToggle');
    const links = document.getElementById('navLinks');
    if (!toggle || !links) return;

    toggle.addEventListener('click', () => {
        links.classList.toggle('open');
        toggle.classList.toggle('active');

        if (links.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });

    links.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => {
            links.classList.remove('open');
            toggle.classList.remove('active');
            document.body.style.overflow = '';
        });
    });
}

// ─── Liquid Glass Interactive ───
function initCardSpotlight() {
    const cards = document.querySelectorAll('.svc-card, .work-item, .team-card, .step, .testi-card, .price-card, .news-card, .client-card, .aval, .faq-item');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    cards.forEach(card => {
        card.addEventListener('mousemove', e => {
            if (prefersReducedMotion.matches) return;
            const rect = card.getBoundingClientRect();
            
            // For radial gradient spotlight in CSS
            card.style.setProperty('--mouse-x', (e.clientX - rect.left) + 'px');
            card.style.setProperty('--mouse-y', (e.clientY - rect.top) + 'px');

            // 3D Tilt Logic
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (((e.clientY - rect.top) - centerY) / centerY) * -5; 
            const rotateY = (((e.clientX - rect.left) - centerX) / centerX) * 5;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            if (prefersReducedMotion.matches) return;
            card.style.transform = ''; 
        });
    });
}

// ─── Scroll Reveal (IntersectionObserver — NO GSAP) ───
function initScrollReveal() {
    // Mark all reveal targets
    const selectors = [
        '.section-head', '.svc-card', '.work-item', '.step',
        '.testi-card', '.price-card', '.news-card', '.aval',
        '.faq-item', '.client-card', '.team-card',
        '.about-left', '.about-lead', '.about-right',
        '.stats-row', '.cta-inner', '.hero-trust'
    ];

    const els = document.querySelectorAll(selectors.join(','));

    // Add hidden class + stagger delay
    els.forEach((el, i) => {
        el.classList.add('reveal');
        // Stagger within parent
        const parent = el.parentElement;
        const siblings = parent.querySelectorAll(':scope > .reveal');
        const idx = Array.from(siblings).indexOf(el);
        if (idx > 0) {
            el.style.transitionDelay = (idx * 0.08) + 's';
        }
    });

    // Observe
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    els.forEach(el => observer.observe(el));
}

// ─── Counter Animation ───
function initCounters() {
    const counters = document.querySelectorAll('.counter');
    if (!counters.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.target);
                animateCounter(el, target);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(c => observer.observe(c));
}

function animateCounter(el, target) {
    const duration = 2000;
    const start = performance.now();

    function tick(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        // ease out quad
        const eased = 1 - (1 - progress) * (1 - progress);
        el.textContent = Math.round(eased * target);
        if (progress < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
}

// ─── GSAP Hero Only (optional enhancement) ───
function initHeroGSAP() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const tl = gsap.timeline({ delay: 0.05 });
    tl
        .from('.hero-label', { opacity: 0, y: 18, duration: 0.35, ease: 'power3.out' })
        .from('.hero-line', { opacity: 0, y: 18, duration: 0.42, ease: 'power4.out', stagger: 0.06 }, '-=0.22')
        .from('.hero-sub', { opacity: 0, y: 16, duration: 0.35, ease: 'power3.out' }, '-=0.2')
        .from('.hero-actions', { opacity: 0, y: 16, duration: 0.35, ease: 'power3.out' }, '-=0.18')
        .from('.hero-visual', { opacity: 0, scale: 0.98, duration: 0.5, ease: 'power3.out' }, '-=0.25')
        .from('.hero-trust', { opacity: 0, y: 12, duration: 0.32, ease: 'power3.out' }, '-=0.22');
}

// ─── Smooth Scroll for Anchors ───
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const href = a.getAttribute('href');
            if (href === '#') return;
            const target = document.querySelector(href);
            if (!target) return;
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
}

// ─── Testimonial Carousel ───
function initTestiCarousel() {
    const track = document.getElementById('testiTrack');
    const prevBtn = document.getElementById('testiPrev');
    const nextBtn = document.getElementById('testiNext');
    const dotsWrap = document.getElementById('testiDots');
    if (!track || !prevBtn || !nextBtn || !dotsWrap) return;

    const cards = Array.from(track.querySelectorAll('.testi-card'));
    const totalCards = cards.length;
    let current = 0;
    let autoSlide;
    const getPerView = () => window.matchMedia('(max-width: 767px)').matches ? 1 : 2;
    const maxIndex = () => Math.max(0, totalCards - getPerView());
    const getGap = () => {
        const style = window.getComputedStyle(track);
        return parseFloat(style.columnGap || style.gap || 0) || 0;
    };

    function buildDots() {
        const count = maxIndex() + 1;
        dotsWrap.innerHTML = '';

        for (let i = 0; i < count; i++) {
            const dot = document.createElement('button');
            dot.className = 'testi-dot';
            dot.type = 'button';
            dot.dataset.index = i;
            dot.setAttribute('aria-label', `Slide ${i + 1}`);
            dotsWrap.appendChild(dot);
        }
    }

    function updateCarousel() {
        const card = cards[0];
        if (!card) return;
        const gap = getGap();
        const cardWidth = card.offsetWidth + gap;
        const offset = current * cardWidth;
        track.style.transform = `translateX(-${offset}px)`;

        dotsWrap.querySelectorAll('.testi-dot').forEach((dot, i) => {
            dot.classList.toggle('active', i === current);
            dot.setAttribute('aria-current', i === current ? 'true' : 'false');
        });

        prevBtn.disabled = maxIndex() === 0;
        nextBtn.disabled = maxIndex() === 0;
    }

    function startAutoSlide() {
        stopAutoSlide();
        autoSlide = setInterval(() => {
            current = current >= maxIndex() ? 0 : current + 1;
            updateCarousel();
        }, 5500);
    }

    function stopAutoSlide() {
        if (autoSlide) clearInterval(autoSlide);
    }

    nextBtn.addEventListener('click', () => {
        current = current >= maxIndex() ? 0 : current + 1;
        updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
        current = current <= 0 ? maxIndex() : current - 1;
        updateCarousel();
    });

    dotsWrap.addEventListener('click', (e) => {
        const dot = e.target.closest('.testi-dot');
        if (!dot) return;
        current = Math.min(parseInt(dot.dataset.index), maxIndex());
        updateCarousel();
    });

    track.addEventListener('mouseenter', stopAutoSlide);
    track.addEventListener('mouseleave', startAutoSlide);
    track.addEventListener('focusin', stopAutoSlide);
    track.addEventListener('focusout', startAutoSlide);

    window.addEventListener('resize', () => {
        buildDots();
        if (current > maxIndex()) current = maxIndex();
        updateCarousel();
    });

    buildDots();
    updateCarousel();
    startAutoSlide();
}
