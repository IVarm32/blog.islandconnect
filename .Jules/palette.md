## 2025-03-25 - [Accessibility & Branding Alignment]
**Learning:** Icon-only buttons (like mobile menus and modal close buttons) are often missed for ARIA labels. Form labels should always be programmatically linked to inputs for better screen reader support. Also, brand consistency (Green/Gold/Black for Jamaica) is crucial for UX as it builds trust and recognition.
**Action:** Always check for aria-label on interactive icons and ensure for/id parity in forms. Verify UI color palettes against brand guidelines early.

## 2025-03-27 - [Interactive State Communication]
**Learning:** For mobile-first designs, providing both visual and programmatic feedback for the menu state is essential. Simple CSS toggles aren't enough for screen readers; 'aria-expanded' must be explicitly handled in JS. Adding a brand-specific glow on hover provides a "premium" feel that reinforces brand trust.
**Action:** Always pair visual transitions (like scale/shadow) with state-based ARIA attributes.

## 2025-03-28 - [Perceived Quality via Subtle Motion]
**Learning:** Blog post content can feel static and "generic" without visual engagement. Adding a smooth zoom interaction (transform: scale) on hover, paired with a subtle tooltip, significantly increases the "premium" feel of the interface without being distracting. Using high-quality local assets for hero sections is always preferred over unreliable external links.
**Action:** Implement smooth-zoom patterns for featured blog imagery. Always prefer local asset hosting for critical hero visuals to avoid layout shifts or broken link regressions.

## 2025-03-31 - [UX Consistency Across Content Entry Points]
**Learning:** Micro-interactions (like the Smooth Zoom) should be consistent across all entry points, including homepage teasers and internal content pages. Inconsistency can lead to a fragmented user experience where some elements feel "premium" while others feel neglected. Unifying these patterns reinforces the design system's integrity.
**Action:** When adding a new interactive pattern to a specific page type, always audit similar components across the rest of the site (e.g., homepage cards) to maintain a cohesive experience.
