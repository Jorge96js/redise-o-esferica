<?php

    $proyectos = new WP_Query(array(
        'post_type' => 'proyectos',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    ));

    if ($proyectos->have_posts()) {
        while ($proyectos->have_posts()) {
            $proyectos->the_post();
            ?>
            <a href="<?php the_permalink(); ?>">
            <article class="projects__cards--card"  data-aos="fade-right"  data-aos-offset="200" data-aos-duration="500">
                <div class="projects__cards--image">
                    <img loading="lazy" src="<?php the_post_thumbnail( );?>" alt="">
                </div>
                <div class="projects__cards--body">
                    <h3><?php the_title() ?></h3>
                    <p>Santiago del Estero - 2025</p>
                    <p>Talleres y capacitaciones sobre agroecología y reciclaje.</p>
                </div>
            </article>
            </a>

       <?php }
        wp_reset_postdata();
    }