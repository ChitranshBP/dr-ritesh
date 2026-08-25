# depression-relief-nj — conversion landing page

Standalone, self-contained landing page for paid traffic (Google Ads / Meta).
Nothing outside this folder is required — all images live in `assets/img/`.

```
depression-relief-nj/
├── index.html        # the landing page (inline CSS + JS, no build step, no CDN)
├── thank-you.html    # post-submit page, fires the Ads + Meta conversion
├── assets/img/       # every image the page uses (~1.3 MB total)
├── .htaccess         # DirectoryIndex, image caching, hides this README
└── README.md
```

## Deploying to Hostinger

Upload the whole folder to `public_html/depression-relief-nj/` (hPanel File Manager
or FTP). Keep the structure exactly as-is — `index.html` resolves its images
root-absolutely (`/depression-relief-nj/assets/img/...`), so they resolve the same
whether the page is reached as `/depression-relief-nj`, `/depression-relief-nj/` or
`/depression-relief-nj/index.html`. The folder name is therefore part of the paths —
if you ever rename it, run a find-and-replace on `/depression-relief-nj/` in both
HTML files. Opening `index.html` straight off disk still works: a small script
rewrites those paths to relative when the protocol is `file:`.

Live URL: `https://drriteshamin.com/depression-relief-nj/`

The folder's own `.htaccess` sets `DirectoryIndex index.html`, long-caches the
images, and blocks this README from being served. It inherits the site-wide HTTPS
and clean-URL rules from the root `.htaccess`; none of those rules rewrite anything
inside this folder.

## Before you run traffic — one required step

The form POSTs to Formester (`forms/NequiaG3F`). Formester controls the post-submit
redirect, so open that form's settings and point the redirect URL to:

```
https://drriteshamin.com/depression-relief-nj/thank-you.html
```

Without it, leads still arrive but the visitor lands on Formester's own page instead
of your thank-you page.

## Analytics

None. Google Tag Manager, the Google Ads tag and the Meta Pixel have all been
removed from both pages — there are no third-party trackers left. The only external
requests the page makes are Google Fonts and the two Gumlet video embeds.

When you want tracking back, add the snippets to `<head>` in both `index.html` and
`thank-you.html`; the thank-you page is the natural place for a conversion event.

`utm_source`, `utm_medium`, `utm_campaign` and `gclid` are still captured from the
URL, persisted in `sessionStorage` and posted as hidden fields, so leads stay
attributable through whatever form provider you use. A `source` field marks the lead
as coming from this LP.

There is a single form, in the hero above the fold. Every other call to action on
the page (header button, section CTAs, sticky mobile bar, final CTA) scrolls back
up to it.

## Video testimonials

The two patient-story videos are the same Gumlet embeds used on the homepage:

| | Gumlet ID |
|---|---|
| Patient story 1 | `69bba3d6554f0fb510f67044` |
| Patient story 2 | `69bba3d6baa7d9f8a4d6f9eb` |

They render as muted, non-interactive thumbnails and open in an autoplay modal on
click. To swap or add one, change `data-gumlet` on the `.vt-card` element.

## Notes

- Content never depends on JavaScript to be visible. The entrance animation only
  nudges a section 18px into place and is applied solely when an inline head script
  confirms JS is running — so a blocked, slow or broken script can never leave a
  section (or its images) invisible.
- The page is `noindex, nofollow` (same as `/get-started/` and `/inquire/`). Remove
  that meta tag in `index.html` if you ever want it in organic search.
- Every photo on the page is a real photograph of the Edison clinic or of Dr. Amin:
  the Magstim suite, Dr. Amin with the machine, Dr. Amin treating a patient, the
  recovery room, the quiet room, the consult room, reception and the building
  atrium. The AI/stock images that shipped on the service pages (spravato-suite,
  ketamine-suite, psychiatric-care) and the vendor TMS photo have been removed
  entirely, including from the hero, which is now a pure gradient.
- The footer carries a Google Maps embed of the Edison office (the same place-ID
  embed used on `contact.php`) plus a "Get directions" link.
- All testimonials are verbatim from the practice's real Google reviews
  (`_reviews-partial.php`); nothing is invented.
- Clinical claims match what the site already states (~70% of TMS patients see
  significant improvement, 15+ years, 500+ patients, 4.9 Google rating).
