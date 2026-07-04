const { JSDOM } = require('jsdom');
const html = `
<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="faq-accordion">
    <div class="faq-accordion-item active" data-category="general">
        <div class="faq-accordion-header">
            <span class="faq-accordion-num">01</span>
            <h3 class="faq-accordion-question">What conditions does Dr. Amin treat?</h3>
        </div>
    </div>
    <div class="faq-accordion-item" data-category="general">
        <div class="faq-accordion-header" id="header2">
            <span class="faq-accordion-num">02</span>
            <h3 class="faq-accordion-question">Do I need a referral to see Dr. Amin?</h3>
        </div>
    </div>
</div>
</body>
</html>
`;

const dom = new JSDOM(html);
const document = dom.window.document;

// Simulate the inline script
document.querySelectorAll('.faq-accordion-header').forEach(function(header) {
    header.addEventListener('click', function() {
        var item = this.parentElement;
        var wasActive = item.classList.contains('active');
        var accordion = item.closest('.faq-accordion');
        accordion.querySelectorAll('.faq-accordion-item').forEach(function(sibling) {
            sibling.classList.remove('active');
        });
        if (!wasActive) {
            item.classList.add('active');
        }
    });
});

// Initial state
const item1 = document.querySelector('.faq-accordion-item.active');
console.log("Initial active item: " + item1.querySelector('.faq-accordion-num').textContent);

// Click item 2
const header2 = document.getElementById('header2');
header2.click();

const activeItems = document.querySelectorAll('.faq-accordion-item.active');
console.log("After clicking item 2, active items count: " + activeItems.length);
if (activeItems.length > 0) {
    console.log("Currently active: " + activeItems[0].querySelector('.faq-accordion-num').textContent);
}
