<?php
$page_title = "Neurologist in Kendall Park, NJ | Dr. Ritesh Amin";
$page_desc = "Looking for a neurologist in Kendall Park, NJ? Dr. Ritesh Amin provides expert neurological evaluations, customized care plans, and advanced treatments for patients in Kendall Park and surrounding communities.";
$body_class = "bg-beige neurology-page";
$extra_css = '
        /* Hero Banner Styles */
        .banner-hero {
            position: relative;
            min-height: 80vh;
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
        .banner-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(11,25,44,0.7) 0%, rgba(11,25,44,0.5) 50%, rgba(11,25,44,0.95) 100%);
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
';

include '../header.php';
?>

<!-- SECTION 1: HERO -->
<section class="banner-hero">
    <div class="hero-banner-slider">
        <!-- We use a dark background here for the hero to match the premium feel -->
        <div class="absolute inset-0 bg-midnight"></div>
        <div class="absolute inset-0 bg-[url('/assets/bg-pattern.svg')] opacity-10"></div>
    </div>
    <div class="banner-overlay"></div>
    
    <div class="hero-content-centered">
        <span class="eyebrow text-gold mb-4 block" style="color: #5dadee;">Dr. Ritesh Amin, MD</span>
        <h1 class="text-white text-5xl md:text-6xl font-serif font-bold mb-6 leading-tight drop-shadow-md">
            Neurologist in Kendall Park, NJ
        </h1>
        <p class="text-white/90 text-xl md:text-2xl font-light mb-10 leading-relaxed max-w-3xl drop-shadow">
            Providing comprehensive neurological evaluation and personalized care to patients in Kendall Park and surrounding communities.
        </p>
        <div class="flex flex-col sm:flex-row gap-6">
            <a href="/contact.php" class="btn btn-primary text-center px-8 py-4 rounded-full text-lg font-semibold bg-white text-midnight hover:bg-gold hover:text-white transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">Schedule a Consultation</a>
            <a href="/neurology-tms-therapy.php" class="btn btn-secondary text-center px-8 py-4 rounded-full text-lg font-semibold bg-transparent border-2 border-white/50 text-white hover:bg-white/10 hover:border-white transition-all">Explore Neurology Care</a>
        </div>
    </div>
</section>

