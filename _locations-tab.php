<?php /* Internal "All Locations" tab — included on area pages only. Links to the unlisted /locations.php hub. */ ?>
<a href="/locations.php" class="loc-hub-tab" rel="nofollow" aria-label="View all service locations">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
    <span>All Locations</span>
</a>
<style>
    .loc-hub-tab {
        position: fixed; left: 0; bottom: 2rem; z-index: 999;
        display: inline-flex; align-items: center; gap: .5rem;
        padding: .7rem 1.1rem .7rem .9rem;
        background: var(--color-midnight); color: #fff;
        font-family: inherit; font-size: .8rem; font-weight: 600; letter-spacing: .02em;
        text-decoration: none; border-radius: 0 100px 100px 0;
        box-shadow: 0 8px 24px rgba(11,25,44,.28);
        border: 1px solid rgba(255,255,255,.12); border-left: none;
        transition: background .25s ease, padding .25s ease;
    }
    .loc-hub-tab:hover { background: var(--color-gold); padding-left: 1.25rem; }
    .loc-hub-tab svg { width: 1rem; height: 1rem; color: var(--color-gold-light); }
    .loc-hub-tab:hover svg { color: #fff; }
    @media (max-width: 640px) {
        .loc-hub-tab { bottom: 1.25rem; padding: .7rem; gap: 0; }
        .loc-hub-tab span { display: none; }
    }
</style>
