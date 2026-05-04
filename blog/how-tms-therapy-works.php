<?php
/**
 * Sample Blog Post — How TMS Therapy Works
 * (Copy blog-post-template.php to create new posts)
 */

$title      = 'Understanding TMS Therapy: How Transcranial Magnetic Stimulation Works';
$category   = 'TMS Therapy';
$date       = '2026-04-15';
$author     = 'Dr. Ritesh Amin, MD';
$hero_image = 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?auto=format&fit=crop&w=1400&q=80';
$excerpt    = 'A deep dive into the science behind TMS — how magnetic pulses target specific areas of the brain, what to expect during a session, and why it is effective for treatment-resistant depression.';
$read_time  = 7;

$content = '
<h2 id="what-is-tms">What Is Transcranial Magnetic Stimulation?</h2>
<p>
    Transcranial Magnetic Stimulation (TMS) is a non-invasive, FDA-approved procedure that uses precisely targeted magnetic fields to stimulate nerve cells in specific areas of the brain associated with mood regulation — most commonly the left dorsolateral prefrontal cortex (DLPFC). Unlike electroconvulsive therapy (ECT), TMS does not require anesthesia, sedation, or memory disruption, and it produces none of the systemic side effects associated with antidepressant medications.
</p>
<p>
    The treatment was first approved by the FDA in 2008 for adults with treatment-resistant major depressive disorder (MDD) who have not responded to at least one antidepressant medication. Since then, TMS has accumulated a robust evidence base and expanded to cover anxiety, OCD, PTSD, and several neurological conditions.
</p>

<h2 id="how-it-works">How TMS Works: The Science</h2>
<p>
    The TMS device — often called a coil — delivers brief magnetic pulses through a coil placed against the scalp. Because the magnetic field passes unimpeded through the skull and scalp, it reaches the brain without surgery or implants.
</p>
<p>
    These pulses generate small electrical currents in the underlying cortical neurons, causing them to fire. Repeated stimulation at a specific frequency — typically 10 pulses per second (10 Hz) for depression — increases the activity of targeted neural circuits. Over a full course of treatment, this leads to measurable changes in brain network connectivity and neurotransmitter regulation.
</p>
<blockquote>
    <p>"TMS does not work by sedating or numbing the brain. It works by gently re-activating the neural circuits that depression has quieted."</p>
</blockquote>

<h2 id="candidates">Who Is a Candidate for TMS?</h2>
<p>
    TMS is primarily indicated for adults with <strong>treatment-resistant depression</strong> — meaning they have tried at least one antidepressant at an adequate dose and duration without sufficient relief. It is also considered for patients who cannot tolerate medication side effects or who have specific contraindications to pharmaceutical treatments.
</p>
<h3 id="conditions-treated">Conditions Commonly Treated with TMS</h3>
<ul>
    <li>Major Depressive Disorder (MDD), treatment-resistant</li>
    <li>Anxiety disorders including Generalized Anxiety Disorder (GAD)</li>
    <li>Obsessive-Compulsive Disorder (OCD) — FDA-cleared deep TMS</li>
    <li>Post-Traumatic Stress Disorder (PTSD)</li>
    <li>Bipolar depression (depressive phase only)</li>
    <li>Adult ADHD (executive function enhancement)</li>
    <li>Chronic migraine (FDA-cleared single-pulse TMS)</li>
    <li>Stroke recovery and neuropathic pain</li>
</ul>

<h2 id="session">What a TMS Session Looks Like</h2>
<p>
    Each TMS session lasts approximately <strong>20–40 minutes</strong>, during which the patient sits comfortably in a reclined chair — fully awake and alert. There is no downtime: patients can drive themselves to and from appointments and return to normal activities immediately.
</p>
<h3 id="mapping">The Mapping Process (First Session Only)</h3>
<p>
    Before the first treatment, your clinician performs a <em>mapping</em> procedure to identify the precise coil position that most effectively activates your left DLPFC. This involves applying brief pulses while measuring the motor evoked potential (MEP) from your hand — specifically, the thumb twitch threshold. Once mapped, the coil position is recorded and used for all subsequent sessions.
