import os

replacements = [
    (
        'Book a Consultation',
        'Book a Consultation'
    ),
    (
        'Comprehensive brain stimulation <span class="text-gold-light">and psychiatric care tailored to your unique needs.</span>',
        'Comprehensive brain stimulation <span class="text-gold-light">and psychiatric care tailored to your unique needs.</span>'
    ),
    (
        'Schedule your consultation today and take the first step toward lasting relief.',
        'Schedule your consultation today and take the first step toward lasting relief.'
    )
]

why_choose_old = """            <div class="trust-grid reveal delay-1">
                <div class="trust-card">
                    <span class="trust-card-num">01</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <h3>Board-Certified Neurologist</h3>
                    <p>Dr. Amin is board-certified by the American Board of Psychiatry and Neurology with specialized training in neuromodulation.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">02</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                    <h3>FDA-Cleared TMS Technology</h3>
                    <p>We use the latest FDA-cleared TMS devices to ensure safe, effective, and precise brain stimulation treatments.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">03</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg></div>
                    <h3>Personalized Treatment Plans</h3>
                    <p>Every treatment plan is customized based on your unique brain activity, symptoms, and health goals.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">04</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg></div>
                    <h3>Dual Expertise: Psychiatry &amp; Neurology</h3>
                    <p>Dr. Amin brings a comprehensive understanding of both psychiatric and neurological conditions for integrated care.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">05</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <h3>Serving {name} &amp; Nearby Areas</h3>
                    <p>Our Edison clinic is conveniently located and easily accessible for patients throughout central New Jersey.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">06</span>
                    <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <h3>Insurance Assistance Available</h3>
                    <p>Our team verifies your insurance coverage and handles prior authorizations so you can focus on healing.</p>
                </div>
            </div>"""

why_choose_new = """            <div class="trust-grid reveal delay-1">
                <div class="trust-card">
                    <span class="trust-card-num">01</span>
                    <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">health_and_safety</span></div>
                    <h3>Board-Certified Neurologist</h3>
                    <p>Dr. Amin is board-certified by the American Board of Psychiatry and Neurology with specialized training in neuromodulation.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">02</span>
                    <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">bolt</span></div>
                    <h3>FDA-Cleared TMS Technology</h3>
                    <p>We use the latest FDA-cleared TMS devices to ensure safe, effective, and precise brain stimulation treatments.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">03</span>
                    <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">tune</span></div>
                    <h3>Personalized Treatment Plans</h3>
                    <p>Every treatment plan is customized based on your unique brain activity, symptoms, and health goals.</p>
                </div>
                <div class="trust-card">
                    <span class="trust-card-num">04</span>
                    <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">favorite_border</span></div>
                    <h3>Dual Expertise: Psychiatry &amp; Neurology</h3>
                    <p>Dr. Amin brings a comprehensive understanding of both psychiatric and neurological conditions for integrated care.</p>
                </div>
            </div>"""

index_why_choose_old = """        <div class="trust-grid">
            <div class="trust-card reveal">
                <span class="trust-card-num">01</span>
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3>Board Certified</h3>
                <p>Expert psychiatric care backed by rigorous training and certification.</p>
            </div>
            <div class="trust-card reveal delay-1">
                <span class="trust-card-num">02</span>
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3>Advanced TMS</h3>
                <p>Offering the latest in non-invasive, drug-free depression treatment.</p>
            </div>
            <div class="trust-card reveal delay-2">
                <span class="trust-card-num">03</span>
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                </div>
                <h3>Personalized Plans</h3>
                <p>Tailored treatment approaches designed specifically for your unique needs.</p>
            </div>
            <div class="trust-card reveal delay-3">
                <span class="trust-card-num">04</span>
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h3>Compassionate Care</h3>
                <p>A safe, supportive environment focused entirely on your well-being.</p>
            </div>
        </div>"""

index_why_choose_new = """        <div class="trust-grid">
            <div class="trust-card reveal">
                <span class="trust-card-num">01</span>
                <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">health_and_safety</span></div>
                <h3>Board-Certified Neurologist</h3>
                <p>Dr. Amin is board-certified by the American Board of Psychiatry and Neurology with specialized training in neuromodulation.</p>
            </div>
            <div class="trust-card reveal delay-1">
                <span class="trust-card-num">02</span>
                <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">bolt</span></div>
                <h3>FDA-Cleared TMS Technology</h3>
                <p>We use the latest FDA-cleared TMS devices to ensure safe, effective, and precise brain stimulation treatments.</p>
            </div>
            <div class="trust-card reveal delay-2">
                <span class="trust-card-num">03</span>
                <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">tune</span></div>
                <h3>Personalized Treatment Plans</h3>
                <p>Every treatment plan is customized based on your unique brain activity, symptoms, and health goals.</p>
            </div>
            <div class="trust-card reveal delay-3">
                <span class="trust-card-num">04</span>
                <div class="trust-icon"><span class="material-icons" style="font-size:2rem; color:var(--color-gold);">favorite_border</span></div>
                <h3>Dual Expertise: Psychiatry &amp; Neurology</h3>
                <p>Dr. Amin brings a comprehensive understanding of both psychiatric and neurological conditions for integrated care.</p>
            </div>
        </div>"""

def process_file(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
    except Exception:
        return

    orig = content
    for old, new in replacements:
        content = content.replace(old, new)
        
    if 'generate_locations.py' in filepath:
        content = content.replace(
            "{city.get('hero_desc', '')}",
            "Residents of {name}, NJ have access to advanced, FDA-cleared Transcranial Magnetic Stimulation (TMS) therapy with Dr. Ritesh Amin. Conveniently located near {name}, our practice provides personalized, non-invasive, medication-free treatment for depression, anxiety, OCD, and select neurological conditions. Our goal is to help patients achieve lasting symptom relief and improve their overall quality of life."
        )
        content = content.replace(why_choose_old, why_choose_new)

    if 'index.php' in filepath or 'index2.php' in filepath:
        content = content.replace(index_why_choose_old, index_why_choose_new)
        
    if orig != content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {filepath}")

for root, dirs, files in os.walk('.'):
    for file in files:
        if file.endswith('.php') or file.endswith('.html') or file.endswith('.py'):
            process_file(os.path.join(root, file))
