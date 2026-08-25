import os
import re
import glob

# Directory containing the website
ROOT_DIR = r"c:\Users\Intel\Desktop\Ritesh"

# Mapping of keywords (lowercase) to URLs.
# The keys should be ordered from most specific/longest to least specific/shortest to avoid overlapping replacements.
KEYWORD_MAPPING = {
    "tms for treatment resistant depression": "/psychiatry/tms-for-treatment-resistant-depression.php",
    "tms for major depression": "/psychiatry/tms-for-major-depression.php",
    "tms for brain injury": "/neurology/tms-for-brain-injury-trauma.php",
    "tms for alzheimer's": "/neurology/tms-for-alzheimers-dementia.php",
    "tms for dementia": "/neurology/tms-for-alzheimers-dementia.php",
    "tms for fibromuscular dysplasia": "/neurology/tms-for-fibromuscular-dysplasia.php",
    "tms for fibromyalgia": "/neurology/tms-for-fibromyalgia.php",
    "tms for huntington's disease": "/neurology/tms-for-huntingtons-disease.php",
    "tms for huntingtons disease": "/neurology/tms-for-huntingtons-disease.php",
    "tms for movement disorders": "/neurology/tms-for-movement-disorders.php",
    "tms for neuropathic pain": "/neurology/tms-for-neuropathic-pain.php",
    "tms for parkinson's": "/neurology/tms-for-parkinsons-symptoms.php",
    "tms for stroke recovery": "/neurology/tms-for-stroke-recovery.php",
    "tms for migraine": "/neurology/tms-for-migraine.php",
    "tms for bipolar depression": "/psychiatry/tms-for-bipolar-depression.php",
    "tms for generalized anxiety": "/psychiatry/tms-for-generalized-anxiety.php",
    "tms for panic disorder": "/psychiatry/tms-for-panic-disorder.php",
    "tms for depression": "/tms-for-depression.php",
    "tms for adhd": "/psychiatry/tms-for-adhd.php",
    "tms for ptsd": "/psychiatry/tms-for-ptsd.php",
    "tms for ocd": "/psychiatry/tms-for-ocd.php",
    "ketamine therapy": "/what-is-ketamine-therapy.php",
    "spravato": "/what-is-spravato.php",
    "nad+": "/nad-plus.php",
    "medical management": "/medical-management.php",
    "dr. ritesh amin": "/dr-ritesh-amin.php",
    "dr. nalin ranasinghe": "/dr-nalin-ranasinghe.php",
    "tms therapy cost": "/blog/how-much-does-tms-cost-with-insurance.php",
    "tms cost": "/blog/how-much-does-tms-cost-with-insurance.php",
    "tms therapy candidate": "/blog/who-is-a-good-candidate-for-tms-therapy.php",
    "tms candidate": "/blog/who-is-a-good-candidate-for-tms-therapy.php",
    "tms legitimate": "/blog/is-tms-legitimate.php",
    "tms anxiety": "/blog/does-tms-help-with-anxiety.php",
    "ocd age": "/blog/can-ocd-get-worse-with-age.php"
}

# Maximum number of times a specific keyword will be linked per page
MAX_LINKS_PER_KEYWORD = 1

def process_html_content(html_content, current_url):
    """
    Applies internal links to the html_content based on KEYWORD_MAPPING.
    It avoids linking inside <a> tags, <h*> tags, attributes, and PHP tags.
    """
    
    # We will tokenize the HTML to separate text nodes from tags and PHP code.
    # Regex to match tags, PHP, or text.
    # This matches <...> including <?php ... ?> or simple text.
    token_pattern = re.compile(r'(<[^>]+>)|([^<]+)')
    
    tokens = token_pattern.findall(html_content)
    
    in_a_tag = False
    in_heading_tag = False
    
    linked_keywords_count = {kw: 0 for kw in KEYWORD_MAPPING.keys()}
    
    new_html = []
    
    for tag, text in tokens:
        if tag:
            # Check if entering or leaving an <a> tag
            if re.match(r'<a\b', tag, re.IGNORECASE):
                in_a_tag = True
            elif re.match(r'</a\b', tag, re.IGNORECASE):
                in_a_tag = False
                
            # Check if entering or leaving a heading tag
            if re.match(r'<h[1-6]\b', tag, re.IGNORECASE):
                in_heading_tag = True
            elif re.match(r'</h[1-6]\b', tag, re.IGNORECASE):
                in_heading_tag = False
                
            new_html.append(tag)
        elif text:
            # We are in a text node
            if not in_a_tag and not in_heading_tag:
                # We can potentially replace keywords here
                
                # Sort keywords by length to replace longest first
                for keyword, target_url in KEYWORD_MAPPING.items():
                    # Don't link to the page we are currently on
                    if target_url.endswith(current_url) or current_url.endswith(target_url):
                        continue
                        
                    if linked_keywords_count[keyword] >= MAX_LINKS_PER_KEYWORD:
                        continue
                        
                    # Find keyword with word boundaries, case-insensitive
                    pattern = r'\b(' + re.escape(keyword) + r')\b'
                    
                    # Search for the keyword
                    match = re.search(pattern, text, re.IGNORECASE)
                    if match:
                        original_text = match.group(1)
                        # Replace only the first occurrence in this text chunk
                        replacement = f'<a href="{target_url}">{original_text}</a>'
                        text = re.sub(pattern, replacement, text, count=1, flags=re.IGNORECASE)
                        linked_keywords_count[keyword] += 1
                        
            new_html.append(text)
            
    return "".join(new_html)

def main():
    # Find all PHP files
    php_files = glob.glob(os.path.join(ROOT_DIR, "**", "*.php"), recursive=True)
    
    total_files = len(php_files)
    modified_files = 0
    
    for file_path in php_files:
        # skip this script if it was placed here
        if "apply_internal_links.py" in file_path: continue
        
        # Determine current URL path for this file
        rel_path = os.path.relpath(file_path, ROOT_DIR).replace("\\", "/")
        current_url = "/" + rel_path
        if current_url == "/index.php":
            current_url = "/"
            
        with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
            
        new_content = process_html_content(content, current_url)
        
        if new_content != content:
            with open(file_path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            modified_files += 1
            print(f"Modified: {file_path}")
            
    print(f"Done. Modified {modified_files} out of {total_files} files.")

if __name__ == "__main__":
    main()
