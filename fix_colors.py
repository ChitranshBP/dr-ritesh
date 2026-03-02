import os

css_path = r'd:\download\ritesh\css\styles.css'
html_path = r'd:\download\ritesh\index.html'

with open(css_path, 'r', encoding='utf-8') as f:
    css = f.read()

# Fix CSS Variables
css = css.replace('--color-beige: #5dadee;', '--color-beige: #ffffff;')
css = css.replace('--color-beige-dark: #256fa8;', '--color-beige-dark: #f4f7fb;')

# Fix hardcoded RGBA values for old gold/beige
css = css.replace('197,168,128', '37,111,168')
css = css.replace('197, 168, 128', '37, 111, 168')
css = css.replace('250,249,246', '255,255,255')
css = css.replace('250, 249, 246', '255, 255, 255')

with open(css_path, 'w', encoding='utf-8') as f:
    f.write(css)

with open(html_path, 'r', encoding='utf-8') as f:
    html = f.read()

# Fix Tailwind config
html = html.replace("beige:    { DEFAULT: '#5dadee', dark: '#256fa8'  },", "beige:    { DEFAULT: '#ffffff', dark: '#f4f7fb'  },")

with open(html_path, 'w', encoding='utf-8') as f:
    f.write(html)

print('Updated colors successfully.')
