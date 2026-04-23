<?php
$page_title = 'Thank You | Dr. Ritesh Amin – Psychiatry & TMS in Edison, NJ';
$page_desc = 'Thank you for reaching out to Dr. Ritesh Amin. We will be in touch within 24 hours.';
$body_class = 'bg-beige font-sans';
$extra_css = '
    .thank-you-hero {
        position: relative;
        padding: 10rem 0 8rem;
        background: var(--color-midnight);
        overflow: hidden;
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .thank-you-hero::before {
        content: "";
        position: absolute;
        top: -40%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(37,111,168,0.15) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .thank-you-hero::after {
        content: "";
        position: absolute;
        bottom: -30%;
        left: -5%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .check-ring { 
        width: 5.5rem;
        height: 5.5rem;
        border-radius: 50%;
        background: rgba(37,111,168,0.12);
        border: 2px solid var(--color-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2.5rem;
    }
    .check-path { 
        stroke-dasharray: 24; 
        stroke-dashoffset: 0; 
        animation: checkDraw 0.6s ease forwards;
    }
    @keyframes checkDraw {
        from { stroke-dashoffset: 24; }
        to { stroke-dashoffset: 0; }
    }
';
include 'header.php';
?>

    <section class="thank-you-hero">
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-2xl mx-auto text-center reveal">
                
                <div class="check-ring">
                    <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="var(--color-gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path class="check-path" d="M20 6L9 17l-5-5" />
                    </svg>
                </div>

                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-4">
                    Thank You!
                </h1>
                <p class="text-xl text-gold-light italic font-light mb-8">
                    Your consultation request has been received.
                </p>

                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>

                <p class="text-lg text-white/80 max-w-xl mx-auto leading-relaxed mb-4">
                    Our team will review your information and reach out within <strong class="text-gold">24 hours</strong> to confirm your appointment and verify your insurance coverage.
                </p>
                <p class="text-md text-white/60 max-w-xl mx-auto leading-relaxed mb-10">
                    If you need immediate assistance, please call us directly.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="/" class="btn btn-primary py-3 px-8 text-center text-sm tracking-wide shadow-lg shadow-gold/20 hover:-translate-y-0.5 transition-all">
                        Back to Homepage
                    </a>
                    <a href="tel:+17325551234" class="btn py-3 px-8 text-center text-sm tracking-wide text-white border border-white/30 hover:bg-white/10 rounded-full transition-colors">
                        Call (732) 555-1234
                    </a>
                </div>

                <div class="mt-12 flex items-center justify-center gap-2 text-white/40 text-xs">
                    <span class="text-gold">✦</span>
                    Your information is HIPAA-compliant and never shared
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
