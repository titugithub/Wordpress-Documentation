<?php get_header();?>

    <section class="slider-style-six">
        <div class="container">
            <div class="row">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);
                while($query->have_posts()) {
                    $query->the_post();
            ?>
                

                <?php
                    if( 1 > $query-> current_post) {
                ?>
                <div class="col-md-8 col-sm-12 col-xs-12 first-column">
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category();?></div>
                                            <div class="title"><h3><a href="<?php the_permalink();?>"> <?php the_title();?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date();?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author();?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 column">
                <?php
                    }
                    else if( 3 > $query->current_post) {
                ?>
                    
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category();?></div>
                                            <div class="title"><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></div>
                                            <div class="date"><span>On</span> <?php the_date();?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author();?></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                wp_reset_postdata();
            ?>

            </div>
        </div>
    </section>