<?php
/**
 * Template Name: FAQ
 * Description: Frequently Asked Questions page
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php esc_html_e( 'Frequently Asked Questions', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Everything you need to know about our free ATS resume checker', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container" style="max-width: 800px;">
        <!-- General -->
        <h2 class="faq-section-title">
            <span class="faq-section-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
            </span>
            <?php esc_html_e( 'General', 'ats-resume-checker' ); ?>
        </h2>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'What is an ATS (Applicant Tracking System)?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'An Applicant Tracking System (ATS) is software used by employers to collect, sort, scan, and rank job applications. Over 98% of Fortune 500 companies use ATS to filter resumes before they ever reach a human recruiter. Our tool simulates how these systems evaluate your resume.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Is this tool really free?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'Yes! ATS Resume Checker is 100% free to use. There are no hidden fees, no premium tiers, and no limitations on how many times you can analyze your resume. We believe job seekers should have access to quality tools without financial barriers.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Do I need to create an account?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'No account creation is required. We don\'t ask for your email, name, or any personal information. Simply upload your resume and paste a job description to get instant results.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'What file formats are supported?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'We support PDF (.pdf) and Microsoft Word (.doc, .docx) files up to 10MB in size. PDF is recommended as it preserves formatting better across different systems.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>

        <!-- Scoring & Analysis -->
        <h2 class="faq-section-title">
            <span class="faq-section-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10"/>
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <line x1="6" y1="20" x2="6" y2="14"/>
                </svg>
            </span>
            <?php esc_html_e( 'Scoring & Analysis', 'ats-resume-checker' ); ?>
        </h2>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'How is the ATS score calculated?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'Our score uses a weighted algorithm with 5 dimensions: Keyword Match (35%), Skills Match (25%), Experience Relevance (15%), Formatting/ATS Readability (15%), and Semantic Similarity (10%). Each dimension is scored 0-100 and combined into an overall 0-100 score.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'What does my score mean?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( '80-100: Excellent - Your resume is well-optimized and likely to pass most ATS filters. 60-79: Good - Some improvements could help you stand out. 40-59: Needs Work - Significant gaps exist between your resume and the job requirements. 0-39: Major Issues - Your resume may be rejected by ATS systems. Review all suggestions carefully.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'How accurate is the analysis?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'Our analysis is approximately 90-95% accurate compared to real ATS systems. While no simulation is perfect, we use industry-standard keyword matching algorithms and scoring weights based on research from major ATS providers like Workday, Taleo, and Greenhouse.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Can I get a perfect 100 score?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'A perfect 100 score is theoretically possible but practically difficult. It would require exact keyword matching, perfect skills alignment, and highly relevant experience. Scores above 85 are considered excellent for most job applications.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>

        <!-- Privacy & Security -->
        <h2 class="faq-section-title">
            <span class="faq-section-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
            </span>
            <?php esc_html_e( 'Privacy & Security', 'ats-resume-checker' ); ?>
        </h2>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Is my resume data kept private?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'Absolutely. We do not store, log, or transmit your resume data to any server. All processing happens directly in your browser using JavaScript. Once you close the page, all data is automatically deleted from memory.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Where is my data processed?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'All analysis is performed locally in your web browser. Your resume file and job description text never leave your computer. We use client-side JavaScript libraries for text extraction and analysis, ensuring complete privacy.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Are my files stored on your servers?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'No. Your uploaded files are processed in memory and immediately discarded. We do not have a database, cloud storage, or any server-side component that stores user data. This is a privacy-first design.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>

        <!-- Usage -->
        <h2 class="faq-section-title">
            <span class="faq-section-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                </svg>
            </span>
            <?php esc_html_e( 'Usage', 'ats-resume-checker' ); ?>
        </h2>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Is there a limit to how many times I can analyze my resume?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'There is no limit. You can analyze your resume against as many job descriptions as you want. We encourage you to tailor your resume for each application and use our tool to verify the match.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'Can I analyze multiple job descriptions?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'Yes! After analyzing your resume against one job description, you can simply paste a new job description and run the analysis again. Your uploaded resume stays in memory until you refresh the page.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'How do I download my analysis report?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'After completing the analysis, click the "Download Report" button to save a detailed PDF report with your score, keyword analysis, and personalized suggestions. You can also copy the text summary to your clipboard.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <?php esc_html_e( 'What should I do after getting my score?', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="faq-answer">
                <div class="faq-answer-inner">
                    <p><?php esc_html_e( 'Review the suggestions section carefully. Add missing keywords, rephrase bullet points to match job requirements, and ensure your skills section includes relevant technologies. Re-analyze after making changes to see your improved score.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="faq-cta">
            <div class="faq-cta-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
            </div>
            <h3><?php esc_html_e( 'Still have questions?', 'ats-resume-checker' ); ?></h3>
            <p><?php esc_html_e( 'We\'re here to help. Reach out and we\'ll get back to you.', 'ats-resume-checker' ); ?></p>
            <?php $contact_page = get_page_by_path( 'contact', OBJECT, 'page' ); ?>
            <a href="<?php echo esc_url( $contact_page ? get_permalink( $contact_page->ID ) : '#' ); ?>" class="btn btn-outline" style="margin-top: 1rem;">
                <?php esc_html_e( 'Contact us', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>