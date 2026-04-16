<?php
$page_title = 'Contact Us | Dr. Ritesh Amin – Psychiatry & TMS in Edison, NJ';
$page_desc = 'Schedule a consultation with Dr. Ritesh Amin. Contact our Edison, NJ clinic for TMS therapy, Spravato, Ketamine infusions, and psychiatric care.';
$body_class = 'bg-beige font-sans';
$extra_css = '
    /* ── Contact Page Styles ── */
    .contact-hero {
        position: relative;
        padding: 10rem 0 5rem;
        background: var(--color-midnight);
        overflow: hidden;
    }
    .contact-hero::before {
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
    .contact-hero::after {
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

    /* ── Form Styles ── */
    .contact-form-card {
        background: #fff;
        border-radius: 2rem;
        padding: 3rem;
        box-shadow: 0 25px 60px rgba(11,25,44,0.08);
        border: 1px solid rgba(37,111,168,0.08);
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-group label {
        display: block;
        font-family: var(--font-sans);
        font-size: 0.82rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--color-midnight);
        margin-bottom: 0.5rem;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 0.9rem 1.25rem;
        border: 1.5px solid #e2e8f0;
        border-radius: 0.85rem;
        font-family: var(--font-sans);
        font-size: 0.95rem;
        color: var(--color-midnight);
        background: #f8fafc;
        transition: all 0.3s ease;
        outline: none;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--color-gold);
        background: #fff;
        box-shadow: 0 0 0 3px rgba(37,111,168,0.08);
    }
    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #94a3b8;
    }
    .form-group textarea {
        min-height: 130px;
        resize: vertical;
    }
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.25rem;
    }
    @media (max-width: 640px) {
        .form-row { grid-template-columns: 1fr; }
        .contact-form-card { padding: 1.75rem; }
    }

    /* ── Info Cards ── */
    .contact-info-card {
        background: #fff;
        border-radius: 1.5rem;
        padding: 2rem;
        border: 1px solid rgba(37,111,168,0.08);
        transition: all 0.35s ease;
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
    }
    .contact-info-card:hover {
        box-shadow: 0 12px 40px rgba(11,25,44,0.08);
        transform: translateY(-3px);
    }
    .contact-info-icon {
        width: 3.25rem;
        height: 3.25rem;
        min-width: 3.25rem;
        background: rgba(37,111,168,0.08);
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-gold);
        transition: all 0.3s ease;
    }
    .contact-info-card:hover .contact-info-icon {
        background: var(--color-gold);
        color: #fff;
    }
    .contact-info-icon svg {
        width: 1.35rem;
        height: 1.35rem;
    }
    .contact-info-label {
        font-family: var(--font-sans);
        font-size: 0.72rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: var(--color-gold);
        margin-bottom: 0.3rem;
    }
    .contact-info-value {
        font-family: var(--font-serif);
        font-size: 1.05rem;
        color: var(--color-midnight);
        font-weight: 600;
        line-height: 1.4;
    }
    .contact-info-sub {
        font-family: var(--font-sans);
        font-size: 0.85rem;
        color: #64748b;
        margin-top: 0.2rem;
        line-height: 1.5;
    }

    /* ── Map ── */
    .contact-map-wrapper {
        border-radius: 2rem;
        overflow: hidden;
        border: 1px solid rgba(37,111,168,0.1);
        box-shadow: 0 15px 40px rgba(11,25,44,0.06);
        aspect-ratio: 16 / 7;
    }
    .contact-map-wrapper iframe {
        width: 100%;
        height: 100%;
        display: block;
    }

    /* ── Insurance Logos ── */
    .insurance-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.65rem 1.25rem;
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.88rem;
        font-weight: 500;
        color: var(--color-midnight);
        transition: all 0.25s ease;
    }
    .insurance-pill:hover {
        border-color: var(--color-gold);
        box-shadow: 0 4px 12px rgba(37,111,168,0.1);
    }
    .insurance-pill svg {
        width: 1rem;
        height: 1rem;
        color: var(--color-gold);
    }

    /* ── Toast ── */
    .form-toast {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        background: var(--color-midnight);
        color: #fff;
        padding: 1rem 1.75rem;
        border-radius: 1rem;
        font-family: var(--font-sans);
        font-size: 0.9rem;
        font-weight: 500;
        box-shadow: 0 12px 40px rgba(0,0,0,0.2);
        transform: translateY(150%);
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.16,1,0.3,1);
        z-index: 9999;
    }
    .form-toast.show {
        transform: translateY(0);
        opacity: 1;
    }
