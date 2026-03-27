## 2025-03-25 - [Accessibility & Branding Alignment]
**Learning:** Icon-only buttons (like mobile menus and modal close buttons) are often missed for ARIA labels. Form labels should always be programmatically linked to inputs for better screen reader support. Also, brand consistency (Green/Gold/Black for Jamaica) is crucial for UX as it builds trust and recognition.
**Action:** Always check for aria-label on interactive icons and ensure for/id parity in forms. Verify UI color palettes against brand guidelines early.

## 2025-03-27 - [Interactive State Communication]
**Learning:** For mobile-first designs, providing both visual and programmatic feedback for the menu state is essential. Simple CSS toggles aren't enough for screen readers; 'aria-expanded' must be explicitly handled in JS. Adding a brand-specific glow on hover provides a "premium" feel that reinforces brand trust.
**Action:** Always pair visual transitions (like scale/shadow) with state-based ARIA attributes.
