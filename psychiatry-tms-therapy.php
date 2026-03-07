<?php
// Meta Information
$page_title = 'TMS Therapy for Psychiatric Disorders in Edison, NJ | Dr. Ritesh Amin';
$page_desc = 'Comprehensive Transcranial Magnetic Stimulation (TMS) therapy for Depression, Anxiety, OCD, and PTSD in Edison, NJ. Discover advanced mental health care.';

// Hero Banner Data
$eyebrow = 'Psychiatry & Neuromodulation';
$hero_title = 'Advanced TMS for Psychiatric Disorders';
$hero_subtitle = 'Evidence-based, non-invasive neuromodulation targeting the root cause of treatment-resistant mood and anxiety disorders to help you reclaim your life.';
$hero_image = 'assets/images/tms_psychiatry_hero.png'; // Will generate

// Introduction Section
$intro_title = 'A New Era in Mental Health Care';
$intro_paragraphs = [
    'For decades, the standard of care in psychiatry has relied heavily on systemic medications and talk therapy. While effective for many, a significant portion of patients experience inadequate relief or intolerable side effects, leading to a frustrating cycle of trial and error.',
    'Transcranial Magnetic Stimulation (TMS) represents a paradigm shift. By using precise magnetic fields to stimulate underactive networks in the brain—such as the prefrontal cortex in depression—TMS offers a targeted, biological intervention without the systemic effects of medication.',
    'At our Edison, NJ clinic, Dr. Ritesh Amin provides specialized TMS protocols for a range of psychiatric conditions, including Major Depressive Disorder (MDD), Generalized Anxiety Disorder (GAD), Obsessive-Compulsive Disorder (OCD), and PTSD. We are committed to offering the most advanced, evidence-based tools available to achieve lasting remission.'
];
$intro_image = 'assets/images/tms_psychiatry_intro.png'; // Will generate

// Key Benefits Grid
$benefits_title = 'The Benefits of Psychiatric Neuromodulation';
$benefits = [
    [
        'icon' => '<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>', // generic, or change to a brain icon
        'title' => 'High Remission Rates',
        'desc' => 'Significantly higher rates of response and remission for patients who have failed multiple medication trials.'
    ],
    [
        'icon' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
        'title' => 'Targeted Treatment',
        'desc' => 'Directly stimulates the specific brain regions implicated in mood regulation, avoiding systemic side effects.'
    ],
    [
        'icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
        'title' => 'Well-Tolerated',
        'desc' => 'No weight gain, no sexual dysfunction, and no cognitive fog—common complaints with oral antidepressants.'
    ],
    [
        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'FDA-Cleared',
        'desc' => 'A rigorously tested protocol cleared by the FDA for treating depression, OCD, and smoking cessation, with broad off-label utility.'
    ]
];

// Light Theme: TMS vs Medication Validation
$tms_vs_meds = true;
$tms_vs_meds_title = 'Targeted Relief vs. Systemic Medications';
$tms_vs_meds_subtitle = 'Compare the focused biological approach of TMS to the broad effects of standard psychiatric medications.';
$tms_vs_meds_features = [
    ['name' => 'Systemic Side Effects', 'tms' => 'None', 'meds' => 'Common (weight gain, nausea, fatigue)'],
    ['name' => 'Cognitive Impact', 'tms' => 'Often improves clarity', 'meds' => 'Can cause "brain fog" or emotional blunting'],
    ['name' => 'Efficacy in TRD', 'tms' => 'High', 'meds' => 'Diminishing returns after first 2 trials'],
    ['name' => 'Treatment Duration', 'tms' => 'Curative intent (weeks)', 'meds' => 'Maintenance intent (years)']
];

// Dynamic FAQ Section
$faqs = [
    [
        'question' => 'How does TMS differ for Depression vs. OCD?',
        'answer' => 'Different psychiatric conditions require stimulating different neural networks. For depression, we typically target the left dorsolateral prefrontal cortex. For OCD, we often target deeper structures like the supplementary motor area or the anterior cingulate cortex, using specialized coils and different pulse frequencies.'
    ],
    [
        'question' => 'Can I continue my current medications during TMS?',
        'answer' => 'Yes. In fact, most patients continue their current psychiatric medications during their TMS course. Dr. Amin will carefully review your medication list, as certain medications can affect your motor threshold, but TMS is safely used as an augmentative therapy.'
    ],
    [
        'question' => 'Is TMS covered by insurance for psychiatric conditions?',
        'answer' => 'TMS for Major Depressive Disorder (MDD) is covered by almost all major commercial insurances and Medicare. Coverage for OCD is rapidly expanding. Off-label treatments for severe Anxiety or PTSD may require self-pay or special prior authorizations. Our billing team will handle all insurance verifications for you.'
    ],
    [
        'question' => 'How long before I notice an improvement in my mood or anxiety?',
        'answer' => 'While responses vary, many patients begin noticing subtle improvements—such as better sleep, increased energy, or "lighter" moods—around the second or third week of daily treatment (sessions 10-15). The most significant changes often occur toward the end of the treatment course.'
    ]
];

// Include the master service template
include 'service-template.php'; 
?>