<!-- SECTION 2: NEUROLOGY CARE IN KENDALL PARK -->
<section id="neurology-care" class="py-24 bg-beige relative">
    <div class="container max-w-7xl relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Left Side: Visual/Images -->
            <div class="lg:w-1/2 reveal relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                    <img src="/assets/images/clinic-img-1.jpg" alt="Neurology Care Clinic in Kendall Park" class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-midnight/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl">
                            <p class="text-white font-serif text-xl md:text-2xl font-bold leading-tight shadow-sm">
                                "Our goal is to provide a comprehensive and compassionate experience for every patient."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Decorative element -->
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-gold/20 rounded-full blur-2xl -z-10"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-midnight/10 rounded-full blur-3xl -z-10"></div>
            </div>

            <!-- Right Side: Content -->
            <div class="lg:w-1/2 reveal delay-1">
                <span class="eyebrow text-gold mb-2 block">Comprehensive Evaluation</span>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-midnight mb-6 leading-tight">Neurology Care in <br>Kendall Park, NJ</h2>
                <div class="w-20 h-1 bg-gold mb-8"></div>
                
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Neurological symptoms can be complex, and finding the right neurologist near you is the first step toward clarity and effective management. Dr. Ritesh Amin focuses on understanding your unique symptoms and medical history.
                </p>

                <ul class="space-y-6 mb-8">
                    <li class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center shrink-0 mt-1 mr-4 text-gold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-midnight mb-1">Thorough Assessments</h4>
                            <p class="text-gray-600 leading-relaxed">We take the time to listen, review past diagnostics, and perform appropriate clinical assessments to understand the root cause.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center shrink-0 mt-1 mr-4 text-gold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-midnight mb-1">Personalized Treatment Planning</h4>
                            <p class="text-gray-600 leading-relaxed">Whether seeking an initial diagnosis or a second opinion, we build ongoing management tailored to your specific needs.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-gold/10 flex items-center justify-center shrink-0 mt-1 mr-4 text-gold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-midnight mb-1">Coordinated Diagnostics</h4>
                            <p class="text-gray-600 leading-relaxed">When necessary, we seamlessly coordinate advanced imaging or specialized testing to support your care plan.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: NEUROLOGICAL CONDITIONS -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-sage/20 transform -skew-y-3 origin-top-left z-0"></div>
    <div class="container max-w-7xl relative z-10">
        <div class="text-center mb-16 reveal">
            <span class="eyebrow text-gold">What We Evaluate</span>
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-midnight mb-6">Neurological Conditions & Concerns</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 reveal delay-1">
            <!-- Condition 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center mb-6 text-gold group-hover:scale-110 transition-transform">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-midnight mb-4">Migraine & Headaches</h3>
                <p class="text-gray-600 leading-relaxed">
                    Comprehensive evaluation for chronic migraines and severe headache disorders to identify triggers and establish effective, long-term management strategies.
                </p>
            </div>
            
            <!-- Condition 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center mb-6 text-gold group-hover:scale-110 transition-transform">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <h3 class="text-xl font-bold text-midnight mb-4">Neuropathy</h3>
                <p class="text-gray-600 leading-relaxed">
                    Careful assessment of nerve-related pain, numbness, and tingling to determine underlying causes and provide targeted symptom relief.
                </p>
            </div>
            
            <!-- Condition 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center mb-6 text-gold group-hover:scale-110 transition-transform">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                </div>
                <h3 class="text-xl font-bold text-midnight mb-4">Memory Concerns</h3>
                <p class="text-gray-600 leading-relaxed">
                    Thorough cognitive evaluations for patients experiencing memory loss, confusion, or suspected early-stage dementia, focusing on accurate diagnosis and supportive care.
                </p>
            </div>
            
            <!-- Condition 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center mb-6 text-gold group-hover:scale-110 transition-transform">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-midnight mb-4">Seizure Conditions</h3>
                <p class="text-gray-600 leading-relaxed">
                    Expert evaluation of seizure-related symptoms, providing comprehensive diagnostic pathways and medication management to optimize patient safety.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: DR. RITESH AMIN -->
<section class="py-24 bg-midnight text-white relative">
    <div class="container max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-5/12 reveal">
                <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 group bg-midnight-light p-2">
                    <img src="/assets/images/dr-ritesh-hero.webp" alt="Dr. Ritesh Amin" class="w-full h-auto aspect-[3/4] object-cover rounded-2xl group-hover:scale-105 transition-transform duration-700">
                    
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
            <div class="lg:w-7/12 reveal delay-1">
                <span class="eyebrow text-gold block mb-4">Physician Expertise</span>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6 leading-tight">Dr. Ritesh Amin: Psychiatry & Neurology</h2>
                <div class="w-20 h-1 bg-gold mb-8"></div>
                <p class="text-white/80 mb-6 leading-relaxed text-lg font-light">
                    Dr. Amin’s medical background provides a unique perspective on patient care. As a physician, he is deeply experienced in addressing complex presentations that span both neurological and psychiatric domains.
                </p>
                <p class="text-white/80 mb-8 leading-relaxed font-light text-lg">
                    While psychiatry and neurology are distinct medical specialties and are not interchangeable, they frequently overlap in clinical practice. Many neurological conditions carry psychiatric components, and vice versa. Patients with complex symptoms often benefit significantly from a physician who understands the interconnectedness of brain structure and mental health when clinically appropriate.
                </p>
                <a href="/dr-ritesh-amin.php" class="inline-flex items-center text-gold hover:text-white font-semibold transition-colors group text-lg border-b-2 border-gold pb-1 hover:border-white">
                    Learn more about Dr. Ritesh Amin
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: NEUROLOGY & TMS -->
<section class="py-24 bg-beige">
    <div class="container max-w-5xl text-center reveal">
        <h2 class="text-4xl md:text-5xl font-serif font-bold text-midnight mb-6">Neurology & TMS Therapy</h2>
        <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
        <div class="bg-white p-10 md:p-14 rounded-3xl shadow-xl border border-gray-100 text-left">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                In addition to standard neurological care, our practice is highly specialized in <strong>Transcranial Magnetic Stimulation (TMS)</strong>. It is important to distinguish between general neurological evaluation and specific TMS treatments. 
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mb-10">
                TMS is primarily utilized within our practice for FDA-cleared psychiatric indications, such as Treatment-Resistant Depression and OCD. While neuromodulation is a rapidly advancing field, we ensure that TMS is prescribed responsibly and accurately, distinguishing it clearly from standard neurological interventions unless specifically indicated and approved by clinical guidelines.
            </p>
            <div class="text-center">
                <a href="/psychiatry-tms-therapy.php" class="btn btn-primary px-10 py-4 rounded-full font-semibold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all text-lg inline-block">Learn more about TMS therapy</a>
            </div>
        </div>
    </div>
