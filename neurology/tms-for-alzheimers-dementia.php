<?php
$page_title = 'TMS for Alzheimer\'s & Dementia | Dr. Ritesh Amin – Edison, NJ';
$page_desc  = 'Innovative TMS therapy for Mild Cognitive Impairment and early-stage Alzheimer\'s in Edison, NJ. Stimulating neural networks to support memory and cognitive function.';
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
    .bi-table { width: 100%; border-collapse: separate; border-spacing: 0; margin-top: 1.5rem; background: white; border-radius: 1rem; overflow: hidden; box-shadow: 0 4px 15px rgba(11,25,44,0.05); border: 1px solid rgba(11,25,44,0.05); }
    .bi-table th { background: var(--color-midnight); color: white; font-weight: 500; text-align: left; padding: 1rem 1.5rem; font-size: 0.95rem; text-transform: uppercase; }
    .bi-table td { padding: 1.25rem 1.5rem; border-bottom: 1px solid rgba(11,25,44,0.05); color: var(--color-text); vertical-align: top; }
    .bi-table tr:last-child td { border-bottom: none; } .bi-table td:first-child { font-weight: 600; color: var(--color-midnight); width: 40%; }
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

    <!-- Hero -->
    <section class="bihero" id="bi-hero">
        <div class="bihero-orb-1"></div>
        <div class="bihero-orb-2"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Neurology &amp; Brain Stimulation</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    TMS for Alzheimer's <span class="text-gold-light">&amp; Memory Loss</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    A proactive, non-invasive approach to support cognitive function, delay memory decline, and manage the behavioral symptoms associated with early-stage dementia.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-10">
                    <a href="/contact.php" class="btn btn-primary shadow-lg shadow-gold/20">Schedule Consultation</a>
                    <a href="#conditions" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Explore Therapy</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="py-16 bg-beige-dark/50" id="stats">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bi-stats-row reveal">
                <div class="bi-stat"><div class="bi-stat-num">Non-OP</div><div class="bi-stat-label">Non-Invasive Protocol</div></div>
                <div class="bi-stat"><div class="bi-stat-num">MCI</div><div class="bi-stat-label">Targets Early Stages</div></div>
                <div class="bi-stat"><div class="bi-stat-num">DMN</div><div class="bi-stat-label">Network Modulation</div></div>
                <div class="bi-stat"><div class="bi-stat-num">0</div><div class="bi-stat-label">Systemic Side Effects</div></div>
            </div>
        </div>
    </section>

    <!-- Condition Quick Nav -->
    <section class="pt-16 pb-4 bg-white" id="conditions">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Areas of Focus</span>
                <h2 class="section-title">Supporting Cognitive Networks</h2>
                <p class="section-subtitle">TMS aims to strengthen connectivity within the brain's memory and executive networks before significant atrophy occurs.</p>
            </div>
            <div class="bi-quicknav reveal" id="condition-tabs">
                <a href="#mci" class="bi-tab-btn active" data-target="mci">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                    Mild Cognitive Impairment
                </a>
                <a href="#early-stage" class="bi-tab-btn" data-target="early-stage">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    Early-Stage Alzheimer's
                </a>
                <a href="#behavioral" class="bi-tab-btn" data-target="behavioral">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>
                    Behavioral Symptoms
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 1: Mild Cognitive Impairment -->
    <div class="bi-condition bi-tab-pane active" id="mci">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                    Section 01
                </span>
                <h2>TMS for Mild Cognitive Impairment (MCI)</h2>
                <p class="bi-condition-lead">A critical window for intervention: stimulating the brain to reinforce fading memory pathways.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
                <div>
                    <p>Mild Cognitive Impairment (MCI) is often the transitional stage between the expected cognitive decline of normal aging and the more serious decline of dementia. During this phase, intervention is crucial. Functional imaging shows that network connectivity in the brain begins to falter before significant physical shrinkage (atrophy) occurs.</p>
                    <p>TMS applies focused magnetic pulses to the **Dorsolateral Prefrontal Cortex (DLPFC)** and temporal regions, which are closely linked to the brain's memory centers, including the hippocampus. This stimulation promotes <strong>neuroplasticity</strong>—the brain's ability to form and reorganize synaptic connections, helping to compensate for early amyloid or tau pathology.</p>
                    <div class="bi-callout">
                        <p>Research indicates that high-frequency TMS may enhance memory retrieval and executive function in MCI patients by temporarily boosting cortical excitability and increasing cerebral blood flow.</p>
                    </div>
                </div>
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/alzheimers-mci.png" alt="Brain mapping of memory networks targeted by TMS">
                </div>
            </div>

            <div class="reveal mt-12">
                <h3>Cognitive Domains Targeted:</h3>
                <div class="bi-cards-grid">
                    <div class="bi-card">
                        <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h4>Working Memory</h4>
                        <p>Improving the ability to hold and process information in the short term, such as recalling a phone number or following a conversation.</p>
                    </div>
                    <div class="bi-card">
                        <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div>
                        <h4>Executive Function</h4>
                        <p>Enhancing planning, reasoning, and problem-solving skills by strengthening the prefrontal network.</p>
                    </div>
                    <div class="bi-card">
                        <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/></svg></div>
                        <h4>Verbal Fluency</h4>
                        <p>Aiding language processing to reduce instances of "word-finding" difficulty, a common early sign of MCI.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 2: Early-Stage Alzheimer's -->
    <div class="bi-condition bi-tab-pane" id="early-stage">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    Section 02
                </span>
                <h2>TMS for Early-Stage Alzheimer's</h2>
                <p class="bi-condition-lead">Modulating the Default Mode Network (DMN) to preserve independence and cognitive reserve.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 0.8fr 1.2fr; align-items: center;">
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/alzheimers-early-stage.png" alt="Doctor reviewing cognitive assessment with a patient">
                </div>
                <div>
                    <p>In early-stage Alzheimer's Disease (AD), pathological proteins disrupt communication between different brain regions, specifically impacting the <strong>Default Mode Network (DMN)</strong>, which is crucial for memory consolidation and self-referential thought.</p>
                    <p>While TMS cannot cure AD or clear pathological plaques, it can act as "physical therapy for the brain." By delivering targeted electromagnetic pulses, TMS aims to <strong>maximize the efficiency of surviving neurons</strong> and stimulate collateral pathways. This cognitive neuromodulation may help to slow the rate of clinical decline and slightly prolong the period of independent living.</p>
                </div>
            </div>

            <div class="bi-how-grid reveal">
                <div class="bi-how-step">
                    <div class="bi-how-num">01</div>
                    <h4>Network Stimulation</h4>
                    <p>Multi-site stimulation protocols are often used to target both language (Broca's area) and executive (DLPFC) hubs.</p>
                </div>
                <div class="bi-how-step">
                    <div class="bi-how-num">02</div>
                    <h4>Cognitive Training Synergy</h4>
                    <p>TMS is often most effective when combined with active cognitive exercises, reinforcing the connections being stimulated.</p>
                </div>
                <div class="bi-how-step">
                    <div class="bi-how-num">03</div>
                    <h4>Ongoing Maintenance</h4>
                    <p>Unlike treating depression, utilizing TMS for neurodegenerative conditions may require periodic "maintenance" sessions.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 3: Behavioral Symptoms -->
    <div class="bi-condition bi-tab-pane" id="behavioral">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>
                    Section 03
                </span>
                <h2>TMS for Behavioral &amp; Psychological Symptoms of Dementia (BPSD)</h2>
                <p class="bi-condition-lead">Providing relief for the emotional toll of cognitive decline without heavy sedation.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
                <div>
                    <p>Cognitive decline is only one aspect of dementia. Up to 90% of patients will experience Behavioral and Psychological Symptoms of Dementia (BPSD), which include severe depression, agitation, anxiety, and apathy. These symptoms are often the primary cause of caregiver burnout and nursing home placement.</p>
                    <p>Traditional psychiatric medications (like antipsychotics) often carry significant risks for elderly dementia patients, including increased confusion and fall risk. TMS offers a powerful, localized alternative. Because TMS is FDA-cleared for Depression and Anxiety, we can adapt these protocols to target the mood-regulating circuits in dementia patients, <strong>calming agitation and lifting mood without systemic side effects.</strong></p>
                </div>
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/alzheimers-behavioral.png" alt="Elderly patient looking peaceful after TMS therapy">
                </div>
            </div>

            <div class="reveal mt-12">
                <table class="bi-table">
                    <thead><tr><th>Symptom</th><th>TMS Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Dementia-Related Depression</td><td>Stimulates underactive prefrontal circuitry to restore mood balance, improving overall engagement.</td></tr>
                        <tr><td>Agitation &amp; Anxiety</td><td>Can utilize inhibitory (low-frequency) TMS protocols over hyperactive regions to calm severe agitation.</td></tr>
                        <tr><td>Apathy</td><td>Boosts drive and motivation by activating reward pathways, helping patients participate more in daily life.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Our Approach -->
    <section class="py-12 bg-white" id="approach">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal mb-8">
                <span class="eyebrow">A Careful, Measured Process</span>
                <h2 class="section-title text-midnight font-serif font-bold">Integrating TMS into Cognitive Care</h2>
                <p class="section-subtitle">We prioritize realistic goals, safety, and improving quality of life for the patient and their family.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal delay-1">
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Comprehensive Evaluation</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Reviewing neuro-psych testing, MRIs, and medical history to ensure TMS is an appropriate and safe option for your specific stage.</p>
                </div>
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Caregiver Integration</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">We work closely with family members and caregivers to monitor progress, changes in behavior, and adjust protocols as needed.</p>
                </div>
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Multi-Target Protocols</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Employing advanced TMS protocols to target different cortical hubs to address memory, executive function, and mood simultaneously.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Dr Amin -->
    <section class="py-16 bg-midnight" id="about-doctor">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-5/12 reveal shrink-0">
                    <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 p-2 bg-[#0d1a2d]">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80" alt="Dr. Ritesh Amin" class="w-full h-auto aspect-[4/5] object-cover rounded-2xl">
                    </div>
                </div>
                <div class="lg:w-7/12 reveal delay-1">
                    <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block flex items-center gap-2">
                        <span class="w-8 h-[2px] bg-gold block"></span>
                        Expertise in Neuropsychiatry
                    </span>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 text-white">Meet Dr. Ritesh Amin, MD</h2>
                    <h3 class="text-xl text-[#c1d9f8] mb-8 font-light border-b border-white/10 pb-6">Board Certified Psychiatrist &amp; TMS Specialist</h3>
                    <p class="text-lg text-white/80 leading-relaxed mb-6">
                        Navigating cognitive decline is vastly challenging for both the patient and their family. Dr. Amin approaches Alzheimer's and MCI with a compassionate, realistic, and science-driven mindset. He utilizes TMS not as a cure, but as a stabilizing tool to enhance the brain's remaining reserves and improve daily mood and function.
                    </p>
                    <a href="/dr-ritesh-amin.php" class="inline-flex items-center text-gold font-semibold hover:text-white transition-colors gap-2">
                        Read Full Biography <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-slate-50" id="faq">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="section-header center reveal mb-8">
                <span class="eyebrow">Frequently Asked Questions</span>
                <h2 class="section-title text-midnight font-serif font-bold">Cognitive TMS FAQs</h2>
            </div>
            <div class="bi-faq-accordion reveal delay-1 space-y-3">
                <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                    <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                        <h3 class="text-lg font-bold text-midnight font-serif">Can TMS cure Alzheimer's disease?</h3>
                        <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            No. Currently, there is no cure for Alzheimer's disease. TMS for cognitive decline is considered an off-label use aimed at symptom management. Research suggests it may help boost cognitive function temporarily, slow the rate of decline in early stages, and manage depression or agitation, but it does not reverse the underlying neurodegeneration.
                        </div>
                    </div>
                </div>
                <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                    <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                        <h3 class="text-lg font-bold text-midnight font-serif">Is TMS suitable for advanced stage or severe dementia?</h3>
                        <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Generally, TMS is most effective during Mild Cognitive Impairment (MCI) or Early-Stage Alzheimer's when there is still significant neural reserve to stimulate. In severe dementia, the amount of brain atrophy often limits the potential benefits of cognitive enhancement, though it is occasionally used to manage severe behavioral symptoms.
                        </div>
                    </div>
                </div>
                <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                    <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                        <h3 class="text-lg font-bold text-midnight font-serif">How does the treatment feel?</h3>
                        <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Patients typically feel a tapping or clicking sensation on the scalp during the pulses. The procedure is non-invasive, does not require anesthesia, and patients remain fully awake. Memory patients are monitored closely to ensure they remain calm and comfortable throughout the short sessions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Stories (Caregiver perspective) -->
    <section class="py-20 bg-beige-dark/50" id="patient-stories">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="section-header center reveal mb-12">
                <span class="eyebrow">Perspectives</span>
                <h2 class="section-title text-midnight font-serif font-bold">Hope &amp; Stability</h2>
                <p class="section-subtitle text-gray-600">Hear from family members who observed the impact of TMS on their loved ones.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal delay-1">
                <div class="review-card featured">
                    <div class="review-header">
                        <div class="review-avatar">S</div>
                        <div>
                            <h4 class="review-name">Sarah T.</h4>
                            <span class="review-condition">Caregiver for Spouse (MCI)</span>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        When my husband was diagnosed with early cognitive impairment, we wanted to do everything possible to slow it down. Dr. Amin recommended TMS. While I know it's not a cure, we've noticed he is more conversant, remembers names a bit faster, and most importantly, his severe anxiety has almost disappeared. We are so grateful for the extra quality time.
                    </div>
                    
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-avatar">D</div>
                        <div>
                            <h4 class="review-name">David L.</h4>
                            <span class="review-condition">Caregiver for Parent</span>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        My mother's dementia brought on horrible mood swings and depression. She didn't tolerate the psychiatric meds well. Seeking an alternative led us to TMS. It was gentle enough for her, and it truly lifted the fog of depression. She smiles more now and interacts with the grandkids, which is all we could ask for.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 bg-white" id="get-evaluated">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bi-cta-card reveal">
                <div class="relative z-10">
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Early Intervention Matters</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-3 leading-tight">Explore Cognitive Neuromodulation</h2>
                    <p class="text-white/60 text-sm leading-relaxed max-w-md mb-0">If you or a loved one are experiencing early signs of memory loss or dementia-related depression, schedule an evaluation to see if TMS may provide support.</p>
                </div>
                <div class="relative z-10 flex flex-col items-center gap-4">
                    <a href="/contact.php" class="btn btn-primary py-4 px-8 text-base shadow-[0_8px_24px_rgba(37,111,168,0.4)]">
                        Schedule Evaluation
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5 ml-2 inline-block" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Maximize Cognitive Reserve</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Taking a Proactive Step Forward</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">Learn how targeted electromagnetic stimulation can support your brain health during times of cognitive change.</p>
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
                document.querySelectorAll('.bi-faq-content').forEach(c => {
                    c.classList.remove('max-h-[1000px]', 'opacity-100');
                    c.classList.add('max-h-0', 'opacity-0');
                });
                document.querySelectorAll('.bi-faq-icon').forEach(i => i.classList.remove('rotate-45'));
                if (!isOpen) {
                    content.classList.remove('max-h-0', 'opacity-0');
                    content.classList.add('max-h-[1000px]', 'opacity-100');
                    icon.classList.add('rotate-45');
                }
            });
        });
    });
</script>

<?php include __DIR__ . '/../footer.php'; ?>
