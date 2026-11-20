/*
 * Dr. Ritesh Amin cookie consent (same setup as Karma TMS).
 *
 * Load this synchronously as the first script in <head>, before Google Tag
 * Manager, gtag.js or Meta Pixel.
 *
 * - Google tags: Google Consent Mode v2, everything "denied" until the visitor
 *   accepts.
 * - Meta Pixel: pages call fbq('consent', ktConsent.fbq()) before fbq('init');
 *   accepting sends fbq('consent', 'grant').
 * - Microsoft Clarity and any other script: wrap the loader in
 *   ktConsent.onGrant(function () { ... }) so it only runs after acceptance.
 * - Global Privacy Control (GPC) is treated as "Reject" until the visitor
 *   explicitly accepts.
 * - Any element with class "kt-consent-open" reopens the banner.
 */
(function () {
  if (window.ktConsent) return;

  var KEY = 'dra_consent_v1';
  var PRIVACY_URL = '/privacy-policy.php';
  var queue = [];

  function readChoice() {
    try {
      var v = JSON.parse(localStorage.getItem(KEY) || 'null');
      return v && (v.s === 'granted' || v.s === 'denied') ? v.s : null;
    } catch (e) { return null; }
  }
  function saveChoice(s) {
    try { localStorage.setItem(KEY, JSON.stringify({ s: s, t: Date.now() })); } catch (e) {}
  }

  var gpc = navigator.globalPrivacyControl === true;
  var choice = readChoice();
  var granted = choice === 'granted';

  // Google Consent Mode defaults (must run before GTM / gtag config).
  window.dataLayer = window.dataLayer || [];
  if (typeof window.gtag !== 'function') {
    window.gtag = function () { window.dataLayer.push(arguments); };
  }
  var DENIED = { ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied', analytics_storage: 'denied' };
  var GRANTED = { ad_storage: 'granted', ad_user_data: 'granted', ad_personalization: 'granted', analytics_storage: 'granted' };
  window.gtag('consent', 'default', Object.assign({ wait_for_update: 500 }, DENIED));
  window.gtag('set', 'ads_data_redaction', true);
  if (granted) window.gtag('consent', 'update', GRANTED);

  function runQueue() {
    while (queue.length) {
      try { queue.shift()(); } catch (e) {}
    }
  }

  // First-party cookies set by Google Ads/Analytics, Meta Pixel and Clarity.
  var TRACKING_COOKIES = /^(_ga|_ga_.*|_gid|_gat.*|_gcl_.*|_fbp|_fbc|_clck|_clsk)$/;
  function clearTrackingCookies() {
    var host = location.hostname.split('.');
    var domains = [''];
    for (var i = 0; i < host.length - 1; i++) domains.push('; domain=.' + host.slice(i).join('.'));
    document.cookie.split(';').forEach(function (c) {
      var name = c.split('=')[0].trim();
      if (!TRACKING_COOKIES.test(name)) return;
      domains.forEach(function (d) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/' + d;
      });
    });
  }

  function setChoice(s) {
    var wasGranted = granted;
    saveChoice(s);
    choice = s;
    granted = s === 'granted';
    if (granted) {
      window.gtag('consent', 'update', GRANTED);
      if (typeof window.fbq === 'function') {
        window.fbq('consent', 'grant');
        // The PageView sent while consent was revoked was dropped; send it now.
        window.fbq('track', 'PageView');
      }
      runQueue();
    } else {
      window.gtag('consent', 'update', DENIED);
      if (typeof window.fbq === 'function') window.fbq('consent', 'revoke');
      clearTrackingCookies();
      // Scripts that already loaded cannot be unloaded; reload so they stop.
      if (wasGranted) { location.reload(); return; }
    }
    hideBanner();
  }

  window.ktConsent = {
    granted: function () { return granted; },
    fbq: function () { return granted ? 'grant' : 'revoke'; },
    onGrant: function (fn) { if (granted) { try { fn(); } catch (e) {} } else { queue.push(fn); } },
    open: function () { showBanner(); },
    accept: function () { setChoice('granted'); },
    reject: function () { setChoice('denied'); }
  };

  // ---------- Banner UI ----------
  var banner = null;

  var CSS = '' +
    '.kt-cc{position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:560px;margin:0 auto;' +
    'background:#fff;color:#1f2937;border:1px solid #e5e7eb;border-radius:14px;box-shadow:0 18px 50px -12px rgba(0,0,0,.35);' +
    'padding:18px 20px;font:14px/1.55 system-ui,-apple-system,"Segoe UI",sans-serif}' +
    '.kt-cc[hidden]{display:none}' +
    '.kt-cc h2{margin:0 0 6px;font-size:16px;font-weight:600;color:#111827}' +
    '.kt-cc p{margin:0 0 14px;color:#4b5563}' +
    '.kt-cc a{color:#256fa8;text-decoration:underline}' +
    '.kt-cc-btns{display:flex;gap:10px;flex-wrap:wrap}' +
    '.kt-cc-btn{flex:1 1 140px;padding:10px 16px;border-radius:10px;font:inherit;font-weight:600;cursor:pointer;' +
    'border:1px solid #256fa8;background:#256fa8;color:#fff}' +
    '.kt-cc-btn:hover{background:#1d5a8a}' +
    '.kt-cc-btn:focus-visible,.kt-cc-pc:focus-visible{outline:3px solid #7cc4f5;outline-offset:2px}' +
    '.kt-cc-gpc{font-size:12.5px;color:#6b7280;margin:-6px 0 12px}' +
    '.kt-cc-pc{position:fixed;left:12px;bottom:12px;z-index:2147482999;background:rgba(255,255,255,.92);color:#256fa8;' +
    'border:1px solid #e5e7eb;border-radius:999px;padding:5px 12px;font:12px/1.4 system-ui,sans-serif;cursor:pointer}';

  function addStyles() {
    if (document.getElementById('kt-cc-style')) return;
    var st = document.createElement('style');
    st.id = 'kt-cc-style';
    st.textContent = CSS;
    document.head.appendChild(st);
  }

  function buildBanner() {
    addStyles();
    banner = document.createElement('div');
    banner.className = 'kt-cc';
    banner.setAttribute('role', 'dialog');
    banner.setAttribute('aria-live', 'polite');
    banner.setAttribute('aria-labelledby', 'kt-cc-title');
    banner.hidden = true;
    banner.innerHTML =
      '<h2 id="kt-cc-title">Your privacy choices</h2>' +
      '<p>We use cookies and similar tools from Google and Meta to understand how our site is used ' +
      'and to measure our advertising. These only run if you accept. Choosing "Reject" also opts you out of the ' +
      'sale or sharing of your personal information. <a href="' + PRIVACY_URL + '">Privacy Policy</a></p>' +
      (gpc ? '<p class="kt-cc-gpc">Your browser\'s Global Privacy Control signal is on, so we treat it as "Reject" unless you accept.</p>' : '') +
      '<div class="kt-cc-btns">' +
      '<button type="button" class="kt-cc-btn" data-kt-cc="reject">Reject</button>' +
      '<button type="button" class="kt-cc-btn" data-kt-cc="accept">Accept</button>' +
      '</div>';
    banner.addEventListener('click', function (e) {
      var a = e.target.getAttribute && e.target.getAttribute('data-kt-cc');
      if (a === 'accept') setChoice('granted');
      if (a === 'reject') setChoice('denied');
    });
    document.body.appendChild(banner);
  }

  function showBanner() {
    if (!document.body) return;
    if (!banner) buildBanner();
    banner.hidden = false;
    var btn = banner.querySelector('[data-kt-cc="accept"]');
    if (btn && document.activeElement && document.activeElement.classList &&
        document.activeElement.classList.contains('kt-consent-open')) btn.focus();
  }
  function hideBanner() { if (banner) banner.hidden = true; }

  function init() {
    if (!granted) clearTrackingCookies();
    document.addEventListener('click', function (e) {
      var el = e.target.closest ? e.target.closest('.kt-consent-open') : null;
      if (!el) return;
      e.preventDefault();
      showBanner();
    });
    // Pages without a footer link get a small floating "Privacy choices" button.
    if (!document.querySelector('.kt-consent-open')) {
      addStyles();
      var pc = document.createElement('button');
      pc.type = 'button';
      pc.className = 'kt-cc-pc kt-consent-open';
      pc.textContent = 'Privacy choices';
      document.body.appendChild(pc);
    }
    // First visit: ask. GPC with no saved choice counts as "Reject", so no banner.
    if (!choice && !gpc) showBanner();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
