<?php
/**
 * Blog — Dr. Ritesh Amin
 *
 * Edit $posts below to add / update / remove posts.
 * Each post needs: title, date, category, excerpt, image, slug, featured
 *
 * Slug must match a .php file in the blog/ directory (e.g. "tms-therapy-explained" → tms-therapy-explained.php)
 * Leave image empty "" to use the placeholder gradient card.
 */

$posts = [
    [
        'title'       => 'Does TMS Help with Anxiety? A Complete Guide',
        'date'        => '2026-04-13',
        'category'    => 'TMS Therapy',
        'excerpt'     => 'Anxiety can feel overwhelming. If you’ve tried therapy or medications and still don’t feel like yourself, you may have come across Transcranial Magnetic Stimulation (TMS) as a treatment option.',
        'image'       => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?auto=format&fit=crop&w=800&q=80',
        'slug'        => 'does-tms-help-with-anxiety',
        'featured'    => true,
    ],
];

// ─────────────────────────────────────────────
// DO NOT EDIT BELOW THIS LINE
// ─────────────────────────────────────────────

$page_title = 'Blog — Advanced Psychiatry & TMS Therapy | Dr. Ritesh Amin, MD';
$page_desc  = 'Expert insights on TMS therapy, Spravato, ketamine, depression, anxiety, and psychiatric care from Dr. Ritesh Amin, MD — Edison, NJ.';
$body_class = 'bg-beige-dark';
$extra_css   = '
    .blog-hero {
        background: var(--color-midnight);
        padding-top: 5.5rem;
        position: relative;
        overflow: hidden;
    }
    .blog-hero-bg {
        position: absolute; inset: 0; z-index: 0;
    }
    .blog-hero-bg img { width: 100%; height: 100%; object-fit: cover; object-position: center 30%; }
    .blog-hero-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(175deg, rgba(11,25,44,.88) 0%, rgba(11,25,44,.72) 50%, rgba(11,25,44,.92) 100%);
    }
    .blog-hero-geo {
        position: absolute; border-radius: 50%;
        border: 1px solid rgba(37,111,168,.12);
        pointer-events: none; z-index: 1;
    }
    .blog-hero-geo-1 { top: -70px; right: -70px; width: 320px; height: 320px; }
    .blog-hero-geo-2 { bottom: -50px; left: -50px; width: 200px; height: 200px; border-color: rgba(37,111,168,.09); }
    .blog-hero-geo-3 { top: 30%; right: 10%; width: 8px; height: 8px; border-radius: 50%; background: rgba(37,111,168,.3); border: none; }
    .blog-hero-geo-4 { top: 20%; left: 8%; width: 5px; height: 5px; border-radius: 50%; background: rgba(37,111,168,.2); border: none; }
    .blog-hero-geo-5 { bottom: 25%; right: 15%; width: 4px; height: 4px; border-radius: 50%; background: rgba(37,111,168,.2); border: none; }
    .blog-hero-topline {
        position: absolute; top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, transparent, var(--color-gold), var(--color-gold-light), transparent);
        opacity: .6; z-index: 2;
    }
    .blog-hero-title { text-shadow: 0 2px 20px rgba(0,0,0,.35); letter-spacing: -.02em; }
    .blog-card-img { height: 220px; }
    .blog-card-img img { width:100%;height:100%;object-fit:cover;transition:transform .5s ease; }
    .blog-card:hover .blog-card-img img { transform: scale(1.04); }
    .blog-category-chip { background: rgba(37,111,168,0.1); color: var(--color-gold); border: 1px solid rgba(37,111,168,0.2); }
    .blog-featured-img { height: 420px; }
    .blog-featured-img img { width:100%;height:100%;object-fit:cover; }
    .blog-rule { width:48px;height:2px;background:linear-gradient(90deg,var(--color-gold),var(--color-gold-light),transparent);border-radius:1px; }
    .blog-card { transition: transform .35s ease, box-shadow .35s ease; }
    .blog-card:hover { transform: translateY(-6px); box-shadow: 0 20px 48px rgba(11,25,44,0.12); }
    .blog-read-time { color: var(--color-text-light); }
    .blog-scroll-hint {
        position: absolute; bottom: 1.5rem; left: 50%; transform: translateX(-50%);
        display: flex; flex-direction: column; align-items: center; gap: 5px;
        opacity: .4; z-index: 3;
    }
    @media (max-width: 768px) {
        .blog-hero-geo-1, .blog-hero-geo-2, .blog-hero-geo-3, .blog-hero-geo-4, .blog-hero-geo-5 { display: none; }
    }
