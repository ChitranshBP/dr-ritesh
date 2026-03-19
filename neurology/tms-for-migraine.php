<?php
$page_title = 'TMS Therapy for Chronic Migraines | Dr. Ritesh Amin – Edison, NJ';
$page_desc  = 'FDA-cleared TMS therapy for chronic migraines in Edison, NJ. A preventative, non-medication approach to reduce the frequency and severity of migraine attacks.';
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
                    TMS for Chronic <span class="text-gold-light">Migraines</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Break the cycle of chronic pain with FDA-cleared neuromodulation. A preventative, non-medication approach designed to significantly reduce the frequency and severity of migraine attacks.
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-10">
                    <a href="/contact.php" class="btn btn-primary shadow-lg shadow-gold/20">Schedule Consultation</a>
                    <a href="#conditions" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Explore Treatment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="py-16 bg-beige-dark/50" id="stats">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bi-stats-row reveal">
                <div class="bi-stat"><div class="bi-stat-num">FDA</div><div class="bi-stat-label">Cleared for Migraine</div></div>
                <div class="bi-stat"><div class="bi-stat-num">Non-Med</div><div class="bi-stat-label">Drug-Free Prevention</div></div>
                <div class="bi-stat"><div class="bi-stat-num">Quick</div><div class="bi-stat-label">Fast Outpatient Sessions</div></div>
                <div class="bi-stat"><div class="bi-stat-num">0</div><div class="bi-stat-label">Systemic Side Effects</div></div>
            </div>
        </div>
    </section>

    <!-- Condition Quick Nav -->
    <section class="pt-16 pb-4 bg-white" id="conditions">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">The Migraine Spectrum</span>
                <h2 class="section-title">Re-calibrating the Pain Network</h2>
                <p class="section-subtitle">Migraines are driven by cortical spreading depression and hyper-excitable pain pathways. TMS targets these exact mechanisms to stop pain before it escalates.</p>
            </div>
            <div class="bi-quicknav reveal" id="condition-tabs">
                <a href="#preventative" class="bi-tab-btn active" data-target="preventative">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Preventative Therapy
                </a>
                <a href="#acute" class="bi-tab-btn" data-target="acute">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    Acute Attack Rescue
                </a>
                <a href="#comorbid" class="bi-tab-btn" data-target="comorbid">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                    Migraine + Mood
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 1: Preventative -->
    <div class="bi-condition bi-tab-pane active" id="preventative">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Section 01
                </span>
                <h2>Preventative TMS for Chronic Migraine</h2>
                <p class="bi-condition-lead">Raising the threshold for an attack by stabilizing hyper-reactive cortical networks over time.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
                <div>
                    <p>For individuals suffering from 15 or more headache days a month (Chronic Migraine), daily oral preventatives often come with intolerable side effects like weight gain, cognitive fog, or fatigue. TMS offers an effective, non-chemical alternative.</p>
                    <p>Research suggests that migraine brains are "hyper-excitable." TMS works preventatively by delivering repetitive, inhibitory magnetic pulses over a series of sessions. This gently "damps down" the overactive cortex, altering the pain-processing pathways and making the brain less susceptible to the triggers that initiate a migraine.</p>
                    <div class="bi-callout">
                        <p>A course of preventative TMS can significantly reduce the total number of monthly migraine days, allowing patients to rely less on acute rescue medications (abortives).</p>
                    </div>
                </div>
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/migraine-preventative.png" alt="Brain visualization showing cortical inhibition via TMS">
                </div>
            </div>

            <div class="reveal mt-12">
                <h3>Benefits of Preventative Protocol:</h3>
                <div class="bi-cards-grid">
                    <div class="bi-card">
                        <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                        <h4>Frequency Reduction</h4>
                        <p>Decreasing the total number of migraine attacks experienced per month through sustained cortical stabilization.</p>
                    </div>
                    <div class="bi-card">
                        <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
                        <h4>Intensity Relief</h4>
                        <p>When attacks do occur, patients often report that they are less severe and resolve quicker than before treatment.</p>
                    </div>
                    <div class="bi-card">
                        <div class="bi-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
                        <h4>Medication Overuse</h4>
                        <p>Helps break the vicious cycle of "rebound headaches" caused by frequent use of triptans or painkillers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 2: Acute Attack -->
    <div class="bi-condition bi-tab-pane" id="acute">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    Section 02
                </span>
                <h2>TMS for Acute Migraine Rescue</h2>
                <p class="bi-condition-lead">Interrupting cortical spreading depression in real-time to abort an incoming attack.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 0.8fr 1.2fr; align-items: center;">
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/migraine-acute.png" alt="Patient using a localized TMS device on the back of the head">
                </div>
                <div>
                    <p>Migraines often begin with an "aura" — sensory disturbances caused by a wave of abnormal electrical activity sweeping across the surface of the brain, known as <strong>Cortical Spreading Depression (CSD)</strong>.</p>
                    <p>Single-Pulse TMS (sTMS) devices are FDA-cleared specifically for the acute treatment of migraine with aura. By applying a very brief, strong magnetic pulse to the back of the head (the occipital cortex) at the first sign of a migraine, TMS can disrupt the CSD wave. This effectively "short-circuits" the migraine process before the pain phase can fully develop, acting as an electronic abortive medication.</p>
                </div>
            </div>

            <div class="bi-how-grid reveal">
                <div class="bi-how-step">
                    <div class="bi-how-num">01</div>
                    <h4>Early Intervention</h4>
                    <p>Treatment is most effective when administered during the sensory aura phase or at the very onset of pain.</p>
                </div>
                <div class="bi-how-step">
                    <div class="bi-how-num">02</div>
                    <h4>Targeting the Cortex</h4>
                    <p>Pulses are usually applied to the occipital lobe at the back of the head to intercept spreading depression.</p>
                </div>
                <div class="bi-how-step">
                    <div class="bi-how-num">03</div>
                    <h4>Rapid Relief</h4>
                    <p>Many patients experience significant pain freedom within hours, without the "hangover" effect of rescue meds.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 3: Comorbidities -->
    <div class="bi-condition bi-tab-pane" id="comorbid">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                    Section 03
                </span>
                <h2>Addressing Migraine &amp; Mood Disorders</h2>
                <p class="bi-condition-lead">Treating the intertwined networks of chronic pain, depression, and anxiety.</p>
            </div>

            <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
                <div>
                    <p>There is a powerful, bidirectional link between chronic migraine and mood disorders. Living with unpredictable, severe pain frequently leads to clinical depression and anxiety. Furthermore, anxiety itself is a potent trigger for tension and migraine headaches, creating an exhausting cycle.</p>
                    <p>Dr. Amin's dual expertise in psychiatry and neuromodulation allows for a holistic approach. By targeting specific areas like the Dorsolateral Prefrontal Cortex (DLPFC), TMS can simultaneously regulate mood circuits while also impacting downstream pain perception networks. This allows us to lift the burden of depression while concurrently raising the migraine threshold.</p>
                </div>
                <div class="bi-image-wrapper">
                    <img src="/assets/neurology-tms/migraine-mood.png" alt="Happy patient enjoying life free from debilitating migraines">
                </div>
            </div>

            <div class="reveal mt-12">
                <table class="bi-table">
                    <thead><tr><th>Condition</th><th>Holistic TMS Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Chronic Pain Cycle</td><td>Reduces the central sensitization that causes the brain to "memorize" and amplify pain signals over time.</td></tr>
                        <tr><td>Depression (Comorbid)</td><td>Activates under-functioning mood centers, improving overall resilience to manage chronic conditions.</td></tr>
                        <tr><td>Anxiety Triggers</td><td>Calms the hyper-reactive "fight or flight" response that often precipitates stress-induced migraines.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Our Approach -->
    <section class="py-12 bg-white" id="approach">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal mb-8">
                <span class="eyebrow">The Treatment Pathway</span>
                <h2 class="section-title text-midnight font-serif font-bold">A Better Answer for Migraine</h2>
                <p class="section-subtitle">We build protocols that minimize side effects and maximize your pain-free days.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal delay-1">
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Escaping the Med Cycle</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">TMS offers a path out of the frustrating cycle of trying endless prophylactic drugs, dealing with side effects, or suffering from medication overuse headaches.</p>
                </div>
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Targeted Precision</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Unlike Botox which targets local muscles, or pills that affect the whole body, TMS acts directly on the central nervous system networks where migraines originate.</p>
                </div>
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-3xl hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-gold/10 rounded-2xl flex items-center justify-center text-gold mb-5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-midnight mb-3 font-serif">Outpatient Convenience</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Treatment sessions are conducted comfortably in our office. There is no downtime, no anesthesia, and you can drive yourself to and from appointments.</p>
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
                        Specialized Neuromodulation
                    </span>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 text-white">Meet Dr. Ritesh Amin, MD</h2>
                    <h3 class="text-xl text-[#c1d9f8] mb-8 font-light border-b border-white/10 pb-6">Board Certified Psychiatrist &amp; TMS Specialist</h3>
                    <p class="text-lg text-white/80 leading-relaxed mb-6">
                        Dr. Amin is dedicated to offering alternative solutions to patients who have failed standard treatment options. Recognizing that chronic migraine is profoundly debilitating, he leverages TMS technology to directly alter pain processing and cortical excitability, striving to give patients their lives back.
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
                <h2 class="section-title text-midnight font-serif font-bold">Migraine TMS FAQs</h2>
            </div>
            <div class="bi-faq-accordion reveal delay-1 space-y-3">
                <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                    <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                        <h3 class="text-lg font-bold text-midnight font-serif">Is TMS covered by insurance for migraines?</h3>
                        <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            While TMS is FDA-cleared for the treatment of migraine with aura, insurance coverage varies significantly depending on the provider and your specific policy. In many cases, it may be considered an "out-of-pocket" expense, unlike TMS for depression which is widely covered. Our office will help determine your coverage options during your consultation.
                        </div>
                    </div>
                </div>
                <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                    <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                        <h3 class="text-lg font-bold text-midnight font-serif">How does it compare to Botox for migraines?</h3>
                        <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Botox involves multiple needle injections into the head and neck muscles every 12 weeks to block pain signals from the muscles to the brain. TMS is entirely non-invasive (no needles) and uses magnetic pulses to directly modulate the electrical activity of the brain itself. Patients who dislike needles or have not had success with Botox often prefer TMS.
                        </div>
                    </div>
                </div>
                <div class="bi-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-gold/50 transition-colors">
                    <button class="bi-faq-header w-full flex items-center justify-between p-6 text-left cursor-pointer focus:outline-none">
                        <h3 class="text-lg font-bold text-midnight font-serif">Will it cure my migraines permanently?</h3>
                        <span class="bi-faq-icon text-gold ml-4 shrink-0 transition-transform duration-300">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="bi-faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out opacity-0">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Migraine is a chronic neurological condition without a definitive "cure." However, a course of preventative TMS can drastically reduce the severity and frequency of your attacks for months at a time. Many patients describe the results as life-changing, allowing them to return to work and social activities. Periodic maintenance sessions may be needed.
                        </div>
                    </div>
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
                    <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold-light mb-3">Tired of Medications?</span>
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-3 leading-tight">See If TMS is Right for Your Migraines</h2>
                    <p class="text-white/60 text-sm leading-relaxed max-w-md mb-0">If you are suffering from frequent attacks and want a non-chemical alternative to break the cycle, schedule an evaluation with Dr. Amin today.</p>
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
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Stop the Pain Cycle</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Reclaim Your Days From Migraines</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">Advanced magnetic stimulation can raise your migraine threshold safely and effectively.</p>
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
