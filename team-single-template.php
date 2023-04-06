<?php
/**
 * Template Name: Team Single Page Template
 * Template Post Type: post,team
 */
get_header();
?>

<main>
    <section>
        <div class="container">
            <h1 class="display-1 fw-bold">
                <?php the_field('name'); ?>
            </h1>
            <?php the_post_thumbnail(); ?>
            <p class="lead bg-white p-3">
                <?php the_field('bio'); ?>
            </p>

            <!-- using the featured image  -->

        </div>


    </section>

</main>


<?php
get_footer();
?>