</p>
<h3 id="during-treatment">During Treatment</h3>
<p>
    You will feel a tapping sensation against the scalp — a mild rhythmic tapping as the coil delivers pulses. Most patients describe this as uncomfortable rather than painful. The intensity is calibrated to your individual threshold, and your clinician adjusts it as needed throughout the course. You can pause treatment at any time by raising your hand.
</p>

<h2 id="treatment-course">Typical Treatment Course</h2>
<p>
    A standard TMS course involves <strong>5 sessions per week</strong> for 4–6 weeks — a total of 20–30 sessions. Some patients begin noticing improvement within the first two weeks; others require the full course before experiencing meaningful benefit. Acute response rates for treatment-resistant depression hover around 50–60%, and remission rates are approximately 30–35%.
</p>
<p>
    Patients who respond well to TMS may continue with tapered maintenance sessions over several months, though many sustain their improvement long after treatment ends. If symptoms return, TMS can be safely repeated — there is no lifetime ceiling on the number of treatment courses.
</p>

<h2 id="safety">Side Effects and Safety</h2>
<p>
    TMS is generally well tolerated. The most common side effect is <strong>mild scalp discomfort or headache</strong> during or shortly after sessions — both of which typically resolve on their own. These are local, transient effects. TMS does not cause the cognitive fog, sedation, sexual dysfunction, or weight gain associated with many antidepressant medications.
</p>
<p>
    The primary safety contraindication is the presence of ferromagnetic implants in or near the head (e.g., aneurysm coils, deep brain stimulators, cochlear implants, or bullet fragments). Patients with these conditions should discuss alternative options with their clinician. Seizure risk with TMS is extremely low — approximately 0.003% per session — and is associated with specific risk factors that are screened for during the initial evaluation.
</p>

<h2 id="insurance">Insurance and Cost</h2>
<p>
    Most major insurance plans — including Medicare and Medicaid — cover TMS therapy for treatment-resistant major depressive disorder when the clinical criteria are met. Our team handles prior authorization and works directly with insurers to maximize coverage. For patients without insurance or with plans that do not cover TMS, we offer transparent self-pay rates and can discuss financing options.
</p>

<h2 id="next-steps">Is TMS Right for You?</h2>
<p>
    If you have tried one or more antidepressants without adequate relief, or if the side effects have made medication impractical, TMS deserves serious consideration. It is one of the most scientifically validated non-pharmacological treatments in psychiatry — with decades of research, FDA clearances, and a safety record that spans millions of treatment sessions worldwide.
</p>
<p>
    <a href="/contact">Schedule a consultation</a> with Dr. Ritesh Amin to learn whether TMS is appropriate for your clinical situation. We will review your history, explain the options, and build a personalized treatment plan around your goals.
</p>
';

