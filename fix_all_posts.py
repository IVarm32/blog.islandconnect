import os

MAPPINGS = {
    "blog-post-luxury-properties.html": ("AI Property Matching in Jamaica", "Jamaican Luxury Villa", "https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1200&q=80"),
    "blog-post-market-analysis.html": ("AI Property Matching in Jamaica", "Jamaican Market Analysis", "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80"),
    "blog-post-tourism-recovery.html": ("AI Property Matching in Jamaica", "Jamaican Tourism Recovery", "https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1200&q=80")
}

for filename, (old_alt, new_alt, url) in MAPPINGS.items():
    if os.path.exists(filename):
        with open(filename, 'r') as f:
            content = f.read()
        content = content.replace(f'alt="{old_alt}"', f'alt="{new_alt}"')
        content = content.replace(f'src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1200&q=80" alt="{new_alt}"', f'src="{url}" alt="{new_alt}"')
        with open(filename, 'w') as f:
            f.write(content)

print("Updated remaining post images.")