';

include dirname(__DIR__) . '/header.php';
?>

<!-- ── Blog Hero ── -->
<section class="blog-hero" style="min-height:540px;display:flex;align-items:center;">
    <!-- Background image -->
    <div class="blog-hero-bg">
        <img src="https://images.unsplash.com/photo-1507413245164-6160d8298b31?auto=format&fit=crop&w=1600&q=80" alt="" />
        <div class="blog-hero-overlay"></div>
    </div>
    <!-- Geometric accents -->
    <div class="blog-hero-geo blog-hero-geo-1"></div>
    <div class="blog-hero-geo blog-hero-geo-2"></div>
    <div class="blog-hero-geo blog-hero-geo-3"></div>
    <div class="blog-hero-geo blog-hero-geo-4"></div>
    <div class="blog-hero-geo blog-hero-geo-5"></div>
    <div class="blog-hero-topline"></div>

    <!-- Content -->
    <div class="max-w-4xl mx-auto px-6 text-center" style="position:relative;z-index:3;">
        <!-- Eyebrow -->
        <div style="display:inline-flex;align-items:center;gap:.5rem;background:rgba(37,111,168,.15);border:1px solid rgba(37,111,168,.3);border-radius:100px;padding:.35rem 1rem;margin-bottom:1.5rem;">
            <span style="width:6px;height:6px;border-radius:50%;background:var(--color-gold);flex-shrink:0;"></span>
            <span style="font-family:var(--font-sans);font-size:.72rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--color-gold);">Insights &amp; Education</span>
        </div>
        <!-- Rule -->
        <div style="width:48px;height:2px;background:linear-gradient(90deg,var(--color-gold),var(--color-gold-light));border-radius:1px;margin:0 auto 1.75rem;"></div>
        <!-- Title -->
        <h1 class="blog-hero-title font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight"
            style="font-family:var(--font-serif);">
            The Psychiatry &amp; TMS Blog
        </h1>
        <!-- Subtitle -->
        <p class="text-lg md:text-xl max-w-2xl mx-auto leading-relaxed"
           style="color:rgba(255,255,255,.5);">
            Evidence-based articles on brain stimulation therapy, psychiatric care, and mental wellness — written by Dr. Ritesh Amin and his clinical team.
        </p>
    </div>

    <!-- Scroll indicator -->
    <div class="blog-scroll-hint">
        <span style="font-family:var(--font-sans);font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#fff;">Scroll</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
    </div>
</section>

<!-- ── Featured Posts ── -->
<?php $featured = array_filter($posts, fn($p) => $p['featured']); ?>
<?php if (count($featured)) : ?>
<section class="py-16 px-6" style="background:var(--color-beige);">
    <div class="max-w-7xl mx-auto">

        <div class="flex items-center gap-4 mb-10">
            <div class="blog-rule"></div>
            <h2 class="text-xl font-semibold tracking-wide uppercase" style="color:var(--color-gold);">Featured Articles</h2>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            <?php foreach ($featured as $p) :
                $readTime = ceil(str_word_count($p['excerpt']) / 200) + 3;
                $dateFmt  = date('F j, Y', strtotime($p['date']));
            ?>
            <a href="/blog/<?= $p['slug'] ?>.php" class="blog-card group block rounded-2xl overflow-hidden shadow-md"
               style="background:var(--color-white);">
                <?php if ($p['image']) : ?>
                <div class="blog-featured-img overflow-hidden">
                    <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"
                         loading="lazy" />
                </div>
                <?php else : ?>
                <div class="blog-featured-img" style="background:linear-gradient(135deg,var(--color-gold),var(--color-gold-light));"></div>
                <?php endif; ?>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="blog-category-chip text-xs font-semibold tracking-widest uppercase px-3 py-1 rounded-full"
                              style="font-family:var(--font-sans);">
                            <?= htmlspecialchars($p['category']) ?>
                        </span>
                        <span class="text-xs" style="color:var(--color-text-light);font-family:var(--font-sans);"><?= $dateFmt ?></span>
                        <span class="blog-read-time text-xs" style="font-family:var(--font-sans);">· <?= $readTime ?> min read</span>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-navy mb-3 leading-snug group-hover:text-gold transition-colors"
                        style="font-family:var(--font-serif); color:var(--color-midnight);">
                        <?= htmlspecialchars($p['title']) ?>
                    </h3>
                    <p class="text-sm leading-relaxed mb-5" style="color:var(--color-text-light);"><?= htmlspecialchars($p['excerpt']) ?></p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-medium tracking-wide" style="color:var(--color-gold);">Read Article →</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ── All Posts Grid ── -->
