import re

def swap_sections():
    with open('index.html', 'r', encoding='utf-8') as f:
        content = f.read()

    # Find About Section
    about_match = re.search(r'<!-- About Section -->\s*<section class="about-section about-section-light" id="about">.*?</section>\s*(?=<!--|$|<!-- Specialties)', content, re.DOTALL)
    
    # Find Trust & Credibility Section
    trust_match = re.search(r'<!-- Trust & Credibility Section -->\s*<section class="trust-section" id="trust">.*?</section>\s*(?=<!--|$)', content, re.DOTALL)

    if not about_match or not trust_match:
        print("Could not find sections")
        return

    about_code = about_match.group(0)
    trust_code = trust_match.group(0)

    # Remove About section from its current position
    content = content.replace(about_code, '')

    # Insert About section after Trust section
    # Re-find trust section because indices changed
    trust_match_new = re.search(r'<!-- Trust & Credibility Section -->\s*<section class="trust-section" id="trust">.*?</section>\s*', content, re.DOTALL)
    
    if not trust_match_new:
         print("Could not find trust section after removing about")
         return
         
    insert_pos = trust_match_new.end()
    
    new_content = content[:insert_pos] + '\n' + about_code + content[insert_pos:]

    with open('index.html', 'w', encoding='utf-8') as f:
        f.write(new_content)

    print("Successfully swapped sections")

if __name__ == '__main__':
    swap_sections()