$date_fmt   = date('F j, Y', strtotime($date));
$page_title = "$title | Dr. Ritesh Amin, MD — Blog";
$page_desc  = $excerpt;
$body_class = 'bg-beige-dark';
$extra_css  = '
    body { overflow-x: hidden; }

    /* ── Reading progress bar ── */
    .post-progress { position:fixed;top:0;left:0;height:3px;z-index:9999;background:linear-gradient(90deg,var(--color-gold),var(--color-gold-light));width:0%; }

    /* ── TOC sidebar (2-col grid: sidebar | content) ── */
    .post-layout { display:grid;grid-template-columns:220px 1fr;gap:3rem;align-items:start;max-width:1100px;margin:0 auto; }
    @media (max-width:1099px) { .post-layout { grid-template-columns:1fr; } }

    /* Desktop TOC — sticky within its grid column */
    .post-toc-sidebar { position:sticky;top:5rem;max-height:calc(100vh - 6rem);overflow-y:auto;scrollbar-width:none; }
    .post-toc-sidebar::-webkit-scrollbar { display:none; }
    @media (max-width:1099px) { .post-toc-sidebar { display:none; } }

    /* Mobile TOC accordion */
    .post-toc-mobile { display:none; }
    @media (max-width:1099px) { .post-toc-mobile { display:block; } }

    .post-toc-label { font-size:.62rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--color-gold);margin-bottom:.75rem;padding-bottom:.6rem;border-bottom:1px solid rgba(37,111,168,.18); }
    .post-toc-list  { list-style:none;padding:0;margin:0; }
    .post-toc-link  { display:flex;align-items:center;gap:.5rem;padding:.4rem .5rem;border-radius:6px;font-size:.8rem;font-weight:400;color:var(--color-text-light);text-decoration:none;transition:all .2s ease;line-height:1.4; }
    .post-toc-link:hover  { background:rgba(37,111,168,.07);color:var(--color-gold); }
    .post-toc-link.active { background:rgba(37,111,168,.1);color:var(--color-gold);font-weight:600; }
    .post-toc-dot   { width:5px;height:5px;border-radius:50%;background:rgba(37,111,168,.35);flex-shrink:0; }
    .post-toc-link.active .post-toc-dot { background:var(--color-gold); }

    /* Mobile drawer */
    .post-toc-drawer      { background:var(--color-white);border:1px solid rgba(11,25,44,.08);border-radius:14px;padding:1.1rem;margin-bottom:1.5rem; }
    .post-toc-toggle     { display:flex;align-items:center;justify-content:space-between;width:100%;background:rgba(37,111,168,.07);border:1px solid rgba(37,111,168,.2);border-radius:10px;padding:.7rem 1rem;font-size:.82rem;font-weight:600;color:var(--color-gold);cursor:pointer;transition:all .2s; }
    .post-toc-toggle:hover { background:rgba(37,111,168,.12); }
    .post-toc-toggle svg  { transition:transform .25s ease; }
    .post-toc-toggle.open svg { transform:rotate(180deg); }
    .post-toc-drawer-links { list-style:none;padding:0;margin:.6rem 0 0;max-height:0;overflow:hidden;transition:max-height .3s ease; }
    .post-toc-drawer-links.open { max-height:600px; }
    .post-toc-drawer-links a { display:block;padding:.42rem .75rem;border-radius:6px;font-size:.82rem;color:var(--color-text-light);text-decoration:none;transition:background .2s; }
    .post-toc-drawer-links a:hover,
    .post-toc-drawer-links a.active { background:rgba(37,111,168,.08);color:var(--color-gold); }

    /* ── Content ── */
    .post-content-wrap { max-width:720px; }

    /* ── Read time pill ── */
    .post-read-pill { display:inline-flex;align-items:center;gap:.35rem;background:rgba(37,111,168,.1);border:1px solid rgba(37,111,168,.2);color:var(--color-gold);font-size:.7rem;font-weight:600;letter-spacing:.08em;padding:.3rem .75rem;border-radius:100px; }

    /* ── Body content typography ── */
    .post-body h2 { font-family:var(--font-serif);font-size:clamp(1.4rem,1.6vw+0.4rem,1.9rem);font-weight:700;color:var(--color-midnight);margin:2.5rem 0 .9rem;line-height:1.2;scroll-margin-top:5.5rem; }
    .post-body h3 { font-family:var(--font-serif);font-size:clamp(1.05rem,1.1vw+0.4rem,1.25rem);font-weight:600;color:var(--color-midnight);margin:1.75rem 0 .65rem; }
    .post-body p  { font-size:clamp(.92rem,.7vw+0.65rem,1.03rem);line-height:1.85;color:var(--color-text);margin-bottom:1.3rem; }
    .post-body ul,.post-body ol { padding-left:1.5rem;margin-bottom:1.3rem; }
    .post-body li { font-size:clamp(.92rem,.7vw+0.65rem,1.03rem);line-height:1.72;color:var(--color-text);margin-bottom:.5rem; }
    .post-body strong { font-weight:600;color:var(--color-midnight); }
    .post-body blockquote { border-left:3px solid var(--color-gold);padding:1rem 1.5rem;margin:1.75rem 0;background:rgba(37,111,168,.04);border-radius:0 10px 10px 0; }
    .post-body blockquote p { font-family:var(--font-serif);font-size:clamp(1rem,.85vw+0.4rem,1.12rem);font-style:italic;color:var(--color-midnight);margin:0; }
    .post-body a { color:var(--color-gold);text-decoration:underline;text-underline-offset:3px; }
    .post-body a:hover { color:var(--color-gold-light); }

    /* ── Misc UI ── */
    .post-share      { background:var(--color-white);border:1px solid rgba(11,25,44,.08); }
    .post-author-card{ background:var(--color-white);border-top:3px solid var(--color-gold); }
    .post-rule       { width:48px;height:2px;background:linear-gradient(90deg,var(--color-gold),var(--color-gold-light),transparent);border-radius:1px; }
    .post-category-chip { background:rgba(37,111,168,.1);color:var(--color-gold);border:1px solid rgba(37,111,168,.2); }
    .post-hero       { background:var(--color-midnight);padding-top:5.5rem; }
    .post-hero-img   { height:440px;border-radius:16px;overflow:hidden; }
    .post-hero-img img { width:100%;height:100%;object-fit:cover;object-position:center 30%; }
    .post-hero-title  { text-shadow:0 2px 20px rgba(0,0,0,.35); }
    .post-hero-excerpt { max-width:640px; }
    @media (max-width:768px) { .post-hero-geo-1,.post-hero-geo-2,.post-hero-geo-3,.post-hero-geo-4 { display:none; } }

    /* FAQ accordion */
    .post-faq-list { max-width:720px; }
    .post-faq-item { background:var(--color-white);border:1px solid rgba(11,25,44,.08);border-radius:12px;overflow:hidden;margin-bottom:.6rem; }
    .post-faq-trigger { display:flex;align-items:center;justify-content:space-between;width:100%;padding:1.1rem 1.25rem;background:none;border:none;cursor:pointer;text-align:left;gap:1rem; }
    .post-faq-question { font-size:.9rem;font-weight:600;line-height:1.4;font-family:var(--font-sans);color:var(--color-midnight); }
    .post-faq-icon { color:var(--color-gold);flex-shrink:0;transition:transform .3s ease; }
    .post-faq-body { max-height:0;overflow:hidden;transition:max-height .35s ease; }
    .post-faq-answer { padding:.25rem 1.25rem 1.1rem;border-top:1px solid rgba(11,25,44,.06); }
    .post-faq-answer p { font-size:.875rem;line-height:1.75;color:var(--color-text-light);margin:0; }

    /* Desktop TOC — sticky within its grid column */
    .post-toc-sidebar { position:sticky;top:5.5rem;max-height:calc(100vh - 7rem);overflow-y:auto;scrollbar-width:none; }
    .post-toc-sidebar::-webkit-scrollbar { display:none; }
    @media (max-width:1099px) { .post-toc-sidebar { display:none; } }

    /* Blog post body section — clears fixed navbar */
    .post-body-section { padding-top:5.5rem; }

    /* Body content typography */
    .post-body h2 { font-family:var(--font-serif);font-size:clamp(1.4rem,1.6vw+0.4rem,1.9rem);font-weight:700;color:var(--color-midnight);margin:2.5rem 0 .9rem;line-height:1.2;scroll-margin-top:6rem; }