<section class="py-16 px-6" style="background:var(--color-beige-dark);">
    <div class="max-w-7xl mx-auto">

        <div class="flex items-center gap-4 mb-10">
            <div class="blog-rule"></div>
            <h2 class="text-xl font-semibold tracking-wide uppercase" style="color:var(--color-gold);">All Articles</h2>
        </div>

        <!-- Search Bar -->
        <div class="mb-8">
            <div class="relative max-w-md">
                <input type="text" id="blog-search" placeholder="Search articles..."
                       class="w-full px-5 py-3 pl-12 rounded-full text-sm outline-none"
                       style="background:var(--color-white);color:var(--color-midnight);border:1.5px solid rgba(37,111,168,0.2);font-family:var(--font-sans);"
                       onfocus="this.style.borderColor='var(--color-gold)'"
                       onblur="this.style.borderColor='rgba(37,111,168,0.2)'" />
                <svg class="absolute left-4 top-1/2 -translate-y-1/2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--color-gold);">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
        </div>

        <!-- Category Filter -->
        <?php
        $categories = array_unique(array_column($posts, 'category'));
        sort($categories);
        ?>
        <div class="flex flex-wrap gap-3 mb-12" id="blog-filter">
            <button class="blog-filter-btn active text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full transition-all"
                    data-filter="all" style="background:var(--color-gold);color:#fff;">
                All
            </button>
            <?php foreach ($categories as $cat) : ?>
            <button class="blog-filter-btn text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full transition-all"
                    data-filter="<?= htmlspecialchars($cat) ?>"
                    style="background:transparent;color:var(--color-gold);border:1.5px solid rgba(37,111,168,0.35);">
                <?= htmlspecialchars($cat) ?>
            </button>
            <?php endforeach; ?>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3" id="blog-grid">
            <?php foreach ($posts as $p) :
                $readTime = ceil(str_word_count($p['excerpt']) / 200) + 3;
                $dateFmt  = date('F j, Y', strtotime($p['date']));
            ?>
            <article class="blog-card group rounded-2xl overflow-hidden shadow-sm"
                     style="background:var(--color-white);"
                     data-category="<?= htmlspecialchars($p['category']) ?>">
                <?php if ($p['image']) : ?>
                <div class="blog-card-img overflow-hidden">
                    <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"
                         loading="lazy" />
                </div>
                <?php else : ?>
                <div class="blog-card-img" style="background:linear-gradient(135deg,var(--color-gold),var(--color-gold-light));"></div>
                <?php endif; ?>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="blog-category-chip text-xs font-semibold tracking-widest uppercase px-2 py-0.5 rounded-full"
                              style="font-family:var(--font-sans);">
                            <?= htmlspecialchars($p['category']) ?>
                        </span>
                        <span class="blog-read-time text-xs" style="font-family:var(--font-sans);">· <?= $readTime ?> min</span>
                    </div>
                    <h3 class="font-serif text-xl font-bold mb-2 leading-snug group-hover:text-gold transition-colors"
                        style="font-family:var(--font-serif); color:var(--color-midnight);">
                        <a href="/blog/<?= $p['slug'] ?>.php" class="hover:no-underline">
                            <?= htmlspecialchars($p['title']) ?>
                        </a>
                    </h3>
                    <p class="text-sm leading-relaxed mb-4" style="color:var(--color-text-light);">
                        <?= htmlspecialchars($p['excerpt']) ?>
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t"
                         style="border-color:rgba(11,25,44,0.07);">
                        <span class="text-xs font-medium" style="color:var(--color-gold);">
                            <a href="/blog/<?= $p['slug'] ?>.php">Read →</a>
                        </span>
                        <span class="text-xs" style="color:rgba(0,0,0,0.28);"><?= $dateFmt ?></span>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <!-- Empty state (hidden by default, shown via JS when filter yields nothing) -->
        <div id="blog-empty" class="hidden text-center py-16">
            <p class="text-lg font-medium" style="color:var(--color-text-light);">No articles in this category yet.</p>
            <p class="text-sm mt-2" style="color:rgba(0,0,0,0.3);">Check back soon — new articles are published regularly.</p>
        </div>
    </div>
