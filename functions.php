<?php
/**
 * ATS Resume Checker Theme Functions
 *
 * @package ATS_Resume_Checker
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Theme version
define( 'ATS_RESUME_CHECKER_VERSION', '1.0.1' );
define( 'ATS_RESUME_CHECKER_DIR', get_template_directory() );
define( 'ATS_RESUME_CHECKER_URI', get_template_directory_uri() );

// Set API Key automatically (Delete this line after one page refresh)
update_option('ats_gemini_api_key', '');

/**
 * Theme Setup
 */
function ats_resume_checker_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'block-styles' );
    add_theme_support( 'align-wide' );

    // Register menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ats-resume-checker' ),
        'footer'  => __( 'Footer Menu', 'ats-resume-checker' ),
    ) );

    // Add image sizes
    add_image_size( 'template-thumb', 600, 800, true );
}
add_action( 'after_setup_theme', 'ats_resume_checker_setup' );

/**
 * Enqueue Scripts and Styles
 */
function ats_resume_checker_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'ats-resume-checker-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'ats-resume-checker-style',
        ATS_RESUME_CHECKER_URI . '/style.css',
        array(),
        ATS_RESUME_CHECKER_VERSION
    );

    // Theme JS
    wp_enqueue_script(
        'ats-resume-checker-main',
        ATS_RESUME_CHECKER_URI . '/assets/js/main.js',
        array(),
        ATS_RESUME_CHECKER_VERSION,
        true
    );

    // Common localization for all AI/AJAX features
    $ats_ajax_data = array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'ats_analyzer_nonce' ),
    );

    // Analyzer JS
    wp_enqueue_script(
        'ats-resume-checker-analyzer',
        ATS_RESUME_CHECKER_URI . '/assets/js/analyzer.js',
        array(),
        ATS_RESUME_CHECKER_VERSION,
        true
    );
    wp_enqueue_script(
        'pdfjs',
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js',
        array(),
        '3.11.174',
        true
    );
    wp_enqueue_script(
        'mammoth',
        'https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.6.0/mammoth.browser.min.js',
        array(),
        '1.6.0',
        true
    );
    wp_localize_script( 'ats-resume-checker-analyzer', 'ats_ajax', $ats_ajax_data );

    // Job Match JS
    wp_enqueue_script(
        'ats-resume-checker-job-match',
        ATS_RESUME_CHECKER_URI . '/assets/js/job-match.js',
        array( 'ats-resume-checker-analyzer' ),
        ATS_RESUME_CHECKER_VERSION,
        true
    );
    wp_localize_script( 'ats-resume-checker-job-match', 'ats_ajax', $ats_ajax_data );

    // Interview Prep JS
    wp_enqueue_script(
        'ats-resume-checker-interview-prep',
        ATS_RESUME_CHECKER_URI . '/assets/js/interview-prep.js',
        array(),
        ATS_RESUME_CHECKER_VERSION,
        true
    );
    wp_localize_script( 'ats-resume-checker-interview-prep', 'ats_ajax', $ats_ajax_data );

    // Resume Builder JS
    wp_enqueue_script(
        'ats-resume-checker-resume-builder',
        ATS_RESUME_CHECKER_URI . '/assets/js/resume-builder.js',
        array(),
        ATS_RESUME_CHECKER_VERSION,
        true
    );
    wp_localize_script( 'ats-resume-checker-resume-builder', 'ats_ajax', $ats_ajax_data );

    // FAQ JS (only on FAQ page)
    if ( is_page_template( 'page-faq.php' ) || is_page( 'faq' ) ) {
        wp_enqueue_script(
            'ats-resume-checker-faq',
            ATS_RESUME_CHECKER_URI . '/assets/js/faq.js',
            array(),
            ATS_RESUME_CHECKER_VERSION,
            true
        );
    }

    // Templates JS (only on templates page)
    if ( is_page_template( 'page-templates.php' ) || is_page( 'templates' ) ) {
        wp_enqueue_script(
            'ats-resume-checker-templates',
            ATS_RESUME_CHECKER_URI . '/assets/js/templates.js',
            array(),
            ATS_RESUME_CHECKER_VERSION,
            true
        );
    }

    // Contact form JS
    if ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
        wp_enqueue_script(
            'ats-resume-checker-contact',
            ATS_RESUME_CHECKER_URI . '/assets/js/contact.js',
            array(),
            ATS_RESUME_CHECKER_VERSION,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'ats_resume_checker_scripts' );