</section>

<!-- AEO & FAQ SECTION -->
<section class="py-24 bg-white relative">
    <div class="container max-w-4xl reveal">
        <div class="text-center mb-16">
            <span class="eyebrow text-gold">Common Questions</span>
            <h2 class="text-4xl font-serif font-bold text-midnight mb-6">Frequently Asked Questions</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-8"></div>
        </div>
        
        <div class="bi-faq-accordion space-y-4">
            <!-- FAQ 1 -->
            <div class="bi-faq-item bg-beige-dark border border-gold/10 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">When should I see a neurologist in Kendall Park?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-700 leading-relaxed">
                        You should consult a neurologist if you experience unexplained, persistent, or worsening symptoms related to your nervous system. Common signs include chronic migraines or severe headaches, chronic nerve pain (neuropathy), unexplained numbness or tingling, frequent dizziness, memory loss, confusion, or suspected seizures. Dr. Amin provides thorough evaluations for these and other complex neurological conditions at our Kendall Park clinic.
                    </div>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="bi-faq-item bg-beige-dark border border-gold/10 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">What happens during a neurological evaluation?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-700 leading-relaxed">
                        An initial neurological evaluation with Dr. Ritesh Amin is comprehensive. It begins with a detailed review of your medical history and an in-depth discussion of your symptoms. This is followed by a physical and neurological exam testing your vision, strength, coordination, reflexes, and sensory function. If needed, we will coordinate further diagnostic tests such as MRIs, CT scans, or EEGs to pinpoint the exact cause of your symptoms.
                    </div>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="bi-faq-item bg-beige-dark border border-gold/10 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">Does Dr. Amin treat nerve pain and neuropathy?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-700 leading-relaxed">
                        Yes, diagnosing and managing neuropathy is a core part of our practice. Neuropathy often presents as numbness, tingling, burning, or sharp nerve pain in the hands or feet. Dr. Amin works to identify the underlying cause—whether diabetic, idiopathic, or structural—and develops a tailored management plan that may include targeted medications, lifestyle adjustments, or specialist referrals.
                    </div>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="bi-faq-item bg-beige-dark border border-gold/10 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">Why choose a physician experienced in both neurology and psychiatry?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-700 leading-relaxed">
                        The brain is incredibly complex, and neurological conditions often intersect with mental health. For instance, chronic migraines, neuropathic pain, or early cognitive decline can significantly impact mood and anxiety levels. Dr. Amin’s dual expertise allows him to recognize these clinical overlaps, ensuring patients receive holistic care that addresses both their neurological symptoms and any related psychiatric components.
                    </div>
                </div>
            </div>
            
            <!-- FAQ 5 -->
            <div class="bi-faq-item bg-beige-dark border border-gold/10 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">Do I need a referral to schedule an appointment?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                    </span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-700 leading-relaxed">
                        In many cases, you can contact our Kendall Park office directly to schedule a neurological evaluation without a referral. However, some specific health insurance plans (like certain HMOs) do require a referral from your Primary Care Physician. Our administrative team is happy to help you verify your insurance coverage and referral requirements before your visit.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: LOCAL SEO & SERVING AREAS -->
