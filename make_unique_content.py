import random
import re

cities = [
    {"name": "Kendall Park", "slug": "kendall-park", "type": "primary"},
    {"name": "Monmouth Junction", "slug": "monmouth-junction", "type": "primary"},
    {"name": "Franklin Park", "slug": "franklin-park", "type": "primary"},
    {"name": "North Brunswick", "slug": "north-brunswick", "type": "primary"},
    {"name": "South Brunswick", "slug": "south-brunswick", "type": "primary"},
    {"name": "Princeton", "slug": "princeton", "type": "primary"},
    {"name": "Princeton Junction", "slug": "princeton-junction", "type": "primary"},
    {"name": "Plainsboro", "slug": "plainsboro", "type": "primary"},
    {"name": "Dayton", "slug": "dayton", "type": "primary"},
    {"name": "Kingston", "slug": "kingston", "type": "primary"},
    {"name": "Rocky Hill", "slug": "rocky-hill", "type": "primary"},
    {"name": "Milltown", "slug": "milltown", "type": "primary"},
    {"name": "East Brunswick", "slug": "east-brunswick", "type": "primary"},
    {"name": "Somerset", "slug": "somerset", "type": "primary"},
    {"name": "New Brunswick", "slug": "new-brunswick", "type": "primary"},
    {"name": "Edison", "slug": "edison", "type": "secondary"},
    {"name": "Piscataway", "slug": "piscataway", "type": "secondary"},
    {"name": "Monroe Township", "slug": "monroe-township", "type": "secondary"},
    {"name": "Cranbury", "slug": "cranbury", "type": "secondary"},
    {"name": "Hillsborough Township", "slug": "hillsborough-township", "type": "secondary"},
    {"name": "Lawrence Township", "slug": "lawrence-township", "type": "secondary"},
    {"name": "West Windsor Township", "slug": "west-windsor-township", "type": "secondary"},
    {"name": "Hamilton Township", "slug": "hamilton-township", "type": "secondary"},
]

hero_templates = [
    "Dr. Ritesh Amin provides FDA-cleared Transcranial Magnetic Stimulation (TMS) therapy to patients in {name}, NJ. Our advanced neuromodulation treatments offer hope for those struggling with depression, anxiety, OCD, PTSD, and a wide range of neurological conditions — all without systemic side effects or downtime.",
    "Residents of {name} have access to state-of-the-art TMS therapy under the expert care of Dr. Ritesh Amin. We specialize in non-invasive, drug-free treatments for major depressive disorder, severe anxiety, and complex neurological issues, helping you reclaim your quality of life.",
    "Discover a path to wellness in {name} with Dr. Ritesh Amin's specialized TMS therapy. By delivering targeted magnetic pulses to the brain, we effectively treat medication-resistant depression and various neurological disorders in a comfortable, outpatient setting.",
    "If you live in {name} and are seeking alternative treatments for mental health or neurological conditions, Dr. Amin's customized TMS therapy protocols offer an FDA-cleared solution. Experience lasting relief without the side effects commonly associated with traditional medications.",
    "Serving the {name} community, Dr. Ritesh Amin brings innovative Transcranial Magnetic Stimulation to patients battling stubborn depression, OCD, and neurological conditions. Our personalized approach ensures each treatment is uniquely tailored for maximum efficacy and comfort.",
    "Patients in {name} can now overcome treatment-resistant mental health challenges through advanced TMS therapy. Dr. Amin utilizes cutting-edge brain stimulation techniques to restore neurological balance safely and effectively, right here in your local area.",
    "Experience a breakthrough in mental health care with Dr. Ritesh Amin in {name}. Our TMS treatments provide a lifeline for individuals dealing with PTSD, treatment-resistant depression, and neurological ailments, utilizing precise magnetic energy to promote healing.",
    "Dr. Amin is proud to offer the residents of {name} access to highly effective, non-invasive TMS therapy. Whether you are dealing with chronic anxiety or a neurological condition, our specialized care plans are designed to help you achieve profound, lasting wellness."
]

