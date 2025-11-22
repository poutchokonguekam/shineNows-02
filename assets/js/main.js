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
});

// =====================================
// Slider Avis / Satisfaction (Home)
// =====================================
(function () {
    const cardText = document.querySelector('[data-testimonial-text]');
    const cardName = document.querySelector('[data-testimonial-name]');
    const cardStars = document.querySelector('[data-testimonial-stars]');
    const btnPrev = document.querySelector('.sn-testimonial-arrow--prev');
    const btnNext = document.querySelector('.sn-testimonial-arrow--next');

    if (!cardText || !cardName || !cardStars || !btnPrev || !btnNext) {
        return;
    }

    // Avis statiques pour l'instant (1 → 4 → 1)
    const testimonials = [
        {
            rating: 5,
            text: '« Service rapide et professionnel. Mon site est magnifique ! »',
            name: 'Jean M.'
        },
        {
            rating: 5,
            text: '« Très satisfaite du résultat. Équipe à l’écoute et efficace. »',
            name: 'Fatou K.'
        },
        {
            rating: 5,
            text: '« Travail sérieux, communication fluide. Je recommande ShineNows ! »',
            name: 'Michael D.'
        },
        {
            rating: 5,
            text: '« Le meilleur service digital que j’ai testé. Bravo l’équipe ! »',
            name: 'Sophie L.'
        }
    ];

    let currentIndex = 0;
    let isAnimating = false;

    function renderTestimonial(index) {
        const t = testimonials[index];
        if (!t) return;

        // étoiles
        const fullStars = '★'.repeat(t.rating);
        const emptyStars = t.rating < 5 ? '☆'.repeat(5 - t.rating) : '';
        cardStars.innerHTML = `<span>${fullStars}${emptyStars}</span>`;

        cardText.textContent = t.text;
        cardName.textContent = t.name;
    }

    function goTo(delta) {
        if (isAnimating) return;
        isAnimating = true;

        const card = cardText.closest('.sn-testimonial-card');
        if (card) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(6px)';
        }

        setTimeout(() => {
            currentIndex = (currentIndex + delta + testimonials.length) % testimonials.length;
            renderTestimonial(currentIndex);

            if (card) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }

            setTimeout(() => { isAnimating = false; }, 150);
        }, 150);
    }

    btnPrev.addEventListener('click', () => goTo(-1));
    btnNext.addEventListener('click', () => goTo(1));

    // Init
    renderTestimonial(currentIndex);
})();
