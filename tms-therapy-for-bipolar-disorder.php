<?php
$page_title = "TMS for Bipolar Depression in NJ | Dr. Ritesh Amin \u2013 Edison";
$page_desc = "Safe, evidence-based TMS therapy for bipolar depression without inducing manic switching. Board-certified psychiatric care in Edison, NJ. (732) 379-1797.";
$body_class = 'bg-beige font-sans';
$page_schema_json = <<<'SCHEMA'
{
    "@context": "https://schema.org",
    "@type": "MedicalWebPage",
    "name": "TMS for Bipolar Depression in NJ | Dr. Ritesh Amin \u2013 Edison",
    "description": "Safe, evidence-based TMS therapy for bipolar depression without inducing manic switching. Board-certified psychiatric care in Edison, NJ. (732) 379-1797.",
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
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest text-gold-light border border-gold/30 bg-gold/10 mb-6">Mood Disorder Care</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">TMS Therapy for Bipolar Depression in New Jersey</h1>
                <p class="text-lg sm:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed mb-8">Lifting depressive phases in Bipolar I and II disorder safely without triggering manic episodes.</p>
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
                <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6 leading-tight">Safe Mood Stabilization Without Manic Switching</h2>
                <div class="prose max-w-none text-slate-700 text-base md:text-lg leading-relaxed space-y-5">
                    <p>Treating the depressive phase of Bipolar Disorder is one of the most complex challenges in psychiatry. Traditional antidepressant pills carry a high risk of triggering hypomanic or manic switches, rapid cycling, or mixed states. Transcranial Magnetic Stimulation (TMS) provides a proven, targeted way to lift bipolar depression safely without chemical instability.</p>
                    <p>Extensive clinical literature demonstrates that when administered under close psychiatric supervision alongside existing mood-stabilizing medications (such as lithium or lamotrigine), TMS has an exceptionally low rate of manic switching (< 1%), comparable to placebo. It allows patients to break free from prolonged depressive episodes that medications could not resolve.</p>
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
                    <h2 class="text-3xl md:text-4xl font-serif text-midnight mb-6 leading-tight">Personalized Neuromodulation for Bipolar I & II</h2>
                    <p class="text-slate-700 text-base md:text-lg leading-relaxed mb-6">Dr. Ritesh Amin conducts comprehensive clinical monitoring throughout your TMS course, carefully calibrating pulse frequencies and motor thresholds to ensure smooth, stable, and sustainable mood elevation.</p>
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
                        <span class="text-base md:text-lg">Can TMS trigger a manic episode in bipolar patients?</span>
                        <svg class="w-5 h-5 text-gold transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100 pt-3">
                        When properly calibrated and administered alongside a mood stabilizer, the risk of manic switching during TMS is extremely low (< 1%).
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden mb-4 bg-white shadow-sm">
                    <button class="w-full text-left p-5 font-semibold text-midnight flex justify-between items-center hover:text-gold transition-colors focus:outline-none" onclick="toggleFaq(this)">
                        <span class="text-base md:text-lg">Does insurance cover TMS for Bipolar Depression in NJ?</span>
                        <svg class="w-5 h-5 text-gold transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100 pt-3">
                        While major depression is universally covered, coverage for bipolar depression varies by plan. Our team assists with single-case agreements and prior authorizations.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden mb-4 bg-white shadow-sm">
                    <button class="w-full text-left p-5 font-semibold text-midnight flex justify-between items-center hover:text-gold transition-colors focus:outline-none" onclick="toggleFaq(this)">
                        <span class="text-base md:text-lg">Can I continue my mood stabilizers during TMS?</span>
                        <svg class="w-5 h-5 text-gold transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden px-5 pb-5 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100 pt-3">
                        Yes. Maintaining your standard mood stabilizer regimen is standard clinical protocol during bipolar TMS therapy.
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
