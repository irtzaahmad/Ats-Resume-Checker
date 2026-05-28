<?php
/**
 * Front page template
 *
 * @package ATS_Resume_Checker
 */

get_header();

$analyzer_page = get_page_by_path( 'analyzer', OBJECT, 'page' );
$analyzer_url  = $analyzer_page ? get_permalink( $analyzer_page->ID ) : home_url( '/analyzer/' );
$templates_page = get_page_by_path( 'templates', OBJECT, 'page' );
$templates_url  = $templates_page ? get_permalink( $templates_page->ID ) : home_url( '/templates/' );
$faq_page = get_page_by_path( 'faq', OBJECT, 'page' );
$faq_url  = $faq_page ? get_permalink( $faq_page->ID ) : home_url( '/faq/' );
$job_match_page = get_page_by_path( 'job-match', OBJECT, 'page' );
$job_match_url  = $job_match_page ? get_permalink( $job_match_page->ID ) : home_url( '/job-match/' );
$interview_prep_page = get_page_by_path( 'interview-prep', OBJECT, 'page' );
$interview_prep_url  = $interview_prep_page ? get_permalink( $interview_prep_page->ID ) : home_url( '/interview-prep/' );
$resume_builder_page = get_page_by_path( 'resume-builder', OBJECT, 'page' );
$resume_builder_url  = $resume_builder_page ? get_permalink( $resume_builder_page->ID ) : home_url( '/resume-builder/' );
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            <?php esc_html_e( '100% Free & Privacy-Focused', 'ats-resume-checker' ); ?>
        </div>
        <h1 class="hero-title"><?php esc_html_e( 'Will Your Resume Pass the ATS Test?', 'ats-resume-checker' ); ?></h1>
        <p class="hero-description">
            <?php esc_html_e( 'Upload your resume and paste any job description to get an instant ATS compatibility score, keyword analysis, and actionable improvement suggestions — all processed locally on your machine.', 'ats-resume-checker' ); ?>
        </p>
        <div class="hero-actions">
            <a href="<?php echo esc_url( $analyzer_url ); ?>" class="btn btn-primary btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                </svg>
                <?php esc_html_e( 'Check My Resume', 'ats-resume-checker' ); ?>
            </a>
            <a href="<?php echo esc_url( $templates_url ); ?>" class="btn btn-outline btn-lg">
                <?php esc_html_e( 'Browse Templates', 'ats-resume-checker' ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </a>
        </div>
        <div class="hero-features">
            <div class="hero-feature">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                <?php esc_html_e( 'No sign-up required', 'ats-resume-checker' ); ?>
            </div>
            <div class="hero-feature">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                <?php esc_html_e( 'Local processing', 'ats-resume-checker' ); ?>
            </div>
            <div class="hero-feature">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
                <?php esc_html_e( 'Instant results', 'ats-resume-checker' ); ?>
            </div>
        </div>
        <div class="hero-image">
            <img src="<?php echo esc_url( ATS_RESUME_CHECKER_URI . '/assets/images/hero-illustration.jpg' ); ?>" alt="<?php esc_attr_e( 'ATS Resume Checker Dashboard', 'ats-resume-checker' ); ?>">
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-value">98%</div>
                <div class="stat-label"><?php esc_html_e( 'ATS Accuracy', 'ats-resume-checker' ); ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-value">50+</div>
                <div class="stat-label"><?php esc_html_e( 'Keywords Analyzed', 'ats-resume-checker' ); ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-value">5</div>
                <div class="stat-label"><?php esc_html_e( 'Scoring Dimensions', 'ats-resume-checker' ); ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-value">0</div>
                <div class="stat-label"><?php esc_html_e( 'Data Shared', 'ats-resume-checker' ); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e( 'How It Works', 'ats-resume-checker' ); ?></h2>
            <p class="section-description"><?php esc_html_e( 'Three simple steps to optimize your resume for any job application', 'ats-resume-checker' ); ?></p>
        </div>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">01</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <h3 class="step-title"><?php esc_html_e( 'Upload Your Resume', 'ats-resume-checker' ); ?></h3>
                <p class="step-description"><?php esc_html_e( 'Upload your resume as a PDF or DOCX file. We extract the text instantly using industry-standard parsers.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="step-card">
                <div class="step-number">02</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3 class="step-title"><?php esc_html_e( 'Paste Job Description', 'ats-resume-checker' ); ?></h3>
                <p class="step-description"><?php esc_html_e( 'Copy and paste the job description you\'re applying for. Our engine compares it against your resume.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="step-card">
                <div class="step-number">03</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="20" x2="18" y2="10"/>
                        <line x1="12" y1="20" x2="12" y2="4"/>
                        <line x1="6" y1="20" x2="6" y2="14"/>
                    </svg>
                </div>
                <h3 class="step-title"><?php esc_html_e( 'Get Your Score', 'ats-resume-checker' ); ?></h3>
                <p class="step-description"><?php esc_html_e( 'Receive a detailed ATS compatibility score with keyword matches, missing skills, and actionable suggestions.', 'ats-resume-checker' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e( 'Powerful Features', 'ats-resume-checker' ); ?></h2>
            <p class="section-description"><?php esc_html_e( 'Everything you need to optimize your resume and land more interviews', 'ats-resume-checker' ); ?></p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                        <path d="M9 14l2 2 4-4"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php esc_html_e( 'Job Match Tool', 'ats-resume-checker' ); ?></h3>
                <p class="feature-description"><?php esc_html_e( 'Compare your resume against any job description and identify missing skills instantly.', 'ats-resume-checker' ); ?></p>
                <a href="<?php echo esc_url( $job_match_url ); ?>" class="btn btn-sm btn-outline" style="margin-top: 1rem;"><?php esc_html_e( 'Try Job Match', 'ats-resume-checker' ); ?></a>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php esc_html_e( 'Interview Prep', 'ats-resume-checker' ); ?></h3>
                <p class="feature-description"><?php esc_html_e( 'Generate personalized interview questions and answer suggestions for any job role.', 'ats-resume-checker' ); ?></p>
                <a href="<?php echo esc_url( $interview_prep_url ); ?>" class="btn btn-sm btn-outline" style="margin-top: 1rem;"><?php esc_html_e( 'Prepare Now', 'ats-resume-checker' ); ?></a>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9"/>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php esc_html_e( 'AI Resume Builder', 'ats-resume-checker' ); ?></h3>
                <p class="feature-description"><?php esc_html_e( 'Create a professional, ATS-optimized resume in minutes using our smart builder.', 'ats-resume-checker' ); ?></p>
                <a href="<?php echo esc_url( $resume_builder_url ); ?>" class="btn btn-sm btn-outline" style="margin-top: 1rem;"><?php esc_html_e( 'Build Resume', 'ats-resume-checker' ); ?></a>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php esc_html_e( 'Privacy First', 'ats-resume-checker' ); ?></h3>
                <p class="feature-description"><?php esc_html_e( 'All processing happens locally. Your resume and job description never leave your machine or get stored on servers.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="7 10 12 15 17 10"/>
                        <line x1="12" y1="15" x2="12" y2="3"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php esc_html_e( 'Downloadable Reports', 'ats-resume-checker' ); ?></h3>
                <p class="feature-description"><?php esc_html_e( 'Export your analysis as a detailed PDF report or text summary to review later or share with a career coach.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
                <h3 class="feature-title"><?php esc_html_e( 'ATS-Friendly Templates', 'ats-resume-checker' ); ?></h3>
                <p class="feature-description"><?php esc_html_e( 'Browse and download professionally designed, ATS-optimized resume templates for free — no watermarks.', 'ats-resume-checker' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e( 'Why Job Seekers Trust Us', 'ats-resume-checker' ); ?></h2>
            <p class="section-description"><?php esc_html_e( 'Built with transparency and your privacy in mind', 'ats-resume-checker' ); ?></p>
        </div>
        <div class="trust-grid">
            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <h3 class="trust-title"><?php esc_html_e( '100% Local Processing', 'ats-resume-checker' ); ?></h3>
                <p class="trust-description"><?php esc_html_e( 'Your data never leaves your browser. All NLP analysis runs on your machine.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3 class="trust-title"><?php esc_html_e( 'No Data Collection', 'ats-resume-checker' ); ?></h3>
                <p class="trust-description"><?php esc_html_e( 'We don\'t store, log, or sell your resume data. Your privacy is guaranteed.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
                <h3 class="trust-title"><?php esc_html_e( 'No Sign-Up Required', 'ats-resume-checker' ); ?></h3>
                <p class="trust-description"><?php esc_html_e( 'Start analyzing immediately. No account creation, no email required.', 'ats-resume-checker' ); ?></p>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3 class="trust-title"><?php esc_html_e( 'Open Source Stack', 'ats-resume-checker' ); ?></h3>
                <p class="trust-description"><?php esc_html_e( 'Built with spaCy, scikit-learn, and FastAPI. Transparent and auditable.', 'ats-resume-checker' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Scoring -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e( 'Transparent Scoring', 'ats-resume-checker' ); ?></h2>
            <p class="section-description"><?php esc_html_e( 'Our hybrid scoring system uses 5 weighted dimensions for accurate results', 'ats-resume-checker' ); ?></p>
        </div>
        <div class="scoring-bars">
            <div class="scoring-bar">
                <span class="scoring-label"><?php esc_html_e( 'Keyword Match', 'ats-resume-checker' ); ?></span>
                <div class="scoring-track">
                    <div class="scoring-fill keyword" style="width: 35%;">35%</div>
                </div>
            </div>
            <div class="scoring-bar">
                <span class="scoring-label"><?php esc_html_e( 'Skills Match', 'ats-resume-checker' ); ?></span>
                <div class="scoring-track">
                    <div class="scoring-fill skills" style="width: 25%;">25%</div>
                </div>
            </div>
            <div class="scoring-bar">
                <span class="scoring-label"><?php esc_html_e( 'Experience Relevance', 'ats-resume-checker' ); ?></span>
                <div class="scoring-track">
                    <div class="scoring-fill experience" style="width: 15%;">15%</div>
                </div>
            </div>
            <div class="scoring-bar">
                <span class="scoring-label"><?php esc_html_e( 'Formatting / ATS Readability', 'ats-resume-checker' ); ?></span>
                <div class="scoring-track">
                    <div class="scoring-fill formatting" style="width: 15%;">15%</div>
                </div>
            </div>
            <div class="scoring-bar">
                <span class="scoring-label"><?php esc_html_e( 'Semantic Similarity', 'ats-resume-checker' ); ?></span>
                <div class="scoring-track">
                    <div class="scoring-fill semantic" style="width: 10%;">10%</div>
                </div>
            </div>
        </div>
        <p class="scoring-note">
            <?php esc_html_e( 'Each dimension is scored from 0-100 and weighted according to its importance in ATS systems. The overall score is a weighted average that gives you a realistic estimate of your resume\'s ATS performance.', 'ats-resume-checker' ); ?>
        </p>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <h2 class="section-title"><?php esc_html_e( 'Ready to Optimize Your Resume?', 'ats-resume-checker' ); ?></h2>
            <p class="section-description"><?php esc_html_e( 'Get your free ATS compatibility score in seconds. No sign-up, no credit card, no data sharing.', 'ats-resume-checker' ); ?></p>
            <a href="<?php echo esc_url( $analyzer_url ); ?>" class="btn btn-primary btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                </svg>
                <?php esc_html_e( 'Analyze My Resume', 'ats-resume-checker' ); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>