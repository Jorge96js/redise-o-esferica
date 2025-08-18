
<?php get_header(); ?>
        
    <main class="contenedor main-container mt-10">
        <h1><?php echo the_title(); ?></h1>
        <section class="section">
            <?php the_content(); ?>
        </section>
    </main>

<?php get_footer();?>