<?php
/**
 * Template Name: Privacy Policy
 * Description: Privacy Policy page
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php esc_html_e( 'Privacy Policy', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'How we handle your data and protect your privacy.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container">
        <div class="privacy-content">
            <p><strong><?php esc_html_e( 'Last updated:', 'ats-resume-checker' ); ?></strong> <?php echo esc_html( date( 'F j, Y' ) ); ?></p>
            
            <h2><?php esc_html_e( 'Our Privacy Promise', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'At ATS Resume Checker, privacy is not an afterthought — it is the foundation of our product. We have designed every aspect of our tool to ensure your resume and personal data remain completely private and secure.', 'ats-resume-checker' ); ?></p>
            
            <h2><?php esc_html_e( '100% Local Processing', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'All resume analysis is performed locally in your web browser using client-side JavaScript. Your resume file is processed entirely on your machine and never transmitted to our servers or any third-party service.', 'ats-resume-checker' ); ?></p>
            
            <h2><?php esc_html_e( 'No Data Collection', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'We do not collect, store, log, or sell any of your personal information or resume data. This includes:', 'ats-resume-checker' ); ?></p>
            <ul>
                <li><?php esc_html_e( 'Resume files and content', 'ats-resume-checker' ); ?></li>
                <li><?php esc_html_e( 'Job descriptions you paste', 'ats-resume-checker' ); ?></li>
                <li><?php esc_html_e( 'Analysis results and scores', 'ats-resume-checker' ); ?></li>
                <li><?php esc_html_e( 'Personal identification information', 'ats-resume-checker' ); ?></li>
                <li><?php esc_html_e( 'Usage analytics or behavior tracking', 'ats-resume-checker' ); ?></li>
            </ul>
            
            <h2><?php esc_html_e( 'No Cookies or Tracking', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'We do not use cookies, tracking pixels, analytics scripts, or any other form of user tracking. The only local storage we use is for remembering your dark/light theme preference, which contains no personal data.', 'ats-resume-checker' ); ?></p>
            
            <h2><?php esc_html_e( 'Third-Party Services', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'We do not integrate with any third-party services that could access your data. The libraries we load (such as PDF.js for text extraction) operate entirely within your browser and do not send data to external servers.', 'ats-resume-checker' ); ?></p>
            
            <h2><?php esc_html_e( 'Open Source', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'Our scoring algorithm and analysis logic are transparent. We believe in building trust through openness. If you have technical questions about how our analysis works, feel free to contact us.', 'ats-resume-checker' ); ?></p>
            
            <h2><?php esc_html_e( 'Changes to This Policy', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date. Since we do not collect contact information, we cannot notify users directly of changes.', 'ats-resume-checker' ); ?></p>
            
            <h2><?php esc_html_e( 'Contact Us', 'ats-resume-checker' ); ?></h2>
            <p><?php esc_html_e( 'If you have any questions about this Privacy Policy or our privacy practices, please contact us at:', 'ats-resume-checker' ); ?></p>
            <p><a href="mailto:<?php echo esc_attr( ats_get_option( 'ats_contact_email', 'contact@atsresumechecker.com' ) ); ?>"><?php echo esc_html( ats_get_option( 'ats_contact_email', 'contact@atsresumechecker.com' ) ); ?></a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>