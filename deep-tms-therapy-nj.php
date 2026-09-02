<?php
$page_title = "Deep TMS Therapy in NJ | Advanced H-Coil Neuromodulation | Dr. Amin";
$page_desc = "Learn about Deep TMS therapy using advanced magnetic field technology for depression and OCD in Central New Jersey. Call Dr. Ritesh Amin at (732) 379-1797.";
$body_class = 'bg-beige font-sans';
$page_schema_json = <<<'SCHEMA'
{
    "@context": "https://schema.org",
    "@type": "MedicalWebPage",
    "name": "Deep TMS Therapy in NJ | Advanced H-Coil Neuromodulation | Dr. Amin",
    "description": "Learn about Deep TMS therapy using advanced magnetic field technology for depression and OCD in Central New Jersey. Call Dr. Ritesh Amin at (732) 379-1797.",
    "mainEntity": {
        "@type": "MedicalProcedure",
        "name": "Transcranial Magnetic Stimulation (TMS)",
        "procedureType": "NoninvasiveProcedure",
        "howPerformed": "Pulsed magnetic fields stimulate underactive neurons in the prefrontal cortex to restore balanced mood regulation."
    }
}
SCHEMA;
$extra_css = '
    .bihero { position: relative; padding: 10rem 0 5rem; background: var(--color-midnight); overflow: hidden; }
    .bihero::before { content: ""; position: absolute; inset: 0; background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px); background-size: 30px 30px; pointer-events: none; }
    .bihero::after { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%); }
    .bihero-orb-1 { position: absolute; top: -30%; right: -8%; width: 550px; height: 550px; background: radial-gradient(circle, rgba(37,111,168,0.16) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
    .bihero-orb-2 { position: absolute; bottom: -35%; left: -6%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
    @media (max-width: 640px) { .bihero { padding: 8rem 0 3rem; } }
';
include __DIR__ . '/header.php';
?>

    <!-- Hero Section -->
    <section class="bihero" id="hero">
        <div class="bihero-orb-1"></div>
        <div class="bihero-orb-2"></div>
        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="max-w-4xl mx-auto text-center reveal">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest text-gold-light border border-gold/30 bg-gold/10 mb-6">Advanced Technology</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">Deep TMS Therapy in New Jersey</h1>
                <p class="text-lg sm:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed mb-8">Advanced H-coil magnetic stimulation reaching deeper and broader neural networks.</p>
                <div class="flex flex-wrap justify-center gap-4 mb-10">
                    <a href="/contact.php" class="btn btn-primary shadow-xl shadow-gold/25 py-4 px-8 text-base">Schedule a Consultation</a>
                    <a href="tel:+17323791797" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all py-4 px-8 text-base">Call (732) 379-1797</a>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-4 text-xs font-medium text-white/75">
                    <span class="inline-flex items-center gap-1.5"><svg class="w-4 h-4 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>FDA-Cleared Technology</span>
                    <span class="inline-flex items-center gap-1.5"><svg class="w-4 h-4 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Medicare &amp; Commercial Insurance Accepted</span>
                    <span class="inline-flex items-center gap-1.5"><svg class="w-4 h-4 text-gold-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Zero Systemic Side Effects</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Ribbon -->
    <section class="py-12 bg-white border-b border-slate-100">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-3xl lg:text-4xl font-serif font-bold text-gold mb-1">83%</div>
                    <div class="text-xs uppercase tracking-wider font-semibold text-slate-500">Clinical Response Rate</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-3xl lg:text-4xl font-serif font-bold text-gold mb-1">0</div>
                    <div class="text-xs uppercase tracking-wider font-semibold text-slate-500">Systemic Drug Side Effects</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-3xl lg:text-4xl font-serif font-bold text-gold mb-1">20 Min</div>
                    <div class="text-xs uppercase tracking-wider font-semibold text-slate-500">Daily Outpatient Sessions</div>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                    <div class="text-3xl lg:text-4xl font-serif font-bold text-gold mb-1">100%</div>
                    <div class="text-xs uppercase tracking-wider font-semibold text-slate-500">Insurance Navigation</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 md:py-24 bg-slate-50">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm border border-slate-100">
                <span class="text-xs font-bold uppercase tracking-widest text-gold mb-3 block">Clinical Overview</span>
                <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6 leading-tight">How Deep TMS Differs from Standard rTMS</h2>
                <div class="prose max-w-none text-slate-700 text-base md:text-lg leading-relaxed space-y-5">
                    <p>Deep Transcranial Magnetic Stimulation (Deep TMS) represents the latest evolution in non-invasive neuromodulation technology. Utilizing specialized cushioned helmet coils, Deep TMS delivers therapeutic magnetic pulses deeper into critical brain structures involved in mood regulation and compulsive behaviors.</p>
                    <p>While traditional figure-8 TMS coils stimulate cortical areas approximately 1.5 cm below the skull, Deep TMS utilizes patented H-coil configurations that safely penetrate up to 3 to 4 cm into subcortical mood networks. This broader and deeper field of stimulation minimizes the risk of targeting errors and enhances clinical outcomes for complex, severe psychiatric conditions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- In-Depth Neuromodulation Science -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
                <div class="md:col-span-7">
                    <span class="text-xs font-bold uppercase tracking-widest text-gold mb-3 block">Mechanism of Action</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6 leading-tight">FDA-Cleared for Treatment-Resistant Depression & OCD</h2>
                    <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-6">Deep TMS has earned rigorous FDA clearance for Major Depressive Disorder, Treatment-Resistant Depression, and Obsessive-Compulsive Disorder (OCD). The deeper magnetic penetration has proven especially beneficial for OCD patients by calming the hyperactive cortico-striato-thalamo-cortical (CSTC) loops that drive intrusive thoughts and compulsive rituals.</p>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gold/10 text-gold flex items-center justify-center shrink-0 mt-0.5">✓</div>
                            <p class="text-slate-700 text-sm md:text-base font-medium">Reactivates dormant neural circuits in the prefrontal cortex.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gold/10 text-gold flex items-center justify-center shrink-0 mt-0.5">✓</div>
                            <p class="text-slate-700 text-sm md:text-base font-medium">Promotes enduring synaptic neuroplasticity without chemical tolerance.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gold/10 text-gold flex items-center justify-center shrink-0 mt-0.5">✓</div>
                            <p class="text-slate-700 text-sm md:text-base font-medium">Zero anesthesia, zero memory loss, and no post-session recovery downtime.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-5 bg-midnight text-white p-8 rounded-2xl shadow-xl">
                    <h3 class="text-2xl font-serif font-bold text-gold-light mb-4">Board-Certified Care</h3>
                    <p class="text-white/80 text-sm leading-relaxed mb-6">Under the direct leadership of Dr. Ritesh Amin, MD, every treatment protocol is individualized to your anatomical mapping and diagnostic history.</p>
                    <div class="border-t border-white/10 pt-6 space-y-3 text-xs text-white/70">
                        <p>📍 Edison Medical Center, Edison, NJ</p>
                        <p>📞 Phone: <a href="tel:+17323791797" class="text-gold-light font-semibold hover:underline">(732) 379-1797</a></p>
                        <p>🕒 Mon - Fri: 9:00 AM – 5:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section with Schema -->
    <section class="py-16 md:py-24 bg-slate-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-widest text-gold mb-3 block">Got Questions?</span>
                <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-base max-w-xl mx-auto">Helpful information about TMS therapy, insurance coverage, candidate qualification, and what to expect.</p>
            </div>
            <div>
                
                <div class="border border-slate-200 rounded-xl overflow-hidden mb-4 bg-white shadow-sm">
                    <button class="w-full text-left p-5 font-semibold text-midnight flex justify-between items-center hover:text-gold transition-colors focus:outline-none" onclick="toggleFaq(this)">
                        <span class="text-base md:text-lg">Is Deep TMS therapy painful?</span>
                        <svg class="w-5 h-5 text-gold transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100 pt-3">
                        No. Deep TMS is well-tolerated. Patients feel a rhythmic tapping sensation inside the helmet, and there is no downtime or anesthesia required.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden mb-4 bg-white shadow-sm">
                    <button class="w-full text-left p-5 font-semibold text-midnight flex justify-between items-center hover:text-gold transition-colors focus:outline-none" onclick="toggleFaq(this)">
                        <span class="text-base md:text-lg">Is Deep TMS covered by insurance in NJ?</span>
                        <svg class="w-5 h-5 text-gold transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100 pt-3">
                        Yes, Deep TMS is covered by Medicare and major commercial insurers under standard TMS coverage guidelines.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden mb-4 bg-white shadow-sm">
                    <button class="w-full text-left p-5 font-semibold text-midnight flex justify-between items-center hover:text-gold transition-colors focus:outline-none" onclick="toggleFaq(this)">
                        <span class="text-base md:text-lg">How long does a Deep TMS session take?</span>
                        <svg class="w-5 h-5 text-gold transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100 pt-3">
                        Sessions typically last between 19 and 20 minutes per day, making it easy to fit into a busy work or school schedule.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA Banner -->
    <section class="py-16 bg-midnight text-white text-center relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-4xl relative z-10">
            <span class="text-xs font-bold uppercase tracking-widest text-gold-light mb-3 block">Take the First Step</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif mb-6">Reclaim Your Mental Wellness</h2>
            <p class="text-white/75 text-base md:text-lg max-w-2xl mx-auto mb-8">You do not have to struggle in silence with treatment-resistant depression or anxiety. Dr. Ritesh Amin and our dedicated team are ready to help you recover.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact.php" class="btn btn-primary py-4 px-10 text-base shadow-lg shadow-gold/20">Book Your Consultation</a>
                <a href="tel:+17323791797" class="btn btn-ghost !border-white/30 !text-white hover:!bg-white hover:!text-midnight py-4 px-10 text-base">Call (732) 379-1797</a>
            </div>
        </div>
    </section>

    <script>
    function toggleFaq(btn) {
        const content = btn.nextElementSibling;
        const svg = btn.querySelector('svg');
        const isOpen = !content.classList.contains('hidden');
        if (isOpen) {
            content.classList.add('hidden');
            svg.classList.remove('rotate-180');
        } else {
            content.classList.remove('hidden');
            svg.classList.add('rotate-180');
        }
    }
    </script>

<?php include __DIR__ . '/footer.php'; ?>
