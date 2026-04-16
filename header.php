<?php
// Default values if not set before including header.php
$page_title = $page_title ?? 'Advanced TMS Therapy in NJ';
$page_desc = $page_desc ?? 'Learn about our advanced TMS Therapy and mental health treatments in New Jersey.';
$body_class = $body_class ?? 'bg-beige';
$extra_css = $extra_css ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($page_title)?>
    </title>
    <meta name="description" content="<?= htmlspecialchars($page_desc)?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/Dr.-Ritesh-Amin-favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: { preflight: false },
            theme: {
                extend: {
                    colors: {
                        midnight: { DEFAULT: '#0b192c', light: '#162b47' },
                        gold: { DEFAULT: '#256fa8', light: '#5dadee' },
                        beige: { DEFAULT: '#ffffff', dark: '#f4f7fb' },
                        sage: { DEFAULT: '#E8F1F2', dark: '#D1E3E6' }
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        /* ── Component classes powered by Tailwind @apply ── */
        .eyebrow {
            @apply block font-sans text-sm font-semibold uppercase tracking-[2px] text-gold mb-4;
        }
        .section-header        { @apply mb-16; }
        .section-header.center { @apply text-center max-w-[800px] mx-auto; }
        .section-title         { @apply text-[2.5rem] mb-4; }
        .section-subtitle      { @apply text-[1.1rem] max-w-[600px] mx-auto; }

        @media (max-width: 991px) {
            .section-title { font-size: 2.2rem; }
        }

        <?= $extra_css?>
    </style>
</head>

<body class="<?= htmlspecialchars($body_class)?>">
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="/assets/logo/Dr.-Ritesh-Amin-main.png" alt="Dr. Ritesh Amin" class="logo-main hidden">
                <img src="/assets/logo/Dr-Ritesh-Amin-white.png" alt="Dr. Ritesh Amin" class="logo-white block">
            </a>

            <!-- Desktop nav links -->
            <div class="nav-links">
                <div class="dropdown">
                    <a href="#" class="nav-link dropbtn">
                        About
                        <svg class="drop-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="/dr-ritesh-amin.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
                            <span class="dd-label">Dr. Ritesh Amin<span class="dd-label-sub">MD &middot; Psychiatry &amp; TMS</span></span>
                        </a>
                        <a href="/dr-nalin-ranasinghe.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
                            <span class="dd-label">Dr. Nalin E. Ranasinghe<span class="dd-label-sub">MD &middot; Emergency &amp; General Medicine</span></span>
                        </a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link dropbtn">
                        Treatments
                        <svg class="drop-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </a>
                    <div class="mega-menu">
                        <!-- Feature Sidebar -->
                        <div class="mega-feature">
                            <span class="mega-feature-eyebrow">Our Treatments</span>
                            <h3 class="mega-feature-title">Advanced TMS<br>Therapy</h3>
                            <p class="mega-feature-desc">Non-invasive brain stimulation tailored by Dr. Amin for
                                neurology &amp; psychiatry conditions.</p>
                            <a href="/neurology-tms-therapy.php" class="mega-feature-cta">
                                Explore All →
                            </a>
                        </div>

                        <!-- Psychiatry Column -->
                        <div class="mega-column">
                            <div class="mega-col-header">
                                <span class="mega-col-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                    </svg>
                                </span>
                                <span class="mega-heading">Psychiatry TMS</span>
                            </div>
                            <a href="/psychiatry-tms-therapy.php" class="mega-link-overview">
                                Therapy Overview
                            </a>
                            <a href="/psychiatry/tms-for-major-depression.php">Major Depression</a>
                            <a href="/psychiatry/tms-for-treatment-resistant-depression.php">Treatment-Resistant</a>
                            <a href="/psychiatry/tms-for-generalized-anxiety.php">Generalized Anxiety</a>
                            <a href="/psychiatry/tms-for-ptsd.php">PTSD</a>
                            <a href="/psychiatry/tms-for-ocd.php">OCD</a>
                            <a href="/psychiatry/tms-for-panic-disorder.php">Panic Disorder</a>
                            <a href="/psychiatry/tms-for-bipolar-depression.php">Bipolar Depression</a>
                            <a href="/psychiatry/tms-for-adhd.php">ADHD</a>
                        </div>

                        <!-- Neurology Column -->
                        <div class="mega-column">
                            <div class="mega-col-header">
                                <span class="mega-col-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                    </svg>
                                </span>
                                <span class="mega-heading">Neurology TMS</span>
                            </div>
                            <a href="/neurology-tms-therapy.php" class="mega-link-overview">
                                Therapy Overview
                            </a>
                            <a href="/neurology/tms-for-brain-injury-trauma.php">Brain Injury &amp; Trauma</a>
                            <a href="/neurology/tms-for-movement-disorders.php">Movement Disorders</a>
                            <a href="/neurology/tms-for-stroke-recovery.php">Stroke Recovery</a>
                            <a href="/neurology/tms-for-parkinsons-symptoms.php">Parkinson's Symptoms</a>
                            <a href="/neurology/tms-for-alzheimers-dementia.php">Alzheimer's &amp; Dementia</a>
                            <a href="/neurology/tms-for-migraine.php">Chronic Migraine</a>
                            <a href="/neurology/tms-for-neuropathic-pain.php">Neuropathic Pain</a>
                            <a href="/neurology/tms-for-fibromyalgia.php">Fibromyalgia</a>
                            <a href="/neurology/tms-for-huntingtons-disease.php">Huntington's Disease</a>
                            <a href="/neurology/tms-for-fibromuscular-dysplasia.php">Fibromuscular Dysplasia</a>
                        </div>

                        <!-- Other Treatments Column -->
                        <div class="mega-column">
                            <div class="mega-col-header">
                                <span class="mega-col-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                    </svg>
                                </span>
                                <span class="mega-heading">Other Treatments</span>
                            </div>
                            <a href="/what-is-spravato.php" class="mega-treatment-card">
                                <span class="mega-treatment-title">Spravato (Esketamine)</span>
                                <span class="mega-treatment-desc">FDA-approved nasal spray for treatment-resistant
                                    depression.</span>
                            </a>
                            <a href="/what-is-ketamine-therapy.php" class="mega-treatment-card">
                                <span class="mega-treatment-title">Ketamine Therapy</span>
                                <span class="mega-treatment-desc">Rapid-relief IV infusions for severe depression &amp;
                                    mood disorders.</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link dropbtn">
                        Resources
                        <svg class="drop-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="/reviews.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></span>
                            <span class="dd-label">Patient Testimonials<span class="dd-label-sub">Real stories from our patients</span></span>
                        </a>
                        <a href="/faq.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></span>
                            <span class="dd-label">FAQs<span class="dd-label-sub">Common TMS questions answered</span></span>
                        </a>
                        <a href="/insurance.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg></span>
                            <span class="dd-label">Insurance &amp; Financing<span class="dd-label-sub">Coverage &amp; payment options</span></span>
                        </a>
                        <a href="/reviews.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></span>
                            <span class="dd-label">Blog<span class="dd-label-sub">Mental health &amp; TMS insights</span></span>
                        </a>
                        <a href="/faq.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></span>
                            <span class="dd-label">Mental Health Resources<span class="dd-label-sub">Guides, tools &amp; support links</span></span>
                        </a>
                    </div>
                </div>
                <a href="/contact.php" class="btn btn-primary btn-sm nav-cta">Schedule a Consultation</a>
            </div>

            <!-- Mobile Navigation Overlay -->
            <div class="mobile-nav" id="mobileNav">
                <div class="mobile-nav-content">
                    <div class="mobile-nav-links">
                        <!-- About Accordion -->
                        <div class="mobile-accordion">
                            <button class="mobile-link accordion-toggle">
                                About Us
                                <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="accordion-panel">
                                <a href="/dr-ritesh-amin.php">Dr. Ritesh Amin</a>
                                <a href="/dr-nalin-ranasinghe.php">Dr. Nalin E. Ranasinghe</a>
                            </div>
                        </div>

                        <!-- Treatments Accordion -->
                        <div class="mobile-accordion">
                            <button class="mobile-link accordion-toggle">
                                Treatments
                                <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="accordion-panel">
                                <div class="mobile-sub-group">
                                    <span class="sub-group-title">Psychiatry TMS</span>
                                    <a href="/psychiatry-tms-therapy.php">Therapy Overview</a>
                                    <a href="/psychiatry/tms-for-major-depression.php">Major Depression</a>
                                    <a
                                        href="/psychiatry/tms-for-treatment-resistant-depression.php">Treatment-Resistant</a>
                                    <a href="/psychiatry/tms-for-generalized-anxiety.php">Generalized Anxiety</a>
                                    <a href="/psychiatry/tms-for-ptsd.php">PTSD</a>
                                    <a href="/psychiatry/tms-for-ocd.php">OCD</a>
                                    <a href="/psychiatry/tms-for-panic-disorder.php">Panic Disorder</a>
                                    <a href="/psychiatry/tms-for-bipolar-depression.php">Bipolar Depression</a>
                                    <a href="/psychiatry/tms-for-adhd.php">ADHD</a>
                                </div>
                                <div class="mobile-sub-group">
                                    <span class="sub-group-title">Neurology TMS</span>
                                    <a href="/neurology-tms-therapy.php">Therapy Overview</a>
                                    <a href="/neurology/tms-for-brain-injury-trauma.php">Traumatic Brain Injury</a>
                                    <a href="/neurology/tms-for-movement-disorders.php">Movement Disorders</a>
                                    <a href="/neurology/tms-for-stroke-recovery.php">Stroke Recovery</a>
                                    <a href="/neurology/tms-for-parkinsons-symptoms.php">Parkinson's Symptoms</a>
                                    <a href="/neurology/tms-for-alzheimers-dementia.php">Alzheimer's & Dementia</a>
                                    <a href="/neurology/tms-for-migraine.php">Chronic Migraine</a>
                                    <a href="/neurology/tms-for-neuropathic-pain.php">Neuropathic Pain</a>
                                    <a href="/neurology/tms-for-fibromyalgia.php">Fibromyalgia</a>
                                    <a href="/neurology/tms-for-huntingtons-disease.php">Huntington's Disease</a>
                                    <a href="/neurology/tms-for-fibromuscular-dysplasia.php">Fibromuscular Dysplasia</a>
                                </div>
                                <div class="mobile-sub-group">
                                    <span class="sub-group-title">Innovative Treatments</span>
                                    <a href="/what-is-spravato.php">Spravato (Esketamine)</a>
                                    <a href="/what-is-ketamine-therapy.php">Ketamine Therapy</a>
                                </div>
                            </div>
                        </div>

                        <!-- Resources Accordion -->
                        <div class="mobile-accordion">
                            <button class="mobile-link accordion-toggle">
                                Resources
                                <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </button>
                            <div class="accordion-panel">
                                <a href="/reviews.php">Patient Testimonials</a>
                                <a href="/faq.php">Patient FAQs</a>
                                <a href="/insurance.php">Insurance & Financing</a>
                                <a href="/reviews.php">Wellness Blog</a>
                                <a href="/faq.php">Mental Health Resources</a>
                            </div>
                        </div>

                        <a href="/contact.php" class="mobile-link">Contact</a>
                    </div>

                    <div class="mobile-nav-cta">
                        <a href="/contact.php" class="btn btn-primary w-full">Schedule a Consultation</a>
                    </div>
                </div>
            </div>

            <!-- Mobile hamburger -->
            <div class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>