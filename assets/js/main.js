// assets/js/main.js

document.addEventListener('DOMContentLoaded', () => {
    console.log("ShineNows JS Loaded"); // Vérification dans la console

    /* =========================================
       LOGIQUE DU SLIDER HERO (CORRIGÉE)
       ========================================= */
    const slides = document.querySelectorAll('.slide');
    const nextBtn = document.querySelector('.slider-nav.next');
    const prevBtn = document.querySelector('.slider-nav.prev');
    const dotsContainer = document.querySelector('.slider-dots');

    let currentSlide = 0;
    let slideInterval;
    const autoPlayDelay = 5000; // 5 secondes

    // Vérification de sécurité : on ne lance le code que si le slider existe
    if (slides.length > 0 && dotsContainer) {
        
        // 1. GÉNÉRATION DES POINTS (DOTS)
        // On vide le conteneur d'abord pour éviter les doublons
        dotsContainer.innerHTML = ''; 
        
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            
            // Clic sur un point
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetTimer();
            });
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        // 2. FONCTION PRINCIPALE : CHANGER DE SLIDE
        function goToSlide(index) {
            // Enlever la classe active partout
            slides[currentSlide].classList.remove('active');
            if(dots[currentSlide]) dots[currentSlide].classList.remove('active');
            
            // Calcul du nouvel index (gestion de la boucle infinie)
            currentSlide = (index + slides.length) % slides.length;
            
            // Ajouter la classe active au nouveau
            slides[currentSlide].classList.add('active');
            if(dots[currentSlide]) dots[currentSlide].classList.add('active');
        }

        // 3. NAVIGATION FLÈCHES
        if(nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault(); // Empêche le saut de page
                goToSlide(currentSlide + 1);
                resetTimer();
            });
        }

        if(prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                goToSlide(currentSlide - 1);
                resetTimer();
            });
        }

        // 4. AUTO PLAY
        function startTimer() {
            slideInterval = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, autoPlayDelay);
        }

        function resetTimer() {
            clearInterval(slideInterval);
            startTimer();
        }

        // Lancer le slider
        startTimer();
        console.log("Slider démarré avec " + slides.length + " images.");
    } else {
        console.warn("Slider non trouvé sur cette page.");
    }

    /* =========================================
       SLIDER D'AVIS HORIZONTAL
       ========================================= */
    const reviewsTrack = document.querySelector('.reviews-track');
    const reviewCards = reviewsTrack ? Array.from(reviewsTrack.querySelectorAll('.review-card')) : [];
    const reviewsPrev = document.querySelector('.reviews-prev');
    const reviewsNext = document.querySelector('.reviews-next');

    if (reviewsTrack && reviewCards.length > 0 && reviewsPrev && reviewsNext) {
        let reviewIndex = 0;

        function updateReviewsSlider() {
            const cardWidth = reviewCards[0].getBoundingClientRect().width + 24; // largeur + gap
            const visibleCount = window.innerWidth <= 900 ? 1 : 2;
            const maxIndex = Math.max(0, reviewCards.length - visibleCount);
            if (reviewIndex > maxIndex) reviewIndex = maxIndex;
            if (reviewIndex < 0) reviewIndex = 0;
            const offset = -reviewIndex * cardWidth;
            reviewsTrack.style.transform = `translateX(${offset}px)`;
        }

        reviewsPrev.addEventListener('click', () => {
            reviewIndex--;
            updateReviewsSlider();
        });

        reviewsNext.addEventListener('click', () => {
            reviewIndex++;
            updateReviewsSlider();
        });

        window.addEventListener('resize', updateReviewsSlider);
        updateReviewsSlider();
    }
});
