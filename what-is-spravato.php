<?php
// Meta Information
$page_title = 'What is Spravato® (Esketamine)? | Edison, NJ';
$page_desc = 'Learn how Spravato (Esketamine) nasal spray provides rapid-acting relief for treatment-resistant depression in Edison, NJ. FDA-approved and covered by most insurance.';

// Hero Banner Data
$eyebrow = 'A New Era in Depression Treatment';
$hero_title = 'FDA-Approved Spravato® for <br><span>Treatment-Resistant</span> Depression';
$hero_subtitle = 'Spravato (esketamine) is a breakthrough nasal spray treatment that works differently than traditional antidepressants to provide relief where others haven\'t.';
$hero_image = 'assets/images/spravato_hero.png';

// Introduction Section
$intro_title = 'Breaking Through Chronic Depression';
$intro_paragraphs = [
    'For many, traditional oral antidepressants simply aren\'t enough. When two or more medications have failed to provide relief, you may be suffering from Treatment-Resistant Depression (TRD). Spravato® (esketamine) offers a revolutionary new path forward.',
    'Spravato is the first FDA-approved nasal spray for TRD. Unlike traditional antidepressants that target serotonin or norepinephrine, Spravato targets the glutamate system to rapidly repair damaged neural connections and restore brain function.'
];
$intro_image = 'assets/images/spravato_intro.png';

// Key Benefits Grid
$key_benefits = [
    [
        'title' => 'Rapid Relief',
        'desc' => 'Many patients experience a significant reduction in depressive symptoms within hours or days, rather than weeks.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>'
    ],
    [
        'title' => 'Targets Glutamate',
        'desc' => 'Works on the brain\'s most abundant neurotransmitter to rebuild synapses directly.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>'
    ],
    [
        'title' => 'Clinical Supervision',
        'desc' => 'Administered in our safe, comfortable clinic under professional medical monitoring for your peace of mind.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'
    ],
    [
        'title' => 'Insurance Covered',
        'desc' => 'Spravato is covered by most major insurance plans, including Medicare, for eligible patients with TRD.',
        'icon_svg' => '<svg viewBox="0 0 24 24" fill="none" class="w-6 h-6" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
    ]
];

// Custom Comparison Table (Spravato vs Traditional Antidepressants)
$custom_table_title = 'Spravato vs. Traditional Antidepressants';
$custom_table_headers = ['Feature', 'Traditional Oral Meds', 'Spravato® Therapy'];
$custom_table_rows = [
    ['Speed of Action', '4-6 weeks to feel effect', 'Results often seen in 24-48 hours'],
    ['Mechanism', 'Serotonin/Norepinephrine', 'Glutamate System (NMDA Receptor)'],
    ['Administration', 'Daily pill at home', 'Administered twice weekly in-clinic'],
    ['Success Rate', 'Decreases with each failed med', 'Effective for treatment-resistant cases'],
    ['Neuroplasticity', 'Indirect/Secondary', 'Directly promotes neural growth']
];

// Dynamic FAQ Section
$faqs = [
    [
        'question' => 'What does a Spravato treatment session look like?',
        'answer' => 'You will self-administer the nasal spray in our office under the supervision of a healthcare provider. You\'ll then stay in a comfortable, private room for about two hours for monitoring while the medication takes effect.'
    ],
    [
        'question' => 'Is Spravato the same as Ketamine?',
        'answer' => 'Spravato (esketamine) is a chemical cousin of ketamine. It is FDA-approved specifically for depression and is administered through a nasal spray, whereas clinical ketamine is usually given via IV infusion.'
    ],
    [
        'question' => 'Will I be able to drive after the session?',
        'answer' => 'No. Because of potential sedation or dissociation, you must arrange for a ride home and should not drive or operate heavy machinery until the next day.'
    ],
    [
        'question' => 'How many sessions will I need?',
        'answer' => 'Typically, patients start with sessions twice a week for the first month, then transition to once a week for the second month, followed by a maintenance schedule tailored to your needs.'
    ]
];

// Include the master service template
include 'service-template.php';
?>