/**
 * Admin scripts for theme options
 */
function ats_resume_checker_admin_scripts( $hook ) {
    if ( 'appearance_page_ats-theme-options' === $hook ) {
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
    }
}
add_action( 'admin_enqueue_scripts', 'ats_resume_checker_admin_scripts' );

/**
 * Register widget areas
 */
function ats_resume_checker_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area 1', 'ats-resume-checker' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in footer column 1.', 'ats-resume-checker' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'ats_resume_checker_widgets_init' );

/**
 * Custom walker for primary menu
 */
class ATS_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $active = in_array( 'current-menu-item', $classes, true ) || in_array( 'current-page-item', $classes, true );
        $class = $active ? ' active' : '';
        $output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $class ) . '">' . esc_html( $item->title ) . '</a>';
    }
}

/**
 * Theme Options Page
 */
function ats_resume_checker_add_theme_page() {
    add_theme_page(
        __( 'Theme Options', 'ats-resume-checker' ),
        __( 'Theme Options', 'ats-resume-checker' ),
        'manage_options',
        'ats-theme-options',
        'ats_resume_checker_theme_options_page'
    );
}
add_action( 'admin_menu', 'ats_resume_checker_add_theme_page' );

function ats_resume_checker_theme_options_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'ATS Resume Checker - Theme Options', 'ats-resume-checker' ); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'ats_theme_options_group' );
            do_settings_sections( 'ats-theme-options' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function ats_resume_checker_register_settings() {
    register_setting( 'ats_theme_options_group', 'ats_contact_email', array( 'sanitize_callback' => 'sanitize_email' ) );
    register_setting( 'ats_theme_options_group', 'ats_github_url', array( 'sanitize_callback' => 'esc_url_raw' ) );
    register_setting( 'ats_theme_options_group', 'ats_twitter_url', array( 'sanitize_callback' => 'esc_url_raw' ) );
    register_setting( 'ats_theme_options_group', 'ats_email_url', array( 'sanitize_callback' => 'sanitize_email' ) );
    register_setting( 'ats_theme_options_group', 'ats_gemini_api_key', array( 'sanitize_callback' => 'sanitize_text_field' ) );

    add_settings_section( 'ats_general_section', __( 'General Settings', 'ats-resume-checker' ), '__return_empty_string', 'ats-theme-options' );

    add_settings_field( 'ats_gemini_api_key', __( 'Gemini API Key', 'ats-resume-checker' ), function() {
        $value = get_option( 'ats_gemini_api_key', '' );
        echo '<input type="password" name="ats_gemini_api_key" value="' . esc_attr( $value ) . '" class="regular-text">';
        echo '<p class="description">' . __( 'Enter your Gemini API key for AI features.', 'ats-resume-checker' ) . '</p>';
    }, 'ats-theme-options', 'ats_general_section' );

    add_settings_field( 'ats_contact_email', __( 'Contact Email', 'ats-resume-checker' ), function() {
        $value = get_option( 'ats_contact_email', 'contact@atsresumechecker.com' );
        echo '<input type="email" name="ats_contact_email" value="' . esc_attr( $value ) . '" class="regular-text">';
    }, 'ats-theme-options', 'ats_general_section' );

    add_settings_field( 'ats_github_url', __( 'GitHub URL', 'ats-resume-checker' ), function() {
        $value = get_option( 'ats_github_url', '#' );
        echo '<input type="url" name="ats_github_url" value="' . esc_attr( $value ) . '" class="regular-text">';
    }, 'ats-theme-options', 'ats_general_section' );

    add_settings_field( 'ats_twitter_url', __( 'Twitter URL', 'ats-resume-checker' ), function() {
        $value = get_option( 'ats_twitter_url', '#' );
        echo '<input type="url" name="ats_twitter_url" value="' . esc_attr( $value ) . '" class="regular-text">';
    }, 'ats-theme-options', 'ats_general_section' );

    add_settings_field( 'ats_email_url', __( 'Contact Email Link', 'ats-resume-checker' ), function() {
        $value = get_option( 'ats_email_url', 'contact@atsresumechecker.com' );
        echo '<input type="email" name="ats_email_url" value="' . esc_attr( $value ) . '" class="regular-text">';
    }, 'ats-theme-options', 'ats_general_section' );
}
add_action( 'admin_init', 'ats_resume_checker_register_settings' );

/**
 * Create required pages on theme activation
 */
function ats_resume_checker_activation() {
    $pages = array(
        'analyzer'       => array( 'title' => 'Analyzer', 'template' => 'page-analyzer.php' ),
        'job-match'      => array( 'title' => 'Job Match Tool', 'template' => 'page-job-match.php' ),
        'interview-prep' => array( 'title' => 'Interview Prep', 'template' => 'page-interview-prep.php' ),
        'resume-builder' => array( 'title' => 'Resume Builder', 'template' => 'page-resume-builder.php' ),
        'templates'      => array( 'title' => 'Templates', 'template' => 'page-templates.php' ),
        'faq'            => array( 'title' => 'FAQ', 'template' => 'page-faq.php' ),
        'contact'        => array( 'title' => 'Contact', 'template' => 'page-contact.php' ),
        'privacy'        => array( 'title' => 'Privacy Policy', 'template' => 'page-privacy.php' ),
    );

    foreach ( $pages as $slug => $page_data ) {
        $existing = get_page_by_path( $slug, OBJECT, 'page' );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $page_data['title'],
                'post_content' => '',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_name'    => $slug,
            ));
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        } else {
            // Update template just in case
            update_post_meta( $existing->ID, '_wp_page_template', $page_data['template'] );
        }
    }

    // Set front page
    $home_page = get_page_by_path( 'home', OBJECT, 'page' );
    if ( ! $home_page ) {
        $home_id = wp_insert_post( array(
            'post_title'   => 'Home',
            'post_content' => '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'home',
        ));
        if ( $home_id && ! is_wp_error( $home_id ) ) {
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $home_id );
        }
    } else {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_page->ID );
    }

    // Set blog page
    $blog_page = get_page_by_path( 'blog', OBJECT, 'page' );
    if ( ! $blog_page ) {
        $blog_id = wp_insert_post( array(
            'post_title'   => 'Blog',
            'post_content' => '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'blog',
        ));
        if ( $blog_id && ! is_wp_error( $blog_id ) ) {
            update_option( 'page_for_posts', $blog_id );
        }
    }
    
    // Flush rewrite rules to ensure new pages work
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'ats_resume_checker_activation' );
// Also run on init to ensure pages exist immediately
add_action( 'init', 'ats_resume_checker_activation' );

