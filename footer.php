</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo 2.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo light-logo" style="display: block;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo 1.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo dark-logo" style="display: none;">
                </a>
                <p><?php esc_html_e( 'Free, privacy-focused ATS resume analysis. All processing is done locally. No data is sold or shared.', 'ats-resume-checker' ); ?></p>
                <div class="footer-social">
                    <?php $github = ats_get_option( 'ats_github_url', '#' ); ?>
                    <a href="<?php echo esc_url( $github ); ?>" target="_blank" rel="noopener" aria-label="GitHub">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                        </svg>
                    </a>
                    <?php $twitter = ats_get_option( 'ats_twitter_url', '#' ); ?>
                    <a href="<?php echo esc_url( $twitter ); ?>" target="_blank" rel="noopener" aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg>
                    </a>
                    <?php $email = ats_get_option( 'ats_email_url', 'contact@atsresumechecker.com' ); ?>
                    <a href="mailto:<?php echo esc_attr( $email ); ?>" aria-label="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer-links">
                <h4 class="footer-heading"><?php esc_html_e( 'Product', 'ats-resume-checker' ); ?></h4>
                <ul>
                    <?php
                    $product_links = array(
                        'analyzer'  => __( 'Resume Analyzer', 'ats-resume-checker' ),
                        'templates' => __( 'Resume Templates', 'ats-resume-checker' ),
                        'faq'       => __( 'How It Works', 'ats-resume-checker' ),
                    );
                    foreach ( $product_links as $slug => $label ) :
                        $page = get_page_by_path( $slug, OBJECT, 'page' );
                        $url = $page ? get_permalink( $page->ID ) : '#';
                    ?>
                        <li><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-links">
                <h4 class="footer-heading"><?php esc_html_e( 'Resources', 'ats-resume-checker' ); ?></h4>
                <ul>
                    <?php
                    $resource_links = array(
                        'faq'     => __( 'FAQ', 'ats-resume-checker' ),
                        'privacy' => __( 'Privacy Policy', 'ats-resume-checker' ),
                        'contact' => __( 'Contact Us', 'ats-resume-checker' ),
                    );
                    foreach ( $resource_links as $slug => $label ) :
                        $page = get_page_by_path( $slug, OBJECT, 'page' );
                        $url = $page ? get_permalink( $page->ID ) : '#';
                    ?>
                        <li><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-trust">
                <h4 class="footer-heading"><?php esc_html_e( 'Trust & Privacy', 'ats-resume-checker' ); ?></h4>
                <div class="footer-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <?php esc_html_e( '100% local processing', 'ats-resume-checker' ); ?>
                </div>
                <div class="footer-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <?php esc_html_e( 'No data sold or shared', 'ats-resume-checker' ); ?>
                </div>
                <div class="footer-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <?php esc_html_e( 'Files auto-deleted after analysis', 'ats-resume-checker' ); ?>
                </div>
                <div class="footer-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <?php esc_html_e( 'Free forever, no sign-up', 'ats-resume-checker' ); ?>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'Free ATS Resume Checker. All rights reserved.', 'ats-resume-checker' ); ?></p>
            <p><?php esc_html_e( 'Made with', 'ats-resume-checker' ); ?> <span style="color: #ef4444;">&hearts;</span> <?php esc_html_e( 'for job seekers everywhere', 'ats-resume-checker' ); ?></p>
        </div>
    </div>
</footer>

<button class="scroll-top" id="scrollTop" aria-label="<?php esc_attr_e( 'Scroll to top', 'ats-resume-checker' ); ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 15 12 9 6 15"/>
    </svg>
</button>

<?php wp_footer(); ?>
</body>
</html>