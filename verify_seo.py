import os
import re
import json

BASE_DIR = r"c:\Users\intel\Desktop\ritesh\dr-ritesh"

with open(os.path.join(BASE_DIR, "sitemap.xml"), "r", encoding="utf-8") as f:
    sitemap_content = f.read()

# Verify header.php
with open(os.path.join(BASE_DIR, "header.php"), "r", encoding="utf-8") as f:
    header_content = f.read()
    assert "canonical" in header_content, "Canonical tag missing in header.php"
    assert "og:title" in header_content, "OpenGraph missing in header.php"
    assert "twitter:card" in header_content, "Twitter cards missing in header.php"
    assert "MedicalClinic" in header_content, "Schema missing in header.php"
    assert "geo.region" in header_content, "Geo tags missing in header.php"
print("[SUCCESS] header.php successfully verified with Canonical, OpenGraph, Twitter, Geo & Schema markup.")

# Verify all 59 generated files
generated_files = []
for f in os.listdir(BASE_DIR):
    if f.startswith("tms-therapy-") or f.startswith("deep-tms") or f.startswith("accelerated-tms") or f.startswith("tms-for-severe-anxiety") or f.startswith("spravato-provider") or f.startswith("ketamine-infusion") or f.startswith("psychiatrist-near-me") or f.startswith("holistic-psychiatry"):
        if f.endswith(".php") and f not in ["tms-for-depression.php"]:
            generated_files.append(f)

print(f"Checking {len(generated_files)} backend SEO landing pages...")
assert len(generated_files) >= 50, f"Expected at least 50 pages, found {len(generated_files)}"

for fname in generated_files:
    fpath = os.path.join(BASE_DIR, fname)
    with open(fpath, "r", encoding="utf-8") as f:
        content = f.read()
    
    assert "$page_title =" in content, f"Missing page_title in {fname}"
    assert "$page_desc =" in content, f"Missing page_desc in {fname}"
    assert "header.php" in content, f"Missing header.php in {fname}"
    assert "footer.php" in content, f"Missing footer.php in {fname}"
    assert len(content) > 3000, f"Page {fname} seems too short ({len(content)} bytes)"
    
    clean_url = "https://drriteshamin.com/" + fname[:-4]
    assert clean_url in sitemap_content, f"URL {clean_url} missing in sitemap.xml"

print(f"[SUCCESS] All {len(generated_files)} backend pages verified for metadata, structure, and sitemap inclusion.")

# Verify that backend pages are NOT linked in header.php and footer.php
with open(os.path.join(BASE_DIR, "header.php"), "r", encoding="utf-8") as f:
    nav_content = f.read()

with open(os.path.join(BASE_DIR, "footer.php"), "r", encoding="utf-8") as f:
    footer_content = f.read()

for fname in generated_files:
    link_pattern = fname
    assert link_pattern not in nav_content, f"Found unallowed link to {fname} in header.php"
    assert link_pattern not in footer_content, f"Found unallowed link to {fname} in footer.php"

print("[SUCCESS] Confirmed: 0 backend landing pages are linked in site navigation or footer (completely unlinked as requested).")
print("ALL SEO CHECKS PASSED PERFECTLY!")
