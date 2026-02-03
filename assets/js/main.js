// main.js - Fonctionnalités principales de SOKOLINK

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('SOKOLINK - Marché Local Connecté initialisé');
    
    // Initialiser toutes les fonctionnalités
    initLoadingScreen();
    initMobileMenu();
    initSmoothScroll();
    initBackToTop();
    initProductFilter();
    initTestimonialsCarousel();
    initCounters();
    initNewsletterForm();
    initModals();
    initNotifications();
    initStickyHeader();
    initLazyLoading();
    initAnimations();
});

// Écran de chargement
function initLoadingScreen() {
    const loadingScreen = document.getElementById('loadingScreen');
    const loadingProgress = document.querySelector('.loading-progress');
    
    if (!loadingScreen) return;
    
    // Simuler le chargement
    let progress = 0;
    const interval = setInterval(() => {
        progress += Math.random() * 20;
        if (progress > 100) progress = 100;
        
        if (loadingProgress) {
            loadingProgress.style.width = progress + '%';
        }
        
        if (progress >= 100) {
            clearInterval(interval);
            setTimeout(() => {
                loadingScreen.classList.add('hidden');
                setTimeout(() => {
                    loadingScreen.style.display = 'none';
                }, 500);
            }, 300);
        }
    }, 100);
}

// Menu mobile
function initMobileMenu() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.querySelector('.menu-icon');
    
    if (!mobileMenuToggle || !mobileMenu) return;
    
    function toggleMobileMenu() {
        const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
        mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('open');
        
        if (menuIcon) {
            menuIcon.textContent = isExpanded ? 'menu' : 'close';
        }
        
        // Empêcher le défilement du body
        document.body.style.overflow = isExpanded ? 'auto' : 'hidden';
        
        // Focus trap
        if (!isExpanded) {
            setTimeout(() => {
                const firstLink = mobileMenu.querySelector('a');
                if (firstLink) firstLink.focus();
            }, 100);
        }
    }
    
    mobileMenuToggle.addEventListener('click', toggleMobileMenu);
    
    // Fermer le menu en cliquant sur un lien
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            if (menuIcon) menuIcon.textContent = 'menu';
            document.body.style.overflow = 'auto';
        });
    });
    
    // Fermer le menu avec la touche Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
            mobileMenu.classList.remove('open');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            if (menuIcon) menuIcon.textContent = 'menu';
            mobileMenuToggle.focus();
            document.body.style.overflow = 'auto';
        }
    });
    
    // Fermer en cliquant à l'extérieur
    document.addEventListener('click', (e) => {
        if (mobileMenu.classList.contains('open') && 
            !mobileMenu.contains(e.target) && 
            !mobileMenuToggle.contains(e.target)) {
            mobileMenu.classList.remove('open');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            if (menuIcon) menuIcon.textContent = 'menu';
            document.body.style.overflow = 'auto';
        }
    });
}

// Smooth scroll
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '#!') return;
            
            e.preventDefault();
            const targetElement = document.querySelector(href);
            if (!targetElement) return;
            
            const headerHeight = document.querySelector('.main-header')?.offsetHeight || 80;
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
            
            window.scrollTo({
                top: targetPosition - headerHeight,
                behavior: 'smooth'
            });
            
            // Focus pour l'accessibilité
            setTimeout(() => {
                targetElement.setAttribute('tabindex', '-1');
                targetElement.focus();
                targetElement.removeAttribute('tabindex');
            }, 500);
        });
    });
}

// Back to top button
function initBackToTop() {
    const backToTopBtn = document.querySelector('.back-to-top');
    
    if (!backToTopBtn) return;
    
    function toggleBackToTop() {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    }
    
    window.addEventListener('scroll', toggleBackToTop);
    toggleBackToTop(); // Initial check
    
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Filtre de produits
function initProductFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    
    if (filterButtons.length === 0 || productCards.length === 0) return;
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Mettre à jour les boutons actifs
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            // Filtrer les produits
            productCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.classList.remove('hidden');
                    card.style.animation = 'none';
                    setTimeout(() => {
                        card.style.animation = 'fadeInUp 0.6s ease-out forwards';
                    }, 10);
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
}

// Carousel de témoignages
function initTestimonialsCarousel() {
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.querySelector('.nav-btn.prev');
    const nextBtn = document.querySelector('.nav-btn.next');
    const dots = document.querySelectorAll('.nav-dot');
    
    if (testimonialCards.length === 0) return;
    
    let currentIndex = 0;
    
    function updateCarousel() {
        // Masquer toutes les cartes
        testimonialCards.forEach(card => {
            card.style.display = 'none';
            card.style.opacity = '0';
            card.style.transform = 'translateX(20px)';
        });
        
        // Afficher la carte active
        testimonialCards[currentIndex].style.display = 'block';
        setTimeout(() => {
            testimonialCards[currentIndex].style.opacity = '1';
            testimonialCards[currentIndex].style.transform = 'translateX(0)';
            testimonialCards[currentIndex].style.transition = 'all 0.6s ease-out';
        }, 10);
        
        // Mettre à jour les dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    function goToSlide(index) {
        currentIndex = (index + testimonialCards.length) % testimonialCards.length;
        updateCarousel();
    }
    
    function nextSlide() {
        goToSlide(currentIndex + 1);
    }
    
    function prevSlide() {
        goToSlide(currentIndex - 1);
    }
    
    // Événements
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToSlide(index));
    });
    
    // Auto-rotation
    let autoRotate = setInterval(nextSlide, 5000);
    
    // Arrêter l'auto-rotation au hover
    const testimonialsSection = document.querySelector('.section-testimonials');
    if (testimonialsSection) {
        testimonialsSection.addEventListener('mouseenter', () => {
            clearInterval(autoRotate);
        });
        
        testimonialsSection.addEventListener('mouseleave', () => {
            autoRotate = setInterval(nextSlide, 5000);
        });
    }
    
    // Initialiser
    updateCarousel();
}

