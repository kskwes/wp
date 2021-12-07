<?php get_header(); ?>

<main>
    <section class="section page">
        <!-- カテゴリー一覧 -->
        

        <!-- カテゴリー一覧 -->
        <div class="item-list">

            <?php
            if ( have_posts() ) :
            ?>

            <h2>
                <?php
                    if ( is_category() ) {
                        echo 'カテゴリー「' . single_cat_title( '', false ) . '」の投稿一覧';
                    } elseif ( is_tag() ) {
                        echo 'タグ「' . single_tag_title( '', false ) . '」の投稿一覧';
                    } elseif ( is_day() ) {
                        echo ' 「' . get_the_date( 'Y年n月j日' ) . '」の投稿一覧';
                    } elseif ( is_month() ) {
                        echo ' 「' . get_the_date( 'Y年n月' ) . '」の投稿一覧';
                    } elseif ( is_year() ) {
                        echo ' 「' . get_the_date( 'Y年' ) . '」の投稿一覧';
                    } else {
                        echo 'Blog';
                    }
                ?>
            </h2>
            <?php
                while ( have_posts() ) :
                    the_post();
            ?>

            <div class="item-box">
                <div href="#" class="d-flex item-box-inner">
                    <img src="http://placehold.jp/ababab/ffffff/250x200.png?text=blog" alt="">
                    <span class="item-box-info">
                        <a href="<?php the_permalink(); ?>" class="item-box-parts item-box-title"><?php the_title(); ?></a>
                        <span class="item-box-parts item-box-date"><?php the_date( 'Y/m/d' );?></span>
                        <span class="item-box-parts item-box-category"><?php the_category( ', ' ); ?></span>
                    </span>
                </div>
            </div>
            
            <?php
                endwhile;
            endif;
            ?>

            <!-- ページング -->
            <div class="text-center">
                <span>&lt; 前へ</span>
                <span>1 - 2 - 3 - 4</span>
                <span>次へ &gt;</span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>