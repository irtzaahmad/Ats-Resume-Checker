<?php
/**
 * The main template file
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
    <?php if ( have_posts() ) : ?>
        <div style="max-width: 800px; margin: 0 auto;">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header style="margin-bottom: 2rem;">
                        <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;"><?php the_title(); ?></h1>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin: 1.5rem 0;">
                                <?php the_post_thumbnail( 'large', array( 'style' => 'border-radius: var(--radius-md);' ) ); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    <div style="font-size: 1rem; line-height: 1.7; color: var(--color-text-secondary);">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Previous', 'ats-resume-checker' ),
                'next_text' => __( 'Next', 'ats-resume-checker' ),
            )); ?>
        </div>
    <?php else : ?>
        <div style="text-align: center; padding: 4rem 0;">
            <h2 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 1rem;"><?php esc_html_e( 'Nothing Found', 'ats-resume-checker' ); ?></h2>
            <p style="color: var(--color-text-secondary);"><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'ats-resume-checker' ); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
