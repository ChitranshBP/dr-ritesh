<?php
$page_title = 'Insurance & Financing | Dr. Ritesh Amin – TMS Therapy & Psychiatry in NJ';
$page_desc = 'Learn about insurance coverage for TMS therapy, Spravato, and psychiatric services at Dr. Ritesh Amin\'s Edison, NJ clinic. We accept most major insurance plans and offer flexible financing.';
$body_class = 'bg-beige font-sans';
$extra_css = '
    /* ══════════════════════════════════════════
       INSURANCE & FINANCING PAGE
       ══════════════════════════════════════════ */

    /* ── Hero ── */
    .ins-hero {
        position: relative;
        padding: 10rem 0 5rem;
        background: var(--color-midnight);
        overflow: hidden;
    }
    .ins-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px);
        background-size: 30px 30px;
        pointer-events: none;
    }
    .ins-hero::after {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%);
    }
    .ins-hero-orb-1 {
        position: absolute;
        top: -30%;
        right: -8%;
        width: 550px;
        height: 550px;
        background: radial-gradient(circle, rgba(37,111,168,0.16) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .ins-hero-orb-2 {
        position: absolute;
        bottom: -35%;
        left: -6%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    /* ── Commitment Banner ── */
    .ins-commitment {
        position: relative;
        z-index: 10;
        max-width: 1000px;
        margin: -3rem auto 0;
        background: var(--color-midnight);
        border: 1px solid rgba(37,111,168,0.20);
        border-radius: var(--border-radius-lg);
        padding: 2.25rem 3rem;
        box-shadow: 0 20px 50px rgba(0,0,0,0.25);
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }
    .ins-commitment::before {
        content: "";
        position: absolute;
        top: 0;
        left: 2rem; right: 2rem;
        height: 2px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        border-radius: 1px;
    }
    .ins-commit-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        text-align: left;
    }
    .ins-commit-icon {
        width: 3rem;
        height: 3rem;
        min-width: 3rem;
        background: rgba(37,111,168,0.12);
        border: 1px solid rgba(37,111,168,0.25);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold-light);
    }
    .ins-commit-icon svg {
        width: 1.2rem;
        height: 1.2rem;
    }
    .ins-commit-title {
        font-family: var(--font-sans);
        font-size: 0.88rem;
        font-weight: 700;
        color: #fff;
        margin: 0 0 0.15rem;
    }
    .ins-commit-desc {
        font-family: var(--font-sans);
        font-size: 0.75rem;
        color: rgba(255,255,255,0.50);
        margin: 0;
        line-height: 1.4;
    }

    /* ── Section Intro ── */
    .ins-section-intro {
        text-align: center;
        max-width: 650px;
        margin: 0 auto 3.5rem;
    }
    .ins-section-intro p {
        font-size: 1rem;
        line-height: 1.7;
        color: var(--color-text-light);
    }

    /* ── Insurance Providers Grid ── */
    .ins-providers-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        max-width: 900px;
        margin: 0 auto;
    }
    .ins-provider-card {
        background: #fff;
        border: 1px solid rgba(37,111,168,0.08);
        border-radius: 1rem;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.35s ease;
        text-align: center;
    }
    .ins-provider-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(11,25,44,0.06);
        border-color: rgba(37,111,168,0.20);
    }
    .ins-provider-icon {
        width: 3.5rem;
        height: 3.5rem;
        background: linear-gradient(135deg, rgba(37,111,168,0.10), rgba(37,111,168,0.03));
        border: 1px solid rgba(37,111,168,0.18);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold);
    }
    .ins-provider-icon svg {
        width: 1.5rem;
        height: 1.5rem;
    }
    .ins-provider-name {
        font-family: var(--font-sans);
        font-size: 0.88rem;
        font-weight: 700;
        color: var(--color-midnight);
        margin: 0;
    }
    .ins-provider-check {
        display: flex;
        align-items: center;
        gap: 0.35rem;
        font-size: 0.7rem;
        font-weight: 500;
        color: #22c55e;
    }
    .ins-provider-check svg {
        width: 12px;
        height: 12px;
    }

    /* ── Coverage Table ── */
    .ins-coverage-table {
        background: #fff;
        border-radius: 1.5rem;
        overflow: hidden;
        border: 1px solid rgba(37,111,168,0.10);
        box-shadow: 0 4px 20px rgba(11,25,44,0.04);
        max-width: 900px;
        margin: 0 auto;
    }
    .ins-coverage-table table {
        width: 100%;
        border-collapse: collapse;
    }
    .ins-coverage-table thead {
        background: var(--color-midnight);
    }
    .ins-coverage-table thead th {
        font-family: var(--font-sans);
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: rgba(255,255,255,0.75);
        padding: 1.15rem 1.5rem;
        text-align: left;
    }
    .ins-coverage-table thead th:first-child {
        color: #fff;
    }
    .ins-coverage-table tbody tr {
        border-bottom: 1px solid rgba(37,111,168,0.06);
        transition: background 0.2s ease;
    }
    .ins-coverage-table tbody tr:last-child {
        border-bottom: none;
    }
    .ins-coverage-table tbody tr:hover {
        background: rgba(37,111,168,0.02);
    }
    .ins-coverage-table td {
        padding: 1.15rem 1.5rem;
        font-size: 0.9rem;
        color: var(--color-text-light);
        vertical-align: middle;
    }
    .ins-coverage-table td:first-child {
        font-weight: 600;
        color: var(--color-midnight);
    }
    .ins-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.65rem;
        border-radius: 999px;
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }
    .ins-badge.covered {
        background: rgba(34,197,94,0.10);
        color: #16a34a;
        border: 1px solid rgba(34,197,94,0.20);
    }
    .ins-badge.varies {
        background: rgba(37,111,168,0.08);
        color: var(--color-gold);
        border: 1px solid rgba(37,111,168,0.18);
    }
    .ins-badge.self-pay {
        background: rgba(245,158,11,0.10);
        color: #d97706;
        border: 1px solid rgba(245,158,11,0.25);
    }
    .ins-badge svg {
        width: 11px;
        height: 11px;
    }

    /* ── Process Steps ── */
    .ins-process-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.25rem;
        max-width: 1000px;
        margin: 0 auto;
        position: relative;
    }
    .ins-process-grid::before {
        content: "";
        position: absolute;
        top: 2.75rem;
        left: 12%;
        right: 12%;
        height: 2px;
        background: linear-gradient(90deg, rgba(37,111,168,0.08), rgba(37,111,168,0.18), rgba(37,111,168,0.08));
        z-index: 0;
    }
    .ins-process-step {
        position: relative;
        z-index: 1;
        background: #fff;
        border: 1px solid rgba(37,111,168,0.08);
        border-radius: 1.25rem;
        padding: 2rem 1.5rem;
        text-align: center;
        transition: all 0.35s ease;
    }
    .ins-process-step:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(11,25,44,0.06);
        border-color: rgba(37,111,168,0.20);
    }
    .ins-process-num {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background: var(--color-gold);
        color: #fff;
        font-family: var(--font-serif);
        font-weight: 700;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        box-shadow: 0 4px 12px rgba(37,111,168,0.25);
    }
    .ins-process-title {
        font-family: var(--font-serif);
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin: 0 0 0.5rem;
    }
    .ins-process-desc {
        font-size: 0.85rem;
        line-height: 1.6;
        color: var(--color-text-light);
        margin: 0;
    }

    /* ── Financing Cards ── */
    .ins-financing-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        max-width: 1000px;
        margin: 0 auto;
    }
    .ins-financing-card {
        background: #fff;
        border: 1px solid rgba(37,111,168,0.08);
        border-radius: 1.25rem;
        padding: 2.5rem 2rem;
        text-align: center;
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }
    .ins-financing-card::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        opacity: 0;
        transition: opacity 0.35s ease;
    }
    .ins-financing-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(11,25,44,0.06);
        border-color: rgba(37,111,168,0.20);
    }
    .ins-financing-card:hover::before { opacity: 1; }
    .ins-financing-card.highlight {
        background: var(--color-midnight);
        border-color: rgba(37,111,168,0.25);
    }
    .ins-financing-card.highlight::before { opacity: 1; }
    .ins-financing-card.highlight .ins-fin-title { color: #fff; }
    .ins-financing-card.highlight .ins-fin-desc { color: rgba(255,255,255,0.60); }
    .ins-financing-card.highlight .ins-fin-icon {
        background: rgba(37,111,168,0.20);
        border-color: rgba(37,111,168,0.35);
        color: var(--color-gold-light);
    }
    .ins-financing-card.highlight .ins-fin-feature { color: rgba(255,255,255,0.55); }
    .ins-financing-card.highlight .ins-fin-feature svg { color: var(--color-gold-light); }

    .ins-fin-icon {
        width: 3.5rem;
        height: 3.5rem;
        background: rgba(37,111,168,0.08);
        border: 1px solid rgba(37,111,168,0.15);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold);
        margin: 0 auto 1.25rem;
    }
    .ins-fin-icon svg {
        width: 1.4rem;
        height: 1.4rem;
    }
    .ins-fin-title {
        font-family: var(--font-serif);
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin: 0 0 0.5rem;
    }
    .ins-fin-desc {
        font-size: 0.88rem;
        line-height: 1.6;
        color: var(--color-text-light);
        margin: 0 0 1.5rem;
    }
    .ins-fin-features {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }
    .ins-fin-feature {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        font-size: 0.82rem;
        color: var(--color-text-light);
        padding: 0.4rem 0;
    }
    .ins-fin-feature svg {
        width: 14px;
        height: 14px;
        min-width: 14px;
        color: #22c55e;
    }

    /* ── FAQ inline ── */
    .ins-faq-item {
        background: #fff;
        border: 1px solid rgba(37,111,168,0.08);
        border-radius: 1rem;
        margin-bottom: 0.75rem;
        overflow: hidden;
        transition: all 0.35s ease;
    }
    .ins-faq-item:hover {
        border-color: rgba(37,111,168,0.18);
    }
    .ins-faq-item.active {
        border-color: var(--color-gold);
        box-shadow: 0 8px 25px rgba(37,111,168,0.06);
    }
    .ins-faq-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.15rem 1.5rem;
        cursor: pointer;
    }
    .ins-faq-q {
        flex: 1;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin: 0;
        line-height: 1.4;
    }
    .ins-faq-item.active .ins-faq-q { color: var(--color-gold); }
    .ins-faq-toggle {
        width: 1.75rem;
        height: 1.75rem;
        min-width: 1.75rem;
        border-radius: 50%;
        background: rgba(37,111,168,0.07);
        border: 1px solid rgba(37,111,168,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold);
        transition: all 0.4s ease;
    }
    .ins-faq-toggle svg {
        width: 13px;
        height: 13px;
        transition: transform 0.4s ease;
    }
    .ins-faq-item.active .ins-faq-toggle {
        background: var(--color-gold);
        border-color: var(--color-gold);
        color: #fff;
    }
    .ins-faq-item.active .ins-faq-toggle svg { transform: rotate(45deg); }
    .ins-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s cubic-bezier(0.25,0.8,0.25,1), opacity 0.4s ease;
        opacity: 0;
    }
    .ins-faq-item.active .ins-faq-answer {
        max-height: 250px;
        opacity: 1;
    }
    .ins-faq-answer-inner {
        padding: 0 1.5rem 1.5rem 1.5rem;
        font-size: 0.9rem;
        line-height: 1.7;
        color: var(--color-text-light);
    }

    /* ── CTA Card ── */
    .ins-cta-card {
        background: var(--color-midnight);
        border-radius: 2rem;
        padding: 3.5rem;
        position: relative;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 3rem;
        align-items: center;
    }
    .ins-cta-card::before {
        content: "";
        position: absolute;
        top: -80px; right: -80px;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(37,111,168,0.18) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .ins-cta-card::after {
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
        .ins-providers-grid { grid-template-columns: repeat(3, 1fr); }
        .ins-process-grid { grid-template-columns: repeat(2, 1fr); }
        .ins-process-grid::before { display: none; }
        .ins-financing-grid { grid-template-columns: repeat(2, 1fr); }
        .ins-commitment { grid-template-columns: 1fr; gap: 1.25rem; padding: 2rem; }
    }
    @media (max-width: 640px) {
        .ins-hero { padding: 8rem 0 3rem; }
        .ins-providers-grid { grid-template-columns: repeat(2, 1fr); }
        .ins-process-grid { grid-template-columns: 1fr; }
        .ins-financing-grid { grid-template-columns: 1fr; }
        .ins-commitment { margin-top: -2rem; padding: 1.5rem; }
        .ins-cta-card { grid-template-columns: 1fr; padding: 2rem; text-align: center; }
        .ins-coverage-table { overflow-x: auto; }
        .ins-coverage-table table { min-width: 500px; }
    }
';
include 'header.php';
?>

    <!-- Hero -->
    <section class="ins-hero" id="ins-hero">
        <div class="ins-hero-orb-1"></div>
        <div class="ins-hero-orb-2"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Billing & Coverage</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Insurance & <span class="text-gold-light">Financing</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    We believe advanced mental healthcare should be accessible. Our team handles insurance verification and offers flexible options so you can focus on getting better.
                </p>
            </div>
        </div>
    </section>

    <!-- Commitment Banner -->
    <section class="relative z-20 px-4">
        <div class="ins-commitment reveal">
            <div class="ins-commit-item">
                <div class="ins-commit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <p class="ins-commit-title">No Surprise Billing</p>
                    <p class="ins-commit-desc">We verify costs before treatment begins</p>
                </div>
            </div>
            <div class="ins-commit-item">
                <div class="ins-commit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <p class="ins-commit-title">We Handle Prior Auth</p>
                    <p class="ins-commit-desc">Our team manages all insurance paperwork</p>
                </div>
            </div>
            <div class="ins-commit-item">
                <div class="ins-commit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <div>
                    <p class="ins-commit-title">Flexible Payment Options</p>
                    <p class="ins-commit-desc">Financing available for all treatments</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accepted Insurance Providers -->
    <section class="py-20 bg-beige-dark/50" id="accepted-insurance">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Coverage</span>
                <h2 class="section-title">Accepted Insurance Plans</h2>
            </div>
            <div class="ins-section-intro reveal">
                <p>We are in-network with most major insurance carriers in New Jersey. If you don't see your plan listed, please contact us — we may still be able to help.</p>
            </div>
            <div class="ins-providers-grid reveal">
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Aetna</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Blue Cross Blue Shield</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Cigna</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">UnitedHealthcare</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Horizon BCBS</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Oxford</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Medicare</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
                <div class="ins-provider-card">
                    <div class="ins-provider-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h4 class="ins-provider-name">Amerihealth</h4>
                    <span class="ins-provider-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> In-Network</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage by Treatment -->
    <section class="py-20 bg-white" id="coverage-details">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Coverage Details</span>
                <h2 class="section-title">What's Covered by Insurance?</h2>
            </div>
            <div class="ins-section-intro reveal">
                <p>Coverage varies by plan and provider. Below is a general overview — our billing team will verify your specific coverage before treatment begins.</p>
            </div>
            <div class="ins-coverage-table reveal">
                <table>
                    <thead>
                        <tr>
                            <th>Treatment</th>
                            <th>Coverage Status</th>
                            <th>Prior Auth Required</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Psychiatric Evaluation</td>
                            <td><span class="ins-badge covered"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4"/></svg> Covered</span></td>
                            <td>No</td>
                            <td>Standard co-pay applies</td>
                        </tr>
                        <tr>
                            <td>Medication Management</td>
                            <td><span class="ins-badge covered"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4"/></svg> Covered</span></td>
                            <td>No</td>
                            <td>Follow-up visits included</td>
                        </tr>
                        <tr>
                            <td>TMS Therapy</td>
                            <td><span class="ins-badge covered"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4"/></svg> Covered</span></td>
                            <td>Yes</td>
                            <td>FDA-approved for depression; we handle PA</td>
                        </tr>
                        <tr>
                            <td>Spravato (Esketamine)</td>
                            <td><span class="ins-badge covered"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4"/></svg> Covered</span></td>
                            <td>Yes</td>
                            <td>FDA-approved; REMS certification required</td>
                        </tr>
                        <tr>
                            <td>Ketamine Infusions</td>
                            <td><span class="ins-badge self-pay"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> Self-Pay</span></td>
                            <td>N/A</td>
                            <td>Financing available; competitive pricing</td>
                        </tr>
                        <tr>
                            <td>Telehealth Sessions</td>
                            <td><span class="ins-badge varies"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg> Varies</span></td>
                            <td>No</td>
                            <td>Check your plan's telehealth benefits</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-beige-dark/50" id="insurance-process">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Simple Process</span>
                <h2 class="section-title">How Insurance Verification Works</h2>
            </div>
            <div class="ins-section-intro reveal">
                <p>Our team handles the insurance process from start to finish so you can focus on your health.</p>
            </div>
            <div class="ins-process-grid reveal">
                <div class="ins-process-step">
                    <div class="ins-process-num">1</div>
                    <h3 class="ins-process-title">Contact Us</h3>
                    <p class="ins-process-desc">Call or fill out our online form with your insurance information and treatment interest.</p>
                </div>
                <div class="ins-process-step">
                    <div class="ins-process-num">2</div>
                    <h3 class="ins-process-title">We Verify Benefits</h3>
                    <p class="ins-process-desc">Our billing team contacts your insurance to verify coverage, co-pays, and deductible details.</p>
                </div>
                <div class="ins-process-step">
                    <div class="ins-process-num">3</div>
                    <h3 class="ins-process-title">Cost Breakdown</h3>
                    <p class="ins-process-desc">We provide a clear, transparent estimate of your costs before any treatment begins. No surprises.</p>
                </div>
                <div class="ins-process-step">
                    <div class="ins-process-num">4</div>
                    <h3 class="ins-process-title">Begin Treatment</h3>
                    <p class="ins-process-desc">Once everything is confirmed, we schedule your sessions and handle ongoing billing directly with your insurer.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Financing Options -->
    <section class="py-20 bg-white" id="financing-options">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Affordable Care</span>
                <h2 class="section-title">Financing Options</h2>
            </div>
            <div class="ins-section-intro reveal">
                <p>Everyone deserves access to advanced mental healthcare. We offer multiple payment pathways to make treatment affordable.</p>
            </div>
            <div class="ins-financing-grid reveal">
                <!-- Self-Pay -->
                <div class="ins-financing-card">
                    <div class="ins-fin-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3 class="ins-fin-title">Competitive Self-Pay</h3>
                    <p class="ins-fin-desc">Transparent, competitive pricing for patients paying out-of-pocket.</p>
                    <ul class="ins-fin-features">
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Clear upfront pricing</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> No hidden fees</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Superbills provided for OON reimbursement</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> HSA/FSA accepted</li>
                    </ul>
                </div>
                <!-- Payment Plans — Highlight -->
                <div class="ins-financing-card highlight">
                    <div class="ins-fin-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                    </div>
                    <h3 class="ins-fin-title">Flexible Payment Plans</h3>
                    <p class="ins-fin-desc">Spread the cost of treatment over time with our interest-free options.</p>
                    <ul class="ins-fin-features">
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> 0% interest financing available</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Monthly installment options</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> No credit check required</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Customizable to your budget</li>
                    </ul>
                </div>
                <!-- Out-of-Network -->
                <div class="ins-financing-card">
                    <div class="ins-fin-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    </div>
                    <h3 class="ins-fin-title">Out-of-Network Support</h3>
                    <p class="ins-fin-desc">We provide everything you need to maximize your out-of-network benefits.</p>
                    <ul class="ins-fin-features">
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Detailed superbills provided</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Help with filing claims</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> OON benefit verification</li>
                        <li class="ins-fin-feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg> Maximize reimbursement potential</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance FAQs -->
    <section class="py-20 bg-beige-dark/50" id="insurance-faqs">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Common Questions</span>
                <h2 class="section-title">Insurance & Billing FAQs</h2>
            </div>
            <div class="reveal" id="insFaqContainer">
                <div class="ins-faq-item active">
                    <div class="ins-faq-header">
                        <h3 class="ins-faq-q">How do I know if my insurance covers TMS therapy?</h3>
                        <div class="ins-faq-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                    </div>
                    <div class="ins-faq-answer">
                        <div class="ins-faq-answer-inner">
                            Most major insurance plans cover TMS therapy for treatment-resistant depression. Our billing team will verify your specific coverage, including co-pays, deductibles, and prior authorization requirements, before treatment begins. Just provide your insurance details when you contact us.
                        </div>
                    </div>
                </div>
                <div class="ins-faq-item">
                    <div class="ins-faq-header">
                        <h3 class="ins-faq-q">What does "prior authorization" mean?</h3>
                        <div class="ins-faq-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                    </div>
                    <div class="ins-faq-answer">
                        <div class="ins-faq-answer-inner">
                            Prior authorization is approval from your insurance company before certain treatments can begin. It confirms that the treatment is medically necessary. Our team handles this entire process for you — we submit the required documentation and follow up with your insurer until approval is granted.
                        </div>
                    </div>
                </div>
                <div class="ins-faq-item">
                    <div class="ins-faq-header">
                        <h3 class="ins-faq-q">What if my insurance denies coverage?</h3>
                        <div class="ins-faq-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                    </div>
                    <div class="ins-faq-answer">
                        <div class="ins-faq-answer-inner">
                            If your insurance initially denies coverage, we will assist with the appeals process. Many denials are overturned on appeal. Additionally, we offer self-pay rates and flexible financing options as alternatives so you can still access the treatment you need.
                        </div>
                    </div>
                </div>
                <div class="ins-faq-item">
                    <div class="ins-faq-header">
                        <h3 class="ins-faq-q">Can I use my HSA or FSA for treatment?</h3>
                        <div class="ins-faq-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                    </div>
                    <div class="ins-faq-answer">
                        <div class="ins-faq-answer-inner">
                            Yes! Health Savings Accounts (HSA) and Flexible Spending Accounts (FSA) can be used to pay for our services, including TMS therapy, Spravato treatments, Ketamine infusions, and standard psychiatric consultations. These are tax-advantaged ways to cover your mental health treatment costs.
                        </div>
                    </div>
                </div>
                <div class="ins-faq-item">
                    <div class="ins-faq-header">
                        <h3 class="ins-faq-q">When is payment due?</h3>
                        <div class="ins-faq-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                    </div>
                    <div class="ins-faq-answer">
                        <div class="ins-faq-answer-inner">
                            Co-pays and deductibles are collected at the time of service. For self-pay patients, payment is due at the time of each session. If you're on a payment plan, installments are due according to the agreed-upon schedule. We accept all major credit cards, debit cards, HSA/FSA cards, cash, and checks.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white" id="verify-coverage">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="ins-cta-card reveal">
                <div class="relative z-10">
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Get Started</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-3 leading-tight">Verify Your Coverage Today</h2>
                    <p class="text-white/60 text-sm leading-relaxed max-w-md mb-0">Our team will check your insurance benefits and provide a clear cost breakdown — completely free and with no obligation.</p>
                </div>
                <div class="relative z-10 flex flex-col items-center gap-4">
                    <a href="/contact.php" class="btn btn-primary py-4 px-8 text-base shadow-[0_8px_24px_rgba(37,111,168,0.4)]">
                        Check My Coverage
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5 ml-2 inline-block" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="tel:+17325551234" class="text-white/50 text-sm hover:text-gold-light transition-colors">or call (732) 555-1234</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Your Health Comes First</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Don't Let Cost Be a Barrier</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">We'll work with you to find the most affordable path to the care you deserve.</p>
            <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Book Your Consultation Today</a>
        </div>
    </section>

    <!-- FAQ JavaScript -->
    <script>
    (function() {
        document.querySelectorAll('.ins-faq-header').forEach(function(header) {
            header.addEventListener('click', function() {
                var item = this.parentElement;
                var wasActive = item.classList.contains('active');
                document.querySelectorAll('.ins-faq-item').forEach(function(el) {
                    el.classList.remove('active');
                });
                if (!wasActive) item.classList.add('active');
            });
        });
    })();
    </script>

<?php include 'footer.php'; ?>
