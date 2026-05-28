=== ATS Resume Checker ===
Contributors: atsresumechecker
Requires at least: 5.8
Tested up to: 6.5
Requires PHP: 7.4
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A modern, privacy-focused ATS resume checker WordPress theme with built-in resume analyzer, templates gallery, FAQ, and contact functionality.

== Description ==

ATS Resume Checker is a complete WordPress theme designed for job seekers who want to optimize their resumes for Applicant Tracking Systems (ATS). The theme includes:

**Key Features:**
- **Working ATS Resume Analyzer** - Upload PDF/DOCX resumes and paste job descriptions to get instant ATS compatibility scores
- **Client-side Processing** - All analysis happens in the browser; no data is sent to servers
- **Keyword Analysis** - Identifies matched and missing keywords from job descriptions
- **Smart Scoring** - 5-dimension scoring system (Keyword Match, Skills Match, Experience, Formatting, Semantic Similarity)
- **Resume Templates Gallery** - Browse ATS-friendly resume templates with preview and download functionality
- **FAQ Page** - Organized accordion-style frequently asked questions
- **Contact Form** - Ready-to-use contact page with form
- **Dark Mode** - Toggle between light and dark themes
- **Fully Responsive** - Works perfectly on all devices
- **Privacy First** - No data collection, no cookies, no tracking

**Pages Included:**
- Home (Front Page)
- Resume Analyzer
- Templates Gallery
- FAQ
- Contact
- Privacy Policy

**How the Analyzer Works:**
The analyzer uses client-side JavaScript with PDF.js for PDF text extraction and Mammoth.js for DOCX parsing. All processing happens locally in the user's browser, ensuring complete privacy. The scoring algorithm analyzes keyword matches, skills alignment, experience relevance, formatting quality, and semantic similarity.

== Installation ==

1. Download the theme ZIP file
2. Go to WordPress Admin > Appearance > Themes > Add New > Upload Theme
3. Upload the ZIP file and click "Install Now"
4. Click "Activate" to activate the theme
5. The theme will automatically create required pages (Home, Analyzer, Templates, FAQ, Contact, Privacy Policy)
6. Go to Appearance > Theme Options to configure contact email and social links

== Frequently Asked Questions ==

= Does the analyzer require any server-side processing? =
No. All resume analysis is performed client-side using JavaScript. No data leaves the user's browser.

= What file formats are supported for resume upload? =
PDF (.pdf) and Microsoft Word (.doc, .docx) files up to 10MB.

= Is the theme really free? =
Yes, this theme is 100% free and open source.

= Does it work with page builders? =
The theme is designed as a standalone solution. While it supports WordPress blocks, the core functionality (analyzer, templates, FAQ) uses custom page templates.

== Changelog ==

= 1.0.0 =
* Initial release
* Working ATS resume analyzer with client-side PDF/DOCX parsing
* Templates gallery with filtering
* FAQ accordion page
* Contact form page
* Dark mode toggle
* Fully responsive design
* Privacy-focused architecture
