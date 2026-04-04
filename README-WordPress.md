# Island Connect AI - WordPress Child Theme Instructions

This theme is designed as a child theme for the **Hello Elementor** parent theme.

## Installation Steps
1. Ensure the **Hello Elementor** theme is installed and active on your WordPress site.
2. Install the **Elementor** plugin.
3. Upload the `island-connect-child` folder (found in the `wordpress-theme/` directory of this repository) to your WordPress `wp-content/themes/` directory.
4. Go to **Appearance > Themes** and activate **Island Connect Child**.

## Setting up the Homepage
1. Create a new Page in WordPress (e.g., "Home").
2. In the **Page Attributes** box on the right, select **Island Connect Landing Page** from the Template dropdown.
3. Go to **Settings > Reading** and set "Your homepage displays" to "A static page", then select your "Home" page.

## Customization
- The content from your original HTML is hardcoded into `template-landing.php`.
- You can add additional content using the **Elementor Editor** on the Home page; it will appear above the original HTML content thanks to the `the_content()` call.
- The footer has a widget area (`Footer Area 1`) that you can manage in **Appearance > Widgets**.

## Assets
- Styles: `css/style.css`
- Scripts: `js/main.js`
- Images: `images/` (referenced via `get_stylesheet_directory_uri()` in templates)
