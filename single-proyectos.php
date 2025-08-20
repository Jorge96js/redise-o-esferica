<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="proyecto-title"><?php the_title(); ?></h1>
            
            <div class="proyecto-content">
                <?php the_content(); ?>
            </div>
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="proyecto-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>


        </article>

    <?php endwhile;
endif;
?>

<?php get_footer(); ?>