';
include 'header.php';
?>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Get In Touch</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Let's Start Your <span class="text-gold-light">Journey</span> Together
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Whether you're exploring TMS therapy, Spravato, or Ketamine infusions — or simply seeking compassionate psychiatric care — we're here to answer your questions and help you take the first step.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Contact Section: Form + Info -->
    <section class="py-20 bg-beige-dark/50 relative" id="contact-form">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">

                <!-- Contact Form -->
                <div class="lg:col-span-7 reveal">
                    <div class="contact-form-card">
                        <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-3">Schedule a Consultation</span>
                        <h2 class="text-3xl font-serif text-midnight mb-2">Send Us a Message</h2>
                        <p class="text-gray-500 text-sm mb-8 leading-relaxed">Fill out the form below and our team will get back to you within one business day. All information is kept strictly confidential.</p>

                        <form id="contactForm" novalidate>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name *</label>
                                    <input type="text" id="firstName" name="firstName" placeholder="John" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name *</label>
                                    <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="service">Service of Interest</label>
                                <select id="service" name="service">
                                    <option value="">— Select a service —</option>
                                    <option value="tms-psychiatry">TMS Therapy (Psychiatry)</option>
                                    <option value="tms-neurology">TMS Therapy (Neurology)</option>
                                    <option value="spravato">Spravato® (Esketamine)</option>
                                    <option value="ketamine">Ketamine IV Infusion</option>
                                    <option value="general">General Psychiatric Consultation</option>
                                    <option value="other">Other / Not Sure</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Your Message *</label>
                                <textarea id="message" name="message" placeholder="Tell us a bit about what you're looking for, and any questions you may have..." required></textarea>
                            </div>

                            <div class="flex items-start gap-3 mb-6">
                                <input type="checkbox" id="hipaa" name="hipaa" class="mt-1 accent-[#256fa8] w-4 h-4 cursor-pointer" required>
                                <label for="hipaa" class="!text-xs !normal-case !tracking-normal !font-normal text-gray-500 leading-relaxed cursor-pointer" style="margin-bottom:0;">
                                    I understand that this form is not a secure means of communication and that my information will be kept confidential per our <a href="/privacy-policy.php" class="text-gold underline hover:no-underline">Privacy Policy</a>.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary w-full py-4 text-center justify-center text-base tracking-wide shadow-lg shadow-gold/20 hover:-translate-y-0.5 transition-all">
                                Request a Consultation
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5 ml-2 inline-block" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info Sidebar -->
                <div class="lg:col-span-5 reveal delay-1">
                    <div class="flex flex-col gap-5">

                        <!-- Phone -->
                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div>
                                <div class="contact-info-label">Call Us</div>
                                <a href="tel:+17325551234" class="contact-info-value hover:text-gold transition-colors">(732) 555-1234</a>
                                <div class="contact-info-sub">Mon – Fri: 9:00 AM – 5:00 PM</div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <div class="contact-info-label">Email Us</div>
                                <a href="mailto:info@drriteshamin.com" class="contact-info-value hover:text-gold transition-colors">info@drriteshamin.com</a>
                                <div class="contact-info-sub">We respond within 24 hours</div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <div class="contact-info-label">Visit Our Clinic</div>
                                <div class="contact-info-value">Edison, New Jersey</div>
                                <div class="contact-info-sub">Conveniently located with ample free parking</div>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <div class="contact-info-label">Office Hours</div>
                                <div class="contact-info-value">Monday – Friday</div>
                                <div class="contact-info-sub">
                                    9:00 AM – 5:00 PM EST<br>
                                    <span class="text-gold font-medium">Weekend & evening hours available by appointment</span>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Disclaimer -->
                        <div class="bg-red-50/80 border border-red-200/60 rounded-2xl p-5 flex items-start gap-3">
                            <svg class="w-5 h-5 mt-0.5 text-red-500 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            <div>
                                <p class="text-sm font-semibold text-red-700 mb-1">Crisis & Emergency</p>
                                <p class="text-xs text-red-600/80 leading-relaxed">If you are experiencing a mental health crisis or medical emergency, please call <strong>911</strong> or the <strong>Suicide & Crisis Lifeline: 988</strong> immediately.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-white" id="location">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-3">Find Us</span>
                <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-4">Conveniently Located in Edison, NJ</h2>
                <p class="text-gray-500 leading-relaxed">Our modern clinic is easily accessible with free on-site parking. Located near major highways for your convenience.</p>
            </div>
            <div class="contact-map-wrapper reveal delay-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.4649038986363!2d-74.35920228816407!3d40.59756527129183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3b76e5e714edd%3A0x54ca677c2f217b65!2sDr.%20Ritesh%20Amin%20-%20Psychiatrist!5e0!3m2!1sen!2sin!4v1774940619468!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Insurance & Payment Section -->
    <section class="py-20 bg-beige-dark/50" id="insurance">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="reveal">
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-3">Insurance & Payment</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6">Making Care Accessible</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">We believe that advanced mental healthcare should be accessible to everyone. Our clinic accepts most major insurance plans and offers flexible payment options for non-covered treatments.</p>
                    <p class="text-gray-600 leading-relaxed mb-8">Our dedicated billing team will verify your insurance coverage and explain all costs upfront before treatment begins — no surprises.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-midnight font-medium text-sm">
                            <svg class="w-5 h-5 text-gold shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Free insurance verification before your first visit
                        </li>
                        <li class="flex items-center gap-3 text-midnight font-medium text-sm">
                            <svg class="w-5 h-5 text-gold shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Prior authorization handled by our team
                        </li>
                        <li class="flex items-center gap-3 text-midnight font-medium text-sm">
                            <svg class="w-5 h-5 text-gold shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Superbills provided for out-of-network reimbursement
                        </li>
                        <li class="flex items-center gap-3 text-midnight font-medium text-sm">
                            <svg class="w-5 h-5 text-gold shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Flexible financing options available
                        </li>
                    </ul>
                </div>

                <div class="reveal delay-1">
                    <p class="text-sm font-semibold text-midnight tracking-wide uppercase mb-5">Accepted Insurance Plans</p>
                    <div class="flex flex-wrap gap-3">
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Aetna
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Blue Cross Blue Shield
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Cigna
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            UnitedHealthcare
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Medicare
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Horizon
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Oxford
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Humana
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Amerihealth
                        </span>
                        <span class="insurance-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/></svg>
                            Self-Pay / Cash
                        </span>
                    </div>
                    <p class="text-sm text-gray-500 mt-5 leading-relaxed">Don't see your plan? Contact us — we'll verify your coverage for free.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact FAQ Section -->
    <section class="tms-section bg-white" id="faq">
        <div class="container tms-container">
            <div class="tms-grid header-align-start items-start">
                
                <!-- Left: Content Container -->
                <div class="tms-content reveal w-full lg:max-w-4xl mx-auto col-span-1 lg:col-span-2 text-center lg:text-left">
                    <span class="eyebrow mx-auto lg:mx-0">Common Questions</span>
                    <h2 class="section-title text-center lg:text-left">Before Your Visit</h2>
                    <p class="tms-para text-center lg:text-left max-w-2xl mx-auto lg:mx-0">Here are answers to some of the most common questions new patients have before scheduling their first appointment.</p>
                    
                    <div class="tms-accordion mt-10 text-left">
                        <div class="accordion-item active">
                            <div class="accordion-header">
                                <h3>What should I bring to my first appointment?</h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p>Please bring a valid photo ID, your insurance card, a list of current medications (including dosages), and any relevant medical records or referral letters. If you've completed any prior psychiatric evaluations, those are helpful as well.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Do I need a referral to see Dr. Amin?</h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p>No referral is needed for general psychiatric consultations. However, some insurance plans may require a referral for TMS therapy or Spravato. Our team will help verify this during the scheduling process.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>How long is the initial consultation?</h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p>Your first visit typically lasts 45-60 minutes. This allows Dr. Amin to conduct a thorough evaluation, discuss your history, understand your goals, and develop a personalized treatment plan.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Can I schedule an appointment online?</h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p>Yes! You can fill out the contact form above and our team will reach out to schedule your appointment. You can also call us directly during office hours for immediate scheduling.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Do you offer telehealth / virtual appointments?</h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p>Yes, we offer telehealth consultations for general psychiatric evaluations and medication management follow-ups. In-person treatments like TMS, Spravato, and Ketamine must be administered at our Edison clinic.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold-light uppercase mb-3">Ready to Begin?</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Your Wellness Starts Here</h2>
            <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto">Don't wait any longer to take the first step toward better mental health. Our team is ready to support you every step of the way.</p>
            <a href="tel:+17325551234" class="btn btn-primary py-4 px-10 rounded-full text-lg shadow-[0_10px_30px_rgba(37,111,168,0.4)] hover:-translate-y-1 transition-transform border border-white/20">
                Call (732) 555-1234
            </a>
        </div>
    </section>

    <!-- Toast Notification -->
    <div class="form-toast" id="formToast">
        <span class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Message sent! We'll be in touch shortly.
        </span>
    </div>

    <script>
    // Form submission handler
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        const required = this.querySelectorAll('[required]');
        let valid = true;
        required.forEach(field => {
            if (!field.value.trim() && field.type !== 'checkbox') {
                field.style.borderColor = '#ef4444';
                valid = false;
            } else if (field.type === 'checkbox' && !field.checked) {
                valid = false;
            } else {
                field.style.borderColor = '#e2e8f0';
            }
        });

        if (!valid) return;

        // Show toast
        const toast = document.getElementById('formToast');
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 4000);

        // Reset form
        this.reset();
    });

    // Remove error styling on input
    document.querySelectorAll('#contactForm input, #contactForm textarea, #contactForm select').forEach(el => {
        el.addEventListener('focus', function() {
            this.style.borderColor = '#256fa8';
        });
        el.addEventListener('blur', function() {
            if (!this.value.trim() && this.hasAttribute('required')) {
                this.style.borderColor = '#ef4444';
            } else {
                this.style.borderColor = '#e2e8f0';
            }
        });
    });
    </script>

<?php include 'footer.php'; ?>
