<?php
$page_title = 'Dr. Ritesh Amin | Advanced TMS Therapy in NJ';
$page_desc = 'Dr. Ritesh Amin is a Board Certified Psychiatrist offering FDA-Approved TMS Therapy for Depression and Mental Wellness in New Jersey.';
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
';
include 'header.php';
?>

    <!-- Hero Section -->
    <header class="bio-hero relative" id="hero">
        <div class="container mx-auto px-4 max-w-7xl relative z-10 flex flex-col md:flex-row items-center gap-12">
            
            <!-- Bio Image Card -->
            <div class="md:w-5/12 reveal shrink-0">
                <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 group bg-midnight-light p-2">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80" alt="Dr. Ritesh Amin" class="w-full h-auto aspect-[3/4] object-cover rounded-2xl">
                    
                    <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-md px-5 py-3 rounded-2xl shadow-lg border border-white/20 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center text-gold">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <span class="block text-sm font-bold text-midnight leading-tight">Board Certified</span>
                            <span class="block text-xs text-gray-600">ABPN Psychiatry</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bio Header Content -->
            <div class="md:w-7/12 text-white reveal delay-1">
                <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-gold block"></span>
                    Meet Dr. Amin
                </span>
                <h1 class="font-serif text-5xl md:text-6xl font-bold mb-4 text-white">Dr. Ritesh Amin, MD</h1>
                <h2 class="text-xl md:text-2xl text-[#c1d9f8] font-light mb-8">Specialist in Treatment-Resistant Depression &amp; Neuromodulation</h2>
                
                <p class="text-lg text-white/80 leading-relaxed mb-8 max-w-2xl">
                    With over 15 years of clinical excellence, Dr. Amin is dedicated to utilizing the most advanced mental health technologies to help patients achieve deep, lasting remission from complex emotional and neurological conditions.
                </p>

                <div class="flex flex-wrap gap-4 mb-10">
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">TMS Therapy</span>
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">Spravato</span>
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">Ketamine Infusions</span>
                    <span class="bg-white/10 border border-white/20 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">Complex Diagnostics</span>
                </div>

                <div class="flex gap-4">
                    <a href="#contact" class="btn btn-primary" style="padding: 1rem 2rem;">Schedule Assessment</a>
                </div>
            </div>

        </div>
    </header>

    <!-- Professional Biography -->
    <section class="py-24 bg-white" id="biography">
        <div class="container mx-auto px-4 max-w-4xl relative">
            <div class="reveal">
                <h2 class="text-3xl md:text-4xl font-serif text-midnight font-bold mb-8 text-center">A Dedication to Restoring Lives</h2>
                
                <div class="prose prose-lg text-gray-700 leading-relaxed max-w-none">
                    <p class="mb-6 font-medium text-xl text-gray-800">
                        Dr. Ritesh Amin believes that true mental wellness requires more than just masking symptoms—it requires addressing the root neurological and emotional causes of distress.
                    </p>
                    <p class="mb-6">
                        As a Board-Certified Psychiatrist in New Jersey, Dr. Amin has dedicated his career to resolving cases that standard medical approaches have failed to improve. Recognizing early on that traditional oral antidepressants have limitations and often unbearable side effects, he pivoted his practice to the forefront of psychiatric innovation: Neuromodulation and interventional therapies.
                    </p>
                    <p class="mb-6">
                        Today, his clinic stands as a premier center for FDA-approved Transcranial Magnetic Stimulation (TMS), Spravato (Esketamine), and Ketamine Infusion therapies. By mapping treatment protocols specifically to an individual's brain topology and personal history, Dr. Amin dramatically increases the probability of remission for Treatment-Resistant Depression (TRD), severe Anxiety, PTSD, OCD, and a spectrum of neurological conditions.
                    </p>
                    <p>
                        Beyond his technical expertise, patients recognize Dr. Amin for his deeply empathetic, unhurried approach. He views his relationship with patients as a true partnership—taking the time to understand their life circumstances, explaining complex medical concepts clearly, and fostering a safe, luxurious environment conducive to healing. 
                    </p>
                </div>
            </div>
            
            <!-- Key Pillars Bento -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16 reveal delay-1">
                <div class="bg-sage p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-midnight mb-6 shadow-sm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-2">Evidence-Based</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Every treatment protocol is grounded in rigorous peer-reviewed science and FDA clinical trial data.</p>
                </div>
                <div class="bg-sage p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-midnight mb-6 shadow-sm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-2">Compassionate</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Empathy is the core of our practice. You are treated as an individual, not just a diagnosis.</p>
                </div>
                <div class="bg-sage p-8 rounded-2xl">
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-midnight mb-6 shadow-sm">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-2">Innovative</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Constantly updating clinical methods to leverage the absolute latest in neuromodulation technology.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Credentials & Affiliations -->
    <section class="py-24 bg-beige-dark" id="credentials">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16">
                
                <div class="lg:w-1/3 reveal">
                    <span class="eyebrow">Expertise & Authority</span>
                    <h2 class="text-4xl font-serif text-midnight font-bold mb-6">Credentials You Can Trust</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">Dr. Amin’s profound knowledge of psychiatric medicine is backed by rigorous education, continuous specialized training, and active participation in elite medical communities.</p>
                </div>

                <div class="lg:w-2/3 grid sm:grid-cols-2 gap-8 reveal delay-1">
                    
                    <!-- Board Certifications -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-10 h-10 bg-gold/10 rounded-full flex items-center justify-center text-gold">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h3 class="font-bold text-xl text-midnight">Board Certifications</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="text-gold mt-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <div>
                                    <span class="block font-semibold text-midnight">Diplomate, ABPN</span>
                                    <span class="block text-sm text-gray-500">American Board of Psychiatry and Neurology</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-gold mt-1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <div>
                                    <span class="block font-semibold text-midnight">Medical License</span>
                                    <span class="block text-sm text-gray-500">State of New Jersey</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Clinical Focus -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-10 h-10 bg-gold/10 rounded-full flex items-center justify-center text-gold">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                            </div>
                            <h3 class="font-bold text-xl text-midnight">Clinical Specialties</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Transcranial Magnetic Stimulation (TMS)</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Treatment-Resistant Depression (TRD)</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Spravato (Esketamine) Therapy</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4"><path d="M5 13l4 4L19 7"/></svg></span>
                                <span class="font-medium text-gray-700">Severe Anxiety &amp; PTSD</span>
                            </li>
                        </ul>
                    </div>

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
                    <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block">The Environment</span>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 text-white">A Sanctuary for Healing in Edison, NJ</h2>
                    <div class="w-20 h-1 bg-gold mb-8"></div>
                    <p class="text-lg text-white/80 mb-6 font-light leading-relaxed">
                        Dr. Amin designed our facility to completely remove the clinical anxiety standard doctor's offices create. 
                    </p>
                    <p class="text-white/70 mb-8 leading-relaxed">
                        When you arrive for your TMS or Infusion sessions, you'll enter a serene, spa-like environment featuring private suites, state-of-the-art comfortable recliners, and a dedicated care technician to ensure your absolute comfort during treatment.
                    </p>
                    <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 font-semibold text-midnight transition-all duration-200 bg-white border border-transparent rounded-full hover:bg-gold hover:text-white hover:shadow-lg">Schedule a Clinic Tour</a>
                </div>
                <!-- Image -->
                <div class="lg:w-1/2 reveal delay-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl group border border-white/10">
                        <img src="assets/images/tms_clinic_banner.png" alt="Dr. Amin's Clinic" class="w-full h-auto object-cover aspect-video transition-transform duration-1000 group-hover:scale-105">
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
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6">Reclaim Your Quality of Life</h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">Don't let depression or anxiety dictate your future. Schedule an evaluation with Dr. Amin to discover if advanced neuromodulation is right for you.</p>
            <a href="/contact" class="inline-block bg-white text-midnight font-bold py-4 px-10 rounded-full text-lg shadow-xl hover:-translate-y-1 hover:shadow-2xl transition-all">Request Your Consultation</a>
        </div>
    </section>

<?php include 'footer.php'; ?>
