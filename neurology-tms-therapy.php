<?php
// Meta Information
$page_title = 'TMS Therapy for Neurological Disorders in Edison, NJ | Dr. Ritesh Amin';
$page_desc = 'Advanced, non-invasive Transcranial Magnetic Stimulation (TMS) therapy for complex neurological conditions including Stroke, Movement Disorders, and TBI in Edison, NJ.';

// Hero Banner Data
$eyebrow = 'Neurology & Brain Stimulation';
$hero_title = 'Advanced TMS for Neurological Disorders';
$hero_subtitle = 'Harnessing the power of precision neuromodulation to promote neuroplasticity, restore function, and improve quality of life for patients with complex neurological conditions.';
$hero_image = 'assets/images/tms_neurology_hero.png'; // We will generate this next

// Introduction Section
$intro_title = 'Redefining Neurological Recovery';
$intro_paragraphs = [
    'Traditional neurological treatments often rely heavily on systemic medications that can cause widespread side effects. For many patients dealing with the aftermath of a stroke, traumatic brain injuries, or movement disorders, progress can plateau, leaving them searching for alternative solutions.',
    'Transcranial Magnetic Stimulation (TMS) is emerging as a groundbreaking intervention in neurology. By delivering highly focused magnetic pulses to specific motor and cognitive centers of the brain, TMS directly stimulates neural pathways, encouraging the brain\'s natural ability to rewire and heal itself (neuroplasticity).',
    'Dr. Ritesh Amin utilizes cutting-edge TMS protocols to target specialized neurological conditions. This non-invasive, outpatient therapy offers new hope for patients seeking to regain motor function, reduce neuro-inflammation, and manage chronic neurological symptoms.'
];
$intro_image = 'assets/images/tms_neurology_intro.png';

// Key Benefits Grid
$benefits_title = 'Why Choose TMS for Neurologic Conditions';
$benefits = [
    [
        'icon' => '<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>', // generic icon
        'title' => 'Promotes Neuroplasticity',
        'desc' => 'Directly stimulates neural circuits to help the brain build new connections and bypass damaged areas.'
    ],
    [
        'icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
        'title' => 'Non-Invasive & Drug-Free',
        'desc' => 'A highly targeted approach that avoids the systemic side effects common with high-dose neurological medications.'
    ],
    [
        'icon' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
        'title' => 'Zero Downtime',
        'desc' => 'An outpatient procedure that allows patients to immediately return to physical therapy or daily activities.'
    ],
    [
        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'Synergistic Effects',
        'desc' => 'Highly effective when combined with traditional physical, occupational, and speech therapies to accelerate recovery.'
    ]
];

// Light Theme: TMS vs Medication Validation
$tms_vs_meds = true;
$tms_vs_meds_title = 'The Neuromodulation Advantage';
$tms_vs_meds_subtitle = 'While medications manage symptoms systemically, TMS targets the source of neurological dysfunction directly.';
$tms_vs_meds_features = [
    ['name' => 'Mechanism', 'tms' => 'Direct Neural Stimulation', 'meds' => 'Systemic Chemical Alteration'],
    ['name' => 'Side Effects', 'tms' => 'Minimal (Mild scalp tingling)', 'meds' => 'Extensive (Fatigue, dizziness, etc.)'],
    ['name' => 'Targeting', 'tms' => 'Millimeter Precision', 'meds' => 'Whole-Body Distribution'],
    ['name' => 'Goal', 'tms' => 'Long-term Neuroplasticity', 'meds' => 'Temporary Symptom Suppression']
];

// Dynamic FAQ Section
$faqs = [
    [
        'question' => 'What neurological conditions can TMS treat?',
        'answer' => 'While initially approved for depression, TMS is utilized off-label and in cutting-edge clinical protocols for conditions such as Traumatic Brain Injury (TBI), Stroke Recovery, Functional Neurological Disorders (FND), and certain movement disorders. Dr. Amin conducts a thorough evaluation to determine if TMS is appropriate for your specific neurological profile.'
    ],
    [
        'question' => 'Does TMS replace my physical therapy?',
        'answer' => 'No, TMS works best as an augmentative therapy. By "priming" the brain with magnetic stimulation, patients often find they get much better results and faster progress from their concurrent physical, occupational, or speech therapies.'
    ],
    [
        'question' => 'Is neuro-TMS safe after a stroke?',
        'answer' => 'Yes, TMS has been extensively studied for stroke recovery, particularly for motor weakness and aphasia. It is considered safe and well-tolerated, though a full medical clearance is required to ensure there are no contraindications (like certain implanted metallic devices in the head).'
    ],
    [
        'question' => 'How many sessions are required for neurological recovery?',
        'answer' => 'Neurological protocols vary significantly depending on the condition being treated. While standard psychiatric protocols are usually 36 sessions, neurological recovery protocols are highly individualized. Dr. Amin will design a custom treatment schedule during your consultation.'
    ]
];

// Include the master service template
include 'service-template.php'; 
?>
