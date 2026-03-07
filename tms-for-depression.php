<?php
// Meta Information
$page_title = 'TMS Therapy for Depression in Edison, NJ | Dr. Ritesh Amin';
$page_desc = 'FDA-approved Transcranial Magnetic Stimulation (TMS) therapy for Treatment-Resistant Depression in Edison, NJ. A drug-free alternative to traditional antidepressants.';

// Hero Banner Data
$eyebrow = 'Psychiatry & Neuromodulation';
$hero_title = 'TMS Therapy for Depression';
$hero_subtitle = 'A revolutionary, FDA-approved, non-medication approach to achieving remission from Major Depressive Disorder (MDD) and Treatment-Resistant Depression (TRD).';
$hero_image = 'assets/images/tms_depression_hero_custom.png'; 

// Introduction Section
$intro_title = 'Breaking Free from the Cycle of Depression';
$intro_paragraphs = [
    'For millions of Americans, traditional oral antidepressants simply aren\'t enough. Often, medication comes with unbearable side effects like weight gain, severe fatigue, or emotional blunting, while only providing partial relief from depressive symptoms.',
    'Transcranial Magnetic Stimulation (TMS) therapy changes the paradigm. Instead of introducing systemic chemicals into the body, TMS uses highly targeted, MRI-strength magnetic pulses to awaken the specific areas of the brain associated with mood regulation—most notably, the prefrontal cortex.',
    'Dr. Ritesh Amin specializes in utilizing advanced TMS technology to help patients in Edison, NJ, and surrounding areas achieve deep, lasting remission from Treatment-Resistant Depression. This outpatient procedure requires no anesthesia, has zero recovery time, and allows you to drive yourself home immediately afterward.'
];
$intro_image = 'assets/images/tms_clinic_banner.png';

// Key Benefits Bento/Grid
$key_benefits = [
    [
        'title' => 'FDA-Approved & Safe',
        'desc' => 'Rigorously tested and cleared by the FDA for the treatment of Major Depressive Disorder with an outstanding safety profile.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
    ],
    [
        'title' => 'No Systemic Side Effects',
        'desc' => 'Free from the weight gain, sexual dysfunction, and grogginess associated with traditional SSRIs and SNRIs.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>'
    ],
    [
        'title' => 'High Remission Rates',
        'desc' => 'Clinical studies show that patients who failed to improve with medication have a significantly higher chance of remission with TMS.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>'
    ]
];

// Show the TMS vs Medication Comparison table?
$tms_vs_meds = true;
$comparison_image = 'assets/images/psychiatry_tms_therapy.png';

// FAQs for this service
$faqs = [
    [
        'question' => 'How long does each TMS session take?',
        'answer' => 'Each session typically lasts between 20 to 40 minutes, depending on the specific protocol prescribed by Dr. Amin. You can read, listen to music, or simply relax during treatment.'
    ],
    [
        'question' => 'Does TMS therapy hurt?',
        'answer' => 'TMS is generally very well tolerated. You will feel a tapping sensation on your scalp where the magnetic coil rests. It is non-invasive, does not require anesthesia, and most patients find it comfortable.'
    ],
    [
        'question' => 'Can I drive myself to and from my TMS appointments?',
        'answer' => 'Yes! Because TMS does not involve sedation, anesthesia, or systemic medication, you are fully alert and can safely drive yourself to and from your appointments with zero downtime.'
    ],
    [
        'question' => 'How soon will I see results from TMS?',
        'answer' => 'While every patient is unique, some begin to notice subtle improvements in their mood, energy levels, or sleep patterns within the first one to two weeks of starting their daily treatments.'
    ]
];

// Render the template
include 'service-template.php'; 
?>
