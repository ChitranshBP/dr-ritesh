<?php
/**
 * EXPECTED VARIABLES:
 * $page_title       - Meta Title
 * $page_desc        - Meta Description
 * $eyebrow          - Small uppercase text above hero title
 * $hero_title       - H1 Hero Title
 * $hero_subtitle    - Hero Subtitle paragraph
 * $hero_image       - Background image URL for hero
 * 
 * $intro_title      - H2 for the introduction section
 * $intro_paragraphs - Array of strings (each string = one <p> block)
 * $intro_image      - (Optional) Image to place next to the intro section
 * 
 * $key_benefits     - Array of arrays: [['title' => '', 'desc' => '', 'icon_svg' => '']]
 * 
 * $tms_vs_meds_title - Optional H2 for comparison section
 * $tms_vs_meds       - Optional boolean to show the default TMS vs. Meds comparison table.
 */

$body_class = 'bg-beige font-sans';
include 'header.php';
?>

    <!-- Service Page Hero (Distinct Design) -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-midnight">
        <!-- Decorative subtle background blobs -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gold/10 blur-3xl transform translate-x-1/2 rounded-full pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-gold/5 blur-3xl transform -translate-x-1/2 rounded-full pointer-events-none"></div>

        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                <!-- Hero Text Content -->
                <div class="lg:col-span-6 reveal">
                    <?php if(!empty($eyebrow)): ?>
                    <span class="block mb-4 text-sm font-semibold tracking-[0.2em] text-gold uppercase">
                        <?php echo $eyebrow; ?>
                    </span>
                    <?php endif; ?>
                    
                    <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                        <?php echo isset($hero_title) ? $hero_title : 'Advanced Treatment'; ?>
                    </h1>
                    
                    <div class="w-16 h-1 bg-gold mb-8"></div>
                    
                    <?php if(!empty($hero_subtitle)): ?>
                    <p class="text-lg text-white/80 mb-10 leading-relaxed max-w-xl">
                        <?php echo $hero_subtitle; ?>
                    </p>
                    <?php endif; ?>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="/contact" class="btn btn-primary shadow-lg shadow-gold/20">Schedule Consultation</a>
                        <a href="#overview" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Learn More</a>
                    </div>
                </div>

                <!-- Hero Image Composition -->
                <div class="lg:col-span-6 reveal delay-1 relative mt-12 lg:mt-0">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] bg-white group">
                        <img 
                            src="<?php echo !empty($hero_image) ? $hero_image : 'assets/images/tms_brain_banner.png'; ?>" 
                            alt="<?php echo strip_tags(isset($hero_title) ? $hero_title : 'Treatment'); ?>" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000"
                        >
                        
                        <!-- Floating Trust Badge -->
                        <div class="absolute bottom-6 left-6 lg:-left-8 bg-white p-4 rounded-2xl shadow-xl flex items-center gap-4 z-20 border border-sage">
                            <div class="w-12 h-12 bg-gold/10 rounded-xl flex items-center justify-center text-gold shrink-0">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <div>
                                <p class="font-bold text-midnight text-sm">FDA Approved</p>
                                <p class="text-xs text-gray-500 font-medium whitespace-nowrap">Safe & Effective Treatment</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Overview / Intro Section (With Optional Image) -->
    <section class="py-16 lg:py-20 bg-white relative overflow-hidden" id="overview">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 <?php echo !empty($intro_image) ? 'lg:grid-cols-12 gap-16' : ''; ?> items-center">
                
                <!-- Intro Text -->
                <div class="<?php echo !empty($intro_image) ? 'lg:col-span-7' : 'max-w-4xl mx-auto'; ?> reveal">
                    <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Treatment Overview</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-8">
                        <?php echo !empty($intro_title) ? $intro_title : 'Understanding the Treatment Approach'; ?>
                    </h2>
                    
                    <div class="prose prose-lg text-gray-600 max-w-none">
                        <?php 
                        if(!empty($intro_paragraphs) && is_array($intro_paragraphs)) {
                            foreach($intro_paragraphs as $index => $para) {
                                $is_first = ($index === 0);
                                $class = $is_first ? "text-xl text-midnight/80 font-medium mb-6 leading-relaxed" : "mb-6 leading-relaxed";
                                echo '<p class="' . $class . '">' . $para . '</p>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- Intro Image (if provided) -->
                <?php if(!empty($intro_image)): ?>
                <div class="lg:col-span-5 reveal delay-1 mt-12 lg:mt-0">
                    <div class="rounded-[2rem] overflow-hidden shadow-xl border border-gray-100">
                        <img src="<?php echo $intro_image; ?>" alt="Treatment Overview" class="w-full h-auto object-cover aspect-[4/5] transform hover:scale-105 transition duration-700">
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- Key Benefits (Light Theme Grid) -->
    <?php if(!empty($key_benefits) && is_array($key_benefits)): ?>
    <section class="py-24 bg-beige-dark/50" id="benefits">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">The Advantage</span>
                <h2 class="text-3xl md:text-4xl font-serif text-midnight">Why Choose This Modality</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal delay-1">
                <?php foreach($key_benefits as $benefit): ?>
                <div class="bg-white p-10 rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col h-full group">
                    <div class="w-16 h-16 bg-sage/40 group-hover:bg-gold/10 rounded-2xl flex items-center justify-center text-midnight group-hover:text-gold transition-colors mb-8 shrink-0">
                        <?php echo !empty($benefit['icon_svg']) ? $benefit['icon_svg'] : '<svg viewBox="0 0 24 24" fill="none" class="w-8 h-8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/></svg>'; ?>
                    </div>
                    <h3 class="text-2xl font-bold text-midnight mb-4 font-serif"><?php echo $benefit['title']; ?></h3>
                    <p class="text-gray-600 leading-relaxed flex-grow"><?php echo $benefit['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- About Section -->
    <section class="about-section about-section-light" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image reveal">
                    <div class="about-img-frame">
                        <img src="/assets/images/dr-ritesh-hero.webp" alt="Dr. Ritesh Amin Providing Care" class="portrait-img">
                    </div>
                    <div class="experience-badge">
                        <span class="exp-number">15+</span>
                        <span class="exp-text">Years of<br>Experience</span>
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
                    <p>With extensive clinical experience, Dr. Amin is dedicated to providing compassionate, evidence-based care. His personal philosophy centers around treating the whole person, not just the symptoms, ensuring each patient receives a tailored approach to their mental wellness.</p>
                    <ul class="credentials-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Top Tier Education and Medical Training</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Board Certified by the ABPN</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Specialized expertise in Neuromodulation</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary mt-6">Book an Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Light Theme: TMS vs Medication Validation -->
    <?php if(!empty($tms_vs_meds) && $tms_vs_meds): ?>
    <section class="py-16 bg-white" id="comparison">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3 text-center">Superior Efficacy</span>
                <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6 text-center">
                    <?php echo !empty($tms_vs_meds_title) ? $tms_vs_meds_title : 'TMS vs. Traditional Medication'; ?>
                </h2>
                <p class="text-lg text-gray-600 mx-auto">
                    Standard oral antidepressants fail to adequately treat up to 30% of patients and are often accompanied by systemic side effects. TMS offers an FDA-approved paradigm shift.
                </p>
            </div>
            
            <div class="bg-beige-dark border border-gray-100 rounded-[2rem] overflow-hidden reveal delay-1 max-w-5xl mx-auto shadow-md">
                <div class="grid grid-cols-3 text-center border-b border-gray-200">
                    <div class="p-4 sm:p-6 font-semibold text-gray-500 bg-gray-50/50 flex flex-col justify-center text-sm sm:text-base">Feature</div>
                    <div class="p-4 sm:p-6 font-bold text-white bg-gold text-base sm:text-lg flex flex-col justify-center shadow-inner">TMS Therapy</div>
                    <div class="p-4 sm:p-6 font-semibold text-gray-700 bg-gray-50/50 flex flex-col justify-center text-sm sm:text-base">Medication</div>
                </div>
                <div class="grid grid-cols-3 text-center border-b border-gray-200 transition-colors hover:bg-white text-sm sm:text-base">
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center font-medium">Weight Gain Risk</div>
                    <div class="p-4 sm:p-6 font-bold text-midnight bg-gold/5 flex items-center justify-center">None</div>
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center">High</div>
                </div>
                <div class="grid grid-cols-3 text-center border-b border-gray-200 transition-colors hover:bg-white text-sm sm:text-base">
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center font-medium">Cognitive Fog</div>
                    <div class="p-4 sm:p-6 font-bold text-midnight bg-gold/5 flex items-center justify-center">None (Often improves)</div>
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center">Common</div>
                </div>
                <div class="grid grid-cols-3 text-center border-b border-gray-200 transition-colors hover:bg-white text-sm sm:text-base">
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center font-medium">Targeted Approach</div>
                    <div class="p-4 sm:p-6 font-bold text-midnight bg-gold/5 flex items-center justify-center">Yes (Local brain networks)</div>
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center">No (Systemic)</div>
                </div>
                <div class="grid grid-cols-3 text-center transition-colors hover:bg-white text-sm sm:text-base">
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center font-medium">Duration</div>
                    <div class="p-4 sm:p-6 font-bold text-midnight bg-gold/5 flex items-center justify-center">6 Weeks (Curative intent)</div>
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center">Indefinite (Maintenance)</div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Dynamic Comparison Table (for non-TMS service pages like Ketamine, Spravato) -->
    <?php if(!empty($custom_table_title) && !empty($custom_table_headers) && !empty($custom_table_rows)): ?>
    <section class="py-16 bg-white" id="comparison">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3 text-center">Superior Efficacy</span>
                <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6 text-center">
                    <?php echo $custom_table_title; ?>
                </h2>
            </div>
            
            <div class="bg-beige-dark border border-gray-100 rounded-[2rem] overflow-hidden reveal delay-1 max-w-5xl mx-auto shadow-md">
                <div class="grid grid-cols-3 text-center border-b border-gray-200">
                    <?php foreach($custom_table_headers as $hi => $header): ?>
                    <div class="p-4 sm:p-6 <?php echo $hi === 0 ? 'font-semibold text-gray-500 bg-gray-50/50' : ($hi === 2 ? 'font-bold text-white bg-gold text-base sm:text-lg shadow-inner' : 'font-semibold text-gray-700 bg-gray-50/50'); ?> flex flex-col justify-center text-sm sm:text-base">
                        <?php echo $header; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php foreach($custom_table_rows as $ri => $row): ?>
                <div class="grid grid-cols-3 text-center <?php echo $ri < count($custom_table_rows) - 1 ? 'border-b border-gray-200' : ''; ?> transition-colors hover:bg-white text-sm sm:text-base">
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center font-medium"><?php echo $row[0]; ?></div>
                    <div class="p-4 sm:p-6 text-gray-600 flex items-center justify-center"><?php echo $row[1]; ?></div>
                    <div class="p-4 sm:p-6 font-bold text-midnight bg-gold/5 flex items-center justify-center"><?php echo $row[2]; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Testimonials -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <div class="section-header center reveal">
                <span class="eyebrow">Patient Stories</span>
                <h2 class="section-title">Real Transformations</h2>
                <p class="section-subtitle">Hear from patients who have regained their lives through our advanced treatments.</p>
            </div>
            <div class="wall-of-love-grid">
                <!-- Column 1 -->
                <div class="wol-col">
                    <!-- Card 1 -->
                    <div class="wol-card">
                        <div class="wol-header">
                            <div class="wol-avatar">S</div>
                            <div class="wol-meta">
                                <h4>Sarah M.</h4>
                                <span>Depression Patient</span>
                            </div>
                            <div class="wol-stars">★★★★★</div>
                        </div>
                        <p class="wol-text">"After years of trying different medications with little relief and profound side effects, TMS with Dr. Amin changed my life. Within weeks, the heavy cloud lifted."</p>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="wol-card">
                        <div class="wol-header">
                            <div class="wol-avatar">D</div>
                            <div class="wol-meta">
                                <h4>David K.</h4>
                                <span>OCD Treatment</span>
                            </div>
                            <div class="wol-stars">★★★★★</div>
                        </div>
                        <p class="wol-text">"I was skeptical at first, but the results speak for themselves. The intrusive thoughts have properly faded into the background for the first time in forever."</p>
                    </div>
                </div>

                <!-- Column 2 (Central Feature) -->
                <div class="wol-col">
                    <!-- Video/Feature Card -->
                    <div class="wol-card video-card">
                        <div class="video-overlay">
                            <div class="play-btn">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                            <div class="video-text" style="text-shadow: 0 2px 6px rgba(0,0,0,0.8);">
                                <h4 style="color: #ffffff;">Mark's Journey</h4>
                                <span style="color: rgba(255,255,255,0.9);">Overcoming 10 Years of Anxiety</span>
                            </div>
                        </div>
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Patient Video Thumbnail">
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="wol-card">
                        <div class="wol-header">
                            <div class="wol-avatar">E</div>
                            <div class="wol-meta">
                                <h4>Emily R.</h4>
                                <span>Postpartum Support</span>
                            </div>
                            <div class="wol-stars">★★★★★</div>
                        </div>
                        <p class="wol-text">"Dr. Amin is incredibly compassionate. He took the time to explain everything to me and my husband. I finally feel like myself again."</p>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="wol-col">
                    <!-- Card 4 -->
                    <div class="wol-card">
                        <div class="wol-header">
                            <div class="wol-avatar">M</div>
                            <div class="wol-meta">
                                <h4>Michael T.</h4>
                                <span>TMS Patient</span>
                            </div>
                            <div class="wol-stars">★★★★★</div>
                        </div>
                        <p class="wol-text">"The clinic environment is so soothing and professional. It doesn't feel like a typical doctor's office. Highly recommend Dr. Amin for anyone struggling."</p>
                    </div>

                    <!-- Card 5 -->
                    <div class="wol-card">
                        <div class="wol-header">
                            <div class="wol-avatar">J</div>
                            <div class="wol-meta">
                                <h4>Jessica L.</h4>
                                <span>Anxiety Relief</span>
                            </div>
                            <div class="wol-stars">★★★★★</div>
                        </div>
                        <p class="wol-text">"TMS was a game changer. I have my energy and motivation back. The team at Dr. Amin's practice is simply wonderful."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section (Dynamic based on $faqs array) -->
    <?php if(!empty($faqs) && is_array($faqs)): ?>
    <section class="tms-section bg-beige-light" id="faq">
        <div class="container tms-container">
            <div class="tms-grid header-align-start items-start">
                
                <!-- Left: Content Container -->
                <div class="tms-content reveal w-full lg:max-w-4xl mx-auto col-span-1 lg:col-span-2 text-center lg:text-left">
                    <span class="eyebrow mx-auto lg:mx-0">Got Questions?</span>
                    <h2 class="section-title text-center lg:text-left">Frequently Asked Questions</h2>
                    <p class="tms-para text-center lg:text-left max-w-2xl mx-auto lg:mx-0">Find quick answers to some of the most common questions our patients ask about this treatment.</p>
                    
                    <div class="tms-accordion mt-10 text-left">
                        <?php foreach($faqs as $index => $faq): ?>
                        <div class="accordion-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="accordion-header">
                                <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
                                <div class="accordion-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 5v14M5 12h14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                            </div>
                            <div class="accordion-body">
                                <p><?php echo $faq['answer']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Closing CTA (Image Background Theme) -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('assets/images/cta_bg_clean.png');" id="take-action">
        <div class="absolute inset-0 bg-white/60 backdrop-blur-sm"></div>
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3 drop-shadow-sm">Take Action</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-midnight mb-6 drop-shadow-sm">Return to the Life You Deserve</h2>
            <p class="text-xl text-gray-800 mb-10 max-w-2xl mx-auto drop-shadow-sm font-medium">Contact Dr. Amin's clinic today. Schedule an in-depth consultation to see if this treatment is right for you, and begin your journey to recovery.</p>
            <a href="/contact" class="btn btn-primary py-4 px-10 rounded-full text-lg shadow-[0_10px_30px_rgba(37,111,168,0.4)] hover:-translate-y-1 transition-transform border border-white/20">Book Your Evaluation</a>
        </div>
    </section>

<?php include 'footer.php'; ?>
