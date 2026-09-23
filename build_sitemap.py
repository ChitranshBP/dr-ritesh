import os
import glob
from datetime import datetime

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
DOMAIN = "https://drriteshamin.com"
TODAY = datetime.utcnow().strftime("%Y-%m-%dT%H:%M:%S+00:00")

# Excluded scripts, templates and partials
EXCLUDED_FILES = {
    "header.php", "footer.php", "_locations-tab.php", "_reviews-partial.php",
    "service-template.php", "generate_locations.py", "generate_pages.py",
    "generate_seo_pages.py", "build_sitemap.py", "apply_changes.py",
    "apply_internal_links.php", "apply_internal_links.py", "copy_images.py",
    "fix_colors.py", "make_unique_content.py", "move_about.py",
    "reorder_sections.py", "test_accordion.js", "webhook.php"
}

urls = []

# Helper to add URL with priority and changefreq
def add_url(path, priority="0.80", changefreq="weekly"):
    clean = path.replace("\\", "/")
    if clean.endswith(".php"):
        clean = clean[:-4]
    if clean.endswith("/index"):
        clean = clean[:-6]
    if not clean.startswith("/"):
        clean = "/" + clean
    if clean == "/index" or clean == "":
        clean = "/"
    
    full_loc = DOMAIN + (clean if clean != "/" else "/")
    # Prevent duplicate
    if any(u["loc"] == full_loc for u in urls):
        return
        
    urls.append({
        "loc": full_loc,
        "lastmod": TODAY,
        "changefreq": changefreq,
        "priority": priority
    })

# 1. Root level pages
add_url("/", "1.00", "daily")
add_url("/dr-ritesh-amin", "0.90", "weekly")
add_url("/dr-nalin-ranasinghe", "0.85", "weekly")
add_url("/psychiatry-tms-therapy", "0.90", "weekly")
add_url("/neurology-tms-therapy", "0.90", "weekly")
add_url("/what-is-spravato", "0.90", "weekly")
add_url("/what-is-ketamine-therapy", "0.90", "weekly")
add_url("/insurance", "0.85", "weekly")
add_url("/faq", "0.85", "weekly")
add_url("/reviews", "0.85", "weekly")
add_url("/contact", "0.90", "weekly")
add_url("/medical-management", "0.80", "monthly")
add_url("/nad-plus", "0.80", "monthly")
add_url("/privacy-policy", "0.50", "yearly")
add_url("/terms", "0.50", "yearly")

# 2. Psychiatry Silo
for f in sorted(os.listdir(os.path.join(BASE_DIR, "psychiatry"))):
    if f.endswith(".php") and f not in EXCLUDED_FILES:
        add_url(f"/psychiatry/{f}", "0.85", "weekly")

# 3. Neurology Silo
for f in sorted(os.listdir(os.path.join(BASE_DIR, "neurology"))):
    if f.endswith(".php") and f not in EXCLUDED_FILES:
        add_url(f"/neurology/{f}", "0.85", "weekly")

# 4. Areas We Serve (Existing 23 locations)
for f in sorted(os.listdir(os.path.join(BASE_DIR, "areas-we-serve"))):
    if f.endswith(".php") and f not in EXCLUDED_FILES:
        add_url(f"/areas-we-serve/{f}", "0.80", "weekly")

# 5. Blog Posts
for f in sorted(os.listdir(os.path.join(BASE_DIR, "blog"))):
    if f.endswith(".php") and f not in EXCLUDED_FILES and not f.startswith("generate-") and not f.startswith("thumbnail-"):
        if f == "blog-post-template.php":
            continue
        add_url(f"/blog/{f}", "0.75", "weekly")

# 6. All newly generated 59 backend SEO Landing Pages
for f in sorted(os.listdir(BASE_DIR)):
    if f.endswith(".php") and f not in EXCLUDED_FILES:
        # Check if already added
        clean = "/" + f[:-4]
        if f == "tms-therapy-near-me.php":
            add_url(clean, "0.95", "daily")
        elif not any(u["loc"] == DOMAIN + clean for u in urls):
            add_url(clean, "0.80", "weekly")

# Build XML
xml_lines = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"',
    '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"',
    '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9',
    '        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'
]

for u in urls:
    xml_lines.append("  <url>")
    xml_lines.append(f"    <loc>{u['loc']}</loc>")
    xml_lines.append(f"    <lastmod>{u['lastmod']}</lastmod>")
    xml_lines.append(f"    <changefreq>{u['changefreq']}</changefreq>")
    xml_lines.append(f"    <priority>{u['priority']}</priority>")
    xml_lines.append("  </url>")

xml_lines.append("</urlset>")

sitemap_content = "\n".join(xml_lines) + "\n"

sitemap_path = os.path.join(BASE_DIR, "sitemap.xml")
with open(sitemap_path, "w", encoding="utf-8") as f:
    f.write(sitemap_content)

print(f"Generated complete sitemap.xml with {len(urls)} URLs.")
