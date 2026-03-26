import os

MAPPING = {
    "blog-post-ai-revolution.html": ("AI Property Matching in Jamaica", "AI Revolution in Jamaica", "https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&w=1200&q=80"),
    "blog-post-smart-tourism.html": ("Jamaican Beach Resort", "Smart Tourism Solutions", "https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80")
}

for filename, (old_alt, new_alt, url) in MAPPING.items():
    if os.path.exists(filename):
        with open(filename, 'r') as f:
            content = f.read()
        # Find the img tag with the old alt and update it
        content = content.replace(f'alt="{old_alt}"', f'alt="{new_alt}"')
        content = content.replace(f'src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1200&q=80" alt="{new_alt}"', f'src="{url}" alt="{new_alt}"')
        # Handle the other one in smart tourism
        content = content.replace(f'src="https://images.unsplash.com/photo-1544142427-06f199981541?auto=format&fit=crop&w=1200&q=80" alt="{new_alt}"', f'src="{url}" alt="{new_alt}"')

        with open(filename, 'w') as f:
            f.write(content)

print("Updated specific post images for better relevance.")
