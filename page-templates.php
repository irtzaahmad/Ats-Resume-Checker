<?php
/**
 * Template Name: Templates
 * Description: The ATS Resume Templates gallery page
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header">
    <div class="container">
        <div class="page-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            <?php esc_html_e( 'Free Downloads', 'ats-resume-checker' ); ?>
        </div>
        <h1 class="page-title"><?php esc_html_e( 'ATS-Friendly Resume Templates', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Professionally designed templates optimized for Applicant Tracking Systems. No watermarks, no sign-up required.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="templates-filter">
            <button class="filter-btn active" data-filter="all"><?php esc_html_e( 'All', 'ats-resume-checker' ); ?></button>
            <button class="filter-btn" data-filter="modern"><?php esc_html_e( 'Modern', 'ats-resume-checker' ); ?></button>
            <button class="filter-btn" data-filter="professional"><?php esc_html_e( 'Professional', 'ats-resume-checker' ); ?></button>
            <button class="filter-btn" data-filter="creative"><?php esc_html_e( 'Creative', 'ats-resume-checker' ); ?></button>
            <button class="filter-btn" data-filter="executive"><?php esc_html_e( 'Executive', 'ats-resume-checker' ); ?></button>
        </div>

        <div class="templates-grid" id="templatesGrid">
            <?php
            $templates = array(
                array(
                    'name'  => __( 'Modern Clean', 'ats-resume-checker' ),
                    'tag'   => 'modern',
                    'image' => ATS_RESUME_CHECKER_URI . '/assets/images/template-modern.jpg',
                    'pages' => '1 Page',
                    'format' => 'DOCX / PDF',
                ),
                array(
                    'name'  => __( 'Professional Two-Column', 'ats-resume-checker' ),
                    'tag'   => 'professional',
                    'image' => ATS_RESUME_CHECKER_URI . '/assets/images/template-professional.jpg',
                    'pages' => '1-2 Pages',
                    'format' => 'DOCX / PDF',
                ),
                array(
                    'name'  => __( 'Creative Minimal', 'ats-resume-checker' ),
                    'tag'   => 'creative',
                    'image' => ATS_RESUME_CHECKER_URI . '/assets/images/template-creative.jpg',
                    'pages' => '1 Page',
                    'format' => 'DOCX / PDF',
                ),
                array(
                    'name'  => __( 'Executive Classic', 'ats-resume-checker' ),
                    'tag'   => 'executive',
                    'image' => ATS_RESUME_CHECKER_URI . '/assets/images/template-executive.jpg',
                    'pages' => '2 Pages',
                    'format' => 'DOCX / PDF',
                ),
            );

            foreach ( $templates as $template ) :
            ?>
                <div class="template-card" data-category="<?php echo esc_attr( $template['tag'] ); ?>">
                    <div class="template-image">
                        <img src="<?php echo esc_url( $template['image'] ); ?>" alt="<?php echo esc_attr( $template['name'] ); ?>">
                    </div>
                    <div class="template-info">
                        <h3 class="template-name"><?php echo esc_html( $template['name'] ); ?></h3>
                        <div class="template-meta">
                            <span><?php echo esc_html( $template['pages'] ); ?></span>
                            <span style="width:4px;height:4px;border-radius:50%;background:var(--color-text-muted);display:inline-block;"></span>
                            <span><?php echo esc_html( $template['format'] ); ?></span>
                        </div>
                        <div class="template-actions">
                            <?php 
                            $builder_page = get_page_by_path( 'resume-builder' );
                            $builder_url = $builder_page ? get_permalink( $builder_page->ID ) : home_url( '/resume-builder/' );
                            ?>
                            <a href="<?php echo esc_url( add_query_arg( 'template', $template['tag'], $builder_url ) ); ?>" class="btn btn-primary">
                                <?php esc_html_e( 'Use This Template', 'ats-resume-checker' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Preview Modal -->
<div id="previewModal" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.8); z-index:100; align-items:center; justify-content:center; padding:2rem;">
    <div style="background:var(--color-bg-card); border-radius:var(--radius-md); max-width:600px; width:100%; max-height:80vh; overflow:auto; position:relative;">
        <button id="closeModal" style="position:absolute; top:1rem; right:1rem; width:32px; height:32px; border-radius:var(--radius); background:var(--color-border-light); display:flex; align-items:center; justify-content:center; cursor:pointer; z-index:10; border:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
        <div style="padding:2rem; text-align:center;">
            <img id="modalImage" src="" alt="" style="max-width:100%; border-radius:var(--radius); margin-bottom:1rem;">
            <h3 id="modalTitle" style="font-size:1.25rem; font-weight:600; margin-bottom:0.5rem;"></h3>
            <p style="color:var(--color-text-secondary); margin-bottom:1.5rem;"><?php esc_html_e( 'ATS-optimized template with clean formatting and readable structure.', 'ats-resume-checker' ); ?></p>
            <a href="#" class="btn btn-primary" id="modalDownload">
                <?php esc_html_e( 'Download Template', 'ats-resume-checker' ); ?>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>