# Island Connect AI Blog - Jamaican Brand Colors & AI Revolution

## 🏝️ Project Overview

This is a comprehensive blog website for **Island Connect AI** that showcases Jamaican brand colors (green, gold, black) and explores how AI agents and smart websites are transforming the real estate and tourism industries in Jamaica.

## 🚀 Deployment

This project is configured for **Cloudflare Pages**.

### Automated Deployment (Recommended)

To set up automated deployments without using GitHub Actions (useful if your GitHub account has billing restrictions):

1. **Push your code** to a GitHub or GitLab repository.
2. **Log in to the Cloudflare Dashboard**.
3. Go to **Workers & Pages** > **Create application** > **Pages** > **Connect to Git**.
4. Select your repository.
5. In the **Build settings**:
   - **Framework preset**: `None`
   - **Build command**: (Leave empty)
   - **Build output directory**: `.`
6. Click **Save and Deploy**.

Cloudflare will now automatically deploy your site whenever you push to your repository.

### Manual Deployment via Wrangler

If you have the Wrangler CLI installed:

```bash
npx wrangler pages deploy . --project-name island-connect-ai
```

## 🛠️ Project Structure

- `index.html`: Main landing page and blog listing.
- `blog-post-*.html`: Individual blog post pages.
- `css/style.css`: Jamaican brand themed styling.
- `js/main.js`: Interactive elements and charts.
- `wrangler.toml`: Cloudflare Pages configuration.

## 🎨 Jamaican Brand Identity

- **Green**: #009B3A (Jamaican flag green)
- **Gold**: #FED100 (Jamaican flag gold)
- **Black**: #000000 (Jamaican flag black)

---

**🇯🇲 Island Connect AI - Revolutionizing Jamaican Industries Through Artificial Intelligence**
