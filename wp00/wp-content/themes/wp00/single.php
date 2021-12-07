<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="section page side">
        <?php get_sidebar(); ?>

        <div class="item-detail">
            <h3 class="item-box-parts item-box-title"><?php the_title(); ?></h3>
            <span class="item-box-parts item-box-date"><?php the_date( 'Y-n-j' );?></span>
            <span class="item-box-parts item-box-category"><?php the_category( ', ' ); ?></span>
            <div class="item-detail-contents d-flex jc-between">
                <div class="item-images">
                    <div class="image-list-main">
                        <img src="http://placehold.jp/ababab/ffffff/500x350.png?text=item" alt="">
                    </div>
                </div>
            </div>
            <div class="item-detail-note">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </section>
</main>

<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>