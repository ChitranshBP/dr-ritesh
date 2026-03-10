/**
 * Main Javascript for Dr. Ritesh Amin TMS Homepage
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Navbar
    const navbar = document.getElementById('navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. Scroll Reveal Animations
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealOnScroll = () => {
        const windowHeight = window.innerHeight;
        const revealPoint = 100;
        
        revealElements.forEach((el) => {
            const elementTop = el.getBoundingClientRect().top;
            if (elementTop < windowHeight - revealPoint) {
                el.classList.add('active');
            }
        });
    };
    
    // Initial check
    revealOnScroll();
    
    // Check on scroll
    window.addEventListener('scroll', revealOnScroll);

    // 3. Smooth Scrolling for Anchor Links
    document.querySelectorAll('.nav-links a[href^="#"], .hero-cta a[href^="#"], .text-link[href^="#"], .btn[href^="#"], .service-link-btn[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const navHeight = navbar.offsetHeight;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navHeight;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 4. Services Horizontal Scroll
    const servicesTrack = document.getElementById('servicesTrack');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    if (servicesTrack && prevBtn && nextBtn) {
        const scrollAmount = 300; // Approximate card width + gap

        prevBtn.addEventListener('click', () => {
            servicesTrack.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            servicesTrack.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    }

    // 4. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNav = document.getElementById('mobileNav');
    
    if (mobileMenuBtn && mobileNav) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileNav.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
            document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
        });
        
        // Close menu when clicking a link (if not an accordion toggle)
        mobileNav.querySelectorAll('.mobile-link:not(.accordion-toggle), .accordion-panel a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // 5. Mobile Accordion Toggles
    const mobileAccordions = document.querySelectorAll('.mobile-accordion');
    mobileAccordions.forEach(acc => {
        const toggle = acc.querySelector('.accordion-toggle');
        if (toggle) {
            toggle.addEventListener('click', () => {
                acc.classList.toggle('active');
            });
        }
    });
    // 5. TMS Accordion Interaction
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        
        header.addEventListener('click', () => {
            // Check if this item is already active
            const isActive = item.classList.contains('active');
            
            // Close all items first (Accordian behavior: only one open at a time)
            accordionItems.forEach(otherItem => {
                otherItem.classList.remove('active');
            });
            
            // If it wasn't active before, open it now
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
