<?php
$page_title = 'Privacy Policy | Dr. Ritesh Amin – Psychiatry & TMS in NJ';
$page_desc = 'Read the privacy policy for Dr. Ritesh Amin\'s practice. Learn how we collect, use, and protect your personal and health information.';
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

    <!-- Privacy Policy Hero -->
    <section class="legal-hero">
        <div class="legal-hero-orb"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Legal</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Privacy <span class="text-gold-light">Policy</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Your privacy and the confidentiality of your health information are of the utmost importance to us.
                </p>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
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
                        <li><a href="#pp-1">Information We Collect</a></li>
                        <li><a href="#pp-2">How We Use Your Information</a></li>
                        <li><a href="#pp-3">HIPAA Compliance</a></li>
                        <li><a href="#pp-4">Information Sharing & Disclosure</a></li>
                        <li><a href="#pp-5">Data Security</a></li>
                        <li><a href="#pp-6">Cookies & Website Analytics</a></li>
                        <li><a href="#pp-7">Your Rights</a></li>
                        <li><a href="#pp-8">Children's Privacy</a></li>
                        <li><a href="#pp-9">Changes to This Policy</a></li>
                        <li><a href="#pp-10">Contact Us</a></li>
                    </ol>
                </div>

                <p>Dr. Ritesh Amin, MD ("we," "our," or "us") is committed to protecting the privacy and security of your personal and health information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or interact with our practice.</p>

                <!-- Section 1 -->
                <div class="legal-section" id="pp-1">
                    <span class="legal-section-num">01</span>
                    <h2>Information We Collect</h2>
                    <h3>Personal Information</h3>
                    <p>We may collect personal information that you voluntarily provide, including:</p>
                    <ul>
                        <li>Full name, date of birth, and contact information (email, phone, address)</li>
                        <li>Insurance information and billing details</li>
                        <li>Emergency contact information</li>
                        <li>Information submitted through our contact form or appointment requests</li>
                    </ul>
                    <h3>Protected Health Information (PHI)</h3>
                    <p>As a medical practice, we collect health information necessary for your care, including:</p>
                    <ul>
                        <li>Medical history and current health conditions</li>
                        <li>Psychiatric evaluations and treatment records</li>
                        <li>TMS therapy session data and treatment progress</li>
                        <li>Medication records and prescription history</li>
                        <li>Lab results and diagnostic information</li>
                    </ul>
                    <h3>Automatically Collected Information</h3>
                    <p>When you visit our website, we may automatically collect certain technical information such as your IP address, browser type, device information, pages visited, and referring website. This data helps us improve our website experience.</p>
                </div>

                <!-- Section 2 -->
                <div class="legal-section" id="pp-2">
                    <span class="legal-section-num">02</span>
                    <h2>How We Use Your Information</h2>
                    <p>We use the information we collect for the following purposes:</p>
                    <ul>
                        <li>To provide, maintain, and improve our psychiatric and TMS therapy services</li>
                        <li>To schedule appointments and manage patient communications</li>
                        <li>To process insurance claims and billing</li>
                        <li>To comply with legal and regulatory requirements</li>
                        <li>To send appointment reminders and follow-up communications</li>
                        <li>To improve our website functionality and user experience</li>
                        <li>To respond to your inquiries and provide customer support</li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div class="legal-section" id="pp-3">
                    <span class="legal-section-num">03</span>
                    <h2>HIPAA Compliance</h2>
                    <div class="legal-highlight">
                        <p>Our practice complies fully with the Health Insurance Portability and Accountability Act (HIPAA) and all applicable state and federal regulations regarding the protection of your health information.</p>
                    </div>
                    <p>Your Protected Health Information (PHI) is handled in accordance with our <strong>Notice of Privacy Practices</strong>, which provides detailed information about how your medical information may be used and disclosed, and your rights regarding this information.</p>
                    <p>We maintain physical, electronic, and procedural safeguards that comply with federal regulations to protect your PHI. Our staff receives regular HIPAA training, and we continuously review and update our privacy and security practices.</p>
                </div>

                <!-- Section 4 -->
                <div class="legal-section" id="pp-4">
                    <span class="legal-section-num">04</span>
                    <h2>Information Sharing & Disclosure</h2>
                    <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
                    <ul>
                        <li><strong>Treatment:</strong> With other healthcare providers involved in your care</li>
                        <li><strong>Payment:</strong> With your insurance company to process claims</li>
                        <li><strong>Operations:</strong> For internal quality improvement and practice management</li>
                        <li><strong>Legal Requirements:</strong> When required by law, court order, or government regulation</li>
                        <li><strong>Service Providers:</strong> With trusted vendors who assist in operating our practice (e.g., EHR systems, billing services), bound by confidentiality agreements</li>
                        <li><strong>With Your Consent:</strong> For any other purpose with your explicit authorization</li>
                    </ul>
                </div>

                <!-- Section 5 -->
                <div class="legal-section" id="pp-5">
                    <span class="legal-section-num">05</span>
                    <h2>Data Security</h2>
                    <p>We implement robust security measures to protect your information, including:</p>
                    <ul>
                        <li>Encrypted electronic health records (EHR) systems</li>
                        <li>Secure, HIPAA-compliant email and messaging systems</li>
                        <li>Role-based access controls for staff</li>
                        <li>Regular security audits and vulnerability assessments</li>
                        <li>Secure physical storage of paper records</li>
                        <li>SSL/TLS encryption on our website</li>
                    </ul>
                    <p>While we take every reasonable precaution to protect your data, no method of electronic transmission or storage is 100% secure. We cannot guarantee absolute security but are committed to promptly addressing any security incidents.</p>
                </div>

                <!-- Section 6 -->
                <div class="legal-section" id="pp-6">
                    <span class="legal-section-num">06</span>
                    <h2>Cookies & Website Analytics</h2>
                    <p>Our website may use cookies and similar technologies to enhance your browsing experience. These may include:</p>
                    <ul>
                        <li><strong>Essential Cookies:</strong> Required for the website to function properly</li>
                        <li><strong>Analytics Cookies:</strong> Help us understand how visitors interact with our website (e.g., Google Analytics)</li>
                        <li><strong>Preference Cookies:</strong> Remember your settings and preferences</li>
                    </ul>
                    <p>You can control cookies through your browser settings. Disabling cookies may affect some features of our website but will not impact your ability to contact us or request an appointment.</p>
                </div>

                <!-- Section 7 -->
                <div class="legal-section" id="pp-7">
                    <span class="legal-section-num">07</span>
                    <h2>Your Rights</h2>
                    <p>Under HIPAA and applicable state laws, you have the right to:</p>
                    <ul>
                        <li>Access and obtain copies of your medical records</li>
                        <li>Request amendments or corrections to your health information</li>
                        <li>Request restrictions on certain uses or disclosures of your PHI</li>
                        <li>Receive an accounting of disclosures of your health information</li>
                        <li>Request confidential communications through alternative means</li>
                        <li>File a complaint if you believe your privacy rights have been violated</li>
                    </ul>
                    <p>To exercise any of these rights, please contact our office directly.</p>
                </div>

                <!-- Section 8 -->
                <div class="legal-section" id="pp-8">
                    <span class="legal-section-num">08</span>
                    <h2>Children's Privacy</h2>
                    <p>Our website is not directed to individuals under the age of 18. We do not knowingly collect personal information from children without parental consent. If you believe we have inadvertently collected information from a minor, please contact us immediately so we can take appropriate action.</p>
                </div>

                <!-- Section 9 -->
                <div class="legal-section" id="pp-9">
                    <span class="legal-section-num">09</span>
                    <h2>Changes to This Policy</h2>
                    <p>We reserve the right to update this Privacy Policy at any time. Changes will be effective immediately upon posting on this page. We encourage you to review this page periodically to stay informed about how we protect your information. The "Last Updated" date at the top of this policy indicates when it was most recently revised.</p>
                </div>

                <!-- Section 10 -->
                <div class="legal-section" id="pp-10">
                    <span class="legal-section-num">10</span>
                    <h2>Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy, your personal information, or wish to exercise your rights, please contact us:</p>
                    <div class="legal-highlight">
                        <p><strong>Dr. Ritesh Amin, MD</strong><br>
                        Edison, New Jersey<br>
                        Phone: <a href="tel:+17325551234">(732) 555-1234</a><br>
                        Email: <a href="mailto:info@drriteshamin.com">info@drriteshamin.com</a></p>
                    </div>
                    <p>You may also file a complaint with the <strong>U.S. Department of Health and Human Services</strong> Office for Civil Rights if you believe your privacy rights have been violated.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Have Questions?</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">We're Here to Help</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">If you have questions about our privacy practices or your rights, don't hesitate to reach out.</p>
            <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Contact Us</a>
        </div>
    </section>

<?php include 'footer.php'; ?>
