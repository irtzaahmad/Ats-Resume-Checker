<?php
/**
 * Template Name: Interview Prep
 * Description: The Interview Preparation page
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php esc_html_e( 'Interview Preparation', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Get ready for your next interview with personalized questions and answer suggestions.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container">
        <div class="analyzer-panel" style="max-width: 600px; margin: 0 auto;">
            <div class="panel-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                <?php esc_html_e( 'Job Role', 'ats-resume-checker' ); ?>
            </div>
            <div class="panel-body">
                <input type="text" class="input-field" id="jobRole" placeholder="<?php esc_attr_e( 'e.g. Software Engineer, Marketing Manager...', 'ats-resume-checker' ); ?>">
                <button class="btn btn-primary btn-block" id="prepBtn" style="margin-top: 1rem;">
                    <?php esc_html_e( 'Generate Questions', 'ats-resume-checker' ); ?>
                </button>
            </div>
        </div>

        <div id="loadingIndicator" style="display:none; text-align: center; margin-top: 2rem;">
            <p><?php esc_html_e( 'Generating questions... This may take a few seconds.', 'ats-resume-checker' ); ?></p>
        </div>

        <div id="resultsPanel" style="display:none; margin-top: 3rem;">
            <h3 style="margin-bottom: 2rem; text-align: center;"><?php esc_html_e( 'Interview Questions & Suggestions', 'ats-resume-checker' ); ?></h3>
            <div id="questionsContainer" class="questions-list">
                <!-- Questions will be injected here -->
            </div>
        </div>
    </div>
</section>

<style>
.questions-list {
    display: grid;
    gap: 1.5rem;
}
.question-card {
    background: white;
    padding: 1.5rem;
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--color-border);
}
.question-text {
    font-weight: 700;
    font-size: 1.125rem;
    margin-bottom: 0.75rem;
    color: var(--color-primary);
}
.suggestion-text {
    color: var(--color-text-muted);
    font-size: 0.9375rem;
    line-height: 1.6;
}
.suggestion-label {
    font-weight: 600;
    color: var(--color-secondary);
    display: block;
    margin-bottom: 0.25rem;
    font-size: 0.8125rem;
    text-transform: uppercase;
}
</style>

<?php get_footer(); ?>