<section class="py-24 bg-midnight text-white relative border-t border-white/10">
    <div class="container max-w-5xl text-center reveal">
        <h2 class="text-4xl font-serif font-bold text-white mb-6">Serving Kendall Park & Nearby Communities</h2>
        <div class="w-24 h-1 bg-gold mx-auto mb-10"></div>
        <p class="text-white/80 leading-relaxed mb-10 max-w-3xl mx-auto text-lg font-light">
            Finding a trusted specialist locally is vital for continuous and effective care. Patients from Kendall Park and nearby communities frequently consult Dr. Ritesh Amin for comprehensive neurological evaluation and care. We proudly serve residents across the following areas:
        </p>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-4xl mx-auto mb-16 text-left">
            <a href="/areas-we-serve/tms-therapy-kendall-park-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Kendall Park
            </a>
            <a href="/areas-we-serve/tms-therapy-monmouth-junction-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Monmouth Junction
            </a>
            <a href="/areas-we-serve/tms-therapy-franklin-park-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Franklin Park
            </a>
            <a href="/areas-we-serve/tms-therapy-south-brunswick-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> South Brunswick
            </a>
            <a href="/areas-we-serve/tms-therapy-north-brunswick-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> North Brunswick
            </a>
            <a href="/areas-we-serve/tms-therapy-princeton-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Princeton
            </a>
            <a href="/areas-we-serve/tms-therapy-princeton-junction-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Princeton Junction
            </a>
            <a href="/areas-we-serve/tms-therapy-plainsboro-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Plainsboro
            </a>
            <a href="/areas-we-serve/tms-therapy-dayton-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Dayton
            </a>
            <a href="/areas-we-serve/tms-therapy-kingston-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Kingston
            </a>
            <a href="/areas-we-serve/tms-therapy-rocky-hill-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Rocky Hill
            </a>
            <a href="/areas-we-serve/tms-therapy-milltown-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Milltown
            </a>
            <a href="/areas-we-serve/tms-therapy-east-brunswick-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> East Brunswick
            </a>
            <a href="/areas-we-serve/tms-therapy-somerset-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> Somerset
            </a>
            <a href="/areas-we-serve/tms-therapy-new-brunswick-nj.php" class="flex items-center text-white/80 hover:text-gold transition-colors">
                <span class="text-gold mr-2">›</span> New Brunswick
            </a>
        </div>
        
        <div class="bg-white/5 backdrop-blur-sm p-10 md:p-14 rounded-3xl border border-white/10 mt-12 shadow-2xl">
            <h3 class="text-3xl font-serif font-bold text-white mb-6">Looking for a Neurologist in Kendall Park, NJ?</h3>
            <p class="text-white/80 mb-10 max-w-2xl mx-auto text-lg font-light">
                Take the next step in understanding your neurological health. Contact our office to determine whether Dr. Amin's neurological services are appropriate for your specific clinical needs.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="/contact.php" class="btn btn-primary px-10 py-4 rounded-full font-semibold bg-gold hover:bg-gold-light transition-all shadow-xl text-lg">Schedule a Consultation</a>
                <a href="tel:+17323791797" class="btn btn-secondary px-10 py-4 rounded-full font-semibold border-2 border-white text-white hover:bg-white hover:text-midnight transition-all text-lg">Contact Our Office</a>
            </div>
        </div>
    </div>
</section>

<?php
// We inject any specific structured data here before footer if needed
$custom_map_url = "https://maps.google.com/maps?q=Dr.+Ritesh+Amin+-+Neurologist+%26+TMS+Therapy,+3086+NJ-27+%2310,+Kendall+Park,+NJ+08824&t=&z=14&ie=UTF8&iwloc=B&output=embed";

include '../footer.php';
?>
