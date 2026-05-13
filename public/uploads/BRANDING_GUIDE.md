# Vistara Education Pvt. Ltd. - Branding Guide

## Overview
Complete rebranding from "The Next Education Consultancy" to "Vistara Education Pvt. Ltd."

## Color Palette
- **Primary Deep Blue**: #1B4965
- **Secondary Purple**: #6A3FA0
- **Accent Gold**: #D4A574
- **Light Background**: #F8F9FA
- **Text Dark**: #333333
- **Text Muted**: #666666

## Logo Assets

### 1. Main Logo
- File: `/public/uploads/vistara-logo-main.svg`
- Format: SVG (scalable)
- Use: Primary branding, large displays
- Includes: Full company name with tagline
- Background: Works on light backgrounds

### 2. White Logo
- File: `/public/uploads/vistara-logo-white.svg`
- Format: SVG
- Use: Dark backgrounds, footers, overlays
- All text and elements in white

### 3. Icon-Only Logo
- File: `/public/uploads/vistara-logo-icon.svg`
- Format: SVG
- Use: Favicon, navbar, small displays
- Includes: Graduation cap with growth arrow concept
- Background: Circular with light background

### 4. Favicon
- File: `/public/uploads/vistara-favicon.svg`
- Format: SVG
- Use: Browser tab icon
- Minimalist design

## Logo Concept
- **Icon Elements**:
  - Graduation cap (education foundation)
  - Growth arrow (student success)
  - Global dots (international reach)
  - Premium colors (trustworthiness)

## Typography
- **Primary Font**: Segoe UI, Helvetica Neue, sans-serif
- **Display Font**: Playfair Display (headings)
- **Font Weights**: 400 (regular), 500 (medium), 600 (semibold), 700 (bold)

## Company Information
- **Legal Name**: Vistara Education Pvt. Ltd.
- **Email**: info@vistara.edu.np
- **Website**: www.vistara.edu.np
- **Address**: 123 Global Plaza, New Baneshwor, Kathmandu, Nepal
- **Phone**: +977 1 4445556

## Files Updated

### Layout & Components
- ✅ `resources/views/layouts/app.blade.php` - Meta tags, favicon, default titles
- ✅ `resources/views/components/navbar.blade.php` - Logo and branding
- ✅ `resources/views/components/footer.blade.php` - Company info, copyright
- ✅ `resources/views/components/hero-section.blade.php` - Default heading

### Frontend Pages (24 files)
- ✅ `resources/views/frontend/home.blade.php`
- ✅ `resources/views/frontend/about.blade.php`
- ✅ `resources/views/frontend/services.blade.php`
- ✅ `resources/views/frontend/services-expanded.blade.php`
- ✅ `resources/views/frontend/contact.blade.php`
- ✅ `resources/views/frontend/blog.blade.php`
- ✅ `resources/views/frontend/courses.blade.php`
- ✅ `resources/views/frontend/study-abroad.blade.php`
- ✅ Blog Detail Pages (1 file)
- ✅ Course Pages (6 files: IT, Business, Nursing, Engineering, Hospitality, Show)
- ✅ Service Pages (6 files: Counseling, Visa, Documentation, Test Prep, Scholarship, Show)
- ✅ Study Pages (1 file)
- ✅ Auth Pages (2 files: Login, Register)

### Configuration
- ✅ `.env` - APP_NAME updated
- ✅ Meta descriptions - All pages updated
- ✅ Page titles - All pages updated
- ✅ Email addresses - Changed to vistara.edu.np domain

## Implementation Details

### Logo Placement
1. **Navbar**: Uses icon-only logo (40x40px)
2. **Footer**: Uses icon-only logo (30x30px)
3. **Meta/OG**: Uses icon SVG for social sharing
4. **Favicon**: SVG favicon in browser tab

### Brand Colors Applied To
- Primary buttons and CTAs: Deep Blue (#1B4965)
- Secondary elements: Royal Purple (#6A3FA0)
- Accents and highlights: Gold (#D4A574)
- Text: Dark Gray to muted gray

### Responsive Design
- All logos and branding work on mobile (375px) to desktop (1920px+)
- SVG format ensures crisp display at all sizes
- Navbar logo scales responsively

## SEO & Meta Tags
- **Default Title**: "Vistara Education Pvt. Ltd. | Premium Overseas Study Consultancy"
- **Default Meta Description**: "Expert education consultancy for overseas studies. Get counseling, university placement, and visa guidance from Vistara Education."
- **OG Title**: "Vistara Education Pvt. Ltd."
- **OG Description**: "Premium education consultancy for overseas studies - Vistara Education"
- **OG Image**: `/uploads/vistara-logo-icon.svg`

## Brand Voice
- Professional and trustworthy
- Modern and international
- Student-focused and supportive
- Educational excellence oriented

## Future Branding Updates
When updating branding in the future:
1. Update logo files in `/public/uploads/`
2. Change color variables in CSS if palette changes
3. Update `.env` APP_NAME
4. Search and replace in blade files if needed
5. Test across all pages for consistency

## Verification Checklist
- ✅ Navbar shows correct logo and branding
- ✅ Footer displays company name and contact
- ✅ Favicon appears in browser tab
- ✅ Meta tags show Vistara Education
- ✅ Social sharing displays correct branding
- ✅ All pages have updated titles
- ✅ Email updated to vistara.edu.np
- ✅ Color palette applied consistently
- ✅ Responsive design intact
- ✅ All 24+ pages updated

---
**Branding Update Completed**: 2026-05-08
**Status**: ✅ Complete and Verified