// Compteurs animés
function initCounters() {
    const counters = document.querySelectorAll('.stat-number[data-count]');
    
    if (counters.length === 0) return;
    
    function animateCounter(counter) {
        const target = parseInt(counter.dataset.count);
        const duration = 2000; // 2 secondes
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            if (target > 1000) {
                counter.textContent = Math.floor(current).toLocaleString();
            } else {
                counter.textContent = Math.floor(current);
            }
        }, 16);
    }
    
    // Observer pour déclencher l'animation quand visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });
    
    counters.forEach(counter => observer.observe(counter));
}

// Newsletter form
function initNewsletterForm() {
    const newsletterForm = document.getElementById('newsletterForm');
    
    if (!newsletterForm) return;
    
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const emailInput = this.querySelector('input[type="email"]');
        const email = emailInput.value.trim();
        
        if (!email || !isValidEmail(email)) {
            showNotification('Veuillez entrer une adresse email valide', 'error');
            return;
        }
        
        // Simulation d'envoi
        emailInput.value = '';
        showNotification('Merci pour votre inscription à la newsletter !', 'success');
        
        // Ici, vous enverriez les données à votre serveur
        console.log('Newsletter subscription:', email);
    });
}

// Modals
function initModals() {
    const modal = document.getElementById('quickLoginModal');
    const modalClose = modal?.querySelector('.modal-close');
    const sellNowBtn = document.getElementById('sellNowBtn');
    
    if (!modal) return;
    
    function openModal() {
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
        
        // Focus trap
        setTimeout(() => {
            const firstFocusable = modal.querySelector('a, button, input');
            if (firstFocusable) firstFocusable.focus();
        }, 100);
    }
    
    function closeModal() {
        modal.classList.remove('open');
        document.body.style.overflow = 'auto';
    }
    
    // Événements
    if (sellNowBtn) {
        sellNowBtn.addEventListener('click', openModal);
    }
    
    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }
    
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('open')) {
            closeModal();
        }
    });
}

// Système de notifications
function initNotifications() {
    const notificationToast = document.getElementById('notificationToast');
    const notificationText = notificationToast?.querySelector('.notification-text');
    const notificationIcon = notificationToast?.querySelector('.notification-icon');
    const notificationClose = notificationToast?.querySelector('.notification-close');
    
    if (!notificationToast) return;
    
    window.showNotification = function(message, type = 'info') {
        if (!notificationText || !notificationIcon) return;
        
        notificationText.textContent = message;
        notificationIcon.className = 'notification-icon ' + type;
        
        notificationToast.classList.add('show');
        
        // Auto-hide après 5 secondes
        setTimeout(() => {
            notificationToast.classList.remove('show');
        }, 5000);
    };
    
    if (notificationClose) {
        notificationClose.addEventListener('click', () => {
            notificationToast.classList.remove('show');
        });
    }
}

// Sticky header avec effet de défilement
function initStickyHeader() {
    const header = document.querySelector('.main-header');
    
    if (!header) return;
    
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Masquer/afficher le header au scroll
        if (currentScroll > lastScroll && currentScroll > 200) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    });
}

// Lazy loading pour les images
function initLazyLoading() {
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.loading = 'lazy';
        });
    } else {
        // Fallback pour les anciens navigateurs
        const lazyImages = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    }
}

// Animations au scroll
function initAnimations() {
    const animatedElements = document.querySelectorAll('.product-card, .step-card, .feature-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    animatedElements.forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
}

// Helper functions
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Navigation active
function updateActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
    
    let currentSection = '';
    const scrollPosition = window.scrollY + 100;
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            currentSection = '#' + section.id;
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === currentSection) {
            link.classList.add('active');
        }
    });
}

// Mettre à jour la navigation active au scroll
window.addEventListener('scroll', updateActiveNav);
updateActiveNav(); // Initial call

// Badge close
const badgeClose = document.querySelector('.badge-close');
if (badgeClose) {
    badgeClose.addEventListener('click', function() {
        const badge = this.closest('.hero-badge');
        if (badge) {
            badge.style.opacity = '0';
            badge.style.transform = 'scale(0.8)';
            badge.style.transition = 'all 0.3s ease';
            
            setTimeout(() => {
                badge.style.display = 'none';
            }, 300);
        }
    });
}

// Démarrer avec des animations initiales
setTimeout(() => {
    showNotification('Bienvenue sur SOKOLINK ! Découvrez notre nouveau service de livraison sécurisée.', 'info');
}, 2000);