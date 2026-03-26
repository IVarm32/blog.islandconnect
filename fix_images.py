import re
import os

# Mapping of alt text keywords to Unsplash keywords
IMAGE_MAPPING = {
    "Jamaican Luxury Villa": "https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1200&q=80",
    "Jamaican Beach Resort": "https://images.unsplash.com/photo-1544142427-06f199981541?auto=format&fit=crop&w=1200&q=80",
    "Jamaican AI Technology": "https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1200&q=80",
    "Luxury Jamaican Property": "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=80",
    "Jamaican Tourism Recovery": "https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1200&q=80",
    "Jamaican Market Analysis": "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80",
    "AI Property Matching in Jamaica": "https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1200&q=80",
    "AI Revolution in Jamaica": "https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&w=1200&q=80",
    "Smart Tourism Solutions": "https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80"
}

HTML_FILES = [f for f in os.listdir('.') if f.endswith('.html')]

for filename in HTML_FILES:
    with open(filename, 'r') as f:
        content = f.read()

    # Replace broken sspark images
    for alt, new_url in IMAGE_MAPPING.items():
        # Match images by alt text which is more stable than the dynamic URL
        pattern = fr'<img src="https://sspark\.genspark\.ai[^"]*" alt="{alt}"'
        content = re.sub(pattern, f'<img src="{new_url}" alt="{alt}"', content)

    # Also handle some generic sspark matches that might not have exact alt match but are in the list
    content = re.sub(r'src="https://sspark\.genspark\.ai[^"]*"', r'src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80"', content)

    with open(filename, 'w') as f:
        f.write(content)

print(f"Fixed image links in {len(HTML_FILES)} files.")
