// assets/js/main.js - Slider + petits helpers

document.addEventListener('DOMContentLoaded', () => {
    console.log('ShineNows JS loaded');

    const slides = document.querySelectorAll('.hero-slider .slide');
    const prevBtn = document.querySelector('.hero-slider .slider-nav.prev');
    const nextBtn = document.querySelector('.hero-slider .slider-nav.next');
    const dotsContainer = document.querySelector('.hero-slider .slider-dots');

    if (!slides.length || !dotsContainer) {
        console.warn('Aucun slider détecté sur cette page.');
        return;
    }

    let current = 0;
    const delay = 6000;
    let timer = null;

    // Crée les dots
    dotsContainer.innerHTML = '';
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            goTo(index);
            resetTimer();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('.dot');

    function goTo(index) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');

        current = (index + slides.length) % slides.length;

        slides[current].classList.add('active');
        dots[current].classList.add('active');
    }

    function next() {
        goTo(current + 1);
    }

    function prev() {
        goTo(current - 1);
    }

    function startTimer() {
        timer = setInterval(next, delay);
    }

    function resetTimer() {
        clearInterval(timer);
        startTimer();
    }

    if (nextBtn) nextBtn.addEventListener('click', () => { next(); resetTimer(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { prev(); resetTimer(); });

    startTimer();
});
