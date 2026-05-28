<?php
/**
 * Template Name: Analyzer
 * Description: The ATS Resume Analyzer page with working client-side analysis
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php esc_html_e( 'ATS Resume Analyzer', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Upload your resume and paste a job description to get a detailed ATS compatibility analysis.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
    <div class="container">
        <!-- Steps -->
        <div class="analyzer-steps">
            <div class="analyzer-step active" id="step1">
                <div class="step-number-circle">1</div>
                <span class="step-name"><?php esc_html_e( 'Upload Resume', 'ats-resume-checker' ); ?></span>
            </div>
            <div class="step-connector"></div>
            <div class="analyzer-step" id="step2">
                <div class="step-number-circle">2</div>
                <span class="step-name"><?php esc_html_e( 'Add Job Description', 'ats-resume-checker' ); ?></span>
            </div>
            <div class="step-connector"></div>
            <div class="analyzer-step" id="step3">
                <div class="step-number-circle">3</div>
                <span class="step-name"><?php esc_html_e( 'Get Results', 'ats-resume-checker' ); ?></span>
            </div>
        </div>

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
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                    <?php esc_html_e( 'Your Resume', 'ats-resume-checker' ); ?>
                </div>
                <div class="panel-body">
                    <div class="upload-zone" id="uploadZone">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="17 8 12 3 7 8"/>
                            <line x1="12" y1="3" x2="12" y2="15"/>
                        </svg>
                        <p><?php esc_html_e( 'Drag & drop your resume here', 'ats-resume-checker' ); ?></p>
                        <span><?php esc_html_e( 'Supports PDF and DOCX files up to 10MB', 'ats-resume-checker' ); ?></span>
                        <br><br>
                        <button class="btn btn-outline" id="browseBtn"><?php esc_html_e( 'Browse Files', 'ats-resume-checker' ); ?></button>
                        <input type="file" class="file-input" id="resumeFile" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                    <div id="fileInfo" style="display:none; margin-top: 1rem; padding: 0.75rem; background: var(--color-accent-light); border-radius: var(--radius); color: var(--color-accent); font-size: 0.875rem;">
                        <span id="fileName"></span> (<span id="fileSize"></span>)
                        <button id="removeFile" style="float:right; background:none; border:none; color: var(--color-danger); cursor:pointer; font-size: 0.75rem;"><?php esc_html_e( 'Remove', 'ats-resume-checker' ); ?></button>
                        <div style="clear:both;"></div>
                    </div>
                    <div id="uploadedText" style="display:none; margin-top: 1rem;">
                        <textarea class="textarea-field" id="resumeText" rows="6" placeholder="<?php esc_attr_e( 'Resume text will appear here after upload...', 'ats-resume-checker' ); ?>"></textarea>
                    </div>
                </div>
            </div>

            <!-- Job Description Panel -->
            <div class="analyzer-panel">
                <div class="panel-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                    <?php esc_html_e( 'Job Description', 'ats-resume-checker' ); ?>
                </div>
                <div class="panel-body">
                    <textarea class="textarea-field" id="jobDescription" placeholder="<?php esc_attr_e( 'Paste the job description here...', 'ats-resume-checker' ); ?>"></textarea>
                    <div class="word-count"><span id="wordCount">0</span> <?php esc_html_e( 'words', 'ats-resume-checker' ); ?></div>
                </div>
            </div>
        </div>

        <div class="analyzer-actions">
            <button class="btn btn-primary btn-lg" id="analyzeBtn" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                </svg>
                <?php esc_html_e( 'Analyze Resume', 'ats-resume-checker' ); ?>
            </button>
        </div>

        <!-- Results Panel -->
        <div id="resultsPanel" class="results-panel" style="display:none;">
            <div class="score-overview">
                <div class="score-ring">
                    <svg viewBox="0 0 140 140">
                        <circle class="score-ring-bg" cx="70" cy="70" r="60"/>
                        <circle class="score-ring-fill" id="scoreRingFill" cx="70" cy="70" r="60" stroke-dasharray="377" stroke-dashoffset="377" stroke="#10b981"/>
                    </svg>
                    <div class="score-text">
                        <span class="score-number" id="scoreNumber">0</span>
                        <span class="score-label"><?php esc_html_e( 'ATS Score', 'ats-resume-checker' ); ?></span>
                    </div>
                </div>
                <div class="score-details">
                    <h3 id="scoreTitle"><?php esc_html_e( 'Analysis Complete', 'ats-resume-checker' ); ?></h3>
                    <p id="scoreDescription"><?php esc_html_e( 'Your resume has been analyzed against the job description.', 'ats-resume-checker' ); ?></p>
                    <span class="score-verdict" id="scoreVerdict"></span>
                </div>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;"><?php esc_html_e( 'Detailed Breakdown', 'ats-resume-checker' ); ?></h3>
                <div id="breakdownContainer"></div>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;"><?php esc_html_e( 'Keyword Analysis', 'ats-resume-checker' ); ?></h3>
                <div id="keywordContainer"></div>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;"><?php esc_html_e( 'Suggestions', 'ats-resume-checker' ); ?></h3>
                <div id="suggestionsContainer"></div>
            </div>

            <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                <button class="btn btn-primary" id="downloadReportBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="7 10 12 15 17 10"/>
                        <line x1="12" y1="15" x2="12" y2="3"/>
                    </svg>
                    <?php esc_html_e( 'Download Report', 'ats-resume-checker' ); ?>
                </button>
                <button class="btn btn-outline" id="analyzeAgainBtn">
                    <?php esc_html_e( 'Analyze Again', 'ats-resume-checker' ); ?>
                </button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>