about_templates = [
    "With extensive clinical experience, Dr. Amin is dedicated to providing compassionate, evidence-based care to patients in {name} and throughout central New Jersey. His personal philosophy centers around treating the whole person, not just the symptoms, ensuring each patient receives a tailored approach to their mental wellness.",
    "Dr. Amin has built a reputation in the {name} area for his deep commitment to patient recovery and his expertise in advanced neuromodulation. He takes the time to understand each patient's unique history, delivering highly individualized care that addresses the root causes of psychiatric and neurological conditions.",
    "For individuals in {name} seeking a specialized psychiatric approach, Dr. Amin offers unparalleled expertise in Treatment-Resistant Depression. His patient-first philosophy means that your treatment plan is constantly monitored and adapted to ensure you achieve the best possible clinical outcomes.",
    "Recognized for his compassionate care in {name}, Dr. Amin integrates the latest advancements in TMS therapy with a holistic understanding of mental health. He empowers his patients to regain control of their lives through innovative, evidence-based treatment strategies.",
    "Dr. Amin serves the {name} community with a focus on comprehensive psychiatric evaluations and advanced therapeutic interventions. His dedication to clinical excellence ensures that patients facing complex mental health or neurological challenges receive the highest standard of care.",
    "Combining a wealth of medical knowledge with a deeply empathetic approach, Dr. Amin provides patients in {name} with a safe space to heal. He specializes in utilizing modern technologies like TMS to offer alternative solutions when traditional treatments have fallen short."
]

random.seed(42) # For reproducible uniqueness

for i, city in enumerate(cities):
    city['hero_desc'] = hero_templates[i % len(hero_templates)].format(name=city['name'])
    city['about_desc'] = about_templates[i % len(about_templates)].format(name=city['name'])

# Read generate_locations.py
with open("generate_locations.py", "r") as f:
    content = f.read()

# Replace cities list
import pprint
cities_str = "cities = " + pprint.pformat(cities, sort_dicts=False, indent=4)
content = re.sub(r"cities = \[.*?\]\n", cities_str + "\n", content, flags=re.DOTALL)

# Update generate_page function to use these fields
hero_replace = """                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed mb-8">
                    {city.get('hero_desc', '')}
                </p>"""
content = re.sub(r'                <p class="text-lg text-white/75 max-w-xl mx-auto leading-relaxed mb-8">.*?</p>', hero_replace, content, flags=re.DOTALL)

about_replace = """                    <p class="lead-text">Board-Certified Psychiatrist specializing in Treatment-Resistant Depression and Advanced TMS Therapy.</p>
                    <p>{city.get('about_desc', '')}</p>"""
content = re.sub(r'                    <p class="lead-text">.*?</p>', about_replace, content, flags=re.DOTALL)

# Update h1 and h2 sizing
h1_h2_old = r'<h1 class="block font-sans text-sm font-semibold uppercase tracking-\[2px\] text-gold mb-4">\{h1_text\}</h1>\s*<h2 class="text-3xl lg:text-4xl font-serif text-white leading-tight mb-6">\s*Comprehensive brain stimulation <span class="text-gold-light">and psychiatric care tailored to your unique needs.</span>\s*</h2>'
h1_h2_new = """<h1 class="text-4xl lg:text-5xl font-serif text-white leading-tight mb-4">{h1_text}</h1>
                <h2 class="text-lg lg:text-xl font-sans text-white/80 font-medium tracking-wide mb-6">
                    Comprehensive brain stimulation <span class="text-gold-light">and psychiatric care tailored to your unique needs.</span>
                </h2>"""
content = re.sub(h1_h2_old, h1_h2_new, content)

with open("generate_locations.py", "w") as f:
    f.write(content)

print("Updated generate_locations.py with unique content and new h1/h2 tags.")
