<?php
$page_title = 'Frequently Asked Questions | Dr. Ritesh Amin – TMS Therapy & Psychiatry in NJ';
$page_desc = 'Find answers to common questions about TMS therapy, Spravato, Ketamine infusions, insurance coverage, and psychiatric care at Dr. Ritesh Amin\'s Edison, NJ clinic.';
$body_class = 'bg-beige font-sans';
$extra_css = '
    /* ══════════════════════════════════════════
       FAQ PAGE STYLES
       ══════════════════════════════════════════ */

    /* ── Hero ── */
    .faq-hero {
        position: relative;
        padding: 10rem 0 5rem;
        background: var(--color-midnight);
        overflow: hidden;
    }
    .faq-hero::before {
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
    .faq-hero::after {
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

    /* ── Dot-grid texture on hero ── */
    .faq-hero-texture {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px);
        background-size: 30px 30px;
        pointer-events: none;
    }

    /* ── Gold top hairline ── */
    .faq-hero-hairline {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg,
            transparent 0%,
            var(--color-gold) 22%,
            var(--color-gold-light) 50%,
            var(--color-gold) 78%,
            transparent 100%);
        pointer-events: none;
    }

    /* ── Category Tabs ── */
    .faq-tabs {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        margin-bottom: 3rem;
    }
    .faq-tab {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.65rem 1.35rem;
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
    .faq-tab:hover {
        border-color: var(--color-gold);
        color: var(--color-gold);
        box-shadow: 0 4px 12px rgba(37,111,168,0.1);
    }
    .faq-tab.active {
        background: var(--color-gold);
        color: #fff;
        border-color: var(--color-gold);
        box-shadow: 0 4px 16px rgba(37,111,168,0.3);
    }
    .faq-tab svg {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
    }

    /* ── FAQ Category Blocks ── */
    .faq-category-block {
        margin-bottom: 3rem;
    }
    .faq-category-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(37,111,168,0.12);
    }
    .faq-category-icon {
        width: 3rem;
        height: 3rem;
        min-width: 3rem;
        background: linear-gradient(135deg, rgba(37,111,168,0.14), rgba(37,111,168,0.04));
        border: 1px solid rgba(37,111,168,0.22);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold);
        transition: all 0.3s ease;
    }
    .faq-category-icon svg {
        width: 1.25rem;
        height: 1.25rem;
    }
    .faq-category-title {
        font-family: var(--font-serif);
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin: 0;
    }
    .faq-category-count {
        font-family: var(--font-sans);
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--color-gold);
        margin-left: auto;
        background: rgba(37,111,168,0.07);
        border: 1px solid rgba(37,111,168,0.18);
        padding: 0.3rem 0.75rem;
        border-radius: 999px;
    }

    /* ── FAQ Accordion (enhanced) ── */
    .faq-accordion {
        display: flex;
        flex-direction: column;
    }
    .faq-accordion-item {
        border: 1px solid rgba(37,111,168,0.10);
        border-radius: 1rem;
        margin-bottom: 0.75rem;
        overflow: hidden;
        background: #fff;
        transition: all 0.35s ease;
    }
    .faq-accordion-item:hover {
        border-color: rgba(37,111,168,0.22);
        box-shadow: 0 4px 18px rgba(11,25,44,0.04);
    }
    .faq-accordion-item.active {
        border-color: var(--color-gold);
        box-shadow: 0 8px 30px rgba(37,111,168,0.08);
    }
    .faq-accordion-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.25rem 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .faq-accordion-header:hover {
        background: rgba(37,111,168,0.02);
    }
    .faq-accordion-num {
        font-family: var(--font-serif);
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--color-gold);
        min-width: 1.75rem;
        opacity: 0.6;
    }
    .faq-accordion-item.active .faq-accordion-num {
        opacity: 1;
    }
    .faq-accordion-question {
        flex: 1;
        font-family: var(--font-sans);
        font-size: 1rem;
        font-weight: 600;
        color: var(--color-midnight);
        line-height: 1.4;
        margin: 0;
        transition: color 0.3s ease;
    }
    .faq-accordion-item.active .faq-accordion-question {
        color: var(--color-gold);
    }
    .faq-accordion-toggle {
        width: 2rem;
        height: 2rem;
        min-width: 2rem;
        border-radius: 50%;
        background: rgba(37,111,168,0.07);
        border: 1px solid rgba(37,111,168,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        color: var(--color-gold);
    }
    .faq-accordion-toggle svg {
        width: 14px;
        height: 14px;
        transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .faq-accordion-item.active .faq-accordion-toggle {
        background: var(--color-gold);
        border-color: var(--color-gold);
        color: #fff;
    }
    .faq-accordion-item.active .faq-accordion-toggle svg {
        transform: rotate(45deg);
    }
    .faq-accordion-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s cubic-bezier(0.25, 0.8, 0.25, 1), opacity 0.4s ease;
        opacity: 0;
    }
    .faq-accordion-item.active .faq-accordion-answer {
        max-height: 300px;
        opacity: 1;
    }
    .faq-accordion-answer-inner {
        padding: 0 1.5rem 1.5rem 4.25rem;
        font-size: 0.95rem;
        line-height: 1.7;
        color: var(--color-text-light);
    }
    .faq-accordion-answer-inner a {
        color: var(--color-gold);
        font-weight: 500;
        text-decoration: underline;
        text-underline-offset: 2px;
    }
    .faq-accordion-answer-inner a:hover {
        color: var(--color-gold-light);
    }

    /* ── Still Have Questions Card ── */
    .faq-cta-card {
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
    .faq-cta-card::before {
        content: "";
        position: absolute;
        top: -80px;
        right: -80px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(37,111,168,0.18) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .faq-cta-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 2rem;
        right: 2rem;
        height: 2px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        border-radius: 1px;
    }
    .faq-cta-methods {
        display: flex;
        gap: 2rem;
        margin-top: 1.5rem;
    }
    .faq-cta-method {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .faq-cta-method-icon {
        width: 2.75rem;
        height: 2.75rem;
        min-width: 2.75rem;
        background: rgba(37,111,168,0.12);
        border: 1px solid rgba(37,111,168,0.25);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold-light);
    }
    .faq-cta-method-icon svg {
        width: 1.15rem;
        height: 1.15rem;
    }
    .faq-cta-method-label {
        font-family: var(--font-sans);
        font-size: 0.68rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: rgba(255,255,255,0.45);
    }
    .faq-cta-method-value {
        font-family: var(--font-sans);
        font-size: 0.95rem;
        font-weight: 600;
        color: #fff;
    }

    /* ── Search Input ── */
    .faq-search-wrapper {
        position: relative;
        max-width: 520px;
        margin: 0 auto 2rem;
    }
    .faq-search-input {
        width: 100%;
        padding: 0.9rem 1.25rem 0.9rem 3rem;
        border: 1.5px solid #e2e8f0;
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        color: var(--color-midnight);
        background: #fff;
        transition: all 0.3s ease;
        outline: none;
    }
    .faq-search-input:focus {
        border-color: var(--color-gold);
        box-shadow: 0 0 0 3px rgba(37,111,168,0.08);
    }
    .faq-search-input::placeholder {
        color: #94a3b8;
    }
    .faq-search-icon {
        position: absolute;
        left: 1.1rem;
        top: 50%;
        transform: translateY(-50%);
        width: 1.1rem;
        height: 1.1rem;
        color: #94a3b8;
        pointer-events: none;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .faq-hero { padding: 8rem 0 3rem; }
        .faq-cta-card {
            grid-template-columns: 1fr;
            padding: 2rem;
            text-align: center;
        }
        .faq-cta-methods {
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }
        .faq-accordion-header { padding: 1rem 1.15rem; }
        .faq-accordion-answer-inner { padding: 0 1.15rem 1.25rem 1.15rem; }
        .faq-category-count { display: none; }
        .faq-tabs { gap: 0.4rem; }
        .faq-tab { font-size: 0.75rem; padding: 0.5rem 0.9rem; }
        .faq-tab svg { display: none; }
    }
';
include 'header.php';
?>

    <!-- FAQ Hero -->
    <section class="faq-hero" id="faq-hero">
        <div class="faq-hero-texture"></div>
        <div class="faq-hero-hairline"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Knowledge Base</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Frequently Asked <span class="text-gold-light">Questions</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Everything you need to know about TMS therapy, our treatments, insurance coverage, and what to expect when you visit our clinic.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Main Section -->
    <section class="py-20 bg-beige-dark/50 relative" id="faq-main">
        <div class="container mx-auto px-4 max-w-4xl">

            <!-- Search -->
            <div class="reveal">
                <div class="faq-search-wrapper">
                    <svg class="faq-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" class="faq-search-input" id="faqSearch" placeholder="Search for a question..." aria-label="Search FAQs">
                </div>
            </div>

            <!-- Category Tabs -->
            <div class="faq-tabs reveal" id="faqTabs">
                <button class="faq-tab active" data-category="all">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    All Questions
                </button>
                <button class="faq-tab" data-category="general">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    General
                </button>
                <button class="faq-tab" data-category="tms">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    TMS Therapy
                </button>
                <button class="faq-tab" data-category="insurance">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Insurance & Billing
                </button>
                <button class="faq-tab" data-category="treatment">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    Treatment Process
                </button>
                <button class="faq-tab" data-category="safety">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Safety & Side Effects
                </button>
            </div>

            <!-- FAQ Categories -->
            <div id="faqContainer">

                <!-- General Questions -->
                <div class="faq-category-block reveal" data-category="general">
                    <div class="faq-category-header">
                        <div class="faq-category-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </div>
                        <h2 class="faq-category-title">General Questions</h2>
                        <span class="faq-category-count">5 Questions</span>
                    </div>
                    <div class="faq-accordion">
                        <div class="faq-accordion-item active" data-category="general">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">01</span>
                                <h3 class="faq-accordion-question">What conditions does Dr. Amin treat?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Dr. Amin specializes in treatment-resistant depression, generalized anxiety, OCD, PTSD, ADHD, bipolar depression, and panic disorder. He also treats neurological conditions including traumatic brain injury recovery, Parkinson's symptoms, chronic migraine, stroke recovery, and neuropathic pain through specialized TMS protocols.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="general">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">02</span>
                                <h3 class="faq-accordion-question">Do I need a referral to see Dr. Amin?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    No referral is needed for general psychiatric consultations. However, some insurance plans may require a referral for TMS therapy or Spravato treatments. Our team will help you verify this during the scheduling process — just <a href="/contact.php">contact us</a> and we'll take care of the rest.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="general">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">03</span>
                                <h3 class="faq-accordion-question">What should I bring to my first appointment?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Please bring a valid photo ID, your insurance card, a list of current medications (including dosages), and any relevant medical records or referral letters. If you've completed any prior psychiatric evaluations, those are helpful as well.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="general">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">04</span>
                                <h3 class="faq-accordion-question">How long is the initial consultation?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Your first visit typically lasts 45–60 minutes. This allows Dr. Amin to conduct a thorough evaluation, discuss your history, understand your goals, and develop a personalized treatment plan tailored to your unique needs.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="general">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">05</span>
                                <h3 class="faq-accordion-question">Do you offer telehealth / virtual appointments?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Yes, we offer telehealth consultations for general psychiatric evaluations and medication management follow-ups. In-person treatments like TMS, Spravato, and Ketamine must be administered at our Edison, NJ clinic for safety and supervision.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TMS Therapy -->
                <div class="faq-category-block reveal" data-category="tms">
                    <div class="faq-category-header">
                        <div class="faq-category-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        </div>
                        <h2 class="faq-category-title">TMS Therapy</h2>
                        <span class="faq-category-count">5 Questions</span>
                    </div>
                    <div class="faq-accordion">
                        <div class="faq-accordion-item" data-category="tms">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">01</span>
                                <h3 class="faq-accordion-question">What is TMS therapy and how does it work?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Transcranial Magnetic Stimulation (TMS) is an FDA-approved, non-invasive treatment that uses gentle magnetic pulses — similar in strength to an MRI — to stimulate specific areas of the brain involved in mood regulation. It reactivates neural pathways that have become underactive in conditions like depression, helping restore normal brain function without medication.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="tms">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">02</span>
                                <h3 class="faq-accordion-question">Is TMS therapy painful?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Most patients describe TMS as a gentle tapping sensation on the scalp. Some may experience mild discomfort during the first few sessions, which typically subsides quickly. No anesthesia or sedation is required, and you can drive yourself to and from each appointment.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="tms">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">03</span>
                                <h3 class="faq-accordion-question">How many TMS sessions will I need?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    A standard TMS treatment course consists of 36 sessions delivered over 4–6 weeks (5 sessions per week). Each session takes approximately 20–30 minutes. Dr. Amin will create a personalized protocol during your initial evaluation, and maintenance sessions may be recommended based on your response.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="tms">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">04</span>
                                <h3 class="faq-accordion-question">When will I start noticing results from TMS?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Most patients begin to notice improvements within 2–3 weeks of starting treatment, with the full effects typically experienced after completing the entire course. Some patients may experience earlier improvements in sleep, energy, or concentration before a shift in overall mood.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="tms">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">05</span>
                                <h3 class="faq-accordion-question">Can I continue my medications during TMS therapy?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Yes, in most cases. TMS is often used alongside existing medications. Dr. Amin will review your full medication list during your consultation and make recommendations. Some patients are able to reduce or discontinue certain medications after successful TMS treatment, but this is always done gradually under medical supervision.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Insurance & Billing -->
                <div class="faq-category-block reveal" data-category="insurance">
                    <div class="faq-category-header">
                        <div class="faq-category-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h2 class="faq-category-title">Insurance & Billing</h2>
                        <span class="faq-category-count">4 Questions</span>
                    </div>
                    <div class="faq-accordion">
                        <div class="faq-accordion-item" data-category="insurance">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">01</span>
                                <h3 class="faq-accordion-question">Does insurance cover TMS therapy?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Yes, most major insurance plans now cover TMS therapy for treatment-resistant depression, including Aetna, Blue Cross Blue Shield, Cigna, UnitedHealthcare, Medicare, Horizon, and Oxford. Our billing team will verify your coverage and handle prior authorization before treatment begins — no surprises.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="insurance">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">02</span>
                                <h3 class="faq-accordion-question">What if my insurance doesn't cover TMS?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    We offer competitive self-pay rates and flexible financing options to make TMS accessible. We also provide superbills for out-of-network reimbursement. Our team will work with you to find the best financial path forward — everyone deserves access to advanced care.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="insurance">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">03</span>
                                <h3 class="faq-accordion-question">Is Spravato covered by insurance?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Spravato (esketamine) is FDA-approved and covered by most major insurance plans for treatment-resistant depression. Our team handles the entire prior authorization process. We'll verify your benefits and explain any out-of-pocket costs before starting treatment.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="insurance">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">04</span>
                                <h3 class="faq-accordion-question">Will I know the cost before treatment begins?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Absolutely. Transparency is a core value of our practice. After verifying your insurance, we'll provide a clear breakdown of estimated costs, co-pays, and any out-of-pocket expenses before your first treatment session. There are never hidden fees.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Treatment Process -->
                <div class="faq-category-block reveal" data-category="treatment">
                    <div class="faq-category-header">
                        <div class="faq-category-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                        </div>
                        <h2 class="faq-category-title">Treatment Process</h2>
                        <span class="faq-category-count">4 Questions</span>
                    </div>
                    <div class="faq-accordion">
                        <div class="faq-accordion-item" data-category="treatment">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">01</span>
                                <h3 class="faq-accordion-question">What happens during a typical TMS session?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    You'll be comfortably seated in our treatment chair while a specialized coil is positioned on your head. The device delivers brief magnetic pulses to targeted brain areas. Sessions last 20–30 minutes and you can listen to music, watch TV, or simply relax. Afterwards, you go about your day normally — no recovery time needed.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="treatment">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">02</span>
                                <h3 class="faq-accordion-question">What is Spravato and how is it administered?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Spravato (esketamine) is an FDA-approved nasal spray for treatment-resistant depression. It's self-administered under medical supervision in our clinic. Each session lasts about 2 hours (including a mandatory 2-hour monitoring period). Treatment typically starts with twice-weekly visits, then transitions to weekly and eventually bi-weekly maintenance.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="treatment">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">03</span>
                                <h3 class="faq-accordion-question">How does ketamine infusion therapy work?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Ketamine is administered intravenously at a carefully controlled, sub-anesthetic dose over approximately 40 minutes. Many patients experience rapid relief from depressive symptoms — sometimes within hours. A typical course involves 6 infusions over 2–3 weeks. You'll be monitored throughout and will need someone to drive you home afterward.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="treatment">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">04</span>
                                <h3 class="faq-accordion-question">How does Dr. Amin determine which treatment is right for me?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    During your initial consultation, Dr. Amin conducts a thorough evaluation of your symptoms, medical history, previous treatments, and personal goals. He takes a whole-person approach, considering all factors to recommend the most effective treatment pathway — whether that's TMS, Spravato, Ketamine, medication management, or a combination.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Safety & Side Effects -->
                <div class="faq-category-block reveal" data-category="safety">
                    <div class="faq-category-header">
                        <div class="faq-category-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h2 class="faq-category-title">Safety & Side Effects</h2>
                        <span class="faq-category-count">4 Questions</span>
                    </div>
                    <div class="faq-accordion">
                        <div class="faq-accordion-item" data-category="safety">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">01</span>
                                <h3 class="faq-accordion-question">Is TMS therapy safe?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    Yes. TMS has been rigorously studied and is FDA-approved for the treatment of depression, OCD, and other conditions. It's non-invasive and non-systemic, meaning it doesn't circulate through your bloodstream like medications. The most common side effect is mild scalp discomfort during the first few sessions, which typically resolves quickly.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="safety">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">02</span>
                                <h3 class="faq-accordion-question">Are there any side effects of TMS?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    TMS side effects are generally mild and temporary. The most commonly reported include mild headache, scalp discomfort at the treatment site, and lightheadedness immediately after treatment. Unlike medications, TMS does not cause weight gain, sexual dysfunction, drowsiness, or gastrointestinal issues. Serious side effects are extremely rare.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="safety">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">03</span>
                                <h3 class="faq-accordion-question">Who should NOT receive TMS therapy?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    TMS is not recommended for individuals with metallic implants in or near the head (excluding dental fillings or braces), cochlear implants, or implanted stimulators. Patients with a history of seizures or epilepsy may need additional evaluation. Dr. Amin will conduct a thorough screening during your consultation to ensure TMS is safe and appropriate for you.
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item" data-category="safety">
                            <div class="faq-accordion-header">
                                <span class="faq-accordion-num">04</span>
                                <h3 class="faq-accordion-question">Is ketamine therapy safe?</h3>
                                <div class="faq-accordion-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg></div>
                            </div>
                            <div class="faq-accordion-answer">
                                <div class="faq-accordion-answer-inner">
                                    When administered in a controlled clinical setting with proper medical supervision, ketamine therapy is considered safe. During infusion, you may experience temporary dissociation, dizziness, or nausea, which resolve shortly after the session. Our team monitors your vital signs throughout the entire treatment to ensure your safety and comfort.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /#faqContainer -->

        </div>
    </section>

    <!-- Still Have Questions CTA -->
    <section class="py-20 bg-white" id="still-questions">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="faq-cta-card reveal">
                <div class="relative z-10">
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Still Have Questions?</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-3 leading-tight">We're Here to Help</h2>
                    <p class="text-white/60 text-sm leading-relaxed max-w-md mb-0">Our team is ready to answer any questions and guide you through the process. Reach out — no pressure, just support.</p>
                    <div class="faq-cta-methods">
                        <div class="faq-cta-method">
                            <div class="faq-cta-method-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div>
                                <div class="faq-cta-method-label">Call Us</div>
                                <a href="tel:+17325551234" class="faq-cta-method-value hover:text-gold-light transition-colors">(732) 555-1234</a>
                            </div>
                        </div>
                        <div class="faq-cta-method">
                            <div class="faq-cta-method-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <div class="faq-cta-method-label">Email</div>
                                <a href="mailto:info@drriteshamin.com" class="faq-cta-method-value hover:text-gold-light transition-colors">info@drriteshamin.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative z-10 flex flex-col items-center gap-4">
                    <a href="/contact.php" class="btn btn-primary py-4 px-8 text-base shadow-[0_8px_24px_rgba(37,111,168,0.4)]">
                        Schedule Consultation
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5 ml-2 inline-block" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Ready to Begin?</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Take the First Step Toward Better Mental Health</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">You don't have to navigate this journey alone. Dr. Amin and our dedicated team are here to help you regain your life.</p>
            <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Book Your Consultation Today</a>
        </div>
    </section>

    <!-- FAQ JavaScript -->
    <script>
    (function() {
        // ── Accordion Toggle ──
        document.querySelectorAll('.faq-accordion-header').forEach(function(header) {
            header.addEventListener('click', function() {
                var item = this.parentElement;
                var wasActive = item.classList.contains('active');

                // Close all siblings in the same accordion
                var accordion = item.closest('.faq-accordion');
                accordion.querySelectorAll('.faq-accordion-item').forEach(function(sibling) {
                    sibling.classList.remove('active');
                });

                // Toggle clicked item
                if (!wasActive) {
                    item.classList.add('active');
                }
            });
        });

        // ── Category Tab Filtering ──
        var tabs = document.querySelectorAll('.faq-tab');
        var categoryBlocks = document.querySelectorAll('.faq-category-block');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                var category = this.getAttribute('data-category');

                // Update active tab
                tabs.forEach(function(t) { t.classList.remove('active'); });
                this.classList.add('active');

                // Show/hide category blocks
                categoryBlocks.forEach(function(block) {
                    if (category === 'all' || block.getAttribute('data-category') === category) {
                        block.style.display = '';
                        block.style.opacity = '1';
                        block.style.transform = 'translateY(0)';
                    } else {
                        block.style.display = 'none';
                    }
                });
            });
        });

        // ── Search Filtering ──
        var searchInput = document.getElementById('faqSearch');
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                var query = this.value.toLowerCase().trim();
                var allItems = document.querySelectorAll('.faq-accordion-item');
                var allBlocks = document.querySelectorAll('.faq-category-block');

                // Reset tabs to "All"
                tabs.forEach(function(t) { t.classList.remove('active'); });
                document.querySelector('[data-category="all"]').classList.add('active');

                // Show all blocks first
                allBlocks.forEach(function(block) {
                    block.style.display = '';
                });

                if (!query) {
                    // Show all items
                    allItems.forEach(function(item) {
                        item.style.display = '';
                    });
                    // Show all blocks
                    allBlocks.forEach(function(block) {
                        block.style.display = '';
                    });
                    return;
                }

                // Filter items
                allItems.forEach(function(item) {
                    var question = item.querySelector('.faq-accordion-question').textContent.toLowerCase();
                    var answer = item.querySelector('.faq-accordion-answer-inner').textContent.toLowerCase();
                    if (question.indexOf(query) !== -1 || answer.indexOf(query) !== -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Hide blocks with no visible items
                allBlocks.forEach(function(block) {
                    var visibleItems = block.querySelectorAll('.faq-accordion-item:not([style*="display: none"])');
                    if (visibleItems.length === 0) {
                        block.style.display = 'none';
                    }
                });
            });
        }
    })();
    </script>

<?php include 'footer.php'; ?>
