<?php
$page_title = 'Dr. Nalin Ranasinghe | Emergency Medicine & General Medicine in NJ';
$page_desc = 'Dr. Nalin Epa Ranasinghe is a Board Certified Emergency Medicine Physician with over 15 years of experience, offering personalized and proactive care at Providence Medical and Infusion Center.';
$body_class = 'bg-beige';
$extra_css = '
        /* Hero Banner Styles */
        .banner-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 5rem;
            overflow: hidden;
            text-align: center;
        }
        .hero-banner-slider {
            position: absolute;
            inset: 0;
            z-index: 0;
            background: var(--color-midnight);
        }
        .slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: fadeZoom 14s infinite;
        }
        .slide-1 {
            animation-delay: 0s;
        }
        .slide-2 {
            animation-delay: 7s;
        }
        @keyframes fadeZoom {
            0% { opacity: 0; transform: scale(1.05); }
            10% { opacity: 1; transform: scale(1.03); }
            45% { opacity: 1; transform: scale(1.01); }
            55% { opacity: 0; transform: scale(1); }
            100% { opacity: 0; transform: scale(1); }
        }
        .banner-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(11,25,44,0.65) 0%, rgba(11,25,44,0.45) 50%, rgba(11,25,44,0.9) 100%);
            z-index: 1;
        }
        .hero-content-centered {
            position: relative;
            z-index: 2;
            max-width: 1000px;
            padding: 0 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* ── Component classes powered by Tailwind @apply ── */
        .eyebrow {
            @apply block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4;
        }
        .section-header        { @apply mb-16; }
        .section-header.center { @apply text-center max-w-[800px] mx-auto; }
        .section-title         { @apply text-[2.5rem] mb-4; }
        .section-subtitle      { @apply text-[1.1rem] max-w-[600px] mx-auto; }

        @media (max-width: 991px) {
            .section-title { font-size: 2.2rem; }
        }

        /* Bio Hero Specific */
        .bio-hero {
            background: var(--color-midnight);
            padding: 8rem 0 6rem 0;
            overflow: hidden;
        }
        .bio-hero::before {
            content: \'\';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.03\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }

        /* Timeline styles */
        .timeline-line {
            position: absolute;
            left: 1.25rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--color-gold), var(--color-gold-light), transparent);
        }
        .timeline-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--color-gold);
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--color-gold);
            position: absolute;
            left: calc(1.25rem - 5px);
            top: 0.35rem;
        }

        /* Hospital grid hover */
        .hospital-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(11, 25, 44, 0.12);
        }
