import os

cities = [
    {"name": "Kendall Park", "slug": "kendall-park", "type": "primary"},
    {"name": "Monmouth Junction", "slug": "monmouth-junction", "type": "primary"},
    {"name": "Franklin Park", "slug": "franklin-park", "type": "primary"},
    {"name": "North Brunswick", "slug": "north-brunswick", "type": "primary"},
    {"name": "South Brunswick", "slug": "south-brunswick", "type": "primary"},
    {"name": "Princeton", "slug": "princeton", "type": "primary"},
    {"name": "Princeton Junction", "slug": "princeton-junction", "type": "primary"},
    {"name": "Plainsboro", "slug": "plainsboro", "type": "primary"},
    {"name": "Dayton", "slug": "dayton", "type": "primary"},
    {"name": "Kingston", "slug": "kingston", "type": "primary"},
    {"name": "Rocky Hill", "slug": "rocky-hill", "type": "primary"},
    {"name": "Milltown", "slug": "milltown", "type": "primary"},
    {"name": "East Brunswick", "slug": "east-brunswick", "type": "primary"},
    {"name": "Somerset", "slug": "somerset", "type": "primary"},
    {"name": "New Brunswick", "slug": "new-brunswick", "type": "primary"},
    {"name": "Edison", "slug": "edison", "type": "secondary"},
    {"name": "Piscataway", "slug": "piscataway", "type": "secondary"},
    {"name": "Monroe Township", "slug": "monroe-township", "type": "secondary"},
    {"name": "Cranbury", "slug": "cranbury", "type": "secondary"},
    {"name": "Hillsborough Township", "slug": "hillsborough-township", "type": "secondary"},
    {"name": "Lawrence Township", "slug": "lawrence-township", "type": "secondary"},
    {"name": "West Windsor Township", "slug": "west-windsor-township", "type": "secondary"},
    {"name": "Hamilton Township", "slug": "hamilton-township", "type": "secondary"},
]

faq_items = [
    ("What is TMS Therapy?",
     "Transcranial Magnetic Stimulation (TMS) is a non-invasive, FDA-cleared therapy that uses magnetic pulses to stimulate nerve cells in brain regions associated with mood regulation and neurological function. It is a drug-free alternative for patients struggling with depression, anxiety, OCD, and various neurological conditions."),
    ("Who is a candidate for TMS?",
     "Most adults who have not found adequate relief from traditional treatments are candidates. A full evaluation with Dr. Amin will determine if TMS is appropriate for your specific condition. Ideal candidates include those with major depression, treatment-resistant depression, anxiety disorders, OCD, PTSD, and several neurological conditions."),
    ("Is TMS covered by insurance?",
     "Yes, TMS therapy is covered by many major insurance plans including Medicare, Aetna, Blue Cross Blue Shield, Cigna, UnitedHealthcare, and more. Our team handles the insurance verification process for you and will explain all costs upfront before treatment begins."),
    ("How many sessions are required?",
     "A standard TMS treatment course typically consists of daily sessions over 4-6 weeks, followed by a gradual tapering phase. Each session lasts approximately 20-40 minutes, and you can return to your normal activities immediately afterward."),
    ("Does TMS help depression and neurological conditions?",
     "Yes. TMS is FDA-cleared for major depressive disorder and has shown remarkable efficacy for treatment-resistant depression. It is also used off-label for various neurological conditions including Parkinson's disease, stroke recovery, chronic migraine, neuropathic pain, and cognitive disorders. Dr. Amin specializes in both psychiatric and neurological applications of TMS.")
]

