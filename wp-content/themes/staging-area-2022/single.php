<?php get_header(); ?>

    <div class="container py-4">
        <?php the_title('<h1 class="title-page">', '</h1>') ?>
        <?php the_content(); ?>


        <?= get_the_date( 'Y/m/d' ); ?>
    </div>

<?php get_footer(); ?>