';
include 'header.php';
?>

    <!-- Hero Section -->
    <header class="bio-hero relative" id="hero">
        <div class="container mx-auto px-4 max-w-7xl relative z-10 flex flex-col md:flex-row items-center gap-12">

            <!-- Bio Image Card -->
            <div class="md:w-5/12 reveal shrink-0">
                <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 group bg-midnight-light p-2">
                    <img src="/assets/dr-Nalin.jpg" alt="Dr. Nalin Epa Ranasinghe" class="w-full h-auto aspect-[3/4] object-cover rounded-2xl">

                    <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-md px-5 py-3 rounded-2xl shadow-lg border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center text-gold">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <span class="block text-sm font-bold text-midnight leading-tight">Board Certified</span>
                            <span class="block text-xs text-gray-600">Emergency Medicine</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bio Header Content -->
            <div class="md:w-7/12 text-white reveal delay-1">
                <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-gold block"></span>
                    Meet Dr. Ranasinghe
                </span>
                <h1 class="font-serif text-5xl md:text-6xl font-bold mb-4 text-white">Dr. Nalin Ranasinghe, MD</h1>
                <h2 class="text-xl md:text-2xl text-[#c1d9f8] font-light mb-8">Emergency Medicine &amp; General Medicine Specialist</h2>

                <p class="text-lg text-white/80 leading-relaxed mb-8 max-w-2xl">
                    With over 15 years of clinical experience in Emergency Medicine, Dr. Ranasinghe brings acute care expertise and a deeply personalized approach to every patient interaction. A son and grandson of physicians, medicine runs in his blood.
                </p>

                <div class="flex flex-wrap gap-4 mb-10">
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">Emergency Medicine</span>
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">IV Infusion Therapy</span>
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">TMS Therapy</span>
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">Cardiovascular Sonography</span>
                </div>

                <div class="flex gap-4">
                    <a href="/contact.php" class="btn btn-primary" style="padding: 1rem 2rem;">Schedule Consultation</a>
                </div>
            </div>

        </div>
    </header>

    <!-- Professional Biography -->
    <section class="py-24 bg-white" id="biography">
        <div class="container mx-auto px-4 max-w-4xl relative">
            <div class="reveal">
                <h2 class="text-3xl md:text-4xl font-serif text-midnight font-bold mb-8 text-center">A Legacy of Caring for Others</h2>

                <div class="prose prose-lg text-gray-700 leading-relaxed max-w-none">
                    <p class="mb-6 font-medium text-xl text-gray-800">
                        Dr. Nalin Epa Ranasinghe believes that healthcare should be proactive, personalized, and compassionate — not reactive and impersonal. His mission is to help patients address medical issues before they become emergencies.
                    </p>
                    <p class="mb-6">
                        Born into a family of physicians — the son and grandson of doctors — Dr. Ranasinghe grew up in California with a deep appreciation for the art and science of medicine. He completed his undergraduate degree at the University of California, Davis, then pursued premedical studies at La Sierra University in Riverside, California, before earning his Medical Degree at St. George's University School of Medicine.
                    </p>
                    <p class="mb-6">
                        His postgraduate journey took him to the renowned Mount Sinai Medical Center in New York, where he completed surgical residency training and a research fellowship. He then completed a fellowship in Emergency Medicine at Queens Hospital Center in Queens, New York, where he honed his skills in high-acuity patient care.
                    </p>
                    <p class="mb-6">
                        With over 15 years of frontline experience, Dr. Ranasinghe has served as the Medical Director of an Emergency Department in Oneonta, New York, and as an Emergency Medical Services (EMS) Director for multiple agencies across New York State. He has also earned a Certificate in Cardiovascular Sonography from Rutgers School of Health Professions, expanding his diagnostic capabilities.
                    </p>
                    <p>
                        Today, Dr. Ranasinghe works across several Emergency Departments in New Jersey while also dedicating himself to Providence Medical and Infusion Center — a practice he helped found to bridge the gap between emergency medicine and proactive, personalized outpatient care.
                    </p>
                </div>
            </div>

            <!-- Key Pillars Bento -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 reveal delay-1">
                <div class="bg-sage p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-midnight mb-6 shadow-sm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-2">Emergency-Trained</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Over 15 years of high-stakes emergency department experience across multiple states, bringing acute care precision to every patient encounter.</p>
                </div>
                <div class="bg-sage p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-midnight mb-6 shadow-sm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-2">Personalized Care</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Dr. Ranasinghe treats every patient as an individual, taking the time to understand your unique health journey and crafting proactive care plans.</p>
                </div>
                <div class="bg-sage p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-midnight mb-6 shadow-sm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-2">Proactive Approach</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Moving beyond reactive treatment, Dr. Ranasinghe focuses on helping patients manage and prevent health issues through IV infusions, wellness therapies, and ongoing care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education & Training Timeline -->
    <section class="py-24 bg-beige-dark" id="education">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16 reveal">
                <span class="eyebrow">Education &amp; Training</span>
                <h2 class="text-4xl font-serif text-midnight font-bold mb-4">A Distinguished Medical Journey</h2>
                <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">Dr. Ranasinghe's training spans top institutions across the country, from California to New York, equipping him with a uniquely broad medical perspective.</p>
            </div>

            <div class="max-w-3xl mx-auto reveal delay-1">
                <div class="relative pl-12">
                        <div class="timeline-line"></div>

                        <div class="relative mb-10">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Undergraduate</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">University of California, Davis</h3>
                                <p class="text-gray-500 text-sm mt-1">Undergraduate Degree</p>
                            </div>
                        </div>

                        <div class="relative mb-10">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Premedical Studies</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">La Sierra University</h3>
                                <p class="text-gray-500 text-sm mt-1">Riverside, California</p>
                            </div>
                        </div>

                        <div class="relative mb-10">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Medical School &middot; Class of 2007</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">St. George's University School of Medicine</h3>
                                <p class="text-gray-500 text-sm mt-1">Doctor of Medicine (MD)</p>
                            </div>
                        </div>

                        <div class="relative mb-10">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Residency &middot; 2008&ndash;2010</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">Mount Sinai Medical Center (Icahn School of Medicine)</h3>
                                <p class="text-gray-500 text-sm mt-1">Surgical Residency, New York, NY</p>
                            </div>
                        </div>

                        <div class="relative mb-10">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Research Fellowship &middot; 2010&ndash;2011</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">Icahn School of Medicine at Mount Sinai</h3>
                                <p class="text-gray-500 text-sm mt-1">Surgery Research Fellowship, New York, NY</p>
                            </div>
                        </div>

                        <div class="relative mb-10">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Fellowship &middot; 2011&ndash;2014</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">Queens Hospital Center (NYC Health + Hospitals)</h3>
                                <p class="text-gray-500 text-sm mt-1">Emergency Medicine Fellowship, Queens, NY</p>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="timeline-dot"></div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <span class="text-sm font-semibold text-gold">Certificate &middot; Class of 2020</span>
                                <h3 class="font-bold text-lg text-midnight mt-1">Rutgers School of Health Professions</h3>
                                <p class="text-gray-500 text-sm mt-1">B.S. in Cardiovascular Sonography</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Credentials & Affiliations -->
    <section class="py-24 bg-white" id="credentials">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16">

                <div class="lg:w-1/3 reveal">
                    <span class="eyebrow">Expertise &amp; Authority</span>
                    <h2 class="text-4xl font-serif text-midnight font-bold mb-6">Credentials You Can Trust</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">Dr. Ranasinghe holds active medical licenses across multiple states and maintains affiliations with leading hospitals and healthcare systems.</p>
                </div>

                <div class="lg:w-2/3 grid sm:grid-cols-2 gap-8 reveal delay-1">

                    <!-- Board Certifications & Licenses -->
                    <div class="bg-beige-dark p-8 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-10 h-10 bg-gold/10 rounded-full flex items-center justify-center text-gold">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h3 class="font-bold text-xl text-midnight">Certifications &amp; Licenses</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="text-gold mt-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <div>
                                    <span class="block font-semibold text-midnight">Board Certified Surgeon</span>
                                    <span class="block text-sm text-gray-500">Emergency Medicine Specialist</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-gold mt-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <div>
                                    <span class="block font-semibold text-midnight">NPI: 1841459732</span>
                                    <span class="block text-sm text-gray-500">National Provider Identifier</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-gold mt-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <div>
                                    <span class="block font-semibold text-midnight">Active Medical Licenses</span>
                                    <span class="block text-sm text-gray-500">New Jersey, New York, California, New Hampshire</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-gold mt-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <div>
                                    <span class="block font-semibold text-midnight">Cardiovascular Sonography</span>
                                    <span class="block text-sm text-gray-500">Rutgers School of Health Professions</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Clinical Focus -->
                    <div class="bg-beige-dark p-8 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-10 h-10 bg-gold/10 rounded-full flex items-center justify-center text-gold">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                            </div>
                            <h3 class="font-bold text-xl text-midnight">Clinical Specialties</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Emergency Medicine</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">IV Infusions &amp; Mineral Therapy</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Transcranial Magnetic Stimulation (TMS)</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Spravato &amp; Ketamine Therapy</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Mental Health Treatment</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Men's Health &amp; Weight Loss</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Hospital Affiliations -->
    <section class="py-24 bg-beige-dark" id="affiliations">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16 reveal">
                <span class="eyebrow">Hospital Affiliations</span>
                <h2 class="text-4xl font-serif text-midnight font-bold mb-4">Trusted Across Leading Institutions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dr. Ranasinghe has been affiliated with some of the most respected hospitals and healthcare systems in the Northeast.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal delay-1">
                <div class="hospital-card bg-white p-6 rounded-2xl border border-gray-100 transition-all duration-300">
                    <h4 class="font-bold text-midnight mb-1">Hudson Regional Hospital</h4>
                    <span class="text-sm text-gray-500">Secaucus, NJ</span>
                </div>
                <div class="hospital-card bg-white p-6 rounded-2xl border border-gray-100 transition-all duration-300">
                    <h4 class="font-bold text-midnight mb-1">Jersey City Medical Center</h4>
                    <span class="text-sm text-gray-500">Jersey City, NJ</span>
                </div>
                <div class="hospital-card bg-white p-6 rounded-2xl border border-gray-100 transition-all duration-300">
                    <h4 class="font-bold text-midnight mb-1">Bayonne Medical Center</h4>
                    <span class="text-sm text-gray-500">CarePoint Health &middot; Bayonne, NJ</span>
                </div>
                <div class="hospital-card bg-white p-6 rounded-2xl border border-gray-100 transition-all duration-300">
                    <h4 class="font-bold text-midnight mb-1">Hackensack University Medical Center</h4>
                    <span class="text-sm text-gray-500">Hackensack, NJ</span>
                </div>
                <div class="hospital-card bg-white p-6 rounded-2xl border border-gray-100 transition-all duration-300">
                    <h4 class="font-bold text-midnight mb-1">NYU Langone Health</h4>
                    <span class="text-sm text-gray-500">Tisch Hospital &middot; New York, NY</span>
                </div>
                <div class="hospital-card bg-white p-6 rounded-2xl border border-gray-100 transition-all duration-300">
                    <h4 class="font-bold text-midnight mb-1">NewYork-Presbyterian / Columbia</h4>
                    <span class="text-sm text-gray-500">Irving Medical Center &middot; New York, NY</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Published Research -->
    <section class="py-24 bg-white" id="research">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-16 reveal">
                <span class="eyebrow">Academic Contributions</span>
                <h2 class="text-4xl font-serif text-midnight font-bold mb-4">Published Research</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dr. Ranasinghe has contributed to peer-reviewed medical research during his training at Mount Sinai.</p>
            </div>
            <div class="space-y-6 reveal delay-1">
                <div class="bg-beige-dark p-8 rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-midnight text-lg mb-2">Management and Outcomes of Colovesical Fistula Repair</h4>
                    <p class="text-gray-600 text-sm mb-2">Co-authored with Elizabeth T. Lynn, Kai B. Dallas, and Celia M. Divino</p>
                    <span class="text-gold text-sm font-semibold">The American Surgeon &middot; 2012</span>
                </div>
                <div class="bg-beige-dark p-8 rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-midnight text-lg mb-2">Validation and Improvement of a Proposed Scoring System to Detect Retained Common Bile Duct Stones in Gallstone Pancreatitis</h4>
                    <p class="text-gray-600 text-sm mb-2">Co-authored with Jingjing L. Sherman, Emily W. Shi, Muthu T. Sivasankaran, and Jake G. Prigoff</p>
                    <span class="text-gold text-sm font-semibold">Surgery &middot; 2015</span>
                </div>
                <div class="bg-beige-dark p-8 rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-midnight text-lg mb-2">Iatrogenic Ureteral Injury After Laparoscopic Colectomy</h4>
                    <p class="text-gray-600 text-sm mb-2">Co-authored with Nandini C. Palaniappa, D. Telem, and C. Divino</p>
                    <span class="text-gold text-sm font-semibold">Surgical Research Publication</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Clinic Preview Section -->
    <section class="py-24 bg-midnight text-white" id="the-clinic">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="lg:w-1/2 reveal">
                    <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block">Providence Medical &amp; Infusion Center</span>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 text-white">Personalized Care, Multiple Locations</h2>
                    <div class="w-20 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-white/80 mb-6 font-light leading-relaxed">
                        Dr. Ranasinghe co-founded Providence Medical and Infusion Center to bridge the gap between emergency medicine and proactive outpatient care. What began as upstate New York's first IV therapy clinic has grown into a multi-location practice.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3 text-white/70">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 text-gold shrink-0 mt-0.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <span class="block text-white font-semibold">Edison, NJ</span>
                                <span class="text-sm">35-37 Progress St, Suite AA5</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 text-white/70">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 text-gold shrink-0 mt-0.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <span class="block text-white font-semibold">Morristown, NJ</span>
                                <span class="text-sm">261 James Street, Suite 1E</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 text-white/70">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 text-gold shrink-0 mt-0.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <span class="block text-white font-semibold">Kendall Park, NJ</span>
                                <span class="text-sm">3086 Route 27, Office 10</span>
                            </div>
                        </div>
                    </div>
                    <a href="/contact.php" class="inline-flex items-center justify-center px-8 py-4 font-semibold text-midnight transition-all duration-200 bg-white border border-transparent rounded-full hover:bg-gold hover:text-white hover:shadow-lg">Schedule a Visit</a>
                </div>
                <!-- Image -->
                <div class="lg:w-1/2 reveal delay-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl group border border-white/10">
                        <img src="assets/images/tms_clinic_banner.png" alt="Providence Medical and Infusion Center" class="w-full h-auto object-cover aspect-video transition-transform duration-1000 group-hover:scale-105">
                        <div class="absolute inset-0 bg-midnight/20"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-24 bg-gold relative overflow-hidden" id="take-action">
        <div class="absolute inset-0 opacity-10 bg-[url('assets/images/tms_brain_banner.png')] bg-cover bg-center"></div>
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6">Take Charge of Your Health</h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">Don't wait for a health emergency. Schedule a consultation with Dr. Ranasinghe for personalized, proactive medical care tailored to your needs.</p>
            <a href="/contact.php" class="inline-block bg-white text-midnight font-bold py-4 px-10 rounded-full text-lg shadow-xl hover:-translate-y-1 hover:shadow-2xl transition-all">Request Your Consultation</a>
        </div>
    </section>

<?php include 'footer.php'; ?>
