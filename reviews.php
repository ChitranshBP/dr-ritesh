<?php
$page_title = 'Patient Testimonials | Dr. Ritesh Amin – TMS Therapy & Psychiatry in NJ';
$page_desc = 'Read real patient stories and testimonials about TMS therapy, Spravato, and psychiatric care with Dr. Ritesh Amin in Edison, New Jersey.';
$body_class = 'bg-beige font-sans';
$extra_css = '
    /* ══════════════════════════════════════════
       TESTIMONIALS PAGE STYLES
       ══════════════════════════════════════════ */

    /* ── Hero ── */
    .reviews-hero {
        position: relative;
        padding: 10rem 0 5rem;
        background: var(--color-midnight);
        overflow: hidden;
    }
    .reviews-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px);
        background-size: 30px 30px;
        pointer-events: none;
    }
    .reviews-hero::after {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%);
        pointer-events: none;
    }
    .reviews-hero-orb-1 {
        position: absolute;
        top: -30%;
        right: -8%;
        width: 550px;
        height: 550px;
        background: radial-gradient(circle, rgba(37,111,168,0.16) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .reviews-hero-orb-2 {
        position: absolute;
        bottom: -35%;
        left: -6%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    /* ── Rating Summary Bar ── */
    .reviews-summary-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 3rem;
        background: var(--color-midnight);
        border: 1px solid rgba(37,111,168,0.20);
        border-radius: var(--border-radius-lg);
        padding: 2.25rem 3rem;
        margin: -3rem auto 0;
        max-width: 900px;
        position: relative;
        z-index: 10;
        box-shadow: 0 20px 50px rgba(0,0,0,0.25);
    }
    .reviews-summary-bar::before {
        content: "";
        position: absolute;
        top: 0;
        left: 2rem; right: 2rem;
        height: 2px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        border-radius: 1px;
    }
    .reviews-summary-stat {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.35rem;
    }
    .reviews-summary-num {
        font-family: var(--font-serif);
        font-size: 2.6rem;
        font-weight: 700;
        color: #fff;
        line-height: 1;
        display: flex;
        align-items: flex-start;
    }
    .reviews-summary-sym {
        color: var(--color-gold);
        font-size: 1.4rem;
        line-height: 1.1;
    }
    .reviews-summary-label {
        font-size: 0.72rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: rgba(255,255,255,0.45);
    }
    .reviews-summary-stars {
        font-size: 1.5rem;
        color: var(--color-gold);
        letter-spacing: 3px;
    }
    .reviews-summary-divider {
        width: 1px;
        height: 44px;
        background: rgba(37,111,168,0.25);
        flex-shrink: 0;
    }

    /* ── Filter Tabs ── */
    .reviews-filter-tabs {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        margin-bottom: 3rem;
    }
    .reviews-filter-tab {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.25rem;
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.82rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        color: var(--color-midnight-light);
        background: #fff;
        border: 1.5px solid #e2e8f0;
        cursor: pointer;
        transition: all 0.3s ease;
        user-select: none;
    }
    .reviews-filter-tab:hover {
        border-color: var(--color-gold);
        color: var(--color-gold);
    }
    .reviews-filter-tab.active {
        background: var(--color-gold);
        color: #fff;
        border-color: var(--color-gold);
        box-shadow: 0 4px 16px rgba(37,111,168,0.3);
    }

    /* ── Testimonial Cards Grid — Masonry Style ── */
    .reviews-masonry {
        column-count: 3;
        column-gap: 1.5rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* ── Testimonial Card ── */
    .review-card {
        break-inside: avoid;
        background: #fff;
        border-radius: 1.25rem;
        padding: 2rem;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(37,111,168,0.06);
        box-shadow: 0 4px 20px rgba(11,25,44,0.04);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }
    .review-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(11,25,44,0.08);
        border-color: rgba(37,111,168,0.15);
    }
    /* Blue accent bar on top */
    .review-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        opacity: 0;
        transition: opacity 0.35s ease;
    }
    .review-card:hover::before {
        opacity: 1;
    }

    /* ── Featured / Highlight Card ── */
    .review-card.featured {
        background: var(--color-midnight);
        border-color: rgba(37,111,168,0.25);
    }
    .review-card.featured::before {
        opacity: 1;
    }
    .review-card.featured .review-name {
        color: #fff;
    }
    .review-card.featured .review-condition {
        color: rgba(255,255,255,0.45);
    }
    .review-card.featured .review-text {
        color: rgba(255,255,255,0.70);
    }
    .review-card.featured .review-stars {
        color: var(--color-gold-light);
    }
    .review-card.featured .review-avatar {
        background: rgba(37,111,168,0.25);
        border-color: rgba(37,111,168,0.4);
        color: var(--color-gold-light);
    }
    .review-card.featured .review-quote-icon {
        color: rgba(37,111,168,0.25);
    }
    .review-card.featured .review-tag {
        background: rgba(37,111,168,0.15);
        border-color: rgba(37,111,168,0.3);
        color: var(--color-gold-light);
    }

    /* ── Card Elements ── */
    .review-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }
    .review-avatar {
        width: 46px;
        height: 46px;
        min-width: 46px;
        border-radius: 50%;
        background: rgba(37,111,168,0.08);
        border: 2px solid rgba(37,111,168,0.15);
        color: var(--color-gold);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: var(--font-serif);
        font-weight: 700;
        font-size: 1.15rem;
    }
    .review-name {
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--color-midnight);
        margin: 0;
        line-height: 1.2;
    }
    .review-condition {
        font-family: var(--font-sans);
        font-size: 0.72rem;
        color: var(--color-text-light);
        display: block;
        margin-top: 0.15rem;
    }
    .review-stars {
        margin-left: auto;
        color: var(--color-gold);
        font-size: 0.85rem;
        letter-spacing: 2px;
        flex-shrink: 0;
    }
    .review-text {
        font-size: 0.95rem;
        line-height: 1.7;
        color: var(--color-text-light);
        margin: 0 0 1rem;
        position: relative;
    }
    .review-quote-icon {
        position: absolute;
        top: -0.6rem;
        left: -0.25rem;
        font-family: var(--font-serif);
        font-size: 4rem;
        line-height: 1;
        color: rgba(37,111,168,0.08);
        pointer-events: none;
        user-select: none;
    }
    .review-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.3rem 0.75rem;
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.68rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        color: var(--color-gold);
        background: rgba(37,111,168,0.06);
        border: 1px solid rgba(37,111,168,0.12);
    }
    .review-tag svg {
        width: 12px;
        height: 12px;
    }
    .review-verified {
        display: flex;
        align-items: center;
        gap: 0.35rem;
        font-size: 0.7rem;
        font-weight: 500;
        color: #22c55e;
        margin-top: 0.75rem;
    }
    .review-verified svg {
        width: 14px;
        height: 14px;
    }

    /* ── Video Testimonial Card ── */
    .review-card.video-review {
        padding: 0;
        overflow: hidden;
    }
    .review-video-thumb {
        position: relative;
        aspect-ratio: 16/10;
        overflow: hidden;
        background: #000;
    }
    .review-video-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.75;
        transition: all 0.5s ease;
    }
    .review-card.video-review:hover .review-video-thumb img {
        opacity: 0.5;
        transform: scale(1.05);
    }
    .review-video-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }
    .review-play-btn {
        width: 54px;
        height: 54px;
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(6px);
        border: 1.5px solid rgba(255,255,255,0.35);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.35s ease;
        cursor: pointer;
    }
    .review-play-btn svg {
        width: 20px;
        height: 20px;
        fill: #fff;
        margin-left: 3px;
    }
    .review-card.video-review:hover .review-play-btn {
        background: var(--color-gold);
        border-color: var(--color-gold);
        transform: scale(1.1);
    }
    .review-video-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1.5rem;
        background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);
        z-index: 3;
    }
    .review-video-caption h4 {
        font-family: var(--font-serif);
        font-size: 1.15rem;
        color: #fff;
        margin: 0 0 0.15rem;
    }
    .review-video-caption span {
        font-size: 0.78rem;
        color: rgba(255,255,255,0.65);
    }
    .review-video-body {
        padding: 1.5rem 2rem;
    }

    /* ── CTA Card ── */
    .reviews-cta-card {
        background: var(--color-midnight);
        border-radius: 2rem;
        padding: 3.5rem;
        position: relative;
        overflow: hidden;
        text-align: center;
    }
    .reviews-cta-card::before {
        content: "";
        position: absolute;
        top: -80px;
        right: -80px;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(37,111,168,0.15) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .reviews-cta-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 2rem; right: 2rem;
        height: 2px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        border-radius: 1px;
    }

    /* ── Responsive ── */
    @media (max-width: 991px) {
        .reviews-masonry { column-count: 2; }
        .reviews-summary-bar { gap: 1.5rem; padding: 1.75rem 2rem; }
    }
    @media (max-width: 640px) {
        .reviews-hero { padding: 8rem 0 3rem; }
        .reviews-masonry { column-count: 1; }
        .reviews-summary-bar {
            flex-wrap: wrap;
            gap: 1.25rem;
            padding: 1.5rem;
            margin-top: -2rem;
        }
        .reviews-summary-divider { display: none; }
        .reviews-summary-stat { min-width: 40%; }
        .reviews-cta-card { padding: 2rem; }
        .review-card { padding: 1.5rem; }
    }