';

include dirname(__DIR__) . '/header.php';
?>

<div class="post-progress" id="postProgress" style="width:0%"></div>

<section class="post-hero" style="position:relative;overflow:hidden;min-height:580px;display:flex;align-items:center;">
    <?php if ($hero_image) : ?>
    <div class="post-hero-bg" style="position:absolute;inset:0;z-index:0;">
        <img src="<?= htmlspecialchars($hero_image) ?>" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center 30%;" />
        <div style="position:absolute;inset:0;background:linear-gradient(175deg,rgba(11,25,44,.82) 0%,rgba(11,25,44,.70) 50%,rgba(11,25,44,.90) 100%);"></div>
    </div>
    <?php else : ?>
    <div class="post-hero-bg" style="position:absolute;inset:0;z-index:0;background:linear-gradient(135deg,var(--color-midnight) 0%,rgba(11,25,44,.9) 100%);"></div>
    <?php endif; ?>

    <div class="post-hero-geo post-hero-geo-1" style="position:absolute;top:-60px;right:-60px;width:280px;height:280px;border-radius:50%;border:1px solid rgba(37,111,168,.12);z-index:1;pointer-events:none;"></div>
    <div class="post-hero-geo post-hero-geo-2" style="position:absolute;bottom:-40px;left:-40px;width:180px;height:180px;border-radius:50%;border:1px solid rgba(37,111,168,.10);z-index:1;pointer-events:none;"></div>
    <div class="post-hero-geo post-hero-geo-3" style="position:absolute;top:40%;right:8%;width:6px;height:6px;border-radius:50%;background:rgba(37,111,168,.35);z-index:1;pointer-events:none;"></div>
    <div class="post-hero-geo post-hero-geo-4" style="position:absolute;top:25%;left:12%;width:4px;height:4px;border-radius:50%;background:rgba(37,111,168,.25);z-index:1;pointer-events:none;"></div>
    <div style="position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,transparent,var(--color-gold),var(--color-gold-light),transparent);z-index:2;opacity:.6;"></div>

    <div class="max-w-4xl mx-auto px-6 py-24 text-center" style="position:relative;z-index:3;">
        <div class="flex items-center justify-center gap-3 mb-6 flex-wrap">
            <span class="post-category-chip text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full" style="font-family:var(--font-sans);"><?= htmlspecialchars($category) ?></span>
            <span style="color:rgba(255,255,255,.2);font-size:.65rem;">·</span>
            <span class="post-read-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <?= $read_time ?> min read
            </span>
            <span style="color:rgba(255,255,255,.2);font-size:.65rem;">·</span>
            <span style="font-family:var(--font-sans);font-size:.75rem;color:rgba(255,255,255,.45);"><?= $date_fmt ?></span>
        </div>
        <div style="width:48px;height:2px;background:linear-gradient(90deg,var(--color-gold),var(--color-gold-light));border-radius:1px;margin:0 auto 2rem;"></div>
        <h1 class="post-hero-title text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight" style="font-family:var(--font-serif);letter-spacing:-0.02em;text-shadow:0 2px 20px rgba(0,0,0,.35);">
            <?= htmlspecialchars($title) ?>
        </h1>
        <p class="post-hero-excerpt text-lg md:text-xl mb-10 leading-relaxed" style="color:rgba(255,255,255,.5);max-width:640px;margin-left:auto;margin-right:auto;">
            <?= htmlspecialchars($excerpt) ?>
        </p>
        <div class="post-hero-author flex items-center justify-center gap-3">
            <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--color-gold),var(--color-gold-light));display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <span style="color:#fff;font-weight:700;font-size:.95rem;">RA</span>
            </div>
            <div style="text-align:left;">
                <p style="font-family:var(--font-sans);font-size:.82rem;font-weight:600;color:#fff;margin:0;"><?= htmlspecialchars($author) ?></p>
                <p style="font-family:var(--font-sans);font-size:.72rem;color:rgba(255,255,255,.4);margin:0;">Board-Certified Psychiatrist</p>
            </div>
        </div>
    </div>
    <div style="position:absolute;bottom:2rem;left:50%;transform:translateX(-50%);z-index:3;display:flex;flex-direction:column;align-items:center;gap:6px;opacity:.4;">
        <span style="font-family:var(--font-sans);font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#fff;">Scroll</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
    </div>
