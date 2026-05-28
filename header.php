<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        /* Immediate fix for logo switching */
        .logo .dark-logo { display: none !important; }
        .logo .light-logo { display: block !important; }
        [data-theme="dark"] .logo .dark-logo { display: block !important; }
        [data-theme="dark"] .logo .light-logo { display: none !important; }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo 2.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo light-logo" style="display: block;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo 1.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-logo dark-logo" style="display: none;">
            </a>

            <nav class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'ats-resume-checker' ); ?>">
                <?php
                $current_id = get_the_ID();
                $pages = array(
                    'home'           => __( 'Home', 'ats-resume-checker' ),
                    'analyzer'       => __( 'Analyzer', 'ats-resume-checker' ),
                    'job-match'      => __( 'Job Match', 'ats-resume-checker' ),
                    'interview-prep' => __( 'Interview Prep', 'ats-resume-checker' ),
                    'resume-builder' => __( 'Resume Builder', 'ats-resume-checker' ),
                    'templates'      => __( 'Templates', 'ats-resume-checker' ),
                );
                foreach ( $pages as $slug => $label ) :
                    $page = get_page_by_path( $slug, OBJECT, 'page' );
                    if ( ! $page ) {
                        // Try by title if path fails
                        $page = get_page_by_title( $label, OBJECT, 'page' );
                    }
                    $url = $page ? get_permalink( $page->ID ) : home_url( '/' . $slug . '/' );
                    $active = ( $page && $page->ID === $current_id ) || ( $slug === 'home' && is_front_page() ) ? ' active' : '';
                ?>
                    <a href="<?php echo esc_url( $url ); ?>" class="<?php echo esc_attr( $active ); ?>"><?php echo esc_html( $label ); ?></a>
                <?php endforeach; ?>
            </nav>

            <div class="header-actions">
                <button class="theme-toggle" id="themeToggle" aria-label="<?php esc_attr_e( 'Toggle dark mode', 'ats-resume-checker' ); ?>">
                    <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5"/>
                        <line x1="12" y1="1" x2="12" y2="3"/>
                        <line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/>
                        <line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                    <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                    </svg>
                </button>
                <?php
                $analyzer_page = get_page_by_path( 'analyzer', OBJECT, 'page' );
                $analyzer_url = $analyzer_page ? get_permalink( $analyzer_page->ID ) : home_url( '/analyzer/' );
                ?>
                <a href="<?php echo esc_url( $analyzer_url ); ?>" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                    <?php esc_html_e( 'Check Resume', 'ats-resume-checker' ); ?>
                </a>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="<?php esc_attr_e( 'Toggle mobile menu', 'ats-resume-checker' ); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>

    <nav class="mobile-nav" id="mobileNav" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Menu', 'ats-resume-checker' ); ?>">
        <?php foreach ( $pages as $slug => $label ) : 
            $page = get_page_by_path( $slug, OBJECT, 'page' );
            $url = $page ? get_permalink( $page->ID ) : home_url( '/' );
            $active = ( $page && $page->ID === $current_id ) || ( $slug === 'home' && is_front_page() ) ? ' active' : '';
        ?>
            <a href="<?php echo esc_url( $url ); ?>" class="<?php echo esc_attr( $active ); ?>"><?php echo esc_html( $label ); ?></a>
        <?php endforeach; ?>
    </nav>
</header>

<main id="main-content">