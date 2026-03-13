import os

def generate_page(data):
    # CSS remains largely the same
    html = f"""<?php
$page_title = '{data["title"]}';
$page_desc = '{data["desc"]}';
$body_class = 'bg-beige font-sans';
$extra_css = '
    /* ══════════════════════════════════════════
       {data["css_title"]} PAGE
       ══════════════════════════════════════════ */

    /* ── Hero ── */
    .bihero {{
        position: relative;
        padding: 10rem 0 5rem;
        background: var(--color-midnight);
        overflow: hidden;
    }}
    .bihero::before {{
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px);
        background-size: 30px 30px;
        pointer-events: none;
    }}
    .bihero::after {{
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%);
    }}
    .bihero-orb-1 {{
        position: absolute; top: -30%; right: -8%;
        width: 550px; height: 550px;
        background: radial-gradient(circle, rgba(37,111,168,0.16) 0%, transparent 70%);
        border-radius: 50%; pointer-events: none;
    }}
    .bihero-orb-2 {{
        position: absolute; bottom: -35%; left: -6%;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(37,111,168,0.08) 0%, transparent 70%);
        border-radius: 50%; pointer-events: none;
    }}

    /* ── Quick-nav anchors ── */
    .bi-quicknav {{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        margin-bottom: 3rem;
    }}
    .bi-quicknav a {{
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.25rem;
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.82rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        color: var(--color-midnight-light);
        background: #fff;
        border: 1.5px solid #e2e8f0;
        text-decoration: none;
        transition: all 0.3s ease;
    }}
    .bi-quicknav a:hover,
    .bi-quicknav a.active {{
        background: var(--color-midnight);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(11,25,44,0.15);
        border-color: var(--color-midnight);
        cursor: default;
    }}
    .bi-quicknav a.active svg {{
        stroke: var(--color-gold);
    }}
    .bi-quicknav a.bi-tab-btn {{
        cursor: pointer;
    }}
    .bi-quicknav a svg {{
        width: 15px; height: 15px;
        stroke: var(--color-gold);
        transition: stroke 0.3s ease;
    }}

    /* ── Tab Layout CSS ── */
    .bi-tab-pane {{
        display: none !important;
        animation: fadeInTab 0.5s ease-out forwards;
    }}
    .bi-tab-pane.active {{
        display: block !important;
        opacity: 1;
        animation: bi-fade-in 0.4s ease forwards;
    }}
    @keyframes bi-fade-in {{
        from {{ opacity: 0; transform: translateY(10px); }}
        to {{ opacity: 1; transform: translateY(0); }}
    }}

    /* ── Testimonial Styles (Adapted from reviews.php) ── */
    .review-card {{
        background: #fff;
        border-radius: 1.25rem;
        padding: 2rem;
        border: 1px solid rgba(37,111,168,0.06);
        box-shadow: 0 4px 20px rgba(11,25,44,0.04);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }}
    .review-card:hover {{
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(11,25,44,0.08);
        border-color: rgba(37,111,168,0.15);
    }}
    .review-card::before {{
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent);
        opacity: 0;
        transition: opacity 0.35s ease;
    }}
    .review-card:hover::before {{ opacity: 1; }}
    .review-card.featured {{
        background: var(--color-midnight);
        border-color: rgba(37,111,168,0.25);
    }}
    .review-card.featured::before {{ opacity: 1; }}
    .review-card.featured .review-name {{ color: #fff; }}
    .review-card.featured .review-condition {{ color: rgba(255,255,255,0.45); }}
    .review-card.featured .review-text {{ color: rgba(255,255,255,0.70); }}
    .review-card.featured .review-stars {{ color: var(--color-gold-light); }}
    .review-card.featured .review-avatar {{
        background: rgba(37,111,168,0.25);
        border-color: rgba(37,111,168,0.4);
        color: var(--color-gold-light);
    }}
    .review-header {{ display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }}
    .review-avatar {{
        width: 46px; height: 46px; min-width: 46px; border-radius: 50%;
        background: rgba(37,111,168,0.08); border: 2px solid rgba(37,111,168,0.15);
        color: var(--color-gold); display: flex; align-items: center; justify-content: center;
        font-family: var(--font-serif); font-weight: 700; font-size: 1.15rem;
    }}
    .review-name {{ font-family: var(--font-serif); font-size: 1.15rem; color: var(--color-midnight); margin: 0 0 0.15rem; font-weight: 700; }}
    .review-condition {{ font-size: 0.8rem; color: rgba(11,25,44,0.6); display: block; font-weight: 500; }}
    .review-stars {{ color: var(--color-gold); font-size: 1.1rem; letter-spacing: 2px; margin-left: auto; }}
    .review-text {{ font-size: 0.95rem; color: #4b5563; line-height: 1.7; margin-bottom: 1.5rem; position: relative; z-index: 1; }}
    .review-quote-icon {{
        font-family: var(--font-serif); font-size: 3.5rem; color: rgba(37,111,168,0.08);
        position: absolute; top: -1.75rem; left: -0.5rem; z-index: -1; line-height: 1;
    }}
    .review-verified {{
        display: flex; align-items: center; gap: 0.35rem; font-size: 0.7rem; font-weight: 500; color: #22c55e;
    }}
    .review-verified svg {{ width: 14px; height: 14px; }}

    /* ── Condition Section ── */
    .bi-condition {{
        position: relative;
        padding: 2rem 0 3rem;
    }}
    .bi-condition-badge {{
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 1rem;
        background: rgba(37,111,168,0.06);
        border: 1px solid rgba(37,111,168,0.14);
        border-radius: 999px;
        font-family: var(--font-sans);
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--color-gold);
        margin-bottom: 1rem;
    }}
    .bi-condition-badge svg {{
        width: 14px; height: 14px;
    }}
    .bi-condition h2 {{
        font-family: var(--font-serif);
        font-size: 2.25rem;
        font-weight: 600;
        color: var(--color-midnight);
        margin-bottom: 1rem;
        line-height: 1.25;
    }}
    .bi-condition-lead {{
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--color-midnight-light);
        max-width: 650px;
        margin-bottom: 2rem;
    }}
    .bi-condition p {{
        font-size: 0.95rem;
        line-height: 1.8;
        color: var(--color-text-light);
        margin-bottom: 1rem;
    }}

    /* ── Stats Row ── */
    .bi-stats-row {{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        max-width: 1000px;
        margin: 0 auto;
    }}
    .bi-stat {{
        text-align: center;
        padding: 2rem 1rem;
        background: #fff;
        border: 1px solid rgba(37,111,168,0.08);
        border-radius: 1.25rem;
        transition: all 0.3s ease;
    }}
    .bi-stat:hover {{
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(11,25,44,0.05);
    }}
    .bi-stat-num {{
        font-family: var(--font-serif);
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--color-gold);
        line-height: 1;
        margin-bottom: 0.4rem;
    }}
    .bi-stat-label {{
        font-family: var(--font-sans);
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--color-text-light);
    }}

    /* ── Split layout ── */
    .bi-split {{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: start;
    }}

    /* ── Image Wrappers ── */
    .bi-image-wrapper {{
        position: relative;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(11,25,44,0.1);
    }}
    .bi-image-wrapper img {{
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.7s ease;
    }}
    .bi-image-wrapper:hover img {{
        transform: scale(1.05);
    }}

    /* ── CTA Card ── */
    .bi-cta-card {{
        background: var(--color-midnight);
        border-radius: 2rem;
        padding: 3.5rem;
        position: relative;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 3rem;
        align-items: center;
    }}

    @media (max-width: 991px) {{
        .bi-stats-row {{ grid-template-columns: repeat(2, 1fr); }}
        .bi-split {{ grid-template-columns: 1fr !important; gap: 2.5rem; }}
    }}
    @media (max-width: 640px) {{
        .bihero {{ padding: 8rem 0 3rem; }}
        .bi-stats-row {{ grid-template-columns: repeat(2, 1fr); gap: 0.75rem; }}
        .bi-stat {{ padding: 1.25rem 0.75rem; }}
        .bi-stat-num {{ font-size: 2rem; }}
        .bi-cta-card {{ grid-template-columns: 1fr; padding: 2rem; text-align: center; }}
        .bi-condition h2 {{ font-size: 1.75rem; }}
        .bi-image-wrapper {{ margin: 1rem 0; border-radius: 1rem; }}
    }}
';
include __DIR__ . '/../header.php';
?>

    <!-- Hero -->
    <section class="bihero" id="bi-hero">
        <div class="bihero-orb-1"></div>
        <div class="bihero-orb-2"></div>
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4">Neurology & Brain Stimulation</span>
                <h1 class="text-5xl lg:text-6xl font-serif text-white leading-tight mb-6">
                    {data["hero_title"]} <span class="text-gold-light">{data["hero_highlight"]}</span>
                </h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    {data["hero_desc"]}
                </p>
                <div class="flex flex-wrap justify-center gap-4 mt-10">
                    <a href="/contact.php" class="btn btn-primary shadow-lg shadow-gold/20">Schedule Consultation</a>
                    <a href="#conditions" class="btn btn-ghost !border-white/20 !text-white hover:!border-white hover:!bg-white hover:!text-midnight transition-all">Explore Conditions</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="py-16 bg-beige-dark/50" id="stats">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bi-stats-row reveal">"""

    for stat in data["stats"]:
        html += f"""
                <div class="bi-stat">
                    <div class="bi-stat-num">{stat["num"]}</div>
                    <div class="bi-stat-label">{stat["label"]}</div>
                </div>"""

    html += """
            </div>
        </div>
    </section>

    <!-- Condition Quick Nav -->
    <section class="pt-16 pb-4 bg-white" id="conditions">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="section-header center reveal">
                <span class="eyebrow">Conditions We Treat</span>
                <h2 class="section-title">Comprehensive Care</h2>
                <p class="section-subtitle">Dr. Amin uses specialized TMS protocols tailored to each condition, promoting neuroplasticity and recovery.</p>
            </div>
            <div class="bi-quicknav reveal" id="condition-tabs">"""

    for i, tab in enumerate(data["tabs"]):
        active = "active" if i == 0 else ""
        html += f"""
                <a href="#{tab["id"]}" class="bi-tab-btn {active}" data-target="{tab["id"]}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/></svg>
                    {tab["label"]}
                </a>"""

    html += """
            </div>
        </div>
    </section>"""

    for i, tab in enumerate(data["tabs"]):
        active = "active" if i == 0 else ""
        html += f"""
    <!-- SECTION {i+1}: {tab["label"]} -->
    <div class="bi-condition bi-tab-pane {active}" id="{tab["id"]}">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="reveal">
                <span class="bi-condition-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/></svg>
                    Section 0{i+1}
                </span>
                <h2>{tab["title"]}</h2>
                <p class="bi-condition-lead">{tab["lead"]}</p>
            </div>
            <div class="bi-split reveal" style="grid-template-columns: 1.2fr 0.8fr; align-items: center;">
                <div>
                    {tab["content"]}
                </div>
                <div class="bi-image-wrapper bg-midnight/5 h-64 flex items-center justify-center rounded-2xl">
                    <!-- Placeholder for image -->
                    <span class="text-midnight/30 font-medium">Image representation for {tab["label"]}</span>
                </div>
            </div>
        </div>
    </div>"""

    html += f"""
    <!-- Patient Stories Section -->
    <section class="py-20 bg-beige-dark/50" id="patient-stories">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="section-header center reveal mb-12">
                <span class="eyebrow">Patient Stories</span>
                <h2 class="section-title text-midnight font-serif font-bold">Real Recoveries</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal delay-1">
                <div class="review-card featured">
                    <div class="review-header">
                        <div class="review-avatar">A</div>
                        <div>
                            <h4 class="review-name">Patient A.</h4>
                            <span class="review-condition">{data["tabs"][0]["label"]}</span>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        TMS therapy with Dr. Amin changed everything. I have regained my functioning and feel so much better. The targeted approach really made a difference compared to traditional paths.
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-avatar">B</div>
                        <div>
                            <h4 class="review-name">Patient B.</h4>
                            <span class="review-condition">{data["hero_title"]} Patient</span>
                        </div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        <span class="review-quote-icon">"</span>
                        The results from this neuromodulation treatment were profound. I found relief when nothing else was working. Highly recommend this clinic.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta py-16 lg:py-20 bg-midnight relative overflow-hidden" id="take-action">
        <div class="container mx-auto px-4 max-w-4xl text-center reveal relative z-10">
            <span class="block text-sm font-semibold tracking-widest text-gold uppercase mb-3">Recovery Begins Here</span>
            <h2 class="text-4xl lg:text-5xl font-serif text-white mb-6">Reclaim Your Life</h2>
            <p class="text-xl text-white/70 mb-10 max-w-2xl mx-auto">Advanced TMS therapy can help you move past the plateau. Dr. Amin and our team are ready to guide your recovery.</p>
            <a href="/contact.php" class="btn btn-primary py-5 px-12 text-lg mt-2">Book Your Consultation Today</a>
        </div>
    </section>

<script>
    document.addEventListener('DOMContentLoaded', function() {{
        const tabs = document.querySelectorAll('.bi-tab-btn');
        const panes = document.querySelectorAll('.bi-tab-pane');

        tabs.forEach(tab => {{
            tab.addEventListener('click', function(e) {{
                e.preventDefault();
                tabs.forEach(t => t.classList.remove('active'));
                panes.forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                const targetId = this.getAttribute('data-target');
                const pane = document.getElementById(targetId);
                if (pane) pane.classList.add('active');
            }});
        }});
    }});
</script>

<?php include __DIR__ . '/../footer.php'; ?>
"""
    with open(f"d:/download/ritesh/neurology/{data['filename']}", 'w', encoding='utf-8') as f:
        f.write(html)

