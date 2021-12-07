<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="section page">
        <h2 class="section-title">
            <?php the_title(); ?>
        </h2>
        <div class="section-body">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>