</section>

<!-- ── Newsletter CTA ── -->
<section class="py-20 px-6" style="background:var(--color-midnight);">
    <div class="max-w-2xl mx-auto text-center">
        <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-6"
             style="background:rgba(37,111,168,0.15);border:1px solid rgba(37,111,168,0.3);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                 style="color:var(--color-gold-light);">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>
        </div>
        <h2 class="font-serif text-3xl md:text-4xl font-bold text-white mb-4" style="font-family:var(--font-serif);">
            Stay Informed
        </h2>
        <p class="text-white/50 mb-8 leading-relaxed" style="color:rgba(255,255,255,0.5);">
            Get evidence-based articles on psychiatric treatments, TMS research, and mental wellness — delivered to your inbox. No spam, unsubscribe anytime.
        </p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-lg mx-auto" onsubmit="event.preventDefault(); this.querySelector('button').textContent='Subscribed ✓'; this.querySelector('input').disabled=true; this.querySelector('button').disabled=true;">
            <input type="email" required placeholder="Your email address"
                   class="flex-1 px-5 py-3.5 rounded-full text-sm outline-none"
                   style="background:rgba(255,255,255,0.08);color:#fff;border:1.5px solid rgba(255,255,255,0.15);font-family:var(--font-sans);"
                   onfocus="this.style.borderColor='var(--color-gold-light)'"
                   onblur="this.style.borderColor='rgba(255,255,255,0.15)'" />
            <button type="submit"
                    class="px-8 py-3.5 rounded-full text-sm font-semibold tracking-wide text-white whitespace-nowrap transition-all hover:-translate-y-0.5 hover:shadow-lg"
                    style="background:var(--color-gold);font-family:var(--font-sans);">
                Subscribe
            </button>
        </form>
    </div>
</section>

<script>
// ── Search functionality ──
const searchInput = document.getElementById('blog-search');
const allCards = document.querySelectorAll('#blog-grid article');
const emptyState = document.getElementById('blog-empty');
let currentCategory = 'all';

function filterCards() {
    const query = searchInput.value.toLowerCase().trim();
    let visible = 0;

    allCards.forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const excerpt = card.querySelector('p').textContent.toLowerCase();
        const category = card.dataset.category;
        const matchesSearch = title.includes(query) || excerpt.includes(query);
        const matchesCategory = currentCategory === 'all' || category === currentCategory;

        card.style.display = (matchesSearch && matchesCategory) ? '' : 'none';
        if (matchesSearch && matchesCategory) visible++;
    });

    emptyState.classList.toggle('hidden', visible > 0);
}

searchInput.addEventListener('input', filterCards);

// ── Category filter ──
const filterBtns = document.querySelectorAll('.blog-filter-btn');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        filterBtns.forEach(b => {
            b.classList.remove('active');
            b.style.background = 'transparent';
            b.style.color = 'var(--color-gold)';
        });
        btn.classList.add('active');
        btn.style.background = 'var(--color-gold)';
        btn.style.color = '#fff';

        currentCategory = btn.dataset.filter;
        filterCards();
    });
});
</script>

<?php include dirname(__DIR__) . '/footer.php'; ?>
