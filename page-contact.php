<?php
/**
 * Template Name: Contact
 * Description: Contact page with form
 *
 * @package ATS_Resume_Checker
 */

get_header();

$contact_email = ats_get_option( 'ats_contact_email', 'contact@atsresumechecker.com' );
$github_url    = ats_get_option( 'ats_github_url', '#' );
$twitter_url   = ats_get_option( 'ats_twitter_url', '#' );
$email_url     = ats_get_option( 'ats_email_url', 'contact@atsresumechecker.com' );

?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php esc_html_e( 'Contact Us', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Have questions, feedback, or suggestions? We\'d love to hear from you.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-card">
                    <h3 class="contact-card-title"><?php esc_html_e( 'Get in Touch', 'ats-resume-checker' ); ?></h3>
                    
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4><?php esc_html_e( 'Email', 'ats-resume-checker' ); ?></h4>
                            <p><a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a></p>
                            <p style="font-size: 0.8125rem; margin-top: 0.25rem;"><?php esc_html_e( 'We typically respond within 24-48 hours.', 'ats-resume-checker' ); ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4><?php esc_html_e( 'Feedback', 'ats-resume-checker' ); ?></h4>
                            <p><?php esc_html_e( 'Found a bug or have a feature request? Let us know!', 'ats-resume-checker' ); ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4><?php esc_html_e( 'Support the Project', 'ats-resume-checker' ); ?></h4>
                            <p><?php esc_html_e( 'If you find this tool helpful, share it with others who might benefit.', 'ats-resume-checker' ); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-card">
                    <h3 class="contact-card-title"><?php esc_html_e( 'Connect', 'ats-resume-checker' ); ?></h3>
                    <div class="footer-social" style="margin:0;">
                        <a href="<?php echo esc_url( $github_url ); ?>" target="_blank" rel="noopener" aria-label="GitHub">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                            </svg>
                        </a>
                        <a href="mailto:<?php echo esc_attr( $email_url ); ?>" aria-label="Email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-card">
                <h3 class="contact-card-title"><?php esc_html_e( 'Send a Message', 'ats-resume-checker' ); ?></h3>
                
                <form id="contactForm" method="post" action="">
                    <div class="form-group">
                        <label class="form-label" for="contactName"><?php esc_html_e( 'Name', 'ats-resume-checker' ); ?></label>
                        <input type="text" class="form-input" id="contactName" name="contact_name" placeholder="<?php esc_attr_e( 'Your name', 'ats-resume-checker' ); ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contactEmail"><?php esc_html_e( 'Email', 'ats-resume-checker' ); ?></label>
                        <input type="email" class="form-input" id="contactEmail" name="contact_email" placeholder="<?php esc_attr_e( 'your@email.com', 'ats-resume-checker' ); ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contactMessage"><?php esc_html_e( 'Message', 'ats-resume-checker' ); ?></label>
                        <textarea class="form-textarea" id="contactMessage" name="contact_message" placeholder="<?php esc_attr_e( 'How can we help you?', 'ats-resume-checker' ); ?>" required></textarea>
                    </div>
                    
                    <div class="form-notice">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                        <?php esc_html_e( 'This form uses WordPress mail functionality. Ensure your WordPress site is configured to send emails.', 'ats-resume-checker' ); ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-full" id="sendMessageBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"/>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                        </svg>
                        <?php esc_html_e( 'Send Message', 'ats-resume-checker' ); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>