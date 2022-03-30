<!-- carousel-style-one -->
<section class="carousel-style-one mar-bottom-100">
        <div class="single-item-carousel-overlay owl-control-none">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'meta_value' => '1',
                'meta_key' => 'featured_post'
            );
            $query = new WP_Query($args);
            while($query->have_posts()) {
                $query->the_post();
                ?>
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category();?></div>
                                            <div class="title"><h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
        </div>
    </section>
    <!-- carousel-style-one end -->