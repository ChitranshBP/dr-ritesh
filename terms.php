<?php
$page_title = 'Terms of Service | Dr. Ritesh Amin – Psychiatry & TMS in NJ';
$page_desc = 'Review the terms of service for Dr. Ritesh Amin\'s website and medical practice. Understand your responsibilities and our commitments regarding psychiatric care and TMS therapy.';
$body_class = 'bg-beige font-sans';
$extra_css = '
    /* ── Legal Page Styles ── */
    .legal-hero {
        position: relative;
        padding: 10rem 0 4rem;
        background: var(--color-midnight);
        overflow: hidden;
    }
    .legal-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px);
        background-size: 30px 30px;
        pointer-events: none;
    }
    .legal-hero::after {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%);
    }
    .legal-hero-orb {
        position: absolute;
        top: -30%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(37,111,168,0.12) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    /* ── Content Body ── */
    .legal-body {
        max-width: 800px;
        margin: 0 auto;
    }
    .legal-last-updated {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(37,111,168,0.06);
        border: 1px solid rgba(37,111,168,0.12);
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.78rem;
        font-weight: 600;
        color: var(--color-gold);
        margin-bottom: 2.5rem;
    }
    .legal-last-updated svg {
        width: 14px;
        height: 14px;
    }
    .legal-section {
        margin-bottom: 2.5rem;
        padding-bottom: 2.5rem;
        border-bottom: 1px solid rgba(37,111,168,0.10);
    }
    .legal-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    .legal-section-num {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 2rem;
        border-radius: 8px;
        background: rgba(37,111,168,0.08);
        border: 1px solid rgba(37,111,168,0.15);
        font-family: var(--font-serif);
        font-size: 0.82rem;
        font-weight: 700;
        color: var(--color-gold);
        margin-bottom: 0.75rem;
    }
    .legal-section h2 {
        font-family: var(--font-serif);
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin-bottom: 1rem;
    }
    .legal-section h3 {
        font-family: var(--font-sans);
        font-size: 1rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin: 1.5rem 0 0.5rem;
    }
    .legal-section p {
        font-size: 0.95rem;
        line-height: 1.8;
        color: var(--color-text-light);
        margin-bottom: 0.75rem;
    }
    .legal-section ul {
        list-style: none;
        padding: 0;
        margin: 0.75rem 0;
    }
    .legal-section ul li {
        position: relative;
        padding-left: 1.5rem;
        font-size: 0.95rem;
        line-height: 1.8;
        color: var(--color-text-light);
        margin-bottom: 0.35rem;
    }
    .legal-section ul li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.65rem;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--color-gold);
        opacity: 0.5;
    }
    .legal-section a {
        color: var(--color-gold);
        text-decoration: underline;
        text-underline-offset: 2px;
    }
    .legal-section a:hover {
        color: var(--color-gold-light);
    }
    .legal-highlight {
        background: rgba(37,111,168,0.04);
        border-left: 3px solid var(--color-gold);
        padding: 1rem 1.25rem;
        border-radius: 0 12px 12px 0;
        margin: 1rem 0;
    }
    .legal-highlight p {
        color: var(--color-midnight);
        font-weight: 500;
        margin: 0;
    }

    /* ── Table of Contents ── */
    .legal-toc {
        background: #fff;
        border: 1px solid rgba(37,111,168,0.10);
        border-radius: 1.25rem;
        padding: 2rem;
        margin-bottom: 3rem;
    }
    .legal-toc h3 {
        font-family: var(--font-sans);
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--color-gold);
        margin: 0 0 1rem;
    }
    .legal-toc ol {
        list-style: none;
        padding: 0;
        margin: 0;
        counter-reset: toc;
    }
    .legal-toc ol li {
        counter-increment: toc;
        margin-bottom: 0.5rem;
    }
    .legal-toc ol li a {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.9rem;
        color: var(--color-text-light);
        text-decoration: none;
        padding: 0.4rem 0.5rem;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    .legal-toc ol li a:hover {
        background: rgba(37,111,168,0.04);
        color: var(--color-gold);
    }
    .legal-toc ol li a::before {
        content: counter(toc, decimal-leading-zero);
        font-family: var(--font-serif);
        font-weight: 700;
        font-size: 0.78rem;
        color: var(--color-gold);
        opacity: 0.5;
        min-width: 1.5rem;
    }

    @media (max-width: 768px) {
        .legal-hero { padding: 8rem 0 3rem; }
        .legal-toc { padding: 1.5rem; }
    }
';
include 'header.php';
?>

    <!-- Terms Hero -->
    <section class="legal-hero">
        <div class="legal-hero-orb"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Legal</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Terms of <span class="text-gold-light">Service</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Please read these terms carefully before using our website or engaging our services.
                </p>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="py-20 bg-beige-dark/50 relative">
        <div class="container mx-auto px-4">
            <div class="legal-body reveal">

                <div class="legal-last-updated">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Last Updated: March 1, 2026
                </div>

                <!-- Table of Contents -->
                <div class="legal-toc">
                    <h3>Table of Contents</h3>
                    <ol>
                        <li><a href="#tos-1">Acceptance of Terms</a></li>
                        <li><a href="#tos-2">Medical Disclaimer</a></li>
                        <li><a href="#tos-3">Use of Our Website</a></li>
                        <li><a href="#tos-4">Appointment & Cancellation Policy</a></li>
                        <li><a href="#tos-5">Patient Responsibilities</a></li>
                        <li><a href="#tos-6">Intellectual Property</a></li>
                        <li><a href="#tos-7">Limitation of Liability</a></li>
                        <li><a href="#tos-8">Third-Party Links</a></li>
                        <li><a href="#tos-9">Governing Law</a></li>
                        <li><a href="#tos-10">Changes to These Terms</a></li>
                        <li><a href="#tos-11">Contact Information</a></li>
                    </ol>
                </div>

                <p>These Terms of Service ("Terms") govern your use of the website operated by Dr. Ritesh Amin, MD ("we," "our," or "us"), located at drriteshamin.com, and your engagement with our medical services. By accessing our website or using our services, you agree to be bound by these Terms.</p>

                <!-- Section 1 -->
                <div class="legal-section" id="tos-1">
                    <span class="legal-section-num">01</span>
                    <h2>Acceptance of Terms</h2>
                    <p>By accessing or using our website, scheduling an appointment, or engaging our medical services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our <a href="/privacy-policy.php">Privacy Policy</a>.</p>
                    <p>If you do not agree to these Terms, please do not use our website or services. We reserve the right to modify these terms at any time without prior notice. Your continued use of the website after changes are posted constitutes acceptance of the revised terms.</p>
                </div>

                <!-- Section 2 -->
                <div class="legal-section" id="tos-2">
                    <span class="legal-section-num">02</span>
                    <h2>Medical Disclaimer</h2>
                    <div class="legal-highlight">
                        <p>The information provided on this website is for general educational and informational purposes only and is not intended as a substitute for professional medical advice, diagnosis, or treatment.</p>
                    </div>
                    <p>Always seek the advice of a qualified healthcare provider with any questions you may have regarding a medical condition. Never disregard professional medical advice or delay seeking treatment because of something you have read on this website.</p>
                    <ul>
                        <li>The content on this site does not establish a doctor-patient relationship</li>
                        <li>Treatment outcomes described on this website are not guaranteed and may vary by individual</li>
                        <li>Information about TMS therapy, Spravato, Ketamine, and other treatments is provided for educational purposes only</li>
                        <li>In case of a medical emergency, call 911 or visit your nearest emergency room immediately</li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div class="legal-section" id="tos-3">
                    <span class="legal-section-num">03</span>
                    <h2>Use of Our Website</h2>
                    <p>You agree to use our website only for lawful purposes and in a manner that does not infringe the rights of, or restrict or inhibit the use of this site by any third party. Prohibited conduct includes:</p>
                    <ul>
                        <li>Using the site for any unlawful or fraudulent purpose</li>
                        <li>Attempting to gain unauthorized access to our systems or data</li>
                        <li>Introducing viruses, malware, or other harmful material</li>
                        <li>Scraping, data mining, or harvesting information from the website</li>
                        <li>Impersonating any person or entity</li>
                        <li>Interfering with the proper functioning of the website</li>
                    </ul>
                    <p>We reserve the right to restrict or terminate your access to the website at any time without notice if we believe you are violating these terms.</p>
                </div>

                <!-- Section 4 -->
                <div class="legal-section" id="tos-4">
                    <span class="legal-section-num">04</span>
                    <h2>Appointment & Cancellation Policy</h2>
                    <p>When scheduling an appointment with our practice, please be aware of the following:</p>
                    <ul>
                        <li><strong>Scheduling:</strong> Appointments can be scheduled by phone, through our website contact form, or via our patient portal</li>
                        <li><strong>Cancellation Notice:</strong> We kindly request at least 24 hours' notice for appointment cancellations or rescheduling</li>
                        <li><strong>Late Cancellations:</strong> Appointments cancelled with less than 24 hours' notice may be subject to a cancellation fee</li>
                        <li><strong>No-Shows:</strong> Patients who do not show up for their scheduled appointment without prior notice may be charged a no-show fee</li>
                        <li><strong>Arrival Time:</strong> Please arrive 15 minutes early for your first appointment to complete necessary paperwork</li>
                    </ul>
                    <p>Specific policies regarding TMS therapy sessions, Spravato treatments, and Ketamine infusions will be discussed during your initial consultation and provided in writing.</p>
                </div>

                <!-- Section 5 -->
                <div class="legal-section" id="tos-5">
                    <span class="legal-section-num">05</span>
                    <h2>Patient Responsibilities</h2>
                    <p>As a patient of our practice, you are responsible for:</p>
                    <ul>
                        <li>Providing accurate and complete information about your medical history, current health conditions, and medications</li>
                        <li>Following the treatment plan agreed upon with Dr. Amin</li>
                        <li>Attending scheduled appointments or providing adequate cancellation notice</li>
                        <li>Informing us of any changes in your health status, medications, or insurance</li>
                        <li>Paying all applicable fees, co-payments, and deductibles in a timely manner</li>
                        <li>Treating our staff and other patients with respect and courtesy</li>
                    </ul>
                </div>

                <!-- Section 6 -->
                <div class="legal-section" id="tos-6">
                    <span class="legal-section-num">06</span>
                    <h2>Intellectual Property</h2>
                    <p>All content on this website — including text, graphics, images, logos, icons, photographs, videos, and software — is the property of Dr. Ritesh Amin, MD, or its content suppliers and is protected by United States and international copyright, trademark, and intellectual property laws.</p>
                    <ul>
                        <li>You may not reproduce, distribute, modify, or create derivative works from any content on this site without our express written permission</li>
                        <li>The "Dr. Ritesh Amin" name, logo, and associated branding are trademarks of our practice</li>
                        <li>Limited personal, non-commercial use of our website content is permitted for educational purposes</li>
                    </ul>
                </div>

                <!-- Section 7 -->
                <div class="legal-section" id="tos-7">
                    <span class="legal-section-num">07</span>
                    <h2>Limitation of Liability</h2>
                    <p>To the fullest extent permitted by applicable law:</p>
                    <ul>
                        <li>Our website and its content are provided on an "as is" and "as available" basis without warranties of any kind, either express or implied</li>
                        <li>We do not warrant that the website will be uninterrupted, error-free, or free of viruses or other harmful components</li>
                        <li>We shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or related to your use of the website</li>
                        <li>Our total liability to you for any claims arising from your use of the website shall not exceed the amount you have paid us, if any, in the preceding twelve months</li>
                    </ul>
                    <p>Nothing in these Terms shall limit or exclude our liability for negligence resulting in death or personal injury, fraud, or any other liability that cannot be excluded by applicable law.</p>
                </div>

                <!-- Section 8 -->
                <div class="legal-section" id="tos-8">
                    <span class="legal-section-num">08</span>
                    <h2>Third-Party Links</h2>
                    <p>Our website may contain links to third-party websites, services, or resources that are not owned or controlled by us. These links are provided for your convenience and informational purposes only.</p>
                    <p>We have no control over the content, privacy policies, or practices of any third-party site and assume no responsibility for their content. Your use of third-party sites is at your own risk, and we encourage you to review the terms and privacy policies of any third-party website you visit.</p>
                </div>

                <!-- Section 9 -->
                <div class="legal-section" id="tos-9">
                    <span class="legal-section-num">09</span>
                    <h2>Governing Law</h2>
                    <p>These Terms of Service shall be governed by and construed in accordance with the laws of the <strong>State of New Jersey</strong>, without regard to its conflict of law provisions. Any disputes arising from or relating to these Terms shall be subject to the exclusive jurisdiction of the state and federal courts located in the State of New Jersey.</p>
                </div>

                <!-- Section 10 -->
                <div class="legal-section" id="tos-10">
                    <span class="legal-section-num">10</span>
                    <h2>Changes to These Terms</h2>
                    <p>We reserve the right to modify or replace these Terms at any time at our sole discretion. If a revision is material, we will make reasonable efforts to provide notice prior to the new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                    <p>By continuing to access or use our website after revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the website.</p>
                </div>

                <!-- Section 11 -->
                <div class="legal-section" id="tos-11">
                    <span class="legal-section-num">11</span>
                    <h2>Contact Information</h2>
                    <p>If you have any questions about these Terms of Service, please contact us:</p>
                    <div class="legal-highlight">
                        <p><strong>Dr. Ritesh Amin, MD</strong><br>
                        Edison, New Jersey<br>
                        Phone: <a href="tel:+17325551234">(732) 555-1234</a><br>
                        Email: <a href="mailto:info@drriteshamin.com">info@drriteshamin.com</a><br>
                        Website: <a href="/">drriteshamin.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Have Questions?</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">We're Here to Help</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">If you have questions about our terms or policies, our team is always ready to assist.</p>
            <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Contact Us</a>
        </div>
    </section>

<?php include 'footer.php'; ?>