';
include 'header.php';
?>

    <!-- Testimonials Hero -->
    <section class="reviews-hero" id="reviews-hero">
        <div class="reviews-hero-orb-1"></div>
        <div class="reviews-hero-orb-2"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Patient Stories</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Real People, <span class="text-gold-light">Real Results</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Hear from patients who have transformed their lives through TMS therapy, Spravato, and compassionate psychiatric care with Dr. Amin.
                </p>
            </div>
        </div>
    </section>

    <!-- Rating Summary Bar -->
    <section class="relative z-20 px-4">
        <div class="reviews-summary-bar reveal">
            <div class="reviews-summary-stat">
                <span class="reviews-summary-num">4.9<span class="reviews-summary-sym">★</span></span>
                <span class="reviews-summary-label">Average Rating</span>
            </div>
            <div class="reviews-summary-divider"></div>
            <div class="reviews-summary-stat">
                <span class="reviews-summary-stars">★★★★★</span>
                <span class="reviews-summary-label">Most Common Rating</span>
            </div>
            <div class="reviews-summary-divider"></div>
            <div class="reviews-summary-stat">
                <span class="reviews-summary-num">500<span class="reviews-summary-sym">+</span></span>
                <span class="reviews-summary-label">Patients Treated</span>
            </div>
            <div class="reviews-summary-divider"></div>
            <div class="reviews-summary-stat">
                <span class="reviews-summary-num">98<span class="reviews-summary-sym">%</span></span>
                <span class="reviews-summary-label">Would Recommend</span>
            </div>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20 bg-beige-dark/50 relative" id="reviews-grid">
        <div class="container mx-auto px-4 max-w-7xl">

            <!-- Filter Tabs -->
            <div class="reviews-filter-tabs reveal" id="reviewsFilterTabs">
                <button class="reviews-filter-tab active" data-filter="all">All Reviews</button>
                <button class="reviews-filter-tab" data-filter="depression">Depression</button>
                <button class="reviews-filter-tab" data-filter="tms">TMS Therapy</button>
                <button class="reviews-filter-tab" data-filter="anxiety">Anxiety</button>
                <button class="reviews-filter-tab" data-filter="ocd">OCD</button>
            </div>

            <!-- Masonry Grid -->
            <div class="reviews-masonry" id="reviewsMasonry">

                <!-- Ganesh — Featured -->
                <div class="review-card featured" data-tags="depression anxiety">
                    <div class="review-header">
                        <div class="review-avatar">G</div>
                        <div>
                            <h4 class="review-name">Ganesh</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        Dr Amin helped me a lot with my persistent depression, anxiety and attention deficit issues. He is excellent at establishing a good relationship with the patient and helped understand more about these conditions and what he was looking to achieve through the treatment. Would highly recommend him.
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Kavita Ingle -->
                <div class="review-card" data-tags="anxiety tms">
                    <div class="review-header">
                        <div class="review-avatar">K</div>
                        <div>
                            <h4 class="review-name">Kavita Ingle</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        Amazing experience with Dr. Amin. He helped me get out of my anxiety in just 2 months. He is very responsive, follows up personally, and is always available when you need to talk. Highly recommended! I had a wonderful experience with Nurse Melissa. She genuinely cares about her patients, and it shows in how she handles them. Thank You Dr Amin.
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Marietta Baranca — Featured -->
                <div class="review-card featured" data-tags="depression tms">
                    <div class="review-header">
                        <div class="review-avatar">M</div>
                        <div>
                            <h4 class="review-name">Marietta Baranca</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        I've been dealing with depression and PTSD for years and Dr. Amin's TMS Therapy has honestly saved my life. I'm someone who does not respond well to depression medication, so TMS was a godsend for me. I went from crying for no reason almost every day to feeling more stable and even optimistic. Dr. Amin is really invested in my mental health and Charlie, the TMS technician, is very helpful in making the treatments go by quickly and swiftly. I don't even want to imagine what my life would have been like without these treatments these past few years.
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Jeanne Hambrecht -->
                <div class="review-card" data-tags="tms">
                    <div class="review-header">
                        <div class="review-avatar">J</div>
                        <div>
                            <h4 class="review-name">Jeanne Hambrecht</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        I've been experiencing night terrors for a few years. I called Dr Amin immediately and he called me back right away. He told me he could help me. He came up with a medical plan with his diagnosis and that's what we're doing now. Dr. Amin is not aggressive and started very cautious with treatment because of my family history. Dr. Amin calls me to follow up on how I'm feeling. I highly recommend his practice. They answer in a timely manner. Everyone is very nice.
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Athena Xipolias -->
                <div class="review-card" data-tags="ocd tms">
                    <div class="review-header">
                        <div class="review-avatar">A</div>
                        <div>
                            <h4 class="review-name">Athena Xipolias</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        Dr. Amin saved me from my horrible OCD. Thank god for him. I originally went to him for a second opinion. I decided to take a leap of faith and start TMS after I had a bad OCD episode. It was rough in the beginning when I first started TMS but I persevered my way through and I'm so glad I did. I'm just about half way through and I see so many benefits already. I have my life back. I feel such relief — I can rationalize my thoughts and emotions so much better now. Overall I'm a better person. Thank you x1000 Dr. Amin!!!
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Kathryn Mahaney -->
                <div class="review-card" data-tags="depression anxiety">
                    <div class="review-header">
                        <div class="review-avatar">K</div>
                        <div>
                            <h4 class="review-name">Kathryn Mahaney</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        With professionalism and empathy, Dr Amin and Dr R. Truly are a rarity in today's world of Psychiatry. Incredibly knowledgeable and they are excellent patient advocates. Highly Recommend!
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Syeda Shebah Ali — Featured -->
                <div class="review-card featured" data-tags="depression anxiety">
                    <div class="review-header">
                        <div class="review-avatar">S</div>
                        <div>
                            <h4 class="review-name">Syeda Shebah Ali</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        Before becoming a patient of Dr. Amin, I was experiencing persistent cognitive fog, chronic depression, and generalized anxiety that significantly impacted my ability to function day to day. Since implementing Dr. Amin's comprehensive recommendations, my cognitive clarity has returned, my mood has stabilized, and I now have the energy and confidence to manage daily tasks and engage in social environments without fear. Dr. Amin's thoughtful and integrative approach to treatment has been transformative. His attention to detail and commitment to addressing root causes — rather than just symptoms — has helped me reclaim both my functionality and quality of life. I am truly grateful for the care I've received.
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Deolinda Amaral -->
                <div class="review-card" data-tags="depression tms">
                    <div class="review-header">
                        <div class="review-avatar">D</div>
                        <div>
                            <h4 class="review-name">Deolinda Amaral</h4>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        Thank you for the help. After the stroke, my husband improved in his speech, walking and memory with TMS for his Depression. Best doctor ever.
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <div class="review-verified">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Google Review
                        </div>
                    </div>
                </div>

            </div><!-- /#reviewsMasonry -->
        </div>
    </section>

    <!-- Share Your Story CTA -->
    <section class="py-20 bg-white" id="share-story">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="reviews-cta-card reveal">
                <div class="relative z-10">
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Your Story Matters</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-4 leading-tight">Ready to Start Your Journey?</h2>
                    <p class="text-white/60 text-base leading-relaxed max-w-lg mx-auto mb-8">If you're ready to explore TMS therapy, Spravato, or Ketamine treatments, we'd love to hear from you. Every patient's path to wellness begins with a single step.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="/contact.php" class="btn btn-primary py-4 px-8 text-base shadow-[0_8px_24px_rgba(37,111,168,0.4)]">
                            Schedule a Consultation
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5 ml-2 inline-block" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <a href="tel:+17325551234" class="btn btn-ghost py-4 px-8 text-base">
                            Call (732) 555-1234
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Take the First Step</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Your Wellness Journey Starts Here</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">Join hundreds of patients who have found lasting relief through our advanced treatments and compassionate care.</p>
            <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Book Your Consultation Today</a>
        </div>
    </section>

    <!-- Testimonials JavaScript -->
    <script>
    (function() {
        // ── Filter Tabs ──
        var tabs = document.querySelectorAll('.reviews-filter-tab');
        var cards = document.querySelectorAll('.review-card');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                var filter = this.getAttribute('data-filter');

                // Update active tab
                tabs.forEach(function(t) { t.classList.remove('active'); });
                this.classList.add('active');

                // Filter cards
                cards.forEach(function(card) {
                    var tags = card.getAttribute('data-tags') || '';
                    if (filter === 'all' || tags.indexOf(filter) !== -1) {
                        card.style.display = '';
                        card.style.opacity = '1';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    })();
    </script>

<?php include 'footer.php'; ?>
