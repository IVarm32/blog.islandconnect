// Island Connect AI Blog JavaScript

// Smooth scrolling function
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Mobile menu toggle
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');

    if (mobileMenu && mobileMenuBtn) {
        const isHidden = mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
    }
}

// Contact modal functions
function openContactModal() {
    const modal = document.getElementById('contact-modal');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeContactModal() {
    const modal = document.getElementById('contact-modal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu button
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }

    // Charts
    initializeCharts();
    
    // Contact form
    initializeContactForm();
    
    // Scroll effects
    initializeScrollEffects();
    
    // Reading Progress
    initializeReadingProgress();
});

// Initialize all charts
function initializeCharts() {
    setTimeout(() => {
        const realEstateCtx = document.getElementById('realEstateChart');
        if (realEstateCtx) {
            new Chart(realEstateCtx, {
                type: 'bar',
                data: {
                    labels: ['Property Matching', 'Lead Conversion', 'Time on Market', 'Customer Satisfaction'],
                    datasets: [{
                        label: 'Before AI',
                        data: [50, 45, 100, 65],
                        backgroundColor: 'rgba(254, 209, 0, 0.8)',
                        borderColor: 'rgba(230, 194, 0, 1)',
                        borderWidth: 2
                    }, {
                        label: 'After AI',
                        data: [94, 78, 65, 89],
                        backgroundColor: 'rgba(0, 155, 58, 0.8)',
                        borderColor: 'rgba(0, 107, 42, 1)',
                        borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: { display: true, text: 'Real Estate AI Impact Comparison' }
                },
                scales: { y: { beginAtZero: true, max: 100 } }
            }
        });
    }

    const tourismCtx = document.getElementById('tourismChart');
    if (tourismCtx) {
        new Chart(tourismCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Booking Efficiency',
                    data: [100, 120, 135, 145, 150, 156],
                    borderColor: '#009B3A',
                    backgroundColor: 'rgba(0, 155, 58, 0.2)',
                    tension: 0.4
                }, {
                    label: 'Revenue Growth',
                    data: [100, 115, 125, 135, 150, 173],
                    borderColor: '#FED100',
                    backgroundColor: 'rgba(254, 209, 0, 0.2)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: { display: true, text: 'Tourism AI Implementation Results' }
                }
            }
        });
    }
    }, 1000);
}

// Initialize contact form with polished feedback
function initializeContactForm() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                showFormSuccess(contactForm);
                
                setTimeout(() => {
                    contactForm.reset();
                    closeContactModal();
                    submitButton.textContent = originalText;
                    submitButton.disabled = false;
                    // Remove success message after modal close
                    const msg = document.getElementById('form-success-msg');
                    if (msg) msg.remove();
                }, 3000);
            }, 1500);
        });
    }
}

function showFormSuccess(form) {
    const successMsg = document.createElement('div');
    successMsg.id = 'form-success-msg';
    successMsg.className = 'mt-4 p-4 rounded-lg bg-green-100 border border-green-500 text-green-700 font-semibold animate-fade-in';
    successMsg.innerHTML = '<div class="flex items-center"><i class="fas fa-check-circle mr-2 text-xl"></i> Message sent successfully! We will contact you soon.</div>';

    form.parentNode.insertBefore(successMsg, form.nextSibling);
}

// Reading Progress Indicator
function initializeReadingProgress() {
    const progressBar = document.createElement('div');
    progressBar.id = 'reading-progress-bar';
    progressBar.style.position = 'fixed';
    progressBar.style.top = '0';
    progressBar.style.left = '0';
    progressBar.style.height = '4px';
    progressBar.style.backgroundColor = '#FED100'; // Jamaican Gold
    progressBar.style.zIndex = '9999';
    progressBar.style.transition = 'width 0.2s ease';
    progressBar.style.width = '0%';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', function() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById('reading-progress-bar').style.width = scrolled + '%';
    });
}

// Initialize scroll effects
function initializeScrollEffects() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function updateActiveLink() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-green-400', 'font-semibold');
            if (link.getAttribute('href') === '#' + current || link.getAttribute('href') === 'index.html#' + current) {
                link.classList.add('text-green-400', 'font-semibold');
            }
        });
    }

    window.addEventListener('scroll', updateActiveLink);
    
    const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('animate-fade-in');
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
}

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeContactModal();
});

// Close modal on backdrop click
document.addEventListener('click', function(e) {
    const modal = document.getElementById('contact-modal');
    if (e.target === modal) closeContactModal();
});

// Export functions for global use
window.scrollToSection = scrollToSection;
window.openContactModal = openContactModal;
window.closeContactModal = closeContactModal;
