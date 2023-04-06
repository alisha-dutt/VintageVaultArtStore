<?php
/**
 * Template Name: Team Page Template
 * Template Post Type: page
 */
get_header();
?>
<main>
<section>
        <div class="container text-center bg-custom mb-4 pb-3">
            <h1 class="display-1 fw-bold">
                <?php the_field('masthead_title'); ?>
            </h1>
            <img src =" <?php the_field('masthead_image'); ?> ">
            <p class ="lead bg-white p-3 text-center "><?php the_field('intro_text'); ?></p>
        </div>
    </section>
     <section>
        <?php 
        $query = new WP_Query(array('post_type'=> 'team', 'post_per_page'=>10,'order' =>'asc'));
        while($query -> have_posts()) : $query->the_post();
        ?>
        <div>
            <div class ="img-holder">
            <a href ="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
            </div>
           
            <h4><?php the_field('title'); ?></h4>
            <a href ="<?php the_permalink(); ?>"> See More</a>
        </div>
        <?php 
        wp_reset_postdata();
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
</main>

<?php
get_footer();
?>
