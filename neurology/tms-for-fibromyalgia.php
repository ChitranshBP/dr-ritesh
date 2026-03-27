<?php
$page_title = 'TMS Therapy for Fibromyalgia | Dr. Ritesh Amin – Edison, NJ';
$page_desc  = 'Advanced TMS therapy for Fibromyalgia — targeting central sensitization to reduce widespread pain, fatigue, and cognitive fog in Edison, NJ.';
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
                    TMS for <span class="text-gold-light">Fibromyalgia</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Targeting the root cause of fibromyalgia—central sensitization in the brain—to reduce widespread pain, fatigue, and cognitive fog without systemic medications.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-10">
                    <a href="/contact.php" class="btn btn-primary shadow-lg shadow-gold/20">Schedule Consultation</a>
                    <a href="#conditions" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Explore Fibromyalgia Therapy</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="py-16 bg-beige-dark/50" id="stats">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bi-stats-row reveal">
                <div class="bi-stat"><div class="bi-stat-num">Non-OP</div><div class="bi-stat-label">Non-Opioid Therapy</div></div>
                <div class="bi-stat"><div class="bi-stat-num">M1</div><div class="bi-stat-label">Motor Cortex Target</div></div>
                <div class="bi-stat"><div class="bi-stat-num">Dual</div><div class="bi-stat-label">Pain &amp; Mood Relief</div></div>
                <div class="bi-stat"><div class="bi-stat-num">0</div><div class="bi-stat-label">Systemic Side Effects</div></div>
            </div>
        </div>
    </section>

    <!-- Condition Quick Nav -->
    <section class="pt-16 pb-4 bg-white" id="conditions">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Understanding Fibromyalgia</span>
                <h2 class="section-title">Rewiring the Brain's Pain Amplifier</h2>
                <p class="section-subtitle">Fibromyalgia is a disorder of central sensitization—the brain amplifies pain signals. TMS targets the Motor Cortex to activate descending pain inhibition and "turn down the volume" on chronic pain.</p>
            </div>
            <div class="bi-quicknav reveal" id="condition-tabs">
                <a href="#understanding" class="bi-tab-btn active" data-target="understanding">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                    The Sensitized Brain
                </a>
                <a href="#tms-approach" class="bi-tab-btn" data-target="tms-approach">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    How TMS Helps
                </a>
                <a href="#symptoms" class="bi-tab-btn" data-target="symptoms">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Symptoms Addressed
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 1: Understanding Fibromyalgia -->
    <div class="bi-condition bi-tab-pane active" id="understanding">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                    Section 01
                </span>
                <h2>Fibromyalgia: A Brain-Based Pain Disorder</h2>
                <p class="bi-condition-lead">Understanding why fibromyalgia is not "just pain"—it's the brain's pain processing system gone haywire.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
                <div>
                    <p>Fibromyalgia is now understood as a disorder of <strong>central sensitization</strong>—the brain and spinal cord amplify pain signals, transforming normal sensory input into widespread, chronic pain. Unlike injuries where pain has a clear peripheral source, fibromyalgia pain originates from dysregulated neural processing in the central nervous system itself.</p>
                    <p>This central amplification explains the hallmark features of fibromyalgia: widespread musculoskeletal pain, allodynia (pain from normally non-painful stimuli), severe fatigue, "fibro fog" (cognitive impairment), and disrupted sleep. Standard pain medications often fail because they target peripheral pain pathways rather than the central root cause.</p>
                    <div class="bi-callout">
                        <p>Neuroimaging studies confirm that fibromyalgia patients show hyperactivity in the brain's "pain matrix"—the thalamus, insula, and somatosensory cortex—even in response to minimal stimuli. TMS directly targets this central dysfunction.</p>
                    </div>
                </div>
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/fibromyalgia-pain.png" alt="Patient seeking relief from fibromyalgia pain">
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 2: How TMS Helps -->
    <div class="bi-condition bi-tab-pane" id="tms-approach">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    Section 02
                </span>
                <h2>How TMS Treats Fibromyalgia</h2>
                <p class="bi-condition-lead">Activating the brain's natural pain-suppression systems through targeted magnetic stimulation.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 0.8fr 1.2fr; align-items: center;">
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/fibromyalgia-tms.png" alt="TMS treatment for fibromyalgia central sensitization">
                </div>
                <div>
                    <p>TMS for fibromyalgia primarily targets the <strong>Primary Motor Cortex (M1)</strong>. High-frequency stimulation of M1 activates descending pain inhibitory pathways in the spinal cord—the body's built-in "pain brake system." In fibromyalgia, these inhibitory pathways are dysfunctional. TMS essentially restores their function, "dialing down" the amplified pain signals.</p>
                    <p>Additionally, we can simultaneously target the <strong>Dorsolateral Prefrontal Cortex (DLPFC)</strong> to address the comorbid depression, anxiety, and cognitive impairment that affect up to 80% of fibromyalgia patients. This dual-target approach treats the full syndrome—not just the pain—in a single course of therapy.</p>
                </div>
            </div>

            <div class="bi-how-grid reveal">
                <div class="bi-how-step">
                    <div class="bi-how-num">01</div>
                    <h4>Motor Threshold Calibration</h4>
                    <p>Precisely measuring your individual motor threshold to ensure stimulation intensity is optimized for pain relief without discomfort.</p>
                </div>
                <div class="bi-how-step">
                    <div class="bi-how-num">02</div>
                    <h4>M1 Pain Protocol</h4>
                    <p>High-frequency rTMS to the Motor Cortex stimulates descending inhibitory pathways, systematically reducing central sensitization.</p>
                </div>
                <div class="bi-how-step">
                    <div class="bi-how-num">03</div>
                    <h4>Cumulative Neuroplasticity</h4>
                    <p>Over multiple sessions, TMS induces lasting neuroplastic changes—the brain "relearns" normal pain processing, providing sustained relief.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 3: Symptoms Addressed -->
    <div class="bi-condition bi-tab-pane" id="symptoms">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Section 03
                </span>
                <h2>Fibromyalgia Symptoms TMS Can Address</h2>
                <p class="bi-condition-lead">Targeting the central nervous system dysfunction behind every major fibromyalgia symptom.</p>
            </div>

            <div class="bi-cards-grid reveal">
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                    <h4>Widespread Pain</h4>
                    <p>Reducing the hyperactivity of the central pain matrix to diminish the all-over body aches and tender points.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
                    <h4>Fibro Fog</h4>
                    <p>Enhancing prefrontal cortex function to improve concentration, memory, and the mental clarity that chronic pain erodes.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                    <h4>Chronic Fatigue</h4>
                    <p>Lifting the exhausting burden of constant pain processing, freeing energy for daily activities and improving overall vitality.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg></div>
                    <h4>Sleep Disturbances</h4>
                    <p>Improving sleep quality by reducing the cortical hyperarousal that prevents restorative deep sleep in fibromyalgia.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
                    <h4>Depression &amp; Anxiety</h4>
                    <p>Directly treating the comorbid mood disorders that share neural pathways with chronic pain, breaking the pain-depression cycle.</p>
                </div>
                <div class="bi-card">
                    <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg></div>
                    <h4>Allodynia</h4>
                    <p>Reducing the central sensitization that makes even light touch feel painful—restoring normal sensory perception.</p>
                </div>
            </div>

            <div class="reveal mt-12">
                <table class="bi-table">
                    <thead><tr><th>Feature</th><th>Standard Fibromyalgia Meds</th><th>TMS Therapy</th></tr></thead>
                    <tbody>
                        <tr><td>Mechanism</td><td>Duloxetine/Pregabalin: systemic neurotransmitter modulation.</td><td><strong>Directly activates descending pain inhibition from the Motor Cortex.</strong></td></tr>
                        <tr><td>Common Side Effects</td><td>Weight gain, sedation, nausea, sexual dysfunction.</td><td>None systemic. Mild scalp sensation during treatment.</td></tr>
                        <tr><td>Cognitive Impact</td><td>Often worsens "fibro fog" (Pregabalin causes cognitive dulling).</td><td><strong>Improves cognition</strong> via prefrontal stimulation.</td></tr>
                        <tr><td>Dependency Risk</td><td>Pregabalin has abuse potential; withdrawal symptoms common.</td><td>Zero dependency or withdrawal risk.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Our Approach -->
    <section class="py-12 bg-white" id="approach">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal mb-8">
                <span class="eyebrow">Holistic Fibromyalgia Strategy</span>
                <h2 class="section-title text-midnight font-serif font-bold">Treating Pain &amp; Mood Synergistically</h2>
                <p class="section-subtitle">Chronic pain and depression share the exact same neural pathways. We treat both simultaneously.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal delay-1">
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Dual-Target Protocols</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">We stimulate the Motor Cortex (M1) for direct pain relief, and the Prefrontal Cortex (DLPFC) to address the debilitating depression and anxiety that accompany fibromyalgia.</p>
                </div>
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Motor Threshold Precision</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">We find your exact "motor threshold"—the precise magnetic intensity needed to activate your neurons—ensuring the treatment is both effective and comfortable.</p>
                </div>
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Medication Reduction</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Our goal is to provide enough central relief that patients can safely taper down reliance on Pregabalin, Duloxetine, and opioid medications—reducing side effects and improving quality of life.</p>
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
                        <img src="/assets/images/dr-ritesh-hero.webp" alt="Dr. Ritesh Amin" class="w-full h-auto aspect-[4/5] object-cover rounded-2xl">
                    </div>
                </div>
                <div class="lg:w-7/12 reveal delay-1">
                    <span class="text-gold font-bold tracking-[2px] uppercase text-sm mb-4 block flex items-center gap-2">
                        <span class="w-8 h-[2px] bg-gold block"></span>
                        Specialist in Neuropsychiatry &amp; Pain
                    </span>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 text-white">Meet Dr. Ritesh Amin, MD</h2>
                    <h3 class="text-xl text-[#c1d9f8] mb-8 font-light border-b border-white/10 pb-6">Board Certified Psychiatrist &amp; TMS Specialist</h3>
                    <p class="text-lg text-white/80 leading-relaxed mb-6">
                        Dr. Amin recognizes that fibromyalgia is far more than "just pain"—it's a complex brain-based condition that robs patients of their energy, clarity, and joy. By utilizing evidence-based TMS protocols targeting both the Motor Cortex and Prefrontal Cortex, he offers a path to relief for patients who have been failed by conventional medications.
                    </p>
                    <a href="/dr-ritesh-amin.php" class="inline-flex items-center text-gold font-semibold hover:text-white transition-colors gap-2">
                        Read Full Biography <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include dirname(__DIR__) . '/_reviews-partial.php'; ?>

    <!-- CTA -->
    <section class="py-12 bg-white" id="get-evaluated">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bi-cta-card reveal">
                <div class="relative z-10">
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Break the Pain Cycle</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-3 leading-tight">Living with Fibromyalgia Pain?</h2>
                    <p class="text-white/60 text-sm leading-relaxed max-w-md mb-0">If medications haven't relieved your chronic pain and fatigue, it's time to explore cortical neuromodulation with Dr. Amin.</p>
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
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Reclaim Your Life</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Target Pain at its Source</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">Non-invasive. Non-opioid. Discover how TMS can rewire your brain's pain amplifier and restore your quality of life.</p>
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
    });
</script>

<?php include __DIR__ . '/../footer.php'; ?>