</section>

<section class="py-12 px-6 post-body-section" style="background:var(--color-beige-dark);">
    <div class="post-layout">

        <!-- ── Desktop TOC — sticky sidebar ── -->
        <div class="post-toc-sidebar" id="postToc">
            <div class="post-toc-label">In this article</div>
            <ul class="post-toc-list" id="tocList"></ul>
        </div>

        <!-- ── Content column ── -->
        <div>
            <div class="post-content-wrap">

                <!-- Mobile TOC drawer -->
                <div class="post-toc-mobile">
                    <div class="post-toc-drawer">
                        <button class="post-toc-toggle" id="tocToggle" aria-expanded="false">
                            <span style="font-family:var(--font-sans);">Contents</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <ul class="post-toc-drawer-links" id="tocDrawerList"></ul>
                    </div>
                </div>

                <div class="post-body mb-14" id="postBody"><?= $content ?></div>

                <!-- Share -->
                <div class="post-share rounded-2xl p-6 mb-14 flex flex-col sm:flex-row items-start sm:items-center gap-5">
                    <div class="flex-1">
                        <p class="text-xs font-semibold tracking-widest uppercase mb-1" style="color:var(--color-text-light);">Share this article</p>
                        <p class="text-sm" style="color:var(--color-text-light);">Found this helpful? Share it with someone who might benefit.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center transition-all hover:-translate-y-0.5 hover:shadow-md" style="background:rgba(37,111,168,.1);color:var(--color-gold);" aria-label="Share on X">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full flex items-center justify-center transition-all hover:-translate-y-0.5 hover:shadow-md" style="background:rgba(37,111,168,.1);color:var(--color-gold);" aria-label="Share on LinkedIn">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Author Card -->
                <div class="post-author-card rounded-2xl p-8 flex gap-6 shadow-sm mb-14">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center shrink-0" style="background:linear-gradient(135deg,var(--color-gold),var(--color-gold-light));">
                        <span class="text-white text-xl font-bold" style="font-family:var(--font-serif);">RA</span>
                    </div>
                    <div>
                        <p class="font-semibold text-base mb-1" style="color:var(--color-midnight);"><?= htmlspecialchars($author) ?></p>
                        <p class="text-sm leading-relaxed mb-3" style="color:var(--color-text-light);">
                            Dr. Ritesh Amin is a Board-Certified Psychiatrist specializing in TMS therapy, Spravato, and advanced neuromodulation for treatment-resistant depression in Edison, NJ.
                        </p>
                        <a href="/dr-ritesh-amin" class="text-xs font-semibold tracking-wide" style="color:var(--color-gold);">About Dr. Amin →</a>
                    </div>
                </div>

                <!-- ── FAQs ── -->
                <div class="post-faqs">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="post-rule"></div>
                        <h2 class="text-xl font-semibold tracking-wide uppercase" style="color:var(--color-gold);font-family:var(--font-sans);">Common Questions</h2>
                    </div>
                    <div class="post-faq-list">
                        <div class="post-faq-item">
                            <button class="post-faq-trigger" aria-expanded="false">
                                <span class="post-faq-question">Is TMS therapy painful?</span>
                                <svg class="post-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <div class="post-faq-body">
                                <div class="post-faq-answer">
                                    <p>Most patients describe the sensation as a mild tapping or knocking on the scalp, which can feel unusual but is generally not painful. The intensity is calibrated to your individual comfort threshold before each session begins.</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-faq-item">
                            <button class="post-faq-trigger" aria-expanded="false">
                                <span class="post-faq-question">How long does a full TMS treatment course take?</span>
                                <svg class="post-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <div class="post-faq-body">
                                <div class="post-faq-answer">
                                    <p>A standard course is 5 sessions per week for 4–6 weeks — approximately 20–30 total sessions. Each session lasts 20–40 minutes with no downtime afterward.</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-faq-item">
                            <button class="post-faq-trigger" aria-expanded="false">
                                <span class="post-faq-question">Is TMS covered by insurance?</span>
                                <svg class="post-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <div class="post-faq-body">
                                <div class="post-faq-answer">
                                    <p>Most major insurance plans, including Medicare and Medicaid, cover TMS for treatment-resistant major depressive disorder when clinical criteria are met. Our team handles prior authorization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-faq-item">
                            <button class="post-faq-trigger" aria-expanded="false">
                                <span class="post-faq-question">Can TMS be combined with medication?</span>
                                <svg class="post-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <div class="post-faq-body">
                                <div class="post-faq-answer">
                                    <p>Yes. TMS is often used alongside ongoing psychiatric medication, especially during the acute phase. Your psychiatrist will determine the best protocol based on your treatment history.</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-faq-item">
                            <button class="post-faq-trigger" aria-expanded="false">
                                <span class="post-faq-question">Are there any side effects?</span>
                                <svg class="post-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <div class="post-faq-body">
                                <div class="post-faq-answer">
                                    <p>The most common side effects are mild scalp discomfort and occasional headache during or shortly after a session — both typically resolve on their own. TMS does not cause cognitive fog, sedation, or sexual side effects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-center mt-8" style="color:var(--color-text-light);">
                        Have more questions? <a href="/contact" class="font-semibold" style="color:var(--color-gold);">Schedule a consultation →</a>
                    </p>
                </div>

            </div><!-- /.post-content-wrap -->
        </div><!-- /.post-layout col -->
    </div><!-- /.post-layout -->
