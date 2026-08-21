<!-- Patient Stories — self-contained testimonial slider (styles + behaviour included) -->
<style>
    /* base card styles — kept here so the partial drops into any page */
    .review-card { background: #fff; border-radius: 1rem; padding: 2rem; border: 1px solid rgba(37,111,168,0.06); box-shadow: 0 4px 20px rgba(11,25,44,0.04); transition: all 0.35s ease; position: relative; overflow: hidden; }
    .review-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(11,25,44,0.08); }
    .review-card::before { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--color-gold), var(--color-gold-light), transparent); opacity: 0; transition: opacity 0.35s ease; }
    .review-card:hover::before { opacity: 1; }
    .review-card.featured { background: var(--color-midnight); border-color: rgba(37,111,168,0.25); } .review-card.featured::before { opacity: 1; }
    .review-card.featured .review-name { color: #fff; } .review-card.featured .review-condition { color: rgba(255,255,255,0.45); } .review-card.featured .review-text { color: rgba(255,255,255,0.70); } .review-card.featured .review-stars { color: var(--color-gold-light); }
    .review-card.featured .review-avatar { background: rgba(37,111,168,0.25); border-color: rgba(37,111,168,0.4); color: var(--color-gold-light); }
    .review-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
    .review-avatar { width: 46px; height: 46px; min-width: 46px; border-radius: 50%; background: rgba(37,111,168,0.08); border: 2px solid rgba(37,111,168,0.15); color: var(--color-gold); display: flex; align-items: center; justify-content: center; font-family: var(--font-serif); font-weight: 700; font-size: 1.15rem; }
    .review-name { font-family: var(--font-serif); font-size: 1.15rem; color: var(--color-midnight); margin: 0 0 0.15rem; font-weight: 700; } .review-condition { font-size: 0.8rem; color: rgba(11,25,44,0.6); display: block; font-weight: 500; } .review-stars { color: var(--color-gold); font-size: 1.1rem; letter-spacing: 2px; margin-left: auto; }
    .review-text { font-size: 0.95rem; color: #4b5563; line-height: 1.7; margin-bottom: 1.5rem; position: relative; z-index: 1; }
    .review-quote-icon { font-family: var(--font-serif); font-size: 3.5rem; color: rgba(37,111,168,0.08); position: absolute; top: -1.75rem; left: -0.5rem; z-index: -1; line-height: 1; }
    .review-verified { display: flex; align-items: center; gap: 0.35rem; font-size: 0.7rem; font-weight: 500; color: #22c55e; } .review-verified svg { width: 14px; height: 14px; }

    /* slider */
    .rev-slider { position: relative; }
    .rev-track { display: flex; align-items: stretch; gap: 1.5rem; overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth; padding: 0.5rem 0; margin: -0.5rem 0; scrollbar-width: none; -ms-overflow-style: none; }
    .rev-track::-webkit-scrollbar { display: none; }
    .rev-track:focus-visible { outline: 2px solid var(--color-gold); outline-offset: 2px; border-radius: 1.25rem; }
    .rev-slide { flex: 0 0 calc(33.3333% - 1rem); scroll-snap-align: start; display: flex; flex-direction: column; }
    .rev-slide .review-text { flex: 0 0 auto; margin-bottom: 1.25rem; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 10; overflow: hidden; }
    @media (max-width: 1099px) { .rev-slide .review-text { -webkit-line-clamp: 8; } }
    .rev-foot { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; margin-top: auto; padding-top: 1rem; border-top: 1px solid rgba(37,111,168,0.08); }
    .rev-google { width: 22px; height: 22px; }
    .rev-slide .review-name { font-size: 1.05rem; }
    .rev-slide .review-stars { font-size: 0.95rem; letter-spacing: 1px; }
    .rev-slide .review-avatar { width: 42px; height: 42px; min-width: 42px; font-size: 1.05rem; }
    .rev-slide .review-header { min-height: 3.5rem; }
    .rev-nav { position: absolute; top: 50%; transform: translateY(-50%); width: 44px; height: 44px; border-radius: 50%; background: #fff; border: 1px solid rgba(37,111,168,0.15); color: var(--color-gold); display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 18px rgba(11,25,44,0.10); cursor: pointer; z-index: 3; transition: all 0.25s ease; }
    .rev-nav svg { width: 20px; height: 20px; }
    .rev-nav:hover:not(:disabled) { background: var(--color-gold); border-color: var(--color-gold); color: #fff; }
    .rev-nav:disabled { opacity: 0.3; cursor: default; box-shadow: none; }
    .rev-prev { left: -22px; } .rev-next { right: -22px; }
    .rev-dots { display: flex; justify-content: center; align-items: center; gap: 0.5rem; margin-top: 2rem; }
    .rev-dot { width: 8px; height: 8px; padding: 0; border: 0; border-radius: 999px; background: rgba(11,25,44,0.18); cursor: pointer; transition: all 0.25s ease; }
    .rev-dot:hover { background: rgba(37,111,168,0.5); }
    .rev-dot.is-active { width: 26px; background: var(--color-gold); }
    @media (max-width: 1099px) { .rev-slide { flex: 0 0 calc(50% - 0.75rem); } }
    @media (max-width: 767px) { .rev-slide { flex: 0 0 100%; } }
    /* arrows only where they fit outside the cards; dots + swipe below that */
    @media (max-width: 1183px) { .rev-nav { display: none; } }
    @media (prefers-reduced-motion: reduce) { .rev-track { scroll-behavior: auto; } }
</style>

    <!-- Patient Stories -->
    <section class="py-14 md:py-20 bg-beige-dark" id="patient-stories">
        <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false"><symbol id="rev-google" viewBox="0 0 48 48"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></symbol></svg>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="section-header center reveal mb-12">
                <span class="eyebrow">Patient Stories</span>
                <h2 class="section-title text-midnight font-serif font-bold">Real People, Real Results</h2>
                <p class="section-subtitle text-gray-600 md:max-w-[46rem]">Hear from patients whose lives were transformed through Dr. Amin's care.</p>
            </div>
            <div class="rev-slider reveal delay-1">
                <button type="button" class="rev-nav rev-prev" aria-label="Previous testimonials" aria-controls="revTrack"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg></button>
                <div class="rev-track" id="revTrack" tabindex="0" role="region" aria-roledescription="carousel" aria-label="Patient testimonials">
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Marietta Baranca">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">M</div>
                            <div>
                                <h3 class="review-name">Marietta Baranca</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            I've been dealing with depression and PTSD for years and Dr. Amin's TMS Therapy has honestly saved my life. I'm someone who does not respond well to depression medication, so TMS was a godsend for me. I went from crying for no reason almost every day to feeling more stable and even optimistic. Dr. Amin is really invested in my mental health and Charlie, the TMS technician, is very helpful in making the treatments go by quickly and swiftly. I don't even want to imagine what my life would have been like without these treatments these past few years.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Ganesh">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">G</div>
                            <div>
                                <h3 class="review-name">Ganesh</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Dr Amin helped me a lot with my persistent depression, anxiety and attention deficit issues. He is excellent at establishing a good relationship with the patient and helped understand more about these conditions and what he was looking to achieve through the treatment. Would highly recommend him.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Kavita Ingle">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">K</div>
                            <div>
                                <h3 class="review-name">Kavita Ingle</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Amazing experience with Dr. Amin. He helped me get out of my anxiety in just 2 months. He is very responsive, follows up personally, and is always available when you need to talk. Highly recommended! I had a wonderful experience with Nurse Melissa. She genuinely cares about her patients, and it shows in how she handles them. Thank You Dr Amin.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Jeanne Hambrecht">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">J</div>
                            <div>
                                <h3 class="review-name">Jeanne Hambrecht</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            I've been experiencing night terrors for a few years. I called Dr Amin immediately and he called me back right away. He told me he could help me. He came up with a medical plan with his diagnosis and that's what we're doing now. Dr. Amin is not aggressive and started very cautious with treatment because of my family history. Dr. Amin calls me to follow up on how I'm feeling. I highly recommend his practice. They answer in a timely manner. Everyone is very nice.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Athena Xipolias">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">A</div>
                            <div>
                                <h3 class="review-name">Athena Xipolias</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Dr. Amin saved me from my horrible OCD. Thank god for him. I originally went to him for a second opinion. I decided to take a leap of faith and start TMS after I had a bad OCD episode. It was rough in the beginning when I first started TMS but I persevered my way through and I'm so glad I did. I'm just about half way through and I see so many benefits already. I have my life back. I feel such relief — I can rationalize my thoughts and emotions so much better now. Overall I'm a better person. Thank you x1000 Dr. Amin!!!
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Kathryn Mahaney">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">K</div>
                            <div>
                                <h3 class="review-name">Kathryn Mahaney</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            With professionalism and empathy, Dr Amin and Dr R. Truly are a rarity in today's world of Psychiatry. Incredibly knowledgeable and they are excellent patient advocates. Highly Recommend!
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Syeda Shebah Ali">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">S</div>
                            <div>
                                <h3 class="review-name">Syeda Shebah Ali</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Before becoming a patient of Dr. Amin, I was experiencing persistent cognitive fog, chronic depression, and generalized anxiety that significantly impacted my ability to function day to day. Since implementing Dr. Amin's comprehensive recommendations, my cognitive clarity has returned, my mood has stabilized, and I now have the energy and confidence to manage daily tasks and engage in social environments without fear. Dr. Amin's thoughtful and integrative approach to treatment has been transformative. His attention to detail and commitment to addressing root causes — rather than just symptoms — has helped me reclaim both my functionality and quality of life. I am truly grateful for the care I've received.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Deolinda Amaral">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">D</div>
                            <div>
                                <h3 class="review-name">Deolinda Amaral</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Thank you for the help. After the stroke, my husband improved in his speech, walking and memory with TMS for his Depression. Best doctor ever.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Punam Patel">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">P</div>
                            <div>
                                <h3 class="review-name">Punam Patel</h3>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Dr Singh and Dr Amin are phenomenal. They go above and beyond for their patients.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Sharon Page">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">S</div>
                            <div>
                                <h3 class="review-name">Sharon Page</h3>
                            <span class="review-condition">Local Guide · 15 reviews</span>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            I have been a patient with NJ Healthy Minds for the past couple of years, and choosing them has been one of the best decisions I've made for myself. Everyone I've encountered has been kind, compassionate, supportive, and consistent. The passion and care they show truly reflect their purpose and the positive impact they make in people's lives every day. I am not the same person I was when I first came to them. Their support has made a tremendous difference in my life, and for that I am deeply grateful. Dr Amin & staff, you rock.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                    <article class="review-card rev-slide" role="group" aria-roledescription="testimonial" aria-label="Ann Rappaport">
                        <div class="review-header">
                            <div class="review-avatar" aria-hidden="true">A</div>
                            <div>
                                <h3 class="review-name">Ann Rappaport</h3>
                            <span class="review-condition">Local Guide · 33 reviews</span>
                            </div>
                            <div class="review-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        </div>
                        <div class="review-text">
                            <span class="review-quote-icon" aria-hidden="true">"</span>
                            Dr Amin is a very caring doctor. He helped me regain my peace via TMS therapy. He took whatever time was required to explain in detail what to expect. Unlike most in his field, he returns calls with urgency. I love having him as my doctor.
                        </div>
                        <div class="rev-foot">
                            <svg class="rev-google" viewBox="0 0 48 48" aria-hidden="true"><use href="#rev-google"/></svg>
                            <div class="review-verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Google Review
                            </div>
                        </div>
                    </article>
                </div>
                <button type="button" class="rev-nav rev-next" aria-label="Next testimonials" aria-controls="revTrack"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg></button>
            </div>
            <div class="rev-dots" id="revDots" role="tablist" aria-label="Choose testimonial slide"></div>
            <p class="text-center mt-8 reveal">
                <a href="/reviews.php" class="inline-flex items-center gap-2 text-gold font-semibold hover:text-midnight transition-colors">
                    Read all patient reviews
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </p>
        </div>
    </section>

<script>
(function () {
    function initReviewSlider() {
            // Patient stories slider
            (function () {
                var track = document.getElementById('revTrack');
                if (!track) return;
                var dotsWrap = document.getElementById('revDots');
                var slides = Array.prototype.slice.call(track.querySelectorAll('.rev-slide'));
                var prev = document.querySelector('.rev-prev');
                var next = document.querySelector('.rev-next');
                if (!slides.length) return;

                function perView() {
                    var w = window.innerWidth;
                    return w <= 767 ? 1 : (w <= 1099 ? 2 : 3);
                }
                function step() {
                    var gap = parseFloat(getComputedStyle(track).columnGap) || 0;
                    return perView() * (slides[0].getBoundingClientRect().width + gap);
                }
                function pageCount() { return Math.ceil(slides.length / perView()); }
                function activePage() { return Math.min(pageCount() - 1, Math.round(track.scrollLeft / step())); }

                function buildDots() {
                    dotsWrap.innerHTML = '';
                    for (var i = 0; i < pageCount(); i++) {
                        var d = document.createElement('button');
                        d.type = 'button';
                        d.className = 'rev-dot';
                        d.setAttribute('role', 'tab');
                        d.setAttribute('aria-label', 'Go to testimonial slide ' + (i + 1));
                        d.addEventListener('click', (function (n) {
                            return function () { track.scrollTo({ left: n * step(), behavior: 'smooth' }); };
                        })(i));
                        dotsWrap.appendChild(d);
                    }
                    sync();
                }
                function sync() {
                    var max = track.scrollWidth - track.clientWidth;
                    var i = activePage();
                    Array.prototype.forEach.call(dotsWrap.children, function (d, n) {
                        d.classList.toggle('is-active', n === i);
                        d.setAttribute('aria-selected', n === i ? 'true' : 'false');
                    });
                    prev.disabled = track.scrollLeft <= 8;
                    next.disabled = track.scrollLeft >= max - 8;
                }

                prev.addEventListener('click', function () { track.scrollBy({ left: -step(), behavior: 'smooth' }); });
                next.addEventListener('click', function () { track.scrollBy({ left: step(), behavior: 'smooth' }); });
                track.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowRight') { e.preventDefault(); next.click(); }
                    if (e.key === 'ArrowLeft') { e.preventDefault(); prev.click(); }
                });

                track.addEventListener('scroll', sync);
                var lastPer = perView();
                window.addEventListener('resize', function () {
                    if (perView() !== lastPer) { lastPer = perView(); track.scrollLeft = 0; buildDots(); }
                    else { sync(); }
                });
                buildDots();
            })();
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initReviewSlider);
    } else {
        initReviewSlider();
    }
})();
</script>
