<?php
/**
 * Template Name: Job Match Tool
 * Description: The Job Match Tool page
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php esc_html_e( 'Job Match Tool', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Find out how well your resume matches a specific job description and what you are missing.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container">
        <!-- Analyzer Grid -->
        <div class="analyzer-grid">
            <!-- Resume Upload Panel -->
            <div class="analyzer-panel">
                <div class="panel-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                    <?php esc_html_e( 'Your Resume', 'ats-resume-checker' ); ?>
                </div>
                <div class="panel-body">
                    <div class="upload-zone" id="matchUploadZone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="17 8 12 3 7 8"/>
                            <line x1="12" y1="3" x2="12" y2="15"/>
                        </svg>
                        <p><?php esc_html_e( 'Drag & drop your resume here', 'ats-resume-checker' ); ?></p>
                        <button class="btn btn-outline" id="matchBrowseBtn"><?php esc_html_e( 'Browse Files', 'ats-resume-checker' ); ?></button>
                        <input type="file" class="file-input" id="matchResumeFile" accept=".pdf,.doc,.docx">
                    </div>
                    <div id="matchFileInfo" style="display:none; margin-top: 1rem;">
                        <span id="matchFileName"></span>
                        <button id="matchRemoveFile" class="btn btn-sm btn-outline"><?php esc_html_e( 'Remove', 'ats-resume-checker' ); ?></button>
                    </div>
                    <textarea class="textarea-field" id="matchResumeText" rows="6" placeholder="<?php esc_attr_e( 'Or paste your resume text here...', 'ats-resume-checker' ); ?>" style="margin-top: 1rem;"></textarea>
                </div>
            </div>

            <!-- Job Description Panel -->
            <div class="analyzer-panel">
                <div class="panel-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    <?php esc_html_e( 'Job Description', 'ats-resume-checker' ); ?>
                </div>
                <div class="panel-body">
                    <textarea class="textarea-field" id="matchJobDescription" rows="12" placeholder="<?php esc_attr_e( 'Paste the job description here...', 'ats-resume-checker' ); ?>"></textarea>
                </div>
            </div>
        </div>

        <div class="analyzer-actions">
            <button class="btn btn-primary btn-lg" id="matchBtn">
                <?php esc_html_e( 'Check Match', 'ats-resume-checker' ); ?>
            </button>
        </div>

        <!-- Results Panel -->
        <div id="resultsPanel" class="results-panel" style="display:none; margin-top: 3rem;">
            <div class="score-overview">
                <div class="score-ring">
                    <div class="score-text">
                        <span class="score-number" id="matchPercentage">0%</span>
                        <span class="score-label"><?php esc_html_e( 'Match', 'ats-resume-checker' ); ?></span>
                    </div>
                </div>
                <div class="score-details">
                    <h3><?php esc_html_e( 'Match Analysis', 'ats-resume-checker' ); ?></h3>
                    <p><?php esc_html_e( 'Based on the analysis, here is how well you fit this role.', 'ats-resume-checker' ); ?></p>
                </div>
            </div>

            <div class="results-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 2rem;">
                <div>
                    <h4 style="color: var(--color-danger); margin-bottom: 1rem;"><?php esc_html_e( 'Missing Skills', 'ats-resume-checker' ); ?></h4>
                    <ul id="missingSkills" class="results-list"></ul>
                </div>
                <div>
                    <h4 style="color: var(--color-primary); margin-bottom: 1rem;"><?php esc_html_e( 'Suggestions', 'ats-resume-checker' ); ?></h4>
                    <ul id="suggestions" class="results-list"></ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
