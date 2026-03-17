<?php
$page_title = 'TMS for Stroke Recovery | Dr. Ritesh Amin – Edison, NJ';
$page_desc  = 'Advanced TMS therapy for Stroke Recovery in Edison, NJ. Treating motor weakness, paralysis, aphasia, and post-stroke depression with precision neuromodulation.';
$body_class = 'bg-beige font-sans';
$extra_css  = '
    .bihero { position: relative; padding: 10rem 0 5rem; background: var(--color-midnight); overflow: hidden; }
    .bihero::before { content: ""; position: absolute; inset: 0; background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px); background-size: 30px 30px; pointer-events: none; }
    .bihero::after { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%); }
    .bihero-orb-1 { position: absolute; top: -30%; right: -8%; width: 550px; height: 550px; background: radial-gradient(circle, rgba(37,111,168,0.16) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
    .bihero-orb-2 { position: absolute; bottom: -35%; left: -6%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
    .bi-quicknav { display: flex; flex-wrap: wrap; justify-content: center; gap: 0.5rem; margin-bottom: 3rem; }
    .bi-quicknav a { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.6rem 1.25rem; border-radius: 999px; font-family: var(--font-sans); font-size: 0.82rem; font-weight: 600; letter-spacing: 0.04em; color: var(--color-midnight-light); background: #fff; border: 1.5px solid #e2e8f0; text-decoration: none; transition: all 0.3s ease; }
    .bi-quicknav a:hover, .bi-quicknav a.active { background: var(--color-midnight); color: white; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(11,25,44,0.15); border-color: var(--color-midnight); }
    .bi-quicknav a.active { cursor: default; } .bi-quicknav a.bi-tab-btn { cursor: pointer; } .bi-quicknav a svg { width: 15px; height: 15px; stroke: var(--color-gold); }
    .bi-tab-pane { display: none !important; } .bi-tab-pane.active { display: block !important; animation: bi-fade-in 0.4s ease forwards; }
    @keyframes bi-fade-in { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    .review-card { background: #fff; border-radius: 1.25rem; padding: 2rem; border: 1px solid rgba(37,111,168,0.06); box-shadow: 0 4px 20px rgba(11,25,44,0.04); transition: all 0.35s ease; position: relative; overflow: hidden; }
    .review-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(11,25,44,0.08); }
    .review-card::before { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent); opacity: 0; transition: opacity 0.35s ease; }
    .review-card:hover::before { opacity: 1; }
    .review-card.featured { background: var(--color-midnight); border-color: rgba(37,111,168,0.25); } .review-card.featured::before { opacity: 1; }
    .review-card.featured .review-name { color: #fff; } .review-card.featured .review-condition { color: rgba(255,255,255,0.45); } .review-card.featured .review-text { color: rgba(255,255,255,0.70); } .review-card.featured .review-stars { color: var(--color-gold-light); }
    .review-card.featured .review-avatar { background: rgba(37,111,168,0.25); border-color: rgba(37,111,168,0.4); color: var(--color-gold-light); }
    .review-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
    .review-avatar { width: 46px; height: 46px; min-width: 46px; border-radius: 50%; background: rgba(37,111,168,0.08); border: 2px solid rgba(37,111,168,0.15); color: var(--color-gold); display: flex; align-items: center; justify-content: center; font-family: var(--font-serif); font-weight: 700; font-size: 1.15rem; }
    .review-name { font-family: var(--font-serif); font-size: 1.15rem; color: var(--color-midnight); margin: 0 0 0.15rem; font-weight: 700; } .review-condition { font-size: 0.8rem; color: rgba(11,25,44,0.6); display: block; font-weight: 500; } .review-stars { color: var(--color-gold); font-size: 1.1rem; letter-spacing: 2px; margin-left: auto; }
    .review-text { font-size: 0.95rem; color: #4b5563; line-height: 1.7; margin-bottom: 1.5rem; position: relative; z-index: 1; }
    .review-quote-icon { font-family: var(--font-serif); font-size: 3.5rem; color: rgba(37,111,168,0.08); position: absolute; top: -1.75rem; left: -0.5rem; z-index: -1; line-height: 1; }
    .review-verified { display: flex; align-items: center; gap: 0.35rem; font-size: 0.7rem; font-weight: 500; color: #22c55e; } .review-verified svg { width: 14px; height: 14px; }
    .bi-condition { position: relative; padding: 2rem 0 3rem; }
    .bi-condition-badge { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.4rem 1rem; background: rgba(37,111,168,0.06); border: 1px solid rgba(37,111,168,0.14); border-radius: 999px; font-family: var(--font-sans); font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-gold); margin-bottom: 1rem; }
    .bi-condition-badge svg { width: 14px; height: 14px; }
    .bi-condition h2 { font-family: var(--font-serif); font-size: 2.25rem; font-weight: 600; color: var(--color-midnight); margin-bottom: 1rem; line-height: 1.25; }
    .bi-condition-lead { font-size: 1.1rem; line-height: 1.7; color: var(--color-midnight-light); max-width: 650px; margin-bottom: 2rem; }
    .bi-condition p { font-size: 0.95rem; line-height: 1.8; color: var(--color-text-light); margin-bottom: 1rem; }
    .bi-cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 2rem; }
    .bi-card { background: #fff; border: 1px solid rgba(37,111,168,0.08); border-radius: 1rem; padding: 1.5rem; transition: all 0.3s ease; }
    .bi-card:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(11,25,44,0.05); border-color: rgba(37,111,168,0.18); }
    .bi-card-icon { width: 2.75rem; height: 2.75rem; background: rgba(37,111,168,0.07); border: 1px solid rgba(37,111,168,0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--color-gold); margin-bottom: 0.85rem; }
    .bi-card-icon svg { width: 1.15rem; height: 1.15rem; }
    .bi-card h4 { font-family: var(--font-sans); font-size: 0.92rem; font-weight: 700; color: var(--color-midnight); margin: 0 0 0.35rem; }
    .bi-card p { font-size: 0.82rem; line-height: 1.6; color: var(--color-text-light); margin: 0; }
    .bi-stats-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; max-width: 1000px; margin: 0 auto; }
    .bi-stat { text-align: center; padding: 2rem 1rem; background: #fff; border: 1px solid rgba(37,111,168,0.08); border-radius: 1.25rem; transition: all 0.3s ease; }
    .bi-stat:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(11,25,44,0.05); }
    .bi-stat-num { font-family: var(--font-serif); font-size: 2.5rem; font-weight: 700; color: var(--color-gold); line-height: 1; margin-bottom: 0.4rem; }
    .bi-stat-label { font-family: var(--font-sans); font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-text-light); }
    .bi-how-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin: 2.5rem 0; }
    .bi-how-step { background: var(--color-midnight); border-radius: 1.25rem; padding: 2rem; position: relative; overflow: hidden; }
    .bi-how-step::before { content: ""; position: absolute; top: 0; left: 1.5rem; right: 1.5rem; height: 2px; background: linear-gradient(90deg, var(--color-gold), transparent); border-radius: 1px; }
    .bi-how-num { font-family: var(--font-serif); font-size: 2rem; font-weight: 700; color: rgba(37,111,168,0.25); margin-bottom: 0.75rem; line-height: 1; }
    .bi-how-step h4 { font-family: var(--font-sans); font-size: 1rem; font-weight: 700; color: #fff; margin: 0 0 0.5rem; }
    .bi-how-step p { font-size: 0.85rem; line-height: 1.6; color: rgba(255,255,255,0.55); margin: 0; }
    .bi-callout { background: rgba(37,111,168,0.04); border-left: 3px solid var(--color-gold); padding: 1.25rem 1.5rem; border-radius: 0 14px 14px 0; margin: 1.5rem 0; }
    .bi-callout p { color: var(--color-midnight); font-weight: 500; margin: 0; font-size: 0.95rem; }
    .bi-split { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start; }
    .bi-table { width: 100%; border-collapse: separate; border-spacing: 0; margin-top: 1.5rem; background: white; border-radius: 1rem; overflow: hidden; box-shadow: 0 4px 15px rgba(11,25,44,0.05); }
    .bi-table th { background: var(--color-midnight); color: white; font-weight: 500; text-align: left; padding: 1rem 1.5rem; font-size: 0.95rem; text-transform: uppercase; }
    .bi-table td { padding: 1.25rem 1.5rem; border-bottom: 1px solid rgba(11,25,44,0.05); color: var(--color-text); vertical-align: top; }
    .bi-table tr:last-child td { border-bottom: none; } .bi-table td:first-child { font-weight: 600; color: var(--color-midnight); width: 35%; }
    .bi-image-wrapper { position: relative; border-radius: 1.5rem; overflow: hidden; box-shadow: 0 20px 40px rgba(11,25,44,0.1); }
    .bi-image-wrapper img { width: 100%; height: auto; display: block; transition: transform 0.7s ease; }
    .bi-image-wrapper:hover img { transform: scale(1.05); }
    .bi-image-wrapper::after { content: ""; position: absolute; inset: 0; border-radius: 1.5rem; border: 2px solid rgba(255,255,255,0.1); pointer-events: none; }
    .bi-cta-card { background: var(--color-midnight); border-radius: 2rem; padding: 3.5rem; position: relative; overflow: hidden; display: grid; grid-template-columns: 1fr auto; gap: 3rem; align-items: center; }
    .bi-cta-card::before { content: ""; position: absolute; top: -80px; right: -80px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(37,111,168,0.18) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
    .bi-cta-card::after { content: ""; position: absolute; top: 0; left: 2rem; right: 2rem; height: 2px; background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent); border-radius: 1px; }
    @media (max-width: 991px) { .bi-cards-grid { grid-template-columns: repeat(2, 1fr); } .bi-how-grid { grid-template-columns: 1fr; } .bi-stats-row { grid-template-columns: repeat(2, 1fr); } .bi-split { grid-template-columns: 1fr !important; gap: 2.5rem; } }
    @media (max-width: 640px) { .bihero { padding: 8rem 0 3rem; } .bi-cards-grid { grid-template-columns: 1fr; } .bi-stats-row { grid-template-columns: repeat(2, 1fr); gap: 0.75rem; } .bi-stat { padding: 1.25rem 0.75rem; } .bi-stat-num { font-size: 2rem; } .bi-cta-card { grid-template-columns: 1fr; padding: 2rem; text-align: center; } .bi-condition h2 { font-size: 1.75rem; } }
';
include __DIR__ . '/../header.php';
?>

<section class="bihero" id="bi-hero">
    <div class="bihero-orb-1"></div><div class="bihero-orb-2"></div>
    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <div class="max-w-3xl mx-auto text-center reveal">
            <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Neurology &amp; Brain Stimulation</span>
            <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">TMS for Stroke <span class="text-gold-light">Recovery</span></h1>
            <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
            <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">Rebuilding neural pathways damaged by stroke — restoring motor control, speech, and quality of life through precision magnetic stimulation.</p>
            <div class="flex flex-wrap justify-center gap-4 mt-10">
                <a href="/contact.php" class="btn btn-primary shadow-lg shadow-gold/20">Schedule Consultation</a>
                <a href="#conditions" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Explore Conditions</a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-beige-dark/50" id="stats">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="bi-stats-row reveal">
            <div class="bi-stat"><div class="bi-stat-num">795K</div><div class="bi-stat-label">Strokes Per Year in the US</div></div>
            <div class="bi-stat"><div class="bi-stat-num">87%</div><div class="bi-stat-label">Are Ischemic Strokes</div></div>
            <div class="bi-stat"><div class="bi-stat-num">FDA</div><div class="bi-stat-label">Cleared Technology</div></div>
            <div class="bi-stat"><div class="bi-stat-num">0</div><div class="bi-stat-label">Systemic Side Effects</div></div>
        </div>
    </div>
</section>

<section class="pt-16 pb-4 bg-white" id="conditions">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="section-header center reveal">
            <span class="eyebrow">Conditions We Treat</span>
            <h2 class="section-title">Comprehensive Post-Stroke Care</h2>
            <p class="section-subtitle">Dr. Amin designs specialized TMS protocols targeting motor, language, and emotional networks impacted by stroke.</p>
        </div>
        <div class="bi-quicknav reveal" id="condition-tabs">
            <a href="#stroke" class="bi-tab-btn active" data-target="stroke">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                Stroke Recovery
            </a>
            <a href="#paralysis" class="bi-tab-btn" data-target="paralysis">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                Paralysis &amp; Motor Weakness
            </a>
            <a href="#aphasia" class="bi-tab-btn" data-target="aphasia">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                Aphasia &amp; Speech
            </a>
        </div>
    </div>
</section>

<div class="bi-condition bi-tab-pane active" id="stroke">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="reveal">
            <span class="bi-condition-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg> Section 01</span>
            <h2>TMS for Post-Stroke Recovery</h2>
            <p class="bi-condition-lead">Reviving dormant neural circuits and accelerating neuroplasticity to restore function after ischemic and hemorrhagic strokes.</p>
        </div>
        <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
            <div>
                <p>A stroke interrupts blood flow to the brain, killing neurons and leaving surrounding "penumbral" tissue in a state of chronic under-activity. These surviving neurons represent the key opportunity for recovery — and TMS is uniquely capable of reactivating them.</p>
                <p>High-frequency excitatory TMS applied to the affected hemisphere can <strong>reactivate these silent circuits</strong> and drive formation of new neural pathways. Applied to the unaffected hemisphere, inhibitory TMS reduces compensatory over-inhibition and restores neural balance between hemispheres.</p>
                <div class="bi-callout"><p>Research shows TMS combined with physical therapy produces significantly greater motor gains than physical therapy alone — particularly when started within 3–12 months of stroke onset.</p></div>
            </div>
            <div class="bi-image-wrapper"><img src="/assets/neurology-tms/stroke.png" alt="Brain scan showing post-stroke penumbra and TMS stimulation target area"></div>
        </div>
        <div class="reveal mt-12">
            <h3>Post-stroke deficits TMS commonly addresses:</h3>
            <div class="bi-cards-grid">
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/></svg></div>
                    <h4>Hemiplegia &amp; Hemiparesis</h4>
                    <p>One-sided weakness or paralysis from damage to the contralateral motor cortex and corticospinal tract.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></div>
                    <h4>Spasticity</h4>
                    <p>Involuntary muscle stiffness and spasms following damage to motor control pathways, limiting daily function.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
                    <h4>Post-Stroke Depression</h4>
                    <p>Up to 33% of stroke survivors develop major depression. TMS is FDA-cleared for depression and highly effective here.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bi-condition bi-tab-pane" id="paralysis">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="reveal">
            <span class="bi-condition-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Section 02</span>
            <h2>TMS for Paralysis &amp; Motor Weakness</h2>
            <p class="bi-condition-lead">Unlocking residual motor potential and rewiring damaged motor pathways to rebuild strength and coordination.</p>
        </div>
        <div class="bi-split reveal" style="grid-template-columns: 0.8fr 1.2fr; align-items: center;">
            <div class="bi-image-wrapper"><img src="/assets/neurology-tms/motor-recovery.png" alt="Patient undergoing motor rehabilitation with TMS brain stimulation support"></div>
            <div>
                <p>Even when paralysis appears complete, many patients retain residual corticospinal connectivity that is functionally suppressed. TMS exploits this residual connectivity to reactivate dormant motor pathways.</p>
                <p>Excitatory high-frequency TMS (10 Hz or iTBS) over the ipsilesional motor cortex increases its output to the spinal cord, while inhibitory TMS over the contralesional motor cortex reduces pathological interhemispheric inhibition. This <strong>dual-site protocol</strong> dramatically enhances motor rehabilitation outcomes.</p>
            </div>
        </div>
        <div class="bi-how-grid reveal">
            <div class="bi-how-step"><div class="bi-how-num">01</div><h4>Cortical Excitability Assessment</h4><p>TMS motor mapping measures residual corticospinal connectivity before designing your personalized protocol.</p></div>
            <div class="bi-how-step"><div class="bi-how-num">02</div><h4>Dual-Site Stimulation</h4><p>Excitatory TMS to the lesioned hemisphere and inhibitory TMS to the healthy hemisphere, restoring neural balance.</p></div>
            <div class="bi-how-step"><div class="bi-how-num">03</div><h4>Motor Training Integration</h4><p>Targeted physiotherapy immediately following TMS capitalizes on heightened cortical excitability for maximum gains.</p></div>
        </div>
        <div class="reveal mt-8">
            <table class="bi-table">
                <thead><tr><th>Deficit</th><th>TMS Protocol</th><th>Expected Benefit</th></tr></thead>
                <tbody>
                    <tr><td>Arm &amp; Hand Weakness</td><td>Excitatory 10Hz over M1 lesioned side</td><td>Improved grip strength &amp; fine motor control</td></tr>
                    <tr><td>Leg &amp; Gait Impairment</td><td>iTBS over lower limb motor cortex</td><td>Improved walking speed &amp; balance</td></tr>
                    <tr><td>Spasticity</td><td>Inhibitory 1Hz over contralesional M1</td><td>Reduced muscle tone &amp; spasms</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="bi-condition bi-tab-pane" id="aphasia">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="reveal">
            <span class="bi-condition-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Section 03</span>
            <h2>TMS for Aphasia &amp; Speech Recovery</h2>
            <p class="bi-condition-lead">Restoring the power of communication by reactivating language networks and reducing compensatory speech suppression.</p>
        </div>
        <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
            <div>
                <p>Aphasia affects approximately 180,000 Americans annually, almost always from stroke. When stroke damages Broca's or Wernicke's area, the right hemisphere attempts to compensate — but this can actually <strong>suppress recovery</strong> of left hemisphere language networks.</p>
                <p>Inhibitory TMS applied to right-hemisphere speech areas removes this maladaptive compensation and allows damaged left hemisphere networks to re-emerge. Combined with intensive speech therapy after each session, language recovery is significantly accelerated.</p>
                <div class="bi-callout"><p>Published research demonstrates that inhibitory TMS combined with speech therapy produces greater improvements in naming, fluency, and comprehension than speech therapy alone.</p></div>
            </div>
            <div class="bi-image-wrapper"><img src="/assets/neurology-tms/aphasia.png" alt="Language network diagram showing Broca's area and TMS target for aphasia"></div>
        </div>
        <div class="reveal mt-12">
            <table class="bi-table">
                <thead><tr><th>Aphasia Type</th><th>TMS Approach</th></tr></thead>
                <tbody>
                    <tr><td>Broca's (Expressive) Aphasia</td><td>Inhibitory TMS to right IFG to release suppression on left Broca's area; paired with speech output tasks.</td></tr>
                    <tr><td>Wernicke's (Receptive) Aphasia</td><td>Excitatory TMS to perilesional left temporal areas combined with comprehension-focused language therapy.</td></tr>
                    <tr><td>Global Aphasia</td><td>Sequential bilateral TMS protocol addressing both production and comprehension networks.</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<section class="py-12 bg-white" id="approach">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="section-header center reveal mb-8">
            <span class="eyebrow">Our Philosophy</span>
            <h2 class="section-title text-midnight font-serif font-bold">A Comprehensive Approach to Stroke Rehabilitation</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal delay-1">
            <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></div>
                <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Cortical Mapping</h3>
                <p class="text-gray-600 leading-relaxed text-sm">TMS motor mapping to measure residual connectivity and identify optimal stimulation targets before treatment.</p>
            </div>
            <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Precision Stimulation</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Excitatory and inhibitory TMS protocols precisely targeted to the lesioned and peri-lesional cortex, calibrated to each patient.</p>
            </div>
            <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
                <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Synergistic Rehab</h3>
                <p class="text-gray-600 leading-relaxed text-sm">TMS sessions immediately followed by physical, occupational, or speech therapy — maximizing the neuroplastic window.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-midnight" id="about-doctor">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-5/12 reveal shrink-0">
                <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 p-2 bg-[#0d1a2d]">
                    <img src="/assets/images/dr-ritesh-hero.webp" alt="Dr. Ritesh Amin" class="w-full h-auto aspect-[4/5] object-cover rounded-2xl">
                </div>
            </div>
            <div class="lg:w-7/12 reveal delay-1">
                <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block">Leading the Field in Neuromodulation</span>
                <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 text-white">Meet Dr. Ritesh Amin, MD</h2>
                <h3 class="text-xl text-[#c1d9f8] mb-8 font-light border-b border-white/10 pb-6">Board Certified Psychiatrist &amp; TMS Specialist</h3>
                <p class="text-lg text-white/80 leading-relaxed mb-6">With over 15 years of clinical excellence, Dr. Amin applies cutting-edge TMS protocols for stroke rehabilitation — addressing motor recovery, aphasia, and the depression and cognitive challenges that accompany stroke.</p>
                <a href="/dr-ritesh-amin.php" class="inline-flex items-center text-gold font-semibold hover:text-white transition-colors gap-2">Read Full Biography <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-slate-50" id="faq">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="section-header center reveal mb-8">
            <span class="eyebrow">Frequently Asked Questions</span>
            <h2 class="section-title text-midnight font-serif font-bold">Stroke Recovery TMS FAQs</h2>
        </div>
        <div class="bi-faq-accordion reveal delay-1 space-y-3">
            <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">How soon after a stroke can I start TMS?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300"><svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg></span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed">TMS can begin as early as 1–2 weeks post-stroke once medically stable. The critical neuroplasticity window extends from 1 week to approximately 3 months post-stroke, making early intervention highly valuable. However, TMS has shown meaningful benefits even in patients years post-stroke.</div>
                </div>
            </div>
            <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">Can TMS help arm paralysis years after a stroke?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300"><svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg></span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed">Yes. TMS-assisted motor rehabilitation has demonstrated significant improvements even in chronic stroke patients (more than 6 months post-stroke). The key predictor is residual corticospinal connectivity, which Dr. Amin measures using TMS motor mapping during your initial evaluation.</div>
                </div>
            </div>
            <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                    <h3 class="text-lg font-bold text-midnight font-serif">Does TMS help post-stroke depression?</h3>
                    <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300"><svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg></span>
                </button>
                <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                    <div class="p-6 pt-0 text-gray-600 leading-relaxed">Absolutely. TMS is FDA-approved for Major Depressive Disorder and is exceptionally effective for post-stroke depression. Treating depression in stroke patients improves not only emotional wellbeing but motor rehabilitation outcomes — depressed patients engage less effectively in physical therapy, so addressing mood directly accelerates overall recovery.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-beige-dark/50" id="patient-stories">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="section-header center reveal mb-12">
            <span class="eyebrow">Patient Stories</span>
            <h2 class="section-title text-midnight font-serif font-bold">Real Recoveries</h2>
            <p class="section-subtitle text-gray-600">Stroke survivors who regained motor function and communication through TMS.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal delay-1">
            <div class="review-card featured">
                <div class="review-header">
                    <div class="review-avatar">L</div>
                    <div><h4 class="review-name">Linda T.</h4><span class="review-condition">Post-Stroke Motor Recovery</span></div>
                    <div class="review-stars">★★★★★</div>
                </div>
                <div class="review-text"><span class="review-quote-icon">"</span>After my stroke, my right arm was almost completely non-functional. Physical therapy helped but I reached a plateau. Dr. Amin's TMS program broke through that plateau. After six weeks, I was able to button my shirt again. That might sound small, but it was everything to me.</div>
                <div class="review-verified"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Verified Patient</div>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">D</div>
                    <div><h4 class="review-name">David R.</h4><span class="review-condition">Aphasia &amp; Speech Recovery</span></div>
                    <div class="review-stars">★★★★★</div>
                </div>
                <div class="review-text"><span class="review-quote-icon">"</span>My stroke left me unable to find words. I went from being a college professor to barely completing a sentence. Dr. Amin combined TMS with speech therapy. My vocabulary started coming back within weeks. I'm now giving lectures again.</div>
                <div class="review-verified"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Verified Patient</div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-white" id="get-evaluated">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bi-cta-card reveal">
            <div class="relative z-10">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Take the First Step</span>
                <h2 class="text-3xl md:text-4xl font-serif text-white mb-3 leading-tight">Is TMS Right for Your Stroke Recovery?</h2>
                <p class="text-white/60 text-sm leading-relaxed max-w-md mb-0">Dr. Amin evaluates residual neural connectivity and designs a personalized TMS protocol for your stroke profile and recovery goals.</p>
            </div>
            <div class="relative z-10 flex flex-col items-center gap-4">
                <a href="/contact.php" class="btn btn-primary py-4 px-8 text-base shadow-[0_8px_24px_rgba(37,111,168,0.4)]">Schedule Evaluation <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5 ml-2 inline-block" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
        </div>
    </div>
</section>

<section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
    <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
        <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Recovery Begins Here</span>
        <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Reclaim Life After Stroke</h2>
        <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">Advanced TMS therapy can help you move past the plateau. Dr. Amin is ready to guide your recovery.</p>
        <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Book Your Consultation Today</a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.bi-tab-btn');
    const panes = document.querySelectorAll('.bi-tab-pane');
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            tabs.forEach(t => t.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            const pane = document.getElementById(this.getAttribute('data-target'));
            if (pane) pane.classList.add('active');
        });
    });
    const faqHeaders = document.querySelectorAll('.bi-faq-header');
    faqHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.bi-faq-icon');
            const isOpen = content.classList.contains('max-h-[1000px]');
            document.querySelectorAll('.bi-faq-content').forEach(c => { c.classList.remove('max-h-[1000px]', 'opacity-100'); c.classList.add('max-h-0', 'opacity-0'); });
            document.querySelectorAll('.bi-faq-icon').forEach(i => i.classList.remove('rotate-45'));
            if (!isOpen) { content.classList.remove('max-h-0', 'opacity-0'); content.classList.add('max-h-[1000px]', 'opacity-100'); icon.classList.add('rotate-45'); }
        });
    });
});
</script>

<?php include __DIR__ . '/../footer.php'; ?>