pages = [
    {
        "filename": "tms-for-movement-disorders.php",
        "title": "TMS for Movement Disorders | Dr. Ritesh Amin – Edison, NJ",
        "desc": "Advanced TMS therapy for Movement Disorders in Edison, NJ.",
        "css_title": "MOVEMENT DISORDERS",
        "hero_title": "TMS for Movement",
        "hero_highlight": "Disorders",
        "hero_desc": "Harnessing precision neuromodulation to restore motor control and reduce involuntary movements.",
        "stats": [
            {"num": "FDA", "label": "Cleared Technology"},
            {"num": "Safe", "label": "Non-Invasive"},
            {"num": "0", "label": "Systemic Side Effects"},
            {"num": "Fast", "label": "Outpatient Procedure"}
        ],
        "tabs": [
            {"id": "functional-movement", "label": "Functional Movement Disorder", "title": "TMS for Functional Movement Disorder", "lead": "Targeting the neural pathways to restore smooth motor control.", "content": "<p>Functional Movement Disorders (FMD) involve disruptions in how the brain sends and receives signals. TMS can help reset these connections.</p>"},
            {"id": "functional-tremor", "label": "Functional Tremor", "title": "TMS for Functional Tremor", "lead": "Reducing involuntary trembling through neuromodulation.", "content": "<p>Tremors can be debilitating. TMS targets the motor cortex to calm overactive circuits.</p>"},
            {"id": "functional-dystonia", "label": "Functional Dystonia", "title": "TMS for Functional Dystonia", "lead": "Restoring natural muscle tone.", "content": "<p>By modulating specific brain areas, TMS can alleviate the abnormal muscle contractions seen in dystonia.</p>"}
        ]
    },
    {
        "filename": "tms-for-stroke-recovery.php",
        "title": "TMS for Stroke Recovery | Dr. Ritesh Amin – Edison, NJ",
        "desc": "Advanced TMS therapy for Stroke Recovery in Edison, NJ.",
        "css_title": "STROKE RECOVERY",
        "hero_title": "TMS for Stroke",
        "hero_highlight": "Recovery",
        "hero_desc": "Accelerating post-stroke rehabilitation by engaging neuroplasticity and rebuilding brain networks.",
        "stats": [
            {"num": "FDA", "label": "Cleared Technology"},
            {"num": "Safe", "label": "Non-Invasive"},
            {"num": "0", "label": "Systemic Side Effects"},
            {"num": "Proven", "label": "For Motor Recovery"}
        ],
        "tabs": [
            {"id": "stroke", "label": "Stroke Recovery", "title": "TMS for Stroke Recovery", "lead": "Enhancing post-stroke healing.", "content": "<p>TMS can assist in recovering physical capabilities by stimulating the brain areas affected by the stroke.</p>"},
            {"id": "paralysis", "label": "Paralysis & Weakness", "title": "TMS for Motor Weakness", "lead": "Strengthening the body mind connection.", "content": "<p>TMS is utilized to encourage motor pathways to reactivate and strengthen.</p>"},
            {"id": "aphasia", "label": "Aphasia", "title": "TMS for Aphasia", "lead": "Recovering speech and language.", "content": "<p>Language centers in the brain can be stimulated using TMS to help restore communication skills.</p>"}
        ]
    },
    {
        "filename": "tms-for-parkinsons-symptoms.php",
        "title": "TMS for Parkinson's Symptoms | Dr. Ritesh Amin – Edison, NJ",
        "desc": "Advanced TMS therapy for Parkinson's Symptoms in Edison, NJ.",
        "css_title": "PARKINSONS SYMPTOMS",
        "hero_title": "TMS for Parkinson's",
        "hero_highlight": "Symptoms",
        "hero_desc": "Targeted brain stimulation to assist in managing the motor and non-motor symptoms of Parkinson's.",
        "stats": [
            {"num": "FDA", "label": "Cleared Technology"},
            {"num": "Safe", "label": "Non-Invasive"},
            {"num": "0", "label": "Systemic Side Effects"},
            {"num": "Adjunct", "label": "Complements Meds"}
        ],
        "tabs": [
            {"id": "parkinsons", "label": "Parkinson's Disease", "title": "TMS for Parkinson's Symptoms", "lead": "A complementary approach to PD management.", "content": "<p>TMS targets the motor cortex and other areas to alleviate rigidity, tremor, and bradykinesia.</p>"},
            {"id": "non-motor", "label": "Non-Motor Symptoms", "title": "Addressing Mood in PD", "lead": "Treating the depression often associated with Parkinson's.", "content": "<p>TMS is highly effective in treating depression, which is a common and challenging non-motor symptom of Parkinson's disease.</p>"}
        ]
    },
    {
        "filename": "tms-for-alzheimers-dementia.php",
        "title": "TMS for Alzheimer's & Dementia | Dr. Ritesh Amin – Edison, NJ",
        "desc": "Advanced TMS therapy for Alzheimer's & Dementia in Edison, NJ.",
        "css_title": "ALZHEIMERS DEMENTIA",
        "hero_title": "TMS for Alzheimer's",
        "hero_highlight": "& Dementia",
        "hero_desc": "Exploring new frontiers in neuromodulation to support cognitive health and memory retention.",
        "stats": [
            {"num": "FDA", "label": "Cleared Technology"},
            {"num": "Safe", "label": "Non-Invasive"},
            {"num": "0", "label": "Systemic Side Effects"},
            {"num": "Focus", "label": "Cognitive Support"}
        ],
        "tabs": [
            {"id": "alzheimers", "label": "Alzheimer's Disease", "title": "TMS for Alzheimer's", "lead": "Supporting neural networks involved in memory.", "content": "<p>Emerging research shows TMS can help stimulate the networks impacted early in Alzheimer's disease.</p>"},
            {"id": "mci", "label": "Mild Cognitive Impairment", "title": "TMS for MCI", "lead": "Early intervention for cognitive decline.", "content": "<p>Targeting MCI with TMS can potentially slow down progression and improve daily functioning.</p>"},
            {"id": "dementia", "label": "Dementia", "title": "TMS for Dementia Care", "lead": "Improving quality of life.", "content": "<p>TMS can assist with mood stabilization and potential cognitive preservation in dementia patients.</p>"}
        ]
    },
    {
        "filename": "tms-for-migraine.php",
        "title": "TMS for Chronic Migraine | Dr. Ritesh Amin – Edison, NJ",
        "desc": "Advanced TMS therapy for Chronic Migraine in Edison, NJ.",
        "css_title": "CHRONIC MIGRAINE",
        "hero_title": "TMS for Chronic",
        "hero_highlight": "Migraine",
        "hero_desc": "Using magnetic stimulation to calm hyperactive pain networks and prevent chronic headaches.",
        "stats": [
            {"num": "FDA", "label": "Cleared Technology"},
            {"num": "Safe", "label": "Non-Invasive"},
            {"num": "0", "label": "Systemic Side Effects"},
            {"num": "Relief", "label": "Long-lasting"}
        ],
        "tabs": [
            {"id": "chronic-migraine", "label": "Chronic Migraine", "title": "TMS for Chronic Migraine", "lead": "Preventing the onset of severe migraines.", "content": "<p>TMS disrupts the cortical spreading depression that leads to migraine attacks.</p>"},
            {"id": "chronic-headache", "label": "Chronic Headache", "title": "TMS for Chronic Headaches", "lead": "Relief from daily head pain.", "content": "<p>Frequent headaches can be alleviated by resetting the pain signaling pathways in the brain.</p>"}
        ]
    },
    {
        "filename": "tms-for-neuropathic-pain.php",
        "title": "TMS for Neuropathic Pain | Dr. Ritesh Amin – Edison, NJ",
        "desc": "Advanced TMS therapy for Neuropathic Pain in Edison, NJ.",
        "css_title": "NEUROPATHIC PAIN",
        "hero_title": "TMS for Neuropathic",
        "hero_highlight": "Pain",
        "hero_desc": "Changing how the brain perceives pain signals to bring relief to chronic neuropathic conditions.",
        "stats": [
            {"num": "FDA", "label": "Cleared Technology"},
            {"num": "Safe", "label": "Non-Invasive"},
            {"num": "0", "label": "Systemic Side Effects"},
            {"num": "Target", "label": "Pain Receptors"}
        ],
        "tabs": [
            {"id": "neuropathic-pain", "label": "Neuropathic Pain", "title": "TMS for Nerve Pain", "lead": "Centralized relief for nerve damage.", "content": "<p>Neuropathic pain originates in the nerves but is processed in the brain. TMS alters this processing.</p>"},
            {"id": "crps", "label": "CRPS", "title": "TMS for CRPS", "lead": "Addressing Complex Regional Pain Syndrome.", "content": "<p>CRPS features debilitating localized pain. TMS targets the specific sensory cortex regions representing the affected limb.</p>"},
            {"id": "trigeminal", "label": "Trigeminal Neuralgia", "title": "TMS for Trigeminal Neuralgia", "lead": "Calming intense facial nerve pain.", "content": "<p>This severe facial pain condition can be mitigated through targeted motor cortex stimulation.</p>"}
        ]
    }
]

for p in pages:
    generate_page(p)