def generate_page(city):
    name = city["name"]
    slug = city["slug"]
    page_title = f"TMS Therapy Near {name}, NJ | Dr. Ritesh Amin"
    page_desc = f"Advanced TMS therapy for mental health and neurological conditions serving {name}, NJ. FDA-cleared, non-invasive brain stimulation. Call (732) 379-1797."

    page = f"""<?php
$page_title = '{page_title}';
$page_desc = '{page_desc}';
$body_class = 'bg-beige font-sans';
$extra_css = '
    .bihero {{ position: relative; padding: 10rem 0 5rem; background: var(--color-midnight); overflow: hidden; }}
    .bihero::before {{ content: ""; position: absolute; inset: 0; background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px); background-size: 30px 30px; pointer-events: none; }}
    .bihero::after {{ content: ""; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%); }}
    .bihero-orb-1 {{ position: absolute; top: -30%; right: -8%; width: 550px; height: 550px; background: radial-gradient(circle, rgba(37,111,168,0.16) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }}
    .bihero-orb-2 {{ position: absolute; bottom: -35%; left: -6%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }}
    @media (max-width: 640px) {{ .bihero {{ padding: 8rem 0 3rem; }} }}
';
include __DIR__ . '/../header.php';
?>

    <!-- Hero -->
    <section class="bihero" id="hero">
        <div class="bihero-orb-1"></div>
        <div class="bihero-orb-2"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">TMS Therapy Near {name}, NJ</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    Advanced TMS Treatment <span class="text-gold-light">for Mental Health &amp; Neurological Conditions</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed mb-8">
                    Dr. Ritesh Amin provides FDA-cleared Transcranial Magnetic Stimulation (TMS) therapy to patients in {name}, NJ. 
                    Our advanced neuromodulation treatments offer hope for those struggling with depression, anxiety, OCD, PTSD, 
                    and a wide range of neurological conditions — all without systemic side effects or downtime.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <a href="/contact.php" class="btn btn-primary shadow-lg shadow-gold/20">Book a Consultation</a>
                    <a href="tel:+17323791797" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Call (732) 379-1797</a>
                </div>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-medium text-white/80 border border-white/20 bg-white/5"><svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>FDA-Cleared</span>
                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-medium text-white/80 border border-white/20 bg-white/5"><svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Insurance Accepted</span>
                    <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-medium text-white/80 border border-white/20 bg-white/5"><svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Personalized Care</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container services-container">
            <div class="services-header reveal">
                <div class="services-title-wrapper">
                    <span class="eyebrow">Our Services</span>
                    <h2 class="section-title">TMS Services We Offer in {name}, NJ</h2>
                    <p class="services-header-desc">Comprehensive brain stimulation and psychiatric care tailored to your unique needs.</p>
                </div>
            </div>

            <div class="trust-grid reveal delay-1">
                <!-- Psychiatry TMS -->
                <div class="trust-card">
                    <span class="trust-card-num">01</span>
                    <div class="trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    </div>
                    <h3>Psychiatry TMS</h3>
                    <ul class="mt-3 space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Major Depression</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Treatment-Resistant Depression</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Generalized Anxiety Disorder</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>OCD &amp; PTSD</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Panic Disorder &amp; Bipolar Depression</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>ADHD</li>
                    </ul>
                </div>

                <!-- Neurology TMS -->
                <div class="trust-card">
                    <span class="trust-card-num">02</span>
                    <div class="trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>Neurology TMS</h3>
                    <ul class="mt-3 space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Brain Injury &amp; Trauma</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Stroke Recovery</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Parkinson's Disease</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Alzheimer's &amp; Dementia</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Chronic Migraine &amp; Neuropathic Pain</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Fibromyalgia &amp; Huntington's</li>
                    </ul>
                </div>

                <!-- Other Treatments -->
                <div class="trust-card">
                    <span class="trust-card-num">03</span>
                    <div class="trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                    </div>
                    <h3>Other Treatments</h3>
                    <ul class="mt-3 space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Spravato&reg; (Esketamine) Therapy</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Ketamine Infusion Therapy</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Medication Management</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Pharmacogenetic Testing</li>
                        <li class="flex items-start gap-2"><svg class="w-4 h-4 text-gold mt-0.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>General Psychiatric Consultation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions Section -->
    <section class="specialties-section bg-beige-dark" id="conditions">
        <div class="container">
            <div class="section-header center reveal">
                <span class="eyebrow">Conditions We Treat</span>
                <h2 class="section-title">Conditions We Treat in {name}, NJ</h2>
                <p class="section-subtitle">Dr. Amin specializes in treating a wide spectrum of psychiatric and neurological conditions using advanced TMS technology.</p>
            </div>

            <div class="silo-container">
                <!-- Mental Health -->
                <div class="silo-block reveal">
                    <div class="silo-header">
                        <span class="silo-num">01</span>
                        <div class="silo-title-group">
                            <div class="silo-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <h3>Mental Health</h3>
                        </div>
                    </div>
                    <div class="silo-chips">
                        <a href="/psychiatry/tms-for-major-depression.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 15.25"/><line x1="8" y1="19" x2="8" y2="21"/><line x1="8" y1="13" x2="8" y2="15"/><line x1="16" y1="19" x2="16" y2="21"/><line x1="16" y1="13" x2="16" y2="15"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="12" y1="15" x2="12" y2="17"/></svg></span>Depression <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/psychiatry/tms-for-generalized-anxiety.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/></svg></span>Anxiety <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/psychiatry/tms-for-ocd.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 0 1 4-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 0 1-4 4H3"/></svg></span>OCD <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/psychiatry/tms-for-ptsd.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></span>PTSD <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/psychiatry/tms-for-adhd.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span>ADHD <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/psychiatry/tms-for-bipolar-depression.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg></span>Bipolar Disorder <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                    </div>
                </div>

                <!-- Neurological -->
                <div class="silo-block reveal delay-1">
                    <div class="silo-header">
                        <span class="silo-num">02</span>
                        <div class="silo-title-group">
                            <div class="silo-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                            </div>
                            <h3>Neurological</h3>
                        </div>
                    </div>
                    <div class="silo-chips">
                        <a href="/neurology/tms-for-parkinsons-symptoms.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 11V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v0"/><path d="M14 10V4a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v8"/><path d="M6 14v0a4 4 0 0 0 4 4h4a4 4 0 0 0 4-4v-2.5"/></svg></span>Parkinson's Disease <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/neurology/tms-for-stroke-recovery.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></span>Stroke Recovery <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/neurology/tms-for-alzheimers-dementia.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="6" height="6"/><path d="M15 9V7a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v2"/><path d="M9 15v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2"/><line x1="20" y1="13" x2="22" y2="13"/><line x1="2" y1="13" x2="4" y2="13"/><line x1="13" y1="2" x2="13" y2="4"/><line x1="13" y1="20" x2="13" y2="22"/></svg></span>Alzheimer's Disease <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/neurology/tms-for-migraine.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></span>Chronic Migraine <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/neurology/tms-for-neuropathic-pain.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M1.42 9a16 16 0 0 1 21.16 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg></span>Neuropathy <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                        <a href="/neurology/tms-for-movement-disorders.php" class="condition-chip"><span class="chip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="5 9 2 12 5 15"/><polyline points="9 5 12 2 15 5"/><polyline points="15 19 12 22 9 19"/><polyline points="19 9 22 12 19 15"/><line x1="2" y1="12" x2="22" y2="12"/><line x1="12" y1="2" x2="12" y2="22"/></svg></span>Movement Disorders <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="trust-section" id="why-choose">
        <div class="container">
            <div class="section-header center reveal">
                <span class="eyebrow">Why Choose Us</span>
                <h2 class="section-title">Why Choose Dr. Ritesh Amin?</h2>
                <p class="section-subtitle">Experience the difference of expert-led, personalized TMS therapy.</p>
            </div>

            <div class="trust-stats reveal delay-1">
                <div class="trust-stat">
                    <span class="trust-stat-num">500<span class="trust-stat-sym">+</span></span>
                    <span class="trust-stat-label">Patients Treated</span>
                </div>
                <div class="trust-stat-divider"></div>
                <div class="trust-stat">
                    <span class="trust-stat-num">15<span class="trust-stat-sym">+</span></span>
                    <span class="trust-stat-label">Years Experience</span>
                </div>
                <div class="trust-stat-divider"></div>
                <div class="trust-stat">
                    <span class="trust-stat-num">4.9<span class="trust-stat-sym">★</span></span>
                    <span class="trust-stat-label">Patient Rating</span>
                </div>
                <div class="trust-stat-divider"></div>
                <div class="trust-stat">
                    <span class="trust-stat-num">FDA</span>
                    <span class="trust-stat-label">Cleared Treatment</span>
                </div>
            </div>

            <div class="trust-grid reveal delay-1">
                <div class="trust-card">
                    <span class="trust-card-num">01</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <h3>Board-Certified Neurologist</h3>
                    <p>Dr. Amin is board-certified by the American Board of Psychiatry and Neurology with specialized training in neuromodulation.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">02</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                    <h3>FDA-Cleared TMS Technology</h3>
                    <p>We use the latest FDA-cleared TMS devices to ensure safe, effective, and precise brain stimulation treatments.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">03</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg></div>
                    <h3>Personalized Treatment Plans</h3>
                    <p>Every treatment plan is customized based on your unique brain activity, symptoms, and health goals.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">04</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg></div>
                    <h3>Dual Expertise: Psychiatry &amp; Neurology</h3>
                    <p>Dr. Amin brings a comprehensive understanding of both psychiatric and neurological conditions for integrated care.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">05</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <h3>Serving {name} &amp; Nearby Areas</h3>
                    <p>Our Edison clinic is conveniently located and easily accessible for patients throughout central New Jersey.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">06</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <h3>Insurance Assistance Available</h3>
                    <p>Our team verifies your insurance coverage and handles prior authorizations so you can focus on healing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Process -->
    <section class="journey-section bg-beige-dark" id="process">
        <div class="container">
            <div class="section-header center reveal">
                <span class="eyebrow">Your Path to Wellness</span>
                <h2 class="section-title">Your TMS Treatment Journey</h2>
                <p class="section-subtitle">A clear, supportive path from your first call to lasting relief.</p>
            </div>
            <div class="journey-steps-grid reveal delay-1">
                <div class="journey-step-card">
                    <div class="journey-step-num">01</div>
                    <div class="journey-step-connector"></div>
                    <h3>Consultation &amp; Evaluation</h3>
                    <p>A comprehensive assessment of your medical history, symptoms, and treatment goals to determine if TMS is right for you.</p>
                </div>
                <div class="journey-step-card">
                    <div class="journey-step-num">02</div>
                    <div class="journey-step-connector"></div>
                    <h3>Personalized Treatment Plan</h3>
                    <p>Dr. Amin designs a tailored TMS protocol targeting the specific brain regions involved in your condition.</p>
                </div>
                <div class="journey-step-card">
                    <div class="journey-step-num">03</div>
                    <div class="journey-step-connector"></div>
                    <h3>TMS Therapy Sessions</h3>
                    <p>Daily outpatient sessions lasting 20-40 minutes. No anesthesia, no downtime — return to your routine immediately.</p>
                </div>
                <div class="journey-step-card">
                    <div class="journey-step-num">04</div>
                    <div class="journey-step-connector"></div>
                    <h3>Progress Monitoring &amp; Follow-Up</h3>
                    <p>Regular assessments to track improvement, adjust protocols as needed, and ensure lasting results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Dr. Amin -->
    <section class="about-section about-section-light" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image reveal">
                    <div class="about-img-frame">
                        <img src="/assets/images/dr-ritesh-hero.webp" alt="Dr. Ritesh Amin Providing Care" class="portrait-img">
                    </div>
                </div>
                <div class="about-content reveal delay-1">
                    <span class="eyebrow">Meet Your Doctor</span>
                    <h2 class="section-title">Dr. Ritesh Amin, MD</h2>
                    <div class="about-title-rule"></div>
                    <div class="about-cred-tags">
                        <span class="about-cred-tag">ABPN Certified</span>
                        <span class="about-cred-tag">TMS Specialist</span>
                        <span class="about-cred-tag">NJ Licensed</span>
                    </div>
                    <p class="lead-text">Board-Certified Psychiatrist specializing in Treatment-Resistant Depression and Advanced TMS Therapy.</p>
                    <p>With extensive clinical experience, Dr. Amin is dedicated to providing compassionate, evidence-based care to patients in {name} and throughout central New Jersey. His personal philosophy centers around treating the whole person, not just the symptoms, ensuring each patient receives a tailored approach to their mental wellness.</p>
                    <ul class="credentials-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Top Tier Education and Medical Training</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Board Certified by the ABPN</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Specialized expertise in Neuromodulation</li>
                    </ul>
                    <a href="/contact.php" class="btn btn-primary mt-6">Book an Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="tms-section bg-white" id="faq">
        <div class="container tms-container">
            <div class="tms-grid header-align-start items-start">
                <div class="tms-content reveal w-full lg:max-w-4xl mx-auto col-span-1 lg:col-span-2 text-center lg:text-left">
                    <span class="eyebrow mx-auto lg:mx-0">Got Questions?</span>
                    <h2 class="section-title text-center lg:text-left">Frequently Asked Questions</h2>
                    <p class="tms-para text-center lg:text-left max-w-2xl mx-auto lg:mx-0">Common questions about TMS therapy for patients in {name}, NJ.</p>

                    <div class="tms-accordion mt-10 text-left">"""

    for i, (q, a) in enumerate(faq_items):
        active = "active" if i == 0 else ""
        page += f"""
                        <div class="accordion-item {active}">
                            <div class="accordion-header">
                                <h3>{q}</h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p>{a}</p>
                            </div>
                        </div>"""

    page += """
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" id="take-action">
        <div class="container text-center reveal">
            <h2 class="section-title text-white">Ready to Start Your TMS Journey?</h2>
            <p class="section-subtitle text-white/70 mb-8">Schedule Your Consultation Today and take the first step toward lasting relief.</p>
            <div class="flex flex-wrap justify-center gap-4 mt-6">
                <a href="tel:+17323791797" class="btn btn-primary py-4 px-10 rounded-full text-lg shadow-[0_10px_30px_rgba(37,111,168,0.4)] hover:-translate-y-1 transition-transform">Call (732) 379-1797</a>
                <a href="/contact.php" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all py-4 px-10 rounded-full text-lg">Book an Appointment</a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/../footer.php'; ?>"""
    return page

output_dir = os.path.join(os.path.dirname(os.path.abspath(__file__)), 'areas-we-serve')
os.makedirs(output_dir, exist_ok=True)

for city in cities:
    filename = f"tms-therapy-{city['slug']}-nj.php"
    filepath = os.path.join(output_dir, filename)
    content = generate_page(city)
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"  ✓ {filename}")

print(f"\nGenerated {len(cities)} location pages in areas-we-serve/")
