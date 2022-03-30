<!-- Popular Post Based On Comment -->


<div class="row top">

<div class="col-eight md-six tab-full popular">
    <h3><?php _e( "Popular Posts", "philosophy" ); ?></h3>

    <div class="block-1-2 block-m-full popular__posts">
        <?php
        $philosophy_popular_posts = new WP_Query( array(
            'posts_per_page'      => 6,
            'ignore_sticky_posts' => 1,
            'orderby'             => "comment_count"
        ) );

        while ( $philosophy_popular_posts->have_posts() ) {
            $philosophy_popular_posts->the_post();
            ?>
            <article class="col-block popular__post">
                <a href="<?php the_permalink(); ?>" class="popular__thumb">
                    <?php the_post_thumbnail(); ?>
                </a>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <section class="popular__meta">
                    <span class="popular__author"><span><?php _e( "By", "philosophy" ); ?></span> <a
                                href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"> <?php the_author(); ?></a></span>
                    <span class="popular__date"><span><?php _e( "on", "philosophy" ); ?></span> <time
                                datetime="2017-12-19"><?php echo get_the_date(); ?></time></span>
                </section>
            </article>
            <?php
        }

        wp_reset_query();
        ?>

    </div> <!-- end popular_posts -->
</div> <!-- end popular -->