</section>

<section class="py-16 px-6" style="background:var(--color-midnight);">
    <div class="max-w-3xl mx-auto text-center">
        <div class="post-rule mx-auto mb-6"></div>
        <h2 class="font-serif text-3xl font-bold text-white mb-4" style="font-family:var(--font-serif);">Continue Reading</h2>
        <p class="mb-8" style="color:rgba(255,255,255,.5);">Explore more articles on psychiatric treatments and mental wellness.</p>
        <a href="/blog" class="inline-flex px-8 py-3.5 rounded-full text-sm font-semibold tracking-wide text-white transition-all hover:-translate-y-0.5 hover:shadow-lg" style="background:var(--color-gold);font-family:var(--font-sans);">View All Articles</a>
    </div>
</section>

<script>
(function () {
    const body = document.getElementById('postBody');
    const progress = document.getElementById('postProgress');
    const headings = Array.from(body.querySelectorAll('h2[id]'));
    const tocList = document.getElementById('tocList');
    const drawerList = document.getElementById('tocDrawerList');

    if (headings.length < 2) {
        document.querySelector('.post-toc-sidebar')?.remove();
        document.querySelector('.post-toc-mobile')?.remove();
        return;
    }

    headings.forEach(h => {
        const label = h.textContent.replace(/[?!.]$/, '').trim();
        const item = document.createElement('li');
        item.innerHTML = `<a class="post-toc-link" href="#${h.id}"><span class="post-toc-dot"></span>${label}</a>`;
        tocList.appendChild(item);
        const dItem = document.createElement('li');
        dItem.innerHTML = `<a href="#${h.id}">${label}</a>`;
        drawerList.appendChild(dItem);
    });

    const tocLinks = tocList.querySelectorAll('.post-toc-link');
    const drawerLinks = drawerList.querySelectorAll('a');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const id = e.target.id;
                tocLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + id));
                drawerLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + id));
            }
        });
    }, { rootMargin: '-10% 0px -75% 0px', threshold: 0 });
    headings.forEach(h => observer.observe(h));

    window.addEventListener('scroll', () => {
        const rect = body.getBoundingClientRect();
        const total = body.offsetHeight;
        const done = Math.max(0, -rect.top + window.innerHeight * 0.7);
        progress.style.width = Math.min(100, (done / total) * 100) + '%';
    }, { passive: true });

    const toggle = document.getElementById('tocToggle');
    const drawer = document.getElementById('tocDrawerList');
    toggle?.addEventListener('click', () => {
        const open = drawer.classList.toggle('open');
        toggle.classList.toggle('open', open);
        toggle.setAttribute('aria-expanded', open);
    });

    // FAQ accordion
    document.querySelectorAll('.post-faq-trigger').forEach(btn => {
        btn.addEventListener('click', () => {
            const body = btn.nextElementSibling;
            const icon = btn.querySelector('.post-faq-icon');
            const isOpen = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', !isOpen);
            if (!isOpen) {
                icon.style.transform = 'rotate(180deg)';
                body.style.maxHeight = body.scrollHeight + 'px';
            } else {
                icon.style.transform = '';
                body.style.maxHeight = '0';
            }
        });
    });
})();
</script>

<?php include dirname(__DIR__) . '/footer.php'; ?>
