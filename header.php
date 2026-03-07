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
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: { preflight: false },
            theme: {
                extend: {
                    colors: {
                        midnight: { DEFAULT: '#0b192c', light: '#162b47' },
                        gold:     { DEFAULT: '#256fa8', light: '#5dadee' },
                        beige:    { DEFAULT: '#ffffff', dark: '#f4f7fb'  },
                        sage:     { DEFAULT: '#E8F1F2', dark: '#D1E3E6' }
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans:  ['Inter', 'sans-serif'],
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

        <?= $extra_css ?>
    </style>
</head>
<body class="<?= htmlspecialchars($body_class) ?>">
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <!-- Logo -->
            <a href="/" class="logo">
                <span class="logo-mark">
                    <svg viewBox="0 0 10 10" fill="none"><circle cx="5" cy="5" r="3" fill="currentColor"/></svg>
                </span>
                <div class="logo-text">
                    <span class="logo-name">Dr. Ritesh Amin</span>
                    <span class="logo-tag">MD &middot; Psychiatry &amp; TMS</span>
                </div>
            </a>

            <!-- Desktop nav links -->
            <div class="nav-links">
                <a href="/dr-ritesh-amin.php" class="nav-link">About</a>
                <div class="dropdown">
                    <a href="#" class="nav-link dropbtn">
                        Services
                        <svg class="drop-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="/neurology-tms-therapy.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span>
                            Neurology TMS
                        </a>
                        <a href="/psychiatry-tms-therapy.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                            Psychiatry TMS
                        </a>
                        <a href="/what-is-spravato.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
                            Spravato (Esketamine)
                        </a>
                        <a href="/what-is-ketamine-therapy.php">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/></svg></span>
                            Ketamine Therapy
                        </a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link dropbtn">
                        Resources
                        <svg class="drop-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="/reviews">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></span>
                            Patient Testimonials
                        </a>
                        <a href="/faq">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></span>
                            FAQs
                        </a>
                        <a href="/blog">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></span>
                            Blog
                        </a>
                        <a href="/mental-health-resources">
                            <span class="dd-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></span>
                            Resources
                        </a>
                    </div>
                </div>
                <a href="/contact.php" class="btn btn-primary btn-sm nav-cta">Schedule Consultation</a>
            </div>

            <!-- Mobile hamburger -->
            <div class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>
