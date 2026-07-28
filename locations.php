<?php
// Unlisted internal directory of all service-area pages.
// NOT linked from the site header, footer, or sitemap. Reachable via direct URL
// or the "All Locations" tab on individual area pages.
$page_title = 'Service Locations | Dr. Ritesh Amin';
$page_desc = 'Directory of TMS therapy service areas served by Dr. Ritesh Amin across central New Jersey.';
$body_class = 'bg-beige font-sans';
$noindex = true;
$extra_css = '
    .loc-hero { position: relative; padding: 10rem 0 4rem; background: var(--color-midnight); overflow: hidden; }
    .loc-hero::before { content: ""; position: absolute; inset: 0; background-image: radial-gradient(rgba(37,111,168,0.06) 1px, transparent 1px); background-size: 30px 30px; pointer-events: none; }
    .loc-hero::after { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, transparent 0%, var(--color-gold) 22%, var(--color-gold-light) 50%, var(--color-gold) 78%, transparent 100%); }
    .loc-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1rem; }
    .loc-card { display: flex; align-items: center; gap: .85rem; padding: 1.1rem 1.25rem; background: #fff; border: 1px solid #e7edf5; border-radius: 1rem; text-decoration: none; box-shadow: 0 1px 2px rgba(11,25,44,.04); transition: border-color .25s ease, box-shadow .25s ease, transform .25s ease; }
    .loc-card:hover { border-color: var(--color-gold); box-shadow: 0 12px 28px rgba(37,111,168,.14); transform: translateY(-2px); }
    .loc-card .pin { width: 2.5rem; height: 2.5rem; flex-shrink: 0; border-radius: .75rem; display: flex; align-items: center; justify-content: center; background: var(--color-beige-dark); color: var(--color-gold); transition: background .25s ease, color .25s ease; }
    .loc-card:hover .pin { background: var(--color-gold); color: #fff; }
    .loc-card .pin svg { width: 1.25rem; height: 1.25rem; }
    .loc-card .loc-name { font-weight: 600; color: var(--color-midnight); font-size: 1rem; line-height: 1.2; }
    .loc-card .loc-sub { font-size: .78rem; color: #6b7a8d; margin-top: .15rem; }
    .loc-card .arrow { margin-left: auto; color: #c3ccd8; transition: color .25s ease, transform .25s ease; }
    .loc-card:hover .arrow { color: var(--color-gold); transform: translateX(3px); }
';
include __DIR__ . '/header.php';

// Build the list of area pages from the filesystem.
$files = glob(__DIR__ . '/areas-we-serve/tms-therapy-*-nj.php');
sort($files);
$locations = [];
foreach ($files as $f) {
    $base = basename($f, '.php');                       // e.g. tms-therapy-hamilton-township-nj
    $city = preg_replace('/^tms-therapy-/', '', $base);
    $city = preg_replace('/-nj$/', '', $city);
    $city = ucwords(str_replace('-', ' ', $city));      // e.g. Hamilton Township
    $locations[] = ['url' => '/areas-we-serve/' . $base . '.php', 'city' => $city];
}
$total = count($locations);
?>

    <!-- Hero -->
    <section class="loc-hero" id="hero">
        <div class="container mx-auto px-4 max-w-7xl relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <span class="eyebrow mx-auto" style="color:var(--color-gold-light);">Areas We Serve</span>
                <h1 class="text-4xl lg:text-5xl font-serif text-white leading-tight mb-4">Service Locations</h1>
                <div class="w-16 h-1 bg-gold mb-8 mx-auto"></div>
                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed">
                    Dr. Ritesh Amin provides advanced TMS therapy to patients across <?php echo $total; ?> communities in central New Jersey. Select a location below to learn more.
                </p>
            </div>
        </div>
    </section>

    <!-- Locations Directory -->
    <section class="py-16 lg:py-20 bg-beige" id="directory">
        <div class="container mx-auto px-4 max-w-7xl">
            <?php if ($total === 0): ?>
                <p class="text-center text-gray-500">No location pages found.</p>
            <?php else: ?>
            <div class="loc-grid reveal">
                <?php foreach ($locations as $loc): ?>
                <a href="<?php echo htmlspecialchars($loc['url']); ?>" class="loc-card">
                    <span class="pin">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </span>
                    <span>
                        <span class="loc-name"><?php echo htmlspecialchars($loc['city']); ?></span>
                        <span class="loc-sub block">TMS Therapy &middot; NJ</span>
                    </span>
                    <svg class="arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

<?php include __DIR__ . '/footer.php'; ?>
