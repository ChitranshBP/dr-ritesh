/* Cookie consent banner (opt-out model).
   Tracking (GA, Google Ads, GTM, Meta Pixel) runs by default. Choosing
   "Decline" stores the choice, switches Google Consent Mode to denied,
   revokes Meta Pixel consent and clears existing tracking cookies. The
   stored choice is applied on later page loads by the inline snippet in
   the <head> (see header.php), before any tracker loads.
   Any element with [data-cookie-settings] reopens the banner. */
(function () {
    var KEY = 'cookie_consent';

    function getChoice() {
        try { return localStorage.getItem(KEY); } catch (e) { return null; }
    }

    function setChoice(value) {
        try { localStorage.setItem(KEY, value); } catch (e) {}
    }

    function applyConsent(granted) {
        var state = granted ? 'granted' : 'denied';
        if (typeof window.gtag === 'function') {
            gtag('consent', 'update', {
                ad_storage: state,
                ad_user_data: state,
                ad_personalization: state,
                analytics_storage: state
            });
        }
        if (typeof window.fbq === 'function') {
            fbq('consent', granted ? 'grant' : 'revoke');
        }
        if (!granted) clearTrackingCookies();
    }

    function clearTrackingCookies() {
        var host = location.hostname.replace(/^www\./, '');
        document.cookie.split(';').forEach(function (c) {
            var name = c.split('=')[0].trim();
            if (/^(_ga|_gid|_gat|_gcl|_fbp|_fbc)/.test(name)) {
                ['', '; domain=' + host, '; domain=.' + host].forEach(function (d) {
                    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/' + d;
                });
            }
        });
    }

    var CSS = '' +
        '#cookie-banner{position:fixed;left:16px;right:16px;bottom:16px;z-index:9999;max-width:560px;' +
        'margin:0 auto;background:#112240;color:#f1f5f9;border-radius:12px;padding:20px 22px;' +
        'box-shadow:0 12px 40px rgba(0,0,0,.3);font:400 14px/1.55 system-ui,-apple-system,"Segoe UI",sans-serif;' +
        'transform:translateY(20px);opacity:0;transition:transform .3s ease,opacity .3s ease}' +
        '#cookie-banner.cb-show{transform:none;opacity:1}' +
        '#cookie-banner p{margin:0 0 14px;color:rgba(241,245,249,.85)}' +
        '#cookie-banner strong{display:block;color:#fff;font-size:15px;margin-bottom:4px}' +
        '#cookie-banner a{color:#7cc4f5;text-decoration:underline}' +
        '#cookie-banner .cb-actions{display:flex;gap:10px;justify-content:flex-end;flex-wrap:wrap}' +
        '#cookie-banner button{cursor:pointer;border-radius:8px;padding:9px 20px;font-family:inherit;font-size:14px;' +
        'font-weight:600;line-height:1;border:1px solid transparent;transition:background .2s,border-color .2s}' +
        '#cookie-banner .cb-decline{background:transparent;color:#f1f5f9;border-color:rgba(241,245,249,.35)}' +
        '#cookie-banner .cb-decline:hover{border-color:#f1f5f9}' +
        '#cookie-banner .cb-accept{background:#256fa8;color:#fff}' +
        '#cookie-banner .cb-accept:hover{background:#1d5a8a}' +
        '@media (max-width:480px){#cookie-banner .cb-actions button{flex:1}}';

    var banner;

    function build() {
        var style = document.createElement('style');
        style.textContent = CSS;
        document.head.appendChild(style);

        banner = document.createElement('div');
        banner.id = 'cookie-banner';
        banner.setAttribute('role', 'dialog');
        banner.setAttribute('aria-live', 'polite');
        banner.setAttribute('aria-label', 'Cookie consent');
        banner.innerHTML =
            '<p><strong>We use cookies</strong>' +
            'This site uses cookies for analytics and advertising to improve your experience and measure our outreach. ' +
            'You can decline non-essential cookies at any time. See our <a href="/privacy-policy.php">Privacy Policy</a>.</p>' +
            '<div class="cb-actions">' +
            '<button type="button" class="cb-decline">Decline</button>' +
            '<button type="button" class="cb-accept">Accept</button>' +
            '</div>';
        document.body.appendChild(banner);

        banner.querySelector('.cb-accept').addEventListener('click', function () { choose(true); });
        banner.querySelector('.cb-decline').addEventListener('click', function () { choose(false); });
    }

    function show() {
        if (!banner) build();
        banner.style.display = '';
        requestAnimationFrame(function () { banner.classList.add('cb-show'); });
    }

    function hide() {
        banner.classList.remove('cb-show');
        setTimeout(function () { banner.style.display = 'none'; }, 300);
    }

    function choose(granted) {
        setChoice(granted ? 'granted' : 'denied');
        applyConsent(granted);
        hide();
    }

    function init() {
        if (!getChoice()) show();
        document.addEventListener('click', function (e) {
            var trigger = e.target.closest && e.target.closest('[data-cookie-settings]');
            if (!trigger) return;
            e.preventDefault();
            show();
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
