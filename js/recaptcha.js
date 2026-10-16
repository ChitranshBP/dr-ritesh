/* reCAPTCHA Enterprise guard: blocks submission of any form containing a
   .g-recaptcha widget until the checkbox has been completed. Runs in the
   capture phase so it fires before each page's own submit handlers. */
(function () {
    function showError(form, msg) {
        var el = form.querySelector('.recaptcha-error');
        if (!el) {
            el = document.createElement('p');
            el.className = 'recaptcha-error';
            el.setAttribute('role', 'alert');
            el.style.cssText = 'color:#ef4444;font-size:0.8rem;margin:0.4rem 0 0.8rem;';
            var widget = form.querySelector('.g-recaptcha');
            widget.parentNode.insertBefore(el, widget.nextSibling);
        }
        el.textContent = msg;
    }

    function clearError(form) {
        var el = form.querySelector('.recaptcha-error');
        if (el) el.textContent = '';
    }

    document.addEventListener('submit', function (e) {
        var form = e.target;
        var widget = form.querySelector('.g-recaptcha');
        if (!widget) return;

        var token = '';
        try {
            token = window.grecaptcha && grecaptcha.enterprise
                ? grecaptcha.enterprise.getResponse()
                : '';
        } catch (err) { token = ''; }

        if (!token) {
            e.preventDefault();
            e.stopImmediatePropagation();
            showError(form, 'Please confirm you are not a robot before submitting.');
            return;
        }
        clearError(form);
    }, true);
})();