/**
 * Custom body classes
 */
function ats_resume_checker_body_classes( $classes ) {
    $classes[] = 'ats-theme';
    if ( is_front_page() ) {
        $classes[] = 'is-front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'ats_resume_checker_body_classes' );

/**
 * Custom excerpt length
 */
function ats_resume_checker_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'ats_resume_checker_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function ats_resume_checker_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'ats_resume_checker_excerpt_more' );

/**
 * Disable emoji scripts
 */
function ats_resume_checker_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'ats_resume_checker_disable_emojis' );

/**
 * Remove WordPress version from head
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Helper: Get theme option
 */
function ats_get_option( $key, $default = '' ) {
    $value = get_option( $key );
    return $value ? $value : $default;
}

/**
 * Helper: Active menu class
 */
function ats_is_active( $slug ) {
    $current_id = get_the_ID();
    $page = get_page_by_path( $slug, OBJECT, 'page' );
    if ( $page && $page->ID === $current_id ) {
        echo 'active';
    }
}

/**
 * Gemini AI API Helper
 */
function ats_call_gemini_api( $prompt ) {
    $api_key = get_option( 'ats_gemini_api_key' );
    if ( ! $api_key ) {
        return false;
    }

    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $api_key;

    $body = array(
        'contents' => array(
            array(
                'parts' => array(
                    array( 'text' => $prompt )
                )
            )
        )
    );

    $response = wp_remote_post( $url, array(
        'headers' => array( 'Content-Type' => 'application/json' ),
        'body'    => wp_json_encode( $body ),
        'timeout' => 60,
    ));

    if ( is_wp_error( $response ) ) {
        return false;
    }

    $result = json_decode( wp_remote_retrieve_body( $response ), true );
    if ( isset( $result['candidates'][0]['content']['parts'][0]['text'] ) ) {
        return $result['candidates'][0]['content']['parts'][0]['text'];
    }

    return false;
}

/**
 * AJAX: Job Match
 */
function ats_ajax_job_match() {
    check_ajax_referer( 'ats_analyzer_nonce', 'nonce' );

    $resume_text = isset($_POST['resume_text']) ? sanitize_textarea_field( $_POST['resume_text'] ) : '';
    $job_description = isset($_POST['job_description']) ? sanitize_textarea_field( $_POST['job_description'] ) : '';

    if ( empty( $resume_text ) || empty( $job_description ) ) {
        wp_send_json_error( array( 'message' => 'Please provide both resume and job description.' ) );
    }

    $ai_result = ats_call_gemini_api( "Analyze the following resume against the job description. Provide a match percentage (0-100), a list of missing skills, and suggestions for improvement. Format as JSON with keys: percentage, missing_skills (array), suggestions (array).\n\nResume: $resume_text\n\nJob Description: $job_description" );

    if ( $ai_result ) {
        // Clean AI output if it contains markdown blocks
        $ai_result = preg_replace('/^```json\s*|\s*```$/i', '', trim($ai_result));
        $data = json_decode( $ai_result, true );
        if ( $data ) {
            wp_send_json_success( $data );
        }
    }

    // Fallback: Rule-based logic
    $resume_words = array_unique( explode( ' ', strtolower( preg_replace( '/[^a-z0-9 ]/i', ' ', $resume_text ) ) ) );
    $jd_words = array_unique( explode( ' ', strtolower( preg_replace( '/[^a-z0-9 ]/i', ' ', $job_description ) ) ) );
    
    $common_words = array( 'the', 'and', 'a', 'to', 'in', 'is', 'for', 'of', 'with', 'on', 'at', 'by', 'an', 'be', 'as' );
    $jd_keywords = array_diff( $jd_words, $common_words );
    
    $matches = array_intersect( $resume_words, $jd_keywords );
    $percentage = count($jd_keywords) > 0 ? round( ( count( $matches ) / count( $jd_keywords ) ) * 100 ) : 0;
    
    $missing_skills = array_slice( array_diff( $jd_keywords, $resume_words ), 0, 10 );
    
    wp_send_json_success( array(
        'percentage'     => $percentage,
        'missing_skills' => $missing_skills,
        'suggestions'    => array( 'Add more keywords related to the job description.', 'Highlight your relevant experience.', 'Use action verbs.' ),
        'is_fallback'    => true
    ));
}
add_action( 'wp_ajax_ats_job_match', 'ats_ajax_job_match' );
add_action( 'wp_ajax_nopriv_ats_job_match', 'ats_ajax_job_match' );

/**
 * AJAX: Interview Prep - Advanced AI Researcher Edition
 */
function ats_ajax_interview_prep() {
    check_ajax_referer( 'ats_analyzer_nonce', 'nonce' );

    $job_role = isset($_POST['job_role']) ? sanitize_text_field( $_POST['job_role'] ) : '';

    if ( empty( $job_role ) ) {
        wp_send_json_error( array( 'message' => 'Please provide a job role.' ) );
    }

    $prompt = "TASK: Act as a World-Class Career Coach. Provide 20 UNIQUE and HIGH-IMPACT interview questions for a '$job_role' position. 

CRITICAL: 
1. DO NOT repeat questions. 
2. Cover Technical, Behavioral, and Leadership aspects.
3. For EACH question provide:
   - 'question': The question text.
   - 'strategy': 1 sentence strategy.
   - 'answer': 2 sentences professional answer.
   - 'keywords': 3 industry keywords.

OUTPUT: Return ONLY a valid JSON array of categories. Category object must have 'category_name' and 'questions' array. NO preamble.";

    $ai_result = ats_call_gemini_api( $prompt );

    if ( $ai_result ) {
        $ai_result = preg_replace('/^```json\s*|\s*```$/i', '', trim($ai_result));
        $data = json_decode( $ai_result, true );
        if ( $data && json_last_error() === JSON_ERROR_NONE ) {
            wp_send_json_success( $data );
        }
    }

    // Diverse, Non-Repetitive Fallback
    $fallback_data = array(
        array(
            'category_name' => 'Behavioral & Culture',
            'questions' => array(
                array('question' => "Tell me about a time you faced a major challenge as a $job_role?", 'strategy' => "Use STAR method.", 'answer' => "I encountered a project delay and resolved it by reallocating resources.", 'keywords' => "Problem-solving, Resilience"),
                array('question' => "Why do you want to work here?", 'strategy' => "Align goals with company mission.", 'answer' => "Your focus on innovation matches my professional drive.", 'keywords' => "Alignment, Motivation"),
                array('question' => "How do you handle workplace conflict?", 'strategy' => "Show maturity.", 'answer' => "I prefer open dialogue and seeking common ground.", 'keywords' => "Communication, Maturity")
            )
        ),
        array(
            'category_name' => 'Technical & Methodology',
            'questions' => array(
                array('question' => "How do you ensure quality in your $job_role tasks?", 'strategy' => "Focus on standards.", 'answer' => "I follow strict SOPs and conduct regular self-audits.", 'keywords' => "Quality, Standards"),
                array('question' => "What tools do you find most effective?", 'strategy' => "Mention modern tools.", 'answer' => "I find industry-standard platforms best for efficiency.", 'keywords' => "Tools, Efficiency")
            )
        )
    );

    wp_send_json_success( $fallback_data );
}
add_action( 'wp_ajax_ats_interview_prep', 'ats_ajax_interview_prep' );
add_action( 'wp_ajax_nopriv_ats_interview_prep', 'ats_ajax_interview_prep' );

/**
 * AJAX: Resume Builder - SaaS Pro Edition (JSON Structured Data)
 */
function ats_ajax_resume_builder() {
    check_ajax_referer( 'ats_analyzer_nonce', 'nonce' );

    $type = isset($_POST['type']) ? sanitize_text_field($_POST['type']) : 'improve';

    if ($type === 'bullets') {
        $title = isset($_POST['title']) ? sanitize_text_field($_POST['title']) : 'Professional';
        $prompt = "Generate 4 professional, impact-driven resume bullet points for the job title: $title. Start each with a strong action verb (e.g., Developed, Spearheaded, Optimized). Do not include any introductory text, just the bullet points.";
        $ai_result = ats_call_gemini_api( $prompt );
        if ( ! $ai_result ) {
            wp_send_json_error( array( 'error' => 'AI failed to generate bullet points. Please check your API key.' ) );
        }
        wp_send_json_success( array( 'content' => trim($ai_result) ) );
    } elseif ($type === 'summary') {
        $titles = isset($_POST['titles']) ? sanitize_text_field($_POST['titles']) : '';
        $prompt = "Write a 3-sentence professional resume summary for someone with experience in: $titles. Focus on value proposition and key achievements. Professional tone. No bullet points.";
        $ai_result = ats_call_gemini_api( $prompt );
        if ( ! $ai_result ) {
            wp_send_json_error( array( 'error' => 'AI failed to generate summary. Please check your API key.' ) );
        }
        wp_send_json_success( array( 'content' => trim($ai_result) ) );
    } elseif ($type === 'skills') {
        $titles = isset($_POST['titles']) ? sanitize_text_field($_POST['titles']) : '';
        $prompt = "Suggest 10-15 relevant professional skills for a resume based on these roles: $titles. Return as a comma-separated list only. No other text.";
        $ai_result = ats_call_gemini_api( $prompt );
        if ( ! $ai_result ) {
            wp_send_json_error( array( 'error' => 'AI failed to suggest skills. Please check your API key.' ) );
        }
        wp_send_json_success( array( 'content' => trim($ai_result) ) );
    }

    // Default 'improve' logic (old version compatibility)
    $info = isset($_POST['info']) ? $_POST['info'] : array();
    $target_role = $info['role'] ?? 'Professional';

    $prompt = "TASK: Act as a World-Class Executive Resume Writer. Transform the provided user data into a high-end, ATS-optimized resume for a '$target_role' position.

CRITICAL FORMATTING RULES:
1. NO BULLET POINTS in the 'summary' field. It must be a clean, 2-3 line paragraph.
2. AUTO-FILL EMPTY FIELDS: If 'experience', 'projects', or 'skills' are empty or too short, you MUST generate realistic, high-quality professional content appropriate for a $target_role.
3. CAPITALIZATION: Ensure the first letter of every sentence and bullet point is capitalized.
4. ACTION VERBS: Start every bullet point in Experience and Projects with a strong action verb (e.g., 'Spearheaded', 'Optimized', 'Developed').
5. NO DUMMY TEXT: Replace 'i make things' with 'Engineered scalable solutions...'.

USER DATA:
- Target Role: $target_role
- Name: " . ($info['name'] ?? '') . "
- Email: " . ($info['email'] ?? '') . "
- Phone: " . ($info['phone'] ?? '') . "
- Location: " . ($info['location'] ?? '') . "
- Summary: " . ($info['summary'] ?? '') . "
- Experience: " . ($info['experience'] ?? '') . "
- Projects: " . ($info['projects'] ?? '') . "
- Education: " . ($info['education'] ?? '') . "
- Skills: " . ($info['skills'] ?? '') . "
- Certifications: " . ($info['certs'] ?? '') . "

OUTPUT: Return ONLY a valid JSON object with keys: role, name, email, phone, location, summary, experience, projects, education, skills, certs. No markdown formatting.";

    
    $ai_result = ats_call_gemini_api( $prompt );

    if ( $ai_result ) {
        $ai_result = preg_replace('/^```json\s*|\s*```$/i', '', trim($ai_result));
        $ai_result = trim($ai_result);
        
        $clean_data = json_decode($ai_result, true);
        if ($clean_data && json_last_error() === JSON_ERROR_NONE) {
            wp_send_json_success( array( 'improved_info' => $clean_data ) );
        }
    }

    wp_send_json_success( array( 'improved_info' => $info ) );
}
add_action( 'wp_ajax_ats_resume_builder', 'ats_ajax_resume_builder' );
add_action( 'wp_ajax_nopriv_ats_resume_builder', 'ats_ajax_resume_builder' );
